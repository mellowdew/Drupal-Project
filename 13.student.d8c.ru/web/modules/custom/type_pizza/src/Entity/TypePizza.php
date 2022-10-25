<?php

namespace Drupal\type_pizza\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\type_pizza\TypePizzaInterface;

/**
 * Defines the type_pizza entity class.
 *
 * @ContentEntityType(
 *   id = "type_pizza",
 *   label = @Translation("type_pizza"),
 *   label_collection = @Translation("type_pizzas"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\type_pizza\TypePizzaListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\type_pizza\Form\TypePizzaForm",
 *       "edit" = "Drupal\type_pizza\Form\TypePizzaForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "type_pizza",
 *   admin_permission = "administer type_pizza",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/type-pizza/add",
 *     "canonical" = "/type_pizza/{type_pizza}",
 *     "edit-form" = "/admin/content/type-pizza/{type_pizza}/edit",
 *     "delete-form" = "/admin/content/type-pizza/{type_pizza}/delete",
 *     "collection" = "/admin/content/type-pizza"
 *   },
 *   field_ui_base_route = "entity.type_pizza.settings"
 * )
 */
class TypePizza extends ContentEntityBase implements TypePizzaInterface {

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
  public function getAbout() {
    return $this->get('about')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setAbout($about) {
    $this->set('about', $about);
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
  public function getPrice() {
    return $this->get('price')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setPrice($price) {
    $this->set('price', $price);
    return $this;
  }


  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('The title of the type_pizza entity.'))
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

    $fields['about'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('about'))
      ->setDescription(t('A description of the type_pizza.'))
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

    $fields['status'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Status'))
      ->setDescription(t('A integer indicating whether the dossgen is enabled.'))
      ->setDefaultValue(TRUE)
      ->setSetting('on_label', 'Enabled')
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'settings' => [
          'display_label' => FALSE,
        ],
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'boolean',
        'label' => 'above',
        'weight' => 0,
        'settings' => [
          'format' => 'enabled-disabled',
        ],
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['price'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Price field'))
      ->setDescription(t('price.'))
      ->setDefaultValue(2)
      ->setDisplayOptions('view', array(
        'label' => 'inline',
        'type' => 'integer',
        'weight' => -3,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'integer',
        'weight' => -3,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE); 

    return $fields;
  } 

}
