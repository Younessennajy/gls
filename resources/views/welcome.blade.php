@include('head')
<body>

<header id="header" >
    <h1 class="text-black"><a href="/"><img src="img/logo.png" class='col-4' alt='img'/></a></h1>
      <ul class='d-flex list-unstyled align-items-center mt-4 text-gray-800 '>
        <li><a class="mx-4 bold text-decoration-none hover:text-green-500"  href="#home">Home</a></li>
        <li><a class="mx-4 bold text-decoration-none" href="#about">About</a></li>
        <li><a  class="mx-4 bold text-decoration-none" href="/courses">Courses</a></li>
        <li><a class="mx-4 bold text-decoration-none"  href="#contact">Contact</a></li>
      </ul>
        @if (Route::has('login'))
                <div class="d-flex justify-between align-items-center">
                    @auth
                        <a href="{{ url('/home') }} "><span style="font-size: 1.8rem;"><i class="bi bi-person"></i></span></a>
                    @else
                        <a href="{{ route('login') }}" class="mx-4 text-decoration-none " ><i class="bi-box-arrow-in-right"></i> Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" text-decoration-none" ><i class="bi-person-plus"></i> Register</a>
                        @endif
                    @endauth
                </div>
        @endif
</header>

{{-- home --}}
<section id="hero" class="d-flex justify-content-center align-items-center fade-in">
    <div class="container position-absolute">
        <h1 class="display-4">Learning Today,<br/>Leading Tomorrow</h1>
        <h2 class="text-white mb-4">Fuel your academic future on our learning portal platform</h2>
        <a href="/home">
        <button class="learn-more">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Get Started</span>
          </button>
        </a>
    </div>
</section>


{{-- about --}}
<div id="about" class="about  my-5">
    <div class="container">
        <div class="row">
                <div class="section-title ">
                    <h2>About</h2>
                </div>
            <div class="col-lg-6 order-lg-2">
                <img src="img/about.jpg" class="img-fluid rounded" alt="About Image"/>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-lg-1">
                <h3>Discover GLS - Your Prime Destination for German Mastery in Morocco!</h3>
                <p class="fst-italic">
                    At Centre GLS, we provide an exceptional German language learning experience. With qualified
                    instructors and a comprehensive program, we are dedicated to helping you acquire top-notch linguistic
                    and cultural skills.
                </p>
                <ul class="list-unstyled">
                    <li>
                        <i class="bi bi-check"></i>
                        Experience personalized learning with our expert instructors..
                    </li>
                    <li>
                        <i class="bi bi-check "></i>
                        Dive into the rich German culture and language nuances..
                    </li>
                    <li>
                        <i class="bi bi-check "></i>
                        Explore a comprehensive program tailored to your language goals.
                    </li>
                </ul>
                <p>
                    Join us at Centre GLS to immerse yourself in the world of German language and culture. Our commitment
                    is to make your language learning journey enjoyable and rewarding.
                </p>
            </div>
        </div>
    </div>
</div>


{{-- facts --}}
<section id="facts" class="facts">
    <div class="container">
        <div class="section-title">
            <h2>Facts</h2>
            <p>
                At Centre GLS, we pride ourselves on being a premier institution for German language education
                in Morocco. With a rich history of language instruction and a dedicated team of experienced educators,
                we offer a comprehensive learning experience tailored to meet the needs of our students.
            </p>
        </div>

        <div id="fact-resp" class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-lightbulb"></i>
                    <span>+2</span>
                    <p><strong>Years </strong> Of Experience</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-star"></i>
                    <span>+30</span>
                    <p><strong>Etudiants </strong> </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-book"></i>
                    <span>+6</span>
                    <p><strong>Courses </strong> </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-journal-bookmark "></i>
                    <span>+6</span>
                    <p><strong>Lessons </strong> </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Let's connect.</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>fes</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.3228303833303!2d-4.992723767000938!3d34.031616645849105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b9c36e71aa1%3A0xe0ce78950909a0d3!2satlas!5e1!3m2!1sen!2sma!4v1709428374426!5m2!1sen!2sma"
                        frameborder="0"
                        width="400px"
                        height="300px"
                        allowfullscreen
                        title="Fez Location">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form id="contact-form" action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Your Email</label>
                            <input type="email" name="email"  class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject"  class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" rows="10" required></textarea>
                    </div>
                    <br />
                    <div class="text-center"><button type="submit"><i class="bi bi-paper-plane"></i> Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>



{{-- Contact --}}
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mentor</h3>
            <p>
            Bureaux al Atlas, <br />
              Rue el Hoiema, Atlas, Fes<br />
              Morroco <br /><br />
              <strong>Phone:</strong> +212 05 35 65 92 86<br />
              <strong>Email:</strong> info@example.com<br />
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul class="list-unstyled">
              <li><i class="bi bi-chevron-right"></i> <Link to="/">Home</Link></li>
              <li><i class="bi bi-chevron-right"></i> <Link to="#about">About us</Link></li>
              <li><i class="bi bi-chevron-right"></i> <Link to="#">Services</Link></li>
              <li><i class="bi bi-chevron-right"></i> <Link to="#">Terms of service</Link></li>
              <li><i class="bi bi-chevron-right"></i> <Link to="#">Privacy policy</Link></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Levels</h4>
            <ul class="list-unstyled">
              <li><i class="bi bi-chevron-right"></i> <a to="#">A1 - 1</a></li>
              <li><i class="bi bi-chevron-right"></i> <a to="#">A1 - 2</a></li>
              <li><i class="bi bi-chevron-right"></i> <a to="#">A2 - 1</a></li>
              <li><i class="bi bi-chevron-right"></i> <a to="#">A2 - 2</a></li>
              <li><i class="bi bi-chevron-right"></i> <a to="#">B1</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Platforms</h4>
            <div class="social-links text-md-right pt-3 pt-md-0 my-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            <form action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"/>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>GLS</span></strong>. All Rights Reserved
        </div>

      </div>

    </div>
</footer>


</body>
</html>
