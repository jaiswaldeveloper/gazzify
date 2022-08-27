<?php include('include/header.php')?>

<style>
.tab {

  height: 300px;
}

.tab button {
  padding: 0.5rem;
  display: block;
  color: black;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;

  margin-bottom:2rem;
}



.tab button.active {
    color: #39ff14;
    font-weight:bold;
    font-size:16px
    
}

</style>


<section class="about-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="London" class="tabcontent delivery-speed">
                    <h3>Standard Shipping and Delivery speeds</h3>
                    <h5>Note: Due to current COVID-19 Situation product shipping and delivery may be delayed. Thanks for understanding.</h5>

                    <p>All orders placed on www.Gazzify.in will be delivered for free through express shipping.</p>

                    <h6>During Normal Days:</h6>

                    <ul>
                        <li>Prepaid orders placed before 12:00 PM will be processed and shipped on the same day</li>
                        <li>Orders placed after 12:00 PM will be processed on the next working day</li>
                        <li>Shipping is not processed on Sundays and Public Holidays.</li>
                        
                    </ul>
                    <p>Once shipped, a notification mail along with a shipment tracking number will be sent to your registered email id.</p>

                    
                    <h6>Delivery time:</h6>

                    <ul>
                        <li>Standard delivery time is 2-4 business days depending on the pincode of shipping address.</li>
                        <li>Incase of remote locations, delivery time may be extended up to 7 business days.</li>
                        
                        
                    </ul>
                    <p>In case of any questions about the expected delivery time for your address, please call us at 040-39564567 or email us at support@mivi.in.</p>


                </div>
                <div id="Paris" class="tabcontent delivery-speed">
                   <h3>Track Your Package</h3>
                   <h5>After your order is shipped you will receive an email with the tracking number of the shipment. </h5>
                   <h5>You can use the below links to track your shipment.</h5>
                  <h5>Fedex tracking link: <a href="https://www.fedex.com/apps/fedextrack/?action=track">https://www.fedex.com/apps/fedextrack/?action=track</a></h5> 
                  <h5> Delhivery tracking link:<a href="https://www.delhivery.com">https://www.delhivery.com</a></h5>

                  <h4 class="mt-5">Steps to Track your order:</h4>
                  <p>For FedEx:</p>
                  <img src="assets/images/icons/track-1.png" alt="" srcset="">
                  <p>You will find the delivery status update.</p>
                  <img src="assets/images/icons/track-2.png" alt="" srcset="">
                  <p>For Delhivery:</p>
                  <img src="assets/images/icons/track-3.png" alt="" srcset="">
                  <p>You will find the delivery status update.</p>
                  <img src="assets/images/icons/track-4.png" alt="" srcset="">
                </div>



                <div id="Tokyo" class="tabcontent delivery-speed">
                    <h3>Courier company contact information</h3>
                    <h6>Fedex contact information:</h6>
                    <ul>
                        <li>Phone: 1800 419 4343</li>
                        <li>Tracking website link: <a href="http://www.fedex.com/in/domestic/track/">http://www.fedex.com/in/domestic/track/</a></li>
                        
                    </ul>
                    <h6>Delhivery contact information:</h6>

                    <ul>
                        <li>Phone: 0124 671 9500</li>
                        <li>Email <a href="mailto:customer.support@delhivery.com">customer.support@delhivery.com</a></li>
                        <li>Tracking website link <a href="https://www.delhivery.com">https://www.delhivery.com</a></li>
                        
                    </ul>


                </div>
            </div>
          
            <div class="col-md-1"></div>
            <div class="col-md-3">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Standard Shipping and Delivery speeds</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Track Your Package</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Courier company contact information</button></div>
            </div>
        </div>
    </div>
</section>











   
 


<?php include('include/footer.php')?>