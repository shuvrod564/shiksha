<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>About Us</title>
 
    <!-- All Stylesheets -->
    
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <main>
        
        <!-- Preloader, Main Navigation Menu --> 
        <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
        
        <!-- Header section start --> 
        <div class="position-relative py-5">
            <img src="assets/images/global/hero-bg.webp" class="img-fluid w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-0" alt="banner image">
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-black opacity-50"></div>
            <div class="container py-md-5 position-relative z-3">
                <h1 class="fs-1 fw-semibold text-white mb-0 text-center">About Us</h1>  
            </div><!--.container-->
        </div>
        <!-- Header section end -->
        
        <!-- About us section start -->
        <section class="py-4 py-xl-5">
            <div class="container my-lg-4">
                <div class="row g-4 g-xl-5 align-items-center">
                    <div class="col-lg-5"> 
                        <p class="h4 mb-0 fw-normal text-dark">About Us</p>
                        <h2 class="h3 fw-semibold text-dark mb-0">
                            Escavate Your Excellenzia
                        </h2>  
                    </div>
                    <div class="col-lg-7">
                        <p class="text-dark">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odit, quis fuga nemo voluptates eaque officia laborum, dolorum alias perferendis architecto quo accusantium ipsa placeat, asperiores eum inventore recusandae impedit?
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About us section end -->

        <!-- B-G-C color section Start -->
        <div class="pb-lg-4">
            <div class="container"> 
                <img 
                    src="assets/images/about/about-company.webp" 
                    srcset="
                        assets/images/about/about-company-400.webp 575w,
                        assets/images/about/about-company-800.webp 991w,
                        assets/images/about/about-company.webp 1200w
                    " 
                    class="img-fluid" alt="Nedheya’s Trailblazer"
                    width="1296" height="496"
                >
            </div>
        </div>
        <!-- B-G-C color section End -->

        <!-- Our Mission section Start -->
        <section class="py-5">
            <div class="container">
                <div class="row g-3 g-lg-4 align-items-center">
                    <div class="col-lg-6 d-flex">
                        <img 
                            src="assets/images/about/my-experiences.webp" 
                            alt="About Nedheya"
                            class="img-fluid"
                        >
                    </div><!--//.col-->
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque voluptas obcaecati velit, explicabo earum laborum porro aspernatur illum. Corrupti mollitia atque quidem placeat provident ea necessitatibus deserunt doloribus deleniti saepe. Maxime necessitatibus, unde, aliquam ducimus sunt natus veniam perferendis, ullam harum alias provident quos in dolor adipisci soluta iusto non id ipsa ab. Molestiae, deleniti. Quaerat, amet rerum. Quae, harum.

                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis veniam dignissimos, quas, dolorem eveniet voluptatum tempora omnis commodi qui atque vel possimus culpa optio totam excepturi earum alias, placeat minus dolores nostrum veritatis sequi recusandae nemo. In possimus aperiam nam laboriosam quia maiores saepe culpa voluptatum at! Accusantium ad excepturi amet id perferendis. Totam nihil incidunt quidem nesciunt dolorem eaque.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nam deleniti aspernatur quos eveniet quis, veniam quo alias accusantium dolorem odio in earum enim iure, autem vitae commodi. Vitae cumque laborum ducimus numquam quos expedita excepturi suscipit doloremque optio architecto.
                        </p>
                    </div><!--//.col-->
                </div><!--//.row-->
            </div><!--//.container--> 
        </section>
        <!-- Our Mission section End -->
    </main>

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 

   
 
</body>
</html>