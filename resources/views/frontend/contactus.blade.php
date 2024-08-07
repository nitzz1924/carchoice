@extends('frontend.layouts.website')
@section('content')
@section('title', 'Contact Us')

 <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
 <div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Contact</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>Fell Free To Contact Us</h1>
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
    <section class="section-padding gray no-top ">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                   <form method="post"  action="#">
                      <div class="row">
                         <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-group">
                               <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                               <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                               <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-group">
                               <textarea cols="12" rows="7" placeholder="Message..." id="message" name="message" class="form-control" required></textarea>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-theme rounded-4" type="submit">Send Message</button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   <div class="contactInfo">
                      <div class="singleContadds">
                         <i class="fa fa-map-marker"></i>
                         <p> Model Town Link Road Lahore, 60 Street. Pakistan 54770 </p>
                      </div>
                      <div class="singleContadds phone">
                         <i class="fa fa-phone"></i>
                         <p> 0123 456 78 90 - <span>Office</span> </p>
                         <p> 0123 456 78 90 - <span>Mobile</span> </p>
                      </div>
                      <div class="singleContadds"> <i class="fa fa-envelope"></i> <a href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a> <a href="mailto:contact@scriptsbundle.com">contact@scriptsbundle.com</a> </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- Row End --> 
       </div>
       <!-- Main Container End --> 
    </section>
   
 </div>
 <!-- Main Content Area End --> 

@endsection