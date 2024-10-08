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
    <?php $profileNav="true"; include_once('includes/header.inc.php'); ?> 

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
                <h1 class="text-center ff-pt fw-bold display-6 text-white mb-0">Dashboard</h1>
                
            </div><!--.container-->
        </header>
        <!-- header section end -->

        <!-- content wrapper start -->
        <div class="py-5">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="user__column">
                        <?php include('includes/profile-sidemenu.inc.php'); ?> 
                    </div><!--.col-->

                    <div class="col">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card card-body bg-warning-subtle border-0 p-4">
                                    <p class="fs-6 mb-1">Enrolled Courses</p>
                                    <p class="fs-2 mb-0 fw-semibold">12</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-body bg-success-subtle border-0 p-4">
                                    <p class="fs-6 mb-1">Complete lessons</p>
                                    <p class="fs-2 mb-0 fw-semibold">52</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-body bg-danger-subtle border-0 p-4">
                                    <p class="fs-6 mb-1">Achieved Certificates</p>
                                    <p class="fs-2 mb-0 fw-semibold">8</p>
                                </div>
                            </div>
                        </div>

                        <h1 class="fs-3 fw-bold mt-5 text-dark">Recently Enrolled Courses</h1>
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
                        
                        <div class="pt-5">
                            <table class="table coustom__table">
                                <table class="table coustom__table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Eamil</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">User Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>0*********</</td>
                                            <td>John</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>John</td>
                                            <td> Doe</td>
                                            <td>John@gmail.com</td>
                                            <td>J0*********</</td>
                                            <td>John</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </table>
                        </div>

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
 