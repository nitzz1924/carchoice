@extends('frontend.layouts.website')
@section('content')
@section('title', 'Error')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class="breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">404</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>page Not Found</h1>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= --> 
 <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
 <div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding no-top gray error-page">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="error-container">
                   <div class="error-text">404</div>
                   <div class="error-info">The Page Could Not Be Found!</div>
                </div>
             </div>
             <!-- Middle Content Area  End -->
          </div>
          <!-- Row End -->
       </div>
       <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End --> 

@endsection