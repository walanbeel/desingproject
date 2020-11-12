<?PHP
 session_start();
include "app/views/header.php"; 
?>
   <?php
   echo "<div class='col-md-12'>";
   if($action=='added'){
       echo "<div class='alert alert-info text-right'>";
           echo "تم إضافة المنتج لسلّة التسوق";
           echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

       echo "</div>";

   }

   if($action=='exists'){
       echo "<div class='alert alert-info text-right'>";
           echo "المنتج موجود بالفعل في سلة ";
           echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

       echo "</div>";
   }
echo "</div>";
?>
 <?php
   echo "<div class='col-md-12'>";
   if($action=='wishadded'){
    echo "<div class='alert alert-info text-right'>";
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
        echo "تمت إضافة المنتج لقائمة أمنياتك";
    echo "</div>";
   }
   if($action=='wishexists'){
    echo "<div class='alert alert-info text-right'>";
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
        echo " المنتج موجود بالفعل في قائمة أمنياتك ";
    echo "</div>";
   }
echo "</div>";
?>
 <!-- start of hero -->
  <section class="hero-slider hero-style ">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://images.pexels.com/photos/3178938/pexels-photo-3178938.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            <div class="black-bg"></div>
            <div class="container">
              <h1>New Collection</h1>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://images.pexels.com/photos/583842/pexels-photo-583842.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://images.pexels.com/photos/450035/pexels-photo-450035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://images.pexels.com/photos/887751/pexels-photo-887751.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- swipper controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev" id="prev"></div>
      <div class="swiper-button-next" id="next"></div>
    </div>
  </section>
<!-- end of hero slider  -->

<div class="text-right" id="section-title"><h1 style="margin: 2rem 4rem 0 4rem;">آخر المنتجات</h1></div>  
  <!-- The slideshow -->
  <div class="container" style="padding: 0rem;">
    <div class="active row orginize card-slider">
    <main class="row main bg-grid product-store">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6 col-lg-3">
          <div class="card">
              <div class="card-img product-img">
                  <a href="#">
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View" style=" background: #F27523;"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist" style=" background: #F27523;"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='=<?= $id; ?>' style=" background: #F27523;"><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
              </div>
              <div class="card-price product-content">
               <div class="card-name title">
                  <h3 class="title"><a href="#"><p><?php  echo $row->product_short_desc ?></p></a></h3>
                  <div class="price">
                  <p>$<?= $row->product_price ?></p>
                    <!-- <?php  echo $row->product_price ?> -->
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      </div>
      <?php $i++; } }?> 
   </div>
    </main>
    </div>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
 
 
     </div>
     </div>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                   $ <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
  
 
 
     </div>
     </div>
    </div>
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

<!-- Product slider End -->

<!-- Product slider End -->
<section class="three-column-images mt-5">
  <div class="container " >
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
         
      </div>
   
       <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
   
      <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
      </div> 
     </div>  
  </section>

<!-- Banner Start -->

<!--Satrt Featured Product-->
<div class="container">
  <!-- <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>     -->
  <div class="row">
  <?php 
            $i=0;
            $rows=$data['order_product'];
            // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              // if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  $ <?php  echo $row->product_price ?>

                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
           // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
           echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

               // echo "Update Cart";
            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php //$i++;
      //  } 
    }
    ?> 

  </div>
</div>
<!--End Featured Product-->



<!--Start View Moer-->
<div class="overview text-center mt-5">
         <div class="container">
          
           <button><a href="main/getcat">View Moer</a></button>
          </div>
       </div>

<!--End View Moer-->


<!--Start add-->
<div class="container mt-5">
    <div class="row">
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
    </div>
  </div>
<!--End add-->






 
  

<?PHP
include "app/views/footer.php"; 
?>
    
 


</body>
</html>
