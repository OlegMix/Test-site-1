<div class="messege">
	<?php 
	if ($type == "error") { ?>
		<img class="status" src="<?php echo URL::base(); ?>public/image/system/Error.png">
		<h3>ОШИБКА!</h3>
		<ul>
			<?php foreach ($messege as $value) {
				echo "<li>".$value."</li>";
			} ?>
		</ul>
	<?php } elseif ($type == "done") {
		echo "<img class='status' src='".URL::base()."public/image/system/Done.png'><h3>УСПЕШНО!</h3>".$messege;
	}?>	
</div>
