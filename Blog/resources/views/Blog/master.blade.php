<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      @include('blog.includes.styles')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid header_main">
            @include('blog.includes.navbar')
         </div>
         <!-- banner section start --> 
        
         <!-- banner section end --> 
      </div>
      <!-- header section end --> 
     
      <!-- about section start --> 
    
      <!-- about section end --> 
      <!-- blog section start --> 
     
      <!-- blog section end --> 
      <!-- newsletter section start --> 
      
      <!-- recent section end --> 
      <!-- tag section start -->
      {{-- <div class="tag_section layout_padding">
         <div class="container">
            <h1 class="tag_taital">Tag</h1>
            <div class="tag_bt">
               <ul>
                  <li class="active"><a href="#">Ectetur</a></li>
                  <li><a href="#">Onsectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
               </ul>
            </div> --}}
            {{-- <div class="tag_bt_2">
               <ul>
                  <li><a href="#">Tetur</a></li>
                  <li><a href="#">Conse</a></li>
                  <li><a href="#">Nsectetur</a></li>
                  <li><a href="#">Sectetur</a></li>
                  <li><a href="#">Consectetur</a></li>
               </ul>
            </div>
         </div>
      </div>
   --}}
     @yield('content')
    
     
      @include('blog.includes.footer')
      <!-- copyright section end -->
      <!-- Javascript files-->

      @include('blog.includes.scripts')

   </body>
</html>