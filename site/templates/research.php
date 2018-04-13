<?php snippet('header') ?>

        <div id="component-div">
        <?php 
            $projects = page('research')->children()->visible();
        ?>
            <?php foreach($projects as $project): ?>
                <div class="component clearfix">
                    <div class="back-rec">
                    </div>
                    <div class="content">
                        <?php if(!$project->myImage()->empty()): ?>
                        <div class="text-hider">
                        </div>
                            <div class="research-image" style="background-image: url('<?= $project->myImage()->toFile()->url() ?>')" onclick="window.location.href = '<?= $project->myImage()->toFile()->url() ?>'">
                            </div>
                            <div style="margin-left: 150px; padding-left: 20px" onclick="window.location.href = '<?= $project->url() ?>'">
                        <?php else: ?>
                            <div class="text-hider" style="width: 100%">
                            </div>
                            <div style="padding-left: 30px"  onclick="window.location.href = '<?= $project->url() ?>'">
                        <?php endif ?>                        
                            <div class="content-title">
                                <h2><?= $project->title() ?></h2>                         
                            </div>
                            <?php $index = 0 ?>
                            <?php if($project->authors()->yaml()): ?>
                                <div class="project-authors">                                    
                                    <?php foreach($project->authors()->yaml() as $author): $index++?>
                                        <?php 
                                            $authorText = $author['name']; 
                                            if($index + 1  <= count($project->authors()->yaml()) && $index < 5){
                                                $authorText = $authorText . ',';
                                            }
                                        ?>
                                        <?php if($index <= 5): ?>
                                            <p><?= $authorText ?></p>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                            <div class="header-abstract">
                                <p class="abstract">
                                    <?= $project->abstract()->kirbytext() ?>
                                </p>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        

<?php snippet('footer') ?>