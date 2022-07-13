<?php
include "config.php";

/**************    INSERTING QUERY FOR REVIEWS  (FRONT END)    **********************/

if(isset($_REQUEST['addReviews']))
{
    $reviewers_name=$_REQUEST['username'];
    $blog_id=$_REQUEST['blog_id'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $sql = "INSERT INTO blog_details( blog_id, name, email, message) VALUES ('$blog_id','$reviewers_name','$email','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> window.location.replace('../../blogs.php?success')</script>";
    } else {
        echo "<script>window.location.replace('../../blogs.php?error') </script>";
    }

}


/**************    INSERTING QUERY FOR BLOG     **********************/

if(isset($_REQUEST['addBlog']))
{
    $title=$_REQUEST['blog_title'];
    $name=$_REQUEST['posted_by'];
    $description=$_REQUEST['description'];
    $uploaddir = '../uploads/blog_images/';
    $blog_image=basename($_FILES['blog_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($blog_image,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["addBlog"])) {
        $check = getimagesize($_FILES["blog_image"]["tmp_name"]);
        if($check !== false) {
            $error_msg =  "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else {
            $error_msg =   "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir.$blog_image)) {
        $error_msg =   "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["blog_image"]["size"] > 500000) {
        $error_msg =   "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $error_msg =   "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error_msg =   "Sorry, your file was not uploaded.";

        // if everything is ok, try to upload file
    }
    else {
        if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $uploaddir.$blog_image)) {
            $error_msg =   "The file ". basename( $_FILES["blog_image"]["name"]). " has been uploaded.";
        }
        else {
            $error_msg =   "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg) {
        $sql = "INSERT INTO blog( title, blog_image,posted_by,description ) VALUES ('$title','$blog_image','$name','$description')";

        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../addBlog.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../addBlog.php?error') </script>";
        }
    }

}

/******************   UPDATE BLOG VALUE      **********************/


if(isset($_REQUEST['updateBlog']))
{
    $blog_id =$_REQUEST['blog_id'];
    $blog_name = $_REQUEST['blog_title'];
    $status = $_REQUEST['blog_status'];
    $description = $_REQUEST['description'];
    $sql = "UPDATE blog SET title = '$blog_name', description = '$description',status = '$status' WHERE id = $blog_id ";
    if (mysqli_query($conn, $sql)) {
        echo "<script> window.location.replace('../blogDetails.php?id=$blog_id&success')</script>";
    } else {
        echo "<script>window.location.replace('../blogDetails.php?id=$blog_id&error') </script>";
    }

}

if(isset($_POST['status']))
{
    $blog_detail_id=$_POST['id'];
    $blog_id =$_REQUEST['blog_detail_id'];
    $status = $_POST['status'];
    $reviewDetail = "UPDATE blog_detail SET status = '$status' WHERE id = $blog_detail_id ";
    if (mysqli_query($conn, $reviewDetail)) {
        echo "<script> window.location.replace('../blogDetails.php?id=$blog_id')</script>";
    } else {
        echo "<script>window.location.replace('../blogDetails.php?id=$blog_id') </script>";
    }
}

/******************   UPDATE BLOG IMAGE     **********************/

if(isset($_REQUEST['updateBlogImage']))
{
    $blog_id =$_REQUEST['blog_id'];

    $uploaddir = '../uploads/blog_images/';
    $blog_image = basename($_FILES['blog_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($blog_image, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["updateBlogImage"])) {
        $check = getimagesize($_FILES["blog_image"]["tmp_name"]);
        if ($check !== false) {
            $error_msg = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_msg = "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir . $blog_image)) {
        $error_msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["blog_image"]["size"] > 500000) {
        $error_msg = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $error_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error_msg = "Sorry, your file was not uploaded.";

        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $uploaddir . $blog_image)) {
            $error_msg = "The file " . basename($_FILES["blog_image"]["name"]) . " has been uploaded.";
        } else {
            $error_msg = "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg)
    {
        $sql = "UPDATE blog SET blog_image = '$blog_image' WHERE id = $blog_id ";
        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../blogDetails.php?id=$blog_id&success')</script>";
        } else {
            echo "<script>window.location.replace('../blogDetails.php?id=$blog_id&error') </script>";
        }
    }

}


/******************    DELETE VALUE      **********************/

if(isset($_GET['blog_id']))
{
    $blog_id=$_GET['blog_id'];
    $getBlog = "SELECT * FROM blog WHERE id = $blog_id";
    $getBlogListValue = mysqli_query($conn,$getBlog);
    while ($row = mysqli_fetch_assoc($getBlogListValue))
    {
        $blog_image = $row['blog_image'];
    }
    /* echo $service_image;*/
    $deleteBlog="DELETE FROM blog WHERE id = $blog_id";
    $delete=mysqli_query($conn,$deleteBlog);

    if(isset($delete)) {
        unlink('../uploads/blog_images/'.$blog_image);
        echo "<script> window.location.replace('../blog.php?success')</script>";
    } else {
        echo "<script> window.location.replace('../blog.php?error')</script>";
    }
}






/******************    DELETE VALUE      **********************/

if(isset($_GET['id']))
{
    $blog_id=$_GET['id'];
    $deleteBlogDetails="DELETE FROM blog_details WHERE id = $blog_id";
    $deleteReview=mysqli_query($conn,$deleteBlogDetails);
    if(isset($deleteReview)) {
        echo "<script> window.location.replace('../blogDetails.php?id=$blog_id&success')</script>";
    } else {
        echo "<script> window.location.replace('../blogDetails.php?id=$blog_id&error')</script>";
    }
}



/******************    GET DYNAMIC BLOG VALUES      **********************/

$getBlogList =  "SELECT * FROM blog";
$result = mysqli_query($conn, $getBlogList);

/************    RECENT REVIEWS      ****************/

$recentBlog =  "SELECT * FROM blog_details ORDER  BY id  LIMIT 3";
$recentReviewList = mysqli_query($conn, $recentBlog);

/*********      (FRONT END) GET VALUES   **************/

$getBlogDetailList =  "SELECT * FROM  blog WHERE status = 'enable' ";
$blogDetailList = mysqli_query($conn, $getBlogDetailList);
while($row = mysqli_fetch_assoc($blogDetailList)) {
 $blog_id = $row['id'];
}

$getReviews =  "SELECT * FROM  blog_details WHERE blog_id = $blog_id AND status = 'Approved' ";
/*$getReviews =  "SELECT * FROM  blog_details WHERE blog_id = $blog_id AND status = 'Approved'";*/
$reviews = mysqli_query($conn, $getReviews);