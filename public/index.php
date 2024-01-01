<?php
require_once "../helpers/genuid.php";
if(session_status() === PHP_SESSION_NONE){
 session_start(); 
}
$_SESSION['csrf'] = getRandomID();
?>

  <body>
    <?= header($title) ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container" data-aos="fade-up">
        <div
          class="row justify-content-center"
          data-aos="fade-up"
          data-aos-delay="150"
        >
          <div class="col-xl-6 col-lg-8">
            <h1>Powerful Health Solutions With RichCe<span>.</span></h1>
            <h2>A tea with healthy solutions</h2>
          </div>
        </div>

        <div
          class="row gy-3 mt-3 justify-content-center"
          data-aos="zoom-in"
          data-aos-delay="250"
        >
          <div class="col-xl-2 col-md-3">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line"></i>
              <h3><a href="">Cures Asthma symptoms</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-3">
            <div class="icon-box">
              <i class="ri-calendar-todo-line"></i>
              <h3><a href="">We deliver across the sea</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-3">
            <div class="icon-box">
              <i class="ri-paint-brush-line"></i>
              <h3><a href="">Cures Kidney stones</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-3">
            <div class="icon-box">
              <i class="ri-database-2-line"></i>
              <h3><a href="">Renews blood cell</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      
      <?php
        include_once './product.php';
        include_once './about.php';
      ?>
      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row no-gutters">     
            <div
              class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch"
              data-aos="fade-left"
              data-aos-delay="100"
            >
              <div class="content d-flex flex-column justify-content-center">
                <h3>Deliciousness Undefined</h3>
                <div class="row">
                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-emoji-smile"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="500+"
                        data-purecounter-duration="2"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Satisfied Users</strong> Brewing RichCe tea and
                        taking it has brough satisfaction to these users in
                        health
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-journal-richtext"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="85"
                        data-purecounter-duration="2"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Projects</strong> adipisci atque cum quia
                        aspernatur totam laudantium et quia dere tan
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-clock"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="35"
                        data-purecounter-duration="4"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Years of experience</strong> aut commodi quaerat
                        modi aliquam nam ducimus aut voluptate non vel
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-award"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="20"
                        data-purecounter-duration="4"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Awards</strong> rerum asperiores dolor alias quo
                        reprehenderit eum et nemo pad der
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End .content-->
            </div>
            <div
              class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content"
              data-aos="fade-right"
              data-aos-delay="100"
            >
              <img src="../assets/img/Tea/about-2.jpg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->
     <?php
      include('./Testimonials.php');
      include('../forms/contacthtml.php');
     ?>

    </main>
    <!-- End #main -->

    <?=footer()?>


    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

<script>
  const badge = document.getElementsByClassName("badge")[0];
  const getUserItemcount = async () => {
    const user_id = 1;
    const request = await fetch(`../api/getUserItems.php?user_id=${user_id}`);
    const data = await request.json();
    if(data.success){
      badge.textContent = data.msg;
    }
  }
  getUserItemcount();
  const addToFormCart = document.querySelectorAll('.addToCartForm');
 addToFormCart.forEach(elem => {
  elem.addEventListener('submit',async (e) => {
    e.preventDefault();
    const request = await fetch(elem.getAttribute("action"),{body: new FormData(elem),
    method: elem.getAttribute("method"),
  });
    const data = await request.json();
    getUserItemcount();
    if(data.success){
      alert(data.msg)
    };
  });
 })
</script>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
