<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Aliya Marcelia Dewi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      class="icons"
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm"
    style="background-color: #5d4037"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
            <span class="logo-icon">🍰</span>
            <span class="text-icon">Marcelia Patisserie</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu">Menu</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO SECTION START -->
    <section class="hero text-center mt-5">
        <div class="container text-center text-white">
            <h1 class="display-3 fw-bold mb-3">Freshly Baked Every Day</h1>
            <p class="lead">Nikmati kelezatan pastry & cake premium kami 🍂</p>
        </div>
    </section>
    <!-- HERO SECTION END -->

    <!-- MENU SECTION START -->
    <section id="menu" class="p-4">
        <div class="container text-center mt-5">
            <h2>Marcelia's Menu Selection 📋</h2>
            <div class="btn-group gap-2 mt-3" role="group" aria-label="Basic outlined example">
              <button type="button" class="btn rounded-pill">All menu</button>
              <button type="button" class="btn rounded-pill">Signature Bakes</button>
              <button type="button" class="btn rounded-pill">Signature Drinks</button>
            </div>
            <div class="row mt-5 g-4">
                <?php
                    $menu = [
                        [
                        'id' => 1,
                        'nama' => 'Croissant Butter Premium',
                        'harga' => 35000,
                        'deskripsi' => 'Croissant klasik dengan lapisan butter yang lembut dan renyah',
                        'gambar' => 'img/croissant.jpg',
                        'badge' => 'Best Seller',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 2,
                        'nama' => 'Red Velvet Cake',
                        'harga' => 250000,
                        'deskripsi' => 'Kue red velvet lembut dengan cream cheese frosting yang creamy',
                        'gambar' => 'img/redvelvet.jpg',
                        'badge' => 'Premium',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 3,
                        'nama' => 'Assorted Cookies Box',
                        'harga' => 85000,
                        'deskripsi' => 'Paket cookies berbagai rasa: chocolate chip, oatmeal, dan matcha',
                        'gambar' => 'img/cookies.jpg',
                        'badge' => 'Popular',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 4,
                        'nama' => 'Chocolate Eclair',
                        'harga' => 45000,
                        'deskripsi' => 'Eclair coklat dengan custard vanilla dan glazed chocolate di atasnya',
                        'gambar' => 'img/chocEc.jpg',
                        'badge' => 'New',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 5,
                        'nama' => 'Fruit Tart Premium',
                        'harga' => 95000,
                        'deskripsi' => 'Tart dengan custard lembut dan topping buah segar pilihan',
                        'gambar' => 'img/fruitTart.jpg',
                        'badge' => 'Fresh',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 6,
                        'nama' => 'Cinnamon Roll',
                        'harga' => 40000,
                        'deskripsi' => 'Roll kayu manis dengan cream cheese icing yang manis dan lembut',
                        'gambar' => 'img/cinnamon.jpg',
                        'badge' => 'Hot',
                        'kategori' => 'Signature Bakes'
                        ],
                        [
                        'id' => 7,
                        'nama' => 'English Breakfast Tea',
                        'harga' => 25000,
                        'deskripsi' => 'Teh hitam klasik dengan aroma kuat, cocok untuk menemani pastry',
                        'gambar' => 'img/tea.jpg',
                        'badge' => 'Popular',
                        'kategori' => 'Signature Drinks'
                        ],
                        [
                        'id' => 8,
                        'nama' => 'Hot Chocolate Premium',
                        'harga' => 35000,
                        'deskripsi' => 'Minuman coklat panas dengan whipped cream dan marshmallow',
                        'gambar' => 'img/hotChoco.jpg',
                        'badge' => 'Hot',
                        'kategori' => 'Signature Drinks'
                        ],
                        [
                        'id' => 9,
                        'nama' => 'Matcha Latte',
                        'harga' => 40000,
                        'deskripsi' => 'Latte dengan matcha premium Jepang, creamy dan tidak terlalu manis',
                        'gambar' => 'img/matcha.jpg',
                        'badge' => 'New',
                        'kategori' => 'Signature Drinks'
                        ],
                        [
                        'id' => 10,
                        'nama' => 'Iced Caramel Latte',
                        'harga' => 38000,
                        'deskripsi' => 'Espresso dingin dengan susu dan sirup caramel yang manis',
                        'gambar' => 'img/caramelLatte.png',
                        'badge' => 'Popular',
                        'kategori' => 'Signature Drinks'
                        ]
                      ];

                      foreach ($menu as $product): ?>
                        <div class="col-lg-4 col-md-6 product-item" data-category="<?= $product['kategori'] ?>">
                            <div class="card product-card h-100">
                                <div class="product-image-wrapper">
                                    <img src="<?= $product['gambar'] ?>" 
                                        class="card-img-top product-image" 
                                        alt="<?= $product['nama'] ?>" />
                                    <span class="badge-label bg-warning text-dark">
                                        <?= $product['badge'] ?>
                                    </span>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= $product['nama'] ?></h5>
                                    <p class="card-text text-muted"><?= $product['deskripsi'] ?></p>
                                    <div class="mt-auto">
                                        <p class="product-price mb-3">
                                            Rp <?= number_format($product['harga'], 0, ',', '.') ?>
                                        </p>
                                        <button class="btn btn-primary w-100 btn-add-cart"
                                                data-id="<?= $product['id'] ?>"
                                                data-nama="<?= $product['nama'] ?>"
                                                data-harga="<?= $product['harga'] ?>">
                                            <i class="bi bi-cart-plus"></i> Tambah ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>   
    <!-- MENU SECTION END -->

    <!-- CART SECTION START -->
    <section id="cart" class="py-5 bg-light">
      <div class="container">
          <div class="card cart-card shadow-lg">
              <div class="card-header">
                  <h3 class="mb-0">
                        <i class="bi bi-cart"></i> Keranjang Belanja
                  </h3>
              </div>
              <div class="card-body">
                  <div id="cart-items">
                      <div class="text-center py-5 empty-cart-message">
                          <i class="bi bi-cart-x display-1 text-muted"></i>
                          <p class="text-muted mt-3">Keranjang belanja masih kosong</p>
                      </div>
                  </div>
              </div>
              <div class="card-footer">
                  <div class="d-flex justify-content-between align-items-center">
                      <h4 class="mb-0">Total Pembayaran:</h4>
                      <h3 class="mb-0 text-danger" id="total-price">Rp 0</h3>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <!-- CART SECTION END -->

    <!-- FOOTER START -->
    <footer class="text-center">
        <p class="text-white">
        &copy; 2025 Marcelia Patisserie | UTS PROMNET
        </p>
    </footer>
    <!-- FOOTER END -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- My JS -->
     <script src="script.js"></script>
</body>
</html>