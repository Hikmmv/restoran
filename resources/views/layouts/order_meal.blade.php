<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurants</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top"></div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0">
        <a href="index.html">Carmellow's</a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li>
            <a class="nav-link scrollto" href="index.html">Home</a>
          </li>
          <li><a class="nav-link scrollto" href="menu.html">Menu</a></li>
          <li><a class="nav-link scrollto" href="specials.html">Specials</a></li>
          <li class="dropdown">
            <a href="#"
              ><span class="active">Order</span> <i class="bi bi-chevron-down active"></i
            ></a>
            <ul>
              <li><a href="order_a_meal.blade.php">Order a meal</a></li>
              <li>
                <a href="order_dining_table.blade.php">Order dining table</a>
              </li>
            </ul>
            <li>
            <a class="nav-link scrollto" href="contact.html">Contact</a>
          </li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="signin.html" class="book-a-table-btn scrollto d-none d-lg-flex">Sign In</a>
    </div>
  </header>
  <!-- End Header -->
  <br>
  <br>

    <!-- ======= Hero Section ======= -->
    <div class="mt-5"></div>
    <!-- End Hero -->
  

  {{--  <main id="main">

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title mt-3">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form action="/pembayaran" method="get" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="row px-2">
            <div class="col-lg-6 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="your_name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="your_email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="your_phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="address" id="address" placeholder="your_address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-6 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="total" id="total" placeholder="total" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>

            <!--start-->
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/1.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Tomahawk Steak<span> $6,5</span></a>
                <p class="card-text text-black">Ribs, tomatoes and cut potatoes</p>
                <input type="number" class="form-control bg-white text-black" name="tomahawksteak" id="tomahawksteak" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/2.png" alt="Card image cap">
              <div class="card-body">
                <a href="#">Steak<span> $6,3</span></a>
                <p class="card-text text-black">Roast beef, a piece of beef fillet, a tomato</p>
                <input type="number" class="form-control bg-white text-black" name="steak" id="steak" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/3.png" alt="Card image cap">
              <div class="card-body">
                <a href="#">Salmon Sushi<span> $5,8</span></a>
                <p class="card-text text-black">Salmon sushi, salmon roe, and suhsi salmon sauce</p>
                <input type="number" class="form-control bg-white text-black" name="salmonsushi" id="salmonsuhsi" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/4.png" alt="Card image cap">
              <div class="card-body">
                <a href="#">Chicken Soup<span> $4,9</span></a>
                <p class="card-text text-black">Chicken, celery, carrot, and vermicelli</p>
                <input type="number" class="form-control bg-white text-black" name="chikensoup" id="chikensoup" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/5.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Beef Hamburger<span> $5,2</span></a>
                <p class="card-text text-black">Beef hamburger, a piece of cheese, and tomatoes</p>
                <input type="number" class="form-control bg-white text-black" name="beefhamburger" id="beefhamburger" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/6.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Mozzarella Cheese Pizza<span> $5,5</span></a>
                <p class="card-text text-black">Mozzarella cheese pizza, and sausage slices</p>
                <input type="number" class="form-control bg-white text-black" name="mozzarellacheesepizza" id="" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/7.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Mocha Cake<span> $5</span></a>
                <p class="card-text text-black">Mocha cake, cream, and a sprinkle of oreo biscuits</p>
                <input type="number" class="form-control bg-white text-black" name="mochacake" id="mockacake" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/8.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Chocolate Lava<span> $4,6</span></a>
                <p class="card-text text-black">Chocolate lava, stoberi, vanilla ice cream</p>
                <input type="number" class="form-control bg-white text-black" name="chocolatelava" id="chocolatelava" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/9.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">French Fries<span> $5,4</span></a>
                <p class="card-text text-black">French fries, chili sauce, and mayonnaise</p>
                <input type="number" class="form-control bg-white text-black" name="frenchfries" id="frenchfries" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/10.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Chicken Nugget<span> $4,7</span></a>
                <p class="card-text text-black">Chicken nuggets and chili sauce</p>
                <input type="number" class="form-control bg-white text-black" name="chickennugget" id="chickennugget" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/11.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Chocolate Cookies Drink<span> $4,5</span></a>
                <p class="card-text text-black">Chocolate cookies, cream, and condensed milk</p>
                <input type="number" class="form-control bg-white text-black" name="chocolatecookiesdrink" id="chocolatecookiesdrink" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/12.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Lemon Tea<span> $4</span></a>
                <p class="card-text text-black">Lemon tea, and a slice of lemon</p>
                <input type="number" class="form-control bg-white text-black" name="lemontea" id="lemontea" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/13.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Orange Juice<span> $4,1</span></a>
                <p class="card-text text-black">Orange juice, coconut, a piece of kiwi, and a piece of orange</p>
                <input type="number" class="form-control bg-white text-black" name="orangejuice" id="orangejuice" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
            <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
              <img class="card-img-top mt-3" width="200" src="/Restaurants/assets/img/order/14.png" alt="Card image cap">
              <div class="card-body">
                <a href="menu_tomahawk-steak.html">Americano Coffee<span> $4,3</span></a>
                <p class="card-text text-black">Americano Coffee with cream</p>
                <input type="number" class="form-control bg-white text-black" name="americanocoffee" id="americanocoffee" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
            </div>
          <div class="text-center mt-3">
            <a href="/pembayaran" class="btn btn-"> Order a food</a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="/pembayaran" method="get" enctype="multipart/form-data">
                          @csrf
                          {{--  <input type="hidden" name="_csrf" value="{{ csrf_field() }}">  --}}
                          <div class="modal-body">
                              <div class="mb-3">
                                  <label for="formGroupExampleInput" class="form-label">your_name</label>
                                  <input type="text" name="your_name" {{ $data->your_name }} class="form-control"
                                      id="formGroupExampleInput" placeholder="Example input placeholder">
                              </div>
                              <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">your_phone</label>
                                  <input type="number" name="nama"{{ $data->your_phone }} class="form-control"
                                      id="formGroupExampleInput2" placeholder="Another input placeholder">
                              </div>
                              <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">your_email</label>
                                  <input type="text" name="your_email" {{ $data->your_email }} class="form-control"
                                      id="formGroupExampleInput2" placeholder="Another input placeholder">
                              </div>
                              <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label"></label>your_address
                                  <input type="text" name="your_email" {{ $data->your_address }} class="form-control"
                                      id="formGroupExampleInput2" placeholder="Another input placeholder">
                              </div>
                              <div class="mb-3">
                                  <label for="formGroupExampleInput2" class="form-label">total</label>
                                  <input type="number" name="total" {{ $data->total }} class="form-control"
                                      id="formGroupExampleInput2" placeholder="Another input placeholder">
                              </div>
                              <td>
                                  <a href="/daletepembayaran/{$id}" class="btn btn-danger btn-sm">Dalete</a>
                                  <a href="/updatepembayaran/{$id}" class="btn btn-success btn-sm">EDIT</a>
                              </td>
                          </div>
                          <div class="modal-footer">
                              <a href="/daletepembayaran/{$id}" class="btn btn-danger btn-sm">Dalete</a>
                                  <a href="/tampilkanpembayaran/{$id}" class="btn btn-success btn-sm">EDIT</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <div class="card mt-2">
              <div class="card-body">
                  <table class="table">
                      <thead>
                          <th scope="col">NO</th>
                          <th scope="col">your_name</th>
                          <th scope="col">your_phone</th>
                          <th scope="col">your_email</th>
                          <th scope="col">your_address</th>
                          <th scope="col">total</th>
                          <th scope="col">Aksi</th>
                      </thead>
                      <tbody>
                          @foreach ($data as $key => $row)
                              <th scope='id'>{{ ++$key }}</th>
                              <td>{{ $row->your_name }}</td>
                              <td>{{ $row->your_phone }}</td>
                              <td>{{ $row->your_email }}</td>
                              <td>{{ $row->your_address }}</td>
                              <td>{{ $row->total }}</td>
                              <td>
                                  <a href="/daletepembayaran/{$id}" class="btn btn-danger btn-sm">Dalete</a>
                                  <a href="/updatepembayaran/{$id}" class="btn btn-success btn-sm">EDIT</a>
                              </td>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
          </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

  </main><!-- End #main -->  --}}

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      <span>Restaurants</span></strong> Carmellow's
      </div>
      <div class="credits">
        Design by<strong>F.H.A</strong>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>