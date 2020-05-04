<?php
$str="";
$new_arr="";
if (count($_FILES['userfiles']) != 0){
	$arr = $_FILES['userfiles']['name'];
	$fileContent = file_get_contents($arr);
    $email = '/([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,3}$/';
	$arr = explode(" ",$fileContent);
	$i = 0;
	$j = 0;
	foreach($arr as $word){
		if(preg_match($email,$word)){
			$new_arr[$i] = "<a  href='mailto:$word' style='color:Red;'>$word</a>";
			$arr2[$j] = $word;
			$j ++;
		}else{
			$new_arr[$i] = $word;
		}		
		$i++;
	}
	$str = implode(" ", $new_arr);
	$new_arr = implode("\n", $arr2);
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
				<h1>Лабораторная работа №4</h1>
				<b>
					<p>в произвольном тексте все e-mail адреса вывести красным цветом и привести к виду "a  href="mailto:EMAIL>EMAIL  /a". Дополнительно, в отдельном блоке вывести отдельно все e-mail адреса.Текст загружать из файла.</p>
				</b>
				<form class="comment" action="" method="post" enctype="multipart/form-data">
					<input type="file" name="userfiles" placeholder="введите имя файла"><br>
					<textarea><?php echo $new_arr; ?></textarea>
					<p><?php echo $str; ?></p>
					<button class="subscribe">отправить</button>
				</form>
				<a href="lab3.php">предыдущая лабораторная№3</a> <br><br>
				<a href="">следующая лабораторная№5</a>
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