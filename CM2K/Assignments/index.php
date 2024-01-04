<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once "../../inc/header.php";
  include_once "../../inc/import.php";
  getStyles("CM 2 K || Assignments", "../../");
  ?>
</head>

<body>
  <div class="loader-wrapper">
    <img src="../../images/loading.gif" alt="" />
  </div>
  <!-- Header/Hero -->
  <section id="hero">
    <?php

    require_once "../../inc/header.php";
    navbar(
      [
        "Assignment" => "",
        "Paper" => "../Papers"
      ],
      "../../"
    );

    ?>
    <div id="hero-div">
      <div class="hero-div-main">
        <h1 class="hero-h1">Assignments</h1>
        <div class="hero-div-inner">
          <h3 class="hero-h3-1">CM</h3>
          <span></span>
          <h3 class="hero-h3-1">2 K</h3>
        </div>
        <p>
          Polystudi is more than just a website, it's a movement. We're
          passionate about empowering polytechnic students to achieve their
          academic dreams. So, what are you waiting for? Join the Polystudi
          fam, crank up your learning curve, and watch your potential explode!
        </p>
      </div>
    </div>
  </section>
  <!-- Assignments -->
  <div id="assignments">
    <div class="assignments-head section-head">
      <h1 class="p-h1 sy-h1">Assignments</h1>
    </div>
    <div class="assignments-main">
      <div class="assignments-box">
        <h1>Sample Assignment No. 1</h1>
        <p>By example example</p>
        <a target="_blank" href="#" class="manual-btn">
          <span class="m-btn-c"><i class="fa fa-download"></i></span>
          <span class="m-btn-download">Download</span>
          <span class="m-btn-h">Click here</span>
        </a>
      </div>

    </div>
  </div>


  <!-- Footer -->

  <?php
  getFooter();
  getScript("../../"); ?>
</body>

</html>