<?php

/**
 * @file
 * Display Suite Page Detail configuration.
 */

function ds_page_layout() {
  return array(
    'label' => t('Page Detail Layout'),
    'regions' => array(
      'left' => t('Left'),
      'body' => t('Body'),
      'bottom' => t('Bottom'),

    ),
  );
}
