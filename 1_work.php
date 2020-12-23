<!DOCTYPE html>
<html>
    <?php require('0_head.php'); ?>
    <body>
        
        <?php require('db_connect.php'); ?>

        <!-- Шапка -->
        <?php require('0_header.php'); ?>
        <!-- /Шапка -->

        <!-- Тело -->
        <div class="uk-container uk-box-shadow-large" style="width: 80vw; height: 100%;">
            <div class="uk-container uk-margin-small-top">
                <div class="uk-flex uk-flex-1">
                    <div style="width: 150px;"><a class="uk-button uk-button-default" href="./index.php" style="height: 40px; width: 100px; margin: 15px 0;">Назад</a></div>
                    <div><h1 class="uk-heading-xsmall uk-heading-divider uk-text-center" style="margin: 0 0 10px 0; width: 900px;">Информация о месте <?php echo $kod = $_GET['kod']; ?></h1></div>
                    <div style="width: 150px;"></div>
                </div>
                <?php require("kod_info.php"); ?>
            </div>
        </div>
        <!-- /Тело -->
    </body>
</html>