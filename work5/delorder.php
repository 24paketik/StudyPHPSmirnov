<html> 
    <head>
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 5</title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head>
    <body> 
         <h1>Магазин "Автозапчасти" (база данных)</h1> 
         <h2>Удаление заказа</h2> 
         <?php 
         $idzakaz = $_REQUEST['idzakaz']; 
        $handle = new mysqli('localhost', 'x950244v_qw', 'Asdfgh1', 'x950244v_qw');
         $query = "DELETE FROM zakaz WHERE idzakaz=$idzakaz"; 
         $result = $handle->query($query); 
         if ($result) echo "Данные удалены"; 
         if (!$result) echo "Ошибка удаления данных"; 
         echo "<p><a href='index.php'>Принятые заказы</a>"; 
         ?> 
    </body> 
</html> 