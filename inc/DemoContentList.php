<?php
/*
*  Mybooking Demos
*  ---------------
*/

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'           => 'Rent a car', // The name of the demo
      'categories'                 => array( 'Rentacar' ), // Category tab where you want to show
      'local_import_file'            => trailingslashit(plugin_dir_path( __DIR__ ) ).'demos/rentacar/content.xml', // Content file URL
      'local_import_widget_file'     => trailingslashit(plugin_dir_path( __DIR__ ) ).'demos/rentacar/widgets.json', // Widgets file URL
      'local_import_customizer_file' => trailingslashit(plugin_dir_path( __DIR__ ) ).'demos/rentacar/customizer.dat', // Customizer settings file URL
  //    'import_preview_image_url'     => plugin_dir_url(__DIR__).'demos/rentacar/preview.png', // Preview image URL
      'import_preview_image_url' => 'https://pro-rentacar.mybookingcloud.com/wp-content/uploads/sites/24/2020/10/portada-alternativa-7.jpg',
      'import_notice'                => __( 'Rent a car', 'mybooking-importer' ), // Message shown before start importing
      'preview_url'                  => 'https://pro-rentacar.mybookingcloud.com' // Demo URL
    )
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );
