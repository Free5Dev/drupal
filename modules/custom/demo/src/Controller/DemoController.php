<?php

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Defines HelloController class.
 */
class DemoController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function description() {
    return [
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    ];
  }

  public function requests(){
    //   query
      $query = \Drupal::entityQuery('node');
      $nids = $query->execute();

      $query = \Drupal::entityQuery('user');
      $uids = $query->execute();

      $query = \Drupal::entityQuery('comment');
      $cids = $query->execute();

      $query = \Drupal::entityQuery('node')
                ->condition('type', 'horloge')
                // ->conditon('uid', 1)
                // ->condition('title', 'Webmaster', 'CONSTAINS')
                // ->condition('field_horloge_mecanique.value', 1)
                ;
      $filtered_nids = $query->execute();
        // dsm($nids);
        
        $markup = 'Node ids:'.implode(', ', $nids);
        $markup .= '<br/>User ids:'.implode(', ', $uids);

        $markup .= '<br/>Comment ids:'.implode(', ', $cids);
        $markup .= '<br/>Filterd nod  ids:'.implode(', ', $filtered_nids);


        $node = Node::load(reset($filtered_nids));
        $markup .="<br/><br/>";
        $markup .='Corps du premier noeud:'.$node->body->value;


      $build = array(
          '#type' => 'markup',
          '#markup' => $markup, 
      );
      return $build;
  }

}