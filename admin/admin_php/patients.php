<?php
if(!empty($_POST)){
	// print_r($_POST);die;
	 $patient_name = $_POST['form_name'];
    $email = $_POST['form_email'];
    $mobile = $_POST['form_phone'];
    $date = $_POST['form_appontment_date'];
    $time = $_POST['timss'];
    $address = $_POST['form_address'];
    $password = $_POST['form_password'];
    $reason = $_POST['form_appontment_for'];
    $doctor_id = $_POST['doctor_name'];
    $message = $_POST['form_message'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $type=$_POST['type'];

        $sql = "INSERT INTO patient_appointments(doctor_id,patient_name,email,mobile,address, appointment_date,appointment_time,appointment_for,message,Services,status,type,dob,age)
         VALUES ('$doctor_id','$patient_name','$email','$mobile','$address','$date','$time','$reason','$message','services','enable','$type','$dob','$age')";
    // echo $sql;die;
    $conn = mysqli_connect("localhost","root","","clinical_service");
        if (mysqli_query($conn,$sql)) {
            echo "<script> window.location.replace('../patients.php?value=$email')</script>";
        } else {
            echo "<script>window.location.replace('../userPersonalInfo.php?login') </script>";
        }
}