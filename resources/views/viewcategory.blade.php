@include('header');
            <div id="layoutSidenav_content">
                <main>
                @if ($message = Session::get('success'))  
                <div class="alert alert-success alert-block">  
                    <button type="button" class="close" data-dismiss="alert">?</button>   
                        <strong>{{ $message }}</strong>  
                </div>  
                @endif  
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category list</li>
                          
                        </ol>
                      
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              Category List
                              <a href="{{url('create_category')}}" class="btn btn-success" style="width:200px;float:right">create category</a>
                      
                            </div>
                           
                            <div class="card-body">
                           
                                <table id="datatablesSimple">
                              
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1;?>
                                    @foreach ($category as $user)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $user->category }}</td>
                                            <td>
                                                <a href="{{url('edit_category/'.$user->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{url('delete_category/'.$user->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
