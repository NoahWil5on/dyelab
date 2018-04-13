<?php snippet('header') ?>

        <?php 
            $people = $page->children()->visible();   
        ?>  
        <div id="component-div">
            <div id="people-grid">
                <?php foreach($people as $person): ?>
                    <div class="person">
                        <a href="<?= $person->source() ?>"><?= $person->name() ?></a>
                    </div>
                    
                <?php endforeach ?>
            </div>
        </div>
<?php snippet('footer') ?>