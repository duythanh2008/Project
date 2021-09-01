<body>
    <header class="header">
        <div class="grid wide">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="?controller=trangchu">
                            <img src="./Assets/Img/logo.png" alt="" class="header__navbar-logo">
                        </a>
                    </li>
                </ul>
                <ul class="header__navbar-list hide-on-mobile-tablet">
                    <li class="header__navbar-item">
                        <a href="?controller=trangchu" class="header__navbar-link">
                            Trang chủ
                        </a>
                    </li>
                    <li class="header__navbar-item header__navbar-item-has-category">
                        <a href="?controller=sanpham" class="header__navbar-link">
                            Sản phẩm
                        </a>
                        <ul class="header__navbar-category-product">
                            <li class="header__navbar-category-item">
                                <a href="?controller=sanpham&id=1" class="header__navbar-category-link">
                                    Áo khoác
                                </a>
                            </li>
                            <li class="header__navbar-category-item">
                                <a href="?controller=sanpham&id=2" class="header__navbar-category-link">
                                    Áo phông
                                </a>
                            </li>
                            <li class="header__navbar-category-item">
                                <a href="?controller=sanpham&id=3" class="header__navbar-category-link">
                                    Quần dài
                                </a>
                            </li>
                            <li class="header__navbar-category-item">
                                <a href="?controller=sanpham&id=4" class="header__navbar-category-link">
                                    Quần short
                                </a>
                            </li>
                            <li class="header__navbar-category-item">
                                <a href="?controller=sanpham&id=5" class="header__navbar-category-link">
                                    Giày, dép
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__navbar-item">
                        <a href="?controller=lienhe" class="header__navbar-link">
                            Liên hệ
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="?controller=donhang" class="header__navbar-link">
                            Đơn hàng
                        </a>
                    </li>
                    <?php
                        if(isset($_SESSION['customer']) && $_SESSION['customer'] != NULL){
                    ?>
                    <li class="header__navbar-item">
                        <a href="?controller=thongtinkhachhang" style="margin-left: 12px;
                                            text-decoration: none;
                                            padding: 0 6px;
                                            font-size: 1.5rem;
                                            color: var(--white-color);"> <?php echo $user[0]['username']?></a><a href="?controller=dangxuat" style="margin-left: 1px;" class="header__navbar-link">Thoát</a>
                    </li>
                    <?php }else{ ?>
                    <li class="header__navbar-item">
                        <a href="?controller=dangnhap" class="header__navbar-link">
                            Tài khoản
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="header__navbar-cart">
                    <div class="header__navbar-cart-wrap">
                    <span class="header__navbar-cart-qty"><?php echo $_SESSION['qty'] ?></span>
                        <a href="?controller=giohang" class="header__navbar-cart-link">
                            <i class="header__navbar-cart-icon fas fa-shopping-cart"></i>
                            Giỏ hàng
                        </a>
                        <div class="header__navbar-cart-list">
                            <?php if (isset($_SESSION['cart'])){?>
                            <h4 class="header__navbar-cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__navbar-cart-list-item">
                                <?php foreach ($_SESSION['cart'] as $key => $value){?>
                                    <li class="header__navbar-cart-item">
                                        <a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>">
                                            <img src="<?php echo $value['img-link'] ?>" alt="" class="header__navbar-cart-img">
                                            <div class="header__navbar-cart-item-info">
                                                <div class="header__navbar-cart-item-head">
                                                    <h5 class="header__navbar-cart-item-name"><?php echo $value['name'] ?></h5>
                                                    <div class="header__navbar-cart-item-price-wrap">
                                                        <span class="header__navbar-cart-item-price"><?php echo number_format($value['price']) ?>đ</span>
                                                        <span class="header__navbar-cart-item-multiply">x</span>
                                                        <span class="header__navbar-cart-item-quantity"><?php echo $value['sl'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="header__navbar-cart-item-body">
                                                    <span class="header__navbar-cart-item-desc">
                                                        Size: <?php echo $value['size'] ?>
                                                    </span>
                                                    <a href="?controller=xuligiohang&method=delete&id=<?php echo $value['id'] ?>" class="header__navbar-cart-item-remove">Xóa</a>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                            <a href="?controller=giohang" class="header__navbar-cart-item-cart header__navbar-cart-item-cart-btn">Xem giỏ hàng</a>
                            <?php }else{ ?>
                            <div class="header__navbar-no-cart-item">
                                <img src="./Assets/Img/no_cart.png" alt="" class="header__navbar-cart-no-cart-img">
                                <h3 class="header__navbar-cart-no-cart-content">Chưa có sản phẩm</h3>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <label for="nav__mobile-input" class="header__navbar-mobile-bars">       
                        <i class="fas fa-bars"></i>
                    </label>
                </div>
            </nav>
        </div>
    </header>
    <input type="checkbox" hidden class="nav__mobile-input" id="nav__mobile-input">
    <label for="nav__mobile-input" class="header__navbar-mobile-overlay"></label>
    <nav class="header__navbar-mobile">
        <label for="nav__mobile-input" class="header__navbar-mobile-close">                    
            <i class="fas fa-times"></i>
        </label>
        <ul class="header__navbar-mobile-list">
            <li>
                <a href="?controller=trangchu" class="header__navbar-mobile-link">Trang chủ</a>
            </li>
            <li>
                <a href="?controller=sanpham"" class="header__navbar-mobile-link">Sản phẩm</a>
                <ul class="header__navbar-category-product-mobile">
                            <li class="header__navbar-category-item-mobile">
                                <a href="?controller=sanpham&id=1" class="header__navbar-category-link-mobile">
                                    Áo khoác
                                </a>
                            </li>
                            <li class="header__navbar-category-item-mobile">
                                <a href="?controller=sanpham&id=2" class="header__navbar-category-link-mobile">
                                    Áo phông
                                </a>
                            </li>
                            <li class="header__navbar-category-item-mobile">
                                <a href="?controller=sanpham&id=3" class="header__navbar-category-link-mobile">
                                    Quần dài
                                </a>
                            </li>
                            <li class="header__navbar-category-item-mobile">
                                <a href="?controller=sanpham&id=4" class="header__navbar-category-link-mobile">
                                    Quần short
                                </a>
                            </li>
                            <li class="header__navbar-category-item-mobile">
                                <a href="?controller=sanpham&id=5" class="header__navbar-category-link-mobile">
                                    Giày, dép
                                </a>
                            </li>
                        </ul>
            </li>
            <li>
                <a href="?controller=lienhe" class="header__navbar-mobile-link">Liên hệ</a>
            </li>
            <li>
                <a href="?controller=donhang" class="header__navbar-mobile-link">Đơn hàng</a>
            </li>
            <?php
                if(isset($_SESSION['customer']) && $_SESSION['customer'] != NULL){
            ?>
            <li>
                <a href="?controller=thongtinkhachhang" class="header__navbar-mobile-link-account" style="margin-right: 10px"> <?php echo $user[0]['username']?></a>
                <a href="?controller=dangxuat" class="header__navbar-mobile-link-account">Thoát</a>
            </li>
            <?php }else{ ?>
            <li>
                <a href="?controller=dangnhap" class="header__navbar-mobile-link">
                    Tài khoản
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</body>