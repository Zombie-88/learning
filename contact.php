<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
     $size = ini_get("post_max_size"); // 8M
     $letter = $size{strlen($size)-1}; //M
     $size = (int)$size;
     switch(strtoupper($letter)):
        case 'G' : $size *= 1024;
        case 'M' : $size *= 1024;
        case 'K' : $size *= 1024;
     endswitch;
    ?>
    
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form> 
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p> 
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?
      $leftMenu = [ 
     ['link'=>'Домой', 'href'=>'index.php'], 
     ['link'=>'О нас', 'href'=>'about.php'], 
     ['link'=>'Контакты', 'href'=>'contact.php'],
     ['link'=>'Таблица умножения', 'href'=>'table.php'], 
     ['link'=>'Калькулятор', 'href'=>'calc.php'] 
  ];
  /* ниже я заменил имеющиюся запись как указанно в задании 
  (В значениях атрибута href тэгов <a> вместо текущих значений выведите значения элементов массива $leftMenu в место 
     <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>)
	  */
  ?>
    <li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
<li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
<li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a></li>
<li><a href='<?= $leftMenu[3]['href']?>'><?= $leftMenu[3]['link']?></a></li>
<li><a href='<?= $leftMenu[4]['href']?>'><?= $leftMenu[4]['link']?></a></li>
    
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>