<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php
			$title = 'Вход';
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
				
				<div class="container sign-in">
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
								<input type="text" placeholder="Введите Ваш логин" name="" title="Логин" id="">
								<label for="">Пароль</label>
								<input type="text" placeholder="Введите Ваш пароль" name="" title="Пароль" id="">

								<button class="btn">Войти</button>
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