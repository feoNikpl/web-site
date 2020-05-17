<?php
    $k = $_COOKIE['k'];
	$result = $_COOKIE['result'];
	$j = $_COOKIE['j'];
	$last = $_COOKIE['last'];
	$first = $_COOKIE['first'];

	$db_host = "localhost";
	$db_name = "City";
	$db_user ="root";
	$db_pasword = "Nikitin277///";
	$db = mysqli_connect($db_host,$db_user,$db_pasword,$db_name) or die ("невозможно подключиться");

	$res= mysqli_query($db,"SELECT `Name` FROM `City`");
	$i = 0;
	while($row= mysqli_fetch_array($res)){
		$res_city1 = (trim($row['Name']));
		$mas_citye[$i]= mb_convert_case($res_city1, MB_CASE_LOWER, "UTF-8");
		$i++;
	 }
	if ($k == ""){
		mysqli_query($db, "DELETE FROM `CityGame`");
		$result = "";
		$k = 1;
		$j = 1;
	}
	if ($k == 1  && $_POST['Userscity'] != ""){
		$Userscity = trim($_POST['Userscity']);
		$first = $Userscity[0];
		if ($j == 1){
			$last = $first;
			$j = 0;
		}
		$Userscity = mb_convert_case($Userscity, MB_CASE_LOWER, "UTF-8");
		if (mysqli_num_rows(mysqli_query($db, "SELECT `Name2` FROM `CityGame` WHERE `Name2`='$Userscity' ")) == 0 && $first == $last){
			$last = substr($Userscity,-1);
			mysqli_query($db, "INSERT INTO `CityGame` SET `Name2`='$Userscity' ");
			$result = $result.$Userscity."\n";
			$k=2;
		}else{
			$result = $result." Играйте по правилам\n";
		}
	}
	if ($k == 2){
		$i = 0;
		$a = $result;
		foreach ($mas_citye as $city){
			if(preg_match('/^'.$last.'[a-z]+$/',$city)){
				if (mysqli_num_rows(mysqli_query($db, "SELECT `Name2` FROM `CityGame` WHERE `Name2`='$city' ")) == 0){
					$last = substr($city,-1);
					mysqli_query($db, "INSERT INTO `CityGame` SET `Name2`='$city' ");
					$result = $result.$city."\n";
					$k=1;
					break;
				}	
			}
		}
		if ($a == $result){
			$result =  $result."Вы выйграли\n";
		}
	}
	setcookie('k', $k);
	setcookie('result', $result);
	setcookie('j', $j);
	setcookie('last', $last);
	setcookie('first', $first);
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
				<h1>Лабораторная работа №5</h1>
				<b>
					<p> Написать скрипт, собирающий статистику по ip-адресам, с которых посетители заходили на сайт. Выводить результаты в виде HTML-таблицы со списком ip-аресов, отсортированным по убыванию количества посещений с каждого адреса.</p>
				</b>
				<form class="comment" action="" method="post">
					<textarea><?php echo $result; ?></textarea> <br>
					<input name="Userscity" placeholder="название города"><br>
					<button class="subscribe">отправить</button>
				</form>
				<a href="lab4.php">предыдущая лабораторная№4</a> <br><br>
				<a href="lab6.php">следующая лабораторная№6</a>
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