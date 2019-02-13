<h2>Управление заказами</h2>

<?php 
require_once('sys/models/inforder.php');
$order_model = new Inforder();
$order = $order_model->get_info_about_orders(); 

print_r($order);
?>

<div id="manager">
	
		<table class="table">
			<thead>
			<tr>
				 <th>Клиент</th>
      			 <th>Общая стоимсть</th>
      			 <th>Оплачено</th>
      		</tr>
			</thead>
	<?php
		foreach ($order as $inforder) {
	?>
			<tbody>
				<form action="sys/ajax/payconfirm.php" method="post">
			<td name="<?=$inforder['user']?>"><?=$inforder['user']?></td>
			<td><?=$inforder['price']?></td>
			<td><input type="submit" value="Подтвердить оплату"></td>
				</form>
			</tbody>
	<?php
			}
	?>
		</table>
	<?php
		
	?>
</div>



