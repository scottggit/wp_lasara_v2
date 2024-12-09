<?php global $services; ?>
<h2 class="mb-5 text-center">We Specialize In</h2>
  <section class="home-service">
    <div class="container px-xl-5">
		<style>
			.home-service .service-tile-container{
				--grid-column-count: 4 !important;
			}
            .home-service{margin-top: 0;}
		</style>
      <?php $services = [
        'weight-loss-treatments' => 'Weight Loss',
        'testosterone-hormone-replace-therapy' => 'Testosterone',
        'sexual-health-treatments' => "Men’s Sexual Health",
        'performance-peptide-protocols' => 'Peptides & Medication',
      ]; ?>
      <?php get_template_part('template-parts/service-tile-w-link'); ?>
    </div>
  </section>