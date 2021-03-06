<?php

/**
 * @file
 * Contains \Drupal\d8cards\Form\ContactEntityForm.
 */

namespace Drupal\d8cards\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Contact entity edit forms.
 *
 * @ingroup d8cards
 */
class ContactEntityForm extends ContentEntityForm {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\d8cards\Entity\ContactEntity */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Contact entity.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Contact entity.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.contact_entity.canonical', ['contact_entity' => $entity->id()]);
  }

}
