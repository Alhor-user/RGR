<?php

    //Считываем все столбцы и их типы
    //require('0_test_post.php');
    
    
    
    
    $table = $_GET["table"];
    $sql = 'SHOW COLUMNS FROM `' . $table . '`';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                
    $i = -1;
    
    $field = array();
    $type = array();
    //Записываем типы и соответствующие им поля (по i) - полю i соответствует тип i
    foreach ($rows as $row) 
    {
        $i++;
        array_push($field, $row['Field']);
        array_push($type, $row['Type']);
    }
    
    $j = 0;
    $cnt = 0; //Счетчик для перебора до count($field)
    
    
    if ($_GET['ФИО']=='ФИО') $_GET['ФИО']='';
    foreach ($_GET as $key => $value) { 
        $cnt = 0; //Счетчик для перебора до count($field)
        while ($cnt < count($field)) {
            if ($key == $field[$cnt])
            {
                if ($type[$cnt] == 'int'){
                    if (!preg_match('~^[0-9]+$~', $value))
                    {
                        $_GET[$key] = '';
                    }
                }
            }
            $cnt++;
        }
    }
     if(!preg_match('~^[0-9]+$~', $_GET['Возраст_2'])) $_GET['Возраст_2'] = '';
    
    
    
    //require('0_test_post.php');
    
    
    $sql = 'SELECT * FROM `' . $_GET['table'] . '` WHERE 1=1 ';
    if (!empty($_GET['id'])) {
        $sql = $sql . 'AND `id`=\'' . $_GET['id'] . '\' ';
    }
    if (!empty($_GET['ФИО'])) {
        $sql = $sql . 'AND `ФИО`=\'' . $_GET['ФИО'] . '\' ';
    }
    if (!empty($_GET['Паспорт_серия'])) {
        $sql = $sql . 'AND `Паспорт_серия`=\'' . $_GET['Паспорт_серия'] . '\' ';
    }
    if (!empty($_GET['Паспорт_номер'])) {
        $sql = $sql . 'AND `Паспорт_номер`=\'' . $_GET['Паспорт_номер'] . '\' ';
    }
    if (!empty($_GET['Возраст'])) {
        $sql = $sql . 'AND `Возраст`>=' . $_GET['Возраст'] . ' ';
    }
    if (!empty($_GET['Возраст_2'])) {
        $sql = $sql . 'AND `Возраст`<=' . $_GET['Возраст_2'] . ' ';
    }
    if (!empty($_GET['Организация'])) {
        $sql = $sql . 'AND `Организация`=\'' . $_GET['Организация'] . '\' ';
    }
    if (!empty($_GET['Договор'])) {
        if ($_GET['Договор']=='on'){
            $sql = $sql . 'AND `Договор`<>\'\'';
        }
    }
    //print ($sql);
    
        //Ищем i для элемента $_GET[j] - Проверяем все элементы $field, если $field[cnt] = $key то смотрим $type[cnt] и проверяем его.
        //Проверка типа - если тип int, то !preg_match('~^[0-9]+$~', $message) - проверили, есть ли что-то кроме цифр
        //Если тип не совпадает - $_GET[$key] = ''
?>