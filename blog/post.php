<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> &middot; Techblog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WS1 techblog. Teme bloga: tech, science & fun.">
    <meta name="author" content="Zlatan Vasović">
    <meta name="keywords" content="ws1, web, blog, gnu/linux">
    <meta name="robots" content="noodp,noydir">
    <link href="../../media/favicon.ico" rel="shortcut icon">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="page-header"><h1>Techblog</h1></div>
          <p><img src="../../media/wflat.png" width="100" height="100" alt="WS1 logo"></p>
          <p><strong>WS1 techblog.</strong> Obuhvata tech, sci & fun teme.</p>
          <div class="btn-group btn-group-justified">
            <a class="btn btn-default" href="../"><span class="icon-home"></span></a>
            <a class="btn btn-default" href="https://twitter.com/webserveri"><span class="icon-twitter"></span></a>
            <a class="btn btn-default" href="https://github.com/ws1"><span class="icon-github"></span></a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="page-header"><h1><?php echo $title ?> <small class="pull-right"><?php echo date('Y', getlastmod(__FILE__)); ?> | <span class="icon-<?php echo $author ?>"></span></small></h1></div>
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </body>
</html>
