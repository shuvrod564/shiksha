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
                <h1 class="text-center ff-pt fw-bold display-6 text-white mb-0">My Profile</h1>
                
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
                        <div class="card shadow-sm border-light">
                            <div class="card-header bg-white d-flex align-items-center justify-content-between p-4 border-light"> 
                                <h1 class="fs-3 text-dark fw-semibold mb-0">My Profile</h1>
                                <!-- <a href="#" class="btn btn-primary">Edit Profile</a> -->
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="name" class="label">Full name</label>
                                            <input type="name" id="name" class="form-control" value="Jhon Deo">
                                        </div> 
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="user_name" class="label">User name</label>
                                            <input type="text" id="user_name" class="form-control" value="jhon@gmail.com">
                                        </div> 
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="email" class="label">Email</label>
                                            <input type="email" id="email" class="form-control" value="jhon@gmail.com">
                                        </div> 
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="phone" class="label">Phone number</label>
                                            <input type="text" id="phone" class="form-control" value="+91 xxx xxx xxx">
                                        </div> 
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="country" class="label">Country</label>
                                            <input type="text" id="country" class="form-control" value="India">
                                        </div> 
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input__group">
                                            <label for="location" class="label">Location</label>
                                            <input type="text" id="location" class="form-control" value="India">
                                        </div> 
                                    </div>
                                    <div class="col-12">
                                        <div class="input__group">
                                            <label for="country" class="label">Bio</label>
                                            <textarea name="bio" id="bio" cols="30" rows="4" class="form-control h-auto"></textarea>
                                        </div> 
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary btn-lg fw-medium py-3 px-4">Save Changes</button>
                                    </div>
                                </div>


                            </div>

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
 