<?php
/**
 * @file
 * Contains \Drupal\d8cards\Plugin\Block\ActorsBlock.
 */

namespace Drupal\d8cards\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'actors' block.
 *
 * @Block(
 *   id = "actors_block",
 *   admin_label = @Translation("Actors Block"),
 *   category = @Translation("D8cards blocks.")
 * )
 */
class ActorsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $data = array(
      '#markup' => $this->t('Actors block data.'),
    );

    return $data;
  }
}
