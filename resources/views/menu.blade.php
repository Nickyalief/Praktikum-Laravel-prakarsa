@extends('halamanutama')
@section('container')

<div class="heading">
    <h3>our menu</h3>
    <p><a href="{{route('home')}}">home </a> <span> / menu</span></p>
 </div>

 <section class="products">

    <h1 class="title">latest dishes</h1>

    <div class="box-container">

        <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/seblak.png" alt="">
            <a href="category.html" class="cat">dishes</a>
            <div class="name">Seblak Seafood</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

         <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/menu-3.png" alt="">
            <a href="category.html" class="cat">dishes</a>
            <div class="name">Seblak Ceker Ayam</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

         <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/home seblak 1.png" alt="">
            <a href="category.html" class="cat">dishes</a>
            <div class="name">Seblak Original</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

         <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/semangka.png" alt="">
            <a href="category.html" class="cat">drinks</a>
            <div class="name">Jus Semangka</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

         <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/jambu.png" alt="">
            <a href="category.html" class="cat">drinks</a>
            <div class="name">Jus Jambu</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

         <form accept="" method="post" class="box">
            <a href="quick_view.html" class="fas fa-eye"></a>
            <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
            <img src="images/instan.png" alt="">
            <a href="category.html" class="cat">fast food</a>
            <div class="name">Seblak Instan</div>
            <div class="flex">
               <div class="price"><span>$</span>3<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                  onkeypress="if(this.value.length == 2) return false;">
            </div>
         </form>

       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/burger-2.png" alt="">
          <a href="category.html" class="cat">fast food</a>
          <div class="name">chezzy hamburger 02</div>
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>

       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/pizza-2.png" alt="">
          <a href="category.html" class="cat">fast food</a>
          <div class="name">delicious pizza 02</div>
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>

       <form accept="" method="post" class="box">
          <a href="quick_view.html" class="fas fa-eye"></a>
          <button class="fas fa-shopping-cart" type="submit" name="add_to_cart"></button>
          <img src="uploaded_img/dessert-2.png" alt="">
          <a href="category.html" class="cat">dessert</a>
          <div class="name">delicious dessert 02</div  >
          <div class="flex">
             <div class="price"><span>$</span>3<span>/-</span></div>
             <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
          </div>
       </form>

    </div>

 </section>

@endsection
