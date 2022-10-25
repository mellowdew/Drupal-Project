<?php
use Drupal\type_pizza\Entity\TypePizza;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Language\LanguageInterface;

$uuid_service = \Drupal::service('uuid');
$lc = LanguageInterface::LANGCODE_DEFAULT;


$title = "Белая Пеперони";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 10),
  'about' => array($lc => 'Пикантная пепперони, соус альфредо, моцарелла'),
], 'type_pizza');
$example->save();

$title = "Ветчина и сыр";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 15),
  'about' => array($lc => 'Ветчина, моцарелла, соус альфредо'),
], 'type_pizza');
$example->save();

$title = "Сырная";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 20),
  'about' => array($lc => 'Моцарелла, сыры чеддер и пармезан, соус альфредо'),
], 'type_pizza');
$example->save();

$title = "Карбонара";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 10),
  'about' => array($lc => 'Бекон, сыры чеддер и пармезан, моцарелла, томаты, красный лук, чеснок, соус альфредо, итальянские травы'),
], 'type_pizza');
$example->save();

$title = "Пепперони";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 10),
  'about' => array($lc => 'Увеличенная порция моцареллы, ветчина, пикантная пепперони, кубики брынзы, томаты, шампиньоны, итальянские травы, томатный соус'),
], 'type_pizza');
$example->save();

$title = "Четыре сыра";
$uuid = $uuid_service->generate();

$example = new TypePizza([
  'uuid' => array($lc => $uuid),
  'title' => array($lc => $title),
  'price' => array($lc => 25),
  'about' => array($lc => 'Сыр блю чиз, сыры чеддер и пармезан, моцарелла, соус альфредо'),
], 'type_pizza');
$example->save();
