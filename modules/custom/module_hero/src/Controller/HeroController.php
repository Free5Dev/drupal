<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HeroController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function heroList() {
    $heros = [
        ['name' => 'Free'],
        ['name' => 'Vlian'],
        ['name' => 'Zlin'],
        ['name' => 'Zozor'],
        ['name' => 'CaCaote'],
    ];
    // $ourHero = '';
    // foreach($heros as $hero){
    //     $ourHero .= '<li>'.$hero['name'].'</li>';
    // }
    return [
        //   '#type' => 'markup',
        //   '#markup' =>'<ol>'.$ourHero.'</ol>'
        '#theme' => 'module-hero',
        '#items' =>$heros,
        '#title' => $this->t('You\'r welcome in my template')
    ];
  }

}