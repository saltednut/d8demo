<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\DemoController.
 */

namespace Drupal\demo2\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for demo routes.
 */
class DemoController implements ContainerInjectionInterface {

  public static function create(ContainerInterface $container) {
    return new static($container->get('module_handler'));
  }

  public function demoPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello again, world.'),
    );
    return $build;
  }

}

