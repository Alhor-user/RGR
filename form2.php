<?php
    foreach($_POST as $key => $val) {
        echo '[ '.$key.' ] => '.$val."<br />";
        require('db_connect.php'); 
        $sql = "DELETE FROM `rent` WHERE `id`=" . $key;
        $result = mysqli_query($link, $sql);
        if ($result == false) 
        {
            print("Произошла ошибка при выполнении запроса");
        } else print("Удаление " . $key . " успешно");
    }
?>

<script language="JavaScript">
window.location.href = "https://valtion.ru/"
</script>