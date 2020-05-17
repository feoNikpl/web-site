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
				<h1>Лабораторная работа №8</h1>
				<b>
					<p> Написать скрипт, собирающий статистику по ip-адресам, с которых посетители заходили на сайт. Выводить результаты в виде HTML-таблицы со списком ip-аресов, отсортированным по убыванию количества посещений с каждого адреса.</p>
				</b>
				<table>
					<?php include  'stats8lab.php'; ?>	
					
				</table>
				<a href="lab7.php">предыдущая лабораторная№7</a>
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