<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\DemoController.
 */

namespace Drupal\demo2\Controller;

/**
 * Controller that accepts an argument.
 */
class DemoController {

  public function demoPage($name) {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name!', array('@name' => $name)),
    );
    return $build;
  }
}
