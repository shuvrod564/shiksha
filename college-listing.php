<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Listing | Golap Admission</title>
 
    <!-- All Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main>

        <!-- Header section start -->
        <div class="position-relative py-5">
            <img 
                src="assets/images/global/hero-bg.webp" 
                class="img-fluid w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-0" 
                alt="banner image"
            >
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-black opacity-50"></div>
            <div class="container py-md-5 position-relative z-3">
                <form action="#" class="">
                    <div class="form__box listing p-1 rounded-3 bg-white mb-2"> 
                        <div class="row g-1">   
                            <div class="col-lg-5 divider first">
                                <input type="text" name="search" class="form-control border-0 ps-4" placeholder="Search college name here">
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-3 divider second">
                                <select name="category" id="category" class="form-select select2 border-0 px-4">
                                    <option value="Category / Department" disabled>Category / Department</option>
                                    <option value="B.E. / B.Tech">B.E. / B.Tech</option>
                                    <option value="MBA/PGDM">MBA/PGDM</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BBA">BBA</option>
                                    <option value="MCA">MCA</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-3 ">
                                <select name="category" id="category" class="form-select select2 border-0 px-4">
                                    <option value="Level" disabled>Level</option>
                                    <option value="Bigineer">Bigineer</option>
                                    <option value="Expert">Expert</option>
                                    <option value="Professional">Professional</option> 
                                </select>
                            </div>
                            <div class="col-md-2 col-lg-1">
                                <button class="btn btn-primary w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                    <span class="d-md-none">SEARCH</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" name="country" class="form-control border-white py-3 px-4" placeholder="Country name">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" name="state" class="form-control border-white py-3 px-4" placeholder="State name">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" name="district" class="form-control border-white py-3 px-4" placeholder="District name">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <input type="text" name="city" class="form-control border-white py-3 px-4" placeholder="City name">
                        </div>
                    </div>

                    <?php include('includes/letter-filter.inc.php'); ?>
                </form>
            </div><!--.container-->
        </div>
        <!-- Header section end -->


        <!-- Lisitng section start -->
        <div class="py-5">
            <div class="container-fluid">
                <div class="p-5 text-center fs-4 d-none">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g id="Remove_Database" data-name="Remove Database"><g id="_Group_"><g id="_Group_2"><g id="_Group_3"><circle id="_Path_" cx="18.5" cy="18.5" fill="none" r="5" stroke="#303c42" stroke-linecap="round" stroke-linejoin="round"/></g><path id="_Path_2" d="m16.5 18.5h4" fill="none" stroke="#303c42" stroke-linecap="round" stroke-linejoin="round"/></g></g><g fill="none" stroke="#303c42" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="11" cy="3.5" rx="10.5" ry="3"/><path d="m14 16.38c-.94.08-1.94.12-3 .12-5.8 0-10.5-1.34-10.5-3"/><path d="m21.5 8.5c0 1.66-4.7 3-10.5 3s-10.5-1.34-10.5-3"/><path d="m.5 3.5v15c0 1.66 4.7 3 10.5 3 1.19 0 2.32-.06 3.39-.16"/><path d="m21.5 14.52v-11.02"/></g></g></svg>
                    No Course found!
                </div>


                <div class="row g-4 gx-lg-5">
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="d-flex flex-column gap-3"> 
                            <a href="#" class="d-block">
                                <img 
                                    src="assets/images/global/ad-banner-3.webp" 
                                    alt="Ads Banner"
                                    class="img-fluid"
                                >
                            </a>
                            <a href="#" class="d-block">
                                <img 
                                    src="assets/images/global/ad-banner-4.webp" 
                                    alt="Ads Banner"
                                    class="img-fluid"
                                >
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <ul class="d-flex flex-column gap-3 gap-md-4 list-unstyled ps-0 mb-0">
                            <?php
                                $image="assets/images/global/course-1.jpg";
                                $title="NEET Achievers Program";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-2.jpg";
                                $title="AIIMS Excellence Course";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-3.jpg";
                                $title="Medical Genius NEET Crash Course";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-4.jpg";
                                $title="NEET Foundation Course";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-5.jpg";
                                $title="Elite MBBS Entrance Coaching";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-6.jpg";
                                $title="NEET Rank Booster Program";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-7.jpg";
                                $title="Biology Ace for NEET";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                            <?php
                                $image="assets/images/global/course-8.jpg";
                                $title="Medical Entrance Mastery";
                                include('includes/components/course-list-item.inc.php');
                            ?> 
                        </ul> 

                        <div class="mb-5 mb-lg-0"> 
                            <?php include('includes/pagination.inc.php');  ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="d-flex flex-column gap-3">
                            <a href="#" class="d-block">
                                <img 
                                    src="assets/images/global/ad-banner-1.webp" 
                                    alt="Ads Banner"
                                    class="img-fluid"
                                >
                            </a>
                            <a href="#" class="d-block">
                                <img 
                                    src="assets/images/global/ad-banner-2.webp" 
                                    alt="Ads Banner"
                                    class="img-fluid"
                                >
                            </a>
                        </div>
                    </div>
                </div><!--.row-->


            </div><!--.container-->
        </div>
        <!-- Lisitng section end -->





    </main>



  
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?>  
 
</body>
</html>
 