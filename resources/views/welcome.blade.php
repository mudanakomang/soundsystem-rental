@extends('layouts.master')
@section('intro')
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Don't Miss This Event</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
        <a href="#events" class="btn btn-large">Events</a> 
    </div>
  </div>
</section>
@endsection
@section('services')
<section id="services" class="services service-section">
    <div class="container">
    <div class="section-header">
                  <h2 class="wow fadeInDown animated">News & Updates</h2>
                  <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
              </div>
      <div class="row"> 
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-recycle"></span>
          <div class="services-content">
            <h5>Musical Night</h5>
        <b>Day 1</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
          <div class="services-content">
            <h5>Dancing Night</h5>
        <b>Day 2</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
          </div>
        </div> 
        <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
          <div class="services-content">
            <h5>Food Night</h5>
        <b>Day 3</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
          </div>
        </div> 
      </div>
    </div>
  </section> 
@endsection
@section('event')
<section id="events" class="section teams"> 
    <div class="container">
        <div class="section-header">
                  <h2 class="wow fadeInDown animated">Events</h2>
                  <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
              </div>
      <div class="row">
        <div class="col-md-6">
              <img src="{{ asset('images/pic2.jpg')}}" class="img-responsive" alt="">
        </div>
        <div class="col-md-6">
          <div class="col-md-11">
            <h3>Our Tours</h3>
            <ul class="tour-list">
              <li>
                <div class="tour-date">16<span>Feb<br><em>2016</em></span></div>
                <div class="tour-info">NewYork, US - <a href="#">Music Area</a></div>
                <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
              </li>
              <li>
                <div class="tour-date">22<span>Mar<br><em>2016</em></span></div>
                <div class="tour-info">Delhi, Ind - <a href="#">Open Theater</a></div>
                <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
              </li>
              <li>
                <div class="tour-date">12<span>April<br><em>2016</em></span></div>
                <div class="tour-info">Texas, US - <a href="#">Eden Gardens</a></div>
                <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
              </li>
              <li>
                <div class="tour-date">26<span>April<br><em>2016</em></span></div>
                <div class="tour-info">England, UK - <a href="#">BNK Stadium</a></div>
                <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
              </li>
              <li>
                <div class="tour-date">10<span>June<br><em>2016</em></span></div>
                <div class="tour-info">Tokiyo, Japan - <a href="#">KMT Grounds</a></div>
                <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   </section>
@endsection