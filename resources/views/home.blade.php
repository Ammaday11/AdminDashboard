@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="../resources/assets/assets/vendor/datatables/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="../resources/assets/assets/vendor/datatables/css/buttons.bootstrap4.css">
<link rel="stylesheet" href="../resources/assets/assets/vendor/datatables/css/select.bootstrap4.css">
<link rel="stylesheet" href="../resources/assets/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('content')
<body> 
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- ============================================================== -->
                        <!-- Start Content  -->
                        <!-- ============================================================== -->

                        <h3 class="text-left">{{ now()->format('Y-M-d') }}</h3>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total followers   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Pending</h5>
                                            <h2 class="mb-0"> 100</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                            <i class=" fas fa-clock fa-fw fa-sm text-brand"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total followers   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- partnerships   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Uncleared</h5>
                                            <h2 class="mb-0">4</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                            <i class=" fa fa-exclamation-triangle fa-fw fa-sm text-secondary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end partnerships   -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- total earned   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Completed</h5>
                                            <h2 class="mb-0"> 5</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                                            <i class="fas fa-check fa-fw fa-sm text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total earned   -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total views   -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-inline-block">
                                            <h5 class="text-muted">Total Orders</h5>
                                            <h2 class="mb-0"> 12</h2>
                                            <h5 class="text-muted">Total Covers</h5>
                                            <h2 class="mb-0"> 15</h2>
                                        </div>
                                        <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                            <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end total views   -->
                            <!-- ============================================================== -->
                        </div>

                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">New Order</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Check</th>
                                                    <th>Room</th>
                                                    <th>Cover</th>
                                                    <th>Time</th>
                                                    <th>Order Taker</th>
                                                    <th>Details</th>
                                                    <th>Delivered By</th>
                                                    <th>Delivered At</th>
                                                    <th>Cleared By</th>
                                                    <th>Cleared At</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($teachers as $teacher) --}}
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Test1</td>
                                                    <td>Test2</td>
                                                    <td>Test3</td>
                                                    <td>Test4</td>
                                                    <td>Test5</td>
                                                    <td>Test6</td>
                                                    <td>Test7</td>
                                                    <td>Test8</td>
                                                    <td>Test9</td>
                                                    <td>Test10</td>
                                                    <td>Test11</td>
                                                    <td>
                                                        <a href="#" class="btn btn-info btn-sm m-r-10 fa fa-eye" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-brand btn-sm m-r-10 fas fa-edit" data-toggle="modal" data-target="#exampleModal"></a>
                                                        <a href="#" class="btn btn-danger btn-sm m-r-10 fas fa-trash" data-toggle="modal" data-target="#exampleModal"></a>
                                                        
                                                    </td>
                                                </tr>
                                            {{-- @endforeach --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                
                        
                        <!-- ============================================================== -->
                        <!-- End Content  -->
                        <!-- ============================================================== -->    
                    </div>
                </div>
            </div>




            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('include.footer')
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    @section('script')
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="../resources/assets/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="../resources/assets/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="../resources/assets/assets/vendor/datatables/js/data-table.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    @endsection

</body>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
