<?php
    $sql = 'SHOW COLUMNS FROM `clients`';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
echo '<div class="uk-overflow-auto" style="margin-top: 55px;">';
echo '<table class="uk-table uk-table-middle uk-table-hover uk-table-striped" style="min-width: 1300px;">';
echo '<thead>';
echo '<tr>';

    $i = -1;
    $field = array();
    foreach ($rows as $row) 
    {
        $i++;
        //$field = [$i => $row['Field']];
        array_push($field, $row['Field']);
        echo '<th class="uk-text-center">' . $field[$i] . '<a style="color: #999;" href="./2_1_clients.php?t=clients&column=' . $field[$i] . '&by=ASC"> ↑ </a><a style="color: #999;" href="./2_1_clients.php?t=clients&column=' . $field[$i] . '&by=DESC">↓</a></th>';
    }
    echo '<th class="uk-text-center"> </th>';
    echo '<th class="uk-text-center"> </th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
    
    
    
    if ( isset($_GET['t']) and isset($_GET['column']) and isset($_GET['by'])) 
    {
        $sql = 'SELECT * FROM `' . $_GET['t'] . '` ORDER BY `' . $_GET['t'] . '`.`' . $_GET['column'] . '` ' . $_GET['by'];
    } elseif (!isset($_GET['by']) and (isset($_GET['table']))) 
    {
        require('1_filter.php');
    } else
    {
        $sql = 'SELECT * FROM `clients`';
    }
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
    foreach ($rows as $row) 
    {
        echo '<tr>';
        $j = -1;
        while ($j < ($i-1)){
            $j++;
            $td = $row[$field[$j]];
            echo '<td class="uk-text-center">' . $td . '</td>';
        }
        $j++;
        $td = $row[$field[$j]];
        if ($td <> null){
            echo '<td class="uk-text-center"><div uk-lightbox><a href="./img/' . $td . '">Link</a></div></td>';
        } else 
        {
            echo '<td></td>';
        }
        $id=$row['id'];
        echo '<td><span uk-icon="pencil" style="cursor: pointer;" onclick="window.location.href = \'./edit.php?mod=edit&id=' . $id . '&t=clients\';"></span></td>';
        echo '<td><span uk-icon="trash" style="cursor: pointer;" onclick="window.location.href = \'./delete.php?id=' . $id . '&t=clients\';"></span></td>';
        echo '</tr>';
    }
echo '</tbody>';
echo '</table>';
echo '</div>';
?>