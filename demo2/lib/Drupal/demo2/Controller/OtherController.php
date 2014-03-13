<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\OtherController.
 */

namespace Drupal\demo2\Controller;

/**
 * Controller routines for demo routes.
 */
class OtherController {

  /**
   * Return the currently active global container.
   */
  private function container() {
    // This is not proper DI.
    return \Drupal::getContainer();
  }

  /**
   * Route callable method.
   *
   * @return
   *   A string representing page content.
   */
  public function demoPage() {
    $name = $this->container()->get('current_user')->name;
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Yep, you\'re still @name.', array('@name' => $name)),
    );
    return $build;
  }
}
