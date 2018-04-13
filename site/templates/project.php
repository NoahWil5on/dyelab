<?php snippet('header') ?>
<?php 
    $monthNum  = $page->date('m');
    $day = $page->date('d');
    if($day <  10){
        $day = substr($day, 1);
    }
    $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
    $index = 0;
?>

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
                        <p class="article-title"> <?= $page->title() ?></p>
                        <p><?= $monthName . ' ' . $day . ', ' . $page->date('Y') ?></p>     
                        <?php if($page->authors()->yaml()): ?>
                            <div class="project-authors">                                    
                                <?php foreach($page->authors()->yaml() as $author): $index++?>
                                    <?php 
                                        $authorText = $author['name']; 
                                        if($index + 1  <= count($page->authors()->yaml())){
                                            $authorText = $authorText . ',';
                                        }
                                    ?>
                                    <?php if($author['link'] != null): ?>
                                        <a href="<?= $author['link'] ?>"><?= $authorText ?></a>
                                    <?php else: ?>
                                        <p><?= $authorText ?></p>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>                       
                    </div>
                    <div class="article-container">
                        <p class="article-text"><?= $page->abstract()->kirbytext() ?></p>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
            <!-- <button class="link-button" onclick="window.location.href = ''">Learn More</button> -->
        </div>

<?php snippet('footer') ?>