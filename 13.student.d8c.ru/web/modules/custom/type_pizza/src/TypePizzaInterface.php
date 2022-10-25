<?php

namespace Drupal\type_pizza;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining a type_pizza entity type.
 */
interface TypePizzaInterface extends ContentEntityInterface {

  /**
   * Gets the type_pizza title.
   *
   * @return string
   *   Title of the type_pizza.
   */
  public function getTitle();

  /**
   * Sets the type_pizza title.
   *
   * @param string $title
   *   The type_pizza title.
   *
   * @return \Drupal\type_pizza\TypePizzaInterface
   *   The called type_pizza entity.
   */
  public function setTitle($title);

}
