@extends('layouts.v-office')
@section('main')
<main ng-show="active_shelf==0">
  <h1><i class="icn fa fa-exclamation-triangle"></i> No open shelf <span class="tag pull-right text-muted hidden-xs-down"><i class="fa fa-dashboard"></i> Dashboard</span></h1>
</main><!--end websites shelf-->

<main ng-show="active_shelf==1">
  <h1><i class="icn fa fa-book"></i> Business card </span></h1>
  <article ng-repeat="card in cards" class="container biz-card" ng-show="active_card_shelf_item==1">
    <h2>@{{card.first_name}} <span  class="text-danger">@{{card.second_name}}</span></h2>
    <h3>@{{title}}</h3>
    <div class="row">
        <div class="bar2 bg-danger"></div>
        <div class="qr"></div>
        <div class="bar1"></div>
    </div>
      <div class="card-details">
        <ul>
          <li><span class="fa fa-phone-square"> @{{card.telephone}}</span></li>
          <li><span class="fa fa-envelope"> @{{card.email}}</span></li>
          <li><span class="fa fa-map-marker"> @{{card.address}}</span></li>
          <li><span class="fa fa-globe"> @{{card.website}}</span></li>
        </ul>
      </div>
  </article>
  <ul class="list-inline item-controls" ng-show="active_card_shelf_item==1">
    <li class="list-inline-item"><a class="" href="#"><span class="fa fa-print"></span> Print</a></li>
    <li class="list-inline-item" ng-click="edit_card=1"><a  href="#"><span class="fa fa-edit"></span> Edit</a></li>
    <li class="list-inline-item" ng-click="edit_card=1"><a  href="#"><span class="fa fa-download"></span> Download</a></li>
    <li class="list-inline-item" ng-click="active_card_shelf_item=0"><a class="" href="#"><span class="fa fa-times"></span> close</a></li>
  </ul>
</main><!--end cards shelf-->
@endsection
