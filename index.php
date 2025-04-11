<?php 
	include('config.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-4">
    	<div class="text-center"><h1><u>Students Enrollment</u></h1></div>

    	<div class="container mb-4">
    		<a href="verify_documents.php" class="text-danger float-end mb-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#d94051" d="m23 12l-2.44-2.79l.34-3.69l-3.61-.82l-1.89-3.2L12 2.96L8.6 1.5L6.71 4.69L3.1 5.5l.34 3.7L1 12l2.44 2.79l-.34 3.7l3.61.82L8.6 22.5l3.4-1.47l3.4 1.46l1.89-3.19l3.61-.82l-.34-3.69zM9.38 16.01L7 13.61a.996.996 0 0 1 0-1.41l.07-.07c.39-.39 1.03-.39 1.42 0l1.61 1.62l5.15-5.16c.39-.39 1.03-.39 1.42 0l.07.07c.39.39.39 1.02 0 1.41l-5.92 5.94c-.41.39-1.04.39-1.44 0"/></svg> Verify Certificate</a>
    	</div>
    		
    		<form method="POST" enctype="multipart/form-data">

			  <div class="mb-3">
			    <label class="form-label">Student Name:</label>
			    <input type="text" class="form-control" name="studentName" required>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Father's Name:</label>
			    <input type="text" class="form-control" name="fathersName" required>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Mother's Name:</label>
			    <input type="text" class="form-control" name="mothersName" required>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Contact No.:</label>
			    <input type="number" onkeypress="if(this.value.length === 10)return false" class="form-control" name="contactNo" required>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Previous Degree:</label>
			    <input type="text" class="form-control" name="previousDegree" required>
			   </div>			   

			   <div class="mb-3">
			    <label class="form-label">Selected Course:</label>
			    <select class="form-select" name="selectCourse" required>
			    	<option selected>--- Select Courses to Enroll ---</option>
			    	<option value="DCA">DCA</option>
			    	<option value="ADCA">ADCA</option>
			    	<option value="Tally">Tally</option>
			    	<option value="PGDCA">PGDCA</option>
			    	<option value="Photoshop">Photoshop</option>
			    </select>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Student Aadhar:</label>
			    <input type="number" onkeypress="if(this.value.length === 12) return false" class="form-control" name="studentAadhar" required>
			   </div>

			   <div class="mb-3">
			    <label class="form-label">Student's Image:</label>
			    <input type="file" class="form-control" name="studentImage" required>
			   </div>

			   <?php 
			   	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$shuffled = str_shuffle($characters);
				$randomString = substr($shuffled, 0, 8);
				

			   ?>
			   <div class="mb-3">
			    <label class="form-label">Student's UniqueID:</label>
			    <input type="text" class="form-control" name="studentPortalID" value="<?php echo $randomString; ?>" readonly>
			   </div>

			   
			 
			  <button type="submit" name="enrollStudents" class="btn btn-primary float-end">Submit</button>

			</form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<?php 

$studentsName = $_POST['studentName'];
$fathersName = $_POST['fathersName'];
$mothersName = $_POST['mothersName'];
$contactNo = $_POST['contactNo'];
$previousDegree = $_POST['previousDegree'];
$selectCourse = $_POST['selectCourse'];
$studentAadhar = $_POST['studentAadhar'];
$studentUniqueID = $_POST['studentPortalID'];

$qrCodeContent = $base_url()."students_certificate?student_uniqueID=".$studentUniqueID;

$verifyData = mysqli_query($config,"SELECT * FROM student_directory WHERE contact_no = '$contactNo' OR student_aadhar = '$studentAadhar'");

// configuration for studentsImage
$folderPath = 'uploads/';
$orgName = uniqid()."_".preg_replace('/\s+/', '_', $_FILES['studentImage']['name']);
$tempName = $_FILES['studentImage']['tmp_name'];

$completeImageUpload = $base_url.$folderPath.$orgName;

if(isset($_POST['enrollStudents']))
{
	if(mysqli_num_rows($verifyData) > 0)
	{
		echo "<script>alert('Duplicate Data Found');window.location.href='$base_url'</script>";
	}
	
	else if(move_uploaded_file($tempName, $folderPath.$orgName))
	{
		mysqli_query($config,"INSERT INTO student_directory(student_name,father_name,mother_name,contact_no,previous_degree,selected_course,student_aadhar,student_image,student_uniqueID,qr_details)VALUES('$studentsName','$fathersName','$mothersName','$contactNo','$previousDegree','$selectCourse','$studentAadhar','$completeImageUpload','$studentUniqueID','$qrCodeContent')");

	 	echo "<script>alert('Student Enrolled Successfully');window.location.href='enrolled_students.php'</script>";
	}
	else
	{
		echo "<script>alert('Student Not Enrolled');window.location.href='$base_url'</script>";
	}	

}

?>