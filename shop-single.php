
<?php
 
include'design/header.php';
 ?>
    
         <?php 
        include'../training/database/connection.php';
        $id = $_GET['id'];
        $select = "SELECT * FROM product WHERE id= '$id'";
        $result = $conn -> query($select);
$key = $result -> fetch_assoc();


        
          ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $key['name']; ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
         
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="images/<?php echo $key['img']; ?>" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6" data-pro="<?php echo $key['id']?>" data-user="<?php echo $_SESSION['id']?>">
       
         
            <h2 class="text-black"><?php echo $key['name']; ?></h2>
            
            <p><?php echo $key['discription']; ?></p>
            
            <p><strong class="text-primary h4"><?php echo $key['price']; ?>$</strong></p>

            <?php 
            $id = $_GET['id'];
            if (isset($_SESSION)) {
            $x = $_SESSION['id'];            }
            

           

            $select1="SELECT COUNT(rate) FROM rate WHERE id_pro='$id' AND rate='5'";
            $result1=$conn->query($select1);
            $row = $result1 -> fetch_assoc();
            $count1=(int)$row['COUNT(rate)']; 




            $select2="SELECT COUNT(rate) FROM rate WHERE rate= '4' AND id_pro='$id'";
            $result2=$conn->query($select2);
            $row = $result2 -> fetch_assoc();
            $count2=(int)$row['COUNT(rate)'];







            $select3="SELECT COUNT(rate) FROM rate WHERE id_pro ='$id' AND  rate= '3'";
            $result3=$conn->query($select3);
            $row = $result3 -> fetch_assoc();
            $count3=(int)$row['COUNT(rate)'];






      

            $select4="SELECT COUNT(rate) FROM rate WHERE rate= '2' AND id_pro='$id'";
            $result4=$conn->query($select4);
            $row = $result4 -> fetch_assoc();
            $count4=(int)$row['COUNT(rate)'];





            
            $select5="SELECT COUNT(rate) FROM rate WHERE rate= '1' AND id_pro='$id'";
            $result5=$conn->query($select5);
             $row = $result5 -> fetch_assoc();

            $count5=(int)$row['COUNT(rate)'];




            $select6="SELECT COUNT(rate) FROM rate WHERE id_pro='$id'";
            $result6=$conn->query($select6);
             $row = $result6 -> fetch_assoc();
            $count6=(int)$row['COUNT(rate)'];

            $y =(($count1*5)+ ($count2*4) +($count3*3) +($count4 *2) +($count5 *1))/($count6);
            $n = floor($y);
            $p =5-$n;


echo $y;

$index =1;
for ($i=0; $i <$n ; $i++) { 
  ?>
 <span id ='<?php echo $index++ ?>'class='icon-star2 text-warning star'></span>

<?php }
for ($m=0; $m <$p ; $m++) { ?>
<span class='icon-star2 star' id ='<?php echo $index++ ?>'></span><?php
}
            ?>



            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            

            <p style="display: inline-block;"><a href="database/cart.php?id=<?php echo $key['id']; ?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>
           
           <p style="display: inline-block;"><a href="database/insert_wishlist.php?id=<?php echo $key['id']; ?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To wishlist</a></p>
           
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

   <?php 
include'design/footer.php';
?>

<script type="text/javascript">
      $(document).ready(function(){

      $(".star").click(function(){

        var star =$(this).attr("id")
         
        var pro =$(this).parent().attr("data-pro")
        var user =$(this).parent().attr("data-user")
        $(this).addClass("icon-star2 text-warning");

        $.post('database/insert_rate.php', {star:star ,pro:pro ,user:user}, function(data) {
          


        
        });



      })
    })
</script>