<?php
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/src/Registration.php";
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use src\Registration\Registration as Registry;

$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];

$serializer = new Serializer($normalizers, $encoders);
$register = new Registry();
$register->setPassword("bigPass");
$register->username = "BloodWalk";


$jsonContent = $serializer->serialize($register, 'json');
var_dump($jsonContent);

echo "<br>";

$unserialize = $serializer->deserialize($jsonContent, Registry::class, 'json');

var_dump($unserialize);