<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once '../inc/header.php';
  include_once '../inc/import.php';

  getStyles("PolyStudi || CM 2 K", "../");

  ?>
</head>

<body>
  <?php include_once '../inc/header.php' ?>
  <div class="loader-wrapper">
    <img src="../images/loading.gif" alt="" />
  </div>
  <!-- Header/Hero -->
  <section id="hero">

    <?php
    navbar(
      [
        "Assignment" => "Assignments",
        "Paper" => "Papers"
      ],
      "../"
    );
    ?>
    <div id="hero-div">
      <div class="hero-div-main">
        <h1 class="hero-h1">CM 2 K</h1>
        <div class="hero-div-inner">
          <h3 class="hero-h3-1">For Students</h3>
          <span></span>
          <h3 class="hero-h3-1">By Students</h3>
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
  <!-- Syllabus -->
  <section id="syllabus">
    <div class="syllabus-head section-head">
      <h1 class="p-h1 sy-h1">Syllabus</h1>
    </div>
    <div class="syllabus-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Subject Name</th>
            <th>Subject Code</th>
            <th>Total Marks</th>
            <th>Download PDF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>APPLIED MATHEMATICS (AMS)</td>
            <td>312301</td>
            <td>100</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1NCuWNlGRgsqVZ5AGWLg7wYqbIUOfpKmb/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>BASIC ELECTRICAL AND ELECTRONICS ENGINEERING (BEE)</td>
            <td>312302</td>
            <td>250</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1sC_q1CfLnjeEp_p_VnU8tZLglecCXLZ3/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>PROGRAMMING IN C ( PIC)</td>
            <td>312303</td>
            <td>225</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1gz1Mn-Kkg5inc03DZW1wgwPqPM4LkiPZ/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>LINUX BASICS (BLP)</td>
            <td>312001</td>
            <td>50</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1RnujRjvS4jrtJee_2TQsAY8LKWlx8unA/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>WEB PAGE DESIGNING (WPD)</td>
            <td>312004</td>
            <td>125</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1x5Na2R44LqFGgzFclPmmHe-DGFOKfq65/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>PROFESSIONAL COMMUNICATION (PCO)</td>
            <td>312002</td>
            <td>50</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/1dUf2nEgo1gW5t_1xiCJB54NXroufO3ba/view?usp=drive_link">Download</a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>SOCIAL AND LIFE SKILLS (SFS)</td>
            <td>312003</td>
            <td>50</td>
            <td>
              <a target="_blank"
                href="https://drive.google.com/file/d/16yl7ol8Uyv2ARwAj6R-Ig8BTJzsaupD0/view?usp=drive_link">Download</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- Manual -->
  <section id="manual">
    <div class="manual-head section-head">
      <h1 class="p-h1 m-h1">Manuals</h1>
    </div>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312301- APPLIED MATHEMATICS (AMS)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>
                312302- BASIC ELECTRICAL AND ELECTRONICS ENGINEERING (BEE)
              </h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312303- PROGRAMMING IN C ( PIC)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312001- Linux Basic (BLP)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312004- WEB PAGE DESIGNING (WPD)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312002- PROFESSIONAL COMMUNICATION (PCO)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://drive.google.com/uc?export=view&id=1_OxAqFYXlh-oBt-wtiYYlLVJDMCPwDH1" alt="" />
            </div>
            <div class="card-content">
              <h1>312003- SOCIAL AND LIFE SKILLS (SFS)</h1>
              <a target="_blank" href="#" class="manual-btn">
                <span class="m-btn-c"><i class="fa fa-download"></i></span>
                <span class="m-btn-download">Download</span>
                <span class="m-btn-h">Click here</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- Solved Papers -->
  <section id="solvedpapers">
    <div class="solvedpapers-head section-head">
      <h1 class="p-h1 sp-h1">Solved Papers</h1>
    </div>
    <div class="solvedpapers-main">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Subject Name</th>
            <th>Download PDF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>APPLIED MATHEMATICS (AMS)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>BASIC ELECTRICAL AND ELECTRONICS ENGINEERING (BEE)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>PROGRAMMING IN C ( PIC)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>LINUX BASICS (BLP)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>WEB PAGE DESIGNING (WPD)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>PROFESSIONAL COMMUNICATION (PCO)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>SOCIAL AND LIFE SKILLS (SFS)</td>
            <td>
              <a href="../CM2K/papers.html">Download</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <!-- Notes -->
  <section id="notes">
    <div class="notes-head section-head">
      <h1 class="p-h1 n-h1">Notes</h1>
    </div>
    <div class="notes-main">
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>APPLIED MATHEMATICS</h1>
          <p>By prasadkoyande from Vidyalankar Collage</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>ELECTRICAL AND ELECTRONICS </h1>
          <p>By prasadkoyande from Vidyalankar Collage</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>LINUX BASICS </h1>
          <p>By prasadkoyande from Vidyalankar Collage</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>
      <div class="notes-box" data-tilt data-tilt-max="20" data-tilt-speed="300" data-tilt-perspective="500">
        <div class="notes-box-content">
          <h1>WEB PAGE DESIGNING</h1>
          <p>By prasadkoyande from Vidyalankar Collage</p>
          <a href="#" class="cu-btn">Soon</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->


  <?php
  getFooter();
  getScript("../"); ?>
</body>

</html>