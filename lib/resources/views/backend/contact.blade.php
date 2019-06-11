@include('backend.master_header')
@include('backend.master_sidebar')
            </nav>


            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Liên hệ</h1>
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
                                                    <th>Mail </th>
                                                    <th>Tên</th>
                                                    <th>Tin nhắn</th>
                                                    <th>Thời gian</th>
                                                    <th>Tùy chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contact)
                                                <tr class="odd gradeX">
                                                    <td>{{$contact->ct_name}}</td>
                                                    <td>{{$contact->ct_email}}</td>
                                                    <td>{{$contact->ct_message}}</td>
                                                    <td>{{$contact->updated_at}}</td>
                                                    <td>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?')"href="{{asset('admin/contact/delete/'.$contact->ct_id)}}" class="btn btn-danger"> Xóa</a>
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
