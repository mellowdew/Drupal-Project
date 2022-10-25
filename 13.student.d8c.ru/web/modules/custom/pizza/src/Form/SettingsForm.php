<?php

namespace Drupal\pizza\Form;

use Drupal\contact\Entity\Message;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class SettingsForm extends ConfigFormBase {



  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {


    $types = null;
    $index = 0;

    $entity_ids = \Drupal::entityQuery('type_pizza')
      ->execute();

    $node_storage = \Drupal::entityTypeManager()->getStorage('type_pizza')->loadMultiple($entity_ids);
    foreach ($node_storage as $node){

      $uuid= $node->get('uuid')->value;

      $title = $node->get('title')->value;
      $about = $node->get('about')->value;
      $price = $node->get('price')->value;
      $status = $node->get('status')->value;
      $uid = $uuid;

      $types[$uuid]["title"] = $title;
      $types[$uuid]["about"] = $about;
      $types[$uuid]["price"] = $price;
      $types[$uuid]["status"] = $status;
      $types[$uuid]["uid"] = $uid;

      $types[$uuid]["index"] = $index;

      $index = $index + 1;
    }


    $areas = null;
    $index = 0;

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

      $areas[$uuid]["index"] = $index;

      $index = $index + 1;

    }

    $avails=null;
    $avail=null;
    $index = 0;  

    foreach ($areas as $key) {
      if ($key['status'] == 0) {
        $avail[$index] = -1;
        $avails[$index] = $key['status'];
      }
      else {
        $avail[$index] = $index;
        $avails[$index] = $key['status'];
      }
      $index = $index + 1;
    }
        

    $form['places'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t(implode($avails)),
      '#default_value' => $avail,
      '#options' => array_column($areas, "title"),
    ];


    $form['places_price'] = [
      '#title' => 'Цена доставки в район',
      '#type' => 'fieldset',
      '#tree' => TRUE
    ];

    
    for ($i = 0; $i<count($areas); $i++){
      $form['places_price'][$i] = [
        '#attributes' => [
          ' type' => 'number', // insert space before attribute name :)
        ],
        '#type' => 'textfield',
        '#title' => array_column($areas, "title")[$i],
        '#default_value' => array_column($areas, "price")[$i]
      ];
    }
    
    $avail = null;
    $index = 0;  

    foreach ($types as $key) {
      if ($key['status'] == 0) {
        $avail[$index] = -1;
      }
      else {
        $avail[$index] = $index;
      }
      $index = $index + 1;
    }

    $form['pizzas'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t(implode($avail)),
      '#default_value' =>  $avail,
      '#options' => array_column($types, 'title'),
    ];

    $form['pizzas_price'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
      '#title' => 'Цены'
    ];
    for ($i = 0; $i<count($types); $i++){
      $form['pizzas_price'][$i] = [
        '#attributes' => [
          ' type' => 'number',
        ],
        '#type' => 'textfield',
        '#title' => 'Цена ' . array_column($types, 'title')[$i],
        '#default_value' => array_column($types, 'price')[$i]
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    
    for ($i = 0; $i < count($form_state->getValue('pizzas')); $i++)
    {
      $type_values[$i] = $form_state->getValue('pizzas')[$i];
    }

    $i = 0;


    $entity_ids = \Drupal::entityQuery('type_pizza')
      ->execute();

        
    $node_storage = \Drupal::entityTypeManager()->getStorage('type_pizza')->loadMultiple($entity_ids);

    foreach ($node_storage as $node){
 
      $node->status = $type_values[$i];
         
      $node->save();
      $i = $i + 1;
    }

      
    for ($i = 0; $i < count($form_state->getValue('places')); $i++)
    {
      $area_values[$i] = $form_state->getValue('places')[$i];
    }

    $i = 0;


    $entity_ids = \Drupal::entityQuery('area_pizza')
      ->execute();

        
    $node_storage = \Drupal::entityTypeManager()->getStorage('area_pizza')->loadMultiple($entity_ids);

    foreach ($node_storage as $node){
 
      $node->status = $area_values[$i];
         
      $node->save();
      $i = $i + 1;
    }


    for ($i = 0; $i < count($form_state->getValue('pizzas_price')); $i++)
    {
      $type_values[$i] = $form_state->getValue('pizzas_price')[$i];
    }

    $i = 0;


    $entity_ids = \Drupal::entityQuery('type_pizza')
      ->execute();

        
    $node_storage = \Drupal::entityTypeManager()->getStorage('type_pizza')->loadMultiple($entity_ids);

    foreach ($node_storage as $node){
 
      $node->price = $type_values[$i];
         
      $node->save();
      $i = $i + 1;
    }


    for ($i = 0; $i < count($form_state->getValue('places_price')); $i++)
    {
      $area_values[$i] = $form_state->getValue('places_price')[$i];
    }

    $i = 0;


    $entity_ids = \Drupal::entityQuery('area_pizza')
      ->execute();

        
    $node_storage = \Drupal::entityTypeManager()->getStorage('area_pizza')->loadMultiple($entity_ids);

    foreach ($node_storage as $node){
 
      $node->price = $area_values[$i];
         
      $node->save();
      $i = $i + 1;
    }

    parent::submitForm($form, $form_state);
  }

}
