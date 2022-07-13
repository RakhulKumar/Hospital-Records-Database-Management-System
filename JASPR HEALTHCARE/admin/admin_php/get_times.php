<html>
<?php
include "config.php";
?>

<?php

$query="SELECT * FROM times WHERE doctor_id='".$_POST["doctor_id"]."' AND status='Available'";
$res=mysqli_query($conn,$query);
?>

<option>Select Time</option>
<?php

    while($re=mysqli_fetch_assoc($res))
    {
    ?>
    <option value="<?php echo $re["working_time"];?>"><?php echo $re["working_time"];?></option>
<?php
}
?>
</html>