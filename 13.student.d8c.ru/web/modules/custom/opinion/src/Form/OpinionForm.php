<?php

namespace Drupal\opinion\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the opinion entity edit forms.
 */
class OpinionForm extends ContentEntityForm {

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
      $this->messenger()->addStatus($this->t('New opinion %label has been created.', $message_arguments));
      $this->logger('opinion')->notice('Created new opinion %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The opinion %label has been updated.', $message_arguments));
      $this->logger('opinion')->notice('Updated new opinion %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.opinion.canonical', ['opinion' => $entity->id()]);
  }

}
