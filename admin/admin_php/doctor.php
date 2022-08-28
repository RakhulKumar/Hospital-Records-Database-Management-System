<?php
include "config.php";
if(isset($_REQUEST['addDoctor']))
{
    $doctor_name=$_REQUEST['doctor_name'];
    $department_name=$_REQUEST['department_name'];
    $description=$_REQUEST['description'];
    $education=$_REQUEST['education'];
    $experience=$_REQUEST['experience'];
    $profession=$_REQUEST['profession'];
    $address=$_REQUEST['address'];
    $mobile=$_REQUEST['mobile'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $skype=$_REQUEST['skype'];
    $working_days=$_REQUEST['working_days'];
//    $working_time=$_REQUEST['working_time'];
//    $working_time2=$_REQUEST['working_time2'];
//    $working_time3=$_REQUEST['working_time3'];
//    $working_time4=$_REQUEST['working_time4'];
//    $working_time5=$_REQUEST['working_time5'];
    $status=$_REQUEST['status'];

    $uploaddir = '../uploads/doctor_images/';
    $doctor_image=basename($_FILES['doctor_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($doctor_image,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["addDoctor"])) {
        $check = getimagesize($_FILES["doctor_image"]["tmp_name"]);
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
    if (file_exists($uploaddir.$doctor_image)) {
        $error_msg =   "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["doctor_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["doctor_image"]["tmp_name"], $uploaddir.$doctor_image)) {
            $error_msg =   "The file ". basename( $_FILES["doctor_image"]["name"]). " has been uploaded.";
        }
        else {
            $error_msg =   "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg)
    {
            $sql = "INSERT INTO doctors(doctor_name, department_name,description, doctor_image, education, experience, profession, address, mobile, email, password, skype, working_days, status) 
 VALUES ('$doctor_name','$department_name','$description','$doctor_image','$education','$experience','$profession','$address','$mobile','$email','$password','$skype','$working_days','$status')";
                   if (mysqli_query($conn, $sql))
                {

                echo "<script> window.location.replace('../addDoctor.php?success')</script>";


            } else {
                echo "<script>window.location.replace('../addDoctor.php?error') </script>";
            }

    }
        $sql = "INSERT INTO login(name,username,gender,password,city,mobile,role,) VALUES ('$doctor_name',$email','male','$password','$address','$mobile','doctor')";
        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../addDoctor.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../addDoctor.php?error') </script>";
        }


        $insert="INSERT INTO time (doctor_id,doctor_name) SELECT id,doctor_name FROM doctors";
        if(mysqli_query($conn,$insert))
        {
            echo '1';
        }else{
            echo '2';
        }

 }



//if(isset($_GET['addTime']))
//{
//    $doctor_name=$_REQUEST['doctor_name'];
//
//
//    $time_insert="INSERT INTO time (time,status) VALUES ('$working_time1','Available'),('$working_time2','Available'),
//                                                         ('$working_time3','Available'),('$working_time4','Available'),
//                                                         ('$working_time5','Available'),";
//    if (mysqli_query($conn,$time_insert))
//    {
//        echo '1';
//    }else
//    {
//        echo '2';
//    }
//}


/*******************insert Time **************************/
//if(isset($_REQUEST['updateTime']))
//{
//    $doctor_id =$_REQUEST['doctor_id'];
//    $working_time1=$_REQUEST['form_working_time1'];
//    $working_time2=$_REQUEST['form_working_time2'];
//    $working_time3=$_REQUEST['form_working_time3'];
//    $working_time4=$_REQUEST['form_working_time4'];
//    $working_time5=$_REQUEST['form_working_time5'];
//
//    $sql = " UPDATE time SET time = '$working_time1',status = 'Available'  WHERE doctor_id = $doctor_id ";
//    if (mysqli_query($conn, $sql)) {
//        echo 'Updated Succesfully !';
//        echo "<script> window.location.replace('../doctorDetails.php?id=$doctor_id&add')</script>";
//    } else {
//        echo 'Update record failed !';
//        echo "<script>window.location.replace('../doctorDetails.php?id=$doctor_id&error') </script>";
//    }
//}




/******************   UPDATE DOCTOR DETAILS      **********************/


if(isset($_REQUEST['updateDoctor']))
{
    $doctor_id =$_REQUEST['doctor_id'];
    $doctor_name=$_REQUEST['form_doctor_name'];
    $department_name=$_REQUEST['form_department'];
    $description=$_REQUEST['form_description'];
    $education=$_REQUEST['form_education'];
    $experience=$_REQUEST['form_experience'];
    $profession=$_REQUEST['form_profession'];
    $address=$_REQUEST['form_address'];
    $mobile=$_REQUEST['form_mobile'];
    $email=$_REQUEST['form_email'];
    $skype=$_REQUEST['form_skype'];
    $working_days=$_REQUEST['form_working_days'];
    $working_time=$_REQUEST['form_working_time'];
    $status=$_REQUEST['form_status'];

    $sql = " UPDATE doctors SET doctor_name = '$doctor_name',department_name = '$department_name',description = '$description',education = '$education',experience = $experience,profession = '$profession',address = '$address',mobile = $mobile,email = '$email',skype = '$skype',working_days = '$working_days',working_time = '$working_time',status = '$status'  WHERE id = $doctor_id ";
    if (mysqli_query($conn, $sql)) {
    echo 'Updated Succesfully !';
        echo "<script> window.location.replace('../doctorDetails.php?id=$doctor_id&success')</script>";
    } else {
       echo 'Update record failed !';
        echo "<script>window.location.replace('../doctorDetails.php?id=$doctor_id&error') </script>";
    }

    $update="UPDATE time SET doctor_name='$doctor_name',working_time='$working_time' WHERE doctor_id = $doctor_id";
    if(mysqli_query($conn,$update))
    {
        echo '1';
    }else{
        echo '2';
    }
}

if(isset($_REQUEST['updatePersonal']))
{
    $doctor_id =$_REQUEST['doctor_id'];
    $doctor_name=$_REQUEST['form_doctor_name'];
    $department_name=$_REQUEST['form_department'];
    $description=$_REQUEST['form_description'];
    $education=$_REQUEST['form_education'];
    $experience=$_REQUEST['form_experience'];
    $profession=$_REQUEST['form_profession'];
    $address=$_REQUEST['form_address'];
    $mobile=$_REQUEST['form_mobile'];
    $email=$_REQUEST['form_email'];
    $skype=$_REQUEST['form_skype'];
    $working_days=$_REQUEST['form_working_days'];
    $working_time=$_REQUEST['form_working_time'];

    $sql = " UPDATE doctors SET doctor_name = '$doctor_name',department_name = '$department_name',description = '$description',education = '$education',experience = $experience,profession = '$profession',address = '$address',mobile = $mobile,email = '$email',skype = '$skype',working_days = '$working_days',working_time = '$working_time'  WHERE id = $doctor_id ";
    if (mysqli_query($conn, $sql)) {

        echo "<script> window.location.replace('../doctorPersonalInfo.php?value=$email&success')</script>";
    } else {

        echo "<script>window.location.replace('../doctorPersonalInfo.php?value=$email&error') </script>";
    }
}


/******************    DELETE VALUE      **********************/

if(isset($_GET['id']))
{
    $doctor_id=$_GET['id'];
    $getDoctor = "SELECT * FROM doctors WHERE id = $doctor_id";
    $getDoctorListValue = mysqli_query($conn,$getDoctor);
    while ($row = mysqli_fetch_assoc($getDoctorListValue))
    {
        $doctor_image = $row['doctor_image'];
    }
    $deleteDoctor="DELETE FROM doctors WHERE id = $doctor_id";
    $delete=mysqli_query($conn,$deleteDoctor);

    if(isset($delete)) {
        unlink('../uploads/doctor_images/'.$doctor_image);
        echo "<script> window.location.replace('../doctors.php')</script>";
    } else {
        echo "<script> window.location.replace('../doctors.php')</script>";
    }
}

/******************   UPDATE DOCTOR IMAGE     **********************/


if(isset($_REQUEST['updateDoctorImage']))
{
    $doctor_id =$_REQUEST['doctor_id'];
    $uploaddir = '../uploads/doctor_images/';
    $doctor_image = basename($_FILES['doctor_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($doctor_image, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["updateDoctorImage"])) {
        $check = getimagesize($_FILES["doctor_image"]["tmp_name"]);
        if ($check !== false) {
            $error_msg = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_msg = "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir . $doctor_image)) {
        $error_msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["doctor_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["doctor_image"]["tmp_name"], $uploaddir . $doctor_image)) {
            $error_msg = "The file " . basename($_FILES["doctor_image"]["name"]) . " has been uploaded.";
        } else {
            $error_msg = "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg)
    {
        $sql = "UPDATE doctors SET doctor_image = '$doctor_image' WHERE id = $doctor_id ";
        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../doctorDetails.php?id=$doctor_id&success')</script>";
        } else {
            echo "<script>window.location.replace('../doctorDetails.php?id=$doctor_id&error') </script>";
        }
    }

}
if(isset($_REQUEST['updatePersonalImage']))
{
    $doctor_id =$_REQUEST['doctor_id'];
    $uploaddir = '../uploads/doctor_images/';
    $doctor_image = basename($_FILES['doctor_image']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($doctor_image, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["updatePersonalImage"])) {
        $check = getimagesize($_FILES["doctor_image"]["tmp_name"]);
        if ($check !== false) {
            $error_msg = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $error_msg = "File is not an image.";
            $uploadOk = 0;
        }

    }

    // Check if file already exists
    if (file_exists($uploaddir . $doctor_image)) {
        $error_msg = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["doctor_image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["doctor_image"]["tmp_name"], $uploaddir . $doctor_image)) {
            $error_msg = "The file " . basename($_FILES["doctor_image"]["name"]) . " has been uploaded.";
        } else {
            $error_msg = "Sorry, there was an error uploading your file.";
        }
    }
    if($error_msg)
    {
        $sql = "UPDATE doctors SET doctor_image = '$doctor_image' WHERE id = $doctor_id ";
        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../doctorDetails.php?id=$doctor_id&success')</script>";
        } else {
            echo "<script>window.location.replace('../doctorDetails.php?id=$doctor_id&error') </script>";
        }
    }

}




/******************    GET DYNAMIC VALUES       **********************/

$getDoctorList =  "SELECT * FROM doctors";
$result = mysqli_query($conn, $getDoctorList);
$totaldoctors = mysqli_num_rows($result);

/*****************   GET DOCTOR VALUE     ******************/
$getDoctorValue =  "SELECT * FROM doctors ORDER BY id ASC ; ";
$getDoctorValueList = mysqli_query($conn, $getDoctorValue);

/********************* Time Picker ************************/
$getTime =  "SELECT * FROM times WHERE status='Available'";
$res = mysqli_query($conn, $getTime);
$time = mysqli_num_rows($res);


if(isset($_REQUEST['addTime'])) {
    $time1 = $_REQUEST['working_time1'];
    $time2 = $_REQUEST['working_time2'];
    $time3 = $_REQUEST['working_time3'];
    $time4 = $_REQUEST['working_time4'];
    $time5 = $_REQUEST['working_time5'];
    $doctor_id = $_REQUEST['doctor_name'];


//    $check = "SELECT * FROM patient_appointments WHERE  doctor_id='$_POST[doctor_name]' AND appointment_date = '$_POST[form_appontment_date]' AND
//          appointment_time ='$_POST[form_appontment_time]' AND status='enable'";
//    $rs = mysqli_query($conn, $check);
//    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
//    if ($data[0] > 1) {
//        echo "<script>window.location.replace('../../appointment.php?alert') </script>";
//    } else
//        {
//        $insert_doc = "SELECT doctor_id FROM patient_appointmnets WHERE doctor_id='$_POST[doctor_name]'";
//        $result = mysqli_query($conn, $insert_doc);
//        $data1 = mysqli_fetch_array($result, MYSQLI_NUM)
//            echo '1';
//    }else
//    {

//    $select="SELECT * FROM doctors WHERE id=$doctor_id";
//    $doc_name=mysqli_query($conn,$select);
//    $doc_name = mysqli_num_rows($doc);


        $sql = "INSERT INTO times(doctor_id,working_time, status) VALUES ('$doctor_id','$time1','Available'),
                                                                                     ('$doctor_id','$time2','Available'),
                                                                                     ('$doctor_id','$time3','Available'),
                                                                                     ('$doctor_id','$time4','Available'),
                                                                                     ('$doctor_id','$time5','Available')";

        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../addTime.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../addTime.php?error') </script>";
        }
//            $select="UPDATE times INNER JOIN doctors ON (times.doctor_name = doctors.doctor_name) SET times.doctor_id = doctors.id";
        $select="UPDATE times SET doctor_name = ( SELECT doctor_name FROM doctors WHERE times.doctor_id = doctors.id )WHERE doctor_name IS NULL";
//    $select="INSERT INTO times(doctor_name) SELECT doctor_name FROM doctors WHERE times.doctor_id=doctors.id;";
    if(mysqli_query($conn,$select))
        {
            echo '1';
        }else{
            echo '2';
        }
    }
//}
