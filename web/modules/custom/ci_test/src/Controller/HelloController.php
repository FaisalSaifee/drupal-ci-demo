<?php

namespace Drupal\ci_test\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides a simple controller for testing CI.
 */
class HelloController extends ControllerBase {

  /**
   * Simple Hello World page.
   *
   * @return array
   *   A renderable array with markup.
   */
  public function hello() {
    return [
      '#markup' => $this->t('Hello! This is a CI test page.'),
    ];
  }

}
