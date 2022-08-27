<?php include('include/header.php')?>

<style>
    label{
        text-transform: uppercase;
    }
.height{
    line-height:2;
}
.payment-gatway {
  background-color: #fff;
  padding: 1rem;
  margin-top: 1rem;
}

/* Style the tab */

.tabs {
  float: left;
  
  background-color: #fff;
  width: 30%;
  height: 400px;
}

/* Style the buttons inside the tab */
.tabs button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tabs button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tabs button.active {
  background-color: #f4f4f4;
  font-weight:bold;
}


</style>
<section class="address-section">
    <div class="container">
        <div class="row">
        <div class="col-md-8 " >
          
          <div class="bg-cart">
              <div class="d-flex">
                  <div class="number-vice">1 </div>
                  <p>Your Cart</p>
               </div>
               <div class="side-top-item">
                  <div>
                      <p>items <b>1</b></p>
                  </div>
                  <div>
                      <p>total <b>₹1,199</b></p>
                  </div>
              </div>
              <div class="item-style  ">
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
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control-sm " style="width:50px"; />

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                      </div>
                  </div>
              </div>
          
              <div class="text-end">
                  <button class="btn btn-checkout"> place order</button>
              </div>
          
          
          </div>
          
          <!-- end cart -->
          
          <!-- start address -->
          <div class="address-cart">
              <div class="d-flex">
                  <div class="number-vice">2 </div>
                  <p>ADDRESS</p>
              </div>
          
              <form >
                  <div>
                      <label>FULL NAME</label>
                      <input type="text" class="form-control w-100 edit" required>
                  </div>
                  <div>
                      <label>PINCODE</label>
                      <input type="text" class="form-control w-100 edit" required>
                  </div>
          
                  <div>
                      <label>ADDRESS LINE 1</label>
                      <input type="text" class="form-control w-100 edit" required>
                  </div>
                  <div>
                      <label>ADDRESS LINE 2</label>
                      <input type="text" class="form-control w-100 edit" required>
                  </div>
          
                  <div class="d-flex justify-content-between">
                      <div>
                          <label>CITY</label>
                          <input type="text" class="form-control w-100 edit" required>
                      </div>
                      <div>
                          <label>STATE</label>
                          <input type="text" class="form-control w-100 edit" required>
                      </div>
                  </div>
          
                  <div class="d-flex justify-content-between">
                      <div>
                          <label>PHONE</label>
                          <input type="number" class="form-control w-100 edit" required>
                      </div>
                      <div>
                          <label>EMAIL</label>  
                          <input type="text" class="form-control w-100 edit" required>
                      </div>
                  </div>
          
                  <div class="text-end">
                  <button class="btn btn-checkout"> Make Payment</button>
              </div>
          
          
              </form>
          </div>
          <!-- end address -->

          <!-- start payment -->
<div class="payment-cart">
    <div class="d-flex">
        <div class="number-vice">3</div>
        <p>PAYMENT</p>
    </div>
<div class="tabs">
    <button class="tablinks" onclick="openCity(event, 'UPI')" id="defaultOpen">UPI</button>
    <button class="tablinks" onclick="openCity(event, 'WALLETS')">WALLETS</button>
    <button class="tablinks" onclick="openCity(event, 'BANKING')">NET BANKING</button>
    <button class="tablinks" onclick="openCity(event, 'CREDIT')">CREDIT/DEBIT CARD</button>
    <button class="tablinks" onclick="openCity(event, 'CASH')">CASH ON DELIVERY</button>
</div>
<div id="UPI" class="tabcontent content-payment">
    <div class="my-4"><p>Enter your UPI ID</p> 
    <input class=" border-gray-200 my-2 p-2 w-100" type="text" id="upi" placeholder="Example: abc@upi"></div>

    <div>
    <button class="btn btn-checkout"> place order</button>
    </div>
</div>


<div id="WALLETS" class="tabcontent content-payment ">
    <div class="d-flex justify-content-between">
        <a href="#">
        <div class="payment-cards">
            <img src="assets/images/payment/phonepay.jpg" alt="" srcset="">
           
        </div>
        </a>   

        <a href="#">
           <div class="payment-cards">
               <img src="assets/images/payment/paytm.png" alt="" srcset="">
               
           </div>
        </a>
        <a href="#">
            <div class="payment-cards">
                <img src="assets/images/payment/google pay.jpg" alt="" srcset="">
                
           </div>
        </a>

        <a href="#">
            <div class="payment-cards">
               <img src="assets/images/payment/amazon.png" alt="" srcset="">
               
            </div>
        </a>
    </div>
    <div>
            <button class="btn btn-checkout mt-5"> place order</button>
        </div>
</div>


<div id="BANKING" class="tabcontent content-payment">
    <div class="d-flex justify-content-between">
        
        <a href="#">
            
            <div class="payment-cards">
                <div>
                    
                    <img src="assets/images/payment/sbi.png" alt="" srcset="">
                </div>
            </div>
        </a>   

        <a href="#">
           <div class="payment-cards">
               <img src="assets/images/payment/hdfc.png" alt="" srcset="">
               
           </div>
        </a>
        <a href="#">
            <div class="payment-cards">
                <img src="assets/images/payment/axis.png" alt="" srcset="">
                 
           </div>
        </a>

        <a href="#">
            <div class="payment-cards">
               <img src="assets/images/payment/icici.png" alt="" srcset="">
              
            </div>
        </a>

        

    </div>
      <div>
            <button class="btn btn-checkout mt-5"> place order</button>
        </div>
</div>

<div id="CREDIT" class="tabcontent content-payment">
 <div>
 <label>card number</label>
 <input type="text"  maxlength="19" autocomplete="off" required="" pattern="\d*" class="block w-100 height">
 </div>

 <div class="d-flex gap-5 my-4"><div class="w-full"><label for="Expiry Month" class="text-12 text-gray-600">Exp. Month
        <abbr class="required">*</abbr></label> <select id="ccexpmon" name="ccexpmon" class="block focus:outline-none focus:border-blue-500 w-100 pl-4 text-14 border border-gray-200 py-2 pr-4"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></div> <div class="w-full"><label for="Expiry Year" class="text-12 text-gray-600">Exp. Year
        <abbr class="required">*</abbr></label> <select id="ccexpyr" name="ccexpyr" class="block focus:outline-none focus:border-blue-500 w-100 pl-1 text-14 border border-gray-200 py-2 pr-4"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option><option value="2051">2051</option><option value="2052">2052</option><option value="2053">2053</option><option value="2054">2054</option><option value="2055">2055</option><option value="2056">2056</option><option value="2057">2057</option><option value="2058">2058</option><option value="2059">2059</option><option value="2060">2060</option><option value="2061">2061</option><option value="2062">2062</option><option value="2063">2063</option><option value="2064">2064</option><option value="2065">2065</option><option value="2066">2066</option><option value="2067">2067</option><option value="2068">2068</option><option value="2069">2069</option><option value="2070">2070</option><option value="2071">2071</option><option value="2072">2072</option><option value="2073">2073</option><option value="2074">2074</option><option value="2075">2075</option><option value="2076">2076</option><option value="2077">2077</option><option value="2078">2078</option><option value="2079">2079</option><option value="2080">2080</option><option value="2081">2081</option><option value="2082">2082</option><option value="2083">2083</option><option value="2084">2084</option><option value="2085">2085</option><option value="2086">2086</option><option value="2087">2087</option><option value="2088">2088</option><option value="2089">2089</option><option value="2090">2090</option><option value="2091">2091</option></select></div> <div class="w-full"><label for="CVV" class="text-12 text-gray-600">CVV
        <abbr class="required">*</abbr></label> 
      <input type="password" name="ccvv" id="ccvv" maxlength="4" autocomplete="off" required="" class="block focus:outline-none focus:border-blue-500 w-100 pl-4 text-14 border border-gray-200 py-2 pr-4"></div>
    </div>



    <div>
 <label>name on card</label> 
 <input type="text"  maxlength="19" autocomplete="off" required="" pattern="\d*" class="block w-100 height">
 </div>

 <div>
    <button class="btn btn-checkout mt-5"> place order</button>
    </div>


</div>


<div id="CASH" class="tabcontent content-payment">
  <h6>cash on delivery</h6>
  <small>You can make the payment when the product is delivered to your home.</small>
  <p>COD Charges: ₹49</p>
  <div>
    <button class="btn btn-checkout w-100 mt-5"> place order</button>
 </div>



</div>



</div>





<!-- end payment -->



          
          
          
          </div>

          <div class="col-md-4">
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





        </div>
            <!-- row-end -->


    </div>
</section>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php include('include/footer.php')?>