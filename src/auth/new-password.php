<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php
			$title = 'Новый пароль';
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
				
				<div class="container new-password">
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
								<label for="">Пароль</label>
								<input type="text" placeholder="Минимум 6 символов" name="" title="" id="">
								<label for="">Повторите пароль</label>
								<input type="text" placeholder="Пароли должны совпадать" name="" title="" id="">

								<button class="btn">Сохранить</button>
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