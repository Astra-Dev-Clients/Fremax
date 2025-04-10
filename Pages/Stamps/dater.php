<?php

 include "../../database/db.php";




//  CREATE TABLE products (
//   id INT AUTO_INCREMENT PRIMARY KEY,
//   poster VARCHAR(255) NOT NULL,
//   name VARCHAR(100) NOT NULL,
//   price DECIMAL(10, 2) NOT NULL,
//   description TEXT NOT NULL,
//   category VARCHAR(50) NOT NULL,
//   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );




//  get all products
 $query = "SELECT * FROM products where category = 'Stamps' AND subcategory = 'Dater_Stamp'";
 $result = mysqli_query($conn, $query);
 $products = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Astra Softwares" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Main Css File -->
    <link rel="stylesheet" href="./css/main.css" />
    <title>Stamps | Fremax Graphics Stamps</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="flex flex-ai-c flex-jc-sb">
          <div class="navgations flex flex-ai-c">
            <div class="toggle-menu hide-for-desktop">
              <img src="./images/icon-menu.svg" alt="Burger Menu" />
            </div>

            <div class="logo">
              <!-- <img src="./images/logo.svg" alt="Stamps Logo" /> -->
               <h1>Stamps</h1>
            </div>

            <div class="main-navgation hide-for-mobile">
            <a href="index.php">Collections</a>
              <a href="dater.php">Dater Stamps</a>
              <a href="pocket.php">Pocket Stamps</a>
              <a href="heavy.php">Heavy Duty</a>
              <a href="plain.php">Plain Text</a>
              <a href="company.php">Company Seals</a>
            </div>

            <div class="mobile-navgation hide-for-desktop">
              <div class="close-menu">
                <img src="./images/icon-close.svg" alt="Close Icon" />
              </div>
              <a href="index.php">Collections</a>
              <a href="dater.php">Dater Stamps</a>
              <a href="pocket.php">Pocket Stamps</a>
              <a href="heavy.php">Heavy Duty</a>
              <a href="plain.php">Plain Text</a>
              <a href="company.php">Company Seals</a>
            </div>
          </div>

          <div class="controls flex flex-ai-c">
            <div class="cart">
              <div class="cart-icon">
                <span class="in-cart"></span>
                <svg width="22" height="20" xmlns="http://www.w3.org/2000/svg">
                  <title>Cart Icon</title>
                  <path
                    d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z"
                    fill="#69707D"
                    fill-rule="nonzero"
                  />
                </svg>
              </div>
              <div class="cart-list-wrapper">
                <h3 class="cart-heading">Cart</h3>
                <div class="cart-content">
                  <div class="cart-list"></div>
                  <button
                    type="button"
                    aria-label="Check out"
                    class="button checkout-btn">
                    Checkout
                  </button>
                </div>
              </div>
            </div>
            <div class="user-account">
              <div class="user-avater">
                <img src="./images/image-avatar.png" alt="User Avater" />
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main class="main">

      <section class="hero mt-5">
        <div class="container">
          <div class="hero-content">
            <h1>Dater Stamp</h1>
            <p>
            This are self inking stamps with an inbuilt date part. all you need to do is to adjust the date to the current and you are good to go.
            Comes fitted with high-quality ink pad and can provide thousands of impressions.
            The date part default colour is red while the text remains blue.This category comes in various shapes and sizes including oval, round and rectangle.
            You can use this kind of stamp to stamp some date invoices and other time- sensitive documents.
            The movable bands make routine tasks simple when using date stamps for month, day, and year.
            </p>
            <button type="button" class="button shop-now-btn">
              Shop Now
            </button>
          </div>
        </div>
      </section>

      <section class="product-wrapper container">

<?php if ($products): ?>
 <?php   
 
 $first_product = $products[0];
  $first_product_name = $first_product['name'];
  $first_product_price = $first_product['price'];
  $first_product_description = $first_product['description'];
  $first_product_category = $first_product['category'];
  $first_product_image = $first_product['poster'];
    ?>

  <div class="container">
    <div class="product-images-wrapper">
      <div class="preview-image-wrapper">
        <img
          src="../../dashboard/admin/<?= $first_product_image ?>"
          class="preview-image"
          alt="Product Image"
        />
        <div class="arrows hide-for-desktop">
          <div class="next">
            <img src="./images/icon-next.svg" alt="Next Icon" />
          </div>
          <div class="prev">
            <img src="./images/icon-previous.svg" alt="Previous Icon" />
          </div>
        </div>
        <div class="count">
          <p>
            <span class="current"></span> of
            <span class="total"></span>
          </p>
        </div>
      </div>

      <div class="thumbs-wrapper hide-for-mobile">
        <?php for ($i = 0; $i < 4; $i++): ?>
          <div class="thumb-image<?= $i === 0 ? ' active' : '' ?>">
            <img
              src="../../dashboard/admin/<?= $first_product_image ?>"
              alt="<?= $first_product_name ?> Image"
            />
          </div>
        <?php endfor; ?>
      </div>
    </div>

    <div class="product-details-wrapper">
      <p class="product-brabd"><?= $first_product_name ?></p>
      <h1 class="product-title"><?= $first_product_name ?></h1>
      <p class="product-description">
        <?= $first_product_description ?>
      </p>

      <div class="product-price">
        <div class="current-price-wrapper">
          <h2>Ksh <span class="current-price"><?= $first_product_price ?></span></h2>
          <span class="discount">50%</span>
        </div>
        <div class="previous-price-wrapper">
          <span> Ksh <span class="previous-price"><?= $first_product_price + ($first_product_price * 0.2) ?></span></span>
        </div>
      </div>

      <form action="#" class="add-to-cart-form">
        <div class="product-quantity">
          <button type="button" class="button minus">
            <img src="./images/icon-minus.svg" alt="Minus Icon" />
          </button>
          <span class="product-quantity-num">0</span>
          <button type="button" class="button plus">
            <img src="./images/icon-plus.svg" alt="Plus Icon" />
          </button>
        </div>

        <button type="submit" aria-label="Add to cart" class="button add-btn">
          <img src="./images/icon-cart.svg" alt="" />
          Add to cart
        </button>

        <p class="form-alert"></p>
      </form>
    </div>
  </div>

<?php else: ?>
  <div class="no-products">
    <p>No products available.</p>
  </div>
<?php endif; ?>

</section>




      <!-- map all stamps in a boostrap container fromt the database -->

<section class="container">
  <div class="row">

   <?php

          $getproducts = "SELECT * FROM products where category = 'Stamps' AND subcategory = 'Dater_Stamp'";
          $result = mysqli_query($conn, $getproducts);

        


          $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

          // Loop through the products and display them in a container
      
                      $sql = "SELECT * FROM products WHERE category = 'Stamps' AND subcategory = 'Dater_Stamp' ";
                      $result = $conn->query($sql);
      
                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                          
                              $poster = $row['poster'];
                              $name = $row['name'];
                              $price = $row['price'];
                              $description = $row['description'];
                              $category = $row['category'];
                              $product_image= $row['poster'];

                         echo '

                         <div class="col-md-4">
                         <div class="card">
                         <img src="../../dashboard/Admin/'.$poster.'" class="card-img-top" alt="Event Image">
                         <div class="card-body">
                         <h5 class="card-title">' .$name. '</h5>
                         <p class="card-text text-capitalize">'.$description.'</p>
                         <p class="text-muted text-capitalize">'.$category.'</p>
                         <a href="#" class="btn" style="background-color: #ff7d1a; color: #fff;">Order Now</a>
                        </div>
                        </div>
                        </div>
                        ';

  
                          }
                      } else {
                          echo "No products found.";
                      }
                      $conn->close();
      
                   ?>
      
              </div>
          </div>
</section>


<style>
  .card {
  margin-bottom: 30px;
  border: none;
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.card-img-top {
  height: 200px;
  object-fit: cover;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.card-title {
  font-size: 1.25rem;
  font-weight: bold;
  color: #061a60;
}

.card-text {
  margin-bottom: 10px;
  font-size: 0.95rem;
}

.btn {
  border-radius: 25px;
  padding: 8px 20px;
  font-weight: 500;
}

@media (min-width: 768px) {
  .col-md-4 {
    display: flex;
    flex-direction: column;
  }
}

</style>

    </main>
    <!-- LightBox -->
    <div class="lightbox-wrapper">
      <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>


    <!-- Footer -->
<footer class="text-center container text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with Fremax Graphics on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://facebook.com/fremaxgraphics" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/fremaxgraphics" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="mailto:info@fremaxgraphics.com" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://instagram.com/fremaxgraphics" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://linkedin.com/company/fremaxgraphics" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/fremaxgraphics" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>

  <!-- Section: Links -->
  <section>
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <!-- About -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-palette me-3"></i>Fremax Graphics
          </h6>
          <p>
            At Fremax Graphics, we turn your ideas into stunning visual creations. From branding to design and print, we’ve got you covered.
          </p>
        </div>

        <!-- Services -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Services</h6>
          <p><a href="#!" class="text-reset">Logo Design</a></p>
          <p><a href="#!" class="text-reset">Flyers & Posters</a></p>
          <p><a href="#!" class="text-reset">Branding Kits</a></p>
          <p><a href="#!" class="text-reset">Social Media Graphics</a></p>
        </div>

        <!-- Quick links -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <p><a href="#!" class="text-reset">Portfolio</a></p>
          <p><a href="#!" class="text-reset">Pricing</a></p>
          <p><a href="#!" class="text-reset">FAQs</a></p>
          <p><a href="#!" class="text-reset">Contact Us</a></p>
        </div>

        <!-- Contact -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Nairobi CBD, Kenya</p>
          <p><i class="fas fa-envelope me-3"></i> info.fremax@gmail.com</p>
          <p><i class="fas fa-phone me-3"></i> +254 726 874 170</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © <script>document.write(new Date().getFullYear());</script> Fremax Graphics. All rights reserved.
  </div>
</footer>
<!-- Footer -->


    <style>
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	left:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
  </style>




  <!-- whatsappp button -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=254726874170&text=Hello%21%20." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

    <script src="./js/main.js"></script>
  </body>
</html>
