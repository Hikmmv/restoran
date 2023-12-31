@extends('layouts.main')
@section('container')

<section id="hero" class="d-flex align-items-center">
  <div
    class="container position-relative text-center text-lg-start"
    data-aos="zoom-in"
    data-aos-delay="100"
  >
    <div class="row">
      <div class="col-lg-8">
        <h1>Welcome to <span> Restaurants</span></h1>
        <h2>Delivering great food for more than 15 years!</h2>

        <div class="btns">
          <a href="/about" class="btn-menu animated fadeInUp scrollto"
            >About Our Restaurant
          </a>
          <a
            href="/menu"
            class="btn-book animated fadeInUp scrollto mt-2"
            >Our Menu</a
          >
        </div>
      </div>
      <div
        class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
        data-aos="zoom-in"
        data-aos-delay="200"
      >
        <a
          href="https://www.youtube.com/watch?v=u6BOC7CDUTQ"
          class="glightbox play-btn"
        ></a>
      </div>
    </div>
  </div>
</section>
@endsection