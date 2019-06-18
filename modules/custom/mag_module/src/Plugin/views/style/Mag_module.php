<?php

namespace Drupal\mag_module\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list of years and months
 * in reverse chronological order linked to content.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mag_module",
 *   title = @Translation("Magellium Module"),
 *   help = @Translation("Render a list of years and months in reverse chronological order linked to content."),
 *   display_types = { "normal" }
 * )
 */
class Mag_module extends StylePluginBase {

    // public function magVoir(){
    //     return [
    //         '#theme' => 'mag-list',
    //         '#items' => $heros,
    //         '#title' =>$this->t('Our wonderful heroes list from view')
    //     ];
    // }
}
