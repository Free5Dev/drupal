<?php 

namespace Drupal\self\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Self Controller
 */
class SelfController extends ControllerBase{

    /**
     * function content
     */
    public function content(){
        $technos = [
            ['techo' =>'Html5-Css3', 'type' => 'Front'],
            ['techo' =>'Js-Jquery', 'type' => 'Front JS'],
            ['techo' =>'Drupal-Wordpress', 'type' => 'CMS'],
            ['techo' =>'Symfony-Laravel', 'type' => 'Backend'],
        ];
        $table = [
            '#type' => 'table',
            '#header' => [
                $this->t('Techno'),
                $this->t('Type')
            ]
        ];
        foreach($technos as $techno){
            $table [] = [
                'name' => [
                    '#type' => 'markup',
                    '#markup' => $techno['techo']
                ],
                'type' => [
                    '#type' => 'markup',
                    '#markup' => $techno['type']
                ],

            ];
        }
        return $table;
    }
}