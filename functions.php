<?php 

function haverim_css(){
    wp_register_style('haverim-style', get_template_directory_uri() . '/style.css', [], '1.0.0');
    wp_enqueue_style('haverim-style');
}
add_action('wp_enqueue_scripts', 'haverim_css','');


function my_cmb2_fields(){
    $cmb2 = new_cmb2_box([
        'id'=> 'front-page',
        'title' => 'Início',
        'object_type' => ['page'],
        'show_on' => ['key' => 'page-template', 'value' => 'page-inicio.php'],
    ]);
    $cmb2->add_field([
        'name' => 'logo',
        'id' => 'logo',
        'type' => 'text',
    ]);
    $cmb2->add_field([
        'name' => 'Saudações',
        'id' => 'greetings',
        'type' => 'text',
    ]);
}