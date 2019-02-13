<?php

    if (empty($_POST['add'])){
?>
<form id="form2" action="#" method="post" role="form">
  <div class="form-group">
    <label for="name">Название товара</label>
    <input type="text" class="form-control" id="name" name="name">

    <label for="info">Описание товара</label>
    <textarea class="form-control" rows="5" id="info" name="info"></textarea> 
     
    <label for="price">Цена</label>
    <input type="number" class="form-control" id="price" step="0.01" name="price">
    
    <label for="pcount">Количество</label>
    <input type="number" class="form-control" id="pcount" name="gcount">

    <label for="image">Изображение</label>
    <input type="file" class="form-control" name="image"> 
  
    <input type="submit" id="add" name="add" class="btn btn-lg btn-primary btn-block" value="ДОБАВИТЬ"/>
</form>

<br><br>
<h2 style="text-align: center;">Все товары</h2>

<?php 
    require_once('sys/models/product.php');

    $temp = new Product();    
    $row = $temp->get_all_products_for_moder();
    $pict = $temp->get_image_from_products_for_moder();

    
    if(isset($_POST['del'])){   //удаление через кнопку в таблице
        $name1 = $_POST['namedel'];    

        $temp2 = new Product();  
        $temp2->delete_products_for_moder($name1);
        header('Location: index.php?id=add'); 
    }

   /* print_r($row);
    echo "<br>"; */ 
    echo $row[0]['name']; 
    
    $i=0;

?> 

  <table class="table">
  <thead>
    <tr>
      <th>Название</th>
      <th>Информация</th>
      <th>Цена</th>
      <th>Количество</th>
      <th>Изображение</th>
      <th>Удалить</th>
  </tr>    
  </thead>
  <tbody>
  <?php 
    foreach($row as $tovar => $items)
    {
        echo "<tr>";  
             
        foreach($items as $key => $value)            
        {   
               
            echo "<td>$value</td>";
                                 
        }
        echo "<td><img class='pic' src='".$pict[$i++]['image']."'></td>"; //добавление каринок в колону изобоажение

        echo "<form id='form3' action='#'' method='post' role='form'>";  //добавление кнопки удалить  + функционал
        echo "<td><button type='submit' id='del' name='del'><img src='res/img/cross.png' width='40' height='40'></button></td>"; 
        echo "<td><input type='hidden' name='namedel' value=".$row[$i-1]['name']."></td>";        
        echo "</form>";  
    }
    /*for($i=0; $i<count($row); $i++){  

    } */
    echo "</tr>";

    ?>
  </tbody>
  </table>
  <style>
        .pic{
            
            width: 70px;
            height: 70px;
        }
        .pic:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
  </style>


<?php
    } else { 

    $name = $_POST['name'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $image_temp = $_POST['image'];
    $image = 'res/img/gallery/'.$image_temp;
    $gcount = $_POST['gcount'];
    

    require_once('sys/models/product.php');

        $model = new Product();
        $model->add_product($name, $info, $price, $image, $gcount);


        header('Location: index.php?id=add'); 

        
    }

    
    //require_once('sys/classes/db_provider.php');
  
 ?>

