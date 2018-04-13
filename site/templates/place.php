<?php snippet('header') ?>
        <div id="component-div">
            <div class="component" style="margin-bottom: 30px">
                <div class="back-rec">
                </div>
                <div class="content">
                    <?php if($page->image() != null): ?>
                        <div class="content-image" style="background-image: url('<?= $page->image()->url() ?>')" onclick="window.location.href = '<?= $page->image()->url() ?>'">
                        </div>
                    <?php endif ?>
                    <div class="article-info">
                        <p class="article-title"> <?= $page->name() ?></p>                    
                    </div>
                    <div class="article-container">
                        <p class="article-text"><?= $page->text() ?></p>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
            <?php if($page->source() != ''): ?>
                <button class="link-button" onclick="window.location.href = '<?= $page->source() ?>'">Learn More</button>
            <?php endif ?>
        </div>

<?php snippet('footer') ?>