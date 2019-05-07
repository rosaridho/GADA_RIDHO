<?php

namespace Drupal\betelgeuseridho;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Mentee drupal entities.
 *
 * @ingroup betelgeuseridho
 */
class MenteeDrupalListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Mentee drupal ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\betelgeuseridho\Entity\MenteeDrupal */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.mentee_drupal.edit_form',
      ['mentee_drupal' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
