@extends('frontend.layouts.website')
@section('content')
@section('title', 'Meassage')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Messages</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>Messages Panel</h1>
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
    <!-- COURSE CONCERN -->
    <section class="section-padding no-top gray">
       <div class="container">
          <div class="row">
             <div class="col-md-12 col-xs-12 col-sm-12 ">
                <div class="message-body">
                   <div class="col-md-4 col-sm-5 col-xs-12">
                      <div class="message-inbox">
                         <div class="message-header">
                            <h4>Inbox</h4>
                            <span><a href="#"><small>Recevied Offers</small></a></span>
                            <span><a href="#" class="active"><small>Sent Offers </small></a></span>
                         </div>
                         <ul class="message-history">
                            <!-- LIST ITEM -->
                            <li class="message-grid">
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>John Doe</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>Honda Civic 2017 Sports Edition</p>
                                     <div class="time">
                                       <span><i class="icon-envelope"></i></span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                            <!-- LIST ITEM -->
                            <li class="message-grid">
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>Alex Curt</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>Ford Focus 1.6 TDCi Edge 5dr</p>
                                     <div class="time">
                                        <span>2 days ago</span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                            <!-- LIST ITEM -->
                            <li class="message-grid">
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/3.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>Sonu Monu</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>2015 Lamborghini Huracan</p>
                                     <div class="time">
                                        <span><i class="icon-envelope"></i></span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                            <!-- LIST ITEM -->
                            <li class="active">
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/4.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>Arslan Tariq</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>BMW I8 1.5 Auto 4X4 2dr </p>
                                     <div class="time">
                                        <span><i class="icon-envelope"></i></span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                            <!-- LIST ITEM -->
                            <li class="message-grid">
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/5.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>Alexa Grey</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>Ferrari 458 Italia Convertibleo</p>
                                     <div class="time">
                                        <span>1 days ago</span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                            <!-- LIST ITEM -->
                            <li>
                               <a href="#">
                                  <div class="image">
                                     <img src="{{ asset('assets/frontend-assets/images/users/6.jpg')}}" alt="">
                                  </div>
                                  <div class="user-name">
                                     <div class="author">
                                        <span>Humayun</span>
                                        <div class="user-status"></div>
                                     </div>
                                     <p>Lcd for sale</p>
                                     <div class="time">
                                        <span>5 days ago</span>
                                     </div>
                                  </div>
                               </a>
                            </li>
                            <!-- END / LIST ITEM -->
                         </ul>
                      </div>
                   </div>
                   <div class="col-md-8 clearfix col-sm-5 col-xs-12 message-content">
                      <div class="message-details">
                         <div class="author">
                            <div class="image">
                               <img src="{{ asset('assets/frontend-assets/images/users/3.jpg')}}" alt="">
                            </div>
                            <span class="author-name">Muhammad Umair</span>
                            <em>5 days ago</em>
                         </div>
                         <h2><a href="#">2017 Audi A4 sport Auto MY17 For Sale</a></h2>
                         <ul class="messages">
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Morning! How are you doing today?
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 8:53 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Hey! I am doing good! What about you?
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 8:55 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Doing great!
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 8:56 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  We just received a new project.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 8:56 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Sweet! What is it about?
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:00 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  An Android and IOS app for client X.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:03 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Is it a complex project? What is the deadline?
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:07 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Nah! Rather simple for the team. We have 3 months to deliver the final product.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:08 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  The client has a budget of $5000 btw.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:09 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  That is awesome!
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:12 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  With that budget we can make something pretty powerful. As soon as I get to the office we can start the team briefing!
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:12 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Absolutely! Can't wait to get started!
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:14 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  I am just grabbing the coffee and doughnuts. I will be at the office ASAP.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:17 AM</div>
                               </div>
                            </li>
                            <li class="friend-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Sure. We are wrapping up the previous project, you have some time.
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:18 AM</div>
                               </div>
                            </li>
                            <li class="my-message clearfix">
                               <figure class="profile-picture">
                                  <img src="{{ asset('assets/frontend-assets/images/users/1.jpg')}}" class="img-circle" alt="Profile Pic">
                               </figure>
                               <div class="message">
                                  Alrighty, cool!
                                  <div class="time"><i class="fa fa-clock-o"></i> Today 9:17 AM</div>
                               </div>
                            </li>
                         </ul>
                         <div class="chat-form ">
                            <form role="form" class="form-inline">
                               <div class="form-group">
                                  <input style="width: 100%" placeholder="Type a message here..." class="form-control" type="text">
                               </div>
                               <button class="btn btn-theme rounded-4" type="submit">Send</button>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- END / COURSE CONCERN -->
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End -->

 <!-- For This Page Only -->
 <script type="text/javascript">
    (function($) {
    "use strict";
    $('.message-history').wrap('<div class="list-wrap"></div>');
    function scrollbar() {
       var $scrollbar = $('.message-inbox .list-wrap');
       $scrollbar.perfectScrollbar({
           maxScrollbarLength: 150,
       });
       $scrollbar.perfectScrollbar('update');
    }
    scrollbar();
    $('.messages').wrap('<div class="list-wraps"></div>');
    function scrollbar1() {
       var $scrollbar1 = $('.message-details .list-wraps');
       $scrollbar1.perfectScrollbar({
           maxScrollbarLength: 150,
       });
       $scrollbar1.perfectScrollbar('update');
    }
     scrollbar1();
    })(jQuery);
 </script>

@endsection