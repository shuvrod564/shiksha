<div class="college__card rounded-3">
    <a href="#" class="d-block rounded-3 overflow-hidden">
        <img 
            src="<?php echo $image; ?>" 
            alt="College thumbnail" loading="lazy"
            class="img-fluid" width="" height=""
        >
    </a>
    <div class="mt-3">
        <h3 class="fs-5 fw-medium mb-3">
            <a href="#"><?php echo $title; ?></a>
        </h3>
        <div class="d-inline-flex gap-2 align-items-start small lh-sm mb-3 mb-md-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F5E64" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <span><?php echo $location; ?></span>
        </div>
        <div class="d-flex gap-3">
            <a href="#" class="btn btn-primary w-50">Details</a>
            <a href="#" class="btn btn-primary w-50">Apply</a>
        </div>
    </div>
</div>