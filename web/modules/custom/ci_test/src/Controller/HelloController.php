<?php

namespace Drupal\ci_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  /**
   * Simple Hello World page.
   */
  public function hello() {
    return [
      '#markup' => $this->t('Hello! This is a CI test page.'),
    ];
  }

}
