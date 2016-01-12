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

<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
<?php endforeach; ?>

<?php if(isset($scripts)) {
foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/script/<?php echo $script; ?>.js" ></script>
<?php endforeach; }?>

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
						<a href="<?php echo URL::base(); ?>institutions">Учреждение</a>
						<ul>
							<li><a href="#">Общяя информация</a></li>
							<li><a href="#">Устав</a></li>
							<li><a href="#">Деклорации целей и задач</a></li>
							<li><a href="#">Структура учреждения</a></li>
							<li><a href="#">Нормативные документы</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo URL::base(); ?>population">Населению</a>
						<ul>
							<li><a href="http://www.zdrav53-online.ru">Запись на прием к врачу</a></li>
							<li><a href="<?php echo URL::base(); ?>public/content/population/population_information.doc">Полезная информация</a></li>
						</ul>
					</li>
					<li>
					<a href="#">Специалистам</a>
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
						<a href="<?php echo URL::base(); ?>quality">Качество обслуживания</a>
						<ul>
							<li><a href="<?php echo URL::base(); ?>questionnaire">Анкета</a></li>
							<li><a href="#">Вопрос-ответ (форум)</a></li>
						</ul>
					</li>
					<li>
						<a href="">Контакты</a>
						<ul>
							<li><a href="<?php echo URL::base(); ?>contacts">Контактная информация</a></li>
							<li><a href="<?php echo URL::base(); ?>employees">Специалисты</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="content">
		<?php echo $content; ?>
		<div class="basement_menu">
			<a href="<?php echo URL::base(); ?>">Главная</a>&nbsp|&nbsp<a href="<?php echo URL::base(); ?>menu/news">Новости</a>&nbsp|&nbsp<a href="http://www.zdrav53-online.ru">Записаться на прием</a>
		</div>
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

