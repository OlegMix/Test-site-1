<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL::base(); ?>public/image/system/icon/apple-touch-icon-120x120.png">
<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/icon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/icon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo URL::base(); ?>public/image/system/icon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo URL::base(); ?>public/image/system/icon/manifest.json">
<meta name="apple-mobile-web-app-title" content="MV53">
<meta name="application-name" content="MV53">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">

<link href="<?php echo URL::base(); ?>public/css/style.css" rel="stylesheet" type="text/css" />

<?php if(isset($styles)) {
		foreach($styles as $style): 
		    echo "<link href='".URL::base()."public/css/".$style.".css' rel='stylesheet' type='text/css' />";
		endforeach; 
	}?>

<?php if(isset($scripts)) {
		foreach($scripts as $script): 
		    echo "<script src='".URL::base()."public/script/".$script.".js' ></script>";
		endforeach; 
	}?>

</head>
<body>
<div class="body">
	<div>
		<div class="hat">
			<a href="<?php echo URL::base(); ?>"><div class="title">
				<img class="arms" src="<?php echo URL::base(); ?>public/image/system/gerb.png">
				<img class="maps" src="<?php echo URL::base(); ?>public/image/system/hat-maps.png">
				<h1>ГОБУЗ<br>"Маловишерская стоматологическая поликлиника"</h1>
			</div></a>
			<div class="menu">
				<ul id="menu">
					<li>
						<h4>Учреждение</h4>
						<ul>
							<li><a href="<?php echo URL::base(); ?>general_information">Общяя информация</a></li>
							<li><a href="<?php echo URL::base(); ?>charter">Устав</a></li>
							<li><a href="<?php echo URL::base(); ?>goals_and_objectives">Деклорации целей и задач</a></li>
							<li><a href="<?php echo URL::base(); ?>structure">Структура учреждения</a></li>
							<li><a href="<?php echo URL::base(); ?>regulations">Нормативные документы</a></li>
						</ul>
					</li>
					<li>
						<h4>Населению</h4>
						<ul>
							<li><a href="http://www.zdrav53-online.ru">Запись на прием к врачу</a></li>
							<li><a href="<?php echo URL::base(); ?>public/content/population/population_information.doc">Полезная информация</a></li>
						</ul>
					</li>
					<li>
						<h4>Специалистам</h4>
						<ul>
							<li><a href="<?php echo URL::base(); ?>vacancies">Вакансии</a></li>
							<li><a href="<?php echo URL::base(); ?>public/content/specialist/information_specialists.doc">Полезная информация</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo URL::base(); ?>nocorruption">Противодействие корупции</a>
					</li>
					<li>
						<a href="<?php echo URL::base(); ?>news">Новости</a>
					</li>
					<li>
						<h4>Качество обслуживания</h4>
						<ul>
							<li><a href="<?php echo URL::base(); ?>questionnaire">Анкета</a></li>
							<li><a href="#">Вопрос-ответ (форум)</a></li>
						</ul>
					</li>
					<li>
						<h4>Контакты</h4>
						<ul>
							<li><a href="<?php echo URL::base(); ?>contacts">Контактная информация</a></li>
							<li><a href="<?php echo URL::base(); ?>employees">Специалисты</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php if (isset($link)) {  ?>
			<div class='fast_link'>
				<h3>Полезное:</h3>
				<?php foreach($link as $link1): ?>
					<div class='fl_one'>
						<div class='fl_color' style='background: radial-gradient(#fff,<?php echo $link1['color']; ?>);'></div>
						<a href="<?php echo $link1['links']; ?>"><?php echo $link1['title']; ?></a> 
					</div>
				<?php endforeach; ?>
			</div>
	<?php }?>
	<div class="content">
		<?php echo $content; ?>
	</div>
	<div class="basement_menu">
		<a href="<?php echo URL::base(); ?>">Главная</a>&nbsp|&nbsp<a href="<?php echo URL::base(); ?>menu/news">Новости</a>&nbsp|&nbsp<a href="http://www.zdrav53-online.ru">Записаться на прием</a>
	</div>
	<div class="basement">
		<div class="copyright">
			© 2015 ГОБУЗ "Маловишерская стоматологическая поликлиника"<br>
			<h5>Все материалы, находящиеся на сайте, охраняются в соответствии с законодательством РФ, в том числе, об авторском праве и смежных правах</h5>
		</div>
		<div class="basement_a">
			<div class="bottom_a">
				<b>Телефон приемной (факс):</b><br><a href="tel:88166031471"><h5>8 (816-60) 31-471</h5></a>
			</div>
			<div class="bottom_a">
				<b>Адрес электронной почты:</b><br><a href="mailto:MVSTOM@mail.ru"><h5>MVStom@mail.ru</h5></a>
			</div>
			<div class="bottom_a">
				<b>Техническая поддержка:</b><br><a href="mailto:TechPST53@mail.ru"><h5>TechPST53@mail.ru</h5></a>
			</div>
		</div>	
		<div class="basement_b">
			<div class="bottom_b">
				<div class="bottom_c">
					<a href="http://gosuslugi.ru"><img class="basement_img" src="<?php echo URL::base(); ?>public/image/system/gosuslugi.png">Государственные услуги</a><br>
					<h5>Справочно-информационный портал</h5><br>
				</div>
				<div class="bottom_c">
					<a href="http://rosminzdrav.ru"><img class="basement_img" src="<?php echo URL::base(); ?>public/image/system/rosminzdrav.png">Министерство здравоохранения РФ</a><br>
					<h5>Информационный портал</h5><br>
				</div>
			</div>
			<div class="bottom_b">
				<div class="bottom_c">
					<a href="http://novreg.ru"><img class="basement_img" src="<?php echo URL::base(); ?>public/image/system/novreg.png">Правительство Новгородсвой области</a><br>
					<h5>Официальный сайт</h5><br>
				</div>
				<div class="bottom_c">
					<a href="http://zdrav-novgorod.ru"><img class="basement_img" src="<?php echo URL::base(); ?>public/image/system/zdrav-novgorod.png">Министерство здравоохранения Новгородской области</a><br>
					<h5>Справочно-информационный портал</h5><br>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

