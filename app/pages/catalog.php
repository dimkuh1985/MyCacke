<h2>Каталог товаров</h2>

<?php 
	if ($this->user != 'Гость') {
?>
	<div>
		<img id="basket" src="res/img/basket.jpg">
		<h4>
			Количество товаров:
			<span id="gcount">0</span>
		</h4>
		<h4>
			Общая стоимость:
			<span id="gcost">0</span>
		</h4>		
		<div style="clear: left"></div>
	</div>
<?php 
	} 
	if ($this->user == 'moder') { 
?>
	<a href="index.php?id=add">Добавить товар</a><span style="margin-left: 30px;">
	<a href="index.php?id=management">Управление заказами</a></span>
<?php 
	}
	require_once('sys/models/product.php');
	$product_model = new Product();
	$goods = $product_model->get_all_goods(); 
?>
<div id="catalog">
	<?php
		foreach ($goods as $product) {
	?>
		<div class="card">
			<h3><?=$product['name']?></h3>
			<h4><?=$product['info']?></h4>
			<h2><?=$product['price']?> uah</h2>
			<h4><?=$product['gcount']?></h4>
			<?php
				if ($this->user != 'Гость') {
			?>
				<button id="<?=$product['id']?>">Добавить в корзину</button>
			<?php
				}
			?>
		</div>
	<?php
		}
	?>
</div>

<style>
	#basket{
		width: 50px;
		height: 50px;
		float:left;
		margin-right: 30px;
	}
	#catalog {
		text-align: center;
	}
	.card {
		width: 230px;
		display: inline-block;
		margin: 10px;
		padding: 30px;
		border: 1px solid silver;
		border-radius: 15px;
		box-shadow: 0 0 silver, 0 5px 20px silver;
	}
</style>

<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>//AJAX для События click
	$(document).ready(function () { //проверка готовности документа
		$("button").click(function() {

			let id = $(this).attr("id");
			let str = $(this).parent().find("h2").html();
			let price = str.split(" ")[0];


			$.ajax({
				url: "sys/ajax/basket.php",
				data: "id=" + id + "&price=" + price,
				success: function(result){
					let count = result.split("-")[0];
					let cost = result.split("-")[1];

					$("#gcount").html(count);
					$("#gcost").html(cost);
				}

			})

		});

	});
</script>
