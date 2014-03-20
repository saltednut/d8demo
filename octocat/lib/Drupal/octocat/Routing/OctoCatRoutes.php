<?php
/**
 * @file
 * Contains \Drupal\octocat\Routing\OctoCatRoutes.
 */

namespace Drupal\octocat\Routing;

use Symfony\Component\Routing\Route;

class OctoCatRoutes {

  public function routes() {
    $config = \Drupal::config('octocat.settings');
    $routes = array();
    foreach ($config->get('octocats') as $type) {
      $routes['octocat.page.' . $type] = new Route(
        '/octocat/' . $type,
        array(
          '_title' => t('@type', array('@type' => ucwords($type))),
          '_content' => '\Drupal\octocat\Controller\OctoCatController::page',
          'type' => $type,
        ),
        array(
          '_access' => 'TRUE',
        )
      );
    }
    return $routes;
  }

}
