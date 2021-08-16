<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
    <style>
        <?php if ($admin[0]['lv'] == 2){ ?>
        #menu1{
            display: none;
        }
        <?php } ?>
    </style>
</head>
<body>
    <div class="grid">
        <div class="row no-gutters">
            <div class="col l-2 m-0 c-0">
                <div class="admin-menu">
                    <ul class="admin-menu__list">
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link admin-menu__item-link-has-img">
                                <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                            </a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=trangquantri" class="admin-menu__item-link">Tổng quan</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý website</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynguoidung" class="admin-menu__item-link">Quản lý người dùng</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlysanpham" class="admin-menu__item-link active">Quản lý sản phẩm</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="admin-header">
                        <div class="admin-header__sections">
                            <label for="nav__mobile-input-admin" class="admin-menu-icon"><i class="fas fa-bars"></i></label>
                            <a href="?controller=trangchu" class="admin-header__back-to-website"><i class="fas fa-backward"></i> Trở về website</a>
                        </div>
                        <div class="admin-header__admin-info">
                            <h3 class="admin-header__admin-name"><?php echo $admin[0]['fullname'] ?></h3>
                            <a href="?controller=dangxuatquantri" class="admin-header__admin-logout">Thoát</a>
                        </div>
                        <input type="checkbox" hidden class="nav__mobile-input-admin" id="nav__mobile-input-admin">
                        <label for="nav__mobile-input-admin" class="header__navbar-mobile-overlay-admin"></label>
                        <div class="admin-menu__mobile">
                            <label for="nav__mobile-input-admin" class="header__navbar-mobile-close-admin">                    
                                <i class="fas fa-times"></i>
                            </label>
                            <ul class="admin-menu__list">
                                <li class="admin-menu__item">
                                    <a href="?controller=trangquantri" class="admin-menu__item-link admin-menu__item-link-has-img">
                                        <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                                    </a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=trangquantri" class="admin-menu__item-link">Tổng quan</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="#" class="admin-menu__item-link">Quản lý website</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                                </li>
                                <li id="menu1" class="admin-menu__item">
                                    <a href="?controller=quanlynguoidung" class="admin-menu__item-link">Quản lý người dùng</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlysanpham" class="admin-menu__item-link active">Quản lý sản phẩm</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                                </li>
                                <li class="admin-menu__item">
                                    <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading">Sửa thông tin sản phẩm</h3><br>
                        </div>
                        <div class="col l-6 l-o-3 m-12 c-12">
                            <form action="?controller=xulisanpham&method=edit&id=<?php echo $data_product[0]['id'] ?>" method="post" name="addform" enctype="multipart/form-data">
                                <div class="admin__add-product">
                                    <div class="admin__add-product-item">
                                        <label for="name" class="admin__add-product-label">Tên sản phẩm</label>
                                        <input type="text" name="name" id="name" value="<?php echo $data_product[0]['name'] ?>" placeholder="Tên sản phẩm" class="admin__add-product-input">
                                        <?php if (isset($error['name'])){?> 
                                            <p class="error"><?php echo $error['name']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image" class="admin__add-product-label">Hình ảnh sản phẩm 1</label>
                                        <input type="file" name="image" value="<?php echo $data_product[0]['image'] ?>" id="image" class="admin__add-product-image">
                                        <?php if (isset($error['image'])){?> 
                                            <p class="error"><?php echo $error['image']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image2" class="admin__add-product-label">Hình ảnh sản phẩm 2</label>
                                        <input type="file" name="image2" value="<?php echo $data_product[0]['image2'] ?>" id="image2" class="admin__add-product-image">
                                        <?php if (isset($error['image2'])){?> 
                                            <p class="error"><?php echo $error['image2']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image3" class="admin__add-product-label">Hình ảnh sản phẩm 3</label>
                                        <input type="file" name="image3" value="<?php echo $data_product[0]['image3'] ?>" id="image3" class="admin__add-product-image">
                                        <?php if (isset($error['image3'])){?> 
                                            <p class="error"><?php echo $error['image3']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image4" class="admin__add-product-label">Hình ảnh sản phẩm 4</label>
                                        <input type="file" name="image4" value="<?php echo $data_product[0]['image4'] ?>" id="image4" class="admin__add-product-image">
                                        <?php if (isset($error['image4'])){?> 
                                            <p class="error"><?php echo $error['image4']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="price" class="admin__add-product-label">Giá sản phẩm</label>
                                        <input type="text" name="price" value="<?php echo $data_product[0]['price'] ?>" id="price" placeholder="Giá sản phẩm" class="admin__add-product-input">
                                        <?php if (isset($error['price'])){?> 
                                            <p class="error"><?php echo $error['price']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="desc" class="admin__add-product-label">Mô tả sản phẩm</label>
                                        <textarea name="desc" id="desc" placeholder="Mô tả" class="admin__add-product-textarea"><?php echo $data_product[0]['description'] ?></textarea>
                                        <?php if (isset($error['description'])){?> 
                                            <p class="error"><?php echo $error['description']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="catalog" class="admin__add-product-label">Danh mục sản phẩm</label>
                                        <select name="catalog" id="catalog" class="admin__add-product-select">
                                            <?php foreach ($catalog_all as $key => $value){ ?>
                                                <option <?php if( $data_product[0]['catalog'] == $value['id']){ echo "selected=\"selected\""; } ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    <?php if (isset($error['catalog'])){?> 
                                        <p class="error"><?php echo $error['catalog']; ?></p>
                                    <?php } ?>
                                    </div>
                                    <input type="submit" value="Sửa sản phẩm" name="edit-product" class="admin__add-product-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>