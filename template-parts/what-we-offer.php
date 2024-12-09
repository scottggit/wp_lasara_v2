
<? /*
<h2 class="mb-5 text-center">What We Offer</h2>
<div class="row what-we-offer-list">
    <?php
    if (have_rows('services', 'options')) :
        while (have_rows('services', 'options')) : the_row();
            $link = get_sub_field('service_parent_link');
            $index = get_row_index();
    ?>
            <div class="col-lg-3 col-6 px-xl-4">
                <a href="<?php echo $link['url']; ?>">
                    <p class="font-black display-6 text-dark mb-4"><?php echo $link['title'] ?></p>
                </a>
                <?php if (have_rows('service_children', 'options')) : ?>
                    <ul class="list-check-grad">
                        <?php while (have_rows('service_children', 'options')) : the_row();
                            $child_link = get_sub_field('service_children_link');
                        ?>
                            <li><a href="<?php echo $child_link['url']; ?>" class="text-primary-light text-small"><u><?php echo $child_link['title'] ?></u></a></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</div>

*/ ?>