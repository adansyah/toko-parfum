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

        <div class="container-fluid">
            @livewire('adminpage.kategory.table')
        </div>

        {{-- modal --}}
        @livewire('adminpage.kategory.form')



    </div>
@endsection
