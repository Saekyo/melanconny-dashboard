@extends('layout.app')
@section('title', 'Category')

@section('head')
    <link rel="stylesheet" href={{ asset('vendor/sweetalert/sweetalert.css') }}>
    <link rel="stylesheet" href={{ asset('vendor/animate-css/vivify.min.css')}}>
    <link rel="stylesheet" href={{ asset('vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}>
    <link rel="stylesheet" href={{ asset('vendor/sweetalert/sweetalert.css')}}>
    <style>
        .dataTables_length {
            display: none;
        }
    </style>

@endsection

@section('content')
    {{-- <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>Category</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Melanconny</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">Category</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addCategory">Add Category</a></li>
                        </ul>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Marshall Nichols</h6>
                                                </td>
                                                <td>24 Jun, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default js-sweetalert"
                                                        title="Delete" data-type="confirm"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Susie Willis</h6>
                                                </td>
                                                <td>28 Jun, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default js-sweetalert"
                                                        title="Delete" data-type="confirm"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="addCategory">
                                <div class="body mt-2">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input required type="text" class="form-control" placeholder="Category Name *">
                                            </div>
                                        </div>
                                        </div>
                                            <button type="button" class="btn btn-primary">Add</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>Category</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Melanconny</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs2">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#e_list">All
                                    Categories</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#e_add">Add Category</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane  show active" id="e_list">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="w60">
                                                    <label class="fancy-checkbox">
                                                        {{-- <input class="checkbox-tick" type="checkbox" name="checkbox"> --}}
                                                        <span>1</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="font-15">T shirt</div>
                                                </td>
                                                <td>24 Jun, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default js-sweetalert"
                                                        title="Delete" data-type="confirm"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="w60">
                                                    <label class="fancy-checkbox">
                                                        {{-- <input class="checkbox-tick" type="checkbox" name="checkbox"> --}}
                                                        <span>2</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="font-15">Accessories</div>
                                                </td>
                                                <td>24 Jun, 2015</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Edit"><i
                                                            class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default js-sweetalert"
                                                        title="Delete" data-type="confirm"><i
                                                            class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="e_add">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Category Name *"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary">ADD</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src={{ asset('vendor/sweetalert/sweetalert.min.js') }}></script>
    <script src={{ asset('js/pages/ui/dialogs.js') }}></script>
    <script src={{ asset('js/bundles/datatablescripts.bundle.js') }}></script>
    <script src={{ asset('js/pages/ui/dialogs.js') }}></script>
    <script src={{ asset('js/pages/tables/jquery-datatable.js') }}></script>
    <script>
        $('.dataTable').dataTable({searching: false});
    </script>
@endsection
