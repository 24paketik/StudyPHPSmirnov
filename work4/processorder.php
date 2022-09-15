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
            echo '<p>Информация обработан '; 
            echo $date; 
            echo '</p>'; 
            echo '<p>Список введёной информации о студенте: </p>';
            if( $totalqty == 0) 
                { 
                    echo 'Вы ничего не заказали на предыдущей странице!<br />'. 
                    "<p><a href='orderform.php'>Оформить заказ</a></body></html>"; 
                    exit; 
                } 
            else 
                { 
                    if ( $YchGr>0 ) 
                        echo $YchGr.' Учебная группа <br />'; 
                    if ( $oilqty>0 ) 
                        echo $oilqty.' бутылок с маслом<br />'; 
                    if ( $sparkqty>0 ) 
                        echo $sparkqty.' свечей зажигания<br />'; 
                } 
            $totalamount = 0.00; 
            define('TIREPRICE', 100); 
            define('OILPRICE', 10); 
            define('SPARKPRICE', 4); 
            $totalamount = 
            $tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE; 
            $totalamount=number_format($totalamount, 2, '.', ' '); 
            echo '<p>Итого по заказу: '.$totalamount.'</p>'; 
            echo '<p>Адрес доставки: '.$address.'</p>'; 
            $outputstring = $date."\t".$tireqty." автопокрышек\t".$oilqty. 
            " бутылок с маслом\t".$sparkqty. 
            " свечей зажигания\t\$".$totalamount."\t".$address."\n"; 
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