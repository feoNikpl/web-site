<?php
		$str="";
		$ocount="";
		if ($_POST["text"] == ""){
			$str = "";
			$ocount = "";
		} else{
			$str = $_POST["text"];
			$arr = explode(" ", $str);
			$new_arr = [];
			$i = 0;
			$ocount = 0;
			foreach($arr as $word){
				$new_arr[] = $word;
				
				$chars = preg_split('//', $new_arr[$i], -1, PREG_SPLIT_NO_EMPTY);
				foreach($chars as $ch)
					if ($ch == "o" ||  $ch =="O"){
						++$ocount;
					}
				if (isset($chars[2])){
					$chars[2] = "<span style='color:#800080;'>$chars[2]</span>";
				}
				$new_arr[$i] = implode("",$chars);
				
				if($i % 3 == 2)
					$new_arr[$i] = strtoupper ($new_arr[$i]);
				$i++;
			}	
			$str = implode(" ", $new_arr);
			$ocount =  " количество букв О: ".$ocount;
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
				<h1>Лабораторная работа №2</h1>
				<b>
					<p>в произвольном тексте, введенном через форму, каждое третье слово перевести в верхний регистр, каждую третью букву всех слов сделать фиолетовой, подсчитать общее количество встречающихся в тексте букв "о" и "О"</p>
				</b>
				<form class="comment" action="" method="post">
					<textarea class="form_comment" name="text"></textarea>
					<p><?php echo $str; ?></p>
					<p><?php echo $ocount; ?></p>
					<button class="subscribe" name="lab2">отправить</button>
				</form>
				<a href="lab3.php">следующая лабораторная№3</a>
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
