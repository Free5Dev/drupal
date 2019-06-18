<?php 

namespace Drupal\mag_module\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * Controller de Magellium
 */
class MagController extends ControllerBase{

    function magList(){
        $heros = [
            ['name' => 'Mama'],
            ['name' => 'Sas'],
            ['name' => 'Saidou']
        ];
        // $ourHeroes = '';
        // foreach($heros as $hero){
        //     $ourHeroes .= '<li>'.$hero['name'].'</li>';
        // }
        return [
            // '#type' => 'markup',
            // '#markup' => '<ol>'.$ourHeroes.'</ol>'
            '#theme' => 'mag-list',
            '#items' => $heros,
            '#title' =>$this->t('Our wonderful heroes list')
        ];
    }
}