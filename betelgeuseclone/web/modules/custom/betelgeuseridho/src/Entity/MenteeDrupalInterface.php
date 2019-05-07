<?php

namespace Drupal\betelgeuseridho\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Mentee drupal entities.
 *
 * @ingroup betelgeuseridho
 */
interface MenteeDrupalInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Mentee drupal name.
   *
   * @return string
   *   Name of the Mentee drupal.
   */
  public function getName();

  /**
   * Sets the Mentee drupal name.
   *
   * @param string $name
   *   The Mentee drupal name.
   *
   * @return \Drupal\betelgeuseridho\Entity\MenteeDrupalInterface
   *   The called Mentee drupal entity.
   */
  public function setName($name);

  /**
   * Gets the Mentee drupal creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Mentee drupal.
   */
  public function getCreatedTime();

  /**
   * Sets the Mentee drupal creation timestamp.
   *
   * @param int $timestamp
   *   The Mentee drupal creation timestamp.
   *
   * @return \Drupal\betelgeuseridho\Entity\MenteeDrupalInterface
   *   The called Mentee drupal entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Mentee drupal published status indicator.
   *
   * Unpublished Mentee drupal are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Mentee drupal is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Mentee drupal.
   *
   * @param bool $published
   *   TRUE to set this Mentee drupal to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\betelgeuseridho\Entity\MenteeDrupalInterface
   *   The called Mentee drupal entity.
   */
  public function setPublished($published);

}
