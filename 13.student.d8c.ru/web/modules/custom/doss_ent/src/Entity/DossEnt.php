<?php

namespace Drupal\doss_ent\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\doss_ent\DossEntInterface;
use Drupal\user\UserInterface;

/**
 * Defines the doss_ent entity class.
 *
 * @ContentEntityType(
 *   id = "doss_ent",
 *   label = @Translation("doss_ent"),
 *   label_collection = @Translation("doss_ents"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\doss_ent\DossEntListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\doss_ent\Form\DossEntForm",
 *       "edit" = "Drupal\doss_ent\Form\DossEntForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "doss_ent",
 *   admin_permission = "administer doss_ent",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/doss-ent/add",
 *     "canonical" = "/doss_ent/{doss_ent}",
 *     "edit-form" = "/admin/content/doss-ent/{doss_ent}/edit",
 *     "delete-form" = "/admin/content/doss-ent/{doss_ent}/delete",
 *     "collection" = "/admin/content/doss-ent"
 *   },
 *   field_ui_base_route = "entity.doss_ent.settings"
 * )
 */
class DossEnt extends ContentEntityBase implements DossEntInterface {

  /**
   * {@inheritdoc}
   *
   * When a new doss_ent entity is created, set the uid entity reference to
   * the current user as the creator of the entity.
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += ['uid' => \Drupal::currentUser()->id()];
  }

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
  public function isEnabled() {
    return (bool) $this->get('status')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setStatus($status) {
    $this->set('status', $status);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('uid')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('uid')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('uid', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('uid', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The title of the doss_ent entity.'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['main_img'] = BaseFieldDefinition::create('image')
        ->setLabel(t('Main image of the hardware'))
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

    $fields['gender'] = BaseFieldDefinition::create('list_string')
        ->setLabel(t('Gender'))
        ->setDescription(t('The gender of the Contact entity.'))
        ->setSettings(array(
          'allowed_values' => array(
            'female' => 'female',
            'male' => 'male',
          ),
        ))
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'list_default',
          'weight' => 3,
        ))
        ->setDisplayOptions('form', array(
          'type' => 'options_select',
          'weight' => 3,
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);

    $fields['bio'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Biography'))
      ->setDescription(t('A description of the doss_ent.'))
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

    $fields['post'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Post'))
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
