
@extends('blog.master')

@section('title','About Page')

@section('content')
<div class="about_section layout_padding">
    <div class="container">
       <div class="row">
         @foreach ($products as $item)
             @if($item->status == '1')
        
          <div class="col-lg-8 col-sm-12">
             <div class="about_img"><img src="{{ asset('uploads/'.$item->image) }}"></div>
             <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
             <p class="post_text">{{ $item->price }}</p>
             <h2 class="most_text">{{ $item->name }}</h2>
             <p class="lorem_text">{{ $item->description }}</p>
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
             {{-- @endforeach --}}

          </div>
          <div class="col-lg-4 col-sm-12">
             <div class="about_main">
                <h1 class="follow_text">CONNECT & FOLLOW</h1>
                <div class="follow_icon">
                   <ul>
                      <li><a href="#"><img src="{{asset('assets/images/fb-icon-1.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/twitter-icon-1.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/linkedin-icon-1.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('assets/images/instagram-icon-1.png')}}"></a></li>
                   </ul>
                </div>
             </div>
          </div>
          @endif
          @endforeach
       </div>
    </div>
 </div>

 @endsection
