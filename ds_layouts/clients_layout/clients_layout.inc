<?php

/**
 * @file
 * Display Suite Product detail configuration.
 */

function ds_clients_layout() {
  return array(
    'label' => t('Clients Layout'),
    'regions' => array(
      'top' => t('Top'),
	  'name'=> t('Name'),
	  'position'=> t('Position'),
      'body' => t('Body'),
      'bottom' => t('Bottom'),

    ),
  );
}
