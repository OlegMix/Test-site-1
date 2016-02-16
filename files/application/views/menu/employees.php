<h3>СПЕЦИАЛИСТЫ:</h3>
<table class="table">
	<tr class="title_line">
		<td>Наименование должности:</td>
		<td>ФИО:</td>
		<td>Номер телефона:</td>
		<td>На обработку персональных данных согласен:</td>
	</tr>
	<?php $x = 0;
	foreach($employees as $employee): ?>
		<?php $x = $x + 1; if ( $x%2 == 0 ) { echo "<tr class='even'>"; } else { echo "<tr>"; }; ?>
			<td style="width:200px;"><?php echo $employee['specialty']; ?></td>
			<td style="width:200px;"><?php echo $employee['full_name']; ?></td>
			<td style="width:130px;"><?php echo $employee['phone']; ?></td>
			<td align="center"><a href="<?php echo URL::base().'public/content/specialist/agreement/'.$employee['agreement'].'.pdf'; ?>"><img src="<?php echo URL::base().'public/image/system/yes.png'; ?>"></a></td>
		</tr>
	<?php endforeach; ?>
</table>