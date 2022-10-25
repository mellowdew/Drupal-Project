<?php

namespace Drupal\doss_entity\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\doss_entity\DossEntityInterface;

/**
 * Defines the doss_entity entity class.
 *
 * @ContentEntityType(
 *   id = "doss_entity",
 *   label = @Translation("doss_entity"),
 *   label_collection = @Translation("doss_entities"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\doss_entity\DossEntityListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\doss_entity\Form\DossEntityForm",
 *       "edit" = "Drupal\doss_entity\Form\DossEntityForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "doss_entity",
 *   admin_permission = "administer doss_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/doss-entity/add",
 *     "canonical" = "/doss_entity/{doss_entity}",
 *     "edit-form" = "/admin/content/doss-entity/{doss_entity}/edit",
 *     "delete-form" = "/admin/content/doss-entity/{doss_entity}/delete",
 *     "collection" = "/admin/content/doss-entity"
 *   },
 *   field_ui_base_route = "entity.doss_entity.settings"
 * )
 */
class DossEntity extends ContentEntityBase implements DossEntityInterface {

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
    ->setLabel(t('Имя'))
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

////////////////////////////////////////////////////////////////////////////

    $fields['main_img'] = BaseFieldDefinition::create('image')
      ->setLabel(t('Фотография'))
      ->setSettings([
        'file_directory' => 'hardware',
        'file_extensions' => 'png jpg jpeg',
        'alt_field' => FALSE,
      ])
      ->setDisplayOptions('view', [
        'type' => 'image',
        'weight' => 2,
        'label' => 'hidden',
        'settings' => [
          'image_style' => 'thumbnail',
          'image_link' => 'file',
        ],
      ])
      ->setDisplayOptions('form', array(
        'label' => 'hidden',
        'type' => 'image_image',
        'weight' => 2,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

////////////////////////////////////////////////////////////////////////////////////


$fields['phone_number'] = BaseFieldDefinition::create('string')
->setLabel('Номер телефона')
->setDisplayOptions('form', [
  'label' => 'inline',
  'weight' => 30,
  'settings' => [
    'placeholder' => '+380999999999',
  ],
])
->setDisplayOptions('view', [
  'label' => 'inline',
  'weight' => 30,
  'settings' => [
    'placeholder' => '+380999999999',
  ],
])
->setRequired(TRUE);

//////////////////////////////////////////////////////////////////////////////

    $fields['gender'] = BaseFieldDefinition::create('list_string')
    ->setLabel(t('Пол'))
    ->setDescription(t('The gender of the Contact entity.'))
    ->setSettings(array(
      'allowed_values' => array(
        'female' => 'female',
        'male' => 'male',
      ),
    ))
    ->setDisplayOptions('view', array(
      'label' => 'above',
      'type' => 'string',
      'weight' => 3,
    ))
    ->setDisplayOptions('form', array(
      'type' => 'options_select',
      'weight' => 3,
    ))
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayConfigurable('view', TRUE);

/////////////////////////////////////////////////////////////////////////////////////////

  $fields['bio'] = BaseFieldDefinition::create('text_long')
    ->setLabel(t('Биография'))
    ->setDescription(t('A description of the doss_entity.'))
    ->setDisplayOptions('form', [
      'type' => 'text_textarea',
      'weight' => 4,
    ])
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayOptions('view', [
      'type' => 'text_default',
      'label' => 'above',
      'weight' => 4,
    ])
    ->setDisplayConfigurable('view', TRUE);

    $fields['post'] = BaseFieldDefinition::create('string')
    ->setLabel(t('Пост'))
    ->setDescription(t('A description of the doss_entity.'))
    ->setDisplayOptions('form', [
      'type' => 'string_textfield',
      'weight' => 5,
    ])
    ->setDisplayConfigurable('form', TRUE)
    ->setDisplayOptions('view', [
      'type' => 'string_textfield',
      'label' => 'above',
      'weight' => 5,
    ])
    ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }
  

}
