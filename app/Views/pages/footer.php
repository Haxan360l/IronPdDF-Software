<section class="footer text-white">
    <div class="container text-center">

        <h3 class="fw-bold mb-4"><?= esc($footer['title']) ?></h3>

        <form class="footer-signup">
            <div class="footer-form-group">
                <input
                    type="email"
                    class="footer-form"
                    placeholder="<?= esc($footer['placeholder']) ?>"
                    required>
                <button class="btn btn-danger footer-btn">
                    <?= esc($footer['button']) ?>
                </button>
            </div>
        </form>

    </div>
</section>