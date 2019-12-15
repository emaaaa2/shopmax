<?php 
include'design/header.php';
 ?>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_3.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-12" style="display: flex;">


         <?php 
        include'../training/database/connection.php';
        
        $select = "SELECT * FROM category" ;
        $result = $conn -> query($select);
      
        


        foreach ($result as $row) {
          $id= $row['id'];

        $select_pro = "SELECT COUNT(id) FROM product WHERE category = '$id'" ;
        $result_pro = $conn->query($select_pro);
        $key = $result_pro -> fetch_assoc();
       $count = $key ["COUNT(id)"];

          
            
          
          ?>
        <div class="col-md-4 col-lg-4" style="height: 300px">

            <div class="product-item sm-height full-height bg-gray" >
              <img src="images/<?php echo $row['img']?>" alt="Image" class="img-fluid" >
              <a href="category.php?id=<?php echo $row['id'];?>" class="product-category"><?php echo $row['name']; ?> <span><?php echo $count ?></span></a>
            </div>

          </div>
        <?php }?>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>
        

        <div class="row"> 

        <?php 
        include'../training/database/connection.php';
        
        $select = 'SELECT * FROM product ORDER BY id DESC ' ;
        $result = $conn -> query($select);

        foreach ($result as $row) {
          ?>

            <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="shop-single.php?id=<?php echo $row['id']?>" class="product-item md-height bg-gray d-block">
              <img src="images/<?php echo $row['img']?>" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"><?php echo $row['name']; ?></a></h2>

            <strong class="item-price">Price:<?php echo $row['price']; ?>$</strong>
           
          </div>
                   

                  <?php }?>
          
          
        </div>
      </div>
    </div>

    


    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Shoes</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/model_6.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
<?php 
include'design/footer.php';
?>
<script type="text/javascript">
      $(document).ready(function(){

      $(".form-control").keyup(function(){

        var search =$(".form-control").val()

        $.post('database/search.php', {search:search}, function(data) {
          
          $("#u").html(data)
        
        });

      })
    })
  </script>
    