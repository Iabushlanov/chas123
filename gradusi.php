<html>
<head>
    <title>Титл</title>
    <style>
        form{
			color: red;
        }
    </style>
</head>
<body>
    <form method="POST">
        <p>Введи от 0  до 360 градусов</p>
        <input type="text" name="gradusi" placeholder="введите">
        <br>
        <input type="submit" value="Применить">
    </form>
    <?php
    $a = $_POST["gradusi"];
    if(!is_numeric($a))
        echo 'Ошибка!!';
    else{
        $a = $a*12/360;
        $a = floor($a);
        echo $a;
    }
    ?>
</body>
</html>