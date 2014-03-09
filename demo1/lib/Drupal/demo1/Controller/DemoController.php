<?php
/**
 * @file
 * Contains \Drupal\demo1\Controller\DemoController.
 */

namespace Drupal\demo1\Controller;

/**
 * Basic Controller for the demo route.
 */
class DemoController {

  public function demoPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, world!'),
    );
    return $build;
  }

}

