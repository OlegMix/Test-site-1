<h3>НОВОСТИ:</h3>
<?php foreach($news as $news_arr): ?>
	<div class="news">
		<img src="<?php echo URL::base(); ?>public/content/news/<?php echo $news_arr['image']; ?>.png" class="img_news">
		<div class="text">
			<div>
				<h4><a href="<?php echo URL::base().'news/'.$news_arr['id_news'].'.html'; ?>"><?php echo Text::limit_chars($news_arr['title'], 40, NULL, TRUE); ?></a></h4>
			</div>
			<div>
				<div class="preview">
					<?php echo Text::limit_chars($news_arr['text'], 280, NULL, TRUE); ?>
				</div>
				<div class="subtitle">
					<div style="float:left;">
						<?php echo HTML::date($news_arr['date_pub']); ?>
					</div>
					<div style="float:right;">
						<a href="<?php echo URL::base().'news/'.$news_arr['id_news'].'.html'; ?>">Читать далее...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>