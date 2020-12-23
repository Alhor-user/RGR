<!DOCTYPE html>
<html>
    <?php require('0_head.php'); ?>
    <body>
        
        <?php require('db_connect.php'); ?>

        <!-- Шапка -->
        <?php require('0_header.php'); ?>
        <!-- /Шапка -->

        <!-- Тело -->
        <div class="uk-container uk-box-shadow-large" style="width: 80vw; height: 82vh;">
            <h1 class="uk-heading-divider uk-text-center uk-margin-medium-top">Список таблиц</h1>
            <button class="uk-button uk-button-text uk-align-center" onclick="window.location.href = './2_1_clients.php';"><h3 class="uk-margin-large-top">Клиентская база</h3></button>
            <button class="uk-button uk-button-text uk-align-center" onclick="window.location.href = './2_2_rent.php';"><h3>Список арендованных площадок</h3></button>
            <button class="uk-button uk-button-text uk-align-center" onclick="window.location.href = './2_3_places.php';"><h3>Список всех площадок</h3></button>
        </div>
        <!-- /Тело -->
    </body>
</html>