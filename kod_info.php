<h2 class="uk-text-center" style="margin: 30px 0 0 0;">
<?php
    
    
    $sql = 'SELECT * FROM rent WHERE kod = "'. $kod .'"';
    $result = mysqli_query($link, $sql);
    $matchFound = mysqli_num_rows($result);
    if ( $matchFound > 0) {
        echo 'Место занято';
    } else 
    {
        echo 'Место свободно, арендовать?';
    }

echo '</h2>';

if ($matchFound > 0) 
{
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    

    echo '<h4 class="uk-text-center" style="margin: 10px 0 20px 0;">Подробности:</h4>';
    echo '<form name="del" method="POST" action="form2.php">';
    echo '<table class="uk-table uk-table-striped">';
    echo '    <thead>';
    echo '        <tr>';
    echo '            <th>Код места</th>';
    echo '            <th>ФИО</th>';
    echo '            <th>Вид деятельности</th>';
    echo '            <th>Дата начала аренды</th>';
    echo '            <th>Срок аренды</th>';
    echo '            <th>🗑</th>';
    echo '        </tr>';
    echo '    </thead>';
    echo '    <tbody>';
    $i;
    foreach ($rows as $row) 
    {
        $i++;
        echo '        <tr>';
        echo '            <td>' . $row["kod"] . '</td>';
        echo '            <td>' . $row["ФИО"] . '</td>';
        echo '            <td>' . $row["Вид_деятельности"] . '</td>';
        echo '            <td>' . $row["Дата_начала_аренды"] . '</td>';    
        echo '            <td>' . $row["Срок_аренды"] . '</td>';
        echo '            <td><input class="uk-checkbox" type="checkbox" name="' . $row["id"] . '"></td>';
        echo '        </tr>';
    }
    echo '    </tbody>';
    echo '</table>';
    echo '<input class="uk-button uk-button-danger uk-align-right" style="width: 80px; margin-top: 10px; padding: 0 10px;" type="submit" value="Удалить" onsubmit="return confirm("Are you sure you want to submit?");>';
    echo '</form>';
} else 
{?>
<form name="add" method="POST" action="form.php">
    
    <table class="uk-table" style="width: 600px; margin: 0 auto;">
    <caption></caption>
        <thead>
            <tr>
                <th style="width: 250px;"></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label class="uk-form-label" for="form-horizontal-text">Код места</label></td>
                <td><input class="uk-input uk-form-width-medium" style="width: 350px; background-color: #e9e9e9;" name="kod" type="text" placeholder="<?php echo $kod;?>" value="<?php echo $kod;?>" readonly></td>
            </tr>
            <tr>
                <td><label class="uk-form-label" for="form-horizontal-text">ФИО</label></td>
                <td><input class="uk-input uk-form-width-medium" style="width: 350px;" name="fio" type="text" placeholder='"Иванов Иван Иванович"' required></td>
            </tr>
            <tr>
                <td><label class="uk-form-label" for="form-horizontal-text">Вид деятельности</label></td>
                <td><input class="uk-input uk-form-width-medium" style="width: 350px;" name="vid" type="text" placeholder='"Магазин брендовой одежды"' required></td>
            </tr>
            <tr>
                <td><label class="uk-form-label" for="form-horizontal-text">Дата начала аренды</label></td>
                <td><input class="uk-input uk-form-width-medium" style="width: 350px; background-color: #e9e9e9;" name="rent" type="text" placeholder="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" readonly></td>
            </tr>
            <tr>
                <td><label class="uk-form-label" for="form-horizontal-text">Срок аренды (дни)</label></td>
                <td><input class="uk-input uk-form-width-medium" style="width: 350px;" name="days" type="text" placeholder='"180"' required pattern='^[ 0-9]+$' oninvalid="setCustomValidity('Пожалуйста, введите срок аренды цифрами')"></td>
            </tr>
        </tbody>
    </table>
    <input class="uk-button uk-button-primary uk-align-center" style="width: 400px; margin-top: 10px;" type="submit" name="send" value="Арендовать">
    
    
</form>
<?php

}
?>