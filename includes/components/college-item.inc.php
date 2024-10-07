<div class="college__card rounded-3">
    <div class="position-relative"> 
        <figure class="position-absolute logo__box rounded-circle d-flex justify-content-center align-items-center m-0">
            <img 
                src="assets/images/golap-fab-logo.webp"  
                alt="Logo" loading="lazy"
                class="img-fluid position-relative z-3" width="" height=""
            >
        </figure>
        <button class="btn position-absolute cart__btn rounded-circle d-flex justify-content-center align-items-center m-0">
   
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><g data-name="Layer 2" id="Layer_2"><g data-name="Layer 1" id="Layer_1-2"><path d="M6.5,13A1.5,1.5,0,1,0,8,14.5,1.5,1.5,0,0,0,6.5,13Zm0,2a.5.5,0,1,1,.5-.5A.5.5,0,0,1,6.5,15Z"/><path d="M12.5,13A1.5,1.5,0,1,0,14,14.5,1.5,1.5,0,0,0,12.5,13Zm0,2a.5.5,0,1,1,.5-.5A.5.5,0,0,1,12.5,15Z"/><path d="M15.686,4.036a.5.5,0,0,0-.65.278l-1.75,4.373A.5.5,0,0,1,12.823,9H6.254a.5.5,0,0,1-.48-.362L4.188,3.088A1.506,1.506,0,0,0,2.746,2H.5a.5.5,0,0,0,0,1H2.746a.5.5,0,0,1,.48.362l1.586,5.55a1.5,1.5,0,0,0,.216.448A.5.5,0,0,0,5,9.5v1A1.5,1.5,0,0,0,6.5,12h7a.5.5,0,0,0,0-1h-7a.5.5,0,0,1-.5-.5V9.958A1.448,1.448,0,0,0,6.254,10h6.569a1.491,1.491,0,0,0,1.392-.943l1.749-4.371A.5.5,0,0,0,15.686,4.036Z"/><path d="M7.5,3H9V4.5a.5.5,0,0,0,1,0V3h1.5a.5.5,0,0,0,0-1H10V.5a.5.5,0,0,0-1,0V2H7.5a.5.5,0,0,0,0,1Z"/></g></g></svg>

        </button>
        <a href="#" class="d-block rounded-3 overflow-hidden">
            <img 
                src="<?php echo $image; ?>" 
                alt="College thumbnail" loading="lazy"
                class="img-fluid" width="" height=""
            >
        </a>
    </div>
    <div class="mt-3">
        <h3 class="fs-5 fw-medium mb-3">
            <a href="college-details.php"><?php echo $title; ?></a>
        </h3>
        <div class="d-inline-flex gap-2 align-items-start small lh-sm mb-3 mb-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F5E64" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <span><?php echo $location; ?></span>
        </div>
        <div class="d-flex gap-3">
            <a href="college-details.php" class="btn btn-primary w-50">Details</a>
            <a href="#" class="btn btn-primary w-50">Apply</a>
        </div>
    </div>
</div>