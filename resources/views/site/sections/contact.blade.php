  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Uzbekistan, Fergana</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://wa.me/qr/5UTOWUK3P7HI1" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              <a href="https://www.facebook.com/muhammadali.turgunaliyev.9" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/muhammad__a__l__i?r=nametag" class="instagram"><i class="bi bi-instagram"></i></a>
               <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a> -->
              <a href="https://t.me/Ali98_uz" class="telegram"><i class="bi bi-telegram"></i></a>
              <a href="tel:+998907823396" class="google-plus"><i class="bi bi-telephone"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email </h3>
            <p>turgunaliyev.98@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Phone</h3>
            <p>+998 90 782 33 96</p>
          </div>
        </div>
      </div>

      <form action="{{route('send')}}" method="POST"  role="form" class="php-email-form mt-4"  >
      @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
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
  </section><!-- End Contact Section -->