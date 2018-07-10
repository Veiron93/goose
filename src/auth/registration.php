<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php
			$title = 'Регистрация';
			$description = '';
			$keywords = '';
		?>
		<?php include("../components/head.php"); ?>
	</head>

	<?php echo $path; ?>

	<body>
		<div class="wrapper">
			<div class="content">
				<?php include("../components/header.php"); ?>
				
				<div class="container registration">
					<div class="row">
						<div class="col-12">
							<div class="heading">
								<h1><?php echo $title; ?></h1>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 offset-lg-4">
							<form action="" id="">
								<label for="">Логин</label>
								<input type="text" placeholder="Латинскими символами" name="" title="" id="">
								<label for="">Электронная почта</label>
								<input type="text" placeholder="Укажите актуальный адрес" name="" title="" id="">
								<label for="">Пароль</label>
								<input type="text" placeholder="Минимум 6 символов" name="" title="" id="">
								<label for="">Повторите пароль</label>
								<input type="text" placeholder="Пароли должны совпадать" name="" title="" id="">

								<div class="conditions">
									<input id="conditions" type="checkbox">
									<label for="conditions">Подтверждаю, что мне уже 18 лет</label>
								</div>

								<button class="btn">Регистрация</button>
							</form>
						</div>
					</div>
				</div>

			</div>

			<?php include("../components/footer.php"); ?>
		</div>

		<?php include("../components/connect_style.php"); ?>
	</body>
</html>