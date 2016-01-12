<h3>СПЕЦИАЛИСТЫ:</h3>
<table class="table_blue">
	<tr>
		<td class="title_line">Наименование должности:</td>
		<td class="title_line">ФИО:</td>
		<td class="title_line">Номер телефона:</td>
		<td class="title_line">На обработку персональных данных согласен:</td>
	</tr>
	<?php foreach($employees as $employee): ?>
		<tr>
			<td style="width:200px;"><?php echo $employee['specialty']; ?></td>
			<td style="width:200px;"><?php echo $employee['full_name']; ?></td>
			<td style="width:130px;"><?php echo $employee['phone']; ?></td>
			<td align="center"><a href="<?php echo URL::base().'public/content/specialist/agreement/'.$employee['agreement'].'.pdf'; ?>"><img src="<?php echo URL::base().'public/image/system/yes.png'; ?>"></a></td>
		</tr>
	<?php endforeach; ?>
</table>