<div class="contacts">
	<h4>КОНТАКТНАЯ ИНФОРМАЦИЯ</h4>
	<div class="name_block">
		Имя:<br>
		Фамилия:<br>
		Отчество:<br>
		Адрес электронной почты:<br>
	</div>
	<div class="field_block">
		<input class="field" type="text" name="name" disabled><br>
		<input class="field" type="text" name="family" disabled><br>
		<input class="field" type="text" name="lastname" disabled><br>
		<input class="field" type="text" name="mail" disabled><br>
	</div>
	<input type="checkbox" id="on" name="anonymously" value="anonymously" checked> Вы можете заполнить анкету анонимно
</div>

<div class="questionnaire">
	<h4>АНКЕТА</h4>
	<form>
		<table border="1px">
		<?php foreach($articles as $article): ?>
			<tr class="question">
				<td style="width:20px;" align="center">
					<?php echo $article['id_questions']; ?>
				</td>
				<td style="width:520px; text-indent: 10px;">
					<?php echo $article['text']; ?>
				</td>
				<td>
					<input type="radio" name="assessment_<?php echo $article['id_questions']; ?>" value="1" checked>1
					<input type="radio" name="assessment_<?php echo $article['id_questions']; ?>" value="2">2
					<input type="radio" name="assessment_<?php echo $article['id_questions']; ?>" value="3">3
					<input type="radio" name="assessment_<?php echo $article['id_questions']; ?>" value="4">4
					<input type="radio" name="assessment_<?php echo $article['id_questions']; ?>" value="5">5
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		<div style="height:35px;"><input type="submit" class="submit" value="Отправить" ></div>
	</form>
</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(function (){
	$('#on').click(function (){
		$('input').attr('disabled',true);
	});
	$('#osn').click(function (){
		$('input').removeAttr('disabled');
	});
});
</script>