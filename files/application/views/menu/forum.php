<h3>ФОРУМ:</h3>
<form>
	<div class="contacts" id="contacts">
		<h4 id="qv">ЗАДАТЬ ВОПРОС:</h4>
		<div id="question">
			<div>
				<div class="block_1">
					ФИО:
					<input class="field" type="text" name="fullname" style="width: 330px; float: right;" disabled>
				</div>
				<div class="block_1">
					Возраст:
					<input class="field" type="text" name="age" style="width: 40px; float: right;" disabled>
				</div>
			</div>
			<div>
				<div class="block_1">
					Село/Город:
					<select size="1" name="locations" style="float: right;" disabled>
						<option>Село</option>
						<option>Город</option>
					</select>
				</div>
				<div class="block_1">
					E'mail:
					<input class="field" type="text" style="width: 300px; float: right;" name="mail" disabled>
				</div>
			</div>
			<div class="anonyms">
				<input type="checkbox" name="anonym" onClick="anonymForm(this.form)" checked> Вы можете задать вопрос анонимно
			</div>
			<textarea placeholder="Введите вопрос..." name="question"></textarea>
			<div class="submit">
				<input type="submit" value="Отправить" />
			</div>
		</div>
	</div>
	<div class="questionnaire">
		<h4>ДРУГИЕ ОТВЕТЫ</h4>
		
	</div>
</form>