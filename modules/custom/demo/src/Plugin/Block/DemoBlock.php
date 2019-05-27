<?php

namespace Drupal\demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "demo_block",
 *   admin_label = @Translation("Another Block Hello World"),
 *   category = @Translation("Hello World"),
 * )
 */
class DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => t('Hello,  '.$this->configuration['block_firstname'].'!'),
    );
  }

   /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    // $form = parent::blockForm($form, $form_state);

    // $config = $this->getConfiguration();

    $form['block_configuration'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Firstname'),
        '#description' => $this->t('Enter yout firstname'),
        '#default_value' => $this->configuration['block_firstname'],
      );

    return $form;
  }

  public function defaultConfiguration(){
      return array(
          'block_firstname' => 'world',
      );
  }

   /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    // parent::blockSubmit($form, $form_state);
    // $values = $form_state->getValues();
    $this->configuration['block_firstname'] = $form_state->getValue('block_configuration');
  }


}