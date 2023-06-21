@extends('layouts.main')
@section('container')
<div class="section-title mt-3">
    <h2>Reservation</h2>
    <p>Book a Table</p>
  </div>

  <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
    <div class="row px-2">
      <div class="col-lg-6 col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        {{--  <div class="validate"></div>  --}}
      </div>
      <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
        {{--  <div class="validate"></div>  --}}
      </div>
      <div class="col-lg-6 col-md-6 form-group mt-3">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        {{--  <div class="validate"></div>  --}}
      </div>
      <div class="col-lg-6 col-md-6 form-group mt-3">
        <input type="text" class="form-control" name="address" id="address" placeholder="Your Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        {{--  <div class="validate"></div>  --}}
      </div>
      <!--start-->
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/1.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_1.html">Tomahawk Steak<span> $6,5</span></a>
          <p class="card-text text-black">Ribs, tomatoes and cut potatoes</p>
          <input type="number" class="form-control bg-white text-black" name="tomahawksteak" id="tomahawksteak" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/2.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_2.html">Steak<span> $6,3</span></a>
          <p class="card-text text-black">Roast beef, a piece of beef fillet, a tomato</p>
          <input type="number" class="form-control bg-white text-black" name="steak" id="steak" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/3.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_3.html">Salmon Sushi<span> $5,8</span></a>
          <p class="card-text text-black">Salmon sushi, salmon roe, and suhsi salmon sauce</p>
          <input type="number" class="form-control bg-white text-black" name="salmonsushi" id="salmonsuhsi" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/4.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_4.html">Chicken Soup<span> $4,9</span></a>
          <p class="card-text text-black">Chicken, celery, carrot, and vermicelli</p>
          <input type="number" class="form-control bg-white text-black" name="chikensoup" id="chikensoup" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/5.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_5.html">Beef Hamburger<span> $5,2</span></a>
          <p class="card-text text-black">Beef hamburger, a piece of cheese, and tomatoes</p>
          <input type="number" class="form-control bg-white text-black" name="beefhamburger" id="beefhamburger" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/6.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_6.html">Mozzarella Cheese Pizza<span> $5,5</span></a>
          <p class="card-text text-black">Mozzarella cheese pizza, and sausage slices</p>
          <input type="number" class="form-control bg-white text-black" name="mozzarellacheesepizza" id="" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/7.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_7.html">Mocha Cake<span> $5</span></a>
          <p class="card-text text-black">Mocha cake, cream, and a sprinkle of oreo biscuits</p>
          <input type="number" class="form-control bg-white text-black" name="mochacake" id="mockacake" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/8.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_8.html">Chocolate Lava<span> $4,6</span></a>
          <p class="card-text text-black">Chocolate lava, stoberi, vanilla ice cream</p>
          <input type="number" class="form-control bg-white text-black" name="chocolatelava" id="chocolatelava" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/9.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_9.html">French Fries<span> $5,4</span></a>
          <p class="card-text text-black">French fries, chili sauce, and mayonnaise</p>
          <input type="number" class="form-control bg-white text-black" name="frenchfries" id="frenchfries" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/10.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_10.html">Chicken Nugget<span> $4,7</span></a>
          <p class="card-text text-black">Chicken nuggets and chili sauce</p>
          <input type="number" class="form-control bg-white text-black" name="chickennugget" id="chickennugget" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/11.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_11.html">Chocolate Cookies Drink<span> $4,5</span></a>
          <p class="card-text text-black">Chocolate cookies, cream, and condensed milk</p>
          <input type="number" class="form-control bg-white text-black" name="chocolatecookiesdrink" id="chocolatecookiesdrink" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/12.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_12.html">Lemon Tea<span> $4</span></a>
          <p class="card-text text-black">Lemon tea, and a slice of lemon</p>
          <input type="number" class="form-control bg-white text-black" name="lemontea" id="lemontea" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/13.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_13.html">Orange Juice<span> $4,1</span></a>
          <p class="card-text text-black">Orange juice, coconut, a piece of kiwi, and a piece of orange</p>
          <input type="number" class="form-control bg-white text-black" name="orangejuice" id="orangejuice" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
      <div class="card m-3 col-lg-4 col-sm-2 col-md-3 bg-secondary" style="width: 18rem;">
        <img class="card-img-top mt-3" width="200" src="assets/img/order/14.png" alt="Card image cap">
        <div class="card-body">
          <a href="menu_14.html">Americano Coffee<span> $4,3</span></a>
          <p class="card-text text-black">Americano Coffee with cream and sprinkling of coffee </p>
          <input type="number" class="form-control bg-white text-black" name="americanocoffee" id="americanocoffee" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
        </div>
      </div>
    <div class="text-center mt-3"><button type="submit"><a href="/order_meal.index" class="text-white"> Order a food</a></button></div>
  </form>

</div>
</section>
@endsection