
<!-- navbar ends -->
<header class="header">

    <section class="flex">

       <a href="{{route('home')}}" class="logo">Seblak Racing 🥵</a>
       <nav class="navbar">
          <a href="{{route('home')}}">home</a>
          <a href="{{route('tentang')}}">about</a>
          <a href="{{route('menu')}}">menu</a>
          <a href="{{route('kontak')}}">contact</a>
       </nav>

       <div class="icons">
          
          <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
          <div id="user-btn" class="fas fa-user"></div>
          <div id="menu-btn" class="fas fa-bars"></div>
       </div>

       <div class="profile">
          <p class="name">Nicky Alief</p>
          <div class="flex">
             <a href="profile.html" class="btn">profile</a>
             <a href="#" class="delete-btn">logout</a>
          </div>
          <p class="account"><a href="{{route('login')}}">login</a> or <a href="">register</a></p>
       </div>

    </section>

 </header>
