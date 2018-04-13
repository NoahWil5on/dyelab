<?php snippet('header') ?>

        <div id="component-div">
            <ul>
                <?php 
                    $people = $page->children()->visible();
                ?>
                <?php foreach($people as $person): ?>
                <li onclick="window.location.href = '<?= $person->url() ?>'">
                    <?php
                        $photo = 'https://www.sunderland.ac.uk/assets/Upload/Your_Photo.png';
                        if(!$person->myImage()->empty()){
                            $photo = $person->myImage()->toFile()->url();
                        }
                    ?>
                    <div class="person-image" style="background-image: url('<?= $photo ?>')"></div>
                    <div class="person-info">
                        <p class="name"><?= $person->firstName() ?></p>
                        <p class="name"><?= $person->lastName() ?></p>
                        <p class="role"><?= $person->role() ?><p>
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
<?php snippet('footer') ?>