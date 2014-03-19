<?php

namespace Drupal\demo\Access;

use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;

class UserIsAnonymousAccessCheck implements AccessCheckInterface {

  /**
   * {@inheritdoc}
   */
  public function applies(Route $route) {
    return $route->hasRequirement('_access_user_is_anonymous');
  }

  /**
   * Implements AccessCheckInterface::applies().
   */
  public function access(Route $route, Request $request, AccountInterface $account) {
    return (!$account->isAnonymous() ? static::DENY : static::ALLOW);
  }
}