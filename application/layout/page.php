<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$this->title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
      body {
        padding-top: 50px;
      }
    </style>
  </head>

  <body>

<?php $this->view->show_navbar(); ?>

    <div class="container">

    <?php $this->view->show_page(); ?>

    </div> <!-- /container -->
  </body>
</html>

