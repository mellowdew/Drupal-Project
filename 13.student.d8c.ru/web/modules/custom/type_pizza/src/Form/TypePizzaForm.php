<?php

namespace Drupal\type_pizza\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the type_pizza entity edit forms.
 */
class TypePizzaForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New type_pizza %label has been created.', $message_arguments));
      $this->logger('type_pizza')->notice('Created new type_pizza %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The type_pizza %label has been updated.', $message_arguments));
      $this->logger('type_pizza')->notice('Updated new type_pizza %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.type_pizza.canonical', ['type_pizza' => $entity->id()]);
  }

}
