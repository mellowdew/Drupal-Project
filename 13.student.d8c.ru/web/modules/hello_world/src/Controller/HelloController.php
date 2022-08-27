<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function helloid() {

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    return [
      '#markup' => 'Hello, Woorld!,'.$name,
    ];

    return $output;
  }

  public function hello() {

    $output = array();
    $output['#title'] = 'HelloWorldddd page title';    
    $output['#markup'] = 'Hello World!';

    return $output;
  }

}
