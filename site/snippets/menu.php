<nav>
    <div class="nav-div">
        <div class="nav-pages">
            <?php foreach($pages->visible() as $item): ?>
                <?php if($item != page('people')): ?>
                <div class="page-div">
                    <a class="page<?= r($item->isOpen(), ' active') ?>" href="<?= $item->url() ?>">
                    <?= $item->title()->html() ?>
                    </a>
                </div>
                <?php else: ?>
                <div id="main-people" class="page-div">
                    <div class="page<?= r($item->isOpen(), ' active-people') ?>" onclick="doPeople(event,false)">
                    <?= $item->title()->html() ?>
                    </div>
                    <?php foreach($item->children()->visible() as $people): ?>
                        <?php if($people != $item->children()->find('students')): ?>
                        <div class="sub-page-div">
                            <a class="sub-page" href="<?= $people->url() ?>"><?= $people->title()->html()?></a>
                        </div>
                        <?php else: ?>
                        <div class="sub-page-div">
                            <div class="sub-page" onclick="doPeople(event,true)"><?= $people->title()->html()?></div>
                            <?php foreach($people->children()->visible() as $student): ?>
                                <div class="sub-page-div">
                                    <a class="sub-page" href="<?= $student->url() ?>"><?= $student->title()->html()?></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>

    <!-- <div class="tag-div">
    </div> -->
</nav>