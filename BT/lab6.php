<?php
 
	  $colors = array('зеленый' => '#090', 'синий' => '#009', 'красный' => '#900');
	  $bgcolor = '#fff';
	  if ( isset($_COOKIE['bgcolor']) && in_array($_COOKIE['bgcolor'], $colors) )
	  {
		  $bgcolor = $_COOKIE['bgcolor'];
	  }

	  if ( isset($_POST['bgcolor']) && in_array($_POST['bgcolor'], $colors) )
	  {
		 $bgcolor = $_POST['bgcolor'];
		 setcookie('bgcolor', $bgcolor);
	  }

	 if ( isset($_COOKIE['fontcolor']) && in_array($_COOKIE['fontcolor'], $colors) )
	  {
		 $fontcolor = $_COOKIE['fontcolor'];
	  }

	  if ( isset($_POST['fontcolor']) && in_array($_POST['fontcolor'], $colors) )
	  {
		$fontcolor = $_POST['fontcolor'];
		 setcookie('fontcolor', $fontcolor);
	  }

	  if ( isset($_COOKIE['fontSZ']) && preg_match( '/\d/',($_COOKIE['fontSZ']) ))
	  {
		 $fontSZ = $_COOKIE['fontSZ'];
	  }

	  if ( isset($_POST['fontSZ']) && preg_match( '/\d/',($_POST['fontSZ']) ))
	  {
		$fontSZ = $_POST['fontSZ'];
		 setcookie('fontSZ', $fontSZ);
      }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/Main.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/content.css">
        <title>Travel.me</title>
		<style type="text/css">
      		body { background: <?php echo $bgcolor; ?>;  color:  <?php echo $fontcolor; ?>;}
			h1, p{font-size: <?php echo $fontSZ;  ?>;}
    	</style>
    </head>
    <body>
          <header >
             <div class="conteiner">
				<div class="Header_menu">
					<div class="header">Travel.me
						<img src="css/images/globe.png" hight="40px" width="40px" style="vertical-align: text-top">	
					</div>
					<div class="menu_link">
						<nav>
							<a class="m_link" href="intro.html">Home</a> 
							 <a class="m_link" href="content.html">Контент</a> 
							 <a class="m_link" href="About.html">О проекте</a> 
							 <a class="m_link" href="contact.html">Контакты</a> 
						</nav>
						<div class="search">
							<form>
								<input type="text" name="search" placeholder="поиск">
								<button class="search_b">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
            </div>
        </header>
		<main>
			<div class="conteiner">
				<h1>Лабораторная работа №6</h1>
				<b>
					<p>Выведите форму со списками выбора цвета фона страницы, размера и цвета основного шрифта и заголовка. При отправке соответствующих значений они должны сохраниться в COOKIE пользователя. Сразу после отправки формы, а также и без отправки (например, при перезагрузке страницы или повторном вызове скрипта через некоторое время, не превышающее время жизни куки), если уже есть соответствующая COOKIE, должны быть установлены заданные параметры стилей страницы.</p>
				</b>
				<form class="comment" action="" method="post" enctype="multipart/form-data">
					<p1>выберите цвет фона страницы</p1><br>
					<select name="bgcolor">
						<?php

						  foreach($colors as $key => $value)
						  {
							$selected_attr = ($bgcolor == $value) ? ' selected="selected"' : '';
							echo '              <option value="' . $value . '"' . $selected_attr .'>' . $key . '</option>'. "\n";
						  }
						?>
 					</select><br>
					<p1>выберите цвет шрифта</p1><br>
					<input type="text" name="fontSZ" placeholder="размер шрифта"><br>
					<select name="fontcolor">
						<?php

						  foreach($colors as $key => $value)
						  {
							$selected_attr = ($fontcolor == $value) ? ' selected="selected"' : '';
							echo '              <option value="' . $value . '"' . $selected_attr .'>' . $key . '</option>'. "\n";
						  }
						?>
 					</select><br>
					<button class="subscribe">отправить</button>
				</form>
				<a href="lab4.php">предыдущая лабораторная№5</a> <br><br>
				<a href="">следующая лабораторная№7</a>
			</div>
		</main>
         <footer>
            <div class="conteiner">
				<div class="e-mail">
					<div class="footer">Подпишитесь на e-mail рассылку</div>
							<form>
								<input type="text" name="subscribe" placeholder="ваш e-mai">
								<button class="subscribe">
									подписаться
								</button>
							</form>
				</div>
               <div class="footer_info">
					<div class="footer"> COPYRIGHT © 2020 TRAVEL.ME | ALL RIGHTS RESERVED
					</div>
					<nav class="footer_link">
						 <a class="f_link" href="intro.html">Home</a> 
						 <a class="f_link" href="About.html">About</a> 
						<a class="f_link" href="contact.html">Contact</a>
					</nav>
				</div> 
            </div>
        </footer>
    </body>
</html>