@extends('layouts.header')

@section('title','faq')

@section('css')

<!-- Bootstrap Library -->
<link rel="stylesheet" href="css/bootstrap.min.css">

@endsection

@section('content')


  <div class="main-content">
    <div class="container">
      <h1 class="text-center text-uppercase text-light mb-5">FAQ</h1>
      <div class="row flex-center">
        <div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <span class="circle-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="#0687C9"/>
                    </svg>
                  </span>
                  <span class="question">What is DentaDiagnose?</span> 
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  DentaDiagnose is an innovative platform that utilizes artificial intelligence to automate the analysis of dental X-rays, providing efficient and accurate diagnostic tools for dental practitioners.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="circle-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="#0687C9"/>
                    </svg>
                  </span>
                  <span class="question">Who can use DentaDiagnose?</span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  DentaDiagnose is an innovative platform that utilizes artificial intelligence to automate the analysis of dental X-rays, providing efficient and accurate diagnostic tools for dental practitioners.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
                  <span class="circle-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="#0687C9"/>
                    </svg>
                  </span>
                  <span class="question">What is DentaDiagnose?</span> 
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  DentaDiagnose is an innovative platform that utilizes artificial intelligence to automate the analysis of dental X-rays, providing efficient and accurate diagnostic tools for dental practitioners.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> 
                  <span class="circle-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="#0687C9"/>
                    </svg>
                  </span>
                  <span class="question">Who can use DentaDiagnose?</span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  DentaDiagnose is an innovative platform that utilizes artificial intelligence to automate the analysis of dental X-rays, providing efficient and accurate diagnostic tools for dental practitioners.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <span class="circle-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="12" cy="12" r="12" fill="#0687C9"/>
                      </svg>
                  </span>
                  <span class="question">What is DentaDiagnose?</span>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      DentaDiagnose is an innovative platform that utilizes artificial intelligence to automate the analysis of dental X-rays, providing efficient and accurate diagnostic tools for dental practitioners.
                  </div>
              </div>
            </div>
          </div>
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

  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  
  @endsection