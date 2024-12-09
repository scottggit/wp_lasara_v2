<?php get_header(); ?>
<div class="main-container mt-4r">
	<section class="bg-img bg-overlay bg-top bg-overlay-left-full">
		<div class="container-fluid py-5 mb-xl-5 z-1 cross-vertical-right">
			<div class="row py-lg-5 text-center justify-content-center">
				<div class="col-xl-12 col-md-12">
					<h1 class="display-4 text-white mb-5 ">
						Our Team
					</h1>
				</div>
				<div class="w-100"></div>
				<div class="col-xxl-12 col-xl-12 col-md-12">
					<h3 class="font-light text-white line-height-lg">
						Our Team is Here to Help, Serving the Entire USA
					</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="py-2 mt-lg-5">
		<div class="container">

			<?php
			if (have_rows('team_member', 'options')) :
				$i = 1;
				while (have_rows('team_member', 'options')) : the_row();
					$name = get_sub_field('name');
					$position = get_sub_field('position');
					$bio = get_sub_field('bio');
					$image = get_sub_field('image');
					$hide = get_sub_field('hide');
			?>
					<?php if (!$hide) :
						if ($i % 2 != 0) {
							$image_class = 'col-lg-5 pe-lg-5';
							$content_class = 'col-lg-6 offset-lg-1';
						} else {
							$image_class = 'col-lg-5 ps-lg-5 offset-lg-1 order-lg-2';
							$content_class = 'col-lg-6 order-lg-1';
						}
					?>
						<div class="row align-items-center py-lg-5 py-4">
							<div class="<?= $image_class ?>">
								<?php if ($image) : ?>
									<div class="bg-img-overlay bg-img-overlay-right-small bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right">
										<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-fluid border-r-1 w-100 h-100" />
									</div>
								<?php else : ?>
									<div class="bg-light bg-img-overlay bg-img-overlay-right-small bg-img-overlay-sm-right sticky-top border-r-1 mb-5 mb-md-0 bg-img-overlay-sm-right text-center pt-5" style="min-height: 400px;">
										<img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="LaSara Medical Group" class="img-fluid m-auto px-4 px-lg-5 pt-5" />
									</div>
								<?php endif; ?>
							</div>
							<div class="<?= $content_class ?>">
								<h2><?= $name ?></h2>
								<h4 class="font-extralight text-secondary mt-3 mb-4"><?= $position ?></h4>

								<div><?= $bio ?></div>
							</div>
						</div>
					<?php 
					$i++;endif; ?>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</section>
	<?php get_template_part('template-parts/locations'); ?>
</div>

<?php get_footer(); ?>