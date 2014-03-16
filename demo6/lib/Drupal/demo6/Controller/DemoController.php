<?php
/**
 * @file
 * Contains \Drupal\demo6\Controller\DemoController.
 */

namespace Drupal\demo6\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller that accepts an argument.
 */
class DemoController extends ControllerBase {

  /**
   * Route callable method.
   *
   * @param $place
   *   The name of a place to be printed.
   *
   * @return
   *   A theme array for Twig template.
   *    See /templates/demo6-demo.html.twig
   */
  public function demoPage($place) {
    $user = $this->currentUser();
    $theme = array(
      '#theme' => 'demo6_demo',
      '#user' => $user->name,
      '#place' => $place,
    );
    return $theme;
  }
}
