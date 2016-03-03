<h3>ФОРУМ:</h3>
<form action="<?php echo URL::base(); ?>Insert/question" method="post">
	<div>
		<div id="qv" class="title_con" title="Свернуть/Развернуть форму">
			ЗАДАТЬ ВОПРОС:&nbsp<sup>(Свернуть/Развернуть)</sup>
		</div>
		<div id="question">
			<div id="contacts" class="contacts">
				<div>
					<div class="name_block">
						ФИО:<br>
						Возраст:<br>
						Село/Город:<br>
						Пол:<br>
						E'mail:<br>
					</div>
					<div class="field_block">
						<input id="fullname" class="field" type="text" placeholder="Введите полное имя" name="fullname" disabled><br>
						<input id="age" class="field" type="text" placeholder="Введите ваш возраст" name="age" disabled maxlength="3"><br>
						<input class="radio" id="loc1" type="radio" value="village" name="locations" disabled>Село
						<input class="radio" id="loc2" type="radio" value="city" name="locations" disabled>Город<br>
						<input class="radio" id="gen1" type="radio" value="M" name="gender" disabled>Муж.
						<input class="radio" id="gen2" type="radio" value="W" name="gender" disabled>Жен.<br>
						<input id="mail" class="field" type="text" placeholder="Введите адрес электронной почты" name="mail" disabled><br>
					</div>
				</div>
				<div class="anonyms">
					<input type="checkbox" id="anonym" name="anonym" onClick="anonymForm(this.form)" checked> Вы можете задать вопрос анонимно
				</div>
				<textarea placeholder="Введите вопрос..." name="question"></textarea>
			</div>
			<div align="right">
				<input type="submit" class="submit" value="Задать вопрос" />	
			</div>
		</div>
	</div>
	<div class="questionnaire">
		<div class="title_con">
			ДРУГИЕ ОТВЕТЫ
		</div>
		<div class="answers">
			<?php if (!empty($questions)) {
				foreach ($questions as $value) { ?>
					<div class="answer">
						<?php echo HTML::date($value['date_time']); ?> - <?php echo strip_tags(Text::limit_chars($value['question'], 50, NULL, TRUE)); ?> | <a href="<?php echo URL::base().'news/'.$value['id_questions'].'.html'; ?>">Просмотреть</a>			
					</div>
				<?php }
			} else {
				echo "Нет отвеченных сообщений...";
			}
			echo $pagination; ?>
		</div>
	</div>
</form>