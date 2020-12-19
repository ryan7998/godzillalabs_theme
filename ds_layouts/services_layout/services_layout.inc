<?php

/**
 * @file
 * Display Suite Product detail configuration.
 */

function ds_services_layout() {
  return array(
    'label' => t('Service Node Layout'),
    'regions' => array(
      'top' => t('Top'),
      'body' => t('Body'),
      'bottom' => t('Bottom'),

    ),
  );
}
