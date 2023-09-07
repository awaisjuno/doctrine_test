<?php 
declare(strict_types = 1);

require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\DBAL\DriverManager;
use Entity\Invoice;
use \Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$connectionParams = [
    //'dbname' => $_ENV['DB_DATABASE'],
    'dbname' => 'doctrine',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

//connection
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);


// raw query
$stamt = $conn->prepare('SELECT * FROM invoices');
$result = $stamt->executeQuery();


//entity
$invoice = (new Invoice())
    ->setProductId(1)
    ->setUserId(4);

// configuartion
$config = ORMSetup::createAnnotationMetadataConfiguration(
        array(__DIR__."/Entity"),
        true
);

// create entity manager
$em = EntityManager::create($conn, $config);

$em->persist($invoice);

$em->flush();

die("yess");
?>