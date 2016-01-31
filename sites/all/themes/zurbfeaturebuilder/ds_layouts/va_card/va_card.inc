<?php
function ds_va_card() {
  return array(
    'label' => t('VA Card'),
    'regions' => array(
      'top' => t('Top'),
      'middle' => t('Middle'),
      'bottom' => t('Bottom'),
    ),
    // Add this line if there is a default css file.
    'css' => FALSE,
    // Add this line if you're using DS 2.x for icon preview
    // 'image' => TRUE,
  );
}
?>
