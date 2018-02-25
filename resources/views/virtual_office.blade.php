@extends('layouts.office')
@section('desk')
<section class="working-area">
  <h1>Cards Shelf</h1>
  <article class="container card">
    <h2>Peter <span class="text-danger">Kimani</span></h2>
    <h3>web/graphic designer</h3>
    <div class="row">
      <div class="col-md-1 no-padding">
        <div class="bar1"></div>
      </div>
      <div class="col-md-2 no-padding">
        <div class="qr"></div>
      </div>
      <div class="col-md-9 no-padding">
        <div class="bar2 bg-danger"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6 card-info">
        <ul>
          <li><span class="fa fa-phone-square"> (+81)-803-1568-951</span></li>
          <li><span class="fa fa-envelope"> admin@webdesignerscenter.com</span></li>
          <li><span class="fa fa-map-marker"> Tokyo koganei shi kajinocho 1-9-32</span></li>
          <li><span class="fa fa-globe"> https://webdesignerscenter.com/</span></li>
        </ul>
      </div>
    </div>
  </article>
<div class="row controls">
  <div class="col-md-3">
    <a href="#"><span class="fa fa-print"></span> Print</a>
  </div>
  <div class="col-md-3">
    <a href="#"><span class="fa fa-telegram"></span> Mail</a>
  </div>
  <div class="col-md-3">
    <a href="#"><span class="fa fa-share-alt"></span> Share</a>
  </div>
  <div class="col-md-3">
    <a href="#"><span class="fa fa-times"></span> close</a>
  </div>
</div>
</section>
<section class="border desk">
  <h2>Desk</h2>
  <ul>
    <li>
      <a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-plane" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-file" aria-hidden="true"></i></a>
    </li>
  </ul>
  <ul>
    <li>
      <a href="#"><i class="fa fa-image" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-gift" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
    </li>
  </ul>
  <ul class="mb-3">
    <li>
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
    </li>
    <li>
      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </li>
  </ul>
</section>
@endsection
