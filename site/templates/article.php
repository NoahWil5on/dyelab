<?php snippet('header') ?>
<?php 
    $placehold;
    if($page->image() != null){
        $placehold = $page->image()->url();
    }else{
        $placehold = 'http://placehold.it/1000';
    }

    $monthNum  = $page->date('m');
    $day = $page->date('d');
    if($day <  10){
        $day = substr($day, 1);
    }
    $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
?>

        <div id="component-div">
            <div class="component" style="margin-bottom: 30px;">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="content-image" style="background-image: url('<?= $placehold ?>')" onclick="window.location.href = '<?= $placehold ?>'">
                    </div>
                    <div class="article-info">
                        <p class="article-title"> <?= $page->title() ?></p>
                        <p><b><?= $page->author() ?></b> <?= $monthName . ' ' . $day . ', ' . $page->date('Y') ?></p>                         
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