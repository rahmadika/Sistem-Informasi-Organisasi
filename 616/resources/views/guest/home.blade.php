@extends('layouts.guest')
@section('content')
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Welcome To Our Website</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">We are future youth who hold fast to the Qur'an and Hadist</h2>
        <div data-aos="fade-up" data-aos-delay="800">
          <a href="{{ route('guest.about') }}" class="btn-get-started scrollto">About Us</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="{{ asset('img/RAL.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
@endsection