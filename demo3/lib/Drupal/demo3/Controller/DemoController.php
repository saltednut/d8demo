<?php
/**
 * @file
 * Contains \Drupal\demo3\Controller\DemoController.
 */

namespace Drupal\demo3\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller that extends ControllerBase.
 */
class DemoController extends ControllerBase {

  /**
   * Route callable method.
   *
   * @return
   *   A string representing page content.
   */
  public function demoPage() {
    $user = $this->currentUser();
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name... Now you\'ve got it!', array('@name' => $user->name)),
    );
    return $build;
  }
}
