<div class="blog__card rounded-3 p-0 bg-white overflow-hidden">
    <a href="#" class="d-block overflow-hidden">
        <img 
            src="<?php echo $image; ?>" 
            alt="blog thumbnail" loading="lazy"
            class="img-fluid" width="" height=""
        >
    </a>
    <div class="p-3">
    <p class="fw-medium d-block text-primary"><?php echo $date; ?></p>
        <h3 class="title fs-5 fw-medium mb-2">
            <a href="#"><?php echo $title; ?></a>
        </h3>
        <p class="desc small mb-2"><?php echo $description; ?></p> 
        <div class="">
            <a href="#" class="btn text-primary p-0">Read More</a>
        </div>
    </div>
</div>