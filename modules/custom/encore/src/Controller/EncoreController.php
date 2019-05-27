<?php

namespace Drupal\encore\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class EncoreController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function encore() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Encore'),
    ];
  }

}