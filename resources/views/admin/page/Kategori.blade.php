@extends('admin.layouts.app')
@section('title', 'kategory')
@section('content')
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Basic Initialisation</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-secondary">Dashboard</a></li>
                                <li class="breadcrumb-item  active" aria-current="page">Kategory</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="customize-input float-end">
                        <select
                            class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                            <option selected>Aug 23</option>
                            <option value="1">July 23</option>
                            <option value="2">Jun 23</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Zero Configuration</h4>
                            <h6 class="card-subtitle">
                                <a href="" class="btn btn-rounded btn-outline-primary">Kategori</a>
                                <a href="" class="btn btn-rounded btn-outline-success">Print</a>
                            </h6>
                            <div class="table-responsive">
                                <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Name Kategory</th>
                                            <th>Ukuran Botol</th>
                                            <th>Perbandingan</th>
                                            <th>Produk Asal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Platinum</td>
                                            <td>35ML</td>
                                            <td>2 : 1</td>
                                            <td>Luzi</td>
                                            <th>
                                                <a href="" class="btn btn-rounded btn-outline-warning">Edit</a>
                                                <a href="" class="btn btn-rounded btn-outline-danger">Delete</a>
                                            </th>

                                        </tr>
                                        <tr>
                                            <td>Premium</td>
                                            <td>35ML</td>
                                            <td>1 : 1</td>
                                            <td>Essentiels</td>
                                            <th>
                                                <a href="" class="btn btn-rounded btn-outline-warning">Edit</a>
                                                <a href="" class="btn btn-rounded btn-outline-danger">Delete</a>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
@endsection
