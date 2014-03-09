<?php
/**
 * @file
 * Contains \Drupal\demo3\Controller\DemoController.
 */

namespace Drupal\demo3\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for demo routes.
 */
class DemoController implements ContainerInjectionInterface {

  protected function __construct($database) {
    $this->database = $database;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('database'));
  }

  public function demoPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello again, world.'),
    );
    return $build;
  }

}

