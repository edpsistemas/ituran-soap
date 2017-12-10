<?php

require(__DIR__ . '/../vendor/autoload.php');

$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();

use App\Ituran\Address;
use App\Ituran\Consumer;
use App\Ituran\Contact;
use App\Ituran\CreditCard;
use App\Ituran\DirectDebit;
use App\Ituran\Fee;
use App\Ituran\GetServices;
use App\Ituran\GetWorkshops;
use App\Ituran\Ituran;
use App\Ituran\Order;
use App\Ituran\Phone;
use App\Ituran\Platform;
use App\Ituran\PutOrder;
use App\Ituran\ScheduleOrder;
use App\Ituran\Service;

$ituran = new Ituran(
    getenv('ITURAN_WSDL'),
    getenv('ITURAN_NAMESPACE'),
    getenv('ITURAN_USERNAME'),
    getenv('ITURAN_PASSWORD')
);

$cep = '01001001';
$cpf = 'x';

$fipe = '025227-1';
$year = 2016;

$getServices = new GetServices($cep, $cpf, $fipe, $year);
$getServices->setClient($ituran);
echo "Chamando getServices()\n";
$services = $getServices->get();
$chosenService = $services->services[5];

$nome = 'Teste de teste';
$apelido = 'teste';
$nasc = new Datetime('1990-01-01');
$cpf = cpf(true);
$rg = '17.038.198-5';
$ccm = null;
$email = 'z'.rand(1000, 10000).'@zlsrflka.com';

$consumer = new Consumer(
    Consumer::TYPE_PERSON,
    $nome,
    $apelido,
    $nasc,
    Consumer::GENDER_MALE,
    $cpf,
    $rg,
    $ccm,
    $email
);

$nro = 100;
$compl = null;
$rua = 'r. teste de teste';
$bairro = 'centro';
$uf = 'sp';
$cidade = 'sao paulo';
$fat = true;
$cob = true;

$address = new Address(
    Address::TYPE_INSTALLATION,
    $cep,
    $nro,
    $compl,
    $rua,
    $bairro,
    $uf,
    $cidade,
    $fat,
    $cob
);

$phone1 = new Phone(
    Phone::TYPE_RESIDENTIAL,
    11,
    '44445555',
    null
);

$phone2 = new Phone(
    Phone::TYPE_MOBILE,
    11,
    '944445555',
    null
);

$consumer->addAddress($address);
$consumer->addPhone($phone1);
$consumer->addPhone($phone2);

$platform = new Platform(
    $fipe,
    'EEE9083',
    '9BWZZZ377VT004251',
    $year,
    'AZUL',
    '44455498',
    false,
    false,
    false,
    false,
    false,
    false
);

$phone3 = new Phone(
    Phone::TYPE_MOBILE,
    11,
    '944445555',
    null
);

$contact = new Contact(
    'Testa de Teste',
    Contact::RELATION_LEVEL_MOTHER,
    $phone3
);

$service = new Service(
    $chosenService->serviceId,
    $chosenService->priceListId,
    $chosenService->monthlyFrequency
);

$directDebit = new DirectDebit(
    2373,
    1234,
    123456,
    2
);

$due_date = (new Datetime())->modify('next week');

$serviceFee = new Fee(
    21,
    null,
    $directDebit,
    12,
    $due_date
);

$creditCard = new CreditCard(
    'visa',
    'teste',
    '4111111111111111',
    5,
    2020,
    1,
    111
);

$installationFee = new Fee(
    11,
    $creditCard,
    null,
    1,
    $due_date
);

$order = new Order(
    $consumer,
    $platform,
    $serviceFee,
    $installationFee
);

$order->addContact($contact);
$order->addService($service);

$putOrder = new PutOrder($order);
$putOrder->setClient($ituran);
echo "Chamando putOrder()\n";
$putOrder = $putOrder->put();

$getWorkshops = new GetWorkshops($cep, $putOrder->orderId);
$getWorkshops->setClient($ituran);
echo "Chamando getWorkshops()\n";
$workshops = $getWorkshops->get();

$chosenWorkshop = $workshops[1];
$chosenDate = $chosenWorkshop->dates[0];
$chosenHour = $chosenDate->hours[0];

$scheduleOrder = new ScheduleOrder(
    $putOrder->orderId,
    $chosenWorkshop->workshopId,
    $chosenDate->date,
    $chosenHour->periodNumber
);

$scheduleOrder->setClient($ituran);
echo "Chamando scheduleOrder()\n";
$schedule = $scheduleOrder->put();
print_r($schedule);
