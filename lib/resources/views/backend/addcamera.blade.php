@include('backend.master_header')
@include('backend.master_sidebar')
         </nav>
         <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <h1 class="page-header">Thêm sản phẩm</h1>
                  </div>
                  <!-- /.col-lg-12 -->
               </div>
               <!-- /.row -->
               <div class="row">
                  <div class="col-lg-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           Thêm sản phẩm
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-lg-12">
                                 <form role="form" method="post" enctype="multipart/form-data">
                                    @include('errors.note')
                                    <div class="form-group" >
                                       <span><b style="color:red">*</b></span><label>Tên sản phẩm</label>
                                       <input required type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                       <span><b style="color:red">*</b></span><label>Loại</label>
                                       <input required type="text" name="product_type" class="form-control">
                                    </div>
                                    <div class="form-group">
                                       <label>Giá</label>
                                       <input type="number" name="price" class="form-control" required>
                                    </div>
                                    <div class="form-group" >
                                       <label>Miêu tả</label>
                                       <textarea class="ckeditor" required id="description" name="description">

                                    </textarea>
                                       <script src="{{asset('lib/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                       <script>
                                          CKEDITOR.replace( 'description' );
                                       </script>
                                    </div>
                                    <div class="form-group" >
                                       <label>Khuyến mãi</label>
                                       <input required type="text" name="promotion" class="form-control">
                                    </div>
                                    <div class="form-group" >
                                       <label>Ảnh</label>
                                       <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                       <img id="avatar" class="thumbnail" width="100px" src="img/new_seo-10-512.png">
                                    </div>
                                    <div class="form-group" >
                                       <label>Trạng thái</label>
                                       <select name="status" required class="form-control">
                                          <option value="0">Còn hàng</option>
                                          <option value="1">Hết hàng</option>
                                          <option value="2">Đặt trước</option>
                                       </select>
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    <a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
                              </div>
                           </div>
                           {{csrf_field()}}
                           </form>
                        </div>

                     </div>
                     <!-- /.row (nested) -->
                  </div>
                  <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="js/metisMenu.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="js/startmin.js"></script>

      <script>
                function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
         $(document).ready(function() {
        $('#avatar').click(function(){
        $('#img').click();
    });
});

      </script>
   </body>
</html>
