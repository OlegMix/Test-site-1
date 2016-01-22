<h3>УСТАВ УЧРЕЖДЕНИЯ:</h3>
<ul>
	<?php foreach ($charter as $value) {
		echo "<li><a href='".URL::base()."public/content/charter/".$value['link']."'>".$value['title']."</a></li>";
	}?>
</ul>