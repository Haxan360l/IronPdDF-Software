<section class="library py-5 library-section text-white">
    <div class="container text-center">

        <h2 class="fw-bold mb-3"><?= esc($library['title']) ?></h2>
        <p class="text-white-50 mb-4"><?= esc($library['description']) ?></p>

        <div class="d-flex justify-content-center gap-3 flex-wrap products-group">
            <?php foreach ($library['products'] as $product): ?>
                <div class="badge rounded-pill text-center badge-text">
                    <span class="rounded-pill status 
                    <?= $product['status'] === 'Released' ? 'released' : 'waitlist' ?>">
                        # <?= esc($product['status']) ?>
                    </span>
                    <?= esc($product['name']) ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>