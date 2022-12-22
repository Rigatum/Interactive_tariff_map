<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link href = "css/style.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/logo.ico" type="image/x-icon">
	<meta name="description" content="">
	<meta name="keywords" content=" ">
</head>
<body>

<?php
        include "database.php";
        if(isset($_GET['color'])) 
        {
            if($_REQUEST['color']){
                $color = $_GET['color'];
                    if($color != 0)
                    {
                        $sql = "UPDATE `map_color` SET `color` = '$color'";
                        $rs = mysqli_query($induction, $sql);
                    }
                }
        }
?>

<?php
        include "database.php";
        if(isset($_GET['town-color'])) 
        {
            if($_REQUEST['town-color']){
                $towncolor = $_GET['town-color'];
                    if($towncolor != 0)
                    {
                        $sql = "UPDATE `town_color` SET `color` = '$towncolor'";
                        $rs = mysqli_query($induction, $sql);
                    }
                }
        }
?>
<?php
            include "database.php";
            $result = mysqli_query ($induction, "SELECT * FROM `map_color`");
            $myrow = mysqli_fetch_array ($result);
            $color=$myrow ['color']; 
            switch ($color){
                case 0:
                echo "<style type='text/css'>
                        path{
                            fill: teal;
                        }
                        </style>";
                        break;
                case 1:
                echo "<style type='text/css'>
                        path{
                            fill: black;
                        }
                    </style>";
                        break;
                case 2:
                echo "<style type='text/css'>
                        path{
                            fill: blue;
                        }
                        </style>";
                        break;
                case 3:
                echo "<style type='text/css'>
                    path{
                        fill: red;
                    }
                    </style>";
                    break;
                case 4:
                    echo "<style type='text/css'>
                            path{
                                fill: green;
                            }
                        </style>";
                        break;
                case 5:
                    echo "<style type='text/css'>
                            path{
                                fill: yellow;
                            }
                            </style>";
                            break;
                case 6:
                    echo "<style type='text/css'>
                        path{
                            fill: orange;
                        }
                        </style>";
                        break;
                case 7:
                    echo "<style type='text/css'>
                            path{
                                fill: purple;
                            }
                        </style>";
                        break;
                case 8:
                    echo "<style type='text/css'>
                            path{
                                fill: brown;
                            }
                            </style>";
                            break;
                case 9:
                    echo "<style type='text/css'>
                        path{
                            fill: white;
                        }
                        </style>";
                        break;   
                case 10:
                    echo "<style type='text/css'>
                            path{
                                fill: gray;
                            }
                        </style>";
                        break;
                case 11:
                    echo "<style type='text/css'>
                            path{
                                fill: maroon;
                            }
                            </style>";
                            break;
                case 12:
                    echo "<style type='text/css'>
                        path{
                            fill: teal;
                        }
                        </style>";
                        break;
                case 13:
                    echo "<style type='text/css'>
                            path{
                                fill: lime;
                            }
                        </style>";
                        break;
                case 14:
                    echo "<style type='text/css'>
                            path{
                                fill: olive;
                            }
                            </style>";
                            break;
                case 15:
                    echo "<style type='text/css'>
                        path{
                            fill: silver;
                        }
                        </style>";
                        break;
                case 16:
                    echo "<style type='text/css'>
                            path{
                                fill: aqua;
                            }
                        </style>";
                        break;                                           
            }
        ?>

<?php
            include "database.php";
            $result = mysqli_query ($induction, "SELECT * FROM `town_color`");
            $myrow = mysqli_fetch_array ($result);
            $color=$myrow ['color']; 
            switch ($color){
                case 0:
                echo "<style type='text/css'>
                circle{
                        fill: teal;
                        stroke: teal;
                    }
                    circle:hover{
                        fill: teal;
                        stroke: teal;
                    }
                    </style>";
                        break;
                case 1:
                    echo "<style type='text/css'>
                    circle{
                        fill: black;
                        stroke: black;
                    }
                    circle:hover{
                        fill: black;
                        stroke: black;
                    }
                    </style>";
                        break;
                case 2:
                    echo "<style type='text/css'>
                    circle{
                        fill: blue;
                        stroke: blue;
                    }
                    circle:hover{
                        fill: blue;
                        stroke: blue;
                    }
                    </style>";
                        break;
                case 3:
                    echo "<style type='text/css'>
                    circle{
                        fill: red;
                        stroke: red;
                    }
                    circle:hover{
                        fill: red;
                        stroke: red;
                    }
                    </style>";
                        break;
                case 4:
                    echo "<style type='text/css'>
                    circle{
                        fill: green;
                        stroke: green;
                    }
                    circle:hover{
                        fill: green;
                        stroke: green;
                    }
                    </style>";
                        break;
                case 5:
                    echo "<style type='text/css'>
                    circle{
                        fill: yellow;
                        stroke: yellow;
                    }
                    circle:hover{
                        fill: yellow;
                        stroke: yellow;
                    }
                    </style>";
                        break;
                case 6:
                    echo "<style type='text/css'>
                    circle{
                        fill: orange;
                        stroke: orange;
                    }
                    circle:hover{
                        fill: orange;
                        stroke: orange;
                    }
                    </style>";
                        break;
                case 7:
                    echo "<style type='text/css'>
                    circle{
                        fill: purple;
                        stroke: purple;
                    }
                    circle:hover{
                        fill: purple;
                        stroke: purple;
                    }
                    </style>";
                        break;
                case 8:
                    echo "<style type='text/css'>
                    circle{
                        fill: brown;
                        stroke: brown;
                    }
                    circle:hover{
                        fill: brown;
                        stroke: brown;
                    }
                    </style>";
                        break;
                case 9:
                    echo "<style type='text/css'>
                    circle{
                        fill: white;
                        stroke: white;
                    }
                    circle:hover{
                        fill: white;
                        stroke: white;
                    }
                    </style>";
                        break;  
                case 10:
                    echo "<style type='text/css'>
                    circle{
                        fill: gray;
                        stroke: gray;
                    }
                    circle:hover{
                        fill: gray;
                        stroke: gray;
                    }
                    </style>";
                        break;
                case 11:
                    echo "<style type='text/css'>
                    circle{
                        fill: maroon;
                        stroke: maroon;
                    }
                    circle:hover{
                        fill: maroon;
                        stroke: maroon;
                    }
                    </style>";
                        break;
                case 12:
                    echo "<style type='text/css'>
                    circle{
                        fill: teal;
                        stroke: teal;
                    }
                    circle:hover{
                        fill: teal;
                        stroke: teal;
                    }
                    </style>";
                        break;
                case 13:
                    echo "<style type='text/css'>
                    circle{
                        fill: lime;
                        stroke: lime;
                    }
                    circle:hover{
                        fill: lime;
                        stroke: lime;
                    }
                    </style>";
                        break;
                case 14:
                    echo "<style type='text/css'>
                    circle{
                        fill: olive;
                        stroke: olive;
                    }
                    circle:hover{
                        fill: olive;
                        stroke: olive;
                    }
                    </style>";
                        break;
                case 15:
                    echo "<style type='text/css'>
                    circle{
                        fill: silver;
                        stroke: silver;
                    }
                    circle:hover{
                        fill: silver;
                        stroke: silver;
                    }
                    </style>";
                        break;
                case 16:
                    echo "<style type='text/css'>
                    circle{
                        fill: aqua;
                        stroke: aqua;
                    }
                    circle:hover{
                        fill: aqua;
                        stroke: aqua;
                    }
                    </style>";
                        break;                                          
            }
        ?>



<?php
    include "database.php";
    $sql = "SELECT title FROM tariff_title";

    $result = mysqli_query($induction, $sql);

    while ($tariff_title = mysqli_fetch_assoc($result))
    {
        $title = $tariff_title['title'];
    }
?>
    <img src="images/goskom.jpg" class="goskom" alt="">
    <h1 class="ttad"><?php echo $title;?></h1>
    <h1 class="title-red">Вы находитесь в панели администратора</h1>
    <a href="/logout.php" class = "btnoth btnothad" onclick="sessionStorage.clear();">Выйти</a>
    <?php if (!empty($_SESSION['login'])) :?>

<div class="menu">
    <div class="color-and-title">
    <p class="title-color">Изменение цветовой составляющей карты</p>
    <div class="color-block">
        <form id="color-select" method="get" action="" enctype="utf-8">
        <select name="color" id="color">
            <option value="0" selected>Выберите цвет карты</option>
            <option value="1">Чёрный</option>
            <option value="2">Синий</option>
            <option value="3">Красный</option>
            <option value="4">Зелёный</option>
            <option value="5">Жёлтый</option>
            <option value="6">Оранжевый</option>
            <option value="7">Фиолетовый</option>
            <option value="8">Коричневый</option>
            <option value="9">Белый</option>
            <option value="10">Серый</option>
            <option value="11">Бордовый</option>
            <option value="12">Тиловый</option>
            <option value="13">Лаймовый</option>
            <option value="14">Оливковый</option>
            <option value="15">Серебристый</option>
            <option value="16">Аква</option>
        </select>
        </form>
        <script>
                document.getElementById("color").onchange = function() 
                {
                    sessionStorage.clear();
                    sessionStorage.setItem('color', document.getElementById("color").value);
                    document.getElementById('color-select').submit();
                }
                if (sessionStorage.getItem('color')) 
                {
                    document.getElementById("color").options[sessionStorage.getItem('color')].selected = true;
                }         
        </script>



        <form id="town-color-select" method="get" action="" enctype="utf-8">
        <select name="town-color" id="town-color">
            <option value="0" selected>Выберите цвет города</option>
            <option value="1">Чёрный</option>
            <option value="2">Синий</option>
            <option value="3">Красный</option>
            <option value="4">Зелёный</option>
            <option value="5">Жёлтый</option>
            <option value="6">Оранжевый</option>
            <option value="7">Фиолетовый</option>
            <option value="8">Коричневый</option>
            <option value="9">Белый</option>
            <option value="10">Серый</option>
            <option value="11">Бордовый</option>
            <option value="12">Тиловый</option>
            <option value="13">Лаймовый</option>
            <option value="14">Оливковый</option>
            <option value="15">Серебристый</option>
            <option value="16">Аква</option>
        </select>
        </form>
        <script>
                document.getElementById("town-color").onchange = function() 
                {
                    sessionStorage.clear();
                    sessionStorage.setItem('town-color', document.getElementById("town-color").value);
                    document.getElementById('town-color-select').submit();
                }
                if (sessionStorage.getItem('town-color')) 
                {
                    document.getElementById("town-color").options[sessionStorage.getItem('town-color')].selected = true;
                }         
        </script>
    </div>
</div>
    <div class="title_change_block">
        <label for="title-change">Изменить заголовок</label>
        <form method="post">
            <input type="text" name="title-change" class="title-change-inp" value="<?php
                include "database.php";
                $sql = "SELECT title FROM tariff_title";

                $result = mysqli_query($induction, $sql);

                while ($tariff_title = mysqli_fetch_assoc($result))
                {
                    echo $tariff_title['title'];
                }
            ?>" required>
            <button type="submit" name = "submit111" id="submit111" class="btn fifth titlebtn">Сохранить</button>
            <?php
            include "database.php";
            if(isset($_POST['title-change'])) 
            {
                $title=trim($_POST['title-change']);
                $sql = "UPDATE `tariff_title` SET `title` = '$title'";
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
        </form> 
    </div>

    <div class="add_tariff">
        <label for="add_tariff">Добавить новый тариф или услугу</label>
        <form method="post" name = "form1">
            <input type="text" name="add-tariff" class="add-tariff-inp" placeholder="Введите новый тариф или услугу" required>
            <button type="submit" name = "form1" id="subform1" class="btn fifth addtarbtn">Добавить</button>
            <?php
            include "database.php";

            if(isset($_POST['add-tariff'])) 
            {
                $tariff=trim($_POST['add-tariff']);
                    $sql2 = mysqli_query($induction, "SELECT MAX(ID) FROM `tariff`");
                    $id = mysqli_fetch_array($sql2);
                    $sql = "
                    INSERT INTO `tariff` (`id`, `tariff_name`) VALUES ($id[0] + 1, '$tariff');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (1, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (2, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (3, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (4, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (5, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (6, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (7, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (8, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (9, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (10, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (11, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (12, $id[0] + 1, '');
                    INSERT INTO `svyaz` (`id_locality`, `id_tariff`, `tariff_description`) VALUES (13, $id[0] + 1, '');";
                    $rs = mysqli_multi_query($induction, $sql);
                    echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
        </form> 
    </div>

    <div class="delete_tariff">
        <form name="form2" method="post" action="" enctype="utf-8">
            <div class="del_select_block">
                <label for="tariff-select2">Выберите тариф или<br>услугу для удаления:</label>
                        <?php
                            include "database.php";
                            $result = mysqli_query ($induction, "SELECT * FROM `tariff`");
                            $myrow = mysqli_fetch_array ($result);
                            echo '<select name="del-id_tariff[] test2" id="test2" onChange="">';
                            echo "<option selected>Выберите тариф или услугу</option>";
                            do
                            {
                                $tariff=$myrow ["tariff_name"];
                                $id = $myrow ["id"];
                                printf ("<option value = '%s'>%s</option>", $id, $tariff);
                            }
                            while($myrow = mysqli_fetch_array($result));
                            $id++;
                            echo "</select>";
                        ?>
            </div>
            <button type="submit" name="form2" id="subform3" class="btn fifth deltarbtn deltarbtn2">Удалить</button>
            <?php
                include "database.php";
            
                if($_REQUEST['del-id_tariff']) {
                    foreach($_POST['del-id_tariff'] as $id_tariff){
                        $sql = 
                        "DELETE FROM `svyaz` WHERE id_locality = 1 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 2 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 3 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 4 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 5 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 6 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 7 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 8 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 9 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 10 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 11 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 12 AND id_tariff = $id_tariff;
                        DELETE FROM `svyaz` WHERE id_locality = 13 AND id_tariff = $id_tariff;
                        DELETE FROM `tariff` WHERE id = $id_tariff;";
                        echo "<meta http-equiv='refresh' content='0'>";
                    }}
                $result = mysqli_multi_query($induction, $sql);
            ?>
        </form> 
    </div>

        <div class="select_blockad">
        <label for="tariff-select">Выберите тариф <br> или услугу:</label>
            <form id="tariff-select" method="get" action="" enctype="utf-8">
            <?php
                    include "database.php";
                    $result = mysqli_query ($induction, "SELECT * FROM `tariff`");
                    $myrow = mysqli_fetch_array ($result);
                    echo '<select name="id_tariff[] test" id="test" onChange="">';
                    echo "<option value='0'>Выберите тариф или услугу</option>";
                    do
                    {
                    $tariff=$myrow ["tariff_name"];
                    $id = $myrow ["id"];
                    printf ("<option value = '%s'>%s</option>", $id, $tariff);
                    }
                    while($myrow = mysqli_fetch_array($result));
                    echo "</select>";
                ?>
            </form>
            </form>
    </div>
    <script>
        document.getElementById("test").onchange = function() 
        {
            sessionStorage.setItem('test', document.getElementById("test").value);
            document.getElementById('tariff-select').submit();
        }
        if (sessionStorage.getItem("test")) 
        {
            const select = document.querySelector('#test').getElementsByTagName('option');
            for (let i = 0; i < select.length; i++) {
                    if (select[i].value === sessionStorage.getItem('test')) select[i].selected = true;
            }
        }         
    </script>
</div>
    <div class = "mapad">
    <img src="images/logo.jpg" class="logo2ad" alt="">
        <svg viewBox = "0 0 429 724">
            <g>
                <title> Таштыпский район
                </title>
                    <path class="js-open-modal" data-modal="11" d = "m 49.137233,717.24722 c -3.731716,-0.5976 -6.933367,-1.53185 -7.11478,-2.07608 -0.181414,-0.54425 -0.825733,-0.98954 -1.43182,-0.98954 -1.510483,0 -9.00101,-4.24979 -9.00101,-5.10677 0,-0.38056 -3.169635,-0.94354 -7.043632,-1.25107 -8.703071,-0.6909 -13.446934,-2.52298 -13.446934,-5.19323 0,-1.04512 -0.576298,-2.37851 -1.2806608,-2.96308 -1.3877038,-1.15169 -1.7535524,-5.58338 -0.5236731,-6.34348 0.416343,-0.25731 1.0100489,-1.81678 1.3193479,-3.46548 0.309298,-1.6487 0.835605,-2.99764 1.169571,-2.99764 0.595749,0 0.932319,-0.9724 4.063289,-11.73939 0.853434,-2.93484 1.863186,-5.33608 2.243893,-5.33608 0.380708,0 0.693972,-0.67235 0.696145,-1.49411 0.0021,-0.82175 1.154768,-2.7219 2.561321,-4.22256 1.849183,-1.9729 2.55737,-3.56878 2.55737,-5.76298 0,-1.66897 -0.288148,-3.0356 -0.64033,-3.03696 -0.352181,-0.002 -1.398306,-1.13379 -2.324721,-2.51653 -0.926416,-1.38273 -2.542943,-2.72954 -3.592283,-2.99292 -3.325502,-0.83464 -9.6675458,-8.2627 -9.6611722,-11.31555 0.0039,-1.86745 3.0825392,-7.0782 4.1819792,-7.0782 0.437346,0 1.332294,-1.63285 1.988773,-3.62854 0.685475,-2.08385 1.963472,-3.97682 3.002061,-4.44665 3.022601,-1.36737 5.338146,-6.52549 5.338146,-11.89129 0,-2.63613 0.348441,-4.79296 0.774311,-4.79296 0.833235,0 3.091191,-6.9973 3.89913,-12.08322 0.640689,-4.0331 3.580324,-6.22816 5.985502,-4.46946 0.904797,0.66161 3.640933,1.18476 6.196389,1.18476 4.42287,0 4.617956,-0.10008 5.824691,-2.98821 0.686704,-1.64351 1.531546,-2.98998 1.877425,-2.99216 0.34588,-0.003 1.85668,-1.15476 3.357334,-2.56132 1.500653,-1.40655 3.119978,-2.55737 3.598499,-2.55737 1.217503,0 2.637663,-2.90248 2.637663,-5.39079 0,-1.94719 0.35389,-2.11354 5.249627,-2.46767 4.072877,-0.2946 5.586756,-0.79605 6.753599,-2.23704 0.827184,-1.02154 1.909117,-1.85733 2.404296,-1.85733 0.495178,0 1.264848,-0.68112 1.710378,-1.51359 1.115493,-2.08433 12.448288,-7.87792 15.409912,-7.87792 3.68053,0 4.706287,-3.36461 4.016677,-13.17513 l -0.559524,-7.95988 2.357751,-1.51972 c 1.296762,-0.83585 2.676913,-2.05684 3.067002,-2.71332 0.390081,-0.65648 1.618627,-1.53934 2.730112,-1.96192 1.111473,-0.42259 2.704083,-1.84204 3.539123,-3.15433 0.83504,-1.31228 2.00773,-2.69322 2.60597,-3.06874 0.59825,-0.37551 1.08772,-1.10155 1.08772,-1.61342 0,-1.25684 2.65236,-3.19268 4.42034,-3.2262 0.78768,-0.0149 2.25346,-1.0713 3.25731,-2.34748 1.00384,-1.27617 2.90252,-2.77332 4.21928,-3.32697 1.77522,-0.74642 2.54332,-1.80191 2.97124,-4.08298 0.31742,-1.69198 0.94392,-3.07632 1.39221,-3.07632 0.4483,0 0.81509,-0.93434 0.81509,-2.0763 0,-1.33252 0.91752,-2.72963 2.56132,-3.90012 1.40873,-1.0031 2.56132,-2.56606 2.56132,-3.47323 0,-0.90717 0.49971,-1.64941 1.11045,-1.64941 0.61074,0 2.14454,-0.48025 3.40843,-1.06722 2.01574,-0.93613 2.2988,-1.5601 2.30465,-5.08021 0.004,-2.62805 -0.42164,-4.25269 -1.23438,-4.70752 -1.26087,-0.70562 -5.58915,-8.2025 -5.58915,-9.68079 0,-0.44473 0.87501,-0.8086 1.94446,-0.8086 2.65601,0 5.7395,-2.30568 5.7395,-4.29172 0,-0.89847 1.1526,-2.48573 2.56132,-3.52724 1.5667,-1.15831 2.56133,-2.66342 2.56133,-3.8759 0,-1.09023 0.76839,-2.64015 1.70754,-3.44428 1.42884,-1.22341 1.70755,-2.51858 1.70755,-7.93501 0,-6.20114 -0.11823,-6.58755 -2.81541,-9.20176 -2.71493,-2.63142 -7.42987,-3.8213 -7.42987,-1.87503 0,0.46957 -0.3842,0.85377 -0.85378,0.85377 -0.46957,0 -0.85377,-0.92631 -0.85377,-2.05846 0,-1.13216 -0.79633,-4.13941 -1.76963,-6.68278 -2.28831,-5.97972 -5.24944,-7.89817 -11.11805,-7.20312 -4.25816,0.50432 -6.74911,-0.68404 -6.74911,-3.21981 0,-0.61212 -0.22784,-2.25216 -0.50632,-3.64452 -0.44491,-2.22455 -0.1895,-2.66279 2.10605,-3.61363 1.43679,-0.59514 2.82703,-1.75848 3.08943,-2.5852 0.26239,-0.82672 1.23566,-2.18964 2.16282,-3.02871 1.01438,-0.918 1.68575,-2.62174 1.68575,-4.27789 0,-2.25317 0.4645,-2.94471 2.56132,-3.81324 1.40873,-0.58351 2.56132,-1.39852 2.56132,-1.81113 0,-1.20691 2.57058,-0.8629 3.96396,0.53047 1.55169,1.55169 6.78446,1.69612 7.73301,0.21344 0.37551,-0.58696 2.16802,-1.75457 3.98334,-2.59468 2.97803,-1.3782 3.49319,-1.40128 5.27133,-0.23619 1.08391,0.7102 2.21788,2.06991 2.51991,3.02157 0.47295,1.49011 1.28191,1.73204 5.82774,1.74288 7.39707,0.0176 9.48056,1.24299 9.8099,5.76945 0.16453,2.26129 -0.23376,4.31616 -1.06721,5.50609 -0.73134,1.04413 -1.32971,3.15763 -1.32971,4.69666 0,2.66838 0.14979,2.79823 3.22791,2.79823 2.75984,0 3.36023,0.35055 4.14038,2.41739 0.79106,2.09576 1.63887,2.57155 6.37198,3.57599 3.00274,0.63722 6.20659,1.85458 7.11967,2.70525 0.91309,0.85066 2.13616,1.54666 2.71794,1.54666 0.58178,0 1.95009,1.11049 3.04066,2.46775 1.82177,2.26726 2.58335,2.51573 9.37364,3.05821 7.01053,0.56007 7.41995,0.49852 7.95791,-1.19646 0.31193,-0.9828 1.67343,-2.35899 3.02556,-3.05821 3.294,-1.70339 12.2259,-1.69726 13.64227,0.009 0.61037,0.73544 2.47226,1.28066 4.37341,1.28066 1.82081,0 3.31056,0.3842 3.31056,0.85377 0,0.46958 1.75633,0.85378 3.90296,0.85378 3.54815,0 3.781,0.12196 2.56132,1.34164 -0.73791,0.7379 -1.34164,2.31505 -1.34164,3.50477 0,2.00875 0.24373,2.13988 3.41509,1.83745 3.85912,-0.36803 3.95358,-0.18704 2.01927,3.86925 -1.94152,4.07139 -1.02882,6.95573 2.77169,8.75919 2.64923,1.25715 3.78754,1.32256 8.31724,0.47798 2.88636,-0.53818 6.68868,-1.21984 8.44958,-1.51479 1.76091,-0.29496 3.20165,-0.8161 3.20165,-1.15809 0,-0.71775 7.95651,-2.11393 19.69187,-3.45547 8.2712,-0.94554 12.31707,-0.37841 13.7414,1.92619 0.32874,0.53193 0.38428,2.76929 0.12342,4.97191 -0.44833,3.78539 1.08446,22.74908 2.04002,25.23924 0.48722,1.26966 6.2382,1.64217 6.2382,0.40407 0,-0.4148 0.67235,-0.96742 1.4941,-1.22802 0.82176,-0.26061 2.50901,-1.13753 3.74943,-1.94871 2.18371,-1.42806 2.33808,-1.4094 4.86196,0.58769 1.43365,1.13442 2.62789,2.6759 2.65388,3.42551 0.0784,2.26202 -2.48652,6.62411 -4.21816,7.17371 -0.89302,0.28343 -1.87099,1.36013 -2.17326,2.39265 -1.35416,4.62562 -3.97676,8.86673 -6.34982,10.26853 -1.41869,0.83804 -2.57945,2.0783 -2.57945,2.75611 0,0.67782 -0.34521,1.23239 -0.76712,1.23239 -0.42192,0 -1.01993,2.78544 -1.32892,6.18986 -0.55026,6.06279 -3.61701,16.86203 -4.78846,16.86203 -0.32576,0 -1.03352,1.05654 -1.57278,2.34788 -0.53927,1.29133 -2.21872,3.1543 -3.73212,4.13993 -2.04619,1.33262 -3.18073,3.0837 -4.42532,6.83019 -0.92053,2.77097 -2.14036,5.32924 -2.71073,5.68504 -0.57037,0.35581 -1.48771,2.01249 -2.03854,3.68149 -1.2841,3.89085 -3.65877,4.78237 -10.93673,4.10595 -5.40376,-0.50222 -5.77913,-0.41984 -6.80547,1.49348 -1.07116,1.99686 -4.57589,4.15944 -6.74091,4.15944 -0.61074,0 -1.11045,0.33457 -1.11045,0.74349 0,0.40892 -2.4005,1.01508 -5.33444,1.34702 -3.53043,0.39942 -5.84029,1.14647 -6.83019,2.20901 -1.8997,2.03908 -2.03761,8.94095 -0.21508,10.76348 1.84236,1.84237 1.57609,5.20436 -0.54887,6.93002 -1.00624,0.81716 -2.44698,2.20097 -3.20165,3.07513 -0.75467,0.87416 -1.85088,2.09387 -2.43603,2.71046 -0.58514,0.6166 -1.44188,2.11524 -1.90385,3.33032 -0.46197,1.21507 -1.80077,2.647 -2.97511,3.18207 -1.17434,0.53506 -2.36328,1.69157 -2.64209,2.57001 -0.7962,2.50862 0.43537,6.55407 2.16212,7.10213 2.0829,0.66108 2.5882,2.16571 3.40571,10.14118 0.37884,3.69593 1.07309,6.96162 1.54279,7.25707 0.46968,0.29545 1.91618,2.45818 3.21443,4.80606 1.29825,2.34788 2.73936,4.51632 3.20245,4.81876 0.49346,0.32228 0.10858,1.33714 -0.92982,2.45173 l -1.77182,1.90182 -2.3028,-1.81139 c -3.58767,-2.82206 -11.91611,-2.57566 -15.82112,0.46809 -3.15831,2.46173 -5.88821,6.98878 -5.88821,9.76456 0,2.06339 -1.33005,4.70059 -3.58692,7.11207 -0.90661,0.96874 -2.24311,3.00998 -2.97,4.5361 -0.72688,1.52612 -1.64405,2.77477 -2.03815,2.77477 -0.39409,0 -1.48819,1.74444 -2.43132,3.87653 -2.42061,5.47219 -7.71212,10.4738 -11.76687,11.12218 -2.73631,0.43756 -3.64354,0.1661 -5.6454,-1.68916 -1.31184,-1.21577 -2.95519,-2.2105 -3.65188,-2.2105 -1.29201,0 -5.50292,-2.39323 -6.39587,-3.63504 -0.93067,-1.29427 -9.34288,-4.04892 -12.36468,-4.04892 -3.64247,0 -8.05929,2.12216 -8.05929,3.87227 0,0.6969 -0.80347,1.93567 -1.7855,2.75284 -0.98202,0.81715 -2.19458,2.44624 -2.69458,3.62018 -0.88587,2.07988 -0.92626,2.04715 -1.58041,-1.28067 -0.36921,-1.8783 -0.69343,-5.43213 -0.7205,-7.8974 -0.0271,-2.46527 -0.39175,-4.48231 -0.81041,-4.48231 -0.41868,0 -1.00229,-0.9605 -1.29693,-2.13444 -0.45679,-1.82001 -1.0259,-2.13443 -3.86339,-2.13443 -1.83023,0 -3.47199,0.43292 -3.64837,0.96206 -0.17638,0.52913 -2.41753,1.15257 -4.98035,1.38542 -4.95233,0.44996 -7.64786,2.0624 -7.64786,4.57486 0,4.77755 -4.05298,7.96418 -11.3023,8.88635 -2.22487,0.28301 -4.6457,1.11504 -5.3796,1.84894 -2.08129,2.08129 -13.61669,5.39426 -18.782234,5.39426 -6.891042,0 -8.07832,1.51472 -8.07832,10.30626 0,4.98713 0.35385,7.24503 1.28066,8.17184 0.743244,0.74324 1.28066,2.82899 1.28066,4.97031 0,4.07704 -0.770174,4.72612 -5.607898,4.72612 -2.43566,0 -3.124072,0.44983 -4.246384,2.77476 -2.712925,5.61996 -3.391257,6.64003 -4.652232,6.99598 -3.616306,1.02083 -19.919307,1.09924 -26.002479,0.12506 z" description-data="Таштыпский район"/>
            </g>
            <g>
                <title> Бейский район
                </title>
                    <path class="js-open-modal" data-modal="8" d = "m 302.80439,479.60731 c -0.93592,-1.55253 -2.31856,-19.63993 -1.81154,-23.69801 0.63871,-5.11203 -0.48977,-8.10505 -3.05591,-8.10505 -0.92263,0 -1.67751,-0.3842 -1.67751,-0.85378 0,-0.46957 -1.92099,-0.85377 -4.26886,-0.85377 -2.34788,0 -4.26887,0.35142 -4.26887,0.78093 0,0.42951 -2.97754,1.01373 -6.61675,1.29829 -8.4292,0.65907 -20.70401,3.03413 -20.70401,4.00604 0,0.40971 -0.57629,0.74493 -1.28066,0.74493 -0.79685,0 -1.28066,-0.80634 -1.28066,-2.13444 0,-1.17394 -0.3842,-2.13443 -0.85377,-2.13443 -0.46958,0 -0.85377,-0.78191 -0.85377,-1.73758 0,-0.95568 -0.58914,-2.63672 -1.30918,-3.73566 -1.09249,-1.66733 -1.15469,-2.82823 -0.37582,-7.01358 0.51336,-2.75855 1.14452,-6.26418 1.40259,-7.7903 0.25807,-1.52612 0.81139,-2.77477 1.22959,-2.77477 0.4182,0 0.76036,-1.12537 0.76036,-2.50083 0,-2.01471 0.75514,-3.01047 3.88479,-5.12264 2.13663,-1.442 4.76647,-2.62181 5.84409,-2.62181 2.41128,0 4.45605,-2.15827 5.25769,-5.54953 0.89727,-3.7958 3.64339,-6.4033 6.74374,-6.4033 2.53267,0 5.59045,-2.34026 5.59045,-4.27863 0,-0.46421 0.3842,-0.84401 0.85377,-0.84401 0.46958,0 0.85377,-1.72889 0.85377,-3.84198 0,-2.11309 0.32253,-3.84198 0.71673,-3.84198 0.39421,0 1.15437,-0.9605 1.68925,-2.13444 0.53488,-1.17394 1.57665,-2.13443 2.31504,-2.13443 0.75545,0 1.90024,-1.40006 2.6179,-3.20165 2.23637,-5.61415 3.16181,-7.04364 4.55999,-7.04364 0.7508,0 2.782,-0.96281 4.51377,-2.13958 2.39944,-1.63046 3.27093,-2.90019 3.66247,-5.33608 1.025,-6.37682 1.18115,-6.66362 4.22795,-7.76536 1.65971,-0.60016 3.01766,-1.50252 3.01766,-2.00525 0,-0.50273 0.86444,-1.7265 1.92099,-2.7195 1.05654,-0.993 2.393,-2.862 2.9699,-4.15333 0.57691,-1.29133 1.44135,-2.34788 1.92099,-2.34788 0.47965,0 0.87208,-0.96049 0.87208,-2.13443 0,-2.9773 2.06839,-2.74098 6.31537,0.72155 2.23078,1.81873 4.78679,3.02497 7.03774,3.32127 1.97359,0.25978 4.34535,1.27592 5.37018,2.30075 2.42568,2.42568 5.36219,3.47483 9.7259,3.47483 3.88976,0 9.13296,-1.25777 9.91059,-2.37742 0.92752,-1.33544 6.47174,-5.11091 8.33582,-5.67648 1.72241,-0.52259 1.89349,-0.24371 2.13444,3.47938 0.24281,3.75183 0.46067,4.09868 2.98246,4.74825 1.62145,0.41765 2.94915,1.42112 3.28646,2.48388 0.67682,2.13248 -0.14582,3.07535 -3.01877,3.45995 -1.73643,0.23246 -2.13443,0.76115 -2.13443,2.8353 0,2.43955 0.20261,2.57863 4.69575,3.22315 2.58267,0.37047 4.82382,1.04811 4.98034,1.50586 0.15653,0.45775 1.30913,0.83816 2.56132,0.84535 3.90917,0.0224 4.48979,0.89588 3.13124,4.71036 -0.66354,1.86308 -1.22331,4.0098 -1.24392,4.77048 -0.0272,1.00172 -1.11728,1.50478 -3.95369,1.82449 -2.15394,0.24278 -4.25882,0.784 -4.67754,1.20272 -0.41872,0.41871 -0.86556,5.6742 -0.99297,11.67885 l -0.23167,10.91755 2.66447,2.29147 c 3.48841,3.00008 3.9916,4.72959 2.44969,8.41988 -0.69969,1.67462 -1.27217,3.76623 -1.27217,4.64803 0,0.88181 -0.3842,1.60328 -0.85378,1.60328 -0.46957,0 -0.85377,0.88707 -0.85377,1.97126 0,1.08419 -0.56408,2.71703 -1.25351,3.62853 -0.68942,0.91151 -1.26572,2.64475 -1.28066,3.85163 -0.0181,1.45991 -1.01495,2.98191 -2.97849,4.54744 -1.62325,1.2942 -3.21182,3.18823 -3.53017,4.20896 -0.31836,1.02073 -0.85963,2.04796 -1.20284,2.28275 -1.61906,1.10761 -4.26848,7.97911 -4.26848,11.0707 0,2.62098 -0.51512,3.90264 -2.13444,5.31061 -1.86492,1.62153 -2.13786,2.56411 -2.16158,7.46488 -0.016,3.3046 -0.49312,6.22284 -1.16135,7.1031 -1.20843,1.59192 -4.78792,2.07063 -4.78792,0.64033 0,-0.47432 -2.27673,-0.85377 -5.12264,-0.85377 -2.81745,0 -5.12264,0.33759 -5.12264,0.75019 0,0.41261 -1.05654,1.13644 -2.34788,1.60853 -6.41088,2.34369 -9.86403,2.95041 -14.77179,2.59542 -4.4652,-0.32298 -5.65667,-0.75874 -7.30072,-2.67006 -1.33063,-1.54695 -2.80451,-2.28408 -4.56696,-2.28408 -1.43125,0 -2.60227,0.3454 -2.60227,0.76757 0,0.78962 -6.27106,4.35507 -7.65987,4.35507 -0.4274,0 -0.9508,-0.28815 -1.1631,-0.64033 z " description-data="Бейский район"/>
            
            </g>
            <g>
                <title> Аскизский район
                </title>
                    <path class="js-open-modal" data-modal="7" d = "m 245.96864,452.14298 c -2.57461,-2.1974 -2.70264,-2.51306 -1.3307,-3.28083 1.08319,-0.60618 1.63198,-2.22433 1.91603,-5.64946 0.38312,-4.62003 0.32047,-4.79995 -1.67136,-4.79995 -1.13817,0 -2.50012,0.43072 -3.02655,0.95714 -0.70703,0.70703 -0.83681,0.0599 -0.49664,-2.47625 l 0.46052,-3.43342 -7.33581,-0.61107 c -4.54959,-0.37898 -7.70825,-1.05983 -8.3164,-1.7926 -1.2698,-1.53002 -13.98402,-1.59479 -16.9932,-0.0866 -1.17394,0.58838 -2.51369,1.92742 -2.97722,2.97562 -0.8322,1.8819 -3.85297,2.70673 -3.85297,1.05206 0,-0.46957 -1.59657,-0.85377 -3.54795,-0.85377 -3.44206,0 -8.59587,-2.82848 -10.34758,-5.67889 -0.36413,-0.59251 -3.77212,-1.7456 -7.57332,-2.56244 -6.22719,-1.33816 -6.99388,-1.72211 -7.74577,-3.879 -0.72197,-2.07105 -1.28372,-2.39382 -4.16607,-2.39382 -3.6277,0 -4.20466,-1.08064 -2.07807,-3.89225 0.77986,-1.03106 1.26377,-3.65527 1.28066,-6.94496 0.0345,-6.71718 -1.37684,-7.94581 -9.12744,-7.94581 -4.0579,0 -5.35955,-0.29412 -5.35955,-1.21103 0,-1.60101 -5.21012,-4.77249 -7.78474,-4.73869 -1.11851,0.0147 -3.91036,0.946 -6.2041,2.06957 -5.1549,2.52511 -7.10072,1.96485 -11.828,-3.40563 -1.84612,-2.0973 -3.85542,-3.81328 -4.46511,-3.81328 -0.60969,0 -1.337,-0.86444 -1.61625,-1.92099 -0.36339,-1.37492 0.033,-2.33212 1.39453,-3.36729 1.53122,-1.16421 1.89061,-2.26347 1.84258,-5.63593 -0.0525,-3.68982 -0.45995,-4.59673 -3.41509,-7.60223 -1.84549,-1.87694 -4.03649,-3.65429 -4.8689,-3.94967 -0.8324,-0.29537 -1.64411,-1.026 -1.80379,-1.62363 -0.15968,-0.59761 -0.95329,-3.77426 -1.76358,-7.05921 -0.81029,-3.28494 -1.91958,-6.26556 -2.46508,-6.62359 -0.5455,-0.35803 -3.1049,-0.40231 -5.68757,-0.0984 -4.55952,0.53655 -7.663195,2.52067 -8.759523,5.59978 -0.805604,2.2626 -1.429976,0.0689 -0.669718,-2.35298 0.432491,-1.37776 1.275096,-4.23391 1.872456,-6.347 0.987909,-3.49461 5.837555,-9.39151 7.723625,-9.39151 0.37782,0 0.68693,-1.53679 0.68693,-3.41509 0,-1.87831 -0.38419,-3.4151 -0.85377,-3.4151 -0.46957,0 -0.85377,-0.76839 -0.85377,-1.70755 0,-0.93915 0.3842,-1.70754 0.85377,-1.70754 1.3522,0 0.99926,-6.80667 -0.42689,-8.23282 -1.98118,-1.98119 -1.52458,-3.53077 1.21789,-4.13311 1.37419,-0.30183 3.05335,-1.3889 3.73145,-2.41572 0.67811,-1.02681 2.19427,-2.82743 3.36925,-4.00137 1.17498,-1.17394 2.40783,-3.38308 2.73968,-4.9092 0.33184,-1.52612 0.90351,-2.77476 1.27036,-2.77476 0.36686,0 0.89293,-1.82495 1.16905,-4.05543 0.27612,-2.23048 1.29013,-5.5774 2.25336,-7.4376 0.96323,-1.86019 1.75132,-4.26143 1.75132,-5.33608 0,-1.38473 0.49742,-1.95391 1.70755,-1.95391 0.93915,0 1.70755,-0.33944 1.70755,-0.75432 0,-0.41487 2.59333,-1.00254 5.76297,-1.30593 8.64052,-0.82707 9.85613,-0.76838 10.8386,0.52328 1.85474,2.43842 8.64638,5.17218 13.92083,5.60338 4.39775,0.35952 5.33609,0.70522 5.33609,1.96591 0,2.03878 -2.27125,4.21296 -4.40103,4.21296 -1.8963,0 -7.5518,5.34732 -7.5518,7.14028 0,2.27231 -3.05526,3.95878 -7.17185,3.95878 -4.13628,0 -6.48853,1.34538 -6.48853,3.71117 0,2.69483 1.0944,3.97279 3.40217,3.97279 1.30114,0 3.75259,0.57948 5.44767,1.28772 2.58819,1.08142 3.23667,1.90213 4.04761,5.12265 1.10905,4.40444 0.56183,4.27742 12.4086,2.88025 8.28307,-0.97688 17.97452,0.0121 19.18057,1.95737 0.28451,0.45887 2.06144,1.04143 3.94875,1.29457 3.37656,0.45289 3.46764,0.39381 5.69298,-3.69328 2.46445,-4.52622 6.94862,-7.14173 12.24416,-7.14173 2.32476,0 3.00461,0.50211 4.41016,3.25723 2.1,4.11634 8.44366,11.25692 10.00059,11.25692 0.64845,0 1.179,0.37688 1.179,0.8375 0,0.46063 1.05655,1.08317 2.34788,1.38341 6.26531,1.45673 13.40144,4.13689 14.83696,5.57242 2.14582,2.14582 8.11504,2.21647 8.7924,0.10407 0.26351,-0.82175 2.2104,-2.2045 4.32641,-3.07278 l 3.8473,-1.57867 v -8.36182 c 0,-9.52188 -0.0956,-9.39828 7.26937,-9.39828 3.78437,0 4.65936,-0.28662 5.09844,-1.67005 0.29153,-0.91853 1.56867,-2.55137 2.83808,-3.62854 1.26942,-1.07717 3.1634,-3.30318 4.20886,-4.9467 1.255,-1.97295 1.90571,-2.48057 1.9152,-1.4941 0.008,0.82176 0.59068,1.4941 1.29505,1.4941 0.71147,0 1.28066,0.75891 1.28066,1.70755 0,1.32809 0.56918,1.70755 2.56132,1.70755 2.37377,0 2.56132,-0.2261 2.56132,-3.08779 0,-2.7855 0.18806,-3.03738 1.92099,-2.57298 1.05654,0.28315 2.74268,0.52006 3.74696,0.52647 1.40756,0.009 1.95449,0.69668 2.38681,3.00111 0.65026,3.46622 -1.08618,6.39982 -4.7474,8.02044 -1.24955,0.5531 -3.29307,1.95202 -4.54117,3.10872 -1.24809,1.1567 -2.63367,2.10308 -3.07904,2.10308 -0.44538,0 -0.80979,0.33939 -0.80979,0.7542 0,0.41481 -0.79335,0.96166 -1.76298,1.21523 -1.46003,0.3818 -1.71679,1.02248 -1.49411,3.72811 0.24743,3.0064 0.49343,3.28867 3.08315,3.53757 2.96435,0.28491 9.58356,-2.43675 12.5012,-5.1402 0.9103,-0.84347 1.94793,-1.53359 2.30585,-1.53359 2.23068,0 9.27255,1.9789 9.27255,2.60576 0,0.41619 2.20155,1.82509 4.89233,3.1309 2.69078,1.30581 5.57746,3.05173 6.41483,3.87982 0.83737,0.8281 3.0541,2.11846 4.92606,2.86747 l 3.40357,1.36184 v 5.81452 c 0,5.8727 -1.85119,11.05838 -3.95184,11.07015 -0.53,0.003 -1.43577,1.14521 -2.01282,2.53832 -0.57704,1.39311 -1.8723,2.79277 -2.87834,3.11034 -2.84133,0.89691 -4.81738,3.72741 -4.81738,6.90041 0,2.21899 -0.77817,3.67689 -3.34814,6.27267 -1.84148,1.85997 -4.09962,3.38177 -5.0181,3.38177 -2.00313,0 -3.1571,1.3222 -3.91201,4.48231 -0.30849,1.29133 -0.93776,2.34788 -1.39839,2.34788 -0.46063,0 -0.83751,0.53211 -0.83751,1.18246 0,0.65036 -0.96049,1.81181 -2.13443,2.581 -1.17394,0.7692 -2.13444,1.96598 -2.13444,2.65952 0,0.69353 -0.57629,1.26098 -1.28066,1.26098 -0.94558,0 -1.28066,0.98929 -1.28066,3.78099 0,2.07956 -0.50174,4.2887 -1.11498,4.9092 -0.61325,0.62052 -1.36959,1.80055 -1.68076,2.62231 -0.38167,1.00794 -1.485,1.4941 -3.39079,1.4941 -3.64094,0 -6.62007,2.10547 -6.62007,4.67866 0,2.85942 -3.95051,7.27417 -6.50924,7.27417 -2.06057,0 -5.50765,1.804 -8.00491,4.18932 -1.30633,1.24778 -2.64649,6.67464 -4.41764,17.88904 -0.85489,5.41286 -0.8026,6.65503 0.37741,8.96462 2.059,4.02999 2.70028,8.15961 1.33346,8.58689 -4.39149,1.3728 -5.5527,1.21348 -8.31044,-1.14019 z" description-data="Аскизский район"/>
            </g>
            <g>
                <title> Усть-абаканский район
                </title>
                    <path class="js-open-modal" data-modal="12" d = "m 321.86944,338.73467 -0.003,-4.9092 -3.83877,-1.57868 c -2.11112,-0.86827 -3.83857,-1.8825 -3.83857,-2.25385 0,-0.37135 -1.68082,-1.46525 -3.73516,-2.43091 -2.05434,-0.96565 -4.27051,-2.2566 -4.92484,-2.86879 -2.51243,-2.35062 -6.46768,-3.95704 -11.18292,-4.54193 -4.05873,-0.50344 -5.56399,-0.2968 -8.75118,1.20136 -2.11712,0.99516 -3.8493,2.10738 -3.8493,2.4716 0,0.8984 -5.18957,2.80354 -6.10152,2.23991 -1.93197,-1.19402 1.17149,-5.4722 3.96962,-5.4722 0.69501,0 1.74717,-0.80034 2.33811,-1.77855 0.59095,-0.9782 2.53056,-2.53064 4.31026,-3.44986 4.19752,-2.16807 5.23545,-4.5608 4.5071,-10.39029 l -0.58133,-4.65285 -3.91339,-0.5364 c -7.53743,-1.03311 -7.93263,-0.90216 -8.04298,2.66526 -0.0545,1.76091 -0.27474,2.52931 -0.48949,1.70755 -0.21474,-0.82176 -0.74647,-1.4941 -1.18162,-1.4941 -0.43515,0 -0.79117,-0.7684 -0.79117,-1.70755 0,-1.3281 -0.56919,-1.70755 -2.56132,-1.70755 -1.40873,0 -2.56132,0.42609 -2.56132,0.94688 0,1.00232 -2.05836,3.52311 -6.61675,8.10327 -1.52612,1.53341 -2.77476,3.19801 -2.77476,3.69912 0,0.51612 -1.75814,0.91616 -4.05543,0.92276 -8.00012,0.023 -7.8974,-0.10068 -7.8974,9.50978 v 8.46849 l -3.84198,1.64687 c -2.17043,0.93036 -3.84199,2.21725 -3.84199,2.95787 0,1.802 -2.27364,1.64553 -4.36213,-0.30019 -0.95117,-0.88616 -4.0087,-2.25073 -6.79448,-3.03238 -2.7858,-0.78166 -5.06508,-1.78552 -5.06508,-2.23079 0,-0.44528 -0.83069,-0.8096 -1.84598,-0.8096 -1.96486,0 -9.25308,-3.91335 -9.25308,-4.96836 0,-0.34513 -1.05654,-1.81023 -2.34788,-3.25577 -1.29133,-1.44555 -2.99392,-3.74031 -3.78352,-5.09948 -1.26364,-2.17512 -1.9862,-2.50132 -6.03075,-2.7225 -5.99048,-0.32762 -12.25218,2.22065 -13.49609,5.49237 -1.11433,2.93092 -3.38865,4.61877 -5.06547,3.75927 -4.84943,-2.4857 -20.23227,-3.1207 -29.70474,-1.22621 -2.49864,0.49973 -2.66883,0.36118 -3.22988,-2.62948 -0.80542,-4.29324 -3.75051,-7.25808 -7.76777,-7.81988 -1.8035,-0.2522 -3.84462,-0.63857 -4.53582,-0.85859 -2.44178,-0.77723 1.03056,-1.9889 5.73904,-2.00264 2.46527,-0.007 4.48231,-0.30515 4.48231,-0.66213 0,-0.35698 0.86445,-1.60562 1.92099,-2.77476 1.05655,-1.16914 2.47171,-3.19262 3.14481,-4.49662 0.68324,-1.32364 2.19175,-2.58436 3.4151,-2.85413 4.49842,-0.99195 5.17948,-1.32285 5.17948,-2.51646 0,-0.67271 0.40739,-1.22312 0.90531,-1.22312 0.52407,0 0.79372,-1.34829 0.64033,-3.20165 l -0.26498,-3.20166 -5.67057,-0.56083 c -5.52916,-0.54686 -9.27047,-1.81685 -9.27047,-3.14688 0,-0.36269 -1.53679,-1.33746 -3.41509,-2.16616 -3.24484,-1.43162 -3.41509,-1.69561 -3.41509,-5.29531 0,-2.82572 -0.46058,-4.16616 -1.81227,-5.27431 -3.80364,-3.11833 -5.05587,-4.84935 -4.45008,-6.15153 0.33535,-0.72085 0.7631,-3.51978 0.95055,-6.21983 0.33506,-4.82629 0.3847,-4.9092 2.93898,-4.9092 1.42898,0 3.7961,-0.72695 5.26025,-1.61545 1.46415,-0.8885 3.81469,-1.87106 5.22341,-2.18348 4.04797,-0.89774 7.25708,-6.20741 7.25708,-12.00728 0,-2.5764 0.35043,-4.68436 0.77873,-4.68436 0.4283,0 1.04555,-1.57932 1.37167,-3.5096 0.37661,-2.22912 1.6086,-4.5864 3.3767,-6.46091 1.53106,-1.62322 3.29848,-3.98192 3.92759,-5.24157 2.11699,-4.2388 3.47593,-5.27848 6.89933,-5.27848 2.14441,0 3.8749,0.59212 4.99032,1.70754 0.93915,0.93915 2.27652,1.70755 2.97194,1.70755 1.22827,0 1.84614,1.57901 2.33857,5.97642 0.19525,1.74359 0.70301,2.13443 2.77296,2.13443 2.2197,0 2.69616,-0.45987 3.84198,-3.70826 0.97158,-2.75438 2.00082,-3.99775 4.00131,-4.83371 1.48131,-0.61901 2.96343,-1.97665 3.29362,-3.01698 0.5616,-1.76945 0.94419,-1.85627 5.92929,-1.34553 4.60837,0.47214 5.63496,0.30526 7.592,-1.23415 1.94555,-1.53037 2.26305,-2.42242 2.26305,-6.35832 0,-5.89496 1.16057,-8.95824 3.39396,-8.95824 1.1595,0 1.72868,0.56223 1.72868,1.70755 0,2.58273 4.90844,2.40571 5.91841,-0.21345 0.71948,-1.86583 0.76011,-1.87196 1.41505,-0.21344 0.9213,2.333 8.75738,9.8184 10.27838,9.8184 0.97849,0 1.11683,0.85301 0.67659,4.17176 -0.46564,3.51007 -0.28262,4.42413 1.15384,5.76297 0.93899,0.87516 3.62667,3.36697 5.97262,5.53734 l 4.26536,3.94613 0.62214,10.35458 0.62215,10.35458 h 3.32074 c 2.77424,0 3.32076,-0.2869 3.32076,-1.74325 0,-2.13545 2.29956,-4.66313 4.99775,-5.49353 2.20587,-0.67889 6.89027,-5.40794 6.93005,-6.9961 0.0267,-1.06813 1.46105,-1.45792 10.43727,-2.8364 3.14407,-0.48284 6.33662,-1.11585 7.09456,-1.4067 0.94331,-0.36198 1.5281,0.0449 1.85361,1.28961 0.64978,2.48479 4.02583,2.37876 9.79655,-0.30765 2.51191,-1.16935 6.00784,-2.12985 7.76874,-2.13444 1.76091,-0.005 3.20165,-0.39253 3.20165,-0.86211 0,-0.46958 0.9605,-0.85377 2.13444,-0.85377 1.17394,0 2.13443,0.37408 2.13443,0.8313 0,0.88147 5.72628,6.5606 10.56822,10.4812 2.29698,1.8599 3.78464,2.34787 7.15787,2.34787 3.89972,0 4.60473,-0.33197 8.37336,-3.94284 4.77446,-4.57459 12.86703,-7.83757 15.69047,-6.32652 0.90215,0.48282 3.36016,0.87785 5.46222,0.87785 3.70153,0 3.88232,0.1247 5.73775,3.9575 1.05368,2.17662 2.94154,4.54619 4.19523,5.26571 2.18182,1.2522 2.23262,1.43921 1.18605,4.3668 -0.60136,1.68222 -1.11026,4.2937 -1.13087,5.8033 -0.0258,1.8908 -0.59599,3.04364 -1.83267,3.70549 -1.70006,0.90985 -1.77907,1.50726 -1.49076,11.27251 0.21393,7.24634 0.62069,10.41716 1.36831,10.66636 0.58513,0.19505 1.06388,1.24331 1.06388,2.32947 0,1.18803 1.19055,3.02016 2.98821,4.59853 1.64351,1.44302 2.9882,3.23915 2.9882,3.99141 0,1.50811 -1.97027,3.80707 -3.26276,3.80707 -0.45288,0 -1.04456,0.5763 -1.31485,1.28067 -0.27029,0.70436 -1.0994,1.28066 -1.84246,1.28066 -0.74306,0 -1.91287,1.34469 -2.59957,2.9882 -0.91242,2.18373 -1.77579,2.98821 -3.20694,2.98821 -1.07711,0 -3.18505,1.01622 -4.6843,2.25826 -2.1687,1.79665 -2.72591,2.90499 -2.72591,5.42213 0,1.74012 -0.42178,4.37378 -0.9373,5.85259 -0.78626,2.25549 -1.37468,2.68872 -3.65185,2.68872 -4.10751,0 -7.36368,4.10262 -7.36368,9.2779 0,3.82717 -0.13086,4.03636 -3.41509,5.4592 -1.87831,0.81374 -3.4151,2.01531 -3.4151,2.67016 0,0.65486 -0.95464,1.43025 -2.12143,1.72309 -1.28336,0.3221 -2.32497,1.34341 -2.63665,2.58524 -0.28337,1.12904 -1.82601,3.2456 -3.4281,4.70346 -1.60208,1.45786 -2.91287,3.02554 -2.91287,3.48373 0,0.45818 -0.7684,0.83307 -1.70755,0.83307 -1.5092,0 -1.70792,-0.57025 -1.71075,-4.9092 z" description-data="Усть-абаканский район"/>
            </g>
            <g>
                <title> Алтайский район
                </title>
                    <path class="js-open-modal" data-modal="6" d = "m 387.61321,382.59791 c 0,-0.17575 0.57629,-1.95295 1.28066,-3.94933 0.70436,-1.99637 1.28066,-4.72674 1.28066,-6.06748 0,-1.9733 -0.4473,-2.52954 -2.34788,-2.91969 -1.29133,-0.26508 -3.73714,-0.8487 -5.43514,-1.29693 -1.69799,-0.44822 -4.09923,-0.81495 -5.33608,-0.81495 -1.23686,0 -2.24883,-0.3842 -2.24883,-0.85378 0,-0.46957 0.76108,-0.85377 1.69128,-0.85377 1.8999,0 2.87622,-2.61613 2.43081,-6.51358 -0.22249,-1.94687 -0.89477,-2.64887 -3.26831,-3.41279 -2.84594,-0.91596 -3.0005,-1.17001 -3.24627,-5.33608 -0.25766,-4.36754 -0.26264,-4.37434 -3.20165,-4.37434 -1.61898,0 -2.94359,0.32379 -2.94359,0.71954 0,0.39575 -1.72889,1.60875 -3.84198,2.69555 -2.11309,1.0868 -3.84198,2.47384 -3.84198,3.08231 0,1.18372 -5.01839,2.8815 -8.54047,2.88935 -1.17544,0.003 -4.0285,-1.33994 -6.34014,-2.98345 -2.73039,-1.94124 -5.176,-2.98821 -6.98011,-2.98821 -1.98411,0 -3.65362,-0.82662 -5.8465,-2.89478 l -3.06936,-2.89478 3.43546,-3.68419 c 1.8895,-2.02631 3.43546,-4.1935 3.43546,-4.81598 0,-0.62248 0.67234,-1.3885 1.4941,-1.70226 1.71203,-0.6537 3.14751,-1.72724 5.15902,-3.85824 0.77568,-0.82176 2.09334,-1.49411 2.92813,-1.49411 1.23277,0 1.52952,-0.76157 1.5802,-4.05542 0.0916,-5.95236 2.21916,-9.06357 6.60606,-9.66025 1.94981,-0.26519 3.77803,-0.71509 4.0627,-0.99976 0.28467,-0.28468 0.73242,-2.88684 0.995,-5.78259 0.29678,-3.27287 0.91454,-5.43274 1.6327,-5.70832 0.63541,-0.24383 1.15529,-0.94799 1.15529,-1.56481 0,-0.61681 1.24865,-1.38885 2.77477,-1.71565 2.72501,-0.58352 5.76297,-2.97165 5.76297,-4.53025 0,-1.04588 3.86562,-3.54898 5.4808,-3.54898 0.78185,0 1.49174,-1.17123 1.84221,-3.03941 0.41028,-2.187 0.9196,-2.90532 1.81606,-2.56132 0.68523,0.26295 1.8311,0.47808 2.54638,0.47808 1.04704,0 1.19338,0.70718 0.75086,3.62854 -1.9073,12.59116 -1.69558,13.52323 3.57194,15.72508 2.04996,0.85689 2.77477,1.70125 2.77477,3.23245 0,1.13993 0.33457,2.27937 0.7435,2.5321 0.40892,0.25273 0.96943,1.5892 1.24558,2.96993 0.29918,1.49592 1.2063,2.73393 2.24471,3.06351 0.95844,0.30419 1.74262,0.84069 1.74262,1.19222 0,0.35152 2.20914,1.54079 4.9092,2.64281 4.66866,1.90551 9.49543,6.09108 9.57026,8.29892 0.0507,1.49535 5.45468,5.37954 7.48445,5.37954 1.34526,0 1.95531,0.85889 2.69418,3.79316 0.52531,2.08624 0.95512,5.02548 0.95512,6.53165 0,2.7059 -3.91126,11.8733 -5.06573,11.8733 -0.32806,0 -1.50236,2.20914 -2.60956,4.9092 -1.10719,2.70006 -2.286,5.1013 -2.61956,5.33608 -0.33357,0.23479 -1.43755,2.20049 -2.45329,4.36823 -1.3383,2.85611 -3.18739,4.85429 -6.7156,7.25707 -2.67784,1.82366 -4.99687,3.60389 -5.1534,3.95607 -0.2809,0.63203 -6.97248,0.9399 -6.97248,0.32079 z" description-data="Алтайский район"/>
            </g>
            <g>
                <title> Боградский район
                </title>
                    <path class="js-open-modal" data-modal="9" d = "m 251.86321,238.62972 c 0,-2.84591 -0.37946,-5.12264 -0.85378,-5.12264 -0.48161,0 -0.85377,-2.41903 -0.85377,-5.54953 0,-3.20816 -0.36793,-5.54953 -0.87208,-5.54953 -0.47964,0 -1.30873,-0.95836 -1.84242,-2.12968 -0.53369,-1.17133 -2.29287,-2.90999 -3.90929,-3.8637 -1.61641,-0.95371 -3.13732,-2.49264 -3.37979,-3.41985 -0.24247,-0.92721 -0.87629,-1.69171 -1.4085,-1.6989 -0.66719,-0.009 -0.64727,-0.21669 0.0642,-0.66884 0.59518,-0.37827 1.25725,-3.71467 1.56455,-7.88433 0.71338,-9.67992 0.67055,-9.58009 3.56471,-8.30798 1.30716,0.57457 2.56876,1.2831 2.80355,1.57455 2.07115,2.57092 11.09905,3.54766 11.09905,1.20082 0,-2.26456 4.12964,-8.07811 5.76297,-8.1129 1.14871,-0.0245 5.72855,-4.64119 7.19566,-7.25363 0.90167,-1.60558 2.24655,-2.65126 3.62854,-2.82128 2.01688,-0.24814 2.19585,-0.60491 2.19585,-4.37744 v -4.10728 l 3.82683,0.43134 c 3.21577,0.36246 3.90735,0.17531 4.33119,-1.17209 0.2774,-0.88189 0.86052,-2.27056 1.29581,-3.08595 2.15986,-4.04578 0.64077,-7.60127 -5.99213,-14.02485 -2.58027,-2.49883 -3.49593,-2.84877 -7.45426,-2.84877 -5.09809,0 -4.94042,0.24613 -5.7307,-8.94564 -0.24133,-2.80702 -0.94234,-5.4964 -1.5578,-5.97642 -1.26559,-0.98707 -0.75877,-8.38433 0.67251,-9.81561 0.99053,-0.99053 9.75478,-0.13616 9.75478,0.95094 0,0.40416 1.68778,0.73485 3.75063,0.73485 4.2467,0 4.78748,-0.70723 4.78644,-6.25969 -5.4e-4,-2.85771 -0.58916,-4.21992 -2.98821,-6.91545 -1.64315,-1.84621 -2.98754,-3.90904 -2.98754,-4.58407 0,-0.67503 -1.34469,-3.44094 -2.98821,-6.14645 -1.64351,-2.70552 -2.98821,-5.510078 -2.98821,-6.232355 0,-1.353199 -2.54233,-6.660483 -3.5625,-7.436955 -0.31586,-0.240408 -1.13537,-2.065639 -1.82113,-4.056069 l -1.24683,-3.618964 h 4.86179 c 3.53811,0 5.3202,-0.42707 6.54548,-1.568598 2.03384,-1.894803 5.86769,-2.959608 8.1024,-2.250338 1.16777,0.370633 1.63494,1.309711 1.63494,3.286402 0,5.10618 1.47688,6.03164 10.38714,6.508949 l 7.969,0.426887 -0.21938,16.831641 c -0.19821,15.20744 -0.0643,17.08659 1.38741,19.47378 1.47457,2.42474 6.60168,5.95637 8.64727,5.95637 0.47128,0 1.62526,0.7684 2.56441,1.70755 0.93915,0.93915 2.30293,1.70755 3.03061,1.70755 2.22634,0 6.64814,2.66885 9.40973,5.67941 1.44207,1.57208 3.03381,2.85832 3.5372,2.85832 0.50338,0 1.13661,0.57687 1.40717,1.28193 0.27055,0.70506 1.81616,1.91341 3.43466,2.68522 3.48027,1.65963 4.14058,3.91892 4.27692,14.63365 0.0495,3.89117 0.47423,7.34895 0.94381,7.68396 0.46957,0.33501 1.44406,1.7617 2.16553,3.17043 0.72146,1.40873 2.53393,3.32972 4.02772,4.26887 1.49378,0.93915 2.94322,2.3698 3.22097,3.17923 0.27776,0.80942 1.52458,1.96201 2.77073,2.56132 1.56988,0.75498 2.6688,2.33381 3.57812,5.14071 0.72182,2.22809 1.78132,4.05303 2.35445,4.05542 0.57313,0.003 3.35356,4.77315 6.17874,10.60168 2.82519,5.82852 5.44666,10.72705 5.82549,10.88561 1.20181,0.50301 4.45608,9.03898 4.45608,11.68829 0,2.52838 -2.6949,9.75537 -4.40696,11.81827 -0.69231,0.83418 -1.49996,0.45113 -3.57962,-1.69776 -1.47708,-1.52625 -3.13475,-3.77295 -3.68372,-4.99267 -0.86927,-1.93136 -1.63531,-2.27051 -5.93339,-2.62694 -2.7144,-0.2251 -5.08269,-0.85155 -5.26288,-1.39212 -0.4972,-1.49159 -6.73492,-1.23795 -7.32426,0.29783 -0.27029,0.70436 -1.29714,1.28066 -2.2819,1.28066 -2.52216,0 -5.01209,1.42359 -8.76299,5.01014 -2.69448,2.57642 -3.86029,3.10071 -6.89476,3.10071 -3.18793,0 -4.32179,-0.58028 -8.92348,-4.56679 -2.89933,-2.51173 -5.27151,-5.09775 -5.27151,-5.74671 0,-1.89366 -3.86075,-2.34652 -11.54651,-1.35439 -5.21345,0.67299 -7.64067,1.39988 -8.90871,2.66791 -0.95859,0.9586 -2.09567,1.7429 -2.52684,1.7429 -0.43117,0 -1.35519,0.21921 -2.05337,0.48712 -0.89568,0.3437 -1.43894,-0.28471 -1.84521,-2.13443 -0.44524,-2.02716 -1.03474,-2.62156 -2.59996,-2.62156 -1.1133,0 -2.33142,0.52244 -2.70693,1.16097 -0.39274,0.66783 -4.1209,1.73454 -8.77692,2.51127 -4.66266,0.77785 -8.2452,1.80341 -8.45042,2.41906 -0.70682,2.12047 -7.22029,7.56908 -9.04834,7.56908 -1.47102,0 -3.00849,2.58922 -3.00849,5.06651 0,0.99854 -0.5556,1.76368 -1.28066,1.76368 -0.99607,0 -1.28066,-1.13836 -1.28066,-5.12264 z" description-data="Боградский район"/>
            </g>
            <g>
                <title> Ширинский район
                </title>
                    <path class="js-open-modal" data-modal="13" d = "m 133.61557,250.58255 c -0.93915,-0.40357 -4.09081,-0.76077 -7.00368,-0.79376 l -5.29614,-0.06 -1.7475,-3.95051 c -0.96112,-2.17278 -1.7475,-5.05426 -1.7475,-6.4033 0,-1.34903 -0.38419,-2.45279 -0.85377,-2.45279 -0.46957,0 -0.85377,-0.9605 -0.85377,-2.13443 0,-1.17394 0.3842,-2.13444 0.85377,-2.13444 0.46958,0 0.85377,-0.70347 0.85377,-1.56327 0,-1.66704 1.86739,-2.83575 7.08291,-4.43283 3.22926,-0.98886 7.43125,-6.00268 7.43125,-8.86699 0,-0.68015 0.5183,-1.75495 1.15179,-2.38843 2.43095,-2.43096 3.36104,-7.62385 2.86241,-15.9816 -0.46331,-7.76573 -0.61683,-8.28533 -3.10458,-10.50814 -1.43945,-1.28614 -2.61717,-3.09874 -2.61717,-4.02798 0,-2.60508 -3.05611,-3.73795 -8.53806,-3.16497 -6.43929,0.67304 -7.34615,1.10069 -8.56282,4.03802 -1.1483,2.77223 -2.61745,3.17854 -4.27433,1.18211 -1.69081,-2.0373 -1.72426,-15.48682 -0.0477,-19.17271 1.99494,-4.38581 3.28633,-5.06535 9.68351,-5.09549 5.12606,-0.0242 5.76297,-0.2103 5.76297,-1.68431 0,-0.91144 0.3842,-1.89461 0.85378,-2.18482 1.04677,-0.64695 1.14028,-6.97923 0.11244,-7.61447 -1.11408,-0.68854 -1.9221,-9.94972 -1.12342,-12.8761 0.45889,-1.6814 1.32922,-2.65373 2.53341,-2.83033 1.00891,-0.14795 2.81378,-1.49264 4.01082,-2.9882 1.19705,-1.49556 2.65091,-3.2859 3.2308,-3.97852 0.63679,-0.76058 1.08184,-4.07398 1.12377,-8.36647 l 0.0694,-7.10716 3.15409,-2.24416 c 3.63909,-2.58926 4.53038,-5.06405 3.19914,-8.88287 -1.1607,-3.329589 -1.18875,-3.025595 0.33305,-3.609568 0.94408,-0.362277 1.52515,0.501546 2.23579,3.323748 0.52811,2.09729 1.27289,3.81325 1.65507,3.81325 0.38219,0 0.93877,0.76839 1.23684,1.70754 0.60536,1.90731 3.84198,2.36465 3.84198,0.54288 0,-0.64056 1.73591,-1.82761 3.85757,-2.63788 2.12165,-0.81027 4.3346,-1.95026 4.91765,-2.53331 0.58305,-0.58305 2.07077,-1.31375 3.30604,-1.62379 1.83452,-0.46043 2.52635,-0.13492 3.77666,1.77699 0.8419,1.28737 1.97285,2.78466 2.51322,3.3273 0.54038,0.54264 1.8852,4.19253 2.98851,8.11085 1.10331,3.91833 2.28975,7.32054 2.63653,7.56048 0.34679,0.23994 1.71693,2.54513 3.04477,5.12264 2.56344,4.97599 5.73881,6.67935 7.2887,3.90986 0.41796,-0.74685 1.27335,-1.3579 1.90088,-1.3579 1.09046,0 3.89683,-4.82754 3.89683,-6.70335 0,-0.49267 0.48087,-1.20301 1.06861,-1.57852 1.94906,-1.24528 3.37238,-5.10968 3.11902,-8.46823 -0.36311,-4.81315 2.39628,-13.303783 4.21127,-12.958047 0.78072,0.14872 1.54833,1.177117 1.70578,2.285317 0.26029,1.83202 0.60081,1.97273 3.75158,1.55012 1.90591,-0.25564 3.69809,-0.82386 3.98259,-1.26272 0.2845,-0.43886 2.24881,-1.71663 4.36513,-2.839503 4.30996,-2.286766 5.26148,-3.066768 13.68679,-11.219644 5.02796,-4.865383 6.41739,-5.762972 8.92077,-5.762972 3.65233,0 9.89739,-2.38526 11.29042,-4.312299 2.32099,-3.210742 10.97863,-2.741933 12.27381,0.664623 0.44025,1.157951 1.4974,2.287622 2.34923,2.51038 1.03746,0.271301 2.17596,2.352334 3.44847,6.303354 1.04483,3.244086 2.47421,6.472855 3.1764,7.175042 0.70218,0.702187 1.84956,3.205752 2.54973,5.563479 0.70017,2.35773 1.98736,4.96064 2.86041,5.78426 0.87306,0.82361 2.07856,3.15211 2.6789,5.17444 0.67306,2.2673 2.03422,4.34822 3.55044,5.42787 1.96264,1.39752 2.4063,2.29241 2.19823,4.43389 -0.29432,3.0291 -0.39796,3.04688 -11.35975,1.94823 -7.71877,-0.77362 -8.51426,-0.14333 -9.27839,7.3515 -0.48283,4.73576 -0.36685,5.76297 0.65067,5.76297 1.80437,0 3.32227,5.42009 2.64333,9.43874 -0.79289,4.69304 0.42575,5.92573 5.87549,5.94328 4.02161,0.0129 4.66139,0.30816 7.86393,3.62854 4.84044,5.01854 5.60701,6.7133 4.79439,10.59968 l -0.68165,3.26004 -4.01289,-0.29034 -4.0129,-0.29035 v 3.91888 c 0,3.62392 -0.16267,3.91889 -2.16122,3.91889 -1.23314,0 -2.3967,0.6136 -2.70955,1.42888 -0.30157,0.78588 -1.25001,2.13057 -2.10764,2.98821 -0.85762,0.85762 -1.55932,2.0549 -1.55932,2.66062 0,0.60572 -1.92099,2.22322 -4.26887,3.59446 -2.44398,1.42735 -4.26887,3.10738 -4.26887,3.92999 0,0.79026 -0.57629,1.65799 -1.28066,1.92828 -0.70436,0.27029 -1.28066,1.27189 -1.28066,2.22578 0,2.24064 -0.32459,2.19754 -6.31017,-0.8378 -8.42561,-4.27269 -10.7653,-3.53919 -10.7653,3.37496 0,2.68895 -0.24917,5.13816 -0.55369,5.4427 -0.69342,0.69341 -8.83782,-7.12146 -8.83782,-8.48023 0,-2.25213 -4.61159,-2.66718 -6.67773,-0.60102 -1.34165,1.34167 -1.45074,1.34167 -1.70916,0 -0.20203,-1.04886 -1.16692,-1.43314 -3.5985,-1.43314 -4.08913,0 -5.08432,1.52865 -5.10483,7.84128 -0.0121,3.74195 -0.39602,4.90022 -2.18724,6.59987 -1.89478,1.79792 -2.87511,2.03595 -7.66921,1.86215 -3.4114,-0.12368 -5.49673,0.14235 -5.49673,0.70122 0,0.49528 -1.5355,1.91665 -3.41222,3.1586 -2.48173,1.64234 -3.6548,3.15897 -4.30178,5.56165 -1.1324,4.20543 -3.38505,4.50221 -3.38505,0.44596 0,-5.27368 -4.39235,-8.24148 -12.19738,-8.24148 -5.56546,0 -7.43941,0.89831 -7.43941,3.56617 0,0.83441 -0.9605,2.14644 -2.13444,2.91564 -1.17394,0.76919 -2.13443,1.81357 -2.13443,2.32084 0,0.50727 -0.89607,1.90383 -1.99127,3.10346 -2.40407,2.63334 -3.98515,7.82931 -3.98515,13.09663 0,5.97631 -4.33025,11.70952 -8.8441,11.70952 -0.72796,0 -2.28406,0.9605 -3.458,2.13444 -2.22098,2.22098 -6.06959,2.74149 -9.46912,1.28066 z" description-data="Ширинский район"/>
            </g>
            <g>
                <title> Орджоникидзевский район
                </title>
                    <path class="js-open-modal" data-modal="10" d = "m 71.44684,189.25425 c -0.377293,-1.88647 -1.289773,-2.80186 -3.790269,-3.80236 -1.81134,-0.72475 -3.775618,-1.89883 -4.36506,-2.60907 -0.631663,-0.76111 -3.324421,-1.53258 -6.55801,-1.87887 -3.017462,-0.32314 -5.276199,-0.92748 -5.019416,-1.34296 0.256783,-0.41549 1.003037,-0.75542 1.658343,-0.75542 0.655306,0 2.151961,-0.9605 3.3259,-2.13444 1.445323,-1.44532 3.077967,-2.13443 5.056909,-2.13443 1.607361,0 3.296151,-0.48025 3.752866,-1.06722 0.795715,-1.02265 2.501638,-9.23193 3.415292,-16.43514 0.238243,-1.8783 1.009528,-3.74767 1.713967,-4.15414 1.03095,-0.59488 1.171487,-1.84838 0.720437,-6.42581 -0.546437,-5.54549 1.127431,-18.85486 2.986146,-23.74365 0.433472,-1.14011 0.78813,-3.39262 0.78813,-5.00557 0,-1.61294 0.384199,-2.93262 0.853774,-2.93262 0.469576,0 0.853774,-0.5763 0.853774,-1.28066 0,-0.88313 0.886503,-1.28066 2.855883,-1.28066 5.831802,0 8.291116,-7.0551 6.39871,-18.356136 l -1.143744,-6.830188 -4.055425,-0.260223 c -3.18948,-0.204658 -4.055424,-0.578381 -4.055424,-1.750236 0,-0.819507 0.432339,-1.922353 0.960754,-2.450768 0.595905,-0.595905 0.738912,-2.143282 0.376578,-4.074686 -0.452305,-2.410991 -1.137034,-3.306659 -3.033257,-3.967686 -1.506949,-0.525325 -2.773455,-1.784257 -3.292296,-3.272603 -0.463768,-1.330366 -1.722362,-2.697878 -2.796875,-3.038916 -3.974339,-1.261406 -4.231228,-2.156461 -3.27983,-11.427596 0.858681,-8.367626 0.349979,-12.019079 -1.674437,-12.019079 -1.257035,0 -3.482335,-5.674678 -3.482335,-8.880209 0,-1.934256 -0.632624,-3.705244 -1.707548,-4.780168 -0.939151,-0.939151 -1.707547,-2.116571 -1.707547,-2.616491 0,-1.278093 -3.647958,-9.711007 -4.32996,-10.009484 -0.782378,-0.342407 3.95372,-5.30327 5.062991,-5.30327 0.495946,0 1.974645,-1.344682 3.285996,-2.988183 2.103207,-2.6359232 2.846945,-2.9881851 6.309064,-2.9882073 2.699361,-1.74e-5 4.539509,0.5331184 5.893607,1.7075219 1.082851,0.939151 2.35173,1.7075474 2.819733,1.7075474 1.061079,0 9.133097,8.344785 9.133097,9.441718 0,0.441961 1.943104,0.803565 4.318008,0.803565 5.294381,0 9.974294,2.430264 15.841214,8.226292 2.29533,2.267593 4.90401,4.513963 5.79707,4.991934 2.89472,1.549271 3.60473,3.561032 1.91555,5.427555 -1.07438,1.187176 -1.4344,2.744975 -1.24477,5.386061 l 0.2668,3.715799 h 8.71392 c 10.01021,0 11.27453,0.765326 11.3226,6.853889 0.033,4.181687 2.21215,6.379602 6.32508,6.379602 1.6293,0 3.86025,0.784196 5.17655,1.819599 1.27229,1.00078 3.91842,2.000525 5.8803,2.221657 4.64239,0.523265 6.91609,-1.659497 6.39329,-6.137602 l -0.3533,-3.026296 h 4.52431 c 2.85178,0 4.52432,-0.364539 4.52432,-0.986098 0,-0.55921 0.73921,-0.317126 1.70755,0.559212 0.93915,0.849919 1.70755,2.498251 1.70755,3.662959 0,3.048606 3.70022,6.155437 7.3311,6.155437 4.19316,0 6.99138,-2.140919 8.21342,-6.284095 0.57336,-1.943865 1.45168,-3.957095 1.95182,-4.473843 0.50014,-0.516748 3.87632,-1.599627 7.5026,-2.406399 4.52625,-1.006997 6.86022,-1.965699 7.44483,-3.058061 1.18104,-2.206792 3.35564,-2.739619 13.58663,-3.329043 l 8.89124,-0.512238 0.99895,-2.988208 c 1.17201,-3.50589 4.69733,-4.83196 4.69733,-1.766928 0,0.97181 0.33427,1.766928 0.74282,1.766928 0.40855,0 1.20898,1.66498 1.77873,3.699956 1.58436,5.658741 3.76059,6.545327 16.06631,6.545327 h 10.21354 l 2.3461,3.545202 c 2.51821,3.805283 2.58869,6.858155 0.32552,14.101262 l -1.02204,3.270989 -5.62054,0.05029 c -4.3503,0.03893 -6.39234,0.512691 -9.03563,2.096313 -1.8783,1.12531 -3.63614,2.361479 -3.90631,2.74704 -0.27018,0.38556 -2.57029,0.947254 -5.11137,1.248207 -3.98251,0.471669 -5.21086,1.103292 -8.90028,4.576551 -8.87875,8.358524 -9.9588,9.271199 -11.5807,9.785965 -0.91524,0.290488 -1.66407,0.891673 -1.66407,1.335968 0,0.665576 -8.39131,5.053534 -9.66411,5.053534 -0.21012,0 -0.58296,-0.7684 -0.82856,-1.707544 -0.34161,-1.306325 -1.16455,-1.707548 -3.50237,-1.707548 -2.91766,0 -3.10043,0.177039 -4.04158,3.914692 -0.54215,2.15308 -1.50818,4.11518 -2.14673,4.36022 -1.3344,0.51205 -1.6164,6.23924 -0.30722,6.23924 1.51705,0 0.90795,2.41488 -1.17636,4.6639 -1.11659,1.2048 -2.25648,3.32221 -2.5331,4.70534 -0.27663,1.38314 -1.73079,3.68817 -3.23149,5.12232 -2.58433,2.46972 -2.80014,2.52794 -4.08365,1.10161 -1.43558,-1.59533 -5.17713,-8.85293 -5.22607,-10.13716 -0.0159,-0.41814 -0.77129,-2.29705 -1.67858,-4.17535 -0.90728,-1.87831 -1.66264,-3.85339 -1.67857,-4.38908 -0.0582,-1.95369 -3.23891,-8.08037 -4.81418,-9.2728 -2.95202,-2.234599 -10.23322,-1.004046 -13.39074,2.26309 -0.84005,0.86921 -2.20395,1.58039 -3.0309,1.58039 -0.82694,0 -1.94469,0.44116 -2.48389,0.98036 -0.73796,0.73796 -1.22744,-8.5e-4 -1.97966,-2.9882 -0.54961,-2.182716 -1.33788,-3.968572 -1.75171,-3.968572 -0.41383,0 -0.75242,-0.576297 -0.75242,-1.28066 0,-0.796852 -0.80634,-1.28066 -2.13443,-1.28066 -1.17394,0 -2.13444,0.384198 -2.13444,0.853773 0,0.469576 -0.5763,0.853774 -1.28066,0.853774 -1.61219,0 -1.77408,5.448165 -0.20543,6.913495 0.85353,0.79733 0.54549,1.56825 -1.49411,3.73918 -1.41313,1.50413 -3.21251,2.96503 -3.99862,3.24646 -1.19919,0.4293 -1.40537,1.66333 -1.28066,7.6649 0.13206,6.35566 -0.0893,7.50562 -1.9858,10.31375 -1.17394,1.73828 -3.55219,3.79305 -5.28499,4.56615 -2.61755,1.16782 -3.24339,1.95507 -3.69925,4.65327 -0.79449,4.70258 0.37702,14.18872 1.82069,14.74271 1.58628,0.60871 1.51843,3.85069 -0.0935,4.46926 -0.70436,0.27029 -1.28066,1.02662 -1.28066,1.68075 0,0.89161 -1.35601,1.18932 -5.4172,1.18932 -4.08417,0 -5.74398,0.36766 -6.74517,1.4941 -1.92636,2.16737 -4.05933,7.71767 -4.05933,10.56299 0,3.11781 -0.76713,3.09544 -3.57482,-0.10426 -2.801102,-3.19219 -7.53417,-3.56672 -9.872109,-0.78116 -3.465449,4.12892 -9.986373,10.17267 -10.975854,10.17267 -1.773442,0 -6.97665,5.44742 -7.295683,7.63811 -0.432328,2.96866 -2.123054,3.08704 -2.702614,0.18925 z" description-data="Орджоникидзевский район"/>
            </g>
            <a href="#" class="js-open-modal" data-modal="1"> 
            <circle cx="367" cy="275" r="5"  stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
            </a>
            <text x="335" y="275" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: bold 12px Arial, Helvetica, sans-serif;" font-size="12px" font-family="Arial, Helvetica, sans-serif" font-weight="bold"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">Абакан</tspan></text>
            
            <a href="#" class="js-open-modal" data-modal="2"> 
            <circle cx="350" cy="265" r="5"  stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
            </a>
            <text x="305" y="264" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: bold 12px Arial, Helvetica, sans-serif;" font-size="12px" font-family="Arial, Helvetica, sans-serif" font-weight="bold"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">Черногорск</tspan></text>

            <a href="#" class="js-open-modal" data-modal="3"> 
            <circle cx="240" cy="480" r="5"  stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
            </a>
            <text x="214" y="479" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: bold 12px Arial, Helvetica, sans-serif;" font-size="12px" font-family="Arial, Helvetica, sans-serif" font-weight="bold"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">Абаза</tspan></text>

            <a href="#" class="js-open-modal" data-modal="4"> 
            <circle cx="375" cy="381" r="5"  stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
            </a>
            <text x="332" y="380" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: bold 12px Arial, Helvetica, sans-serif;" font-size="12px" font-family="Arial, Helvetica, sans-serif" font-weight="bold"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">Саяногорск</tspan></text>
        
            <a href="#" class="js-open-modal" data-modal="5"> 
            <circle cx="240" cy="240" r="5"  stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
            </a>
            <text x="213" y="240" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: bold 12px Arial, Helvetica, sans-serif;" font-size="12px" font-family="Arial, Helvetica, sans-serif" font-weight="bold"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">Сорск</tspan></text>
        
        </svg>
        <div class="description"></div>
        <img src = "images/Khakassia_NN.png" alt = "{Хакасия}" />
    </div>
    <form action="" method="post">
    <div class="modalad modal" data-modal="11">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close x" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Таштыпский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>

            <textarea type="text"  class= "input_change" name="tashtyp_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 11 AND id_tariff = $id_tariff";
                    }}
                    
                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>
            <button type="submit" name = "submit2" id="submit2" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit2'])) 
            {
                $tariff_desc=trim($_POST['tashtyp_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 11 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
    </div>
    </form>
    <form action="" method="post">
     <div class="modalad modal" data-modal="8">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Бейский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="bey_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 8 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit3" id="submit3" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit3'])) 
            {
                $tariff_desc=trim($_POST['bey_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 8 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="7">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Аскизский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="ask_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 7 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit4" id="submit4" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit4'])) 
            {
                $tariff_desc=trim($_POST['ask_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 7 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="12">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Усть-Абаканский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="ust_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 12 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit5" id="submit5" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit5'])) 
            {
                $tariff_desc=trim($_POST['ust_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 12 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="6">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Алтайский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="alt_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 6 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit6" id="submit6" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit6'])) 
            {
                $tariff_desc=trim($_POST['alt_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 6 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="9">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Боградский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="bog_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 9 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit7" id="submit7" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit7'])) 
            {
                $tariff_desc=trim($_POST['bog_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 9 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="13">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Ширинский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="shir_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 13 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit8" id="submit8" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit8'])) 
            {
                $tariff_desc=trim($_POST['shir_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 13 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="10">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">Орджоникидзевский район</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="ord_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 10 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit9" id="submit9" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit9'])) 
            {
                $tariff_desc=trim($_POST['ord_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 10 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="1">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">г.Абакан</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="aba_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 1 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit10" id="submit10" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit10'])) 
            {
                $tariff_desc=trim($_POST['aba_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 1 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="2">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">г.Черногорск</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="cher_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 2 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit11" id="submit11" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit11'])) 
            {
                $tariff_desc=trim($_POST['cher_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 2 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="3">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">г.Абаза</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="abaz_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 3 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit12" id="submit12" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit12'])) 
            {
                $tariff_desc=trim($_POST['abaz_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 3 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="4">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">г.Саяногорск</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="sayn_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 4 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

                <button type="submit" name = "submit13" id="submit13" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit13'])) 
            {
                $tariff_desc=trim($_POST['sayn_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 4 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
     </div>
     </form>
     <form action="" method="post">
     <div class="modalad modal" data-modal="5">
        <!--   Svg иконка для закрытия окна  -->
        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"               viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="combo-title">
            <p class="modal__title">г.Сорск</p> 
            <p class="modal__title tariff__title"></p>
        </div>
        <textarea type="text"  class= "input_change" name="sor_change_desc" required><?php 
                include "database.php";
                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "SELECT tariff_description FROM `svyaz` WHERE id_locality = 5 AND id_tariff = $id_tariff";
                    }}

                if($id_tariff != 0){

                    $result = mysqli_query($induction, $sql);

                    while ($tariff = mysqli_fetch_assoc($result))
                    {
                        echo $tariff['tariff_description'];
                    }
                }
                else{
                    echo "Выберите вид тарифа";
                }
            ?></textarea>

            <button type="submit" name = "submit14" id="submit14" class="btn fifth modalbtn">Сохранить</button>

        <?php
            include "database.php";
            if(isset($_POST['submit14'])) 
            {
                $tariff_desc=trim($_POST['sor_change_desc']);

                if($_REQUEST['id_tariff']) {
                    foreach($_GET['id_tariff'] as $id_tariff){$sql = "UPDATE `svyaz` SET `tariff_description` = '$tariff_desc' WHERE `id_locality` = 5 AND `id_tariff` = $id_tariff";
                    }}
                $rs = mysqli_query($induction, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
            }
            ?>
        <?php else:
            header('Location:../index.php');
        ?>
        <?php endif ?>
     </div>
     </form>
     <!-- Подложка под модальным окном -->
     <div class="overlay js-overlay-modal"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var sel = document.getElementById("test");
        var text= ": " + sel.options[sel.selectedIndex].text;
        var elements = document.getElementsByClassName('tariff__title');
        for (var i = 0; i < elements.length; i++) {
            elements[i].innerText = text.toLowerCase();
        }
    </script>
</body>
</html>