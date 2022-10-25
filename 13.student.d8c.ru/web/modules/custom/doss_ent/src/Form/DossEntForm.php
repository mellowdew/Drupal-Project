<?php

namespace Drupal\doss_ent\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the doss_ent entity edit forms.
 */
class DossEntForm extends ContentEntityForm {

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
      $this->messenger()->addStatus($this->t('New doss_ent %label has been created.', $message_arguments));
      $this->logger('doss_ent')->notice('Created new doss_ent %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The doss_ent %label has been updated.', $message_arguments));
      $this->logger('doss_ent')->notice('Updated new doss_ent %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.doss_ent.canonical', ['doss_ent' => $entity->id()]);
  }

}
