@extends('dashboard.layouts.main')
@section('container')
<header id="header" class="fixed-top d-flex align-items-center">
    <h1 class="logo me-auto me-lg-0">
      <a href="layouts.main">Carmellow s</a>
    </h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="nav-item {{ ('$active === "home"') ? 'active' : '' }}">
            <a class="nav-link scrollto" href="">home</a>
          </li>
          <li class="nav-item {{ ('$active === "menu"') ? 'active' : '' }}"><a class="nav-link scrollto active" href="/menu">menu</a></li>
          <li class="nav-item {{ ('$active === "specials"') ? 'active' : '' }}"><a class="nav-link scrollto" href="/specials">specials</a></li>
          <li class="dropdown">
            <a href="#"
              ><span>Order</span> <i class="bi bi-chevron-down"></i
            ></a>
            <ul>
              <li class="nav-item {{ ('$active === "order_meal.index"') ? 'active' : '' }}"><a class="nav-link scrollto" href="order_meal.index">order_meal</a></li>
              <li class="nav-item {{ ('$active === "order_table.index"') ? 'active' : '' }}">
                <a class="nav-link scrollto" href="/order_table.index">order_dining_table</a>
              </li>
            </ul>
            <li class="nav-item {{ ('$active === "contact"') ? 'active' : '' }}">
            <a class="nav-link scrollto" href="/contact">contact</a>
          </li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex ms-auto">Login</a>
    </div>
  </header>

<main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="mt-4"></div>

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-food">Food</li>
              <li data-filter=".filter-snacks">Snacks</li>
              <li data-filter=".filter-drink">Drink</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/Tomahawk_Steak.jfif" class="menu-img" alt="">
            <div class="menu-content">
              <a href="menu_tomahawk-steak.html">Tomahawk Steak</a><span>$6,5</span>
            </div>
            <div class="menu-ingredients">
              Ribs, tomatoes and cut potatoes
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/steak.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Steak</a><span>$6,3</span>
            </div>
            <div class="menu-ingredients">
              Roast beef, a piece of beef fillet, a tomato
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/sushi ikan salmon.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Salmon Sushi</a><span>$5,8</span>
            </div>
            <div class="menu-ingredients">
              Salmon sushi, salmon roe, and suhsi salmon sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/chicken soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Soup</a><span>$4,9</span>
            </div>
            <div class="menu-ingredients">
              Chicken, celery, carrot, and vermicelli
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/hamburger beef.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Beef Hamburger</a><span>$5,2</span>
            </div>
            <div class="menu-ingredients">
              Beef hamburger, a piece of cheese, and tomatoes
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-food">
            <img src="assets/img/menu/pizza keju.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mozzarella Cheese Pizza</a><span>$5,5</span>
            </div>
            <div class="menu-ingredients">
              Mozzarella cheese pizza, and sausage slices
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-snacks">
            <img src="assets/img/menu/mocha cake.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mocha Cake</a><span>$5</span>
            </div>
            <div class="menu-ingredients">
              Mocha cake, cream, and a sprinkle of oreo biscuits
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-snacks">
            <img src="assets/img/menu/chocolate lava.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chocolate Lava</a><span>$4,6</span>
            </div>
            <div class="menu-ingredients">
              Chocolate lava, stoberi, vanilla ice cream
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-snacks">
            <img src="assets/img/menu/french fries.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">French Fries</a><span>$5,4</span>
            </div>
            <div class="menu-ingredients">
              French fries, chili sauce, and mayonnaise
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-snacks">
            <img src="assets/img/menu/chicken nuggets.png" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Nugget</a><span>$4,7</span>
            </div>
            <div class="menu-ingredients">
              Chicken nuggets and chili sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drink">
            <img src="assets/img/menu/chocolate cookies drink.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chocolate Cookies Drink</a><span>$4,5</span>
            </div>
            <div class="menu-ingredients">
              Chocolate cookies, cream, and condensed milk
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drink">
            <img src="assets/img/menu/lemon tea.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lemon Tea</a><span>$4</span>
            </div>
            <div class="menu-ingredients">
              Lemon tea, and a slice of lemon
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drink">
            <img src="assets/img/menu/orange juice.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Orange Juice</a><span>$4,1</span>
            </div>
            <div class="menu-ingredients">
              Orange juice, coconut, a piece of kiwi, and a piece of orange
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-drink">
            <img src="assets/img/menu/americano.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Americano Coffee</a><span>$4,3</span>
            </div>
            <div class="menu-ingredients">
              Americano Coffee with cream
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    
  </main>
@endsection