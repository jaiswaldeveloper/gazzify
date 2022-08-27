
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-part">
              <div><h6>Customer Service</h6></div>

              <div class="contact-footer">
                <div>
                  <img src="assets/images/cs-icon-neon.svg" alt="" srcset="" />
                </div>
                <div>
                  <h5>+918099973333</h5>
                  <p>(Mon-Sat, 10:00am-5:00pm)</p>
                </div>
              </div>
              <hr />
              <div class="contact-footer">
                <div>
                  <img src="assets/images/mail-icon.png" alt="" srcset="" />
                </div>
                <div>
                  <h5>support@gazzify.in</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="footer-part">
              <div><h6>Warranty</h6></div>
              <ul>
                <li>Register Your Product</li>
                <li>Report a problem with product</li>
              </ul>
            </div>
          </div>

          <div class="col-md-2">
            <div class="footer-part">
              <div><h6>Product Help</h6></div>
              <ul>
                <a href="support.php"><li>Return and cancellation Policy</li></a>
                <a href="shipping-policy.php"><li>Shipping & Delivery Policy</li></a>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer-part">
              <div><h6>About</h6></div>
              <ul>
                <a href="about.php"><li>About</li></a>
              </ul>
            </div>
          </div>

          <div class="col-md-2"></div>
        </div>

        <div class="row mt-5">
          <div class="col-md-3">
            <div class="social-icons">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-linkedin"></i>

              <i class="fa-brands fa-youtube"></i>
            </div>
          </div>

          <div class="col-md-7">
            <div class="footer-tags-parts">
              <div class="footer-tags">
              <a href="speakers.php"> <h5>Shop Speakers</h5></a>
              </div>
              
              <div class="footer-tags">
               <a href="earphones.php"> <h5>Shop Earphones</h5></a>
              </div>

              <div class="footer-tags">
              <a href="charging.php"> <h5>Shop Charger</h5></a>
              </div>

              <div class="footer-tags">
              <a href="watches.php"> <h5>Shop Watches</h5></a>
              </div>
            </div>
          </div>
          <div class="text-center text-white fw-bold">
            <hr />
            <small style="color: #aeaeae"
              >Copyright © 2022 Gazzify. - All rights reserved.</small
            >
          </div>
        </div>
      </div>
    </section>


 

    <script>
      window.onscroll = function () {
        myFunction();
      };

      var header = document.getElementById('myHeader');
      var sticky = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add('sticky');
        } else {
          header.classList.remove('sticky');
        }
      }
    </script>

    <script src="js/script.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
  </body>
</html>
