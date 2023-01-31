@extends('layouts.app')
<main id="main">

<!-- {/* ======= Our Portfolio Section ======= */} -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Our Gallery</h2>
      <ol>
        <li><Link to="/">Home</Link></li>
        <li><Link to="/gallery">Our Gallery</Link></li>
      </ol>
    </div>

  </div>
</section>
<!-- {/* End Our Portfolio Section */} -->

<!-- {/* ======= Portfolio Section ======= */} -->
<section class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Services</li>
          <li data-filter=".filter-card">Management</li>
          <li data-filter=".filter-web">Product</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Services 1</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Product 3</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Services 2</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
        <div class="portfolio-item">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Management 2</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Product 2</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Services 3</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Management 1</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Management 3</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
        <div class="portfolio-item">
          <img src="/frontend_assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""/>
          <div class="portfolio-info">
            <h3>Product 1</h3>
            <div>
              <a href="/frontend_assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- {/* End Portfolio Section */} -->


</main>
<!-- {/* End #main */} -->