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
                        <a href="#" class="btn btn-outline-secondary w-100 mt-3">Add comment</a>
                    </div>
                </div>
                 
            </div><!--./container-->
        </section>