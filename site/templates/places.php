<?php snippet('header') ?>

        <div id="component-div">
            <ul>
                <?php 
                    $places = page('places')->children()->visible();
                ?>
                <?php foreach($places as $place): ?>
                <li onclick="window.location.href = '<?= $place->url() ?>'">
                    <?php
                        $photo = 'https://cdn1.iconfinder.com/data/icons/traveling-2/510/4-512.png';
                        if( $place->image() != null){
                            $photo = $place->image()->url();
                        }
                    ?>
                    <div class="place-image" style="background-image: url('<?= $photo ?>')"></div>
                    <div class="place-info">
                        <p class="name"><?= $place->name() ?></p>
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
        
<?php snippet('footer') ?>