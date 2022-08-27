<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gazzify</title>
  
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->

    <!-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->
    
  </head>
  <body>
    <div class="top-header">
      <div class="texts-right">
        <img src="assets/images/shipping-icon.svg" alt="" srcset="" />
        <small>Free Shipping</small>
      </div>

      <div class="texts-left">
        <img src="assets/images/warranty-icon.svg" alt="" srcset="" />
        <small>1 year Warranty</small>
      </div>
    </div>
    <section class="nav-header" id="myHeader">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img
                src="assets/images/white.png"
                class="nav-logo"
                alt=""
                srcset=""
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse grow"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav ml-auto mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'smartwatches')" href="#
                  ">Smart Watches</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link tablinks" onclick="openCity(event, 'headphones')" href="#
                  ">Head Phone</a>
                  
                </li>
               
           
                <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'speakers')" href="#
                  ">Speakers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'soundbars')" href="#
                  ">Soundbars</a>
                </li>
                <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'charging')" href="#">Charging</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="support.php">Support</a>
                </li>
              </ul>
            </div>
            <div class="user">
            <span style="cursor:pointer" onclick="openNav()"> 
              <svg
                id="Icon_feather-shopping-cart"
                data-name="Icon feather-shopping-cart"
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="23.5"
                viewBox="0 0 36 34.5"
              >
                <path
                  id="Path_1"
                  data-name="Path 1"
                  d="M15,31.5A1.5,1.5,0,1,1,13.5,30,1.5,1.5,0,0,1,15,31.5Z"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
                <path
                  id="Path_2"
                  data-name="Path 2"
                  d="M31.5,31.5A1.5,1.5,0,1,1,30,30,1.5,1.5,0,0,1,31.5,31.5Z"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
                <path
                  id="Path_3"
                  data-name="Path 3"
                  d="M1.5,1.5h6l4.02,20.085a3,3,0,0,0,3,2.415H29.1a3,3,0,0,0,3-2.415L34.5,9H9"
                  fill="none"
                  stroke="#fff"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="3"
                />
              </svg>
            </span>

           


              <button type="button" class="btn cart-btns-top" data-bs-toggle="modal" data-bs-target="#myModal">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="23.5"
                viewBox="0 0 27 30"
              >
                <g
                  id="Icon_feather-user"
                  data-name="Icon feather-user"
                  transform="translate(-4.5 -3)"
                >
                  <path
                    id="Path_4"
                    data-name="Path 4"
                    d="M30,31.5v-3a6,6,0,0,0-6-6H12a6,6,0,0,0-6,6v3"
                    fill="none"
                    stroke="#fff"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                  <path
                    id="Path_5"
                    data-name="Path 5"
                    d="M24,10.5a6,6,0,1,1-6-6A6,6,0,0,1,24,10.5Z"
                    fill="none"
                    stroke="#fff"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                  />
                </g>
              </svg>
              </button>
             
            </div>
          </div>
        </nav>
      </div>
    </section>



    <!-- side nav -->
    <div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="">
  <div class="side-top-item">
    <div>
      <p>items <b>1</b></p>
    </div>
    <div>
      <p>total <b>₹1,199</b></p>
    </div>
  </div>

  <div class="item-style" id="item-style">


  <div class="item-cards">
    <div><img src="assets/images/watches/HW-22 OG/Pink/front.png" alt="" srcset=""></div>
    <div>
      <h6>Duopads F40</h6>
      <div class="color-items">
        <p>color</p>
        <div class="d-flex">
          <div class="color-dynamic"></div>
          <small>pink</small>
        </div>
        
      </div>

      <div class="item-price">
        <h6>₹1,199</h6>
        <del>₹2,999</del>
        <p>60% off</p>

      </div>

    </div>

    </div>

    <div class="add-item">
      <div>
        <button class="btn remove-btn"><i class="fa-solid fa-trash-can"></i> Remove Item</button>
      </div>

      <div class="plus-minus">
          <button class="btn btn-link px-2"onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
            <i class="fas fa-minus"></i>
          </button>
          <input id="form1" min="0" name="quantity" value="1" type="number"
          class="form-control form-control-sm " style="width:50px"; />
          <button class="btn btn-link px-2"onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
          <i class="fas fa-plus"></i>
        </button>
        <!-- <div><button class="btn "><i class="fa-solid fa-minus"></i></button></div>
        <div><p>3</p></div>
        <div><button class="btn "><i class="fa-solid fa-plus"></i></button></div> -->

      </div>




  </div>
  </div>
  <hr>

  <div class="item-style shipping-item " id="shipping-item">
    <h6>Free Shipping</h6>
    <p>Read our Standard Shipping Policies</p>
    <hr>
    <h6>Free and Easy Returns</h6>
    <p>Read our Standard Returns Policies</p>
  </div>

  <div class="item-style order-summary">
    <table>
      <thead>
        <tr>
          <th>order summary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>subtotal</td>
          <td>₹2,999</td>
        </tr>
        <tr>
          <td>Shipping</td>
          <td>FREE</td>
        </tr>

        <tr>
          <td>Discount</td>
          <td>-1800</td>
        </tr>

        <tr>
          <td>subtotal</td>
          <td>₹2,999</td>
        </tr>
        <tr>
          <td>total</td>
          <td>₹1,199</td>
        </tr>
      </tbody>

    </table>

  </div>

  <div class="checkout" id="checkout">
     <button id="hide" class="btn btn-checkout" >checkout</button>
  </div>
</div>

  <div class="side-login-toggle" id="side-login-toggle">
    <small>Please enter your phone number to continue</small>
    <div>
      <form>
        <div>
        <input type="number" placeholder="Phone Number" class="form-control w-100 input-style" required>
        </div>
        <button class="btn btn-primary w-100 btn-continue">Continue</button>
  
      </form>
      <a href="addresscart.php"> <button id="hide" class="btn btn-checkout" >checkout Address</button></a>

    </div>
  </div>



</div>
    <!-- side nav -->


    <!-- side-nav-checkout 2 -->


    
    <!-- side-nav-checkout 2 -->

<!-- earphones -->
  <div id="headphones" class="tabcontent dropdown-part-content">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
              <h6 >TRUE WIRELESS EARPHONES</h6>
              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                 </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                 </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                 </div>
                  
                </div>
              </div>

              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                 </div>
                  
                </div>
              </div>

              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/duopods-a350.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                
                  </div>
                  
                </div>
              </div>



            </div>

            


          </div>
        </div>
      </div>
    </div>

</div>

<!-- earphone -->

<!-- speakers -->
<div id="speakers" class="tabcontent dropdown-part-content">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
              <h6 >TRUE WIRELESS speakers</h6>
              <div class="col-md-3">
                <div class="drop-down-cards">
                <div> <a href='product-details.php'> <img src="assets/images/drop-down-product/playy.png" alt="" srcset=""></div></a>
                  <div><p>play</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                <div> <a href='product-details.php'> <img src="assets/images/drop-down-product/playy.png" alt="" srcset=""></div></a>
                  <div><p>play</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-3">
                <div class="drop-down-cards">
                <div> <a href='product-details.php'> <img src="assets/images/drop-down-product/playy.png" alt="" srcset=""></div></a>
                  <div><p>play</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div> <a href='product-details.php'> <img src="assets/images/drop-down-product/playy.png" alt="" srcset=""></div></a>
               
                  <div><p>play</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>


              

              



            </div>

            


          </div>
        </div>
      </div>
    </div>

</div>
<!-- speakers -->


<!-- soundbars -->

<div id="soundbars" class="tabcontent dropdown-part-content">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
              <h6 >TRUE WIRELESS Soundbars</h6>
              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/soundbar-s60.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/soundbar-s60.jpg" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>
                  
                </div>
              </div>

  

            </div>

          </div>
        </div>
      </div>
    </div>

</div>


<!-- soundbars -->

<!-- smartwatches -->

<div id="smartwatches" class="tabcontent dropdown-part-content">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
              <h6 >SmartWatches</h6>
              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/deal-images.png" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/deal-images.png" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                  
                </div>
              </div>

  

            </div>

          </div>
        </div>
      </div>
    </div>

</div>
<!-- smartwatches -->



<!-- Charging -->

<div id="charging" class="tabcontent dropdown-part-content">
    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row">
              <h6 >Charging</h6>
              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/charging.png" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>
                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  </div>
                 
                </div>
              </div>


              <div class="col-md-3">
                <div class="drop-down-cards">
                  <div><img src="assets/images/drop-down-product/charging.png" alt="" srcset=""></div>
                  <div><p>Duopods A350</p>

                  <div class="">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                
                   </div>
                  
                </div>
              </div>

  

            </div>

          </div>
        </div>
      </div>
    </div>

</div>
<!-- Charging -->



<!-- modal-login -->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header modal-style">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <p>PLEASE ENTER YOUR PHONE NUMBER TO CONTINUE</p>
      
       <form>
        <div>
        <input type="number" placeholder="Phone Number" class="form-control w-100 input-style" required>
        </div>

        <div>
          <button class="btn btn-primary btn-continue w-100">Continue</button>
        </div>
       </form>



      </div>
     

      <!-- Modal footer -->
      

    </div>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "400px";

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}





// $(document).ready(function(){
//   $(".btn-checkout").click(function(){
//     $("#item-style,#shipping-item,#checkout").remove();
//   });
// });

$(document).ready(function(){
  $("#hide").click(function(){
    $("#item-style,#shipping-item,#checkout").hide();
  });
  $("#hide").click(function(){
    $("#side-login-toggle").show();
  });
  
});



</script>