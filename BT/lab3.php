<?php
		$Age ="";
	 	$DateAfter = "";
		$year = "";
		function GetAge($Birthday){
			if (time() >$Birthday){
					$age = date_diff(new DateTime(), new DateTime("@$Birthday")); 
					return "вам:".$age->y." лет; ".$age->m." месяцев; ".$age->d." дней";
				}else{
					return "Возможно вы из будущего";
				}
		}
		function GetDateAfter($DayCount, $Birthday) {
				 if ( preg_match( '/[0-9]+/',  ($DayCount))){
					$tenK = $Birthday+$DayCount*24*60*60;
					$tenKD = new DateTime("@$tenK");
					if (time()>$tenK){
						return "вам было 10000 дней: ".$tenKD->format("y.m.d");	
					}else{
						return "вам будет 10000 дней: ".$tenKD->format("y.m.d");
					}
				}else{
					return "вы неправильно указали количество дней";
				}
		}
		function YourYear($year){
			$arr =array ("Обезьяны","Петуха","Собаки","Свиньи","Крысы","Быка","Тигра","Кролика","Дракон","Змеи","Лошади","Козы");
			return "Вы родились в год ".$arr[$year%12];
		}
		if ($_POST["date"] == ""  ||  !preg_match( '/[0-2][1-9]\\.[0-1][1-9]\\.[0-9]{4}/', $_POST["date"])){
			$age = "вы ничего не ввели";
		} else{
			$date = $_POST["date"];
			$arr = explode(".", $date);
			if (checkdate (intval($arr[1]) , intval ($arr[0]),  intval($arr[2] ))){
				$Birthday=mktime(0,0,0,intval($arr[1]), intval ($arr[0]), intval($arr[2] ));
				
				$Age =GetAge($Birthday);
			   $DateAfter = GetDateAfter($_POST["DayCount"], $Birthday);
				$year = YourYear($arr[2]);
			}else{
				$age = "такой даты не существует";
			}
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
				<h1>Лабораторная работа №3</h1>
				<b>
					<p>написать функцию, определяющую точный возраст человека (с точностью до одного дня) по его дате рождения. Дату рождения получать через веб-форму. Определить дату, когда человеку исполнится, например, 10000 дней (получать через веб-форму). Определить год человека по восточному календарю.</p>
				</b>
				<form class="comment" action="" method="post">
					<input type="text" name="date" placeholder=" дата рождения дд.мм.гггг"><br>
					<input type="text" name="DayCount" placeholder=" Количество дней"><br>
					<p><?php echo $Age; ?></p>
					<p><?php echo $DateAfter; ?></p>
					<p><?php echo $year; ?></p>
					<button class="subscribe">отправить</button>
				</form>
				<a href="tasks.php">предыдущая лабораторная№2</a> <br><br>
				<a href="lab4.php">следующая лабораторная№4</a>
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
