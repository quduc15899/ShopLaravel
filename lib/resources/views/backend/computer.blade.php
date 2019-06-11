@include('backend.master_header')
@include('backend.master_sidebar')
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Computer</h1>
                            <a href="{{asset('/admin/computer/add')}}"><button type="button" class="btn btn-primary">Thêm mới</button></a>
                            @if(Session::has('flash_noti'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{!! session('flash_noti') !!}</strong>
                                 </div>
                            @endif
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Hình ảnh</th>
                                                    <th>Tên</th>
                                                    <th>Gía</th>
                                                    <th>Loại</th>
                                                    <th >Trạng thái</th>
                                                    <th >Khuyến mãi</th>
                                                    <th>Tùy chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($computers as $computer)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <img width="150px"  src="{{asset('lib/storage/app/computer/'.$computer->cp_image)}}" class="thumbnail">
                                                    </td>
                                                    <td>{{$computer->cp_name}}</td>
                                                    <td>{{$computer->cp_price}}</td>
                                                    <td>{{$computer->cp_type}}</td>
                                                    <td>{{$computer->cp_status}}</td>
                                                    <td>{{$computer->cp_promotion}}</td>
                                                    <td>
                                                        <a href="{{asset('admin/computer/edit/'.$computer->cp_id)}}" class="btn btn-warning">Sửa</a>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')"href="{{asset('admin/computer/delete/'.$computer->cp_id)}}" class="btn btn-danger"> Xóa</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
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

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
