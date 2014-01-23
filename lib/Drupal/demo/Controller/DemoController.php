<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\DemoController.
 */

namespace Drupal\demo\Controller;

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
      '#markup' => t('Hello OOP.'),
    );
    return $build;
  }

}

