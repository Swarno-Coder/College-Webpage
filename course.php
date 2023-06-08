<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Info</title>
</head>
<style>
    *,*::after,*::before{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Poppins, Arial, Helvetica, sans-serif;
    }
    h3,ul{
        margin:0.5rem;
        padding-left: 1rem;
        
    }
    .info-wrapper{
        position: relative;
        width:100vw;
        padding:1rem 1rem;
        font-size:1.1rem;
    }
    .info-wrapper h1{
        text-shadow:0 1px 5px #fff;
        width:70%;
        padding-bottom:0.5rem;
        border-bottom:1px solid #000;
    }
</style>
<body>
    <?php
        include 'dataRoute.php';
        $json=json_decode($info,true);

    ?>
    <div class="info-wrapper">
        <h1>Department of 
            <?php echo $json[$_GET["index"]]["name"]; ?>
        </h1>
        <span><?php echo $json[$_GET["index"]]["description"]; ?></span>
    </div>
    <h3 style="border-bottom:1px solid #000; width:20%;">Our faculty</h3>
    <ul>
        <?php
            for($x=0;$x<3;$x++){
                echo "<li>".$json[$_GET["index"]]["teachers"][$x]."</li>";
            }
        ?>
    </ul>
</body>
</html>