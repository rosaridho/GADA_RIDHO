<?php

namespace Drupal\betelgeuseridho;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Director drupal entities.
 *
 * @ingroup betelgeuseridho
 */
class DirectorDrupalListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Director drupal ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\betelgeuseridho\Entity\DirectorDrupal */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.director_drupal.edit_form',
      ['director_drupal' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
