<?php snippet('header') ?>

            <div id="component-div">
            <?php 
                $people = page('people')->children()->visible();   
            ?>         
            <?php foreach($people as $option): ?>
                <div class="component">
                    <div class="back-rec">
                    </div>
                    <div class="people-content">
                        <a class="people-link" href="<?= $option->url() ?>"><?= $option->title() ?></a>
                    </div>
                </div>
            <?php endforeach ?>
            </div>

<?php snippet('footer') ?>