<?php
/*
*  Mybooking Demos
*  ---------------
*/

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'           => 'Pro Rentacar Demo Import', // The name of the demo
      'categories'                 => array( 'Rentacar' ), // Category tab where you want to show
      'import_file_url'            => 'https://pro-rentacar.mybookingcloud.com/wp-content/demo-test/content.xml', // Content file URL
      'import_widget_file_url'     => 'https://pro-rentacar.mybookingcloud.com/wp-content/demo-test/widgets.json', // Widgets file URL
      'import_customizer_file_url' => 'https://pro-rentacar.mybookingcloud.com/wp-content/demo-test/customizer.dat', // Customizer settings file URL
      'import_preview_image_url'   => 'https://pro-rentacar.mybookingcloud.com/wp-content/demo-test/preview.png', // Preview image URL
      'import_notice'              => __( 'Solo para testing!', 'mybooking' ), // Message shown before start importing
      'preview_url'                => 'https://pro-rentacar.mybookingcloud.com', // Demo URL
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );
