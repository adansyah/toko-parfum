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
                                <a href="" class="btn btn-rounded btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#top-modal">Kategori</a>

                                <a href="" class="btn btn-rounded btn-outline-success">Print</a>
                            </h6>
                            <div class="table-responsive">
                                <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Name Kategory</th>
                                            <th>Ukuran Botol</th>
                                            <th>Perbandingan</th>
                                            <th>Produk Asal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategori as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->name_kategory }}</td>
                                                <td>{{ $data->botol }}</td>
                                                <td>{{ $data->perbandingan }}</td>
                                                <td>{{ $data->bibit }}</td>
                                                <th>
                                                    <a href="{{ route('kategori.edit', $data) }}"
                                                        class="btn btn-rounded btn-outline-warning">Edit</a>
                                                    <a href="{{ route('kategori.destroy', $data) }}"
                                                        class="btn btn-rounded btn-outline-danger">Delete</a>
                                                </th>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data Kosong</td>
                                            </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- modal --}}
        <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="topModalLabel">kategori</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div>
                                <label for="">Nama Kategory :</label>
                                <input type="text" class="form-control" name="name_kategory">

                            </div>
                            <div>
                                <label for="">Ukuran Botol :</label>
                                <input type="text" class="form-control" name="botol">

                            </div>
                            <div>
                                <label for="">Perbandingan :</label>
                                <select name="perbandingan" id="" class="form-control">
                                    <option value="">~~Pilih Perbandingan~~</option>
                                    <option value="1:1">1:1</option>
                                    <option value="2:1">2:1</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Produk Asal :</label>
                                <input type="text" class="form-control" name="bibit">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



    </div>
@endsection
