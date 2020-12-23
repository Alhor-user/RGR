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
            <div class="uk-container uk-margin-small-top">
                <h1 class="uk-heading-xsmall uk-heading-divider uk-text-center" style="margin: 0 0 10px 0;">Выбор арендуемой площади</h1>
                <h4 class="uk-text-center" style="margin: 10px 0 30px 0;">Обратите внимание, что красные площади - занятые, а синие - свободные</h4>
                <div class="uk-flex uk-flex-column">
                    <?php require('check_db.php'); ?>
                </div>
            </div>
        </div>
        <!-- /Тело -->
    </body>
</html>