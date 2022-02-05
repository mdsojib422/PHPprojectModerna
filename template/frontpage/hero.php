  <!-- ======= Hero Section ======= -->
<section  id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <?php 
        $slider = new Sliders();
        $sliders = $slider->getSliders();
        if(isset($sliders)){
            foreach($sliders as $key => $slider){
      ?>  
       <div  class="carousel-item <?= $key==0? 'active' : '';?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
              <?= $slider['mn_sl_title']??''; ?>
          </h2>
        
          <p class="animate__animated animate__fadeInUp">
            <?= $slider['mn_sl_description']; ?>
          </p>
          <a href="<?= $slider['mn_sl_btn_url']??''; ?>" class="btn-get-started animate__animated animate__fadeInUp">
          <?= $slider['mn_sl_btn']??''; ?>
          </a>
        </div>
      </div>
  <?php 
      }
  }

?>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->