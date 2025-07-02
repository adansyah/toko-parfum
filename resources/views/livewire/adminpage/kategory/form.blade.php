<div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-top">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="topModalLabel">kategori</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form wire:submit="save">
                    @csrf
                    <div>
                        <label for="">Nama Kategory :</label>
                        <input type="text" class="form-control" wire:model="name_kategory" required>

                    </div>
                    <div>
                        <label for="">Ukuran Botol :</label>
                        <input type="text" class="form-control" wire:model="botol" required>

                    </div>
                    <div>
                        <label for="">Perbandingan :</label>
                        <select id="" wire:model="perbandingan" class="form-control" required>
                            <option value="">~~Pilih Perbandingan~~</option>
                            <option value="1:1">1:1</option>
                            <option value="2:1">2:1</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Produk Asal :</label>
                        <input type="text" class="form-control" wire:model="bibit" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            var modal = bootstrap.Modal.getInstance(document.getElementById('top-modal'));
            if (modal) {
                modal.hide();
            }
        });
    </script>
@endpush
