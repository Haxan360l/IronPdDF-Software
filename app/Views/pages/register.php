<section class="register py-5 text-white page-text">
    <div class="container signup-group">
        <div class="text-reg">
            <h2 class="display-6 reg-style"><?= esc($register['title']) ?></h2>
            <p class="text-white fw-bolder"><?= esc($register['subtitle']) ?></p>
        </div>

        <form class="signup-form fontstyle" role="search" aria-label="Beta signup">
            <div class="signup-form-group fontstyle">
                <input
                    type="email"
                    class="form-control border-0 signup-input fw-normal"
                    placeholder="<?= esc($register['placeholder']) ?>"
                    aria-label="Email address" required>
                <button class="btn fw-medium btn-signup fontstyle" type="submit">
                    <?= esc($register['button']) ?>
                </button>
            </div>
        </form>

        <div class="mt-4 fs-8">
            <span class="badge rounded-pill me-2 status-text">
                #<?= esc($register['badge']) ?>
            </span>

            <span class="text-white-60 small">
                <?= esc($register['note']) ?>
            </span>
            <?php foreach ($register['languages'] as $index => $lang): ?>
                <a href="<?= esc($lang['url']) ?>"
                    class="text-decoration-none text-white fw-bold ms-1 lang lang-style">
                    <?= esc($lang['label']) ?>
                </a>
                <?php if ($index < count($register['languages']) - 1): ?>
                    <span class="lang-style">|</span>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>

    </div>


</section>