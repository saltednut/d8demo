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
   *   A theme array for Twig template.
   */
  public function page(Request $request, $type) {
    return array(
      '#theme' => 'octocat_page',
      '#type' => $type,
    );
  }

}
