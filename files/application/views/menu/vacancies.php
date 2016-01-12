<h3>ВАКАНСИИ ГОБУЗ<br />«Маловишерская стоматологическая поликлиника»</h3>
<table class="table_blue">
	<tr>
		<td class="title_line">Наименование должности</td>
		<td class="title_line">Требования:</td>
		<td class="title_line">Условия:</td>
		<td class="title_line">Меры социальной поддержки:</td>
	</tr>
	<?php foreach($vacancies as $vacancy): ?>
		<tr>
			<td><?php echo $vacancy['job_title']; ?></td>
			<td><?php echo $vacancy['demands']; ?></td>
			<td><?php echo $vacancy['сonditions']; ?></td>
			<td><?php echo $vacancy['support']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>