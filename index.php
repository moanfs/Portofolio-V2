<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halomoan - Web Developer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <main>
    <header id="header">
      <div class="overlay overlay-lg">
        <img src="./img/shapes/square.png" class="shape square" alt="" />
        <img src="./img/shapes/circle.png" class="shape circle" alt="" />
        <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
        <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
        <img src="./img/shapes/x.png" class="shape xshape" alt="" />
        <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
        <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
        <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
        <img src="./img/shapes/points1.png" class="points points1" alt="" />
      </div>

      <nav>
        <div class="container">
          <div class="logo">
            <p>Halo<span class="call-name">moan</span></p>
          </div>

          <div class="links">
            <ul>
              <li>
                <a href="#header">Home</a>
              </li>
              <li>
                <a href="#services">Services</a>
              </li>
              <li>
                <a href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a href="#about">About</a>
              </li>
              <li>
                <a href="#blog">Blog</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
              <li>
                <a href="#hireme" class="active">Hire me</a>
              </li>
            </ul>
          </div>

          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </nav>

      <div class="header-content">
        <div class="container grid-2">
          <div class="column-1">
            <h1 class="header-title">Hi, I'm Halomoan Filipus Simarmata</h1>
            <h3 class="header-job">Web Developer</h3>
            <p class="text">
              Transforming Ideas into Beautifully-Coded Web Experiences
            </p>
            <a href="/Halomoan Filipus Simarmata-resume.pdf" download class="btn">Download CV</a>
          </div>

          <div class="column-2 image">
            <img src="./img/shapes/points2.png" class="points points2" alt="" />
            <img src="./img/profile.jpg" class="img-element z-index" alt="" />
          </div>
        </div>
      </div>
    </header>

    <section class="services section" id="services">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="What I Do">Services</h3>
        </div>

        <div class="cards">
          <div class="card-wrap">
            <img src="./img/shapes/points3.png" class="points points1 points-sq" alt="" />
            <div class="card" data-card="UI/UX">
              <div class="card-content z-index">
                <i class="far fa-lightbulb fa-lg" style="color: #326296; font-size: 6rem; margin-bottom: 2.5rem;"></i>
                <h3 class="title-sm">Web Design</h3>
                <p class="text">
                  I use figma for web and mobile design
                </p>
                <!-- <a href="#" class="btn small">Read more</a> -->
              </div>
            </div>
          </div>

          <div class="card-wrap">
            <div class="card" data-card="Code">
              <div class="card-content z-index">
                <i class="fas fa-code fa-lg" style="color: #326296; font-size: 6rem; margin-bottom: 2.5rem;"></i>
                <h3 class="title-sm">Web Development</h3>
                <p class="text">
                  PHP, Codeigniter, Laravel(Beginner), Python(Beginner)
                </p>
                <!-- <a href="#" class="btn small">Read more</a> -->
              </div>
            </div>
          </div>

          <div class="card-wrap">
            <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
            <div class="card" data-card="Others">
              <div class="card-content z-index">
                <i class="fas fa-file-word fa-lg" style="color: #326296; font-size: 6rem; margin-bottom: 2.5rem;"></i>
                <h3 class="title-sm">Others</h3>
                <p class="text">
                  Copywriting, Blogging, Playing games
                </p>
                <!-- <a href="#" class="btn small">Read more</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio section" id="portfolio">
      <div class="background-bg">
        <div class="overlay overlay-sm">
          <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
          <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
        </div>
      </div>

      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="My works">Portfolio</h3>
        </div>

        <div class="section-body">
          <div class="filter">
            <button class="filter-btn active" data-filter="*">All</button>
            <button class="filter-btn" data-filter=".ui">UI/UX</button>
            <button class="filter-btn" data-filter=".webdev">Web Dev</button>
          </div>

          <div class="grid">
            <div class="grid-item ui">
              <div class="gallery-image">
                <img src="./img/portfolio/habitats.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>web Design</h3>
                    <h5>habitats</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item ui">
              <div class="gallery-image">
                <img src="./img/portfolio/flowers.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>Web Design</h3>
                    <h5>flowers</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item ui webdev">
              <div class="gallery-image">
                <img src="./img/portfolio/findcake.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>Web Design & web Development</h3>
                    <h5>find cake trandisional</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item ui">
              <div class="gallery-image">
                <img src="./img/portfolio/tshirt.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>Web Design</h3>
                    <h5>T-shirt</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item ui webdev">
              <div class="gallery-image">
                <img src="./img/portfolio/personal.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>Web Design</h3>
                    <h5>portfolio v.1</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item ui">
              <div class="gallery-image">
                <img src="./img/portfolio/visitbkl.png" alt="" />
                <div class="img-overlay">
                  <div class="plus"></div>
                  <div class="img-description">
                    <h3>Web Design</h3>
                    <h5>pariwisata</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="more-folio">
              <a href="#" class="btn">More Folio</a>
            </div> -->
        </div>
      </div>
    </section>

    <section class="about section" id="about">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="Who Am I">About me</h3>
        </div>

        <div class="section-body grid-2">
          <div class="column-1">
            <h3 class="title-sm">Hello, I'm Halomoan Filipus Simarmata</h3>
            <p class="text">
              I'm a web developer. I have a good understanding of the PHP programming language, particularly using the CodeIgniter framework. Currently, I'm also in the process of learning Laravel. In addition to my programming skills, I have a passion for web design. During my free time, I enjoy playing games, and now I'm looking forward to collaborating with you!
            </p>
          </div>

          <div class="column-2 image">
            <img src="./img/shapes/points4.png" class="points" alt="" />
            <img src="./img/Coding-bro.png" class="z-index" alt="coding bro" />
          </div>
        </div>
      </div>
    </section>

    <section class="records">
      <div class="overlay overlay-sm">
        <img src="./img/shapes/square.png" alt="" class="shape square1" />
        <img src="./img/shapes/square.png" alt="" class="shape square2" />
        <img src="./img/shapes/circle.png" alt="" class="shape circle" />
        <img src="./img/shapes/half-circle.png" alt="" class="shape half-circle" />
        <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
        <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
        <img src="./img/shapes/x.png" alt="" class="shape xshape" />
        <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
      </div>

      <div class="container">
        <!-- <div class="section-header">
          <h3 class="title" data-title="Let's work together">why hire me</h3>
        </div> -->
        <div class="wrap">
          <div class="record-circle">
            <!-- <h2 class="number" data-num="235">2</h2> -->
            <i class="fab fa-stack-overflow fa-lg" style="font-size: 4rem; margin-bottom: 1rem;"></i>
            <h5 class="sub-title">Good problem-solving</h5>
          </div>
        </div>

        <div class="wrap">
          <div class="record-circle">
            <i class="fas fa-compress-arrows-alt fa-lg" style="font-size: 4rem; margin-bottom: 1rem;"></i>
            <h4 class="sub-title">Collaborative​</h4>
          </div>
        </div>

        <div class="wrap">
          <div class="record-circle">
            <i class="fab fa-speakap fa-lg" style="font-size: 4rem; margin-bottom: 1rem;"></i>
            <h4 class="sub-title">Communicative</h4>
          </div>
        </div>

        <!-- <div class="wrap">
          <div class="record-circle">
            <h2 class="number" data-num="368">0</h2>
            <h4 class="sub-title">Awards</h4>
          </div>
        </div> -->
      </div>
    </section>

    <section class="blog section" id="blog">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="Last News">My blog</h3>
          <p class="text">
            <span style="color: red;">coming soon</span>
          </p>
        </div>

        <!-- <div class="blog-wrapper">
          <div class="blog-wrap">
            <img src="./img/shapes/points3.png" alt="" class="points points-sq" />

            <div class="blog-card">
              <div class="blog-image">
                <img src="./img/blog1.png" alt="" />
              </div>

              <div class="blog-content">
                <div class="blog-info">
                  <h5 class="blog-date">March, 19 2020</h5>
                  <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                </div>
                <h3 class="title-sm">This is a short title</h3>
                <p class="blog-text">
                  Lorem ipsum, dolor sit amet elit. rem poimus? Tempora
                  expedita eos autem! Lorem ipsum, dolor sit met.
                </p>
                <a href="https://blog.moanfs.com/" class="btn small">Read more</a>
              </div>
            </div>
          </div>

          <div class="blog-wrap">
            <div class="blog-card">
              <div class="blog-image">
                <img src="./img/blog2.png" alt="" />
              </div>

              <div class="blog-content">
                <div class="blog-info">
                  <h5 class="blog-date">August, 02 2020</h5>
                  <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                </div>
                <h3 class="title-sm">This is a short title</h3>
                <p class="blog-text">
                  Lorem ipsum, dolor sit amet elit. Sint atque culpa repellat
                  sunt sit amet nobis! Lorem ipsum dolor sit amet.
                </p>
                <a href="https://blog.moanfs.com/" class="btn small">Read more</a>
              </div>
            </div>
          </div>

          <div class="blog-wrap">
            <div class="blog-card">
              <div class="blog-image">
                <img src="./img/blog3.png" alt="" />
              </div>

              <div class="blog-content">
                <div class="blog-info">
                  <h5 class="blog-date">December, 12 2020</h5>
                  <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                </div>
                <h3 class="title-sm">This is a short title</h3>
                <p class="blog-text">
                  Lorem ipsum dolor sit, amet elit. enim numquam, laborum
                  earum? Lorem ipsum dolor sit amet.
                </p>
                <a href="https://blog.moanfs.com/" class="btn small">Read more</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="contact-box">
          <div class="contact-form">
            <h3 class="title">Contact me</h3>
            <p class="text" style="color: #fff;">Interested working with me?</p>
            <div class="row">
              <input type="text" class="contact-input" placeholder="First Name" />
              <input type="text" class="contact-input" placeholder="Last Name" />
            </div>

            <div class="row">
              <input type="text" class="contact-input" placeholder="Phone" />
              <input type="email" class="contact-input" placeholder="Email" />
            </div>

            <div class="row">
              <textarea name="message" class="contact-input textarea" placeholder="Message"></textarea>
            </div>
            <a href="#" class="btn" style="display: block; background-color: #fff; color: #326296;">Send</a>
          </div>
        </div>
      </div>
    </section>

    <section class="hireme" id="hireme">
      <div class="container">
        <h3 class="title">Let's talk about a project</h3>
        <p class="text">
          Collaborate, Innovate, Succeed: Let's Work Together on Web Projects
        </p>
        <a href="#contact" class="btn">Hire me</a>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="grid-4">
        <div class="grid-4-col footer-about">
          <h3 class="title-sm">About</h3>
          <p class="text">
            I'm a web developer. I have a good understanding of the PHP programming language, particularly using the CodeIgniter framework. Currently, I'm also in the process of learning Laravel. In addition to my programming skills, I have a passion for web design. During my free time, I enjoy playing games, and now I'm looking forward to collaborating with you!
          </p>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Links</h3>
          <ul>
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="#portfolio">Portfolio</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#blog">Blog</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-links">
          <h3 class="title-sm">Services</h3>
          <ul>
            <li>
              <a href="#" class="ui">UI/UX</a>
            </li>
            <li>
              <a href="#" class="webdev">Web Dev</a>
            </li>
          </ul>
        </div>

        <div class="grid-4-col footer-newstletter">
          <h3 class="title-sm">Subscribe</h3>
          <div class="footer-input-wrap">
            <input type="email" class="footer-input" placeholder="Email" />
            <!-- <a href="#" class="input-arrow">
              <i class="fas fa-angle-right"></i>
            </a> -->
          </div>
        </div>
      </div>

      <div class="bottom-footer">
        <div class="copyright">
          <p class="text">
            &copy;2023 By Moan
          </p>
        </div>

        <div class="followme-wrap">
          <div class="followme">
            <h3>Follow me</h3>
            <span class="footer-line"></span>
            <div class="social-media">
              <a href="https://github.com/moanfs?tab=repositories">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://www.instagram.com/moan.fs/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/halomoan-filipus-simarmata-42b851217/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <div class="back-btn-wrap">
            <a href="#" class="back-btn">
              <i class="fas fa-chevron-up"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>