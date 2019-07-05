<?php 

namespace Drupal\self\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provider a 'Self' Block
 * @Block(
 *  id = "self_block",
 *  admin_label = @Translation("Self block")
 * )
 */
class SelfBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build(){

        return [
            '#type' => 'markup',
            '#markup' => $this->t("Self Block ")
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration(){

        $default_config = \Drupal::config('self.settings');

        return [
            'self_block_name' => $default_config->get('self.name'),
        ];
    }
}