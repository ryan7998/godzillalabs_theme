<?php

/**
 * @file
 * Display Suite Product detail configuration.
 */

function ds_insidenode_layout() {
  return array(
    'label' => t('Inside Node Layout'),
    'regions' => array(
      'top' => t('Top'),
      'body' => t('Body'),
      'bottom' => t('Bottom'),

    ),
  );
}
