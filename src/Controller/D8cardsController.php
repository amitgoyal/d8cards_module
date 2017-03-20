<?php
/**
 * @file
 * Contains route controller for D8cards module.
 */

namespace Drupal\d8cards\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class D8cardsController
 * @package Drupal\d8cards\Controller
 */
class D8cardsController extends ControllerBase {

  /**
   * Returns 'hello' page.
   */
  public function hello() {
    $element = array(
      '#markup' => $this->t('Hello World!'),
    );

    return $element;
    //return new Response('Hello World!');
  }
}
