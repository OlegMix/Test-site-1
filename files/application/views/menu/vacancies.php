<h3>ВАКАНСИИ ГОБУЗ<br />«Маловишерская стоматологическая поликлиника»</h3>
<table class="table">
	<tr class="title_line">
		<td>Наименование должности</td>
		<td>Требования:</td>
		<td>Условия:</td>
		<td>Меры социальной поддержки:</td>
	</tr>
	<?php
	$x = 0;
	foreach($vacancies as $vacancy): ?>
		 <?php $x = $x + 1; if ( $x%2 == 0 ) { echo "<tr class='even'>"; } else { echo "<tr>"; }; ?> 
			<td><?php echo $vacancy['job_title']; ?></td>
			<td><?php echo $vacancy['demands']; ?></td>
			<td><?php echo $vacancy['сonditions']; ?></td>
			<td><?php echo $vacancy['support']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>