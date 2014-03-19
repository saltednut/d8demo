<?php

namespace Drupal\demo\Controller;

use Drupal\demo\Controller\MyController;

class FinalController extends MyController {

  final private function text() {
    return t('Goodbye, cruel world!');
  }
  
  final public function page() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->text(),
    );
  }

}
