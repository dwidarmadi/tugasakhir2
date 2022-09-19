@foreach ($banks as $bank)
    <div class="modal-body">
        <p>Apakah yakin untuk menghapus produk {{ $bank->name }} &hellip; ?</p>
    </div>
    <div class="modal-footer justify-content-between">
        <form action={{ route('bank.destroy', $bank->id) }} method="POST">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Ya</button>
        </form>
    </div>
@endforeach
