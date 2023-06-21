@extends('layouts.main')
@section('container')
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title mt-3">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>

      <form action="/orders" method="post" role="form">
        @method('post')
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            {{--  <div class="validate"></div>  --}}
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            {{--  <div class="validate"></div>  --}}
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="your_Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            {{--  <div class="validate"></div>  --}}
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            {{--  <div class="validate"></div>  --}}
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="time" id="time" placeholder="time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            {{--  <div class="validate"></div>  --}}
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="people" id="people" placeholder="of_people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            {{--  <div class="validate"></div>  --}}
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="message"></textarea>
          {{--  <div class="validate"></div>  --}}
        </div>
        {{--  <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>  --}}
        <div class="text-center"><a href="{{ route('orders') }}" class="btn btn-primary text-white">Book a Table</a></button></div>
      </form>
    </div>
  </section>
  @endsection