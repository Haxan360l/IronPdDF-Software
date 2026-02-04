<section class="hero page-text">

    <div class="container">
        <div class="image-cont">
            <img class="image-bg" src="<?= base_url($hero['image_bg']) ?>" alt="">
        </div>
        <div class="row align-items-center g-2 min-vh-75">
            <div class="col-lg-6 text-white hero-components">
                <div class="col-md-4 text-center hero-logo">
                    <img class="hero-spacing" src="<?= base_url($hero['image']) ?>" alt="">
                </div>
                <p class="text-white mb-2 hero-spacing hero-style">
                    <?= esc($hero['subtitle']) ?>
                </p>

                <h1 class="hero-title hero-spacing hero-style">
                    <?= esc($hero['title']) ?>
                    <span class="highlight-title hero-spacing hero-title">
                        <?= esc($hero['highlight']) ?>
                    </span>
                </h1>

                <p class="text-white-50 hero-status hero-spacing">
                    <?= esc($hero['status']) ?>
                </p>

            </div>
        </div>
    </div>

</section>