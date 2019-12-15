
          <?php
          include'design/header.php';
          include("database/connection.php");

         

          ?>
           
 
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">wishlist</strong></div>
        </div>
      </div>
    </div>
  <?php 
                     $id_user=$_SESSION['id'];
                    $x = 0;

                     $select="SELECT * FROM wishlist WHERE id_user ='$id_user'";
                     $result=$conn-> query($select);
                     foreach ($result as $key) {
                       

                     $id_pro=$key['id_pro'];
                     $select_pro="SELECT * FROM product WHERE id ='$id_pro'";
                     $result_pro=$conn-> query($select_pro);
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
                    

                    
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a>


                      

                    </td>
                  </tr>

                  <?php 
                  


                } }?>

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
                <p><a href="database/cart.php?id=<?php echo $key['id']; ?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>
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
                    <strong class="text-black">$<?php echo $x;?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$</strong>
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