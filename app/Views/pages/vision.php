<section class="why-strip py-5 why-section">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-4 text-center">
                <img src="<?= base_url($vision['image']) ?>" class="img-fluid" alt="HTML to PDF">
            </div>

            <div class="col-md-8 text-white">
                <h2 class="fw-bold mb-3"><?= esc($vision['title']) ?></h2>

                <?php foreach ($vision['text'] as $paragraph): ?>
                    <p class="text-white-60"><?= esc($paragraph) ?></p>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</section>