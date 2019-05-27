<?php 

namespace Drupal\encore\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class EncoreForm extends FormBase{

    public function getFormId(){
        return 'encore_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state){

        $form['encore_title'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Titre'),
            '#maxlength' => 255,
            '#default_value' => '',
            '#required' => false
        );
        $form['encore_email'] = array(
            '#type' => 'email',
            '#title' => $this->t('Email'),
            '#default_value' => '',
            '#required' => true
        );
        $form['encore_message'] = array(
            '#type' => 'textarea',
            '#title' => $this->t('Votre Message'),
            '#default_value' =>'',
            '#required' => false
        );
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Submit')
        );
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state){

        dsm($form_state->getValues());
        $email = $form_state->getValue('encore_email');
        $msg_value= "Votre email à bien été envoyé . Vous avez reçu une confirmation à ".$email;
        drupal_set_message($msg_value); 
        // connection à la bdd
        $fields = array(
            // 'nom du champs' => 'valeur formulaire'
            'titre' => $form_state->getValue('encore_title'),
            'email' => $form_state->getValue('encore_email'),
            'contact' => $form_state->getValue('encore_message'),
          );
          $connection = \Drupal::database()
            ->insert('contact')
            ->fields($fields)
            ->execute();
        var_dump($connection);
    }
}
