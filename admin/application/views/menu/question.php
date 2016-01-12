<h2>Редактирование анкеты</h2>
<div class="contacts">
	<textarea></textarea><br/>
	<button>Добавить вопрос</button>
</div>
<div class="questionnaire">
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
					<button><img src="<?php echo URL::base(); ?>public/image/system/settings.png"></button>
					<button><img src="<?php echo URL::base(); ?>public/image/system/delete.png"></button>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
</div>