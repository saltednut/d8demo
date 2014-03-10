<?php
/**
 * @file
 * Contains \Drupal\demo3\Controller\OtherController.
 */

namespace Drupal\demo3\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for demo routes.
 */
class OtherController implements ContainerInjectionInterface {

  /**
   * Must be implemented although not really being used.
   */
  public static function create(ContainerInterface $container) {
    return new static();
  }

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
