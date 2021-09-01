<body>
    <div class="admin-menu">
        <ul class="admin-menu__list">
            <li class="admin-menu__item">
                <a href="#" class="admin-menu__item-link admin-menu__item-link-has-img">
                    <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                </a>
            </li>
            <li class="admin-menu__item">
                <a href="?controller=trangquantri" class="admin-menu__item-link <?php if ($_GET['controller'] == 'trangquantri') echo 'active'?>">Tổng quan</a>
            </li>
            <li id="menu1" class="admin-menu__item">
                <a href="#" class="admin-menu__item-link">Quản lý website</a>
            </li>
            <li id="menu1" class="admin-menu__item">
                <a href="?controller=quanlynhanvien" class="admin-menu__item-link <?php if ($_GET['controller'] == 'quanlynhanvien' || $_GET['controller'] == 'xulinhanvien' || $_GET['controller'] == 'themnhanvien') echo 'active'?> ">Quản lý nhân viên</a>
            </li>
            <li id="menu1" class="admin-menu__item">
                <a href="?controller=quanlynguoidung" class="admin-menu__item-link <?php if ($_GET['controller'] == 'quanlynguoidung' || $_GET['controller'] == 'xulinguoidung') echo 'active'?>">Quản lý người dùng</a>
            </li>
            <li class="admin-menu__item">
                <a href="?controller=quanlysanpham" class="admin-menu__item-link <?php if ($_GET['controller'] == 'quanlysanpham' || $_GET['controller'] == 'xulisanpham' || $_GET['controller'] == 'themsanpham') echo 'active'?>">Quản lý sản phẩm</a>
            </li>
            <li class="admin-menu__item">
                <a href="?controller=quanlydonhang" class="admin-menu__item-link <?php if ($_GET['controller'] == 'quanlydonhang' || $_GET['controller'] == 'xulidonhang' || $_GET['controller'] == 'quanlydonhangchitiet' || $_GET['controller'] == 'xulidonhangchitiet') echo 'active'?>">Quản lý đơn hàng</a>
            </li>
            <li class="admin-menu__item">
                <a href="?controller=quanlydanhgia" class="admin-menu__item-link <?php if ($_GET['controller'] == 'quanlydanhgia' || $_GET['controller'] == 'xulidanhgia') echo 'active'?>">Quản lý đánh giá</a>
            </li>
        </ul>
    </div>
</body> 