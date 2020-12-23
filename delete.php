<?php 
    require('db_connect.php'); 
    $t = $_GET['t'];
    $id = $_GET['id'];
    
    
    $sql = 'DELETE FROM `' . $t . '` WHERE id=' . $id;
    print ($sql);
    $result = mysqli_query($link, $sql);

    if ($result == false) {
        print("Произошла ошибка при выполнении запроса");
    }
    /*DELETE FROM имя_таблицы
    [WHERE условие_удаления]*/
    
    if ($t == 'clients') $repl=1; elseif ($t == 'rent') $repl=2; elseif ($t == 'places') $repl=3;
    echo '<script language="JavaScript">window.location.replace(\'' . 'https://valtion.ru/2_' . $repl .  '_' . $t . '.php\');</script>';
?>