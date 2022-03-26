<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $start = isset($_GET["init"])?$_GET["init"]:0;
        $stop = isset($_GET["last"])?$_GET["last"]:0;
        $step = isset($_GET["i"])?$_GET["i"]:1;

        if($start<$stop){
            while($start <= $stop){
                echo " $start ";
                $start += $step;
            }
        }
        else {
            while($start >= $stop){
                echo " $start ";
                $start -= $step;
            }
        }
        




        

    ?>
    <br/><br/>
    <a href="javascript:history.go(-1)" class="botao">voltar</a>
</div>
</body>
</html>
 
