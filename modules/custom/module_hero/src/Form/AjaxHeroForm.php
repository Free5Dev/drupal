<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
/**
 * Implements an example form.
 */
class AjaxHeroForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'module_hero.ajaxheroform';
  }
  /**
   * {@inheritdoc}
  */
  public function buildForm(array $form, FormStateInterface $form_state) {
      $form['message'] = [
          '#type' => 'markup',
          '#markup' => '<div class="result_message"></div>'
      ];
    $form['rival_1'] = [
        '#type' => 'textfield',
        '#title' => 'Rival One'
    ];
    $form['rival_2'] = [
        '#type' => 'textfield',
        '#title' => 'Rival Two'
    ];
    $form['submit'] = [
        '#type' => 'submit',
        '#value' => $this->t('Who will win ?'),
        '#ajax' => [
          'callback' => '::setMessage',
        ]
    ];
    return $form;
  }
  /** 
   * Ajax response 
   */
  public function setMessage(array &$form, FormStateInterface $form_state){
    $winner = rand(1,2);
    $responce = new AjaxResponse();
    $responce->addCommand(
      new HtmlCommand(
        '.result_message' ,
        'The winner is '.$form_state->getValue('rival_'.$winner) 
      )
    );
    // return response;
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    //   drupal_set_message("djdj");
  }
}