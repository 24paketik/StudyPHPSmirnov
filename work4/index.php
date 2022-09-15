<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 4 </title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
        <h1>Информация о студентах</h1> 
        <h2>Информация:</h2> 
        <?php 
        @ $fp = fopen('orders.txt','rb'); 
        if (!$fp)
        { 
            echo "<p>Нет информации о студентах. Пожалуйста, попытайтесь позже."; 
            echo "<p><a href='orderform.php'>Добавить студента</a>"; 
            echo "<p><a href='../index.php'>К содержанию</a>"; 
            exit; 
            } 
            while (!feof($fp)) 
            { 
            $order= fgets($fp, 999); 
            echo '<br>'.$order; 
            } 
            fclose($fp); 
        ?> 
        <p><a href='orderform.php'>Добавить студента</a> 
        <p><a href='../index.php'>К содержанию</a> 
    </body> 
</html>