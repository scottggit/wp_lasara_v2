<h2 class="mb-5 text-center">BPC-157 Protocols</h2>
<div class="what-we-offer-list">
    <?php if (have_rows('bpc-157_sub_pages', 'options')) : ?>
        <ul class="list-check-grad bpc-protocol-list">
            <?php while (have_rows('bpc-157_sub_pages', 'options')) : the_row();
                $title = get_sub_field('page_title');
                $link = get_sub_field('page_link');
            ?>
                <li><a href="<?php echo $link; ?>" class="text-primary-light text-small"><u><?php echo $title ?></u></a></li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>

<style>
    @media screen and (min-width:768px) {
        .bpc-protocol-list {
            column-count: 2;
        }
    }
    @media screen and (min-width:992px) {
        .bpc-protocol-list {
            column-count: 3;
        }
    }
</style>