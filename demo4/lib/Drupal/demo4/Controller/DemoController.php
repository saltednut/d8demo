<?php
/**
 * @file
 * Contains \Drupal\demo4\Controller\DemoController.
 */

namespace Drupal\demo4\Controller;

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
   *   A string representing page content.
   */
  public function demoPage($place) {
    $user = $this->currentUser();
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name! Welcome to @place.', array('@name' => $user->name, '@place' => $place)),
    );
    return $build;
  }
}
