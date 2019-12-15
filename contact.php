<?php 
include'design/header.php';
 ?>
  <body>
  
  


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                  <div class="col-md-6">
                    <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="subject" name="subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="message" class="text-black">Message </label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <a class="btn btn-primary btn-lg btn-block" id="send">Send</a>
                  </div>
                  <div id="sent" style="width: 50px; height: 50px; color: red;"></div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>

          </div>
        </div>
      </div>
    </div>

<?php 
include'design/footer.php';