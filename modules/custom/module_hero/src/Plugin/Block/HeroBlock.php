<?php 

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Providers a block called "Example hero block".
 *
 * @Block(
 *   id = "module_hero_hero",
 *   admin_label = @Translation("Example hero Block")
 * )
 */
class HeroBlock extends BlockBase{

    /**
   * {@inheritdoc}
   */
    public function build(){
        $heros = [
            ['hero_name' => 'Free5Dev', 'real_name' => 'David Banner'],
            ['hero_name' => 'Thor', 'real_name' => 'Thor Ordinson'],
            ['hero_name' => 'Iron Man', 'real_name' => 'Tony Stark'],
            ['hero_name' => 'Black Windows', 'real_name' => 'Matheuv Romanda'],
            ['hero_name' => 'Captain America', 'real_name' => 'Janes alaind']
            
        ];

        $table = [
            '#type' => 'table',
            '#header' => [
                $this->t('Hero name'),
                $this->t('Real name'),
            ]
        ];

        foreach($heros as $hero){
            $table[] = [
                'hero_name' =>[
                    '#type' =>'markup',
                    '#markup' => $hero['hero_name']
                ],
                'real_name' => [
                    '#type' =>'markup',
                    '#markup' => $hero['real_name'],
                ]
            ];
        }

        // return [
        //     '#type' => 'markup',
        //     '#markup' => $this->t('The output of our superheroes block.')
        // ];
        return $table;
    }
}
