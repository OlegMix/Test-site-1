<h3>АНКЕТА:</h3>
<form action="<?php echo URL::base(); ?>Insert/respondents" method="post">
	<div class="title_con">
		КОНТАКТНАЯ ИНФОРМАЦИЯ
	</div>
	<div class="contacts" id="contacts">
		<div class="name_block">
			Имя:<br>
			Фамилия:<br>
			Отчество:<br>
			Адрес электронной почты:<br>
		</div>
		<div class="field_block">
			<input class="field" type="text" name="name" placeholder="Введите имя" disabled><br>
			<input class="field" type="text" name="family" placeholder="Введите фамилию" disabled><br>
			<input class="field" type="text" name="lastname" placeholder="Введите отчество" disabled><br>
			<input class="field" type="text" name="mail" placeholder="Введите адрес электронной почты" disabled><br>
		</div>
		<div class="field_block_2">
			<input type="checkbox" name="anonym" onClick="anonymForm(this.form)" checked> Вы можете заполнить анкету анонимно
		</div>
	</div>
	<table class="table">
		<tr class="title_line">
			<td colspan="3">ОТВЕТЬТЕ ПОЖАЛУЙСТА НА ВОПРОСЫ</td>
		</tr>
		<?php
		$x = 0;
		foreach($articles as $article): ?>
			<?php $x = $x + 1; if ( $x%2 == 0 ) { echo "<tr class='even'>"; } else { echo "<tr class='line'>"; }; ?>
				<td style="width:20px;" align="center">
					<?php echo $article['id_questions']; ?>
				</td>
				<td style="width:520px; text-indent: 10px;">
					<?php echo $article['text']; ?>
				</td>
				<td>
					<input type="radio" name="assessment[<?php echo $article['id_questions']; ?>]" value="1" checked>1
					<input type="radio" name="assessment[<?php echo $article['id_questions']; ?>]" value="2">2
					<input type="radio" name="assessment[<?php echo $article['id_questions']; ?>]" value="3">3
					<input type="radio" name="assessment[<?php echo $article['id_questions']; ?>]" value="4">4
					<input type="radio" name="assessment[<?php echo $article['id_questions']; ?>]" value="5">5
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<input type="submit" class="submit" value="Отправить">
</form>