<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Golap Admission</title>
 
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
            <div class="container position-relative z-3 py-md-5">
                <h1 class="text-center ff-pt fw-bold display-3 text-primary">Find best MBBS colleges in India</h1>
                <p class="text-center text-white lead-sm mt-3 mb-4 mb-md-5 col-lg-8 mx-auto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea iusto eaque expedita voluptate maxime itaque inventore quidem voluptatum animi architecto quasi, accusamus perspiciatis provident asperiores.
                </p>

                <form action="#" class="form__box col-lg-8 mx-auto p-1 rounded-3 bg-white mb-lg-5">
                    <div class="row g-0">
                        <div class="col-md-4 divider">
                            <select name="category" id="category" class="form-select select2 border-0">
                                <option value="Select category">Select category</option>
                                <option value="B.E. / B.Tech">B.E. / B.Tech</option>
                                <option value="MBA/PGDM">MBA/PGDM</option>
                                <option value="BCA">BCA</option>
                                <option value="BBA">BBA</option>
                                <option value="MCA">MCA</option>
                            </select>
                        </div> 

                        <div class="col-md-7">
                            <input type="text" name="search" class="form-control border-0" placeholder="Search your dream here">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div><!--.container-->
        </header>
        <!-- header section end -->

        <!-- best colleges section start -->
        <section class="py-5">
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-dark text-uppercase text-center mb-4">Best colleges in <span class="text-primary">india</span></h2>


                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-1.jpg";
                            $title="Saraswati College of Engineering";
                            $location="Sector 12, Rajiv Gandhi Nagar, Mumbai, Maharashtra, 400708";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-2.jpg";
                            $title="Vidyapath Institute of Technology";
                            $location="Plot No. 45, Outer Ring Road, Marathahalli, Bengaluru, Karnataka, 560037";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-3.jpg";
                            $title="Mahatma Gandhi Memorial College";
                            $location="3rd Cross, Gandhi Nagar, Coimbatore, Tamil Nadu, 641012";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-4.jpg";
                            $title="Sri Aurobindo College of Science";
                            $location="21, M.G. Road, Vasant Kunj, New Delhi, Delhi, 110070";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-5.jpg";
                            $title="Nalanda Institute of Management";
                            $location="NH-31, Bodh Gaya Road, Nalanda, Bihar, 803111";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-6.jpg";
                            $title="Kalinga University of Arts & Commerce";
                            $location="52, Kharavela Nagar, Bhubaneswar, Odisha, 751001";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-7.jpg";
                            $title="Rajendra Prasad Agricultural University";
                            $location="Village Road, Pusa, Samastipur, Bihar, 848125";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-8.jpg";
                            $title="Bhagat Singh Institute of Information Technology";
                            $location="Ring Road, Sector 4, Chandigarh, 160036";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                </div><!--./row-->

            </div><!-- container -->
        </section>
        <!-- best colleges section end -->

        <section class="py-5 bg-light rounded-3">
            <div class="container py-4">
                <div class="row g-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-3 col-6">
                        <div class="cases__card">
                            <h2 class="display-4 text-primary text-center fw-bold d-block mb-1 lh-1"> <span class="counter" data-count="10" ended="true">0</span>K</h2>
                            <p class="fs-5 text-center text-dark mb-0">Online Courses</p>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-3 col-6">
                        <div class="cases__card">
                            <h2 class="display-4 text-primary text-center fw-bold d-block mb-1 lh-1"><span class="counter" data-count="100" ended="true">0</span>+</h2>
                            <p class="fs-5 text-center text-dark mb-0">Expert Tutors</p>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-3 col-6">
                        <div class="cases__card">
                            <h2 class="display-4 text-primary text-center fw-bold d-block mb-1 lh-1"><span class="counter" data-count="60" ended="true">0</span>K+</h2>
                            <p class="fs-5 text-center text-dark mb-0">Online Students</p>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-3 col-6">
                        <div class="cases__card">
                            <h2 class="display-4 text-primary text-center fw-bold d-block mb-1 lh-1"><span class="counter" data-count="6" ended="true">0</span>K+</h2>
                            <p class="fs-5 text-center text-dark mb-0">Certified Courses</p>
                        </div>
                    </div><!--//.col-->
                </div><!--//.row-->
            </div><!--//.container-->
        </section>

        <!-- best course section start -->
        <section class="py-5">
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-dark text-uppercase text-center mb-4">Top <span class="text-primary">MBBS</span> Courses</h2>


                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-1.jpg";
                            $title="NEET Achievers Program";
                            $description="A comprehensive coaching program for students aiming to excel in the National Eligibility cum Entrance Test (NEET).";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-2.jpg";
                            $title="AIIMS Excellence Course";
                            $description="Focused coaching for students preparing for the All India Institute of Medical Sciences (AIIMS) MBBS entrance exam.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-3.jpg";
                            $title="Medical Genius NEET Crash Course";
                            $description="An intensive, short-term course designed to quickly prepare students for the NEET exam with targeted practice and revision.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-4.jpg";
                            $title="NEET Foundation Course";
                            $description="A long-term program for high school students that builds a strong foundation in biology, chemistry, and physics for medical entrance exams.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-5.jpg";
                            $title="Elite MBBS Entrance Coaching";
                            $description="A specialized coaching course that covers all major medical entrance exams, including NEET, JIPMER, and AIIMS.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-6.jpg";
                            $title="NEET Rank Booster Program";
                            $description="A specialized coaching course that covers all major medical entrance exams, including NEET, JIPMER, and AIIMS.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-7.jpg";
                            $title="Biology Ace for NEET";
                            $description="A specialized coaching course that covers all major medical entrance exams, including NEET, JIPMER, and AIIMS.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/course-8.jpg";
                            $title="Medical Entrance Mastery";
                            $description="A course designed to provide in-depth knowledge and problem-solving skills across all subjects required for MBBS entrance exams.";
                            include('includes/components/course-item.inc.php');
                        ?> 
                    </div> 
                </div><!--./row-->

            </div><!-- container -->
        </section>
        <!-- best course section end -->

        <!-- promo section start -->
        <section class="pb-5 pt-4"> 
            <div class="container mobile_full_width">
                <div class="join__teksands d-flex align-items-center justify-content-center position-relative rounded-4 overflow-hidden">  
                    <img src="assets/images/global/promo-bg-image.svg" alt="Join Teksands Today" class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-1"> 
                    <div class="container position-relarive z-3 p-4 p-lg-5">
                        <h2 class="fs-3 text-white text-center fw-bold mb-4 mb-lg-5">Join Shiksha Today</h2> 
        
                        <div class="row g-4 gx-lg-5">
                            <div class="col-md-6">
                                <div class="join__card rounded-3 py-4 px-4 px-lg-5">
                                    <h3 class="fs-4 text-white text-center fw-semibold mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                                    <div class="mt-3 mt-lg-4 text-center mb-2">
                                        <a href="#" class="btn btn-dark fs-15 fw-semibold">Join Today...</a>
                                    </div>
                                </div> 
                            </div><!--//.col-->
                            <div class="col-md-6">
                                <div class="join__card join__now rounded-3 py-4 px-4 px-lg-5">
                                    <h3 class="fs-4 text-white text-center fw-semibold mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                                    <div class="mt-3 mt-lg-4 text-center mb-2">
                                        <a href="#" class="btn btn-dark fs-15 fw-semibold">Join Today...</a>
                                    </div>
                                </div>
                            </div><!--//.col-->
                        </div><!--//.row-->
                    </div><!--.//container-->  
                </div>  
            </div><!--.//container--> 
        </section>
        <!-- promo section end -->

        <!-- best scholarship section start -->
        <section class="py-5">
            <div class="container py-md-4">
                <div class="d-flex align-items-center gap-3 justify-content-between">
                    <h2 class="fs-1 fw-bold text-dark text-uppercase mb-4 text-center text-md-start"><span class="d-sm-block">Top colleges</span> offering <span class="text-primary">Scholarship</span></h2>
                    <a href="#" class="btn btn-primary rounded-pill px-4 fw-semibold py-3 gap-3 d-none d-md-inline-flex">
                        <span>View All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
                    </a>
                </div>


                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/logo-1.jpg";
                            $title="Brightwater University Merit Scholarship";
                            $location="Mumbai, Maharashtra";
                            $deadline="April 30, 2024";
                            $amount="1,50,000 per year";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/CurryCollege.jpg";
                            $title="Northvale Academy Leadership Award";
                            $location="Bengaluru, Karnataka";
                            $deadline="May 1, 2024";
                            $amount="1,00,000 annually";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/logo-1.jpg";
                            $title="Mahatma Gandhi Memorial College Diversity Scholarship";
                            $location="Chennai, Tamil Nadu";
                            $deadline="February 28, 2024";
                            $amount="50,000 per yeary";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/logo-1.jpg";
                            $title="Evergreen State University Science Fellowship";
                            $location="Dehradun, Uttarakhand";
                            $deadline="June 30, 2024";
                            $amount="2,00,000 for research projects";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/logo-1.jpg";
                            $title="Rajendra Prasad Agricultural University Rural Development Scholarship";
                            $location="Pusa, Bihar";
                            $deadline="April 10, 2024";
                            $amount="60,000 per year";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/logo-1.jpg";
                            $title="Sri Aurobindo College of Science Excellence Scholarship";
                            $location="New Delhi, Delhi";
                            $deadline="May 20, 2024";
                            $amount="1,25,000 per year";
                            include('includes/components/scholarship-item.inc.php');
                        ?> 
                    </div>
                     
                     
                </div><!--./row-->

            </div><!-- container -->
        </section>
        <!-- best scholarship section end -->

        <!-- gallery section start -->
        <section class="py-5 bg-gradient">
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-primary text-uppercase text-center mb-4">Videos</h2>
                 
                <div class="row g-2">
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-12">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-lg-6">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ratio ratio-16x9">
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RwU7YY6emYc" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div><!--.col-->
                </div><!--.row-->
 
            </div><!-- container -->
        </section>
        <!-- gallery section end -->

        <!-- top derstinations section start -->
        <section class="py-5">
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-dark text-uppercase text-center mb-4">Top <span class="text-primary">Destinations</span></h2>


                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-1.jpg";
                            $title="Saraswati College of Engineering";
                            $location="Sector 12, Rajiv Gandhi Nagar, Mumbai, Maharashtra, 400708";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-2.jpg";
                            $title="Vidyapath Institute of Technology";
                            $location="Plot No. 45, Outer Ring Road, Marathahalli, Bengaluru, Karnataka, 560037";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-3.jpg";
                            $title="Mahatma Gandhi Memorial College";
                            $location="3rd Cross, Gandhi Nagar, Coimbatore, Tamil Nadu, 641012";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-4.jpg";
                            $title="Sri Aurobindo College of Science";
                            $location="21, M.G. Road, Vasant Kunj, New Delhi, Delhi, 110070";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-5.jpg";
                            $title="Nalanda Institute of Management";
                            $location="NH-31, Bodh Gaya Road, Nalanda, Bihar, 803111";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-6.jpg";
                            $title="Kalinga University of Arts & Commerce";
                            $location="52, Kharavela Nagar, Bhubaneswar, Odisha, 751001";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-7.jpg";
                            $title="Rajendra Prasad Agricultural University";
                            $location="Village Road, Pusa, Samastipur, Bihar, 848125";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                    <div class="d-flex">
                        <?php
                            $image="assets/images/global/college-8.jpg";
                            $title="Bhagat Singh Institute of Information Technology";
                            $location="Ring Road, Sector 4, Chandigarh, 160036";
                            include('includes/components/college-item.inc.php');
                        ?> 
                    </div>
                </div><!--./row-->

            </div><!-- container -->
        </section>
        <!-- top derstinations section end -->

        <!-- best hostels section start -->
        <section class="py-5">
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-dark text-uppercase text-center mb-4">Top <span class="text-primary">Hostels</span></h2>


                <div class="owl-carousel hostelCarousels">
                    <?php
                        $image="assets/images/global/college-1.jpg";
                        $title="Blue Horizon Hostel";
                        $location="Andheri West, Mumbai, Maharashtra";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-2.jpg";
                        $title="Evergreen Residency";
                        $location="Jayanagar, Bengaluru, Karnataka";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-3.jpg";
                        $title="Sunrise Student Hostel";
                        $location="Sector 62, Noida, Uttar Pradesh";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-4.jpg";
                        $title="Lakeview Hostel";
                        $location="Viman Nagar, Pune, Maharashtra";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-5.jpg";
                        $title="Hilltop Residency";
                        $location="NH-31, Bodh Gaya Road, Nalanda, Bihar, 803111";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-6.jpg";
                        $title="Riverstone Hostel";
                        $location="Salt Lake City, Kolkata, West Bengal";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-7.jpg";
                        $title="Ocean Breeze Hostel";
                        $location="Thiruvanmiyur, Chennai, Tamil Nadu";
                        include('includes/components/hostel-item.inc.php');
                    ?> 
                    <?php
                        $image="assets/images/global/college-8.jpg";
                        $title="Silver Oak Boys Hostel";
                        $location="Hazratganj, Lucknow, Uttar Pradesh";
                        include('includes/components/hostel-item.inc.php');
                    ?>  
                </div><!--./row-->

            </div><!-- container -->
        </section>
        <!-- best hostels section end -->
 
    </main>
 
      
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?> 

    <script>
        $(document).ready(function($) {
            //Check if an element was in a screen
            function isScrolledIntoView(elem){
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                return ((elemBottom <= docViewBottom));
            }
            //Count up code
            function countUp() {
                $('.counter').each(function() {
                    var $this = $(this), // <- Don't touch this variable. It's pure magic.
                        countTo = $this.attr('data-count');
                        ended = $this.attr('ended');

                if ( ended != "true" && isScrolledIntoView($this) ) {
                    $({ countNum: $this.text()}).animate({
                    countNum: countTo
                    },
                    {
                    duration: 2500, //duration of counting
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                    });
                $this.attr('ended', 'true');
                }
                });
            }
            //Start animation on page-load
            if ( isScrolledIntoView(".counter") ) {
                countUp();
            }
            //Start animation on screen
            $(document).scroll(function() {
                if ( isScrolledIntoView(".counter") ) {
                    countUp();
                }
            });
            });
    </script>
 
</body>
</html>
 