<?php 

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand ;

/**
 * Implement form ajax 
 */

 class AjaxForm extends FormBase{

    /**
     * {@inheritdoc}
     */
    public function getFormId(){

        return 'module_hero.ajaxform';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['message'] = [
            '#type' => 'markup',
            '#markup' =>'<div class="result_message"></div>'
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
            '#value' => $this->t('Who Will Wine ?'),
            '#ajax' =>[
                'callback' =>'::setMessage'
            ]
        ];
        return $form;
    }
    /**
     * setMessage
     */
    public function setMessage(array &$form, FormStateInterface $form_state){
        $winner = rand(1, 2);
        $reponse = new AjaxResponse();
        $reponse->addCommand(
            new HtmlCommand(
                '.result_message', 
                'The winner is '.$form_state->getValue('rival_'.$winner)
            )
        );
        return $reponse;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        dsm($form_state->getValues());
    }
 }