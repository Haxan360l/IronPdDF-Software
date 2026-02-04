<section class="cta-footer">
    <div class="container text-center">
        <h2 class="cta-title">
            <?= esc($footer['title']) ?>
            <span>
                <?= esc($footer['footer_hl']) ?>
            </span>
        </h2>

        <form class="cta-form" method="post" action="#">
            <div class="cta-input-group">
                <input type="email"
                    name="email"
                    class="form-control cta-input fontstyle"
                    placeholder="<?= esc($footer['placeholder']) ?>"
                    required>

                <button type="submit"
                    class="btn cta-btn">
                    <?= esc($footer['button']) ?>
                </button>
            </div>
        </form>

    </div>
</section>