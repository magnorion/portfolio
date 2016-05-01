<?php
  /*
    * Todas as funções de ajax e chamas de arquivos, serão colocadas aqui!
    * @package: Portifolio
  */

  function scripts_and_style_page(){
    $directory = get_template_directory_uri();

    ## Angular core
    wp_enqueue_script("angular",$directory."/assets/vendor/angular/angular.min.js",false);

    ## jQuery core
    wp_enqueue_script("jquery",$directory."/assets/vendor/jquery/dist/jquery.min.js",false);
    wp_register_script("jquery",$directory."/assets/vendor/jquery/dist/jquery.min.js");

    ## Font Awesome
    wp_enqueue_style("font-awesome",$directory."/assets/vendor/font-awesome/css/font-awesome.min.css");

    ## Todos os scripts do site
    wp_enqueue_script("script-core",$directory."/assets/js/script.min.js",false);

    ## Controller
    wp_enqueue_script("controller",$directory."/assets/js/controller.js",false);

    ## Style do site
    wp_enqueue_style("style-core",$directory."/style.css");

    ## Apenas para desenvolvimento
    wp_enqueue_script("livereload","http://localhost:460/livereload.js",false);
  }
  add_action("wp_enqueue_scripts","scripts_and_style_page");

?>
