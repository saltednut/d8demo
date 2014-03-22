<?php
/**
 * @file
 * Contains \Drupal\octocat\Routing\OctoCatRoutes.
 */

namespace Drupal\octocat\Routing;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Route;

class OctoCatRoutes implements ContainerInjectionInterface {

  protected $configFactory;

  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->configFactory = $config_factory;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('config.factory'));
  }

  public function getOctoCats() {
    return $this->configFactory->get('octocat.settings')->get('octocats');
  }

  public function routes() {
    $routes = array();
    foreach ($this->getOctoCats() as $type) {
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
