<?php
/**
 * @file
 * Contains \Drupal\demo3\Controller\DemoController.
 */

namespace Drupal\demo3\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Controller routines for demo routes.
 */
class DemoController implements ContainerInjectionInterface {

  protected function __construct(AccountInterface $user) {
    $this->user = $user;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('current_user'));
  }

  public function demoPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello again, @name.', array('@name' => $this->user->name)),
    );
    return $build;
  }
}
