<?php if( have_rows('clinical_studies_links') ):
    // Loop through rows.
    while( have_rows('clinical_studies_links') ) : the_row();
?>
    <div class="card shadow border-0 border-r-1 border-none align-items-start p-4 px-lg-5 mb-4" title="<?php echo get_sub_field('link_label',false);?>">
        <p class="mb-4"><?php echo get_sub_field('description',false);?></p>
        <?php $type = get_sub_field('link_type',false);?>
        <?php if($type == 'PDF'):?>
            <a href="<?php bloginfo('template_directory') ?>/docs/<?php echo get_sub_field('url__pdf',false);?>" class="videoPopup">
        <?php elseif($type == 'URL'):?>
            <a href="<?php echo get_sub_field('url__pdf',false);?>" target="_blank" class="">
        <?php endif;?>
            <span class="font-bold text-primary-light"><?php echo get_sub_field('link_label',false);?></span>
        </a>
    </div> 
<?php
    // End loop.
    endwhile;
endif;
?>