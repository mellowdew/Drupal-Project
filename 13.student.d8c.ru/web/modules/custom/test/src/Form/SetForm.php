<?php

namespace Drupal\test\Form;

use Drupal\contact\Entity\Message;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class SetForm extends ConfigFormBase {

  const SETTINGS = 'testing.settings';

  public function getFormId() {
    return 'example_admin_settings';
  }

  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {


    $config = $this->config(static::SETTINGS);

    

    
    $types = $config->get('Types');
    $avail = array_column($config->get('Types'), 'Available');
    for ($i = 0; $i <= count($avail); $i++)
      if ($avail[$i] === 0)
        $avail[$i] = '-1';

    $form['tests'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Пиццы'),
      '#default_value' =>  $avail,
      '#options' => array_column($types, 'Name'),
     
    ];

    $form['tests_price'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
      '#title' => 'Цены'
    ];
    for ($i = 0; $i<count($types); $i++){
      $form['tests_price'][$i] = [
        '#attributes' => [
          ' type' => 'number',
        ],
        '#type' => 'textfield',
        '#title' => 'Цена ' . array_column($types, 'Name')[$i],
        '#default_value' => array_column($types, 'Price')[$i]
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->config(static::SETTINGS);
    
    for ($i = 0; $i < count($form_state->getValue('tests')); $i++){
      $type = $config->get('Types.' . ($i+1));
      $type_data = [
        'Name' => $type['Name'],
        'Available' => $i,
        'Price' => $form_state->getValue(['tests_price', $i])
      ];
      $this->configFactory->getEditable(static::SETTINGS)
        ->set('Types.' . ($i+1), $type_data)
        ->save();
    }

    parent::submitForm($form, $form_state);
  }

}
