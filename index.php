<?php get_header(); ?>

<div id="first-box" class="holder dest-container section">
  <div class="show-title content">
    <h1> Lorem ipsum </h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper iaculis nibh in placerat. Integer rutrum, turpis ut rutrum rutrum, lorem ipsum sagittis mi, et condimentum tortor mi sed mi. Sed quis auctor nibh. Curabitur aliquet porttitor arcu vel rutrum. Nulla facilisi. Phasellus a massa ut diam interdum varius sed non augue. Nullam vel enim sed mauris tempor elementum et sed diam.  </p>
  </div>
  <div class="arrow-to-down">
    <i class="fa fa-arrow-down"></i>
  </div>
</div>
<!-- endShowTime -->
<div id="body-site">
  <!-- Projects -->
  <div id="projects-box" class="holder">
    <div class="content">
      <div class="content-box">
        <div class="section-title">
          <h2> <i class="fa fa-pencil"></i> Lorem ipsum </h2>
        </div>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper iaculis nibh in placerat. Integer rutrum, turpis ut rutrum rutrum, lorem ipsum sagittis mi, et condimentum tortor mi sed mi. Sed quis auctor nibh. Curabitur aliquet porttitor arcu vel rutrum. Nulla facilisi. Phasellus a massa ut diam interdum varius sed non augue. Nullam vel enim sed mauris tempor elementum et sed diam.  </p>
      </div>
      <div id="box-holders" ng-controller="show-projects">
        <!-- Boxs -->
        <div class="box" ng-repeat="box in boxes">
          <img src="{{box.img}}" />
          <div class="box-content">
            <p> {{box.comment}} </p>
          </div>
        </div>
        <!-- endBoxs -->
      </div>
    </div>
    <div class="sign-icon-position">
      <div class="sign-icon projects-sign">
        <i class="fa fa-pencil"></i>
      </div>
    </div>
  </div>
  <!-- end -->
  <!-- sobre -->
  <div id="about-box" class="holder">
    <div class="content">

    </div>
  </div>
  <!-- endSobre -->
  <!-- form -->
  <div id="form-box" class="holder dest-container">
    <div class="content">
      <form action="#" method="post">
        <h2> Contact </h2>
        <div>
          <label> <i class="fa fa-user"></i> </label>
          <input type="text" placeholder="Nome" name="nome" />
        </div>
        <div>
          <label> <i class="fa fa-at"></i> </label>
          <input type="text" placeholder="Email" name="nome" />
        </div>
        <div id="msg-position">
          <p> <i class="fa fa-envelope"></i> </p>
          <textarea placeholder="Msg" name="msg"></textarea>
        </div>
        <button id="sendInfo"> <i class="fa fa-arrow-right"></i> Enviar Mensagem </button>
      </form>
    </div>
    <div class="sign-icon-position">
      <div class="sign-icon form-sign">
        <i class="fa fa-envelope"></i>
      </div>
    </div>
  </div>
  <!-- endForm -->

<?php get_footer(); ?>
