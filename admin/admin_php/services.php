<?php
include "config.php";
/*----------------------------------------------
             ADMIN PANEL
----------------------------------------------*/

/******************    INSERT VALUES       **********************/

if(isset($_REQUEST['addService'])) {
    $service_name = $_REQUEST['service_name'];
    $description = $_REQUEST['description'];
    $uploaddir = '../uploads/service_images/';
    $service_image = basename($_FILES['service_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($service_image, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["addService"])) {
        $check = getimagesize($_FILES["service_image"]["tmp_name"]);
        if ($check !== false) {
            $error_msg = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_msg = "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir . $service_image)) {
        $error_msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["service_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["service_image"]["tmp_name"], $uploaddir . $service_image)) {
            $error_msg = "The file " . basename($_FILES["service_image"]["name"]) . " has been uploaded.";
        } else {
            $error_msg = "Sorry, there was an error uploading your file.";
        }
    }
    if ($error_msg) {
        $sql = "INSERT INTO services(service_name, description, service_image) VALUES ('$service_name','$description','$service_image')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../addService.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../addService.php?error') </script>";
        }

    }
}



/******************    GET DYNAMIC VALUES       **********************/

$getServiceList =  "SELECT * FROM services";
$result = mysqli_query($conn, $getServiceList);
$totalservices = mysqli_num_rows($result);

/******************   UPDATE SERVICE VALUE      **********************/


if(isset($_REQUEST['updateService']))
{
    $service_id =$_REQUEST['service_id'];
    $service_name = $_REQUEST['service_name'];

    $description = $_REQUEST['description'];
    $sql = "UPDATE services SET service_name = '$service_name', description = '$description' WHERE id = $service_id ";
    if (mysqli_query($conn, $sql)) {
        echo "<script> window.location.replace('../updateService.php?id=$service_id&success')</script>";
    } else {
        echo "<script>window.location.replace('../updateService.php?id=$service_id&error') </script>";
    }
}

/******************   UPDATE SERVICE IMAGE     **********************/

if(isset($_REQUEST['updateServiceImage']))
{
    $service_id =$_REQUEST['service_id'];
    $uploaddir = '../uploads/service_images/';
    $service_image = basename($_FILES['service_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($service_image, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["updateServiceImage"])) {
        $check = getimagesize($_FILES["service_image"]["tmp_name"]);
        if ($check !== false) {
            $error_msg = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_msg = "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir . $service_image)) {
        $error_msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["service_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["service_image"]["tmp_name"], $uploaddir . $service_image)) {
            $error_msg = "The file " . basename($_FILES["service_image"]["name"]) . " has been uploaded.";
        } else {
            $error_msg = "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg)
    {
        $sql = "UPDATE services SET service_image = '$service_image' WHERE id = $service_id ";
        if (mysqli_query($conn, $sql)) {
            $success = 'Updated Succesfully !';
            echo "<script> window.location.replace('../updateService.php?id=$service_id&success')</script>";
        } else {
            $error = 'Update record failed !';
            echo "<script>window.location.replace('../updateService.php?id=$service_id&error') </script>";
        }
    }

}


/******************    DELETE VALUE      **********************/

if(isset($_GET['id']))
{
    $service_id=$_GET['id'];
    $getService = "SELECT * FROM services WHERE id = $service_id";
    $getServiceListValue = mysqli_query($conn,$getService);
    while ($row = mysqli_fetch_assoc($getServiceListValue))
    {
        $service_image = $row['service_image'];
    }
   /* echo $service_image;*/
    $deleteService="DELETE FROM services WHERE id = $service_id";
    $delete=mysqli_query($conn,$deleteService);

    if(isset($delete)) {
        unlink('../uploads/service_images/'.$service_image);
        echo "<script> window.location.replace('../services.php')</script>";
    } else {
        echo "<script> window.location.replace('../services.php')</script>";
    }
 }




/*****************   GET SERVICE VALUE     ******************/
$getServiceValue =  "SELECT * FROM services ORDER BY id DESC ; ";
/*$getServiceValue =  "SELECT * FROM services ORDER BY id DESC  LIMIT 6; ";*/
$getServiceValueList = mysqli_query($conn, $getServiceValue);

