<?php
/**
 * @file
 * Contains \Drupal\octocat\Routing\OctoCatRoutes.
 */

namespace Drupal\octocat\Routing;

use Symfony\Component\Routing\Route;

class OctoCatRoutes {

  public function routes() {
    $routes = array();
    foreach (octocat_get_types() as $type) {
      $routes['octocat.add.' . $type] = new Route(
        '/octocat/add/' . $type,
        array(
          '_title' => t('Add @type', array('@type' => ucwords($type))),
          '_content' => '\Drupal\octocat\Controller\OctoCatController::add',
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
