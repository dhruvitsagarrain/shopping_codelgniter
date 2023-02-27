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
                        <h3 class="mt-4">Category</h3>
                     <form method="post" action="{{url('create')}}">
                     {{ csrf_field() }}
                        <hr>
                        <div class="col-lg-4">
                            * <label>Enter Your category</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter Category name">
                            <br>
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                     </form>
            
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
