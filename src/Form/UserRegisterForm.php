<?php

namespace Drupal\multi_user_register\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class UserRegisterForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'multi_user_register_register_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'multi_user_register.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('multi_user_register.settings');
    $form['site1'] = array(
      '#type' => 'details',
      '#open' => TRUE,
      '#title' => 'Site 1 Details',
    );
    $form['site1']['site1_url'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 1 URL'),
      '#default_value' => $config->get('site1_url'),
    );
    $form['site1']['site1_username'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 1 Username'),
      '#default_value' => $config->get('site1_username'),
    );
    $form['site1']['site1_password'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 1 Password'),
      '#default_value' => $config->get('site1_password'),
    );
    $form['site2'] = array(
      '#type' => 'details',
      '#open' => TRUE,
      '#title' => 'Site 2 Details',
    );
    $form['site2']['site2_url'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 2 URL'),
      '#default_value' => $config->get('site2_url'),
    );
    $form['site2']['site2_username'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 2 Username'),
      '#default_value' => $config->get('site2_username'),
    );
    $form['site2']['site2_password'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 2 Password'),
      '#default_value' => $config->get('site2_password'),
    );
    $form['site3'] = array(
      '#type' => 'details',
      '#open' => TRUE,
      '#title' => 'Site 3 Details',
    );
    $form['site3']['site3_url'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 3 URL'),
      '#default_value' => $config->get('site3_url'),
    );
    $form['site3']['site3_username'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 3 Username'),
      '#default_value' => $config->get('site3_username'),
    );
    $form['site3']['site3_password'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Site 3 Password'),
      '#default_value' => $config->get('site3_password'),
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = \Drupal::service('config.factory')->getEditable('multi_user_register.settings');

    $config->set('site1_url', $form_state->getValue('site1_url'));
    $config->set('site1_username', $form_state->getValue('site1_username'));
    $config->set('site1_password', $form_state->getValue('site1_password'));

    $config->set('site2_basis_auth', $form_state->getValue('site2_basis_auth'));
    $config->set('site2_username', $form_state->getValue('site2_username'));
    $config->set('site2_password', $form_state->getValue('site2_password'));

    $config->set('site3_url', $form_state->getValue('site3_url'));
    $config->set('site3_username', $form_state->getValue('site3_username'));
    $config->set('site3_password', $form_state->getValue('site3_password'));

    $config->save();

    parent::submitForm($form, $form_state);

  }

}
