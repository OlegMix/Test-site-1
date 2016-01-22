<h3>НОРМАТИВНЫЕ ДОКУМЕНТЫ:</h3>
<ul>
	<?php foreach ($regulations as $value) {
		echo "<li><a href='".URL::base()."public/content/charter/".$value['link']."'>".$value['title']."</a></li>";
	}?>
</ul>