<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm loại hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="?act=addloaihang">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại hàng</label>
                    <input type="text" name="ten_loai_hang" class="form-control" id="exampleInputEmail1" required placeholder="Tên loại hàng">
                    <br>
                    
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" name="mo_ta" class="form-control" id="exampleInputPassword1" required placeholder="Mô tả">
                    <br>
                    <label for="exampleInputPassword1">Ảnh</label>
                <input type="file" id="anh" name="anh" accept="image/*">
                   
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
                </div>
              </form>
            </div>