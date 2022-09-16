<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 3 </title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head> 
    <body> 
        <h1>Информация о студентах</h1> 
        <h2>Форма добваления студента</h2> 
        <form action="processorder.php" method=post> 
            <table border=0> 
                <tr bgcolor=#cccccc> 
                <td width=150>
                <td width=15>Информация
                <tr> 
                <td>учебная группа
                <td align=left><input type="text" name="YchGr" size=40 maxlength=40> 
                <tr> 
                <td>ФИО студента
                <td align=left><input type="text" name="FIOst" size=40 maxlength=40> 
                <tr> 
                <td>Дата рождения
                <td align=left><input type="Date" name="DataR" size=40 maxlength=40> 
                <tr> 
                <td>Пол студента
                <td align=center><input type="text" name="gender" size=40 maxlength=40> 
                <tr> 
                <td> № зачётки
                <td align=center><input type="text" name="NumZach" size=40 maxlength=40> 
                <tr> 
                <td>Паспортные данные
                <td align=center><input type="text" name="Pass" size=40 maxlength=40> 
                <tr> 
                <td colspan=2 align=center><input type=submit value="Добавить сдудента"> 
            </table> 
        </form> 
        <p><a href='index.php'>Просмотр студентов</a> 
    </body> 
</html>