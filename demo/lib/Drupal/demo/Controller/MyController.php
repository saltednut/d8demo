<?php

namespace Drupal\demo\Controller;

class MyController {

  private function text() {
    return t('Hello, world!');
  }
  
  public function page() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->text(),
    );
  }

}
