<html>
<head>
    <title> Exercícios Aula 2 </title>
</head>
<body>
    <?php
    for ($valor = 1; $valor <=100; $valor++){
        echo $valor . "<br>";
    }
    for ($valor = 1;$valor<=100;$valor++){
        if ($valor%3==0){
            echo $valor . "<br>";
        }
    }
    $soma = 0;

    for ($valor=50;$valor<=100;$valor++){
        if ($valor%2==0){
            $soma+=$valor;
        }
    }

    echo "Soma dos pares de 50 a 100:".$soma . "<br>";

    function fatorial (int $valor): int {
        $fatorial=1;
        for ($valor;$valor>1;$valor--){
            $fatorial*= $valor;  
        }
        return $fatorial;
    }

    echo "Fatorial:".fatorial(4)."<br>";

    function media (int $nota1,$nota2,$nota3,$peso1,$peso2,$peso3): float{
        $media = ($nota1*$peso1+$nota2*$peso2+$nota3*$peso3) / ($peso1+$peso2+$peso3);
        return $media;
    }

    echo "Média das notas é:". media (10,9,8,3,2,5)."<br>";
    function fibonacci(int $valor):int {
        if($valor < 2){
            return $valor;
        }else{
            return fibonacci($valor - 1) + fibonacci($valor - 2);
        }
        return 0;
            
    }
    echo "fibonacci:";
    for($i = 0; $i <= 10; $i++){
        echo fibonacci($i) . " ";
    }
    echo "<br>";
    function somaDoIntervalo (int $valor1,$valor2):int{
        $soma=0;
        for ($i = $valor1;$i<=$valor2;$i++){
            $soma += $i;
        }
        return $soma;
    }
    echo "Soma do Intervalo".somaDoIntervalo(5,10)."<br>";

    function imprime (int $valor){
        $y=0;
        if ($valor >1){
            if ($valor%2==0){
                $y=$valor/2;
            }else{
                $y=3*$valor +1;
            }
            echo $y." ";
            imprime ($y);
        }        
    }

    imprime (13);
    ?>
</body>
</html>