@extends('layouts.main')

@section('container')
<body>
  <!-- ======= Specials Section ======= -->
  <section id="" class="specials">
    <div class="container" data-aos="fade-up">
      
      <div class="section-title">
        <h2>Package</h2>
          <p>View our package menu</p>
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Package One</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Package Two</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Package Of Three</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Package Of Four</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Package Of Five</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 class="mt-3">PAKET 1</h3>
                    <h5>Food package one, Consisting of</h5>
                    <p class="mt-3 fst-italic">1. Chicken Soup</p>
                    <p class="fst-italic">2. Chocolate Cookies Drink</p>
                    <p class="fst-italic">3. Mozzarella Cheese Pizza </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu paket/1.png" alt="" width="240" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 class="mt-3">PAKET 2</h3>
                    <h5>Food package two, Consisting of</h5>
                    <p class="mt-3 fst-italic">1. Steak</p>
                    <p class="fst-italic">2. French Fries</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu paket/2.png" alt="" width="240" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 class="mt-3">PAKET 3</h3>
                    <h5>Food package of three, Consisting of</h5>
                    <p class="mt-3 fst-italic">1. Chicken Soup</p>
                    <p class="fst-italic">2. Orange Juice </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu paket/3.png" alt="" width="240" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 class="mt-3">PAKET 5</h3>
                    <h5>Food package of four, Consisting of</h5>
                    <p class="mt-3 fst-italic">1. Salmon Sushi</p>
                    <p class="fst-italic">2. Lemon Tea </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu paket/4.png" alt="" width="240" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 class="mt-3">PAKET 5</h3>
                    <h5>Food package of five, Consisting of</h5>
                    <p class="mt-3 fst-italic">1. Tomahawk Steak</p>
                    <p class="fst-italic">2. Chocolate Lava </p>
                    <p class="fst-italic">3. Chicken Nugget </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/menu paket/5.png" alt="" width="240" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
  </section>
  <!-- End Specials Section -->
</body>
@endsection