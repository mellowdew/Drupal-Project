<?php

namespace Drupal\write_log\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Checkboxes;

class WriteForm extends FormBase {

  public function getFormId() {
    return 'reservation_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['biography'] = [
      '#type' => 'textarea',
      '#title' => t(' Ваше сообщение'.$aaa),
      '#description' => t('Оставьте свое сообщение'),
    ];

    if (\Drupal::currentUser()->isAnonymous()) {
      $form['username']  = [
        '#title' => 'Name',
        '#type' => 'textfield',
        '#tree' => TRUE,
      ];
    }

    if (\Drupal::currentUser()->isAnonymous()) {
    $form['check'] = [
      '#type' => 'checkbox',
      '#tree' => TRUE,
      '#title' => $this->t('Анонимные пользователи могут указывать контактную информацию'),
      '#options' => [
        $this->t('false'),
        $this->t('true'),
      ],
      '#ajax' => [
        'callback' => [$this, 'extraField'],
        'event' => 'change',
        'wrapper' => 'annon_accses',
      ],
    ];

    $form_state->setCached(FALSE);
    
    $form['annon_form'] = [
      '#type' => 'container',
      '#tree' => TRUE,
      '#attributes' => ['id' => 'annon_accses'],
    ];

    if ($form_state->getUserInput()['_triggering_element_name'] == 'check') {
      $check = $form_state->getValue('check');

      if ($check == '1') {

      $form['annon_form']['email'] = [
        '#title' => 'Email',
        '#type' => 'email',
        '#tree' => TRUE,
        '#required' => TRUE,
        '#ajax' => [
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];
 
      $form['annon_form']['phone'] = [
        '#title' => 'Phone',
        '#type' => 'textfield',
        '#tree' => TRUE,
        '#required' => TRUE,
        '#ajax' => [
          'event' => 'change',
          'progress' => array(
            'type' => 'throbber',
            'message' => t('Verifying email..'),
          ),
        ],
        '#suffix' => '<div class="email-validation-message"></div>'
      ];
    }
    }
  }

    $form['submit'] = [
      "#type" => "submit",
      '#value' => $this->t('Отправить'),
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (\Drupal::currentUser()->isAnonymous()) {
    $info = $form_state->getUserInput();
    $i1 = $info['annon_form']['email'];
    $phone = $info['annon_form']['phone'];
    $check = $form_state->getValue('check');

    if ($check == '1') {
    $pattern_phone = '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/';
    if (!preg_match($pattern_phone, $phone)){
      $form_state->setErrorByName('phone', $this->t('Формат ввода номера телефона не верен!'));
    }
    }
  }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $bio = $form_state->getValue('biography');

    $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $name = $user->get('name')->value;

    $info = $form_state->getUserInput();
    $i1 = $info['annon_form']['email'];
    $i2 = $info['annon_form']['phone'];

    $alrt = 'Спасибо за заполнение формы';
    
      if (empty($form_state->getErrors())) {
        \Drupal::messenger()->addMessage($alrt);
      } else {
        \Drupal::logger('write_log')
          ->error($form_state->getErrors());
      }
      
      $logger = \Drupal::service('logger.factory'); 
     
      if (empty($i2)) {
  
      $nodeType = $bio;
      $userName = $name;
      $logger->get($moduleName)->notice('Сообщение: "@nodeType". Автор %userName.', [
        '@nodeType' => $nodeType,
        '%userName' => $userName,
      ]);
    }
    else {

      $nodeType = $bio;
      $email = $i1;
      $phone = $i2;

      $logger->get($moduleName)->notice('Анонимное сообщение: "@nodeType". Контактные данные: "@email", "@phone"', [
        '@nodeType' => $nodeType,
        '@email' => $email,
        '@phone' => $phone,
      ]);
    }
  }
  
  public function extraField(array &$form, FormStateInterface $form_state) { 
    return $form['annon_form'];
  }  
}

