<section class="service_desc py-5">
    <div class="container">
        <?php foreach ($service_desc['paragraphs'] as $item): ?>
            <p class="text-light opacity-75 mb-4">
                <?= str_replace(
                    esc('{{highlight}}'),
                    '<strong class="text-white">' . esc($item['highlight']) . '</strong>',
                    esc($item['text'])
                ) ?>
            </p>
        <?php endforeach; ?>
    </div>


</section>