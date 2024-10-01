    
    <!-- subscribtion wrapper start -->
     <div class="pt-5 newsletter__wrapper position-relative z-3">
        <div class="container">
            <div class="p-4 p-md-5  rounded-4" style="background:var(--blue);">
                <h2 class="fs-2 text-white text-center fw-bold">Subscribe to our Newsletter</h2>
                <p class="fs-5 text-white text-center mb-4">Hostel Notidication News Update</p>
                <form action="#" method="post">
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="name" class="label">Full name</label>
                                <input type="name" id="name" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="phone" class="label">Phone number</label>
                                <input type="text" id="phone" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="email" class="label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="country" class="label">Country</label>
                                <input type="text" id="country" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="college" class="label">College name</label>
                                <input type="text" id="college" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="input__group">
                                <label for="course" class="label">Course name</label>
                                <input type="text" id="course" class="form-control" placeholder="">
                            </div> 
                        </div>
                        <div class="col-12 text-center"> 
                            <button type="submit" class="btn btn-outline-white border-2 px-5 py-3 fs-5 gap-3 mt-3">
                                Subscribe
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 56 56"><path fill="white" d="M49.762 28c0-.586-.234-1.125-.703-1.57L33.543 10.938c-.516-.516-1.031-.704-1.594-.704c-1.148 0-2.039.844-2.039 2.016c0 .563.188 1.101.563 1.477l5.25 5.343l7.898 7.196l-5.672-.352H8.301c-1.195 0-2.063.867-2.063 2.086s.867 2.086 2.063 2.086h29.648l5.696-.352l-7.922 7.196l-5.25 5.343c-.375.352-.563.914-.563 1.477c0 1.172.89 2.016 2.04 2.016c.562 0 1.054-.211 1.523-.657L49.059 29.57c.469-.445.703-.984.703-1.57"/></svg>
                            </button>
                        </div>
                    </div>
                </form>
                  
            </div>
        </div><!--.container-->
     </div>
    <!-- subscribtion wrapper end -->
    
    <!-- Footer Wrapper Start -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 text-center text-md-start">
                    <a href="index.php" class="logo" aria-label="Golap Admission">
                        <img src="assets/images/golap-logo.webp" width="200" height="60" alt="Golap Admission">
                    </a>
                    <p class="fs-6 mt-2 mt-sm-3 mt-md-4 fw-semibold text-dark">Connect with us</p>
                    <?php include('includes/social-links.inc.php'); ?>
                </div><!--.//col-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6"> 
                    <p class="fs-6 fw-semibold text-dark">Trending Jobs</p>
                    <ul class="d-flex gap-1 flex-column "> 
                        <li><a href="#">Search Jobs</a></li>
                        <li><a href="#">Browse Skills</a></li>
                        <li><a href="#">Submit Resume</a></li>
                        <li><a href="#">Candidate Login</a></li>
                        <li><a href="#">Companies Hiring Now</a></li>
                    </ul>
                </div><!--.//col-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6"> 
                    <p class="fs-6 fw-semibold text-dark">Company Portal</p>
                    <ul class="d-flex gap-1 flex-column "> 
                        <li><a href="#">Employer Login</a></li>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">View Applicants</a></li>
                        <li><a href="#">Search Candidates</a></li>
                        <li><a href="#">Blogs</a></li> 
                    </ul>
                </div><!--.//col-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6"> 
                    <p class="fs-6 fw-semibold text-dark">Company Portal</p>
                    <ul class="d-flex gap-1 flex-column "> 
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Agency Enquiry</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!--.//col-->
            </div><!--.//row--> 
        </div><!--.//container-->
        <div class="copy__right p-3 mt-4 mt-md-5 border-top" style="border-color: #2222221f !important;">
            <div class="container">
                <p class="text-center text-dark mb-0">
                    Copyright © <?php echo date('Y'); ?> Golap Admission. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Wrapper End -->
     
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="backTop" class="btn backTop justify-content-center align-items-center rounded-circle p-0 bg-primary" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path fill="#292929" d="M11.5 19V6.921l-5.792 5.792L5 12l7-7l7 7l-.708.713L12.5 6.921V19z"/></svg>
    </button>
    <!-- JS: All Vendors --> 
    <script src="assets/js/jQuery.min.js"></script>  
    <script src="assets/js/bootstrap.bundle.min.js"></script>  
    <script src="assets/js/owl.carousel.min.js"></script>  
    <!-- JS: Designer Script -->
    <script src="assets/js/script.js"></script>  
   
 
  




