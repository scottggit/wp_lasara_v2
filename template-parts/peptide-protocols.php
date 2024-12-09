<?php if (have_rows('peptide_links', 'options')) : ?>
    <h2 class="mb-5 text-center">Shop Peptides</h2>
    <div class="service-tile-container">
        <?php while (have_rows('peptide_links', 'options')) : the_row();
            $child_link = get_sub_field('peptide_sub_page');
            /* Fix Grid if item is less than 5 */
                echo '<style>.service-tile-container{';
                echo '--grid-column-count: 4';
                echo '}</style>';
        ?>
            <div class="service-tile p-2 p-lg-4">
                <a href="<?= $child_link['url'];?>">
                    <span class="service-img me-1 me-md-3 service-img-svg">
                        <img src="<?php bloginfo('template_directory') ?>/img/service/icon-check.svg" alt="Service Icon" />
                    </span>
                    <span class="h5 font-bold service-title"><?= $child_link['title'];?></span>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>