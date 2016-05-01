<!DOCTYPE html>
<html ng-app="app">
  <head>
    <meta charset="utf-8">
    <title> <?php echo bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
  </head>
  <body>
  <!-- menu site -->
  <header>
    <nav class="holder" id="top-menu">
      <ul id="opt-left">
        <li class="logo">Portifa</li>
        <li>Projetos</li>
        <li>Contato</li>
      </ul>
      <ul id="opt-right">
        <li> <button id="search-site"><i class="fa fa-search"></i></button></li>
      </ul>
    </nav>
  </header>
  <!-- menuEnd -->
