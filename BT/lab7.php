<?php
		$UsersName="";
		$Telephone="";
		$Email="";
		$Topic="";
		$mesage="";
		$EMName='/([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,3}$/';
		if ($_POST["mesage"] == "" || $_POST["Topic"] == "" || !preg_match( '/\+\d{12}/',$_POST['Telephone']) || !preg_match( $EMName,$_POST['E-mail']) || $_POST["UsersName"] == ""){
			$UsersName =  $_POST["UsersName"];
			$Telephone=$_POST['Telephone'];
			$Email=$_POST['E-mail'];
			$Topic=$_POST["Topic"];
			$mesage=$_POST["mesage"] ;
		} else{
			if (mail("Feo.pl@mail.ru", $_POST["Topic"], $_POST["mesage"]))
				mail($_POST['E-mail'], "Reply", "Благодарим вас за ваш коментарий.\nМы с вами свяжемся");
			
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
				<h1>Лабораторная работа №7</h1>
				<b>
					<p> Выведите форму обратной связи на сайте со следующими полями: «Имя», «Телефон»,  «Email»,  «Тема», «Текст сообщения» и кнопкой «Отправить». Получите все данные из формы, проверьте их правильность, при ошибке выведите соответствующее сообщение, оставив  введенные в полях формы, при успешном результате проверки - отправьте письмо. Вышлите ответ на почту отправителя "с благодарностью за отправленное сообщение  и скором ответе".</p>
				</b>
				<form class="comment" action="" method="post">
					<input name="UsersName" placeholder="имя пользователя" value="<?php echo $UsersName; ?>"><br>
					<input name="Telephone" placeholder="телефон: +123..." value="<?php echo $Telephone; ?>"><br>
					<input name="E-mail" placeholder="E-mail" value="<?php echo $Email; ?>"><br>
					<input name="Topic" placeholder="тема" value="<?php echo $Topic; ?>"><br>
					<textarea class="form_comment" name="mesage"><?php echo $mesage; ?></textarea>
					<button class="subscribe">отправить</button>
				</form>
				<a href="lab8.php">следующая лабораторная№8</a><br>
				<a href="lab6.php">предыдущая лабораторная№6</a>
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
