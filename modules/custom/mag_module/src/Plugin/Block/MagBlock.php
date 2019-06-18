<?php

namespace Drupal\mag_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Magellium' Block.
 *
 * @Block(
 *   id = "mag_module_block",
 *   admin_label = @Translation("Magellium  block"),
 * )
 */
class MagBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $heros = [
        ['name' => 'Alian', 'real_name' => 'Spiderman'],
        ['name' => 'Gassama', 'real_name' => 'Mamadou'],
        ['name' => 'Blase', 'real_name' => 'Glissan'],
    ];
    
    $table = [
        '#type'  =>'table',
        '#header' =>[
            $this->t('Name'),
            $this->t('Real Name')
        ]
    ];

    foreach($heros as  $hero){
        $table []=[
            'name' =>[
                '#type' => 'markup',
                '#markup' => $hero['name'],
            ],
            'real_name' => [
                '#type' => 'markup',
                '#markup' => $hero['real_name']
            ]
        ];
    }
    return $table;
    // return array(
    //   '#markup' => $this->t('Ceci, est un block Magellium....'),
    // );
  }

}