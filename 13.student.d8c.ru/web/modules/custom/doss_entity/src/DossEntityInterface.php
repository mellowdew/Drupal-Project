<?php

namespace Drupal\doss_entity;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining a doss_entity entity type.
 */
interface DossEntityInterface extends ContentEntityInterface {

  /**
   * Gets the doss_entity title.
   *
   * @return string
   *   Title of the doss_entity.
   */
  public function getTitle();

  /**
   * Sets the doss_entity title.
   *
   * @param string $title
   *   The doss_entity title.
   *
   * @return \Drupal\doss_entity\DossEntityInterface
   *   The called doss_entity entity.
   */
  public function setTitle($title);

}
