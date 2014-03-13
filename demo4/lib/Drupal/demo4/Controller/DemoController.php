<?php
/**
 * @file
 * Contains \Drupal\demo4\Controller\DemoController.
 */

namespace Drupal\demo4\Controller;

/**
 * Controller that accepts an argument.
 */
class DemoController {

  /**
   * Route callable method.
   *
   * @param $name
   *   The name to be printed.
   *
   * @return
   *   A string representing page content.
   */
  public function demoPage($name) {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name!', array('@name' => $name)),
    );
    return $build;
  }
}
