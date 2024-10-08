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

    <div class="py-5">
        <div class="container">
            <div class="login__form col-lg-6 col-xl-5 mx-auto border border-light rounded-3 p-4 p-md-5 shadow-sm"> 
                <p class="modal-title fs-3 fw-bold text-dark mb-4 mb-md-5 text-center" id="loginModalLabel">Login</p>
                <form action="#" class="d-flex flex-column gap-3">
                    <div class="form-group"> 
                        <input type="email" class="form-control" id="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group"> 
                        <div class="position-relative"> 
                            <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
                            <input type="checkbox" id="toggleLoginPassword" class="form-check-input password__toggle__btn position-absolute top-50 translate-middle-y">  
                        </div>
                    </div>
                    <div class="form-group mt-3"> 
                        <button class="btn btn-primary w-100 py-3 rounded-pill text-uppercase fw-semibold">Login</button>
                    </div>
                    <div class="mt-3 or__box text-center text-muted position-relative">
                        <div class="position-absolute top-50 translate-middle-y start-0 w-100" style="height:2px;background:linear-gradient(90deg, #fcfcfc7d 0%, #dbdbdb 50%, #fff);"></div>
                        <span class="bg-white px-3 position-relative z-3">or continue with</span>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <button class="btn social__btn rounded-circle p-1">
                            <img src="assets/images/icons/google.webp" width="32" height="32" alt="goggle">
                        </button>
                        <button class="btn social__btn rounded-circle p-1">
                            <img src="assets/images/icons/facebook.webp" width="32" height="32" alt="facebook">
                        </button>
                        <button class="btn social__btn rounded-circle p-1">
                            <img src="assets/images/icons/linkedin.webp" width="32" height="32" alt="linkedin">
                        </button> 
                    </div>
                </form>
                <div class="mt-5 pt-md-3">
                    <p class="text-center">
                        Have not account yet? <br>
                        <a href="#" data-bs-target="#signUpModal" data-bs-toggle="modal" class="link text-uppercase fw-medium">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
      
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 