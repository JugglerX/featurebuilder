<?php
function ds_va_fullwidth() {
  return array(
    'label' => t('VA Fullwidth'),
    'regions' => array(
      'hero' => t('Hero'),
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'section' => t('Strip One'),
    ),
    // Add this line if there is a default css file.
    'css' => FALSE,
    // Add this line if you're using DS 2.x for icon preview
    // 'image' => TRUE,
  );
}
?>
