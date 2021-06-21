<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\CreationalPatterns\Builder\Director;
use App\CreationalPatterns\Builder\Builders\ComputerCSBuilder;

use \App\CreationalPatterns\AbstractFactory\AmadeusProvider\AmadeusFactory;
use \App\CreationalPatterns\AbstractFactory\TravelPortProvider\TravelPortFactory;
use \App\CreationalPatterns\AbstractFactory\AmadeusSelfApi\AmadeusSelfApiFactory;
//$director = new Director(new ComputerCSBuilder());
//
//$computer = $director->makeComputer();
//
//var_dump($computer);
//
//$director->changeBuilder(new \App\CreationalPatterns\Builder\Builders\ComputerXLBuilder());
//$computer = $director->makeComputer();
//
//var_dump($computer);


$amadeus = new AmadeusFactory();
$search = $amadeus->createSearch()->getSearchObject();
$seatMap = $amadeus->createSeatMap()->getSeatMapObject();
$book = $amadeus->createBook()->getBookObject();
$retrieve = $amadeus->createRetrieve()->getRetrieveObject();
$cancel = $amadeus->createCancel()->getCancelObject();
var_dump($search->request());
var_dump($search->response());
var_dump($seatMap->request());
var_dump($seatMap->response());
var_dump($book->request());
var_dump($book->response());
var_dump($retrieve->request());
var_dump($retrieve->response());
var_dump($cancel->request());
var_dump($cancel->response());

$travel_port = new TravelPortFactory();
$search = $travel_port->createSearch()->getSearchObject();
$seatMap = $travel_port->createSeatMap()->getSeatMapObject();
$book = $travel_port->createBook()->getBookObject();
$retrieve = $travel_port->createRetrieve()->getRetrieveObject();
$cancel = $travel_port->createCancel()->getCancelObject();


var_dump($search->request());
var_dump($search->response());
var_dump($seatMap->request());
var_dump($seatMap->response());
var_dump($book->request());
var_dump($book->response());
var_dump($retrieve->request());
var_dump($retrieve->response());
var_dump($cancel->request());
var_dump($cancel->response());


$amadeus_self_api = new AmadeusSelfApiFactory();
$search = $amadeus_self_api->createSearch()->getSearchObject();
$seatMap = $amadeus_self_api->createSeatMap()->getSeatMapObject();
$book = $amadeus_self_api->createBook()->getBookObject();
$retrieve = $amadeus_self_api->createRetrieve()->getRetrieveObject();
$cancel = $amadeus_self_api->createCancel()->getCancelObject();


var_dump($search->request());
var_dump($search->response());
var_dump($seatMap->request());
var_dump($seatMap->response());
var_dump($book->request());
var_dump($book->response());
var_dump($retrieve->request());
var_dump($retrieve->response());
var_dump($cancel->request());
var_dump($cancel->response());