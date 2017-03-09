<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?= css('assets/css/revealer.css') ?>
  <?= css('assets/css/poncho.css') ?>
  <?= css('assets/css/acuerdos.css') ?>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" style="overflow: visible;" href="#"><img src="<?php echo url('assets/img/logoMinisterio.svg') ?>" height="50" alt=""></a>
            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Burger</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <?php snippet('menu') ?>

          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </div>
    </nav>
  </header>
