<?php
/**
 * @file
 * Contains Configuration Form for D8cards module.
 */

namespace Drupal\d8cards\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration Form.
 */
class ConfigurationForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'configurationform';
  }

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return ['d8cards.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('d8cards.settings');

    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#default_value' => $config->get('title'),
    );
    $form['description'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Description'),
      '#default_value' => $config->get('description'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('d8cards.settings');
    $config->set('title', $form_state->getValue('title'));
    $config->set('description', $form_state->getValue('description'));
    $config->save();

    parent::submitForm($form, $form_state);
  }

}
