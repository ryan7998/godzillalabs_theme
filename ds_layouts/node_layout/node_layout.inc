<?php

/**
 * @file
 * Display Suite Product detail configuration.
 */

function ds_node_layout() {
  return array(
    'label' => t('Node Layout'),
    'regions' => array(
      'top' => t('Top'),
      'body' => t('Body'),
      'bottom' => t('Bottom'),

    ),
  );
}
