<?php

function funcao1()
{
    
    // try{
    // $arrayFixo = new SplFixedArray(2);
    // $arrayFixo[3] = 'Valor';
    // }catch(RuntimeException $problema){
    //    echo "aconteceu um erro na função 1" .PHP_EOL;
    // }
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $problema) {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
    
}

function funcao2()
{
  

    // $arrayFixo = new SplFixedArray(2);
    // $arrayFixo[3] = 'Valor';
    // $divisao = intdiv(5, 0);
    // for ($i = 1; $i <= 5; $i++) {
    //     echo $i . PHP_EOL;
    // }
    echo 'Entrei na função 2' . PHP_EOL;
    intdiv(1, 0);
    throw new RuntimeException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;