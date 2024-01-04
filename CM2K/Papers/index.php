<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once "../../inc/import.php";
  require_once "../../inc/header.php";
  getStyles("CM2k || Papers", "../../");
  ?>
</head>

<body>
  <div class="loader-wrapper">
    <img src="../../images/loading.gif" alt="" />
  </div>
  <!-- Header/Hero -->
  <section id="hero">
    <?php navbar(
      [
        "Assignment" => "../Assignments",
        "Paper" => ""
      ],
      "../../"
    ) ?>
    <div id="hero-div">
      <div class="hero-div-main">
        <h1 class="hero-h1">Papers</h1>
        <div class="hero-div-inner">
          <h3 class="hero-h3-1">CM </h3>
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

  <!-- Papers -->
  <section id="papers">
    <div class="papers-head section-head">
      <h1 class="p-h1 sy-h1">Solved Papers</h1>
    </div>
    <div class="papers-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">PROGRAMMING IN C (PIC - 312303)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22226-2018-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1k5IpX-xWJZLagE0KeKogRJK6OfMP5KIS/view?usp=sharing">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22226-2018-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1pJLqUiUz5Vnhn2y5erkLdgog8EcEiaIh/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>22226-2019-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/16-BFqA1Q3jKPVWBPpikKL4TP_m5S9sLX/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>22226-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1JgZEThxDxh4LQTqI1MMGdxOWEqr0fn5U/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>22226-2022-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1gcQIIs8rRQYJvT-nzcECuusM4DkVFqTP/view?usp=drive_link">Download</a>
            </td>
          </tr>

        </tbody>
      </table>
      <table class="syllabus-table">
        <thead>
          <tr>
            <th colspan="3">APPLIED MATHEMATICS (AMS - 312301)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>22224-2018-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1g_bRyJ-BZwAqybDcpnzDRw3v2H2HJ1Yn/view">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>22224-2018-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/17UNAYvmCYYKWpBEi0Q8J-4lbGTQIiP0q/view">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>22224-2019-Summer</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/16-BFqA1Q3jKPVWBPpikKL4TP_m5S9sLX/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>22224-2019-Winter</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1-DMAGSfyKeKf0PcIX4P5vCw9sj_7DyNV/view?usp=drive_link">Download</a>
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