<?php 

namespace Drupal\demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactForm extends FormBase{

    /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'contact_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    

    $form['contact_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#maxlength' => 255,
      '#default_value' => '',
      '#required' => FALSE
    );
    $form['contact_email'] = array(
        '#type' => 'email',
        '#title' => $this->t('Email'),
        '#default_value' => '',
        '#required' => TRUE
    );
    $form['contact_message'] = array(
        '#type' => 'textarea',
        '#title' => $this->t('Your message'),
        '#description' => $this->t('Please add "Drupal" in this message'),
        '#default_value' => '',
        '#required' => TRUE
    );
    $form['submit'] = array(
        '#type' => 'submit',
        '#value' => t('Submit'),
    );
    return $form;
    
  }
  
   /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
      // connection bdd
    // $connection = \Drupal::database();
    // $query = \Drupal::entityQuery('contact');
    // $contact = $query->execute();
    // dsm($contact);
    dsm($form_state->getValues());
    $email_value = $form_state->getValue('contact_email');
    $msg = "Votre email à bien été envoyé . Vous avez reçu une confirmation à ".$email_value;
    drupal_set_message($msg);
    

  }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        // $msg_value = $form_state->getValue('contact_message');
        // if (!strpos($msg_value, 'Drupal')) {
        //     $form_state->setErrorByName('contact_message', $this->t('Please add "Drupal" in this message'));
        // }
    }


}
