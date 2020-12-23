<?php 
    require('db_connect.php'); 

    $kod = mysqli_real_escape_string($link, $_POST['kod']);
    $fio = mysqli_real_escape_string($link, $_POST['fio']);
    $vid = mysqli_real_escape_string($link, $_POST['vid']);
    $rent = mysqli_real_escape_string($link, $_POST['rent']);
    $days = $_POST['days'];

    if (isset($_POST)) 
    {
        print("Код арендуемого места: " . $kod);
        print("<br>ФИО: " . $fio);
        print("<br>Вид деятельности: " . $vid);
        print("<br>Дата начала аренды: " . $rent);
        print("<br>Срок аренды (дни): " . $days);
    }
    
    $sql = "INSERT INTO `rent` (`kod`, `Вид деятельности`, `ФИО`, `Дата начала аренды`, `Срок аренды`) VALUES ('" . $kod . "', '" . $vid . "', '" . $fio . "', '" . $rent . "', '" . $days . "')";
    $result = mysqli_query($link, $sql);
    if ($result == false) 
    {
        print("Произошла ошибка при выполнении запроса");
    }
    
?>

<script language="JavaScript">
window.location.href = "https://valtion.ru/"
</script>