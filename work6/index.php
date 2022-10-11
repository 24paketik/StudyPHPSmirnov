<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 6 </title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
        <h1>Информация о студентах</h1> 
        <h2>Список студентов:</h2> 
        <?php
        $handle = new mysqli('localhost', 'x950244v_qw', 'Asdfgh1', 'x950244v_qw');
        $query = "SELECT FIOstud, 
                        ychGR, 
                        Gender, 
                        NumZach, 
                        Pass, 
                        date_format(DATAr,'%d.%m.%Y %H:%i') as DATAr 
                        FROM infst 
                        ORDER BY DATAr DESC"; 
        $result = $handle->query($query); 
        $numresult=$result->num_rows; 
        echo '<p>Количество студентов - '.$numresult; 
        echo '<table border=1>'; 
        echo '<tr><th>№ группы</th>'; 
        echo '<th>ФИО</th>'; 
        echo '<th>Дата рождения</th>'; 
        echo '<th>Пол</th>'; 
        echo '<th>номер зачётки</th>'; 
        echo '<th>Номер паспорта</th>'; 
        echo '<th></th>'; 
        echo '<th></th>'; 
        
        for ($i=0;$i<$numresult;$i++) 
        { 
            $row=$result->fetch_assoc();
            echo '</tr><td>'.$row['ychGR']; 
            echo '</td><td>'.$row['FIOstud']; 
            echo '</td><td>'.$row['DATAr']; 
            echo '</td><td>'.$row['Gender']; 
            echo '</td><td>'.$row['NumZach']; 
            echo '</td><td>'.$row['Pass'];
           echo '</td><td>'; 
            echo '<form  method="post">'; 
            echo '<input type="hidden" name="idzakaz" value="'.$row['idzakaz'].'">'; 
            echo '<input type="submit" value="Удалить">'; 
            echo '</form>'; 
            echo '</td><td>'; 
            echo '<form  method="post">'; 
            echo '<input type="hidden" name="idzakaz" value="'.$row['idzakaz'].'">'; 
            echo '<input type="submit" value="Изменить">'; 
            echo '</form>'; 
        } 
        echo '</table>' 
        ?> 
        <p><a href='orderformadd.php'>Добавить студента</a> 
        <p><a href='../index.php'>К содержанию</a> 
    </body> 
</html> 