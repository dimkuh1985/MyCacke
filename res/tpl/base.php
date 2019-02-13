
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сайт интернет-магазина">
    <meta name="author" content="IT-Academy STEP">
    <link rel="icon" href="res/img/Birthday.ico">

    <title><?=$this->title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- Підібрані стилі саме для цього шаблона -->
    <link href="res/css/base.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$this->style?>">

  </head>

  <body>
    <header>
      <?php include_once('res/tpl/nav.php'); ?>
      <?php include_once('res/tpl/jumbotron.php'); ?>
    </header>

    
    <div class="container">
      <article>
        <?php include_once($this->content); ?>
      </article>
     
      <hr>
      <footer>
        <div>
        <h4 class="nav navbar-nav">Copyright: &copy; MyCake - Kyiv, 2016</h4>
        <h4 class="nav navbar-nav navbar-right">Главный админ сайта <img id="ya" src="res/img/admin.jpg" width="50" height="50"></h4>
      </div>
      <style>
        #ya{
          border-radius: 50%;
        }
      </style>
      </footer>
    </div> <!-- /container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="res/js/base.js"></script>
    <script src="<?=$this->script?>"></script>
  </body>
</html>
