<nav class="navbar navbar-expand-lg navbar-dark fontstyle nav-menu">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="<?= base_url($nav['logo']) ?>" alt="ironPDF logo">
        </a>

        <!-- Mobile toggler -->
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php foreach ($nav['links'] as $link): ?>

                    <?php if (isset($link['dropdown'])): ?>
                        <!-- DROPDOWN ITEM -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <?= esc($link['label']) ?>
                            </a>

                            <ul class="dropdown-menu fontstyle">
                                <?php foreach ($link['dropdown'] as $item): ?>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <?= esc($item) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                    <?php else: ?>
                        <!-- NORMAL LINK -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?= esc($link['label']) ?>
                            </a>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>
        </div>


    </div>
</nav>k