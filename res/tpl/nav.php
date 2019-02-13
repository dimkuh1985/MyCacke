<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MyCake</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php?id=main">Главная</a></li>  
              <li><a href="index.php?id=about">Про нас</a></li>
              <li><a href="index.php?id=contacts">Контакты</a></li>
              <li><a href="index.php?id=gallery">Галлерея</a></li>
              <li><a href="index.php?id=catalog">Каталог</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a  style="margin-right: 10px">
                    Приветули, <?=$this->user?>
                        
                    </a>
                </li>
              <?php if($this->user == 'Гость'){ ?>
              <li><a href="index.php?id=entry">Вход</a></li>
              <li><a href="index.php?id=reg">Регистрация</a></li>
              <?php } else {?>
              <li><a href="index.php?id=exit">Выход</a></li>
              <li><a href="index.php?id=support">Обратная связь</a></li>
              <?php } ?>
            </ul>
        </div>
      </div>
    </nav>