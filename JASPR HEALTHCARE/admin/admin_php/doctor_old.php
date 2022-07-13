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

        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../addDoctor.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../addDoctor.php?error') </script>";
        }

    }
    $sql1 = "INSERT INTO login(username,password,role) VALUES ('$email','$password','doctor')";
    if (mysqli_query($conn, $sql1)) {
        echo "<script> window.location.replace('../addDoctor.php?success')</script>";
    } else {
        echo "<script>window.location.replace('../addDoctor.php?error') </script>";
    }
}

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
//
//$getappointmentdate_time="SELECT * FROM patient_appointments";
//$values=array('doctor_id'=>$_REQUEST['doctor_id'],'appointment_date'=>$_REQUEST['form_appontment_date'],
//    'appointment_time'=>$_REQUEST['form_appontment_time']);
//if ($values==$getappointmentdate_time)
//{
//    echo "<script> window.location.replace('clinic/appointment?success')</script>";
//}else{
//    echo "<script> window.location.replace('clinic/appointment?error')</script>";
//}
//

