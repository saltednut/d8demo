<?php
/**
 * @file
 * Contains \Drupal\demo3\Controller\OtherController.
 */

namespace Drupal\demo3\Controller;

/**
 * Controller routines for demo routes.
 */
class OtherController {

  /**
   * Return the currently active global container.
   */
  private function container() {
    return \Drupal::getContainer();
  }

  /**
   * Return the page, calling the container() method within.
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
