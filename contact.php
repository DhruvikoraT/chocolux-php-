<?php include('header.php') ?>

    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
            <div class="form_container">
              <div class="heading_container">
                <h2>
                  Contact Us
                </h2>
              </div>
              <form action="">
                <div>
                  <input type="text" placeholder="Full Name " />
                </div>
                <div>
                  <input type="text" placeholder="Phone number" />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Message" />
                </div>
                <div class="d-flex ">
                  <button>
                    SEND NOW
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6  px-0">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->


<?php include('footer.php') ?>
</body>

</html>