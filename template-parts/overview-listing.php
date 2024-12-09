<?php global $services;
global $link; 

?>
<div class="row">
    <?php foreach($services as $link => $title):?>
    <div class="col-md-4 pb-5">
        <div class="service-item">

            <?php
                  $post_id=url_to_postid($link);

             
            if(has_post_thumbnail($post_id)){ 
            ?>
            <div class="pb-2 w-100">
                <img src="<?php echo  get_the_post_thumbnail_url($post_id) ;?>" class="w-100 br-5" alt="">
                <h5 class="card-title pt-4"> <a href="<?php echo $link;?>"><?php echo $title;?></a></h5>
            </div>
            <?php }else{ ?>
            <div class="pb-2  w-100">
                <img src="<?php echo bloginfo('template_directory') ?>/img/placeholder.jpg " class="w-100" />
                <h5 class="card-title pt-4"> <a href="<?php echo $link;?>"><?php echo $title;?></a></h5>
            </div>
            <?php  } ?>




            <div class="card-text d-block">
                <?php
  
        
        echo get_the_excerpt($post_id);
        ?>
                <a href="<?php echo $link; ?>"
                    class="mt-4 btn  btn-grad mx-1 position-relative z-2 px-3 align-items-center">Learn More</a>
            </div>

        </div>
    </div>
    <?php endforeach;?>
    <div class="pagination-wrapper">
        <?php  wp_pagenavi( ); ?>
    </div>
</div>