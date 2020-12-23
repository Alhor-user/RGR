<div class="uk-flex uk-flex-center" style="height: 100px;">
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "A1"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 80px; border: 1px solid black;" href="./1_work.php?kod=A1">A1</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "A2"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=A2">A2</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "A3"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=A3">A3</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "A4"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=A4">A4</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "A5"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 80px; border: 1px solid black;" href="./1_work.php?kod=A5">A5</a>
</div>
<div class="uk-flex uk-flex-center uk-flex-middle" style="height: 80px;">
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "C1"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=C1">C1</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "C2"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 70px; margin: 0 5px; border: 1px solid black;" href="./1_work.php?kod=C2">C2</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "C3"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=C3">C3</a>
</div>
<div class="uk-flex uk-flex-center uk-flex-bottom" style="height: 100px;">
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "B1"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 80px; border: 1px solid black;" href="./1_work.php?kod=B1">B1</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "B2"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=B2">B2</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "B3"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=B3">B3</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "B4"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 60px; border: 1px solid black;" href="./1_work.php?kod=B4">B4</a>
    <a class="uk-button uk-button-default 
    <?php 
        $sql = 'SELECT * FROM rent WHERE kod = "B5"';
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result)>0 ? 'uk-button-danger' : 'uk-button-primary';
        echo $matchFound;
    ?>
    " style="width: 100px; height: 80px; border: 1px solid black;" href="./1_work.php?kod=B5">B5</a>
</div>
