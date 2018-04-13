<?php snippet('header') ?>
        <div id="component-div">
            <div class="component" style="margin-bottom: 30px">
                <div class="back-rec">
                </div>
                <div class="content">
                    <?php if(!$page->myImage()->empty()): ?>
                        <div class="content-image" style="background-image: url('<?= $page->myImage()->toFile()->url() ?>')" onclick="window.location.href = '<?= $page->myImage()->toFile()->url() ?>'">
                        </div>
                    <?php endif ?>
                    <div class="article-info">
                        <p class="article-title"> <?= $page->name() ?></p>                    
                    </div>
                    <div class="article-container">
                        <p class="article-text"><?= $page->text()->kirbytext() ?></p>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
            <!-- <button class="link-button" onclick="window.location.href = ''">Learn More</button> -->
        </div>

<?php snippet('footer') ?>