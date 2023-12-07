@extends('halamanutama')
@section('container')

<div class="heading">
    <h3>contact us</h3>
    <p><a href="{{route('home')}}">home </a> <span> / contact</span></p>
 </div>

 <section class="contact">

    <div class="row">

       <div class="image">
          <img src="images/contact-img.svg" alt="">
       </div>

       <form action="/kontak" class="form" method="post">
        @csrf
          <h3>tell us something!</h3>
          <input type="text" name="name"  placeholder="enter your name" maxlength="50" class="box  @error('name') is-invalid @enderror" value="{{old('name')}}">
          @error('name')
                <div style="color:red; font-size:15px ">{{$message}}</div>
            @enderror
          <input type="number" name="number"  placeholder="enter your number" max="9999999999" min="0" class="box @error('kontak') is-invalid @enderror" onkeypress="if(this.value.length == 10) return false;" value="{{old('kontak')}}">
          @error('kontak')
                <div style="color:red; font-size:15px ">{{$message}}</div>
            @enderror
          <input type="email" name="email"  placeholder="enter your email" maxlength="50" class="box @error('email') is-invalid @enderror" value="{{old('email')}}">
          @error('email')
                <div style="color:red; font-size:15px ">{{$message}}</div>
            @enderror
          <textarea name="msg" placeholder="enter your message"  class="box @error('message') is-invalid @enderror" cols="30" rows="10" maxlength="500"  value="{{old('message')}}"></textarea>
          @error('message')
                <div style="color:red; font-size:15px ">{{$message}}</div>
            @enderror
          <input type="submit" value="send message" class="btn" name="send">
       </form>

    </div>

 </section>

@endsection
