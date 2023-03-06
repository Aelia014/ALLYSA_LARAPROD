@extends('templates.default')
@section('header')
@endsection
@section('content')
    <section id="hero">
        <div class="hero-container">
          <h1>Welcome to BookShop</h1>
          <h2>interested in Books? Shop now!</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </section><!-- #hero -->
    
      <main id="main">
    
        <!-- ======= About Me Section ======= -->
        <section id="about" class="about">
          <div class="container">
    
            <div class="section-title">
              <h2>About BookShop</h2>
            </div>
    
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/7.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
                <h3>Hello! I am Allysa Hope L. Mecarte. </h3>
                <p class="fst-italic">
                  A 3rd year student at Bukidnon State University, taking the course of Bachelor Of Science in Information Technology. In BookShop, we sell Books from
                  Wattpad, Novels, and Bookmarks.
                </p>
                <ul>
                  <li><i class="bi bi-check2-circle"></i> We gaurantee that the books we sell are in good condition.</li>
                  <li><i class="bi bi-check2-circle"></i> The books have an affordable price.</li>
                  <li><i class="bi bi-check2-circle"></i> You can return any damaged book upon receiving it and get a refund.</li>
                </ul>
                <p>
                  BookShop aims to be a trustworthy shop and improve for the better. so if you have any problem or suggestion, you can freely message us.
                </p>
              </div>
            </div>
    
          </div>
        </section><!-- End About Us Section -->
    
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Services</h2>
              <p>BookShop offers you the following Services.</p>
            </div>
    
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-cpu"></i></div>
                <h4 class="title"><a href="">Update</a></h4>
                <p class="description">Customers are updated on their product and delivery.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-clipboard-data"></i></div>
                <h4 class="title"><a href="">Book your order anytime</a></h4>
                <p class="description">Bookshop is open 24/7</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-globe"></i></div>
                <h4 class="title"><a href="">Worldwide</a></h4>
                <p class="description">We are availabe in any countries</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-sliders"></i></div>
                <h4 class="title"><a href="">Delivery</a></h4>
                <p class="description">fast and reliable delivery.</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="bi bi-building"></i></div>
                <h4 class="title"><a href="">Contact Us!</a></h4>
                <p class="description">You can message us from 8am to 8pm everyday at our social media.</p>
              </div>
            </div>
    
          </div>
        </section><!-- End Services Section -->
    
        <!-- ======= Call To Action Section ======= -->
        <section class="call-to-action">
          <div class="container">
    
            <div class="text-center">
              <h3>Surprise!</h3>
              <p> Get 50% off! As we are a newly opened BookShop, we are offering you a special discount to celebrate our opening.</p>
              <a class="cta-btn" href="#">Shop Now!</a>
            </div>
    
          </div>
        </section><!-- End Call To Action Section -->
    
        <!-- ======= Our Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">
    
            <div class="section-title">
              <h2>Our Products</h2>
            </div>
    
            <div class="row">
              <div class="col-lg-12">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">Wattpad</li>
                  <li data-filter=".filter-card">Novel</li>
                  <li data-filter=".filter-web">Bookmark</li>
                </ul>
              </div>
            </div>
    
            <div class="row portfolio-container">
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Book1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Book1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 1">Wattpad 1</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Book1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 1"><i class="bi bi-plus"></i></a>
                      <a href="/details" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Bookmark3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Bookmark3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 3">Bookmark 3</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Bookmark3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 3"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Book2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Book2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 2">Wattpad 2</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Book2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 2"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Novel2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Novel2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 2">Novel 2</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Novel2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 2"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Bookmark2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Bookmark2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 2">Bookmark 2</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Bookmark2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 2"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Book3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Book3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 3">Wattpad 3</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Book3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Wattpad 3"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Novel1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Novel1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 1">Novel 1</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Novel1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 1"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Novel3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Novel3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 3">Novel 3</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Novel3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Novel 3"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/Bookmark1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h3><a href="assets/img/portfolio/Bookmark1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 1">Bookmark 1</a></h3>
                    <div>
                      <a href="assets/img/portfolio/Bookmark1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookmark 1"><i class="bi bi-plus"></i></a>
                      <a href="details.blade.php" title="Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Our Portfolio Section -->
    
    
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Contact Us</h2>
              <p>BookShop is open to any message in 8am to 8pm during weekdays. if you have any concern contact us on the information listed below.</p>
            </div>
    
            <div class="row">
    
              <div class="col-lg-4 col-md-6">
                <div class="contact-about">
                  <h3>BookShop</h3>
                  <p>You can also message us at our social medias. Thank you for visiting BookShop!</p>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-3 col-md-6">
                <div class="info">
                  <div>
                    <i class="bi bi-geo-alt"></i>
                    <p>Philippines<br>Bukidnon, Malaybalay City</p>
                  </div>
    
                  <div>
                    <i class="bi bi-envelope"></i>
                    <p>Bookshop@gmail.com</p>
                  </div>
    
                  <div>
                    <i class="bi bi-phone"></i>
                    <p>+69 9874653715</p>
                  </div>
    
                </div>
              </div>
    
              <div class="col-lg-5 col-md-12">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Contact Us Section -->
    
      </main><!-- End #main -->
@endsection


        
        
        



