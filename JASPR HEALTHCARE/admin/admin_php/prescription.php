<?php
include "config.php";
/*----------------------------------------------
             ADMIN PANEL
----------------------------------------------*/

/******************    INSERT VALUES       **********************/

if(isset($_REQUEST['addPrescription'])) {
    $patient_name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $dob = $_REQUEST['birth'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['patient_address'];
    $prescription_for = $_REQUEST['prescription_for'];
    $quantity = $_REQUEST['quantity'];
    $time_to_take = $_REQUEST['time_to_take'];
    $date = $_REQUEST['appointment_date'];
    $time = $_REQUEST['appointment_time'];
    $prescription = $_REQUEST['prescription'];
    $pharmacy_id = $_REQUEST['pharmacy_name'];
    $patient_id = $_REQUEST['patient_id'];
    $doctor_id = $_REQUEST['doctor_id'];
    $sql = "INSERT INTO prescription(patient_name, mobile,prescription_for,age,address, date,time,prescription,pharmacy_id,patient_id,doctor_id,quantity,time_to_take) 
VALUES ('$patient_name','$phone','$prescription_for','$age','$address','$date','$time','$prescription','$pharmacy_id','$patient_id','$doctor_id','$quantity','$time_to_take')";

    if (mysqli_query($conn, $sql)) {
    echo "<script> window.location.replace('../sendPrescription.php?id=$patient_id&success')</script>";
} else {
    echo "<script>window.location.replace('../sendPrescription.php?id=$patient_id&error') </script>";

}
    if (mysqli_query($conn, $sql)) {
        $patient_id = $row['patient_id'];
        $getPatient = "SELECT * FROM patient_appointments where id=$patient_id";
        $getPatientName = mysqli_query($conn, $getPatient);
        while ($row = mysqli_fetch_assoc($getPatientName)) {
            $patient_name = $row['patient_name'];
        }
        $doctor_id = $row['doctor_id'];
        $getDoctor = "SELECT * FROM doctors where id=$doctor_id";
        $getDoctorName = mysqli_query($conn, $getDoctor);
        while ($doctor = mysqli_fetch_assoc($getDoctorName)) {
            $doctor_name = $doctor['doctor_name'];
        }
        $pharmacy_id = $row['pharmacy_id'];
        $getPharmacyEmail = "SELECT * FROM pharmacy where id=$pharmacy_id";
        $getEmail = mysqli_query($conn, $getPharmacyEmail);
        while ($pharmacy = mysqli_fetch_assoc($getEmail)) {
            $email = $pharmacy['pharmacy_email'];
            $pharmacy_name = $pharmacy['pharmacy_name'];
        }
        if (isset($email)) {


            $to = $email;
            $subject = "Prescription Form";
            $message = "<h2><center>Prescription</center></h2><br /><table xmlns=\"http://www.w3.org/1999/html\">";
            $message .= "<thead><tr><td colspan='2'><center><img src='../images/logo_white.png'></center></td></tr>";
            $message .= "<tr><td colspan='2'><center><b>CLINICAL SERVICES </b></center></td>";
            $message .= "</tr></thead>";
            $message .= "<tr><td><b>Patient Name :</b></td>";
            $message .= "<td> $patient_name</td></tr>";
            $message .= "<tr><td><b>Patient Number :</b></td>";
            $message .= "<td> $patient_id</td></tr>";
            $message .= "<tr><td><b>Patient DOB :</b></td>";
            $message .= "<td> $dob</td></tr>";
            $message .= "<tr><td><b>Patient Age :</b></td>";
            $message .= "<td> $age</td></tr>";
            $message .= "<tr><td><b>Patient Mobile :</b></td>";
            $message .= "<td> $phone</td></tr>";
            $message .= "<tr><td><b>Appointment Time :</b></td>";
            $message .= "<td> $time</td></tr>";
            $message .= "<tr><td><b>Appointment Date :</b></td>";
            $message .= "<td> $date</td></tr>";
            $message .= "<tr><td><b>Medicine To Take :</b></td>";
            $message .= "<td> $prescription</td></tr>";
            $message .= "<tr><td><b>Quantity :</b></td>";
            $message .= "<td> $quantity</td></tr>";
            $message .= "<tr><td><b>Time To Take :</b></td>";
            $message .= "<td> $time_to_take</td></tr>";
            $message .= "<tr><td><b>Prescribed by :</b></td>";
//        $message.="<td> $doctor_name</td></tr></table>";

            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
            $headers .= "From: mailtest204@gmail.com" . "\r\n";
            mail($to, $subject, $message, $headers);
            echo "<script> window.location.replace('../sendPrescription.php?email=$email&success')</script>";
        } else {
            echo "<script>window.location.replace('../sendPrescription.php?id=$patient_id&error') </script>";

        }
    }
}



$getPrescriptionList =  "SELECT * FROM prescription";
$result = mysqli_query($conn, $getPrescriptionList);