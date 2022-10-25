<?php

namespace Drupal\opinion\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\opinion\OpinionInterface;

/**
 * Defines the opinion entity class.
 *
 * @ContentEntityType(
 *   id = "opinion",
 *   label = @Translation("opinion"),
 *   label_collection = @Translation("opinions"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\opinion\OpinionListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\opinion\Form\OpinionForm",
 *       "edit" = "Drupal\opinion\Form\OpinionForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "opinion",
 *   admin_permission = "administer opinion",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/opinion/add",
 *     "canonical" = "/opinion/{opinion}",
 *     "edit-form" = "/admin/content/opinion/{opinion}/edit",
 *     "delete-form" = "/admin/content/opinion/{opinion}/delete",
 *     "collection" = "/admin/content/opinion"
 *   },
 *   field_ui_base_route = "entity.opinion.settings"
 * )
 */
class Opinion extends ContentEntityBase implements OpinionInterface {

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    return $this->get('title')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setTitle($title) {
    $this->set('title', $title);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['title'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Заголовок'))
    ->setDescription(t('The title of the doss_entity entity.'))
    ->setRequired(TRUE)
    ->setSetting('max_length', 255)
    ->setDisplayOptions('form', [
      'type' => 'string_textfield',
      'weight' => 1,
    ])
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayOptions('view', [
      'label' => 'hidden',
      'type' => 'string',
      'weight' => 1,
    ])
    ->setDisplayConfigurable('view', TRUE);

    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Текст'))
      ->setDescription(t('A description of the personal opinion.'))
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'text_default',
        'label' => 'above',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['uid'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Досье'))
      ->setDescription(t('The user ID of the personal opinion author.'))
      ->setSetting('target_type', 'doss_entity')
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => 60,
          'placeholder' => '',
        ],
        'weight' => 15,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'author',
        'weight' => 15,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t(''))
      ->setDescription(t('The time that the personal opinion was created.'))
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'datetime_timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t(''))
      ->setDescription(t('The time that the personal opinion was last edited.'));
    return $fields;
  }

}
