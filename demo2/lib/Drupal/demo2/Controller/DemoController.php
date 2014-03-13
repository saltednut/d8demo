<?php
/**
 * @file
 * Contains \Drupal\demo2\Controller\DemoController.
 */

namespace Drupal\demo2\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Controller routines for demo routes.
 */
class DemoController implements ContainerInjectionInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * Constructs a MessageFormController object.
   *
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   */
  protected function __construct(AccountInterface $current_user) {
    $this->currentUser = $current_user;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('current_user'));
  }

  /**
   * Route callable method.
   *
   * @return
   *   A string representing page content.
   */
  public function demoPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello, @name.', array('@name' => $this->currentUser->name)),
    );
    return $build;
  }
}
