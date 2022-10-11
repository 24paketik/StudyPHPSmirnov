<?php require_once("MySiteDB.php");
    $note_id = $_GET['note'];
    //Формируем SQL-запрос на выборку с учетом переданного id заметки
    $query = "SELECT created, title, article FROM notes WHERE id = $note_id";
    $query_comments = "SELECT * FROM comments WHERE art_id = $note_id";
?>