
          <?php
          include'design/header.php';
          include("database/connection.php");

        
          ?>
           
 <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>

              <span class="number"><?php echo $row['COUNT(id_pro)'] ;?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>
    <br>
    <br>
  <?php 
    if (isset($_SESSION['id'])) {
          $id_user=$_SESSION['id'];
          $select = "SELECT COUNT(id_pro) FROM cart WHERE id_user = '$id_user'";
          $result = $conn->query($select);

          $row = $result -> fetch_assoc();
          

                              

                     $select="SELECT * FROM cart WHERE id_user ='$id_user'";
                     $result=$conn-> query($select);
                     foreach ($result as $key) {
                       

                     $id_pro=$key['id_pro'];
                     $select_pro="SELECT * FROM product WHERE id ='$id_pro'";
                     $result_pro =$conn-> query($select_pro);

                     $x = 0;
foreach ($result_pro as $row) {

  $p = $row['price'];

  $x += $p;

  
 ?>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $row['img']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $row['name']; ?></h2>
                    </td>
                    <td><?php echo $row['price']; ?>$</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input id="<?php echo $key['id_pro'];?>" data-user="<?echo $key['id_user'];?>" type="text" class="form-control text-center min" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo $key['quantity'];?>"  >
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a>


                      

                    </td>
                  </tr>

                  <?php 
                  


                 }}}
                
                else{ echo("NO PRODUCT IN CART");
     

          } ?>

                  <div class="id_pro"></div>
                  <div class="id_user"></div>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  
                  <div class="col-md-6 text-right">
                    <?php 
                    if (isset($_SESSION['id'])) {
                      ?>
                         <strong class="text-black">$<?php echo $x;?></strong>

                    <?php }
                    else{
                      ?>
                      <strong class="text-black">$0</strong>

                   <?php } ?>


                    
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
<?php 
                    if (isset($_SESSION['id'])) {
                      ?>
                         <strong class="text-black">$<?php echo $x;?></strong>

                    <?php }
                    else{
                      ?>
                      <strong class="text-black">$0</strong>

                   <?php } ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
include'design/footer.php';
?>
<script type="text/javascript">
    $(document).ready(function(){

      $(".js-btn-minus").click(function(){

        var min =$(this).parent().parent().find(".min").val()
        var id_pro =$(this).parent().parent().find(".min").attr("id")
        var id_user =$(this).parent().parent().find(".min").attr("data-user")

        $.post('database/quantity.php', {min:min , id_pro:id_pro , id_user:id_user}, function(data) {
          alert(data)
        
        });

      })


       $(".js-btn-plus").click(function(){

        var plus =$(this).parent().parent().find(".min").val()
var id_pro =$(this).parent().parent().find(".min").attr("id")
        var id_user =$(this).parent().parent().find(".min").attr("data-user")

        $.post('database/quantity+.php', {plus:plus, id_pro:id_pro , id_user:id_user}, function(data) {
                    alert(data)

        
        });

      })

    })
</script>