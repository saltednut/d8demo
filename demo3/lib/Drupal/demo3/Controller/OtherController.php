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

  public static function create(ContainerInterface $container) {
    return new static();
  }

  private function container() {
    return \Drupal::getContainer();
  }

  public function demoPage() {
    $name = $this->container()->get('current_user')->name;
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Yep, you\'re still @name.', array('@name' => $name)),
    );
    return $build;
  }
}
