<li class="bg-white rounded-3 p-3 p-md-4 border" style="border-color: var(--grey-color);">
    <div class="d-flex gap-3">
        <img src="<?php echo $thumbnail;?>" class="rounded-circle object-fit-cover" style="width: 3rem;height: 3rem;" alt="Admin image">
        <div class="col">
            <p class="fs-12 text-muted mb-0">
                <span class="fw-semibold text-dark"><?php echo $name;?></span> <span class="fw-medium">Publié le 21 avril 2020 à 11h14</span>
            </p>
            <p class="mb-1 text-dark fw-bold"><?php echo $titel;?></p>
            <?php if($icon == 'icon'){ ?>
            <img src="assets/images/icons/star.svg" alt="icon" class="img-fluid w-auto icon">
            <?php } ?>
            <p class="mt-2 text-dark"><?php echo $comment;?></p>
            
            <div class="d-flex gap-4 mb-2">
                <button class="btn p-0 text-muted gap-2 fw-semibold align-items-center fs-13">
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.10438 5.23535H2.18974C1.53266 5.23535 1 5.73958 1 6.36158V11.1679C1 11.7899 1.53266 12.2942 2.18974 12.2942H5.10438C5.76145 12.2942 6.29412 11.7899 6.29412 11.1679V6.36158C6.29412 5.73958 5.76145 5.23535 5.10438 5.23535Z" stroke="#757575" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M6.29395 6.58368L10.5381 1.14004C10.6149 1.04157 10.7133 0.961886 10.8258 0.907064C10.9382 0.852242 11.0617 0.82373 11.187 0.82373V0.82373C11.3188 0.823731 11.4491 0.852129 11.5689 0.906959C11.6887 0.961789 11.7951 1.04177 11.881 1.1414C11.9668 1.24104 12.03 1.35797 12.0662 1.48419C12.1023 1.61041 12.1107 1.74293 12.0906 1.87266L11.6179 4.92483H14.4461C14.6767 4.92483 14.9044 4.97591 15.1127 5.0744C15.321 5.17289 15.5047 5.31631 15.6504 5.49424C15.7961 5.67217 15.9002 5.88015 15.9551 6.10311C16.01 6.32606 16.0144 6.55838 15.968 6.78324L14.9022 11.9415C14.8301 12.2903 14.6393 12.6037 14.3621 12.8287C14.0848 13.0538 13.7381 13.1767 13.3804 13.1767H10.703C9.38903 13.1767 8.09514 12.8558 6.93476 12.2421L6.29395 11.9032" stroke="#757575" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>  
                    <span><?php echo $like;?></span>                                                           
                </button>
                <button class="btn p-0 text-muted gap-2 fw-semibold text-uppercase fs-13"> 
                    <span>response</span>                                                           
                </button>
            </div>
            <button class="btn p-0 fs-12 fw-medium gap-2">
                <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 6L0.602886 -2.19575e-07L8.39711 -9.00968e-07L4.5 6Z" fill="#757575"/>
                </svg> 
                <span>comes 7 response</span>
            </button>
            <?php if($respond == 'true'){ ?>
                <div class="d-flex gap-3 mt-4">
                    <img src="assets/images/global/user-04.png" class="rounded-circle object-fit-cover" style="width: 2.5rem;height: 2.5rem;" alt="Admin image">
                    <div class="col">
                        <p class="fs-12 text-muted mb-2">
                            <span class="fw-semibold text-dark">Par Cyrille Diallo</span> <span class="fw-medium">Publié le 21 avril 2020 à 11h14</span>
                        </p>
                        <p class="mb-3 text-dark">Ex his quidam aeternitati se commendari posse per statuas aestimantes eas ardenter adfectant quasi</p>
                        
                        <div class="d-flex gap-4 mb-2">
                            <button class="btn p-0 text-muted gap-2 fw-semibold align-items-center fs-13">
                                <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.10438 5.23535H2.18974C1.53266 5.23535 1 5.73958 1 6.36158V11.1679C1 11.7899 1.53266 12.2942 2.18974 12.2942H5.10438C5.76145 12.2942 6.29412 11.7899 6.29412 11.1679V6.36158C6.29412 5.73958 5.76145 5.23535 5.10438 5.23535Z" stroke="#757575" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M6.29395 6.58368L10.5381 1.14004C10.6149 1.04157 10.7133 0.961886 10.8258 0.907064C10.9382 0.852242 11.0617 0.82373 11.187 0.82373V0.82373C11.3188 0.823731 11.4491 0.852129 11.5689 0.906959C11.6887 0.961789 11.7951 1.04177 11.881 1.1414C11.9668 1.24104 12.03 1.35797 12.0662 1.48419C12.1023 1.61041 12.1107 1.74293 12.0906 1.87266L11.6179 4.92483H14.4461C14.6767 4.92483 14.9044 4.97591 15.1127 5.0744C15.321 5.17289 15.5047 5.31631 15.6504 5.49424C15.7961 5.67217 15.9002 5.88015 15.9551 6.10311C16.01 6.32606 16.0144 6.55838 15.968 6.78324L14.9022 11.9415C14.8301 12.2903 14.6393 12.6037 14.3621 12.8287C14.0848 13.0538 13.7381 13.1767 13.3804 13.1767H10.703C9.38903 13.1767 8.09514 12.8558 6.93476 12.2421L6.29395 11.9032" stroke="#757575" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round"/>
                                </svg>  
                                <span>3</span>                                                           
                            </button>
                            <button class="btn p-0 text-muted gap-2 fw-semibold text-uppercase fs-13"> 
                                <span>response</span>                                                           
                            </button>
                        </div> 
                    </div>
                </div>         
            <?php } ?>
        </div>
    </div>         
</li>