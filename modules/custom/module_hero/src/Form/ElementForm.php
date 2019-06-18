<?php 

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Element Form
 */
class ElementForm extends FormBase{

    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'module_hero.elementform';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        $form['copy'] = array(
            '#type' => 'checkbox',
            '#title' => $this
              ->t('Send me a copy'),
          );
          $form['color'] = array(
            '#type' => 'color',
            '#title' => $this
              ->t('Color'),
            '#default_value' => '#ffffff',
          );
          $form['email'] = array(
            '#type' => 'email',
            '#title' => $this->t('Email'),
            '#pattern' => '@example.com',
          );
          $form['submit'] = [
              '#type' => 'submit',
              '#value' => $this->t('Who Will Wine ?')
          ];
        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        dsm($form_state->getValues());
    }
}