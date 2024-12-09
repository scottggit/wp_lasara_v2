<?php
global $faqs;
$index = 1;
?>
<?php foreach ($faqs as $title => $description) : ?>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $index ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $index ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $index ?>">
                <?php echo $title; ?>
            </button>
        </h2>
        <div id="panelsStayOpen-collapse<?php echo $index ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $index ?>">
            <div class="accordion-body">
                <?php echo $description; ?>
            </div>
        </div>
    </div>
<?php $index++;
endforeach; ?>