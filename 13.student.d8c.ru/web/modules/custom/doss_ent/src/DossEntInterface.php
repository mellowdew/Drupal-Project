<?php

namespace Drupal\doss_ent;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a doss_ent entity type.
 */
interface DossEntInterface extends ContentEntityInterface, EntityOwnerInterface {

  /**
   * Gets the doss_ent title.
   *
   * @return string
   *   Title of the doss_ent.
   */
  public function getTitle();

  /**
   * Sets the doss_ent title.
   *
   * @param string $title
   *   The doss_ent title.
   *
   * @return \Drupal\doss_ent\DossEntInterface
   *   The called doss_ent entity.
   */
  public function setTitle($title);

  /**
   * Gets the doss_ent creation timestamp.
   *
   * @return int
   *   Creation timestamp of the doss_ent.
   */
  public function getCreatedTime();

  /**
   * Sets the doss_ent creation timestamp.
   *
   * @param int $timestamp
   *   The doss_ent creation timestamp.
   *
   * @return \Drupal\doss_ent\DossEntInterface
   *   The called doss_ent entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the doss_ent status.
   *
   * @return bool
   *   TRUE if the doss_ent is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the doss_ent status.
   *
   * @param bool $status
   *   TRUE to enable this doss_ent, FALSE to disable.
   *
   * @return \Drupal\doss_ent\DossEntInterface
   *   The called doss_ent entity.
   */
  public function setStatus($status);

}
