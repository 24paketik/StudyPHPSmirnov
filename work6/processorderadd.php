<html> 
    <head> 
         <title>"Web-программирование" (Мартюшев С. М.) - Работа 5</title> 
         <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
         <h1>Магазин "Автозапчасти" (база данных)</h1> 
         <h2>Результаты оформления заказа</h2> 
         <?php
         $tirekol = $_REQUEST['FIOstud']; 
         $oilkol = $_REQUEST['ychGR']; 
         $sparkkol = $_REQUEST['Gender']; 
         $adress = $_REQUEST['NumZach']; 
         $NumZach= $_REQUEST['Pass']; 
         $DATAr = $_REQUEST['DATAr']; 
         if ((!isset($tirekol))||(!isset($oilkol))||(!isset($sparkkol))||(!isset($adress))||(!isset($NumZach))||(!isset($DATAr)) )
         { 
             echo '<p>Вы не указали все данные. Повторите ввод заказа.'; 
             echo '<p><a href="orderformadd.php">К форме заказа</a>'; 
             echo '</body></html>'; 
             exit; 
         } 
         
         $totalkol = 0; 
         $totalkol = $tirekol + $oilkol + $sparkkol; 
         if( $totalkol == 0) 
         { 
             echo '<p>Вы ничего не выбрали. Повторите ввод заказа.'; 
             echo '<p><a href="orderformadd.php">К форме заказа</a>'; 
             echo '</body></html>'; 
             exit; 
         } 
         
         $itog = 0; 
         define('TIREPRICE', 100); 
         define('OILPRICE', 10); 
         define('SPARKPRICE', 4); 
         $itog = $tirekol*TIREPRICE+$oilkol*OILPRICE+$sparkkol*SPARKPRICE; 
         $zakazdate=date('Y-m-d H:i:s'); 
         
        $handle = new mysqli('localhost', 'x950244v_qw', 'Asdfgh1', 'x950244v_qw');
         $query = "INSERT INTO zakaz (FIOstud, ychGR, Gender, NumZach, Pass, DATAr) VALUES ($tirekol, $oilkol, $sparkkol, $itog, '$adress', '$zakazdate')"; 
         $result = $handle->query($query); 
         if ($result) echo "Данные сохранены"; 
         if (!$result) echo "Ошибка сохранения данных"; 
         echo "<p><a href='index.php'>Принятые заказы</a>"; 
         ?> 
    </body> 
</html>