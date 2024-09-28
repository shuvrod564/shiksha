<div class="scholarship__card p-3 p-sm-4 rounded-3">
    <div class="d-flex align-items-start justify-content-between">
        <figure class="logo__box d-flex align-items-center justify-content-center rounded-circle p-2">
            <img src="<?php echo $image; ?>" class="img-fluid" alt="">
        </figure>
        <button class="btn btn-outline-primary rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48 0 393.4 130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4 336 48 48 48 48 0 336 0c26.5 0 48 21.5 48 48l0 440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488L0 48z"/></svg>
        </button>
    </div>
    <h3 class="fs-5 mb-3">
        <a href="#"><?php echo $title; ?></a>
    </h3>
    <div class="d-flex flex-wrap align-items-center fs-15 info__list">
        <div class="d-inline-flex align-items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#1ca1df" width="14" height="14" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <span><?php echo $location; ?></span>
        </div>
        <div class="d-inline-flex align-items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#1ca1df" width="14" height="14" viewBox="0 0 448 512"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z"/></svg>
            <span><?php echo $deadline; ?></span>
        </div>
        <div class="d-inline-flex align-items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#1ca1df" width="14" height="14" viewBox="0 0 320 512"><path d="M0 64C0 46.3 14.3 32 32 32l64 0 16 0 176 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-56.2 0c9.6 14.4 16.7 30.6 20.7 48l35.6 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-35.6 0c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256l80 0c32.8 0 61-19.7 73.3-48L32 208c-17.7 0-32-14.3-32-32s14.3-32 32-32l153.3 0C173 115.7 144.8 96 112 96L96 96 32 96C14.3 96 0 81.7 0 64z"/></svg>
            <span><?php echo $amount; ?></span>
        </div>
    </div>
</div>