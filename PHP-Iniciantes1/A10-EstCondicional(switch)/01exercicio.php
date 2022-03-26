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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
            case 1:
                $r = $n*2;
                break;
            case 2:
                $r = $n**3;
                break;
            case 3:
                $r = sqrt($n); //  $r = $n ^ (1/2) ou $r = $n ^ 0.5
                break;
        }

        echo "O resultado da operação solicita foi <span class='foco'>$r</span";
    ?>
    <br/>
    <a href="01exercicio.html"><span class="botao">voltar</span></a>
</div>
</body>
</html>
 