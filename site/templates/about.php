<?php snippet('header') ?>

        <div id="component-div">
            <div class="component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="content-image" style="background-image: url('<?= $page->image()->url() ?>')" onclick="window.location.href = '<?= $page->image()->url() ?>''">
                    </div>
                    <div class="content-info">
                        <h2><?= $page->intro() ?></h2>                         
                    </div>
                    <div class="abstract-container">
                        <p class="abstract">
                            <?= $page->text() ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php snippet('footer') ?>