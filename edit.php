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
                    <div style="width: 150px;"><a class="uk-button uk-button-default" onclick="history.go(-1)" style="height: 40px; width: 100px; margin: 15px 0;">Назад</a></div>
                    <div><h1 class="uk-heading-xsmall uk-heading-divider uk-text-center" style="margin: 0 0 10px 0; width: 900px;">
                        
                        <?php 
                            $t = $_GET['t'];
                            $id = $_GET['id'];
                            $mod = $_GET['mod'];
                            $rowmessage = '';
                            
                            $sql = 'SHOW COLUMNS FROM `' . $t . '`';
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
                            
                            if ($mod=='add'){
                                $sql = 'SELECT MAX(id) FROM ' . $t;
                                $maxid_q = mysqli_query($link, $sql);
                                $maxid_row = mysqli_fetch_array($maxid_q);
                                $maxid = $maxid_row['MAX(id)'] + 1;
                                $sql = 'SELECT * FROM ' . $t . ' WHERE id = 1';
                            } elseif ($mod=='edit') {
                                $sql = 'SELECT * FROM ' . $t . ' WHERE id = '. $id;
                            }
                                
                            if ($mod=='edit') echo 'Редактировать запись c ID: ' . $id; elseif ($mod=='add')  echo 'Создать запись c ID: ' . $maxid ; 
                        ?>
                    
                    </h1></div>
                    <div style="width: 150px;"></div>
                </div>
                
                
                
                <form name="add" method="POST" action="form_edit.php">  <!-- 0_test_post.php -->
                    <table class="uk-table" style="width: 600px; margin: 0 auto;">
                    <caption></caption>
                        <thead>
                            <tr>
                                <th style="width: 250px;"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                


                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    $j = 0;
                                    $nowid = ($mod == 'add') ? $maxid : $row[$field[$j]];
                                    echo '<tr><td><label class="uk-form-label" for="form-horizontal-text">' . $field[$j] . '</label></td>';
                                    echo '<td><input class="uk-input uk-form-width-medium" style="width: 350px; background-color: #e9e9e9;" name="' . $field[$j] . '" type="text" placeholder="' . $nowid . '" value="' . $nowid . '" readonly></td></tr>';
                                    while ($j<$i){
                                        $j++;
                                        $rowmessage = ($mod == 'add') ? '' : $row[$field[$j]];
                                        echo '<tr><td><label class="uk-form-label" for="form-horizontal-text">' . $field[$j] . '</label></td>';
                                        echo '<td><input class="uk-input uk-form-width-medium" style="width: 350px;" name="' . $field[$j] . '" type="text" placeholder="' . $rowmessage . '" value="' . mysqli_real_escape_string($link, $rowmessage) . '"></td></tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <input type="hidden" name="table" value="<?php echo $t; ?>">
                    <input type="hidden" name="mod" value="<?php echo $mod; ?>">
                    <input class="uk-button uk-button-primary uk-align-center" style="width: 400px; margin-top: 10px;" type="submit" value="Сохранить">
                </form>
                
            </div>
        </div>
        
        
        <!-- /Тело -->
    </body>
</html>

