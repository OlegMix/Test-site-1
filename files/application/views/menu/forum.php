<h3>ФОРУМ:</h3>
<form>
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
						E'mail:<br>
					</div>
					<div class="field_block">
						<input class="field" type="text" name="fullname" disabled><br>
						<input class="field" type="text" name="age" disabled maxlength="3"><br>
						Село<input id="loc1" type="radio" name="locations" disabled>
						Город<input id="loc2" type="radio" name="locations" disabled><br>
						<input class="field" type="text" name="mail" disabled><br>
					</div>
				</div>
				<div class="anonyms">
					<input type="checkbox" name="anonym" onClick="anonymForm(this.form)" checked> Вы можете задать вопрос анонимно
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
			Нет отвеченных вопросов...
		</div>
	</div>
</form>