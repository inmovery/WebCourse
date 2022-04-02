<?php
include("db.php");
//достаём данные запрашиваемого запрос от пользователя
$search = $_POST['search'];

if(!empty($search)) {
	//аналог полнотекстового поиска LIKE ..param.. ищёт в конце, вначале, в середине как contains
    $query = "SELECT * FROM cars WHERE car_name LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($search_query);

    if(!$search_query) {
		//кидаем ошибку, если не был найден результат
        die('QUERY FAILED' . mysqli_error($connection));
    }

    if($count <= 0) {
        echo 'No records found';
    } else {
     while($row = mysqli_fetch_array($search_query)) {
         $car_name = $row['car_name'];
         ?>
		<!-- выводим результат если был найден -->
         <ul class='list-unstyled'>
             <?php 
                 echo "<li>{$car_name} in stock</li>";
             ?>
         </ul>
    <?php }
    }
}
?>