<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hellooo</h1>

    <?php
     echo $username
     ?>

<br>
<?php 
echo $url
?>
<br>
    {{-- {{ $username }} --}}
<br>
    {{ $url }}
<br>
{{ $paragraf }}
<br>


<br>
@if(isset($username))
            <h1>Welcome {{$username }}</h1>
        @else
            <h1>Welcome Guest</h1>
        @endif
        
        @if(isset($username) && strstr($username, '4'))
            <h1>Welcome {{$username }}</h1>
        @elseif(strlen($username)>10)
            <h1>Welcome to long user</h1>
        @else
            <h1>Welcome Guest</h1>
        @endif

        {{-- Switch --}}
        @switch($age)
        @case(10)
            <p>Nen 18</p>
            @break
        @case(18)
            <p>18 vjeq</p>
            @break
        @default
            <p>Mbi 18 vjet</p>
        @endswitch


        @for($x=0;$x<=10;$x++)
            <p>{{ $x }}</p>
        @endfor

        @for($x=0;$x<=10;$x++)
            <p>{{ $x }}</p>
        @endfor

        
        @php
           $y=1 
        @endphp
        
        @while($y<=10)
        
            <p>{{ $y }}</p>
            @php
            $y++ 
            
            @endphp
        @endwhile

        @foreach($name as $x)
            {{ $x }}
        @endforeach
   
        <br><br>
        @php    
            echo implode(", ", $name);
        @endphp
        <br>
        <br>
        @forelse($name as $x)
            {{ $x }}
        @empty
            <p>Eshte e zbazet</p>
        @endforelse
        <br>
        <br>

        @auth
            <p>I am authenticated</p>
        @endauth

        @guest
            <p>I am not authenticated</p>
        @endguest

         {{-- Switch --}}
         @switch($age)
         @case(10)
             <p>Nen 18</p>
             @break
         @case(18)
             <p>18 vjeq</p>
             @break
         @default
             <p>Mbi 18 vjet</p>
         @endswitch
 


</body>
</html>