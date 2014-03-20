<?php
/**
 * @file
 * Contains \Drupal\octocat\Controller\OctoCatController.
 */

namespace Drupal\octocat\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for the dynamic routes.
 */
class OctoCatController {

  /**
   * Route callable method.
   *
   * @return
   *   A string representing page content.
   */
  public function add(Request $request, $type) {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Placeholder for @type OctoCat form', array('@type' => $type)),
    );
    return $build;
  }

}
