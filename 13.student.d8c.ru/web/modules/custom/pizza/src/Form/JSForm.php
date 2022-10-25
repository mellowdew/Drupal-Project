<?php

namespace Drupal\pizza\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class JSForm extends FormBase {
    

  public function __construct() {

  }

  /**
   * Returns a unique string identifying the form.
   *
   * The returned ID should be a unique string that can be a valid PHP function
   * name, since it's used in hook implementation names such as
   * hook_form_FORM_ID_alter().
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'pizza_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    

    $types = null;
    $types_price = null;

    $entity_ids = \Drupal::entityQuery('type_pizza')
      ->execute();

    $node_storage = \Drupal::entityTypeManager()->getStorage('type_pizza')->loadMultiple($entity_ids);
    foreach ($node_storage as $node){

      $uuid= $node->get('uuid')->value;

      $title = $node->get('title')->value;
      $about = $node->get('about')->value;
      $price = $node->get('price')->value;
      $status = $node->get('status')->value;

      $types[$uuid]["title"] = $title;
      $types[$uuid]["about"] = $about;
      $types[$uuid]["price"] = $price;
      $types[$uuid]["status"] = $status;

      $types_price[$uuid] = $price;
    }

    $areas = null;
    $areas_price = null;

    $entity_ids = \Drupal::entityQuery('area_pizza')
      ->execute();

    $node_storage = \Drupal::entityTypeManager()->getStorage('area_pizza')->loadMultiple($entity_ids);
    foreach ($node_storage as $node){

      $uuid= $node->get('uuid')->value;

      $title = $node->get('title')->value;
      $price = $node->get('price')->value;
      $status = $node->get('status')->value;

      $areas[$uuid]["title"] = $title;
      $areas[$uuid]["price"] = $price;
      $areas[$uuid]["status"] = $status;

      $areas_price[$uuid] = $price;
    }

    foreach ($types as $key => $name) {
      if (!$name['status']) {
        unset($types[$key]);
      }
    }

    $form['#theme'] = 'pizza_form';

    $form['quantity'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
    ];

    foreach ($types as $key => $name) {
      $form['quantity'][$key] = [
        '#title' => $name["price"],
        '#type' => 'select',
        '#options' => range(0, 10),
        '#prefix' => $name["title"] . '. Цена за штуку: ' . $name["price"],
      ];
    }
    
    foreach ($areas as $key => $name) {
      if ($name['status'] === 0) {
        unset($areas[$key]);
      }
    }
    
    foreach ($areas as $key => $name) {
      $areas[$key]['title'] .= '. Цена доставки: ' . $areas[$key]['price'];
    }
    
    $form['district'] = [
      '#type' => 'radios',
      '#options' => array_combine(array_keys($areas), array_column($areas, 'title')),
      '#required' => TRUE,
      '#title' => 'Ваш район',
    ];

    $form['phone'] = [
      '#type' => 'tel',
      '#title' => 'Телефон',
      '#required' => TRUE,
    ];

    $form['address'] = [
      '#type' => 'textfield',
      '#title' => 'Адрес',
      '#required' => TRUE,
    ];

    $form['price'] = [
      '#title' => 'Цена',
      '#type' => 'textfield',
      '#attributes' => ['readonly' => 'readonly'],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];

    $form['#attached']['library'][] = 'pizza/pizza_doJS';
    $form['#attached']['drupalSettings']['pizza']['distPrice'] = $areas_price;
    $form['#attached']['drupalSettings']['pizza']['typePrice'] = $types_price;

    return $form;
  }

 

  /**
   * @throws \Exception
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $info = $form_state->getUserInput();
    if (empty($form_state->getErrors())) {
      Drupal::logger('write_log')->notice(serialize($info));
      Drupal::messenger()->addMessage('Спасибо! Ваша пицца скоро будет доставлена');
    }
    else {
      Drupal::logger('write_log')->error(implode(PHP_EOL, $form_state->getErrors()));
    }
   
  }

}


