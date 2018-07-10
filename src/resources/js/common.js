$(document).ready(function() {
	// карусель на главной
	$('.index_slider').owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		items:1
	});


	//КОРЗИНА
	//удаление позиции
	$(".del_item").click(function(){
		console.log("позиция удалена");
		$(this).closest(".item").remove(); 
	});


	//количество
	$(".cart_list_tovars").find(".count").on("click", ".count_btn", function(){
		
		var item = $(this).closest(".item");
		var action = $(this).attr("data-action");

		var 
			quantity = $(item).find(".quantity input"),
			zalog = $(item).find(".price .advance .zalog span"),
			arenda = $(item).find(".price .advance .arenda span"),
			totalPrice = $(item).find(".price .total p span:first-child");
		
		// получаем значение и преобразуем строку в число
		var 
			count = Number($(quantity).val()),
			zalogSum = Number($(zalog).text()),
			arendaSum = Number($(arenda).text());
			totalPriceSum = Number($(totalPrice).text());


		if(action == "minus"){
			count -= 1;
			zalogSum -= (zalogSum/(count + 1));
			arendaSum -= (arendaSum/(count + 1));
			totalPriceSum -= (totalPriceSum/(count + 1));

		}else if(action == "plus"){
			count += 1;
			zalogSum += (zalogSum/(count - 1));
			arendaSum += (arendaSum/(count - 1));
			totalPriceSum += (totalPriceSum/(count - 1));
		}

		if(count >= 1){
			$(quantity).val(count);
			$(zalog).text(zalogSum);
			$(arenda).text(arendaSum); 
			$(totalPrice).text(totalPriceSum);
		}

		function totalSumOrder(){
			var 
				item = $(".item"),
				zalogBlock = $(item).find(".price .advance .zalog span"),
				arenda = $(item).find(".price .advance .arenda span"),
				total = $(item).find(".price .total p span:first-child");

				sumZalog = 0;

				$(zalogBlock).each(function(){
					sumZalog += Number($(this).text());
				});

				console.log(sumZalog);
		};

		totalSumOrder();
		
	});

});