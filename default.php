<html>
    <head>
        <title>1.3</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'> 
    </head>
    <body>
        <button>Вход</button>
        <button>Новая заметка</button>
        <button>Отправить сообщение</button>
        <button>Добавить фото</button>
        <button>Статистика</button>
        <button>Администратору</button>
        <button>Выход</button>
        <H1>Рад приветствовать вас<br>
        На страницах моего сайта, посвященного путешествиям</H1> <br>
    </body>
    <?php require_once ("MySiteDB.php");
    $query = "SELECT * FROM notes";
    $select_note = mysqli_query($link, $query); 
    $query = "SELECT * FROM notes";
$select_note = mysqli_query($link, $query);
while ($note = mysqli_fetch_array($select_note))
{
echo $note ['id'], "<br>";
echo $note ['created'], "<br>";
while ($note = mysqli_fetch_array($select_note)){
    echo $note['id'], "<br>";
    ?>
    <a href="comments.php?note=<?php echo $note['id']; ?>">
    <?php echo $note ['title'], "<br>";?></a>
    
    <?php
     echo $note ['created'], "<br>";
    echo $note ['article'], "<br>";
    }
echo $note ['article'], "<br>";
}
    ?>
</html>