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
   		<div class="container text-center"><u class="text-success"><h1> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="#318e68" d="m23 12l-2.44-2.79l.34-3.69l-3.61-.82l-1.89-3.2L12 2.96L8.6 1.5L6.71 4.69L3.1 5.5l.34 3.7L1 12l2.44 2.79l-.34 3.7l3.61.82L8.6 22.5l3.4-1.47l3.4 1.46l1.89-3.19l3.61-.82l-.34-3.69zM9.38 16.01L7 13.61a.996.996 0 0 1 0-1.41l.07-.07c.39-.39 1.03-.39 1.42 0l1.61 1.62l5.15-5.16c.39-.39 1.03-.39 1.42 0l.07.07c.39.39.39 1.02 0 1.41l-5.92 5.94c-.41.39-1.04.39-1.44 0"/></svg> Documents Verify Portal</h1></u></div>   		
   	</div>

    <div class="container">

      <div class="container mt-4"><a href="<?php echo $base_url; ?>" class="float-end mb-4" style="text-decoration:none; color: #a80f49;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#a80f49" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg>Back to Home</a></div>

      <form method="POST">

        <div class="mb-3">
          <label class="form-label"><strong>Enrollment No.</strong></label>
          <input type="text" class="form-control" placeholder="Enter Certificate / Aadhar No." name="documentNo" required>
        </div>
       
        <button type="submit" name="submitNo" class="btn btn-primary">Submit</button>
      </form>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php 

$docNumber = $_POST['documentNo'];
if(isset($_POST['submitNo']))
{
  $fetchCertificateDetails = mysqli_query($config,"SELECT * FROM student_directory WHERE student_aadhar ='$docNumber' OR student_uniqueID ='$docNumber'");

  if(mysqli_num_rows($fetchCertificateDetails)>0)
  {
    session_start();
    $_SESSION['activeDocNo'] = $docNumber;
    echo "<script>alert('Document Number Verified');window.location.href='students_certificate.php'</script>";
  }
  else
  {
    echo "<script>alert('Sorry Invalid Document No. Provided. This document / application number cannot be verified.');window.location.href='verify_documents.php'</script>";
  }
}

?>