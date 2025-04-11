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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container mt-4">
    	<div class="text-center"><h1><u>Enrolled Students</u></h1></div>
    	<div class="text-info float-end mb-4"><a href="<?php echo $base_url; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#245182" d="m12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81zM12 3L2 12h3v8h6v-6h2v6h6v-8h3z"/></svg> Back to Home</a></div>
    	<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sl. No.</th>
                <th>Student Name</th>
                <th>Unique ID</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Contact No.</th>
                <th>Previous Degree</th>
                <th>Selected Course</th>
                <th>Aadhar No.</th>
                <th>Student Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        	 $fetchStudents = mysqli_query($config,"SELECT * FROM student_directory");
        	 while($row = mysqli_fetch_assoc($fetchStudents)){?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['student_uniqueID']; ?></td>
                <td><?php echo $row['father_name']; ?></td>
                <td><?php echo $row['mother_name']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['previous_degree']; ?></td>
                <td><?php echo $row['selected_course']; ?></td>
                <td><?php echo $row['student_aadhar']; ?></td>
                <td><img src="<?php echo $row['student_image']; ?>" class="rounded float-end" style="width:150px;"></td>
                <td><a href="" class="btn btn-primary">Issue Certificate</a></td>
            </tr>
        <?php } ?>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Sl. No.</th>
                <th>Student Name</th>
                <th>Unique ID</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Contact No.</th>
                <th>Previous Degree</th>
                <th>Selected Course</th>
                <th>Aadhar No.</th>
                <th>Student Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript">
	new DataTable('#example');
</script>