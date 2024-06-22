@extends('layouts.header')

@section('title','Contact')

@section('content')

<div class="getTouch">
  <div class="left">
    <div>
      <h3>Get in Touch</h3>
      <p>We Are Here For You How Can I Help You!</p>
    </div>
    <div>
      <form method="post">

        @csrf

        <div>
          <input type="text" placeholder="Enter Your Name">
        </div>
        <div>
          <input type="email" placeholder="Enter Your Email address">
        </div>
        <div>
          <textarea id="message" name="message" placeholder="Your Message"></textarea>
        </div>
        <div class="in__submit">
          <input type="submit" value="Submit" class="btn">
        </div>
      </form>
    </div>
  </div>
  <div class="right">
    <img src="images/Contact-us.svg" alt="Contact">
    <div class="contact">
      <div>
        <i class="fa-solid fa-location-dot"></i>
        <span>3446 Cecil Springs</span>
      </div>
      <div>
        <i class="fa-solid fa-phone-volume"></i>
        <span>984-928-1956</span>
      </div>
      <div>
        <i class="fa-solid fa-envelope"></i>
        <span>Jessie123@gmail.com</span>
      </div>
    </div>
  </div>
</div>

@section('footer')

<footer class="footer">
  <div class="row">
    <div class="footer-col logo">
      <h4>company</h4>
      <p>Download The DentaDiagnose Application From The Store </p>
      <div class="store">
        <img src="images/google-play.svg" alt="Google">
        <img src="images/app-store.svg" alt="Apple">
      </div>
    </div>
    <div class="footer-col">
      <h4>Pages</h4>
      <ul>
        <li><a href="#">about us</a></li>
        <li><a href="#">our services</a></li>
        <li><a href="#">privacy policy</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Help</h4>
      <ul>
        <li><a href="{{route('faq')}}">FAQ</a></li>
        <li><a href="{{route('contact')}}">Contct us</a></li>
        <li><a href="#">privacy policy</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Follow us</h4>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

@endsection

@endsection