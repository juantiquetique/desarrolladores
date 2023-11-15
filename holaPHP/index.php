<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //phpinfo();
        echo "<h1>Hola PHP</h1>";
        echo "<br>";
        echo 'SENA ','Regional Tolima';
        echo "<br>";
        echo "ADSI " . "2472155";
        echo "<br>";
        print "<h2>Versión de PHP " . 7 . "</h2>";

        echo "<br><br>";
        echo "===============================<br>";
        echo "Operadores aritméticos <br>";
        echo "===============================<br>";
        echo "<br><br>";

        $x = 3;
        $y = 9;

        echo "x = " . $x . ", y = " . $y ;
        echo "<br>";
        echo 'x = $x, y = $y';
        echo "<br>";
        echo "$x + $y = " . $x + $y;
        echo "<br>";
        echo "$x - $y = " . $x - $y;
        echo "<br>";
        echo "$x * $y = " . $x * $y;
        echo "<br>";
        echo "$x / $y = " . $x / $y;
        echo "<br>";
        $z = $x % $y;
        echo "$x % $y = " . $z;
        echo "<br><br>";
        echo $x++ . "<br>";
        echo $x . "<br>";
        echo ++$x. "<br>";
        echo ++$x / 2 . "<br>";
        echo $x . "<br>";
        echo $x . "<br>";
        echo $x-- . "<br>";
        echo $x . "<br>";

        
        echo "<br><br>";
        echo "===============================<br>";
        echo "Operadores relacionales <br>";
        echo "===============================<br>";
        echo "<br><br>";
        $x = 4;
        $y = 7;
        echo "$x == $y ->" . ($x == $y) ."<br>";
        echo "$x != $y ->" . ($x != $y) ."<br>";
        echo "$x > $y ->" . ($x > $y) ."<br>";
        echo "$x < $y ->" . ($x < $y) ."<br>";
        echo "$x >= $y ->" . ($x >= $y) ."<br>";
        echo "$x <= $y ->" . ($x <= $y) ."<br>";
        echo "$x == 4 ->" . ($x == 4) ."<br>";
        echo "$x == '4' ->" . ($x == '4') ."<br>";
        echo "$x === 4 ->" . ($x === 4) ."<br>";
        echo "$x === '4' ->" . ($x === '4') ."<br>";
        echo "$x !== 4 ->" . ($x !== 4) ."<br>";
        echo "$x !== '4' ->" . ($x !== '4') ."<br>";
        
        echo "<br><br>";
        echo "===============================<br>";
        echo "Operadores logicos <br>";
        echo "===============================<br>";
        echo "<br><br>";

        $x = 8;
        $y = 5;

        echo ($x > $y) && ($x == 8);
        echo "<br>";
        echo ($x > $y) || ($x < 8);
        echo "<br>";
        echo !(($x > $y) || ($x < 8));



        echo "<br><br>";
        echo "===============================<br>";
        echo "Estructuras condicionales<br>";
        echo "===============================<br>";
        echo "<br><br>";


        if($x == 9)
        {
            echo "Son iguales <br>";
        }
        else if ($x > 3)
        {
            echo "Es mayor que 3<br>";
        }
        else
        {
            echo "No se cumplió ninguna condición";
        }

        echo "<br><br>";
        echo "===============================<br>";
        echo "Bucles<br>";
        echo "===============================<br>";
        echo "<br><br>";

        $i = 1;
        while($i<11)
        {
            print($i);
            echo "<br>";
            $i++;
        }

        echo "<hr>";

        $x = 10;
        while(--$x)
        {
            print($x . "<br>");
        }

        $y = -1;
        // while()
        // {
        //     print($y . "<br>");
            
        // }
        echo "<hr>";
        for ($i = 20; $i < 51; $i++)
        {
            print($i . "<br>");
        }
        echo "<hr>";
        $nombres = ["Mateo","Marcos","Lucas","Juan","María"];

        echo $nombres[0];
        echo "<br>";
        for ($i = 0; $i < 5; $i++)
        {
            echo $nombres[$i] . "<br>";
        }
        echo "<br>";
        for ($i = 0; $i < count($nombres); $i++)
        {
            echo $nombres[$i] . "<br>";
        }
        $nombres[] = "Magdalena";
        echo "<br>";
        for ($i = 0; $i < count($nombres); $i++)
        {
            echo $nombres[$i] . "<br>";
        }
        $nombres[0] = "Daniel";
        array_unshift($nombres, "Mateo");   
        echo "<br>";
        for ($i = 0; $i < count($nombres); $i++)
        {
            echo $nombres[$i] . "<br>";
        }
        array_pop($nombres);
        echo "<br>";
        for ($i = 0; $i < count($nombres); $i++)
        {
            echo $nombres[$i] . "<br>";
        }
        echo "<br>";

        foreach($nombres as $nombre)
        {
            echo $nombre . "<br>";
        }
        $nombres[] = "Oso";
        $nombres[] = 34;  
        $nombres[] = 765.23;  
        $nombres[] = false;  
        foreach($nombres as $nombre)
        {
            echo $nombre . "<br>";
        }


        echo "<br><br>";
        echo "===============================<br>";
        echo "Cadenas de caracteres<br>";
        echo "===============================<br>";
        echo "<br><br>";

        echo 'Esto es una cadena de caracteres sencilla';
        echo '<br><br>';
        echo 'También es posible incluir nuevas lineas en 
        un string de esta forma, ya que es
        correcto hacerlo así';
        echo "<br><br>";

        //Arnold dijo una vez: "I'll be back"

        echo 'Arnold dijo una vez: "I\'ll be back"';
        echo "<br><br>";

        echo substr("abcdef",1);
        echo "<br><br>";
        echo substr("abcdef",0,8);
        echo "<br><br>";
        echo substr("abcdef",-1,1);
        echo "<br><br>";
        echo substr("abcdef",-4,2);
        echo "<br><br>";

        $cadena = 'abcdef';
        echo strlen($cadena);
        echo "<br><br>";
        echo strlen("Longitud de la cadena de caracteres");
        echo "<br><br>";
        $findMe = 'def';
        $pos = strpos($cadena, $findMe);
        echo $pos . '<echo "<br><br>";
        echo "===============================<br>";
        echo "Cadenas de caracteres<br>";
        echo "===============================<br>";
        echo "<br><br>";r>';

        if($pos === false)
        {
            echo "La cadena '$findMe' no fue encontrada en la cadena '$cadena'.<br>";
        }
        else
        {
            echo "La cadena '$findMe' fue encontrada en la cadena '$cadena' en la posición $pos.<br>";
        }

        $nuevaCadena = "abcdef abcdef a";
        $pos = strpos($nuevaCadena, 'a',1);
        echo $pos . '<br><br>';        
        $pastel = "trozo1-trozo2-trozo3-trozo4-trozo5-trozo6";
        $trozos = explode('-', $pastel);
        echo $trozos;
        echo "<br><br>";
        foreach($trozos as $trozo)
        {
            echo $trozo . '<br>';
        }
        echo "<br><br>";
        $cadena = " Cadena ";
        $nombre = " Fulanito de tal ";
        echo "-" . $nombre . "-";
        echo "<br>";
        echo "-" . trim($nombre) . "-";
        echo "<br>";

        echo "<hr>";
        echo "<br><br>";
        echo "===============================<br>";
        echo "Replace<br>";
        echo "===============================<br>";
        echo "<br><br>";

        $variable = "hermoso";
        $cadena = "El mundo es bonito cuando decimos hola";
        echo str_replace("bonito",$variable,$cadena);
        echo "<br><br>";

        $variable1 = "un juego muy entretenido";
        $cadena1 = "Lol es una hermosura";
        echo str_replace("una hermosura",$variable1,$cadena1);
        echo "<br><br>";

        $variable2 = "Feid ;)";
        $cadena2 = "El mejor cantante es anuel aa";
        echo str_replace("anuel aa",$variable2,$cadena2);

        echo "<hr>";
        echo "<br><br>";
        echo "===============================<br>";
        echo "rsort<br>";
        echo "===============================<br>";
        echo "<br><br>";

        $abecedario=["a","f","c"];
        rsort($abecedario);

        for($x=0;$x<count($abecedario);$x++)
        {
        echo $abecedario[$x];
        echo "<br>";
        }
        echo "<br><br>";

        $numeros=[1,2,3];
        rsort($numeros);

        for($x=0;$x<count($numeros);$x++)
        {
        echo $numeros[$x];
        echo "<br>";
        }
        echo "<br><br>";

        $celulares=["Huawei","Xiaomi","Alcatel"];
        rsort($celulares);

        for($x=0;$x<count($celulares);$x++)
        {
        echo $celulares[$x];
        echo "<br>";
        }
        echo "<br><br>";

        echo "<hr>";
        echo "<br><br>";
        echo "===============================<br>";
        echo "array_push<br>";
        echo "===============================<br>";
        echo "<br><br>";

        $frutas = ["Naranja","Manzana","Limón"];
        array_push($frutas,"Madarina","Lima","Melocotón");
        print_r($frutas);   








    ?>
</body>
</html>