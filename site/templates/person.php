<?php snippet('header') ?>
    
    <div id="component-div">
        <div class="info-component">
            <div class="back-rec">
            </div>
            <div class="content">
            <?php 
                $photo = 'https://www.sunderland.ac.uk/assets/Upload/Your_Photo.png';
                if(!$page->myImage()->empty()){
                    $photo = $page->myImage()->toFile()->url();
                }
            ?>
                <div class="person-image" style="background-image: url('<?= $photo ?>')" onclick="window.location.href = '<?= $photo ?>'">
                </div>
                <div class="person-info-div">
                    <div class="person-info">
                        <h2 class="name"><?= $page->firstName() . ' ' . $page->lastName() ?></h2>
                        <?php if(!$page->degree()->empty()): ?>
                            <p class="role"><?= $page->degree() ?></p>
                        <?php endif ?>
                        <?php if(!$page->role()->empty()): ?>
                            <p class="role"><?= $page->role() ?></p>
                        <?php endif ?>
                        <?php if(!$page->text()->empty()): ?>
                            <p class="origin"><?= $page->text()->kirbytext() ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($page->gallery()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Photo Album</h2>
                    </div> 
                    <div id="gallery">
                        <?php foreach($page->gallery()->yaml() as $gallery):?>
                            <div class="gallery-image-div">
                                <div style="background-image: url('<?= image($gallery['image'])->url() ?>')" class="gallery-image" onclick="window.location.href = '<?= image($gallery['image'])->url() ?>'">
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>                       
                </div>
            </div>
        <?php endif ?>
        <?php if($page->projects()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Projects</h2>
                        <?php foreach($page->projects()->yaml() as $project): ?>
                        <a class="source-link" href="<?= $project['link'] ?>"><?= $project['title'] ?></a>
                        <?php endforeach ?>
                    </div>                        
                </div>
            </div>
        <?php endif ?>
        <?php if($page->publications()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Publications</h2>
                        <?php foreach($page->publications()->yaml() as $pub): ?>
                        <a class="source-link" href="<?= $pub['link'] ?>"><?= $pub['title'] ?></a>
                        <?php endforeach ?>
                    </div>                        
                </div>
            </div>
        <?php endif ?>
        <?php if($page->courses()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Courses</h2>
                        <?php foreach($page->courses()->yaml() as $course): ?>
                        <a class="source-link" href="<?= $course['link'] ?>"><?= $course['title'] ?></a>
                        <?php endforeach ?>
                    </div>                        
                </div>
            </div>
        <?php endif ?>
        <?php if($page->lectures()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Lectures</h2>
                        <?php foreach($page->lectures()->yaml() as $lecture): ?>
                        <a class="source-link" href="<?= $lecture['link'] ?>"><?= $lecture['title'] ?></a>
                        <?php endforeach ?>
                    </div>                        
                </div>
            </div>
        <?php endif ?>
        <?php if($page->conferences()->yaml()): ?>
            <div class="info-component">
                <div class="back-rec">
                </div>
                <div class="content">
                    <div class="about">
                        <h2 class="name">My Conference Presentations</h2>
                        <?php foreach($page->conferences()->yaml() as $presentation): ?>
                        <a class="source-link" href="<?= $presentation['link'] ?>"><?= $presentation['title'] ?></a>
                        <?php endforeach ?>
                    </div>                        
                </div>
            </div>
        <?php endif ?>
        <!-- <button class="link-button" onclick="window.location.href = ''">Learn More</button> -->
    </div>
        
<?php snippet('footer') ?>