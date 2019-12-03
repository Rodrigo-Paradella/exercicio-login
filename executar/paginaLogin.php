<?php

namespace Forseti\Bot\login;

use Forseti\Bot\Login\PageObject\TabelaPageObject;


require __DIR__ . '/../vendor/autoload.php';

$tabelaPageObject = new TabelaPageObject();

$tabelaPageObject->setUsuario('rodrigo.paradella@forseti.com.br')->setSenha('forseti2408')->postLogar();

$objeto = $tabelaPageObject->getParser()->getIterator()->current();

echo 'Hora de inicio de expediente ' . $objeto->inicio . PHP_EOL ;
echo 'Hora de inicio do intervalo ' . $objeto->intervalo . PHP_EOL ;
echo 'Hora da volta do intervalo ' . $objeto->voltaIntervalo . PHP_EOL ;
echo 'Hora da saida ' . $objeto->saida . PHP_EOL ;

//Apenas os horarios.
//foreach ($objeto as $descricoes){
//    echo $descricoes . PHP_EOL;
//}