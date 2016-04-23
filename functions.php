<?php
  /*
    * Todas as funções de ajax e chamas de arquivos, serão colocadas aqui!
    * @package: Portifolio
  */

  function scripts_page(){
    $directory = get_template_directory_uri();

    ## jQuery core ---
    wp_enqueue_script("jquery",$directory."/assets/vendor/jquery/dist/jquery.min.js",false);
    wp_register_script("jquery",$directory."/assets/vendor/jquery/dist/jquery.min.js");

    wp_enqueue_script("script-core",$directory."/assets/js/script.min.js",false);

    ## Apenas para desenvolvimento
    wp_enqueue_script("livereload","http://localhost:460/livereload.js",false);
  }
  add_action("wp_enqueue_scripts","scripts_page");

?>
