<?php 
session_start();

include('config.php');

$fetchStudentDetails = mysqli_query($config,"SELECT * FROM student_directory WHERE student_uniqueID = '{$_SESSION['activeDocNo']}' || student_aadhar='{$_SESSION['activeDocNo']}'");
while ($row = mysqli_fetch_assoc($fetchStudentDetails))
{
	$studentName = $row['student_name'];
	$fathersName = $row['father_name'];
	$mothersName = $row['mother_name'];
	$contactNo = $row['contact_no'];
	$previousDegree = $row['previous_degree'];
	$selectedCourse = $row['selected_course'];
	$studentAadharNo = $row['student_aadhar'];
	$studentImage = $row['student_image'];
	$portalUID = $row['student_uniqueID'];
	$qrData = $row['qr_details'];
	$applicationDate = $row['application_date'];
}

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny - Multipurpose HTML Template</title>
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-8 slideInLeft">
                <div class="logo">
                    <span class="point">Danny</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile menu -->
<div class="mob-menu-wrapper hidden-md hidden-lg">
    <div class="close-mob-menu">
        <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
    </div>
    <div class="mobile-menu">
        <ul>
            <li><a href="#contact">Contact me</a></li>
        </ul>
    </div>
</div>
<!-- Mobile menu -->

<section id="hello" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-img wow slideInRight">
                    <img src="<?php echo $studentImage; ?>" alt="" class="img-responsive" style="height: 350px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-me wow slideInLeft">
                    <div class="about-me-title">
                        <h1><span><?php echo $studentName; ?></span></h1>
                    </div>
                    <div class="about-me-text">
                        <div class="opacity-box">
                            <h4 class="text-justify">Enrollment ID : <?php echo $portalUID; ?></h4>
                        </div>

                        <div class="opacity-box">
                            <h4 class="text-justify">Previous Degree : <?php echo $previousDegree; ?></h4>
                        </div>

                        <div class="opacity-box">
                            <h4 class="text-justify">Course Enrolled : <?php echo $selectedCourse; ?></h4>
                        </div>

                        
                    </div>
                    
                    
                    <div class="about-me-info">
                        <p>
                            <span class="span-title">Phone</span>
                            <span><?php echo str_pad(substr($contactNo, -4), strlen($contactNo), 'X', STR_PAD_LEFT); ?></span>
                        </p>
                        <p>
                            <span class="span-title">AADHAR </span>
                            <span><?php echo str_pad(substr($studentAadharNo, -4), strlen($studentAadharNo), 'X', STR_PAD_LEFT); ?></span>
                        </p>
                        
                    </div>
                    <div class="about-btns">
                        <a href="tel:+91-<?php echo $contactNo; ?>" class="site-btn">Contact me</a>
                        <a href="destroySession.php" class="site-btn gray-btn">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="section">
    <div class="container">
        <div class="row wave-bg">
           
            <div class="col-md-4 wow slideInLeft">
                <div class="section-sidebar">
                    <h2><span>Personal Details</span></h2>
                    <div class="opacity-box">
                        <p>This QR code allows verification of the student's personal details for authenticity.</p>
                    </div>
                </div>
                 <div class="wow slideInLeft">
                	<img src="<?php echo $qrData; ?>" class="rounded float-start" style="height: 150px;">
            	</div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 wow zoomIn">
                        <div class="advantages-box">
                            <h4>Father's Name</h4>
                            <div class="opacity-box">
                                <p><?php echo $fathersName; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn">
                        <hr class="mobile-hr">
                        <div class="advantages-box">
                            <h4>Mother's Name</h4>
                            <div class="opacity-box">
                                <p><?php echo $mothersName; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>Course Duration:</h4>
                            <div class="opacity-box">
                                <p><?php echo "6 months (SD - 11/04/2025 ED - 11/10/2025)"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>System Enrollment Date:</h4>
                            <div class="opacity-box">
                                <p><?php echo $applicationDate; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>Institution Name:</h4>
                            <div class="opacity-box">
                                <p><?php echo 'ABC Computers'; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow zoomIn">
                        <hr>
                        <div class="advantages-box">
                            <h4>Trainer Name:</h4>
                            <div class="opacity-box">
                                <p><?php echo 'Vivek Robin Kujur'; ?></p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>


<div  style="height: 100px;"></div>
<div class="footer text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#39c474" d="m10.95 13.43l-1.796-1.79q-.14-.14-.341-.15q-.202-.01-.367.156q-.16.16-.16.354t.16.354l1.938 1.938q.243.242.566.242t.566-.242l4.038-4.038q.146-.146.153-.344q.007-.199-.153-.364q-.165-.165-.357-.168t-.356.162zm-2.28 7.186l-1.316-2.2l-2.481-.524q-.298-.055-.475-.32q-.177-.264-.146-.562l.237-2.556l-1.683-1.92q-.212-.217-.212-.534t.212-.534l1.683-1.92l-.237-2.555q-.03-.299.146-.563q.177-.264.475-.32l2.48-.523l1.316-2.2q.162-.268.435-.37q.273-.103.565.027L12 4.027l2.33-.985q.293-.13.566-.027q.273.102.435.37l1.315 2.2l2.481.523q.298.056.475.32t.146.563l-.236 2.555l1.682 1.92q.212.217.212.534t-.212.535l-1.682 1.919l.236 2.555q.03.299-.146.563q-.177.265-.475.32l-2.48.524l-1.316 2.2q-.162.267-.435.37t-.565-.028L12 19.973l-2.33.985q-.293.13-.566.027q-.273-.102-.435-.37"/></svg>
<p>eVerify Portal</p>
</div>
<!-- Portfolio modal -->


<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.placeholder.min.js"></script>

<!--Mix It Up-->
<script src="js/mixitup.min.js"></script>

<!--THEME-->
<script src="js/wow.min.js"></script>

<script src="js/theme.js"></script>
</body>
</html>
