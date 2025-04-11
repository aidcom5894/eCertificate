<?php 
session_start();

include('config.php');

$fetchStudentDetails = mysqli_query($config,"SELECT * FROM student_directory WHERE student_uniqueID = '{$_SESSION['activeDocNo']}' || student_aadhar='{$_SESSION['activeDocNo']}'");
while ($row = mysqli_fetch_assoc($fetchStudentDetails))
{
	$studentName = $row['student_name'];
	$studentImage = $row['student_image'];
}

echo $studentName."<br>".$studentImage;

?>
