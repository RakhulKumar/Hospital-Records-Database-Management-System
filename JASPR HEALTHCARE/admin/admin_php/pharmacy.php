<?php
include "config.php";
$total = "SELECT * FROM pharmacy ";
$totalPharmacyList = mysqli_query($conn,$total);

if(isset($_POST['pharmacy_id']))
{
    $pharmacy_id=$_POST['pharmacy_id'];
    $getPharmacyEmail = "SELECT * FROM pharmacy where id=$pharmacy_id";
    $getEmail = mysqli_query($conn,$getPharmacyEmail);
}



if(isset($_REQUEST['sendPrescription']))
{
    $patient_name = $_REQUEST['reviewer_name'];
    $phone = $_REQUEST['phone'];
    $age = $_REQUEST['reviewer_age'];
    $address = $_REQUEST['patient_address'];
    $prescription_for = $_REQUEST['prescription_for'];
    $quantity = $_REQUEST['quantity'];
    $time_to_take = $_REQUEST['time_to_take'];
    $date = $_REQUEST['appointment_date'];
    $time = $_REQUEST['appointment_time'];
    $prescription = $_REQUEST['prescription'];
    $pharmacy_id = $_REQUEST['pharmacy_id'];
    $patient_id = $_REQUEST['patient_id'];
    $doctor_id = $_REQUEST['doctor_id'];
    $prescription_id = $_REQUEST['prescription_id'];

    /*get doctor name using doctor id*/
        $getDoctor = "SELECT * FROM doctors where id=$doctor_id";
        $getDoctorName = mysqli_query($conn, $getDoctor);
        while ($doctor = mysqli_fetch_assoc($getDoctorName)) {
            $doctor_name = $doctor['doctor_name'];
        }

    /*get pharmacy email using pharmacy id*/
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
            $message.="<td> $doctor_name</td></tr></table>";

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
            $headers .= "From: mailtest204@gmail.com" . "\r\n";
            $success=mail($to, $subject, $message, $headers);

            echo "<script> window.location.replace('../patientPrescriptionDetails.php?id=$prescription_id&success')</script>";
        }
        else
            {
                echo "$success";
                exit;
            echo "<script>window.location.replace('../patientPrescriptionDetails.php?id=$prescription_id&error') </script>";

        }

}

$recent = "SELECT * FROM prescription ORDER BY id LIMIT 10";
$recentPrescriptionList = mysqli_query($conn,$recent);
