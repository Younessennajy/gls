{{-- @extends('courses.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Courses</h2>
                    </div>
                    <div class="card-body">
                        <select name="level" id="level" >
                            <option value="All">All</option>
                            <option value="A1-1">A1-1</option>
                            <option value="A1-2">A1-2</option>
                            <option value="A2-1">A2-1</option>
                            <option value="A2-2">A2-2</option>
                            <option value="B1">B1</option>
                        </select>
                        <br/>
                        <br/>
                        <div class="row">
                            @foreach($courses as $item)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <a href="{{ $item->url }}" target="_blank"> <!-- Added anchor tag -->
                                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="Course Image" style="height: 200px;">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $item->name }}</h5>
                                            <p class="card-text">{{ $item->desc }}</p>
                                            <p class="card-text">{{ $item->level }}</p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            Created at: {{ $item->created_at->format('Y-m-d H:i:s') }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 --}}

 <header id="header" >
    <h1 class="text-black"><a href="/"><img src={logo} class='col-2' alt='img'/></a></h1>
      <ul class='d-flex list-unstyled align-items-center mt-4'>
        <li><a class="mx-2 bold"  href="/">Home</a></li>
        <li><a class="mx-2 bold" href="/about">About</a></li>
        <li><a  class="mx-2 bold" href="courses.html">Courses</a></li>
        <li><a class="mx-2 bold"  href="trainers.html">Trainers</a></li>
        <li><a class="mx-2 bold"  href="events.html">Events</a></li>
        <li><a class="mx-2 bold"  href="pricing.html">Pricing</a></li>
      </ul>
    <button class="bg-#f3bd2b border-none"><Link to="/login" >login</Link></button>

</header>


<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-absolute">
        <h1 class="display-4">Learning Today,<br/>Leading Tomorrow</h1>
        <h2 class="text-white mb-4">We are a team of talented designers making websites with Bootstrap</h2>
        <button class="learn-more">
            <span class="circle" aria-hidden="true">
            <span class="icon arrow"></span>
            </span>
            <span class="button-text">Get Started</span>
          </button>
    </div>
</section>


{{-- about --}}
<div id="about" class="about">
    <div class="container my-5">
        <div class="row">
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
                        <i class="bi bi-check"></i>
                        Dive into the rich German culture and language nuances..
                    </li>
                    <li>
                        <i class="bi bi-check"></i>
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
                A highly motivated front-end developer with a substantial background in responsive web design for
                e-commerce platforms. Demonstrates a track record of successfully creating interactive and
                user-centric web designs that are adaptable to varying scales and requirements.
            </p>
        </div>

        <div id="fact-resp" class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-school"></i>
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
                    <i class="bi bi-chalkboard-teacher"></i>
                    <span>+6</span>
                    <p><strong>Courses </strong> </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-book"></i>
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
                <form action="" method="post">
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
            <ul>
              <li><i class="bx bx-chevron-right"></i> <Link to="#">Home</Link></li>
              <li><i class="bx bx-chevron-right"></i> <Link to="#">About us</Link></li>
              <li><i class="bx bx-chevron-right"></i> <Link to="#">Services</Link></li>
              <li><i class="bx bx-chevron-right"></i> <Link to="#">Terms of service</Link></li>
              <li><i class="bx bx-chevron-right"></i> <Link to="#">Privacy policy</Link></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a to="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a to="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a to="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a to="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a to="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
</footer>
