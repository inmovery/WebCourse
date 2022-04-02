<?php
include("db.php");

$query = "SELECT * FROM cars";
$query_car_info = mysqli_query($connection, $query);

if(!$query_car_info) {
    die('Query failed' . mysqli_error($connection));
}

while ($row = mysqli_fetch_array($query_car_info)) {
    echo "<tr>";
    echo "<td>{$row['car_id']}</td>";
    echo "<td><a rel='".$row['car_id']."' class='car_link' href='javascript:void(0)'>{$row['car_name']}</a></td>";
    echo "</tr>";
}

?>

<script>
$(document).ready(function() {

//строка в таблице в виде гиперссылки, по клику делаем обработку по выполнению $.post
//process.php 
$('.car_link').on('click', function() {
    $('#action-container').show();

    let car_id = $(this).attr('rel');
	//в файле process.php создаём контейнер с формой обновить, удалить элемент
    $.post('process.php', {id:car_id}, function(data) {
        $('#action-container').html(data);
    });
});

});
</script>