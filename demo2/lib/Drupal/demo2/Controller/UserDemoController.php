<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\UserDemoController.
 */

namespace Drupal\demo2\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller that extends ControllerBase.
 */
class UserDemoController extends ControllerBase {

  public function demoPage() {
    // Get the current user object.
    $user = $this->currentUser();
    // Say "Hello, [username]!"
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name!', array('@name' => $user->name)),
    );
    return $build;
  }
}

