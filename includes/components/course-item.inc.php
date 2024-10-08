<div class="college__card rounded-3 p-0 bg-white overflow-hidden">
    <a href="course-details.php" class="d-block overflow-hidden">
        <img 
            src="<?php echo $image; ?>" 
            alt="College thumbnail" loading="lazy"
            class="img-fluid" width="" height=""
        >
    </a>
    <div class=" p-3">
        <h3 class="title fs-5 fw-medium mb-2">
            <a href="course-details.php"><?php echo $title; ?></a>
        </h3>
        <p class="desc small mb-3 mb-md-4"><?php echo $description; ?></p> 
        <div class="d-flex gap-3">
            <a href="course-details.php" class="btn btn-primary w-50">Details</a>
            <a href="#" class="btn btn-primary w-50">Buy now</a>
        </div>
    </div>
</div>