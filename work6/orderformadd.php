<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 5</title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
        <h1>Магазин "Автозапчасти" (база данных)</h1> 
        <p><a href='index.php'>Принятые заказы</a> 
        <h2>Форма заказа</h2> 
        <form action="processorderadd.php" method=post> 
        <table border=0> 
        <tr bgcolor=#cccccc> 
            <td width=150>
            <td width=15>Информация
        <tr> 
            <td>фИО
             <td align=left><input type="text" name="FIOstud" size=60 maxlength=3> 
        <tr> 
            <td>№ группы
            <td align=left><input type="text" name="ychGR" size=60 maxlength=3> 
        <tr> 
            <td>Пол
            <td align=left><input type="text" name="Gender" size=60 maxlength=3> 
        <tr> 
            <td>Номер зачётки
            <td align=center><input type="text" name="NumZach" size=60> 
        <tr>
            <td>Номер паспорта
            <td align=center><input type="text" name="Pass" size=60> 
        <tr>
            <td>Дата рождения
            <td align=center><input type="Date" name="DATAr" size=60> 
        <tr> 
            <td colspan=2 align=center><input type=submit value="Добавить студента"></td> 
        </table> 
        </form> 
    </body> 
</html>