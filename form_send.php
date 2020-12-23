<?php  

    $field = array();
    $type = array();
    $null = array();


    $sql = 'SHOW COLUMNS FROM `' . $_POST['table'] . '`'; //' . $_POST['table'] . '
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) 
    {
        array_push($field, $row['Field']);
        array_push($type, $row['Type']);
        array_push($null, $row['Null']);
    }
    
    include ('0_test_post.php');
    
    
    
    if ($_POST['mod'] == 'add') 
    {
        $i = 0;
        $sql = "INSERT INTO `" . $_POST['table'] . "` SET `" . $field[$i] . "`='" . $_POST[$field[$i]] . "'";
        $i++;
        while ($i<=(count($_POST)-3)){
            $sql = $sql . ", `" . $field[$i] . "`='" . $_POST[$field[$i]] . "'";
            $i++;
        }
        print ($sql);
        
        
        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
        
    } elseif ($_POST['mod'] == 'edit') 
    {
        //UPDATE таблица SET поле = значение
        $i = 1;
        $sql = "UPDATE `" . $_POST['table'] . "` SET `" . $field[$i] . "`='" . $_POST[$field[$i]] . "'";
        $i++;
        while ($i<=(count($_POST)-3))
        {
            $sql = $sql . ", `" . $field[$i] . "`='" . $_POST[$field[$i]] . "'";
            $i++;
        }
        $i = 0;
        $sql = $sql . " WHERE `" . $field[$i] . "`='" . $_POST[$field[$i]] . "'";
        print ($sql);
        
        
        $result = mysqli_query($link, $sql);

        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
        }
    }
?>