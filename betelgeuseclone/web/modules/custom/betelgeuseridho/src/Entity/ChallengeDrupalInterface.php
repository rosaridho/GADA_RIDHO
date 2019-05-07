<?php

namespace Drupal\betelgeuseridho\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Challenge drupal entities.
 *
 * @ingroup betelgeuseridho
 */
interface ChallengeDrupalInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Challenge drupal name.
   *
   * @return string
   *   Name of the Challenge drupal.
   */
  public function getName();

  /**
   * Sets the Challenge drupal name.
   *
   * @param string $name
   *   The Challenge drupal name.
   *
   * @return \Drupal\betelgeuseridho\Entity\ChallengeDrupalInterface
   *   The called Challenge drupal entity.
   */
  public function setName($name);

  /**
   * Gets the Challenge drupal creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Challenge drupal.
   */
  public function getCreatedTime();

  /**
   * Sets the Challenge drupal creation timestamp.
   *
   * @param int $timestamp
   *   The Challenge drupal creation timestamp.
   *
   * @return \Drupal\betelgeuseridho\Entity\ChallengeDrupalInterface
   *   The called Challenge drupal entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Challenge drupal published status indicator.
   *
   * Unpublished Challenge drupal are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Challenge drupal is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Challenge drupal.
   *
   * @param bool $published
   *   TRUE to set this Challenge drupal to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\betelgeuseridho\Entity\ChallengeDrupalInterface
   *   The called Challenge drupal entity.
   */
  public function setPublished($published);

}
