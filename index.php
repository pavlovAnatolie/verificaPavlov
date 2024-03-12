<?php
use Slim\Factory\AppFactory;
include_once("controller/impiantoController.php");
include_once("controller/DispositiviAllarmeController.php");
include_once("controller/RilevatoriDiPressioneController.php");
include_once ("controller/RilevatoriDiUmiditaController.php");

require __DIR__ . '/vendor/autoload.php';


//sono presenti i vari percorsi visrituali che ci servono a noi per poter indirizzare la richiesta
$app = AppFactory::create();

$app->get('/impianto',"impiantoController:impianto");



$app->get('/dispositivi_di_allarme',"DispositiviAllarmeController:disp");

$app->get('/dispositivi_di_allarme/{id}',"DispositiviAllarmeController:single");

$app->get('/rilevatori_di_pressione'," RilevatoriDiPressioneController:disp");
$app->get('/rilevatori_di_pressione/{id}',"RilevatoriDiPressioneController:single");
$app->get('/rilevatori_di_pressione/{id}/misurazioni',"RilevatoriDiPressioneController:misurazioni");
$app->get('/rilevatori_di_pressione/{id}/misurazioni/maggiore_di/{valore_minimo}',"RilevatoriDiPressioneController:misurazioniMagg");

$app->get('/rilevatori_di_umidita',"RilevatoriDiUmiditaController:disp");
$app->get('/rilevatori_di_umidita/{id}',"RilevatoriDiUmiditaController:single");
$app->get('/rilevatori_di_umidita/{id}/misurazioni',"RilevatoriDiUmiditaController:misurazioni");
$app->get('/rilevatori_di_umidita/{id}/misurazioni/maggiore_di/{valore_minimo}',"RilevatoriDiUmiditaController:misurazioniMagg");

$app->run();
