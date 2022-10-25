<?php

namespace Drupal\test\Form;

use Drupal;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TestForm extends FormBase {
    
  public function getFormId() {
    return 'test_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    
    $config = \Drupal::config('testing.settings');
    
    $type = $config->get('Types');

    foreach ($type as $key => $name) {
      if ($name['Available'] === 0) {
        unset($type[$key]);
      }
    }

    $form['quantity'] = [
      '#type' => 'fieldset',
      '#tree' => TRUE,
    ];


    foreach ($type as $key => $name) {
      $form['quantity'][$key] = [
        '#title' => $name['Name'] . '. Цена за штуку: ' . $name['Price'],
        '#type' => 'select',
        '#options' => range(0, $name['Available']),
        '#ajax' => [
          'callback' => '::myAjaxCallback', 
          'disable-refocus' => FALSE, 
          'event' => 'change',
          'wrapper' => 'edit-price', 
          'progress' => [
            'type' => 'throbber',
            'message' => $this->t('waiting'),
          ],
        ],
      ];
    }

    $form['price'] = [
      '#type' => 'textfield',
      '#attributes' => ['readonly' => 'readonly'],
      '#required' => TRUE,
    ];

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];
    return $form;
  }

  public function myAjaxCallback(array &$form, FormStateInterface $form_state) {
    $config = \Drupal::config('testing.settings');
    $type = $config->get('Types');
    foreach ($type as $key => $name) {
      if ($name['Available'] === 0) {
        unset($type[$key]);
      }
    }
    
    $typePrice = 0;

    foreach ($type as $key => $name) {
      $selectedValue = $form_state->getValue(['quantity', $key]);
      $typePrice += $selectedValue * $name['Price'];
    }

    $totalSum = $typePrice;

    $form['price']['#required'] = TRUE;
    $form['price']['#attributes'] = ['id' => 'edit-price', 'readonly' => 'readonly'];
    $form['price']['#value'] = $totalSum . ' ₽';

    $form_state->setValue('price', $totalSum);

    return $form['price'];
  }

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