  <!-- Sidebar Menu -->
  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!-- <li class="nav-item">
                <a href="index.php?act=donhang">Quản lí đơn hàng</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=sanpham">Quản lí sản phẩm</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=loaihang">Quản lí loại hàng</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=binhluan">Quản lí bình luận</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=nguoidung">Quản lí người dùng</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=hethong">Quản lí hệ thống</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=baiviet">Quản lí bài viết</a>
               </li>
               <li class="nav-item">
                <a href="index.php?act=khuyenmai">Quản lí khuyễn mãi</a>
               </li> -->
               <li class="nav-item menu-open">
               <li class="nav-header">CHỨC NĂNG CHÍNH</li>
               <li class="nav-item">
              
            <a href="#" class="nav-link">
            <i class="fa fa-list" aria-hidden="true"></i>
              <p>
                Loại hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=loaihang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách hàng hóa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addloaihang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm hàng hóa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hàng hóa đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Sản phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listsp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addsp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=xoasp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>sản phẩm đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-envelope-open" aria-hidden="true"></i>
              <p>
               Đơn hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listdonhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách đơn hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=listdhhuy" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đơn hàng đã hủy</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-comment" aria-hidden="true"></i>
              <p>
                Bình luận
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=binhluan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bình luận</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-book" aria-hidden="true"></i>
              <p>
                Bài viết
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listbaiviet" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addbaiviet" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=deletebv" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bài viết đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-indent" aria-hidden="true"></i>
              <p>
                Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listbanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addbanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm banner</p>
                </a>
              </li>
            
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-fire" aria-hidden="true"></i>
              <p>
                Khuyến mãi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khuyến mãi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm khuyến mãi</p>
                </a>
              </li>
            
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-users" aria-hidden="true"></i>

              <p>
                khách hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=khachhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khách hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm khách hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=khachhangdaxoa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>khách hàng đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-phone" aria-hidden="true"></i>
              <p>
                Liên hệ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listlienhe" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách liên hệ</p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nội dung đã xóa</p>
                </a>
              </li>
            </ul>
          </li> -->
          <?php 
          // var_dump($_SESSION['quyen']);
          if($_SESSION['quyen'][0] == 1){
            ?> 
          
          <li class="nav-header">MỤC DÀNH CHO ADMIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Người dùng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=listnd" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách nhân viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=addnd" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm nhân viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin.php?act=xoand" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhân viên đã xóa</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa fa-wrench" aria-hidden="true"></i>
              <p>
                Hệ thống
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?act=hethong" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lí hệ thống</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>#</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>#</p>
                </a>
              </li> -->
            </ul>
          </li>
          <?php 
          }
          else{
                  // echo "ko co";
          }
      // }
        ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

  
  <!-- /.content-wrapper -->
  
