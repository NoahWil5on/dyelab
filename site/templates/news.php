<?php snippet('header') ?>

            <div id="component-div">
                <div id="component-width-bounder">
                    <?php 
                        $news = page('news')->children()->visible()->sortBy('date', 'desc'); 
                        $index = -2;

                        $index -= 1;
                        $currentVal = 0;

                        $position = "small-top-left";
                        $changeStyle = "";
                        $placehold = 'http://placehold.it/1000';
                    ?>
                    <?php foreach($news as $article): $index++?>
                        <?php 
                            $currentVal = ($index - 6) % 10;
                            if($currentVal < 0){
                                $currentVal += 10;
                            }

                            if($article->image() != null){
                                $placehold = $article->image()->url();
                            }else{
                                $placehold = 'http://placehold.it/1000';
                            }

                            $monthNum  = $article->date('m');
                            $day = $article->date('d');
                            if($day <  10){
                                $day = substr($day, 1);
                            }
                            $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
                        ?>
                        <?php if(($index == -2 || $index == -1) || $currentVal > 7): ?>
                            <div class="big-tile" onclick="window.location.href = '<?= $article->url() ?>'">
                                <div class="card tile-holder">
                                    <div class="text-hider"></div>
                                    <div class="card-image" style="background-image: url(<?= $placehold ?>)"></div>
                                    <p class="card-title"> <?= $article->title() ?> </p>
                                    <p><b><?= $article->author() ?></b> <?= $monthName . ' ' . $day . ', ' . $article->date('Y') ?></p>                                    
                                    <!-- <p>#olute #comnim #sam #lautectem</p> -->
                                    <p class="card-content">
                                        <?= $article->text() ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if ($index == 0 || $currentVal == 0): ?>
                            <div class="big-tile">
                                <div class="small-tile-container tile-holder">
                        <?php endif ?>
                        <?php if ($index >= 0 && $currentVal <= 7): ?>
                            <?php 
                                if(($news->count() == $index + 3) && ($currentVal % 4 == 0 || $currentVal % 4 == 2)){
                                    $changeStyle = "float: left";
                                }else{
                                    $changeStyle = "";
                                }
                            ?>
                            <div class="small-tile" style="<?= $changeStyle ?>">
                                <?php
                                    switch($currentVal % 4){
                                        case 0:
                                            $position = "small-top-left";
                                            break;
                                        case 1:
                                            $position = "small-top-right";
                                            break;
                                        case 2:
                                            $position = "small-bottom-left";
                                            break;
                                        case 3:
                                            $position = "small-bottom-right";
                                            break;
                                    }
                                ?>
                                <div class="small-card card <?= $position ?>"  onclick="window.location.href = '<?= $article->url() ?>'">
                                    <div class="text-hider">
                                    </div>
                                    <div class="card-image" style="background-image: url(<?= $placehold ?>)">
                                    </div>
                                    <p class="small-card-title" style="margin-bottom: 5px !important; line-height: 1.05em;"><?= $article->title() ?></p>
                                    <p style="margin: 0 10px !important;"><?= $article->text() ?> </p>                                    
                                </div>
                            </div>
                        <?php endif ?>
                        <?php if ($index >= 0 && ($currentVal == 7) || (($news->count() == $index + 3) && $currentVal <= 7 && $index > -1)): ?>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>    
                </div> 
            </div>
<?php snippet('footer') ?>