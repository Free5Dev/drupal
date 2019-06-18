<?php 

namespace Drupal\tardis\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list of years and months
 * in reverse chronological order linked to content.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mag",
 *   title = @Translation("Magellium"),
 *   help = @Translation("Render a list of years and months in reverse chronological order linked to content."),
 *   theme = "views_view_mag",
 *   display_types = { "normal" }
 * )
 */

class Mag extends StylePluginBase{
    /**
   * {@inheritdoc}
   */
    public function afficheMag(){
        return [
            '#title' => 'markup',
            '#markup' => $this->t('View')
        ];
    }
}
