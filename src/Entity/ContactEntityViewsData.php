<?php

/**
 * @file
 * Contains \Drupal\d8cards\Entity\ContactEntity.
 */

namespace Drupal\d8cards\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Contact entity entities.
 */
class ContactEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['contact_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Contact entity'),
      'help' => $this->t('The Contact entity ID.'),
    );

    return $data;
  }

}
