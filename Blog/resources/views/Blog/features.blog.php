@extends('blog.master')

@section('title','features Page')

@section('content')
<div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="{{asset('assets/images/img-9.png')}}"></div>
                  <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>sky</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="newsletter_main">
                     <h1 class="newsletter_taital">NEWSLETTER</h1>
                     <div class="input_box">
                        <input type="text" class="input_text" placeholder="Enter Your email" name="Enter Your email">
                        <input type="text" class="input_text" placeholder="Your name" name="Your name">
                        <div class="send_text"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- newsletter section end --> 
      <!-- recent section start --> 
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-sm-12">
                  <div class="about_img"><img src="{{asset('assets/images/img-10.png')}}"></div>
                  <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
                  <p class="post_text">Post By : 09/06/2019</p>
                  <h2 class="most_text">Most Awesome Blue Lake With Snow <br>foreste</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                  <div class="social_icon_main">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                           <li><a href="#"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                        </ul>
                     </div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="newsletter_main">
                     <h1 class="recent_taital">Recent post</h1>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="{{asset('assets/images/img-6.png')}}"></div>
                        </div>
                        <div class="recent_right">
                           <h3 class="consectetur_text">Consectetur adipiscing</h3>
                           <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                     <div class="recent_box">
                        <div class="recent_left">
                           <div class="image_6"><img src="{{asset('assets/images/img-7.png')}}"></div>
                        </div>
                        <div class="recent_right">
                           <h3 class="consectetur_text">Consectetur adipiscing</h3>
                           <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      @endsection