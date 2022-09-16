<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 3 </title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
        <h1>Информация о студентах</h1> 
        <h2>Результаты добавления информации о студенте</h2>
        <?php 
            $YchGr = $_POST['YchGr']; 
            $FIOst = $_POST['FIOst']; 
            $DataR = $_POST['DataR']; 
            $gender = $_POST['gender']; 
            $NumZach = $_POST['NumZach']; 
            $Pass = $_POST['Pass']; 
            $date = date('H:i, d.m.Y'); 
            echo '<p>Информация обработана '; 
            echo $date; 
            echo '</p>';  
            $outputstring = $date." ФИО: ".$FIOst." Учебная группа: ".$YchGr." Дата рождения: ".$DataR." Пол: ".$gender." Номер зачётки: ".$NumZach." Паспорт: ".$Pass. "\n";
            @ $fp = fopen("orders.txt", 'ab'); 
            if (!$fp) 
                { 
                    echo "<p><strong>В настоящий момент ваш запрос не может быть обработан. " 
                    ."Пожалуйста, попытайтесь позже.</strong></p>". 
                    "<p><a href='index.php'>Просмотр заказов</a></body></html>"; 
                    exit; 
                } 
            fwrite($fp, $outputstring, strlen($outputstring)); 
            fclose($fp); 
            echo '<p>Заказ записан.</p>'; 
        ?> 
        <p><a href='index.php'>Просмотр заказов</a> 
    </body> 
</html>