<?php 

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hero' Block.
 *
 * @Block(
 *   id = "hero_block",
 *   admin_label = @Translation("Hero block"),
 * )
 */
class HeroBlock extends BlockBase{
    
    /**
     * {@inheritdoc}
     */
    public function build(){
    $heros = [
        ['name' => 'Web', 'surname' => 'Backend'],
        ['name' => 'Web', 'surname' => 'Front'],
        ['name' => 'Web ', 'surname' => 'FullStack'],
        ['name' => 'Web', 'surname' => 'Reponse'],
        ['name' => 'Web', 'surname' => 'Media Queries'],
    
    ];
    $table = [
        '#type' => 'table',
        '#header' => [
            $this->t('name'),
                $this->t('surname')
        ]
    ];
    foreach($heros as $hero){
        $table [] = [
            'name' => [
                '#type' => 'markup',
                '#markup' => $hero['name']
            ],
            'surname' => [
                '#type' => 'markup',
                '#markup' => $hero['surname']
            ]
        ];
    }
    return $table;
    }
}