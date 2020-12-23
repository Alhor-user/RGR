<?php
    
    $table = $_POST["table"];
    $sql = 'SHOW COLUMNS FROM `' . $table . '`';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                
    $i = -1;
    
    $field = array();
    $type = array();
    $null = array();
    foreach ($rows as $row) 
    {
        $i++;
        array_push($field, $row['Field']);
        array_push($type, $row['Type']);
        array_push($null, $row['Null']);
    }
    
    $j = -1;
    while ($j<$i)
    {
        $j++;
        $message = $_POST[$field[$j]];
        
        
        //Сообщение пустое?
        if ($null[$j]=='NO' and empty($message))
        {
            echo '<h2 class="uk-text-center" style="padding-top: 250px;"> Ошибка! Присутствует пустое поле "' . $field[$j] . '"</h2>';
            echo '<script language="JavaScript">setTimeout(function(){history.go(-1);}, 2000);</script>';
            $err++;
        }
        
        
        //Тип сообщения
        if ($type[$j]=='int' and !empty($message))
        {
            if (!preg_match('~^[0-9]+$~', $message))
            {
                echo '<h2 class="uk-text-center" style="padding-top: 250px;"> Ошибка! значение в поле "' . $field[$j] . '" - должно быть int!</h2>';
                echo '<script language="JavaScript">setTimeout(function(){history.go(-1);}, 2000);</script>';
                $err++;
            }
        } 
    }
    if ($err == 0 ) 
    {
        require('form_send.php'); 
        if ($table == 'clients') $repl=1; elseif ($table == 'rent') $repl=2; elseif ($table == 'places') $repl=3;
        echo '<script language="JavaScript">window.location.replace(\'' . 'https://valtion.ru/2_' . $repl .  '_' . $table . '.php\');</script>';
    }
?>

