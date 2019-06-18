<?php 

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * This is our Hero controller
 */
class HeroController extends ControllerBase{

    public function heroList(){
            
        $heros = [
                ['name' => 'Mama Diallo'],
                ['name' => 'Thierno Soumah'],
                ['name' => 'Sas Soumah'],
                ['name' => 'Alkaly'],
                ['name' => 'Aboubacar'],
                
            ];
        $ourHeros = '';
        foreach($heros as $hero){
                $ourHeros .= '<li>'.$hero['name'].'</li>';
            }

        return [
                '#type' => 'markup',
                '#markup' =>'<h4>'.$this->t('There are the best voted horeos ').'</h4><ol>'.$ourHeros.'</ol>',
                // '#theme' => 'hero_list',
                // '#items' => $heros,
                // '#title' =>$this->t('Our wonderful heroes list')
        ];
    }
}
