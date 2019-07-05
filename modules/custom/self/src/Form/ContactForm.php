<?php 

namespace Drupal\self\Form;

use Drupal\Core\Form\FormBase;

use Drupal\Core\Form\FormStateInterface;

/**
 * build contact form
 */
class ContactForm extends FormBase{

    /**
     * Idendifiant du formulaire
     * {@inheritdoc}
     */
    public function getFormId(){

        return 'contact_form';
    }
    /**
     * construction du formulaire
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Nom'),
            // '#required' => True
        ];
        $form['email'] = [
            '#type' => 'email',
            '#title' =>$this->t('Email'),
            '#required' =>TRUE
        ];
        $form['object'] = [
            '#type' =>'textfield',
            '#title' => $this->t('Object'),
            // '#required' => TRUE
        ];
        $form['message']  = [
            '#type' =>'textarea',
            '#title' =>$this->t('message'),
            // '#required' =>TRUE
        ];
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' =>$this->t('Soumettre')
        ];

       // $form['#theme'] = 'contact_form';

        // return [
        //     '#theme' => 'contact_form',
        //     '#form' => $form,
        //     '#title' => $this->t('This form from the twig template hhaha')
        // ];

        return $form;

    }
    /**
     * Validation du formulaire
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state){
        if(empty($form_state->getValue('name'))){
            $form_state->setErrorByName('name', $this->t('Please enter your name...'));
        }
        if(empty($form_state->getValue('object'))){
            $form_state->setErrorByName('object', $this->t('Please enter your Object...'));
        }
        if(empty($form_state->getValue('message'))){
            $form_state->setErrorByName('message', $this->t('Please enter your Message...'));
        }
        
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        // instantiation de la connexion à la bdd
        $connection= \Drupal::database();
        // requete d'insertion à la bdd
        $result = $connection->insert('contact')
        ->fields([
            'name' => $form_state->getValue('name'),
            'email' => $form_state->getValue('email'),
            'object' => $form_state->getValue('object'),
            'message' => $form_state->getValue('message')
        ])
        ->execute();
        // var_dump($result);
        // die();
        //drupal_set_message($form_state->getValue('name')." ".$form_state->getValue('email')." ".$form_state->getValue('object')." ".$form_state->getValue('message'));
        drupal_set_message('Message posté avec succès');
       
    }
    

}