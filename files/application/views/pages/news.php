<div class="title_n">
	<h5><?php echo HTML::date($news['date_pub']); ?></h5>
	<h2><?php echo $news['title']; ?></h2>
</div>

<div class="text">
	<img src="<?php echo URL::base(); ?>public/content/news/<?php echo $news['image']; ?>.png" class="image_news" >
	<?php echo Text::auto_p($news['text']); ?>
</div>