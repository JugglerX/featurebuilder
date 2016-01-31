<?php
function ds_va_3col_stacked() {
  return array(
    'label' => t('VA Three Column Stacked'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'middle' => t('Middle'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
    // Add this line if there is a default css file.
    'css' => FALSE,
    // Add this line if you're using DS 2.x for icon preview
    // 'image' => TRUE,
  );
}
?>
