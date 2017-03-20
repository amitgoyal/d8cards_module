<?php

/**
 * @file
 * Contains \Drupal\d8cards\ContactEntityListBuilder.
 */

namespace Drupal\d8cards;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Contact entity entities.
 *
 * @ingroup d8cards
 */
class ContactEntityListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Contact entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\d8cards\Entity\ContactEntity */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.contact_entity.edit_form', array(
          'contact_entity' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
