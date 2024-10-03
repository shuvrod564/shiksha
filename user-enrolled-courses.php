<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Profile Page</title>
 
    <!-- All Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- header section start -->
        <header class="py-5 position-relative">
            <img 
                src="assets/images/global/hero-bg.webp" 
                class="img-fluid w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-0" 
                alt="banner image"
            >
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-black opacity-50"></div>
            <div class="container position-relative z-3 py-sm-3">
                <h1 class="text-center ff-pt fw-bold display-6 text-white mb-0">My Enrolled Courses</h1>
                
            </div><!--.container-->
        </header>
        <!-- header section end -->

        <!-- content wrapper start -->
        <div class="py-5">
            <div class="container">
                <div class="row g-4 c">
                    <div class="col-xxl-3 col-lg-4">
                        <?php include('includes/profile-sidemenu.inc.php'); ?> 
                    </div><!--.col-->

                    <div class="col-xxl-9 col-lg-8">
                    <ul class="d-flex flex-column gap-3 gap-md-4 list-unstyled ps-0 mb-0">
                            <?php
                                $image="assets/images/global/course-1.jpg";
                                $title="NEET Achievers Program";
                                include('includes/components/profile-course-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-2.jpg";
                                $title="AIIMS Excellence Course";
                                include('includes/components/profile-course-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-3.jpg";
                                $title="Medical Genius NEET Crash Course";
                                include('includes/components/profile-course-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-4.jpg";
                                $title="NEET Foundation Course";
                                include('includes/components/profile-course-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-5.jpg";
                                $title="Elite MBBS Entrance Coaching";
                                include('includes/components/profile-course-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-6.jpg";
                                $title="NEET Rank Booster Program";
                                include('includes/components/profile-course-item.inc.php');
                            ?>  
                        </ul> 



                    </div><!--/.col-->
                 
                </div><!--.row-->
            </div><!--.container-->
        </div>
        <!-- content wrapper end -->



    </main>



  
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?>  
 
</body>
</html>
 