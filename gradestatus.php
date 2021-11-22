<?php
    if(isset($_POST['btn']))
    {
        $g = $_POST['txt'];
        if($g >=50 && $g <=100)
        {
            echo $msg_pass = "<h1 style='color: blue;'>You passed your exam. Congrats!</h1>";
        }
        else if($g < 50 && $g >= 0)
        {
            echo $msg_fail = "<h1 style='color: red'>You failed in your exam. You have to work harder!</h1>";
        }
        else
        {
            echo $msg = "<h1 style='color: #be5bff'>This grade unavailable!</h1>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center; align-items: center; background-color: #e2ff3b; margin: 320px;">
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the grade: " value="
        <?php
            if(isset($g))
            {
                echo $g;
            }
        ?>
        ">
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>