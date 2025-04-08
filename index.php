
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fremax Graphics Printing | Design | Branding </title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/logo.jpg" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->



  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/stamp-2.png" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Self-inking stamp
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top" style="background-color: var(--salmon-pink);">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p >
           
            <ul style="display: flex; gap: 1rem; color:#FFF; border:1px solid #fff; padding:6px; border-radius: 1rem;">
              <b>offer end in |</b>
              <li><span id="days">00</span> Days</li>
              <li><span id="hours">00</span> Hours</li>
              <li><span id="minutes">00</span> Minutes</li>
              <li><span id="seconds">00</span> Seconds</li>
          </ul>
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="usd">Ksh</option>
            <option value="eur">USD</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo5.jpg" alt="Anon's logo" width="130" height="auto">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>


      

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Stamps</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Company Seals</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Wooden Stamps</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Self-Inking Date</a>
                </li>



                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/products/Branding/stamp-top.png" alt="headphone collection" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Branding</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">T-shirts</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Custom Cups</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Reflectors </a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Dust Coats</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Diaries</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Roller Banner</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Flags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/products/Branding/branding-top.png" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Printing</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Letter Heads</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Receipts</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Business Cards</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Stikers</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Banners</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Job Cards</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Name Holders</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/products/Branding/printing-top.png" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Design</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Website Design</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Logos</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Posters</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">E-cards</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Wedding invitations</a>
                </li>


                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/products/Branding/design-top.png" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Stamps</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Company Seals</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wooden Stamps</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Self-Inking Date</a>
              </li>


            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Design</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Logo Design</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Posters</a>
              </li>

              <li class="dropdown-item">
                <a href="#" class="menu-title">Cards</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Invitations Letters</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Branding</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">T-shirts</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Custom Cups</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Reflectors</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Dust Coats</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Diaries</a>
              </li>
              <li class="dropdown-item">
                <a href="#">Flags</a>
              </li>


            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Printing</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Letter Heads</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Receipts</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Business Cards</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Stikers</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/Hero1.svg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending Stamps</p>

              <h2 class="banner-title">Hottest Deals!</h2>

              <p class="banner-text">
                starting at  <b>1500</b>/=
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner5.png" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending 3D Signage</p>

              <h2 class="banner-title">Hottest Deals!</h2>

              <p class="banner-text">
                starting at  <b> 10,000</b>/=
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/Hero3svg.svg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Top Products</h2>

              <p class="banner-text">
                starting at &dollar; <b>15</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/hero4.png" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">Featured Offers</h2>

              <p class="banner-text">
                starting at &dollar; <b>29</b>.99
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>




    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>
              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <i class="fas fa-times"></i>
              </button>
            </div>
            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-stamp menu-title-img"></i>
                    <p class="menu-title">Stamps</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-tshirt menu-title-img"></i>
                    <p class="menu-title">Branding</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-print menu-title-img"></i>
                    <p class="menu-title">Printing</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-paint-brush menu-title-img"></i>
                    <p class="menu-title">Design</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-laptop-code menu-title-img"></i>
                    <p class="menu-title">Softwares</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-trophy menu-title-img"></i>
                    <p class="menu-title">Awards</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <i class="fas fa-pen menu-title-img"></i>
                    <p class="menu-title">Stationery</p>
                  </div>
                  <div>
                    <i class="fas fa-plus add-icon"></i>
                    <i class="fas fa-minus remove-icon"></i>
                  </div>
                </button>
              </li>
            </ul>
          </div>
        </div>
        



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">Top Stamps</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Company_seal.jpg" alt="custoized Company seals" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Company seals</h4>
                      </a>

                      <a href="#" class="showcase-category">Customized</a>

                      <div class="price-box">
                        <p class="price">Ksh 2,999</p>
                        <del>Ksh 3499.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Stamp-1.png" alt="Self-inking Stamp with date" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Self-inking Stamp</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">With Date</a>
                  
                      <div class="price-box">
                        <p class="price">Ksh 1,699</p>
                        <del>Ksh 2,000</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/stamp-2.png" alt="Self-inking stamp with logo" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Logo Self-inking stamp</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">With custom logo</a>
                  
                      <div class="price-box">
                        <p class="price">Ksh 1,693</p>
                        <del>Ksh 2,540</del>
                      </div>
                    </div>
                  </div>



                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/wooden_stamp.jpg" alt="Wooden Stamp custom in all shapes, circle, oval and rectangle" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Wooden Stamp</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">custom in all shapes</a>
                  
                      <div class="price-box">
                        <p class="price">Ksh 399</p>
                        <del>Ksh 550</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/oa_pre-inked.png" alt="OA Pre-Inked Stamp" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">OA Pre-Inked Stamp</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Comfotable,easy handling</a>
                
                      <div class="price-box">
                        <p class="price">Ksh 1,799</p>
                        <del>Ksh 2,399</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/flash_stamp.png" alt="Flash Stamp with High Quality ink and flash materials" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Flash Stamp</h4>
                      </a>
                
                      <a href="#" class="showcase-category">High Quality</a>
                
                      <div class="price-box">
                        <p class="price">Ksh 1,999</p>
                        <del>Ksh 2,299</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/Premier_Line.png" alt="mens winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Premier Line Stamp</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Flash, Ink, Snap</a>
                
                      <div class="price-box">
                        <p class="price">Ksh 1,999</p>
                        <del>Ksh 2,888</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/stamp_pad.png" alt="Metalic Stamp pad" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Stamp pad</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Metalic pad</a>
                
                      <div class="price-box">
                        <p class="price">Ksh 399</p>
                        <del>Ksh 559</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Branding</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/t-shirt-1.jpg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Tshirts</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom T-shirts</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 699</p>
                        <del>Ksh 899</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/hoodie-1.jpg" alt="Custom hoodie Branding" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Hoodies</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom hoodie Branding</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 700</p>
                        <del>Ksh 1000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/helmet-1.jpg" alt="Custom helmet branding" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Helmets</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom helmet branding</a>
            
                      <div class="price-box">
                        <p class="price">ksh 1,099</p>
                        <del> Ksh 1,399</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/reflators.jpg" alt="Custom  Reflators" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Reflators</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom  Reflators</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 1,099</p>
                        <del>Ksh 1,267</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/bag-1.jpg" alt="Custom Branded Shopping bags" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Shopping Bags</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom Shopping bags</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 900</p>
                        <del>Ksh 1,000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/book-4.jpg" alt="Branding Books and Diaries" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Books and Diaries</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Books and diaries</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 700</p>
                        <del>Ksh 899</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/mug-1.jpg" alt="Mugs and Cups branding" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Mugs and Cups</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Mugs and Cups branding</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 200</p>
                        <del>Ksh 300</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/pen-3.jpg" alt="Customized Promotional Ball Point pens" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Customized Pens</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Pen Branding</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 100</p>
                        <del>Ksh 278</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Printing</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/business-card-2.jpg" alt="Custom Business card Design" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Business Card</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom Business card</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 1,500</p>
                        <del>Ksh 1,677</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/banner-6.jpg" alt="custom banners design" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Banners</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom Banners</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 1,500</p>
                        <del>Ksh 1,800</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/rollout-banner-1.jpg" alt="custom Roll-up banners" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                      <h4 class="showcase-title">Custom Roll-up Banners</h4>
                      </a>
            
                      <a href="#" class="showcase-category">professional Roll-up banners</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 2,000</p>
                        <del>Ksh 2,300</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/job-card-1.jpg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Custom Job Cards</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Job card</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 3,00</p>
                        <del>Ksh 4,00</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/stiker-1.jpg" alt="custom stiker design" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Stikers</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Custom stiker Design</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 100</p>
                        <del>Ksh 200</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/letter-h-2.jpg" alt="Proffesional Letter heads" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Letter Heads</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Proffesional Letter Heads</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 800</p>
                        <del>Ksh 850</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/Brochure-2.jpg" alt="custom professional company Bronchures" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Company Bronchures</h4>
                      </a>
            
                      <a href="#" class="showcase-category">custom Bronchures</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 2,000</p>
                        <del>Ksh 2,700</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/company-profile-2.jpg" alt="Custom Proffesional Company Profile" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Custom Company Profile</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Company profile</a>
            
                      <div class="price-box">
                        <p class="price">Ksh 3,000</p>
                        <del>Ksh 3,400</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/stamp-2.png" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Custom Self Inking Rubber address stamp</h3>
                    </a>

                    <p class="showcase-desc">
                      Make thousands of impressions without re-inking! Easy to use, Re-Inkable pad,
                      Self-inking stamps are an excellent choice for your high volume stamping needs
                    </p>

                    <div class="price-box">
                      <p class="price">Ksh 1899</p>

                      <del>Ksh 2,299</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box" data-date="2025-04-30T23:59:59">
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

              

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/Company_seal.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Custom Campany Seals</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Discover our premium collection of high-quality company seals designed to
                      make a powerful statement for your business and to add a professional touch to your business documents
                    </p>
              
                    <div class="price-box">
                      <p class="price">Ksh 2,999</p>
                      <del>Ksh 3,599</del>
                    </div>
              
                    <button class="add-cart-btn">add to cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>
              
                        <p> available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box" data-date="2025-05-15T18:00:00">
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/Company_seal.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/products/Company_seal_1.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Company Seal</a>

                  <a href="#">
                    <h3 class="showcase-title">Proffesional Custom Company Seal</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">Ksh 1,800</p>
                    <del>Ksh 2,000</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/stamp-1.png" alt="Self-inking stamp designed for speed, precision, and durability" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/stamp-2.png" alt="Self-inking stamp designed for speed, precision, and durability" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Self-Inking Stamps</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Designed for speed, precision, and durability</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 1,800</p>
                    <del>Ksh 2,000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/t-shirt-3.jpg" alt="custom T-shirts with vibrant, long-lasting prints for businesses, events, and promotions." class="product-img default"
                    width="300">
                  <img src="./assets/images/products/t-shirt-4.jpg" alt="custom T-shirts with vibrant, long-lasting prints for businesses, events, and promotions." class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">T-shirt Branding</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Custom T-shirts with vibrant, long-lasting prints for businesses, events, and promotions.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 2,400</p>
                    <del>Ksh 3,000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/3d-Sign-1.jpg" alt="Bold, durable, and eye-catching!. Perfect for storefronts, offices, and events" class="product-img default" width="300">
                  <img src="./assets/images/products/3d-sign-4.jpg" alt="Bold, durable, and eye-catching!. Perfect for storefronts, offices, and events" class="product-img hover" width="300">
              
                  <p class="showcase-badge angle pink">new</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">3D Signage</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Bold, durable, and eye-catching!. Perfect for storefronts, offices, and events.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 4,000</p>
                    <del>Ksh 5,000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/business-card-2.jpg" alt="Stand out with high-quality business cards that leave a mark!" class="product-img default"
                    width="300">
                  <img src="./assets/images/business-card-4.jpg" alt="Stand out with high-quality business cards that leave a mark!" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Business Card</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Stand out with high-quality business cards that leave a mark!</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 859</p>
                    <del>Ksh 900</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/label-1.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
                    width="300">
                  <img src="./assets/images/lable-2.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Custom Product Lable</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 400</p>
                    <del>Ksh 500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/book-3.jpg" alt="Stylish, durable, and perfect for notes, journaling, or business use" class="product-img default"
                    width="300">
                  <img src="./assets/images/book-4.jpg" alt="Stylish, durable, and perfect for notes, journaling, or business use" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Notebooks and Diaries</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Stylish, durable, and perfect for notes, journaling, or business use</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 450</p>
                    <del>Ksh 500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/Brochure-2.jpg" alt="bronchure professional designs that highlight your business with style." class="product-img default"
                    width="300">
                  <img src="./assets/images/Bronchure-1.jpg" alt="bronchure professional designs that highlight your business with style." class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Company Bronchure</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Clean, professional designs that highlight your business with style.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 1,500</p>
                    <del>Ksh 1,800</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/pen-2.jpg" alt="Sleek, high-quality pens customized with your logo for a lasting impression." class="product-img default"
                    width="300">
                  <img src="./assets/images/pen-4.jpg" alt="Sleek, high-quality pens customized with your logo for a lasting impression." class="product-img hover"  width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Custom Pens</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Sleek, high-quality pens customized with your logo for a lasting impression.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 100</p>
                    <del>Ksh 150</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/medal-2.png" alt="High-quality, personalized medals for sports, awards, and special events" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/medal-1.png" alt="High-quality, personalized medals for sports, awards, and special events" class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Custom Medals</a>
              
                  <h3>
                    <a href="#" class="showcase-title">High-quality, personalized medals for sports, awards, and special events</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 2,000</p>
                    <del>Ksh 2,300</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/stiker-1.jpg" alt="Durable, vibrant stickers for branding, promotions, and personal use." class="product-img default"
                    width="300">
                  <img src="./assets/images/stiker-2.jpg" alt="Durable, vibrant stickers for branding, promotions, and personal use." class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Custom Stickers</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Durable, vibrant stickers for branding, promotions, and personal use.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 100</p>
                    <del>Ksh 159</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/bracelet-1.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/bracelet-2.jpg" alt="Better Basics French Terry Sweatshorts"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Custom Bracelets</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Stylish, durable, and perfect for promotions, events, and personal use.</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">Ksh 200</p>
                    <del>Ksh 250</del>
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/hope.png" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Ismael Bett</p>

              <p class="testimonial-title">CEO & Astra Softwares</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Fremax Graphic delivered exactly what I needed—fast, high-quality designs and great service. Highly recommended!
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/products/Fremax-poster-1.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ Ksh 500</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">
            <h2 class="title">Our Services</h2>
          
            <div class="service-container">
          
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="brush-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Custom Graphic Design</h3>
                  <p class="service-desc">Logos, Branding & More</p>
                </div>
              </a>
          
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="print-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">High-Quality Printing</h3>
                  <p class="service-desc">Business Cards, Flyers, T-Shirts</p>
                </div>
              </a>
          
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Website Design</h3>
                  <p class="service-desc">Modern & Responsive Websites</p>
                </div>
              </a>
          
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="stamp-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Custom Stamps & Seals</h3>
                  <p class="service-desc">For Businesses & Official Use</p>
                </div>
              </a>
          
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="receipt-outline"></ion-icon>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Receipt Books & Invoices</h3>
                  <p class="service-desc">Professional & Custom Designs</p>
                </div>
              </a>
          
            </div>
          </div>
          

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/products/stamp-5.png" height="300" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">self-inking Stamps</a>

              <a href="#">
                <h3 class="blog-title">Self-inking stamps provide fast, clean, and professional impressions—perfect for any business or office.</h3>
              </a>

              <p class="blog-meta">
                <p>By <cite>Steve Harvey</cite></p>


              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/caps-1.png" height="300" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Custom caps</a>
          
              <h3>
                <a href="#" class="blog-title">Take your brand everywhere with custom caps! Perfect for promotions, events, and everyday wear, branded caps offer a stylish and practical way to showcase your business. Learn how custom headwear can boost your visibility effortlessly.</a>
              </h3>
          
              <p class="blog-meta">
                 <p>By <cite>Steve Harvey</cite> / <time id="currentDate"></time></p>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/3d-Sign-1.jpg" height="300" alt="Make your brand impossible to ignore! 3D signage adds depth, style, and professionalism to storefronts, offices, and events. Discover how custom 3D signs can enhance visibility and leave a lasting impression."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">3D signage</a>
          
              <h3>
                <a href="#" class="blog-title">Make your brand impossible to ignore! 3D signage adds depth, style, and professionalism to storefronts, offices, and events. Discover how custom 3D signs can enhance visibility and leave a lasting impression.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Selsa</cite>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/fremax-poster.png" height="300" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Banner</a>
          
              <h3>
                <a href="#" class="blog-title">Take your brand everywhere with custom caps! Perfect for promotions, events, and everyday wear, branded caps.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Ismael Bett</cite> 
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Branding :</h3>

          <a href="#" class="footer-category-link">T-shirt</a>
          <a href="#" class="footer-category-link">Hoodies</a>
          <a href="#" class="footer-category-link">Mugs</a>
          <a href="#" class="footer-category-link">Pens</a>
          <a href="#" class="footer-category-link">Engravings</a>
          <a href="#" class="footer-category-link">3d Signages</a>
          <a href="#" class="footer-category-link">2d Signages</a>

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Stamps :</h3>
        
          <a href="#" class="footer-category-link">(Date) Self-inking Stamps</a>
          <a href="#" class="footer-category-link">(logo) Self-inking stamps</a>
          <a href="#" class="footer-category-link">Wooden Stamps</a>
          <a href="#" class="footer-category-link">Oa Stamps</a>
          <a href="#" class="footer-category-link">Flash Stamps</a>
          <a href="#" class="footer-category-link">Premier Line Stamp</a>
          <a href="#" class="footer-category-link">Stamp pad</a>
          <a href="#" class="footer-category-link">Company seals</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Printing :</h3>
        
          <a href="#" class="footer-category-link">Receipts</a>
          <a href="#" class="footer-category-link">Letter heads</a>
          <a href="#" class="footer-category-link">Business cards</a>
          <a href="#" class="footer-category-link">Stikers</a>
          <a href="#" class="footer-category-link">Banners</a>
          <a href="#" class="footer-category-link">Job Cards</a>
          <a href="#" class="footer-category-link">Name Holders</a>
          <!-- <a href="#" class="footer-category-link">nosepin</a>
          <a href="#" class="footer-category-link">chain</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a> -->
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Design :</h3>
        
          <a href="#" class="footer-category-link">Website Design</a>
          <a href="#" class="footer-category-link">Logos</a>
          <a href="#" class="footer-category-link">Wedding cards</a>
          <a href="#" class="footer-category-link">Roll-up Banners</a>
          <a href="#" class="footer-category-link">Bronchures</a>
          <a href="#" class="footer-category-link">Company profiles</a>
          <a href="#" class="footer-category-link">Business Cards</a>
          <a href="#" class="footer-category-link">Receipt Books</a>
          <a href="#" class="footer-category-link">Eulogy</a>
          <a href="#" class="footer-category-link">E-cards</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Stamps</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Branding</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Printing</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Design</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Software Development</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
               00100 Moi Avenue, Nairobi CBD, Next to Lazarus Restaurant
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(254) 726874 170</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">info@fremax.co.ke</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Designed By   <a href="https://astrasoft.tech" style="color: #fff;"> Astra Softwares </a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>


  <style>
    .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
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




<elevenlabs-convai agent-id="bFPdyozz8EAnjkckwqET"></elevenlabs-convai><script src="https://elevenlabs.io/convai-widget/index.js" async type="text/javascript"></script>



  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>


<!-- Countdown js -->
<script>
  (function () {
      const SECOND = 1000;
      const MINUTE = SECOND * 60;
      const HOUR = MINUTE * 60;
      const DAY = HOUR * 24;

      const today = new Date();
      const dd = String(today.getDate()).padStart(2, "0");
      const mm = String(today.getMonth() + 1).padStart(2, "0");
      const yyyy = today.getFullYear();
      const nextYear = yyyy + 1;
      const dayMonth = "09/30/";

      let birthday = new Date(`${dayMonth}${yyyy}`);
      if (today > birthday) {
          birthday = new Date(`${dayMonth}${nextYear}`);
      }

      const countDownTime = birthday.getTime();

      const updateCountdown = () => {
          const now = Date.now();
          const distance = countDownTime - now;

          document.getElementById("days").innerText = Math.floor(distance / DAY);
          document.getElementById("hours").innerText = Math.floor((distance % DAY) / HOUR);
          document.getElementById("minutes").innerText = Math.floor((distance % HOUR) / MINUTE);
          document.getElementById("seconds").innerText = Math.floor((distance % MINUTE) / SECOND);
      };

      const interval = setInterval(updateCountdown, 1000);
      updateCountdown();
  })();
</script>



<!-- Deal of the day countdown 1 -->
<script>
 document.querySelectorAll(".countdown-box").forEach((box) => {
  const dateAttr = box.getAttribute("data-date");
  const targetDate = new Date(dateAttr).getTime();

  const numbers = box.querySelectorAll(".display-number");

  const interval = setInterval(() => {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      clearInterval(interval);
      box.querySelector(".countdown").innerHTML = "<p>Offer Expired</p>";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    numbers[0].textContent = days;
    numbers[1].textContent = hours;
    numbers[2].textContent = minutes;
    numbers[3].textContent = seconds;
  }, 1000);
});


</script>



<!-- Deal of the day count down 2 -->


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>