<?php

namespace Drupal\demo\Controller;

use Drupal\demo\Controller\MyController;

class FinalController extends MyController {

  final public function page() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Goodbye, cruel world!'),
    );
  }

}
