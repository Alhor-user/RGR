<?php

$link = mysqli_connect("localhost", "h153523_rgr", "123qwe!@#QWE", "h153523_rgr");

if ($link == false)
{
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

?>