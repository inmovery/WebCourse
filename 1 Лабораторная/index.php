<? header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles.css" rel="stylesheet">
	<title>Зоопарк</title>
</head>
<body>
	<div id="wrap">
		<div id="table-block">
			<table>
				<tr>
					<th>Название</th>
					<th>Описание</th>
					<th>Длительность жизни, г</th>
					<th>Место обитания</th>
				</tr>
				<tr>
					<td>Слон</td>
					<td>Эти животные относятся к классу травоядных млекопитающих, принадлежат к отряду хоботных и представляют семейство слоновых. Серые гиганты по праву носят звание самых крупных млекопитающих на планете. У них массивное удлиненное тело, толстые прямые ноги и тонкий хвост с опушенным кончиком.</td>
					<td>60-70</td>
					<td>Африка</td>
				</tr>
				<tr>
					<td>Жираф</td>
					<td>Парнокопытное млекопитающее из семейства жирафовых. Является самым высоким наземным животным планеты.</td>
					<td>25-35</td>
					<td>Африка</td>
				</tr>
				<tr>
					<td>Коала</td>
					<td>Вид сумчатых, обитающий в Австралии. Единственный современный представитель семейства коаловых из отряда двурезцовых сумчатых.</td>
					<td>12-13</td>
					<td>Австралия</td>
				</tr>
				<tr>
					<td>Медведь</td>
					<td>Семейство млекопитающих отряда хищных. Отличаются от других представителей псообразных более коренастым телосложением. Медведи всеядны, хорошо лазают и плавают, быстро бегают, могут стоять и проходить короткие расстояния на задних лапах. Имеют короткий хвост, длинную и густую шерсть, а также отличное обоняние. Охотятся вечером или на рассвете.</td>
					<td>20-30</td>
					<td>Северный полюс, Северная америка, Канада, Россия, Северный Китай, Корея</td>
				</tr>
			</table>
		</div>

		<div id="form-block">
			<form>
				<fieldset>
					<legend>
						<b>Форма регистрациии</b>
					</legend>
					<p>
						<label for="name">Имя <em>*</em></label>
						<input type="text" id="name">
					</p>
					<p>
						<label for="email">E-mail</label>
						<input type="email" id="email">
					</p>
					<p>
						<textarea cols="30" rows="5" placeholder="Описание(дополнительно)"></textarea>
					</p>
					<p style="text-align: right;">
						<input type="submit" value="Отправить">
					</p>
				</fieldset>
			</form>
		</div>

		<div id="list-block">
			<h3>
				<b>Виды животных:</b>
			</h3>
			<ul>
				<li>Хордовые</li>
				<li>Иглокожие</li>
				<li>Моллюски</li>
				<li>Членистоногие</li>
				<li>Губки</li>
			</ul>

			<h3>
				<b>Классификация животных:</b>
			</h3>
			<ol class="multilevel-template">
				<li>Хордовые
					<ol>
						<li>Бесчерепные
							<ol>
								<li>Ланцетники</li>
							</ol>
						</li>
						<li>Позвоночные
							<ol>
								<li>Хрящевые рыбы</li>
								<li>Костные рыбы</li>
								<li>Земноводные</li>
								<li>Пресмыкающиеся</li>
								<li>Птицы</li>
								<li>Млекопитающиеся</li>
							</ol>
						</li>
						<li>Оболочники</li>
					</ol>
				</li>
			</ol>
		</div>
	</div>
</body>
</html>