<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php
			$title = 'Восстановление пароля';
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
				
				<div class="container reset-password">
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
								<label for="">Электронная почта</label>
								<input type="text" placeholder="Укажите актуальный адрес" name="" title="Электронная почта" id="">

								<button class="btn">Восстановить</button>
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