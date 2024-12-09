<?php if( have_rows('pdf_links') ):
    // Loop through rows.
    while( have_rows('pdf_links') ) : the_row();
?>
    <div class="card shadow border-0 border-r-1 border-none align-items-start p-4 px-lg-5 mb-4" title="<?php echo get_sub_field('file_name',false);?>">
        <h3 class="font-bold text-primary-light"><?php echo get_sub_field('title',false);?></h3>
        <p class="mb-4"><?php echo get_sub_field('description',false);?></p>
        <a href="<?php bloginfo('template_directory') ?>/docs/<?php echo get_sub_field('file_name',false);?>" class="btn btn-primary btn-w-icon videoPopup">
            <img src="<?php bloginfo('template_directory') ?>/img/icon-pdf.svg" alt="Icon" class="btn-icon">
            <span class="btn-text"><?php echo get_sub_field('file_name',false);?></span>
        </a>
    </div> 
<?php
    // End loop.
    endwhile;
endif;
?>