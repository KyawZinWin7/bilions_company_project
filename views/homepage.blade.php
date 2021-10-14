@extends('layout.master')

@section('body')
<!-- Remember to include jQuery :) -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  <!-- header section -->
  <section class="mt-5">
    <div class="container" id="home">
      <div class="row welcome-section">
        <div class="col-md-6 welcome-right-resp">
          <div>
            <img src="./assets/images/image-1.png" alt="" class="w-100 h-100">
          </div>
        </div>
        <div class="col-md-6 welcome-left">
          <!--start background radiant  -->
          <div class="background-rad-1"></div>
          <div class="background-rad-2"></div>
          <div class="background-rad-3"></div>
          <div class="background-rad-4"></div>
          <div class="background-rad-5"></div>
          <div class="background-rad-6"></div>
          <div class="background-rad-7"></div>
          <div class="background-rad-8"></div>
          <div class="background-rad-9"></div>
          <div class="background-rad-10"></div>
          <div class="background-rad-11"></div>
          <div class="background-rad-12"></div>
          <!-- end background radiant -->
          <p class="welcome-heading">Welcome To Bilions</p>
          <p class="welcome-sub-heading">Web & Mobile Design / Development</p>
          <p class="welcome-text">We are team of talented designers/developer who make <br>outstanding websites and mobile
            application.</p>

          <div>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20.592" height="28.827" viewBox="0 0 20.592 28.827">
                <g id="location" transform="translate(-6.75 -2.25)">
                  <path id="Path_71" data-name="Path 71"
                    d="M19.868,13.309a2.059,2.059,0,1,1-2.059-2.059A2.059,2.059,0,0,1,19.868,13.309Z"
                    transform="translate(-0.763 -0.763)" fill="#c28cff" />
                  <path id="Path_72" data-name="Path 72"
                    d="M17.046,2.25A10.09,10.09,0,0,0,6.75,12.1c0,2.584,1.178,6.023,3.5,10.217A75.513,75.513,0,0,0,15.4,30.242a2.043,2.043,0,0,0,3.3,0,75.812,75.812,0,0,0,5.148-7.929c2.321-4.193,3.5-7.631,3.5-10.217A10.09,10.09,0,0,0,17.046,2.25Zm0,14.414a4.118,4.118,0,1,1,4.118-4.118A4.118,4.118,0,0,1,17.046,16.664Z"
                    transform="translate(0)" fill="#c28cff" />
                </g>
              </svg>
            </span>
            <span class="ml-1 " style="color: #C28BFB; font-weight: bold;">Bangkok, Thailand</span>
          </div>

          <button class="btn btn-light mt-4 pl-4 pr-4 pt-2 pb-2 welcome-button">Get Started</button>
        </div>
        <div class="col-md-6 welcome-right">

        </div>
      </div>
    </div>
  </section>
  <!-- end header section -->

  <!-- start about us section 1 -->
  <section class="mt-5 pt-5">
    <div class="container mt-5 pt-5" id="about">
      <div class="box-header text-center">
        <h2 class="p-3 box-title">About Us</h2>
      </div>
      <div class="box-body ">
        <div class="row">
          <div class="col-md-3 m-5 pl-3 ">
            <div>
              <img src="./assets/images/image-2.svg" alt="" class="w-100 h-100">
            </div>
          </div>
          <div class="col-md-7 about-us-text">
            <div class="pt-5 pb-5 pr-5" style="margin-top: 20px;">
              <h2 class="our-company-head">Our Company</h2>
              <p class="mt-5 ml-5">We are now providing services to IT Software Companies and
                Telecommunication Companies. Our clients include Myanmar IT
                Companies and Japan, Singapore, Thailand, USA IT Companies who start their
                Offshore Development Centers in Myanmar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end about us section-1 -->

  <!-- start our services section 2 -->
  <section class="mt-5 pt-5">
    <div class="container boxes-container text-center" id="service">
      <div class="title">
        <h2 class="px-3 py-2 mb-0 mt-0">Our Services</h2>
      </div>
      <div class="row pt-5 m-auto">
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="box-1">
            <div class="d-flex">
              <div class="box-1-image">
                <img src="./assets/images/image-3.svg" alt="" class="w-100 h-100">
              </div>
              <div class="text-left pt-5">
                <h3>UX / UI Design</h3>
                <p>We provide award-wining
                  design that customer will love.</p>
                <a href="gallery/uxui">
                  <button class="btn btn-outline-light box-1-btn pl-5 pr-5">Explore</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="box-2">
            <div class="d-flex">
              <div class="box-2-image">
                <img src="./assets/images/image-4.svg" alt="" class="w-100 h-100">
              </div>
              <div class="text-left pt-4">
                <h3>Mobile App<br>Development</h3>
                <p>We make world standard mobile application that your user will love</p>
                <a href="gallery/mobile">
                  <button class="btn btn-outline-light box-2-btn pl-5 pr-5">Explore</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="box-3">
            <div class="d-flex">
              <div class="box-3-image">
                <img src="./assets/images/image-5.svg" alt="" class="w-100 h-100">
              </div>
              <div class="text-left pt-4">
                <h3>Web Application<br>Development</h3>
                <p>We make ERP, E-commerce, POS system that is secure and meet the expectations.</p>
                <a href="gallery/web">
                  <button class="btn btn-outline-light box-3-btn pl-5 pr-5">Explore</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-4">
          <div class="box-4">
            <div class="d-flex">
              <div class="box-4-image">
                <img src="./assets/images/image-6.svg" alt="" class="w-100 h-100">
              </div>
              <div class="text-left pt-5 mt-2">
                <h3>Landing Website</h3>
                <p>We create best landing website with SEO friendly</p>
                <a href="gallery/landing">
                  <button class="btn btn-outline-light box-4-btn pl-5 pr-5">Explore</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end our services section-2 -->

  <!-- start our team section-3 -->
  <section>
    <div class="container text-center mt-5 pt-3 pl-2" id="ourteam">
      <div class="bejay">
        <h2 class="px-4 py-2 mb-0 mt-0">Our Team</h2>
      </div>

      <div class="text-left pl-5 mt-4 mb-4">
        <div class="zin">
          <h3>Meet The Team</h3>
        </div>
      </div>

      <div class="row mt-5 text-left team-member-container">
        <div class="col-lg-4 col-md-6 col-12 team-member-founder">
          <div class="d-flex team-member-top">
            <div class="col-md-5 avatar-1">
            </div>
            <div class="col-md-7 team-member-top-right">
              <div>
                <div class="ul-1">Founder</div>
              </div>
              <h4 class="mt-3">AJ</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 team-member">
          <div class="d-flex team-member-top">
            <div class="col-md-5 avatar-2">
            </div>
            <div class="col-md-7 team-member-top-right">
              <div>
                <div class="ul-2">UX /UI Designer</div>
              </div>
              <h4 class="mt-3">Kayson Jett</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 team-member">
          <div class="d-flex team-member-top">
            <div class="col-md-5 avatar-3">
            </div>
            <div class="col-md-7 team-member-top-right">
              <div>
                <div class="ul-3">Web Developer</div>
              </div>
              <h4 class="mt-3">Hlaing Min Than</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 team-member">
          <div class="d-flex">
            <div class="col-md-5 avatar-4">
            </div>
            <div class="col-md-7 team-member-right">
              <div>
                <div class="ul-4">Web Developer</div>
              </div>
              <h4 class="mt-3">Gon Khaung</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 team-member">
          <div class="d-flex">
            <div class="col-md-5 avatar-5">
            </div>
            <div class="col-md-7 team-member-right">
              <div>
                <div class="ul-5">Web Developer</div>
              </div>
              <h4 class="mt-3">Raymond</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 team-member">
          <div class="d-flex ">
            <div class="col-md-5 avatar-6">
            </div>
            <div class="col-md-7 team-member-right">
              <div>
                <div class="ul-6">Web Developer</div>
              </div>
              <h4 class="mt-3">Kyaw Zin Win</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 team-member">
          <div class="d-flex team-member-bottom">
            <div class="col-md-5 avatar-7">
            </div>
            <div class="col-md-7 team-member-top-right">
              <div>
                <div class="ul-8">Web Developer</div>
              </div>
              <h4 class="mt-3">Zin Kyaw Moe</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end our team section-3 -->

  <!-- start contact us section-4 -->
  <section class="mt-5">
    <div class="container text-center contact-us" id="contact">
      <h2>Contact Us</h2>
      <p>Feel free to contact us any time. We will get<br>
        back to you as soon as we can!</p>

      <div class="row col-md-12 m-auto text-left">
        <h3 class="ul-1 ml-3">Info</h3>
      </div>
      <div class="row d-flex contact-bottom text-left">
        <div class="col-md-6 contact-us-left">
          <div class="row contact-us-left-email d-flex">
            <div class="col-lg-2 contact-us-icon">
              <img src="./assets/images/email.svg" class="contact-us-left-icon ml-4" alt="">
            </div>
            <div class="col-lg-10 contact-us-left-text-container">
              <p class="contact-us-left-text">hello@bilions.org<br>aj.kumarsharno@gmail.com</p>
            </div>
          </div>
          <div class="row col-md-12 contact-us-left-phone d-flex">
            <div class="col-md-2 contact-us-left-phone-icon">
              <img src="./assets/images/phone.svg" class="contact-us-left-icon" alt="">
            </div>
            <div class="col-md-10 contact-us-left-text-container">
              <p class="contact-us-left-text">+66 620 350 322<br>+959 780 398 840</p>
            </div>
          </div>
          <div class="row col-md-12 contact-us-left-address d-flex">
            <div class="col-md-2 contact-us-left-address-icon">
              <img src="./assets/images/map-marker-line.svg" class="contact-us-left-icon" alt="">
            </div>
            <div class="col-md-10 contact-us-left-text-container">
              <p class="contact-us-left-text">On Nut Rd, Suan Luang, Bangkok 10250, Bangkok, Thailand</p>
            </div>
          </div>
          <div class="row col-md-12 contact-us-left-time d-flex">
            <div class="col-md-2 contact-us-left-time-icon">
              <img src="./assets/images/clock.svg" class="contact-us-left-icon" alt="">
            </div>
            <div class="col-md-10 contact-us-left-text-container">
              <p class="contact-us-left-text">Monday - Sunday<br>08:00AM - 10:00PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 contact-us-right">
          <div class="col-md-12 contact-us-right-inputs">
            <div class="col-md-12 contact-us-right-input ">
              <input type="text" class="contact-us-inputs" id="name" placeholder="Name">
            </div>
            <div class="col-md-12 contact-us-right-input ">
              <input type="email" class="contact-us-inputs" id="email" placeholder="Email">
            </div>
            <div class="col-md-12 contact-us-right-input ">
              <input type="text" class="contact-us-inputs" id="subject" placeholder="Subject">
            </div>
            <div class="col-md-12 contact-us-right-input ">
              <textarea type="text" class="contact-us-inputs" id="body" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12 contact-us-right-input  mt-3">
              <button id="contact_us_button" class="btn btn-outline-light contact-us-right-btn pl-5 pr-5">Send</button>


              <button class="btn btn-outline-light contact-us-right-btn" id="loading_button" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Sending...
              </button>

              <div class='example'>
                  <div class='block'>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                      <div class='item'></div>
                  </div>
              </div>

              

            </div>

            <div class="modal" style="height: auto;">
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row socials-contact">
        <div class="col socials-contact-container d-flex justify-content-center m-auto">
          <div class="col-md-6 d-flex socials-contact-left pt-3">
            <div class="mr-4 ml-3">
              <p class="contact-social-icons">
                <i class="fab fa-facebook-f"></i>
              </p>
            </div>
            <div class="mr-4 ml-2">
              <p class="contact-social-icons">
                <i class="fab fa-instagram"></i>
              </p>
            </div>
            <div class="ml-2">
              <p class="contact-social-icons">
                <i class="fab fa-twitter"></i>
              </p>
            </div>
          </div>
          <div class="col-md-6 contact-us-bilions mr-4">
            <h3 class="text-right">&mdash;&nbsp;&nbsp; Bilions</h3>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- end contact us section-4 -->
@endsection
