<section class="register py-5 text-white">
    <div class="container signup-group">
        <div class="text-reg">
            <h2 class="display-6 reg-style"><?= esc($register['title']) ?></h2>
            <p class="text-white fw-bolder"><?= esc($register['subtitle']) ?></p>
        </div>

        <form class="signup-form" role="search" aria-label="Beta signup">
            <div class="signup-form-group">
                <input
                    type="email"
                    class="form-control border-0 signup-input fw-normal"
                    placeholder="<?= esc($register['placeholder']) ?>"
                    aria-label="Email address" required>
                <button class="btn fw-medium btn-signup" type="submit">
                    <?= esc($register['button']) ?>
                </button>
            </div>
        </form>

        <div class=" mt-4 fs-8">
            <span class="badge rounded-pill me-2 status-text">
                #<?= esc($register['badge']) ?>
            </span>

            <span class="text-white-60 small">
                <?= esc($register['note']) ?>
                <?php foreach ($register['languages'] as $index => $lang): ?>
                    <a href="<?= esc($lang['url']) ?>"
                        class="text-decoration-none text-white fw-bold ms-1 lang">
                        <?= esc($lang['label']) ?>
                    </a>
                    <?php if ($index < count($register['languages']) - 1): ?>
                        <span class="mx-0">|</span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </span>
        </div>

    </div>


</section>