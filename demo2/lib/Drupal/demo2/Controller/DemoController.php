<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\DemoController.
 */

namespace Drupal\demo2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller that accepts an argument.
 */
class DemoController {

  public function demoPage($name) {
    // Say "Hello, [name]!"
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name!', array('@name' => $name)),
    );
    return $build;
  }
}
