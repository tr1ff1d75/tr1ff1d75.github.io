<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../IMAGES/favicon.ico">
    <title>Каталог | Магазин техники</title>
    <meta name="description" content="Курсовой проект. Магазин техники">
    <link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="../CSS/style-blog.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen">
</head>

<body>
    <header>
        <!--  <div class="header-menu-line"></div> -->
        <div class="header-menu">
            <div class="header-menu-div">
                <div class="logo">

                    <a href="index.html"><span class="text-logo"><span class="primary_text">kYPCA4</span> <span class="secondary_text">CATALOG</span></span></a>
                </div>

                <div class="bottoms">
                    <ul class="header-menu-bottoms">
                        <li class="dropdown">
                            <a href="../index.html">Главная</a>
                        </li>
                        <li class="dropdown">
                            <a href="../catalog.html#telephones">Телефоны</a>
                        </li>
                        <li class="dropdown">
                            <a href="../catalog.html#notebooks">Ноутбуки</a>
                        </li>
                        <li class="dropdown">
                            <a href="../catalog.html#TVs">Телевизоры</a>
                        </li>
                        <li class="dropdown">
                            <a href="../contacts.html">Контакты</a>
                        </li>
                        <li class="active">
                            <a href="../blog">Блог</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    
    <main>

	
	
        <div class="contain">
			<div class="container">
				<!--<a href="admin" align="right">Панель администратора</a><br><br>-->
				<div>
					<?php foreach($articles as $a): ?>
						<article>
							<h3><a href="#"><?=$a['title']?></a></h3>
							<p><?=$a['content']?></p>
							<p align="right"><em>Опубликовано: <?=$a['date']?></em><p>
						</article>
					<?php endforeach ?>
				</div>
			</div>
        </div>

		
		
		
    </main>


     <footer>
     <div class="footer1170">
            
            <div class="footer-text">
                <a href="#">
                    <h1>kYPCA4</h1>
                    <span>CATALOG</span>
                </a>
                <p>© Dmitry Gulko</p>
            </div>

        <div class="footer-end">
            <ul class="my-contacts">
                <li>
                    <a class="vk" href="https://vk.com/my_new_days"></a>
                </li>
                <li>
                    <a class="facebook" href="https://facebook.com/dmitry_gulko"></a>
                </li>
                <li>
                    <a class="youtube" href="https://www.youtube.com/channel/UCo_c3LYsq5KClhSBnbFpLiQ"></a>
                </li>
                <li>
                    <a class="skype" href="skype:gulko.dima?call"></a>
                </li>
                <li>
                    <a class="google" href="https://plus.google.com/u/0/106270266280649136450"></a>
                </li>
                <li>
                    <a class="instagram" href="https://www.instagram.com/dmitry_gulko/"></a>
                </li>
            </ul>
        </div>
    </div>
    </footer>
</body>

</html>