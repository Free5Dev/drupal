<?php 

namespace Drupal\mag_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implement mag_form
 */
class MagForm extends FormBase{
    /**
     * {@inheritdoc}
    */
   public function getFormId(){

        return 'mag_module_form';
   }
   /**
     * {@inheritdoc}
     */
   public function buildForm(array $form, FormStateInterface $form_state){

        $form['rival_1'] = [
            '#type' => 'textfield',
            '#title' => 'Rival 1'
        ];
        $form['rival_2'] =[
            '#type' => 'textfield',
            '#title' => 'Rival 2'
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => 'submit' 
        ];
        return $form;
   }
   /**
    * {@inheritdoc}
    */
   public function submitForm(array &$form, FormStateInterface $form_state){
    //    dsm($form_state->getValues());
        drupal_set_message('Rival 1: '.$form_state->getValue('rival_1').' et Rival 2'.$form_state->getValue('rival_2'));
   }
}