<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once "../../inc/header.php";
  include_once "../../inc/import.php";
  getStyles("CM 4 I || Papers", "../../");
  ?>
</head>

<body>
  <div class="loader-wrapper">
    <img src="../images/loading.gif" alt="" />
  </div>
  <!-- Header/Hero -->
  <section id="hero">
    <?php

    require_once "../../inc/header.php";
    navbar(
      [
        "Assignment" => "../Assignments",
        "Paper" => ""
      ],
      "../../"
    );

    ?>
    <div id="hero-div">
      <div class="hero-div-main">
        <h1 class="hero-h1">Papers</h1>
        <div class="hero-div-inner">
          <h3 class="hero-h3-1">CM </h3>
          <span></span>
          <h3 class="hero-h3-1">4 I</h3>
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

  <!-- Papers -->
  <section id="papers">
    <div class="papers-head section-head">
      <h1 class="p-h1 sy-h1">Solved Papers</h1>
    </div>
    <div class="papers-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">Java Programming (JPR - 22412)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22412-2022-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1JCobEDRz99tHCdRRT197_eSInz5CvK0t/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22412-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/13xKhOiLczh2LKSWsr7fm9zeWfZ-Q5tCN/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>22412-2019-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1c-AsqWsiVTgoCxzOdlXLsOgIEU1ltdaZ/view?usp=drive_link">Download</a>
            </td>
          </tr>

        </tbody>
      </table>
      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">Software Engineering (SEN - 22413)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22413-2019-Summer</td>
            <td>
              <a target="_blank"
                href="hhttps://drive.google.com/file/d/1i9vkFiBFu_Xj4BZZPwIr0_fr6V9CVNEE/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22413-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1UotgtPJMZpr_UUR5Ijv9v4ihOkJkcWXh/view?usp=drive_link">Download</a>
            </td>
          </tr>

        </tbody>
      </table>

      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">Data Communication and Computer Network (DCC - 22414)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22414-2019-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1urJE74MxzWq0E5RHxiNEU9Lb9oYp-VTr/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22414-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1VqVn2zMaBk_sYx4wv8I-ctoG04C7Grb7/view?usp=drive_link">Download</a>
            </td>
          </tr>


        </tbody>
      </table>
      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">Microprocessors (MIC - 22415)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22415-2019-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1bToCh3FQ7obdd3xxCWsyW_OPhHjbYOja/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22415-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1zPg9Hd3XNEyNv6agok0iRvaoPqUDUZFt/view?usp=drive_link">Download</a>
            </td>
          </tr>


        </tbody>
      </table>


    </div>
  </section>

  <!-- Footer -->

  <?php
  getFooter();
  getScript("../../"); ?>
</body>

</html>