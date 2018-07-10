<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php
			$title = 'Корзина';
			$description = '';
			$keywords = '';
		?>
		<?php include("/components/head.php"); ?>
	</head>

	<body>
		<div class="wrapper">
			<div class="content">
				<?php include("/components/header.php"); ?>

				<div class="container cart">
					<div class="row">
						<div class="col-12">
							<div class="heading">
								<h2><?php echo $title; ?></h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-8">
							<div class="cart_list_tovars">

								<div class="item">
									<div class="row align-items-center">
										<div class="col-lg-5">
											<div class="name">
												<p>Виски Jack Daniels, объём 0.7 л.</p>
											</div>
										</div>

										<div class="col-lg-2">
											<div class="count">
												<div class="count_btn count_btn-minus">
													<i class="fa fa-minus" aria-hidden="true"></i>
												</div>
												<div class="quantity">
													<span>2</span>
												</div>
												<div class="count_btn count_btn-plus">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="price">
												<div class="advance">
													<p class="zalog">Залог: <span>2000</span></p>
													<p class="arenda">Аренда: <span>1500</span></p>
												</div>

												<div class="total">
													<p>= <span>600</span> <span>руб.</span></p>
												</div>
											</div>
										</div>

										<div class="col-lg-1">
											<div class="del_item">
												<i class="fa fa-times" aria-hidden="true"></i>
											</div>
										</div>
									</div>	
								</div>
						
							</div>
						</div>

						<div class="col-lg-3 offset-lg-1">
							<div class="row cart_price">
								<div class="col-12">
									<div class="warning_text">
										<p>Не забудьте ознакомиться с <a href="">Правилами аренды</a></p>
									</div>
								</div>

								<div class="col-12">
									<form action="">
										<div class="form_order">
											<input type="text" name="name" id="name" title="Имя" placeholder="Имя">
											<input type="text" name="phone" id="phone" title="Номер телефона" placeholder="Номер телефона">
											<textarea name="address" id="address" title="Адрес доставки" placeholder="Адрес доставки"></textarea>
										</div>

										<div class="paper_check">
											<p class="zalog">Залог: <span>2700</span></p>
											<p class="arenda">Аренда: <span>2000</span></p>
											<p class="total">Итого: <span>4700</span></p>

											<button class="btn">Заказать</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>			
			</div>

			<?php include("/components/footer.php"); ?>
		</div>

		<?php include("/components/connect_style.php"); ?>
	</body>
</html>