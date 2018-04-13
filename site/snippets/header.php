<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= $site->image($site->favicon())->url() ?>" >
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script type="application/javascript">
    function doPeople(e, check){
        var people = e.target.parentElement;
        var mainElement = document.getElementById('main-people'); 
        if(!check){
            people.classList.add('nav-people');
        }
        else{
            mainElement.classList.remove('nav-people');
            mainElement.classList.add('major-nav-people');
            people.classList.add('nav-student');
        }
        console.log("click");
    }
  </script>
  <?php 
    echo css('assets/css/style.css');
    switch($page->template()){
        case 'people':
            echo css('assets/css/people.css');
            break;
        case 'collections':
            echo css('assets/css/collections.css');
            break;
        case 'article':
        case 'project':
        case 'place':
            echo css('assets/css/article.css');
            break;
        case 'news':        
            echo css('assets/css/news.css');
            break;
        case 'person':
            echo css('assets/css/person.css');
            break;
        case 'researchers':
            echo css('assets/css/researchers.css');
            break;
        case 'research':
            echo css('assets/css/research.css');
            break;
        case 'places':
            echo css('assets/css/places.css');
            break;
    }
  ?>
 
</head>
<body>
    <div class="back-drop collage" style="background-image: url('<?=$site->url() ?>/assets/images/collage.png');">
    </div>
    <div class="back-drop" style="background: black !important; opacity: .8;">
    </div>
    <div class="back-drop">
    </div>
    <header>
        <div id="title-div" onclick="window.location.href = '<?= $site.url() ?>'">
            <p class="the">the</p>
            <p class="title">DYE LAB</p>
        </div>
    </header>
    <main class="main" role="main">

    <div id="main">
        <?php snippet('menu') ?>
