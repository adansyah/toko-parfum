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
                                    {{-- <th>
                                                    <a href="{{ route('kategori.edit', $data) }}"
                                                        class="btn btn-rounded btn-outline-warning">Edit</a>
                                                    <a href="{{ route('kategori.destroy', $data) }}"
                                                        class="btn btn-rounded btn-outline-danger">Delete</a>
                                                </th> --}}

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
