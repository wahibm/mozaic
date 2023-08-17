 <?php
 get_header();
 ?>
 <!-- Hero 2 - Bootstrap Brain Component -->
 <section id="scrollspyHero" class="wave-bg-blue py-5 py-xl-8 py-xxl-10">
    <div class="container overflow-hidden">
      <div class="row gy-5 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class="col-12 col-lg-6 order-1 order-lg-0">
          <!--<h1 class="display-3 fw-bolder mb-3">We provide easy <br><mark class="wave-highlight wave-highlight-blue"><span class="wave-font-hw display-2 text-accent fw-normal">solutions</span></mark> for startups at affordable rates.</h1>-->
          <h1 class="display-3 fw-bolder mb-3"><?php echo get_field('welcome');?></h1>
          <!--<p class="fs-4 mb-5">Our methods are straight, comfortable, and established to ensure evolution and acceleration.</p>-->
          <p class="fs-4 mb-5"><?php echo get_field('sub-welcome');?></p>
          <div class="d-grid gap-2 d-sm-flex">
            <button type="button" class="btn btn-primary btn-2xl rounded-pill px-4 gap-3">Free Consultation</button>
            <button type="button" class="btn btn-outline-primaryx btn-outline-accent btn-2xl rounded-pill px-4">Buy Credits</button>
          </div>
        </div>
        <div class="col-12 col-lg-5 text-center">
          <img class="img-fluid mask-position-center-center mask-repeat-no-repeat mask-size-auto" loading="lazy" src="./assets/img/hero/hero-home.jpg" alt="" style="-webkit-mask-image: url(./assets/img/hero/hero-blob-1.svg); mask-image: url(./assets/img/hero/hero-blob-1.svg);">
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main">

    <!-- Section - Services -->
    <!-- Service 3 - Bootstrap Brain Component -->
    <section id="scrollspyServices" class="py-5 py-xl-8 py-xxl-16">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <!--<h2 class="display-3 fw-bolder mb-4">You will get the <br>perfect <mark class="wave-highlight wave-highlight-yellow"><span class="wave-font-hw display-1 text-accent fw-normal">resolutions</span></mark> with our proficient services.</h2>-->
            <h2 class="display-3 fw-bolder mb-4"><?php echo get_field('services-welcome');?></h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-5 gy-md-6 gx-md-4 gy-lg-0 gx-xxl-5">
        <?php
        $servicesPosts = new wp_query(array(
          'post_type' => 'Service'
        ));

        while($servicesPosts->have_posts()){
          $servicesPosts->the_post();
        ?>
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="badge wave-bg-yellow text-primary p-3 mb-4">
              <img src="<?php echo get_field('service-icon')['url'];?>" />
            </div>
            <h4 class="mb-3"><?php echo the_title();?></h4>
            <p class="mb-3 text-secondary"><?php echo the_content();?></p>
            <a href="#!" class="fw-bold text-decoration-none link-primary">
              Learn More
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
              </svg>
            </a>
          </div>
          <?php }
          wp_reset_postdata();?>
        </div>
      </div>
    </section>

    <!-- Call To Action 1 - Bootstrap Brain Component -->
    <section class="px-2 py-8 py-xxl-16 background-position-center background-size-cover background-attachment-fixed bsb-overlay" style="background-image: url('./assets/img/cta/cta-img-1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-7">
            <h3 class="fs-5 mb-3 text-white text-uppercase"><?php echo get_field('joinus-first-text');?><mark class="text-white wave-highlight"></mark></h3>
            <h2 class="display-3 text-white fw-bolder mb-4 pe-xl-5"><?php echo get_field('joinus-welcome');?></h2>
            <a href="#!" class="btn btn-accent btn-3xl rounded mb-0 text-nowrap">Join Us</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Portfolio -->
    <!-- Masonry 1 - Bootstrap Brain Component -->
    <section id="scrollspyPortfolio" class="py-5 py-xl-8 py-xxl-16">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <!--<h2 class="display-3 fw-bolder mb-4">Meet our portfolio to <br><mark class="wave-highlight wave-highlight-yellow"><span class="wave-font-hw display-1 text-accent fw-normal">kickstart</span></mark> your success.</h2>-->
            <h2 class="display-3 fw-bolder mb-4"><?php echo get_field('portfolio-welcome');?></h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-2 g-md-2 g-xl-3 bsb-project-2-grid">
        <?php
        $portfolioPosts = new wp_query(array(
          'post_type' => 'Portfolio'
        ));
        while($portfolioPosts->have_posts()){
          $portfolioPosts->the_post();
        ?>
          <div class="col-12 col-md-4 bsb-project-2-item">
            <figure class="rounded rounded-3 overflow-hidden bsb-hover-overlay m-0">
              <a href="#!">
                <img class="img-fluid bsb-scale-up bsb-hover-scale" loading="lazy" src="<?php echo get_field('portfolio_image')['url'];?>" alt="">
              </a>
              <figcaption>
                <h3 class="text-white bsb-hover-fadeInLeft"><?php echo the_title();?></h3>
                <div class="text-white bsb-hover-fadeInRight"><?php echo get_field('portfolio_subtitle');?></div>
              </figcaption>
            </figure>
          </div>
          <?php  }
          wp_reset_postdata(); ?>
        </div>
      </div>
    </section>

    <!-- Section - About -->
    <section id="scrollspyAbout" class="wave-bg-alice-blue py-5 py-xl-8 py-xxl-16">
      <!-- FAQ 1 - Bootstrap Brain Component -->
      <div class="container">
        <div class="row gy-5 gy-lg-0 gx-lg-6 gx-xxl-8 align-items-lg-center">
          <div class="col-12 col-lg-6">
            <img class="img-fluid rounded" loading="lazy" src="<?php echo get_field('why_us_image')['url'];?>" alt="">
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="display-3 fw-bolder mb-4"><?php echo get_field('why_us_main')?></h2>
            <p class="fs-4 mb-5"><?php echo get_field('why_us_sub');?></p>
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Highly Competitive Rates
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Morbi non dui tristique, porttitor tellus vitae, dapibus risus. Suspendisse eros erat, rhoncus sit amet lobortis vel, lacinia fermentum tortor. Sed nec pellentesque urna.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Contemporary Skills
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Morbi non dui tristique, porttitor tellus vitae, dapibus risus. Suspendisse eros erat, rhoncus sit amet lobortis vel, lacinia fermentum tortor. Sed nec pellentesque urna.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Top Notch Support
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Morbi non dui tristique, porttitor tellus vitae, dapibus risus. Suspendisse eros erat, rhoncus sit amet lobortis vel, lacinia fermentum tortor. Sed nec pellentesque urna.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fact 1 - Bootstrap Brain Component -->
      <div class="container pt-5 pt-xl-8 pt-xxl-16">
        <div class="row gy-4">
          <?php $statisticsPosts = new wp_query(array(
            'post_type' => 'Statistic'
          ));
          while($statisticsPosts->have_posts()){
            $statisticsPosts->the_post();
          ?>
          <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 border-bottom border-primary shadow-sm">
              <div class="card-body text-center p-4 p-xxl-5">
                <div class="btn btn-primary btn-circle btn-circle-4xl wave-bg-yellow border-0 text-primary pe-none mb-2">
                  <!--<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                  </svg>-->
                  <img src="<?php echo get_field('statistic_icon')['url'];?>"/>
                </div>
                <h3 class="h1 mb-2"><?php echo get_field('statistic_number')?></h3>
                <p class="fs-5 mb-0 text-secondary"><?php echo the_title();?></p>
              </div>
            </div>
          </div>
          <?php } 
          wp_reset_postdata();?>
        </div>
      </div>
    </section>

    <!-- Section - Team -->
    <!-- Team 1 - Bootstrap Brain Component -->
    <section id="scrollspyTeam" class="py-5 py-xl-8 py-xxl-16">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <h2 class="display-3 fw-bolder mb-4"><?php echo get_field('employees_section_text');?></h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0 gx-xxl-5">
        <?php $employeesPosts = new wp_query(array(
            'post_type' => 'Employee'
          ));
          while($employeesPosts->have_posts()){
            $employeesPosts->the_post();
          ?>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
              <div class="card-body p-0">
                <figure class="m-0 p-0">
                  <img class="img-fluid" loading="lazy" src="./assets/img/team/team-img-1.jpg" alt="">
                  <figcaption class="m-0 p-4">
                    <h4 class="mb-1">Flora Nyra</h4>
                    <p class="text-secondary mb-0">Product Manager</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <?php } 
          wp_reset_postdata();?>
        </div>
      </div>
    </section>

    <!-- Section - Pricing -->
    <!-- Pricing 1 - Bootstrap Brain Component -->
    <section id="scrollspyPricing" class="wave-bg-sea-shell py-5 py-xl-8 py-xxl-16">
      <div class="container">
        <div class="row gy-5 gy-lg-0 gx-lg-8 align-items-center">
          <div class="col-12 col-lg-5">
            <h2 class="display-3 fw-bolder mb-4">Our <mark class="wave-highlight wave-highlight-yellow"><span class="wave-font-hw display-1 text-accent fw-normal">Pricing</span></mark></h2>
            <p class="fs-4 mb-4 mb-xl-5">Explore our flexible pricing to find an excellent fit to run your business.</p>
            <a href="#!" class="btn btn-2xl btn-primary rounded-pill">More Plans</a>
          </div>
          <div class="col-12 col-lg-7">
            <div class="row gy-4 gy-md-0 gx-xxl-5">
              <div class="col-12 col-md-6">
                <div class="card border-0 border-bottom border-primary shadow-sm">
                  <div class="card-body p-4 p-xxl-5">
                    <h2 class="h4 mb-2">Starter</h2>
                    <h4 class="display-3 fw-bold text-primary mb-0">$45</h4>
                    <p class="text-secondary mb-4">USD / Month</p>
                    <ul class="list-group list-group-flush mb-4">
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>5</strong> Bootstrap Install</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>100,000</strong> Visits</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>30 GB</strong> Disk Space</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x text-danger" viewBox="0 0 16 16">
                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <span>Free <strong>SSL and CDN</strong></span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x text-danger" viewBox="0 0 16 16">
                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <span>Free <strong>Support</strong></span>
                      </li>
                    </ul>
                    <a href="#!" class="btn btn-xl btn-accent rounded-pill">Choose Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="card border-0 border-bottom border-primary shadow-lg pt-md-4 pb-md-4 mt-md-n4">
                  <div class="card-body p-4 p-xxl-5">
                    <h2 class="h4 mb-2">Pro</h2>
                    <h4 class="display-3 fw-bold text-primary mb-0">$149</h4>
                    <p class="text-secondary mb-4">USD / Month</p>
                    <ul class="list-group list-group-flush mb-4">
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>20</strong> Bootstrap Install</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>400,000</strong> Visits</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span><strong>50 GB</strong> Disk Space</span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span>Free <strong>SSL and CDN</strong></span>
                      </li>
                      <li class="list-group-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>
                        <span>Free <strong>Support</strong></span>
                      </li>
                    </ul>
                    <a href="#!" class="btn btn-xl btn-accent rounded-pill">Choose Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Testimonial -->
    <!-- Testimonial 2 - Bootstrap Brain Component -->
    <section class="py-5 py-xl-8 py-xxl-16">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
            <h2 class="display-3 fw-bolder mb-4">We believe in client <br><mark class="wave-highlight wave-highlight-yellow"><span class="wave-font-hw display-1 text-accent fw-normal">satisfaction</span></mark>. Here are some testimonials by our worthy clients.</h2>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-12 col-lg-4">
            <div class="card border-0 border-bottom border-primary shadow-sm wave-bg-lotion">
              <div class="card-body p-4 p-xxl-5">
                <figure>
                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial/testimonial-img-1.jpg" alt="">
                  <figcaption>
                    <blockquote class="bsb-blockquote-icon mb-4">Nam ultricies, ex lacinia dapibus faucibus, sapien ipsum euismod massa, at aliquet erat turpis quis diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</blockquote>
                    <h4 class="mb-2">Luna John</h4>
                    <p class="fs-6 text-secondary mb-0">UX Designer</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card border-0 border-bottom border-primary shadow-sm wave-bg-lotion">
              <div class="card-body p-4 p-xxl-5">
                <figure>
                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial/testimonial-img-2.jpg" alt="">
                  <figcaption>
                    <blockquote class="bsb-blockquote-icon mb-4">Nam ultricies, ex lacinia dapibus faucibus, sapien ipsum euismod massa, at aliquet erat turpis quis diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</blockquote>
                    <h4 class="mb-2">Mark Smith</h4>
                    <p class="fs-6 text-secondary mb-0">Marketing Specialist</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card border-0 border-bottom border-primary shadow-sm wave-bg-lotion">
              <div class="card-body p-4 p-xxl-5">
                <figure>
                  <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="./assets/img/testimonial/testimonial-img-4.jpg" alt="">
                  <figcaption>
                    <blockquote class="bsb-blockquote-icon mb-4">Nam ultricies, ex lacinia dapibus faucibus, sapien ipsum euismod massa, at aliquet erat turpis quis diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</blockquote>
                    <h4 class="mb-2">Luke Reeves</h4>
                    <p class="fs-6 text-secondary mb-0">Sales Manager</p>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Blog -->
    <!-- Pricing 1 - Bootstrap Brain Component -->
    <section id="scrollspyBlog" class="wave-bg-linen py-5 py-xl-8 py-xxl-16">
      <div class="container">
        <div class="row gy-5 gy-lg-0 gx-lg-8 align-items-center">
          <div class="col-12 col-lg-5">
            <h2 class="display-3 fw-bolder mb-4">Our <mark class="wave-highlight wave-highlight-yellow"><span class="wave-font-hw display-1 text-accent fw-normal">Blog</span></mark></h2>
            <p class="fs-4 mb-4 mb-xl-5">Stay tuned and updated by the latest updates from our blog.</p>
            <a href="#!" class="btn btn-2xl btn-primary rounded-pill">More News</a>
          </div>
          <div class="col-12 col-lg-7">
            <div class="row gy-4 gy-xxl-5 gx-xxl-5">
              <div class="col-12 col-lg-6">
                <article>
                  <figure class="rounded overflow-hidden mb-3 bsb-hover-overlay">
                    <a href="#!">
                      <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./assets/img/blog/blog-image-1.jpg" alt="">
                    </a>
                    <figcaption>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInRight" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                      <h4 class="h6 text-white bsb-hover-fadeInLeft mt-2">Read More</h4>
                    </figcaption>
                  </figure>
                  <div class="entry-header mb-3">
                    <div class="entry-meta">
                      <ul class="nav mb-2">
                        <li class="nav-item">
                          <a class="nav-link d-inline px-1 link-primary" href="#!">Business</a>
                        </li>
                      </ul>
                    </div>
                    <h2 class="entry-title h4 mb-0">
                      <a class="link-dark text-decoration-none" href="#!">How to Improve Your Project Management Skills</a>
                    </h2>
                  </div>
                  <div class="entry-footer">
                    <div class="entry-meta">
                      <ul class="nav mb-0 bsb-nav-sep">
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-muted p-0 pe-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <span class="ms-2 fs-7">7 Dec 2023</span>
                          </a>
                        </li>
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 ps-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                              <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                            <span class="ms-2 fs-7">55</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-lg-6">
                <article>
                  <figure class="rounded overflow-hidden mb-3 bsb-hover-overlay">
                    <a href="#!">
                      <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./assets/img/blog/blog-image-2.jpg" alt="">
                    </a>
                    <figcaption>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                      <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                    </figcaption>
                  </figure>
                  <div class="entry-header mb-3">
                    <div class="entry-meta">
                      <ul class="nav mb-2">
                        <li class="nav-item">
                          <a class="nav-link d-inline px-1 link-primary" href="#!">Technology</a>
                        </li>
                      </ul>
                    </div>
                    <h2 class="entry-title h4 mb-0">
                      <a class="link-dark text-decoration-none" href="#!">Modern Cybersecurity Trends to Watch in 2023</a>
                    </h2>
                  </div>
                  <div class="entry-footer">
                    <div class="entry-meta">
                      <ul class="nav mb-0 bsb-nav-sep">
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <span class="ms-2 fs-7">12 Sep 2023</span>
                          </a>
                        </li>
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 ps-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                              <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                            <span class="ms-2 fs-7">39</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-lg-6">
                <article>
                  <figure class="rounded overflow-hidden mb-3 bsb-hover-overlay">
                    <a href="#!">
                      <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./assets/img/blog/blog-image-3.jpg" alt="">
                    </a>
                    <figcaption>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInDown" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                      <h4 class="h6 text-white bsb-hover-fadeInUp mt-2">Read More</h4>
                    </figcaption>
                  </figure>
                  <div class="entry-header mb-3">
                    <div class="entry-meta">
                      <ul class="nav mb-2">
                        <li class="nav-item">
                          <a class="nav-link d-inline px-1 link-primary" href="#!">Health</a>
                        </li>
                      </ul>
                    </div>
                    <h2 class="entry-title h4 mb-0">
                      <a class="link-dark text-decoration-none" href="#!">Health Care Job Growth Outpaces Other Industries</a>
                    </h2>
                  </div>
                  <div class="entry-footer">
                    <div class="entry-meta">
                      <ul class="nav mb-0 bsb-nav-sep">
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <span class="ms-2 fs-7">13 Jul 2023</span>
                          </a>
                        </li>
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 ps-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                              <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                            <span class="ms-2 fs-7">61</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-lg-6">
                <article>
                  <figure class="rounded overflow-hidden mb-3 bsb-hover-overlay">
                    <a href="#!">
                      <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" src="./assets/img/blog/blog-image-4.jpg" alt="">
                    </a>
                    <figcaption>
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInUp" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                      </svg>
                      <h4 class="h6 text-white bsb-hover-fadeInDown mt-2">Read More</h4>
                    </figcaption>
                  </figure>
                  <div class="entry-header mb-3">
                    <div class="entry-meta">
                      <ul class="nav mb-2">
                        <li class="nav-item">
                          <a class="nav-link d-inline px-1 link-primary" href="#!">Networking</a>
                        </li>
                      </ul>
                    </div>
                    <h2 class="entry-title h4 mb-0">
                      <a class="link-dark text-decoration-none" href="#!">Five Essential Network Security Trends to Watch</a>
                    </h2>
                  </div>
                  <div class="entry-footer">
                    <div class="entry-meta">
                      <ul class="nav mb-0 bsb-nav-sep">
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 pe-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <span class="ms-2 fs-7">21 Feb 2023</span>
                          </a>
                        </li>
                        <li class="nav-item text-secondary">
                          <a class="nav-link link-secondary p-0 ps-3 d-inline-flex align-items-center" href="#!">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                              <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                              <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                            <span class="ms-2 fs-7">61</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section - Contact -->
    <!-- Contact 2 - Bootstrap Brain Component -->
    <section id="scrollspyContact" class="py-5 py-xl-8 py-xxl-16">
      <div class="container">
        <div class="row gy-5 gy-lg-0 gx-lg-6 gx-xxl-8 align-items-lg-center">
          <div class="col-12 col-lg-6">
            <img class="img-fluid rounded" loading="lazy" src="./assets/img/contact/contact-img-1.jpg" alt="">
          </div>
          <div class="col-12 col-lg-6">
            <h2 class="h1 mb-3">Get in touch</h2>
            <p class="lead fs-4 text-secondary mb-5">We're always on the lookout to work with new clients. If you're interested in working with us, please get in touch in one of the following ways.</p>
            <div class="d-flex mb-4">
              <div class="me-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                </svg>
              </div>
              <div>
                <h4 class="mb-3">Address</h4>
                <address class="mb-0 text-secondary">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
              </div>
            </div>
            <div class="d-flex mb-4">
              <div class="me-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                </svg>
              </div>
              <div>
                <h4 class="mb-3">Phone</h4>
                <p class="mb-0">
                  <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                </p>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-4 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                  <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                </svg>
              </div>
              <div>
                <h4 class="mb-3">E-Mail</h4>
                <p>
                  <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
<?php
get_footer();
?>