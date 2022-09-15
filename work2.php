<html> 
    <head> 
        <title>"Web-программирование" (Мартюшев С. М.) - Работа 2 </title> 
        <meta name='viewport' content='width=device-width, initial-scale=1.0' char-set='utf-8'> 
    </head> 
    <body> 
    <?php 
    echo "<p><a href='index.php'>К содержанию</a>"; 
    $a=10; 
    $b=20; 
    $c=$a+$b; 
    echo "<p>a=".$a; 
    echo "<p>b=".$b; 
    echo "<p>a+b=".$c; 
    echo "<p>$a+$b=$c"; 
    echo '<p>$a+$b=$c'; 
    echo "<p>$a+$b=".($a+$b); 
    echo "<p>$a-$b=".($a-$b); 
    echo "<p>$a*$b=".($a*$b); 
    echo "<p>$a/$b=".($a/$b); 
    ?> 
    </body> 
</html>