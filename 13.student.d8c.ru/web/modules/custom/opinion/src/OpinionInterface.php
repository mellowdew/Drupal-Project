<?php

namespace Drupal\opinion;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining an opinion entity type.
 */
interface OpinionInterface extends ContentEntityInterface {

  /**
   * Gets the opinion title.
   *
   * @return string
   *   Title of the opinion.
   */
  public function getTitle();

  /**
   * Sets the opinion title.
   *
   * @param string $title
   *   The opinion title.
   *
   * @return \Drupal\opinion\OpinionInterface
   *   The called opinion entity.
   */
  public function setTitle($title);

}
