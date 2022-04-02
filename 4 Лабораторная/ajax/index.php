<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <title>Форма для стажировки</title>
</head>

<body>
	<div class="feedback">
		<div class="main-container">
			<h2 class="container_h2">Форма<span> обратной связи</span></h2>
			<div class="form-container">
				<div class="notice"></div>
				<div class="fields">
					<form class="contact_form" action="">
						<p><input type="text" name="name" value="" placeholder="Имя" required></p>
						<div class="row">
							<div class="col-sm-6"><input type="email" name="email" value="" placeholder="E-mail" required></div>
							<div class="col-sm-4">
								<select class="choice" name="make" title="Что сделать?" data-style="btn-primary" show-tick required>
									<option value="Сайт">Сайт</option>
									<option value="Парсер">Парсер</option>
									<option value="Бот">Бот</option>
								</select>
							</div>
							<div class="col-sm-2">
								<input type="checkbox" name="check" style="margin-top:10px;margin-left:30px;width:20px;height:20px;">
							</div>
						</div>
						<label class="text">Текст</label>
						<textarea name="message" cols="40" rows="3"></textarea>
						<input type="submit" name="submit" class="btn_submit" value="Отправить">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/bootstrap-select.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>