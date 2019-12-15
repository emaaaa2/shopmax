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
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">Products</h2>
          </div>
        </div>
        

        <div class="row"> 

        <?php 
        include'../training/database/connection.php';
        $id =$_GET['id'];
        
        $select = "SELECT * FROM product WHERE category ='$id'" ;
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
          
       
<?php 
include'design/footer.php';

    