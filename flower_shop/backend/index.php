<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luisgaga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body>
    <h1>Luisgaga</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <button class="logo-img">
                <img  src="/frontend/img/logo.png" alt="User Icon" style="width: 50px; border:none" href="index.php"/>
              </button>
              </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/backend/user.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backend/logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/backend/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/backend/register.php">Register</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="/backend/products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/backend/cart.php">Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/frontend/contact.html">Contact us</a>
            </li>
              
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>


<!-- <div class="container mt-4">
    <div class="row" id="product-list"></div>
</div> -->

<div class="container-fluid">
    <!-- Main Banner -->
    <div class="main-banner text-center py-5" style="background-color: #C3F3A0; height: 120px; display: flex; flex-direction: column; justify-content: center;">
        <h1 class="display-4">HOT Deal Everyday</h1>
        <p class="mt-3">Follow us: 
            <a href="https://www.facebook.com/nguyenphu.hung" target="_blank">Facebook</a> | 
            <a href="https://www.instagram.com/beu.69/" target="_blank">Instagram</a> | 
            <a href="https://github.com/hungdeptraino1" target="_blank">Github</a>
        </p>
    </div>

    <!-- Left Sidebar Menu -->
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar bg-light p-3">
                <h4>Danh mục sản phẩm</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#birthday-flowers">Hoa Sinh Nhật</a></li>
                    <li class="list-group-item"><a href="#opening-flowers">Hoa Khai Trương</a></li>
                    <li class="list-group-item"><a href="#theme">Chủ Đề</a></li>
                    <li class="list-group-item"><a href="#giangsinh">Thiết Kế</a></li>
                    <li class="list-group-item"><a href="#fresh-flowers">Hoa Tươi</a></li>
                    <li class="list-group-item"><a href="#discounted-flowers">Hoa Tươi Giảm Giá len den 99%</a></li>
                    <li class="list-group-item"><a href="#special-flowers">Hoa dac biet</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9" >
            <!-- Shopping Cart Icon -->
            <div class="shopping-cart text-right mb-3" >
                <a href="/backend/checkout.php" class="btn btn-primary" style = "background-color : #3CD198; border: 1px solid ">
                    <img src="/frontend/img/cart.png" alt="" style = "width: 30px;">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="badge badge-light">0</span>
                </a>
            </div>

            <!-- Featured Products Section -->
            <section id="featured-products">
                <h3>Sản phẩm nổi bật</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoacuc.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title">Chau hoa ban chay</h5>
                                <p class="card-text">Giá: 250.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoanoibat.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 36%">
                            <div class="card-body">
                                <h5 class="card-title">Bo hoa ban chay</h5>
                                <p class="card-text">Giá: 700.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/bohoa2.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 44%">
                            <div class="card-body">
                                <h5 class="card-title">Bo hoa ban chay</h5>
                                <p class="card-text">Giá: 400.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Discounted Products Section -->
            <section id="discounted-flowers" class="mt-5">
                <h3>Hoa Tươi Giảm Giá</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoalan.png" class="card-img-top" alt="Hoa Giảm Giá 1" style="width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title">Hoa Giảm Giá </h5>
                                <p class="card-text">Giá: 300.000 VNĐ <span class="badge badge-danger">-15%</span></p>
                                <button class="btn btn-success" onclick="addToCart(201)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=201" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more discounted products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoasen.png" class="card-img-top" alt="Hoa Giảm Giá 1" style="width: 31%;">
                            <div class="card-body">
                                <h5 class="card-title">Hoa Giảm Giá </h5>
                                <p class="card-text">Giá: 345.678 VNĐ <span class="badge badge-danger">-5%</span></p>
                                <button class="btn btn-success" onclick="addToCart(201)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=201" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/bohoahen.png" class="card-img-top" alt="Hoa Giảm Giá 1" style="width: 31%;">
                            <div class="card-body">
                                <h5 class="card-title">Hoa Giảm Giá </h5>
                                <p class="card-text">Giá: 123.678 VNĐ <span class="badge badge-danger">-99%</span></p>
                                <button class="btn btn-success" onclick="addToCart(201)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=201" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id= "birthday-flowers" class = "mt-5">
            <h3>Hoa sinh nhat</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoasinhnhat.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%">
                            <div class="card-body">
                                <h5 class="card-title">Hoa sinh nhat</h5>
                                <p class="card-text">Giá: 200.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoasinhnhat1.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 39%">
                            <div class="card-body">
                                <h5 class="card-title">Hoa sinh nhat</h5>
                                <p class="card-text">Giá: 400.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoasinhnhat2.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 24%">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa sinh nhat</h5>
                                <p class="card-text">Giá: 600.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                </div>
            </section>
            
            <section id = "opening-flowers" class = "mt-5">
            <h3>Hoa khai trương</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoakhaitruong.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa khai trương</h5>
                                <p class="card-text">Giá: 800.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoakhaitruong2.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa khai trương</h5>
                                <p class="card-text">Giá: 1.600.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoakhaichuong3.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa khai trương</h5>
                                <p class="card-text">Giá: 600.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

            <section id = "theme" class = "mt-5">
            <h3>Chủ Đề</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoahong2.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Chủ Đề do</h5>
                                <p class="card-text">Giá: 500.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>                              
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoahong.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 37%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Chủ Đề hong</h5>
                                <p class="card-text">Giá: 700.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>                              
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoachude.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Chủ Đề </h5>
                                <p class="card-text">Giá: 900.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>                              
                            </div>
                        </div>
                </div>
            </section>

            <section id = "giangsinh" class = "mt-5">
            <h3>Giáng sinh</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoagiangsinh.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Giáng sinh</h5>
                                <p class="card-text">Giá: 900.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoagiangsinh2.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Giáng sinh</h5>
                                <p class="card-text">Giá: 200.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/giangsinhgau.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Giáng sinh</h5>
                                <p class="card-text">Giá: 1.300.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id = "fresh-flowers" class = "mt-5">
            <h3>Hoa Tươi</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoalan.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa lan</h5>
                                <p class="card-text">Giá: 600.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoalaituoi.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 38%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa lan</h5>
                                <p class="card-text">Giá: 200.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoatuoi.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 38%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa lan</h5>
                                <p class="card-text">Giá: 500.000 VNĐ</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id = "special-flowers">
            <h3>Hoa dac biet</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="/frontend/img/hoa.png" class="card-img-top" alt="Sản phẩm nổi bật 1" style = "width: 30%;">
                            <div class="card-body">
                                <h5 class="card-title
                                ">Hoa db 1</h5>
                                <p class="card-text">Giá: ∞ VNĐ  hang tang khong ban</p>
                                <button class="btn btn-success" onclick="addToCart(101)">Thêm vào giỏ</button>
                                <a href="/backend/product.php?product_id=101" class="btn btn-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add more featured products here -->
                </div>
            </section>

<script>
// Fetch products and dynamically populate the sections
    fetch('../backend/products.php').then(response => response.json()).then(products => {
        const categories = {
            "Hoa Cưới": document.querySelector("#wedding-flowers .row"),
            "Bó Hoa": document.querySelector("#bouquets .row"),
            "Cây Hoa": document.querySelector("#flower-trees .row")
        };

        products.forEach(product => {
            const productCard = `
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">${product.price} VNĐ</p>
                            <button class="btn btn-success" onclick="addToCart(${product.product_id})">Thêm vào giỏ</button>
                            <a href="/backend/product_details.php?product_id=${product.product_id}" class="btn btn-info">Xem chi tiết</a>
            
                </div>
            `;
            categories[product.category].innerHTML += productCard;
        });
    });


fetch('../backend/products.php')
    .then(response => response.json())
    .then(products => {
        const productList = document.getElementById('product-list');
        products.forEach(product => {
            productList.innerHTML += `
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">${product.price} VNĐ</p>
                            <button class="btn btn-success" onclick="addToCart(${product.product_id})">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
            `;
        });
    });

function addToCart(productId) {
    fetch('../backend/cart.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `product_id=${productId}`
    })
    .then(response => response.text())
    .then(data => alert(data));
}

let cartCount = 0;
function addToCart(productId) {
    cartCount++;
    document.getElementById('cart-count').innerText = cartCount;
    alert('Sản phẩm đã được thêm vào giỏ hàng!');
}

// cuon muot    
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

</script>