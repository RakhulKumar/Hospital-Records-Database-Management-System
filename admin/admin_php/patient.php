<?php
include "config.php";

/**************    INSERTING PATIENT DETAILS       **********************/
 // print_r($_REQUEST);die;
if(isset($_REQUEST['addPatient'])) {
   
    $patient_name = $_REQUEST['form_name'];
    $email = $_REQUEST['form_email'];
    $mobile = $_REQUEST['form_phone'];
    $date = $_REQUEST['form_appontment_date'];
    $time = $_REQUEST['timss'];
    $address = $_REQUEST['form_address'];
    $password = $_REQUEST['form_password'];
    $reason = $_REQUEST['form_appontment_for'];
    $doctor_id = $_REQUEST['doctor_name'];
    $message = $_REQUEST['form_message'];


/*    $check = "SELECT * FROM patient_appointments WHERE  doctor_id='$_POST[doctor_name]' AND appointment_date = '$_POST[form_appontment_date]' AND
          appointment_time ='$_POST[form_appontment_time]' AND status='enable'";
    $rs = mysqli_query($conn, $check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if ($data[0] > 1) {
        echo "<script>window.location.replace('../../appointment.php?alert') </script>";
    } else*/
//        {
//        $insert_doc = "SELECT doctor_id FROM patient_appointmnets WHERE doctor_id='$_POST[doctor_name]'";
//        $result = mysqli_query($conn, $insert_doc);
//        $data1 = mysqli_fetch_array($result, MYSQLI_NUM)
//            echo '1';
//    }else
        // {

        $sql = "INSERT INTO patient_appointments(doctor_id,patient_name,email,mobile,address, appointment_date,appointment_time,appointment_for,message,Services,status)
         VALUES ('$doctor_id','$patient_name','$email','$mobile','$address','$date','$time','$reason','$message','services','enable')";
    // echo $sql;die;
    $conn = mysqli_connect("localhost","root","","clinical_service");
        if (mysqli_query($conn,$sql)) {
            echo "<script> window.location.replace('../../appointment.php?success')</script>";
        } else {
            echo "<script>window.location.replace('../../appointment.php?login') </script>";
        }
        // $user = "INSERT INTO login (username,password,role) VALUES('$email','$password','user')";
        // if (mysqli_query($conn, $user)) {
        //     echo "<script> window.location.replace('../../appointment.php?success')</script>";
        // } else {
        //     echo "<script>window.location.replace('../../appointment.php?error') </script>";
        // }



        $time_update= "UPDATE times SET status='Not Available' WHERE working_time='$time'";
        if (mysqli_query($conn,$time_update))
        {
            echo '1';
        }else{
            echo '2';
        }
    // }
//}

}


if(isset($_REQUEST['addAppointment'])) {
    /* if(isset($_REQUEST['doctor_id']))
     {
         $doctor_id=$_REQUEST['doctor_id'];
         $getDoctorDetails = " SELECT * FROM doctors WHERE id = $doctor_id";
         $getDetails = mysqli_query($conn, $getDoctorDetails);
         $key = mysqli_fetch_assoc( $getDetails);
         $department = $key['department_name'];
     }*/
    $patient_name = $_REQUEST['fname'] . ' ' . $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $address = $_REQUEST['address'];
    $mobile = $_REQUEST['phone'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['timss'];
    $reason = $_REQUEST['department_name'];
    $id = $_REQUEST['doctor_id'];
    $message = $_REQUEST['message'];
//    $status=$_REQUEST['enable'];


    $check = "SELECT * FROM patient_appointments WHERE  doctor_id='$id' AND appointment_date = '$_REQUEST[date]' AND
          appointment_time ='$_REQUEST[time]' AND status='enable'";
    $rs = mysqli_query($conn, $check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if ($data[0] > 1) {
        echo "<script>window.location.replace('../../doctor_details.php?id=$id&alert') </script>";
    } else {


        $sql = "INSERT INTO patient_appointments(patient_name, email,mobile,address, appointment_date, appointment_time, appointment_for, doctor_id, message,status)
                      VALUES ('$patient_name','$email','$mobile','$address','$date','$time','$reason','$id','$message','enable')";

        if (mysqli_query($conn, $sql)) {
            echo "<script> window.location.replace('../../doctor_details.php?id=$id&success')</script>";
        } else {
            echo "<script>window.location.replace('../../doctor_details.php?id=$id&login') </script>";
        }
        $user = "INSERT INTO login (username,password,role) VALUES('$email','$password','user')";
        if (mysqli_query($conn, $user)) {
            echo "<script> window.location.replace('../../doctor_details.php?id=$id&success')</script>";
        } else {
            echo "<script>window.location.replace('../../doctor_details.php?id=$id&error') </script>";
        }

    $time_update= "UPDATE times SET status='Not Available' WHERE working_time='$time'";
    if (mysqli_query($conn,$time_update))
    {
        echo '1';
    }else{
        echo '2';
    }


    }
}

/******************    DELETE VALUE      **********************/


if(isset($_GET['patient_id']))
{
    $appointment_id=$_GET['patient_id'];
    $deletePatientDetails="DELETE FROM patient_appointments WHERE id = $appointment_id";
    $deleteAppointment=mysqli_query($conn,$deletePatientDetails);
    if(isset($deleteAppointment)) {
        echo "<script> window.location.replace('../patientDetails.php?id=$appointment_id&success')</script>";
    } else {
        echo "<script> window.location.replace('../patientDetails.php?id=$appointment_id&error')</script>";
    }
}



/******************    GET DYNAMIC PATIENT VALUES      **********************/

$getPatientList =  "SELECT p.*,d.doctor_name,d.department_name FROM patient_appointments as p INNER  JOIN doctors as d ON p.doctor_id = d.id";
$result = mysqli_query($conn, $getPatientList);

/**********      TOTAL PATIENTS    **************8*/

$total = "SELECT * FROM patient_appointments ";
$totalList = mysqli_query($conn,$total);
$totalPatients = mysqli_num_rows($totalList);

/************     RECENT APPOINTMENTS           **************/

$recent = "SELECT * FROM patient_appointments ORDER BY id LIMIT 10";
$recentAppointmentList = mysqli_query($conn,$recent);

$getPatientDetailList =  "SELECT p.*,d.doctor_name,d.department_name FROM patient_appointments as p INNER  JOIN doctors as d 
ON p.doctor_id = d.id WHERE p.id = 2";
$patientDetailList = mysqli_query($conn, $getPatientDetailList);

/**************      (Doctor) View Appointments         *******************/
$getAppointmentList =  "SELECT p.*,d.doctor_name,d.department_name FROM 
                     patient_appointments as p INNER  JOIN doctors as d ON p.doctor_id = d.id";
$viewAppointments = mysqli_query($conn, $getAppointmentList);
