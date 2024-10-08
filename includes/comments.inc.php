<section class="py-5 bg-gradient"> 
            <div class="container py-md-4">
                <h2 class="fs-1 fw-bold text-dark">Comments</h2>
                <p>Total comments: 10</p>
                <div class="comment__area position-relativeposition-relative mt-4"> 
                    <div class="position-relative z-3">  
                        <ul class="list-unstyled ps-0 mb-0 d-flex flex-column gap-2 my-2">
                            <?php
                                $thumbnail="assets/images/global/user-01.png";
                                $name="Par Adama Ndiaye";
                                $titel="Tip top";
                                $icon='icon';
                                $comment="Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex";
                                $like="25";
                                $respond="false";
                                include('includes/components/comment-item.inc.php');
                            ?> 
                            <?php
                                $thumbnail="assets/images/global/user-02.png";
                                $name="Par Moïse Ba Publié";
                                $titel="Tip top";
                                $icon='icon';
                                $comment="Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi";
                                $like="22";
                                $respond="true";
                                include('includes/components/comment-item.inc.php');
                            ?> 
                            <?php
                                $thumbnail="assets/images/global/user-03.png";
                                $name="Par Youssef Diop";
                                $titel="Tip top";
                                $icon='icon';
                                $comment="Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi plus praemii de figmentis aereis sensu carentibus adepturi, quam ex conscientia honeste recteque factorum, easque auro curant inbracteari, quod Acilio Glabrioni delatum est primo, cum consiliis armisque regem superasset Antiochum. quam autem sit pulchrum exigua haec spernentem et minima ad ascensus verae gloriae tendere longos et arduos lorem ipsum dolores vanitum";
                                $like="15";
                                $respond="false";
                                include('includes/components/comment-item.inc.php');
                            ?> 
                        </ul>
                         
                    </div>
                </div>

                <div class="p-4 rounded-3 bg-white mt-4 border table-border-color">
                    <h2 class="fs-4 fw-bold text-dark mb-3">Leave a Comment</h2>
                    <form action="#" class="row g-4">
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
                        <div class="col-12">
                            <div class="input__group">
                                <label for="comment" class="label">Your Comment</label>
                                <textarea name="comment" id="comment" cols="30" rows="4" class="form-control h-auto"></textarea>
                            </div>  
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary px-5 fs-5 fw-medium">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
                 
            </div><!--./container-->
        </section>