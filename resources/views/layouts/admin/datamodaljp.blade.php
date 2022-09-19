@foreach ($jasa_pengiriman as $jp)
    <div class="modal-body">
        <p>Apakah yakin untuk menghapus produk {{ $jp->name }} &hellip; ?</p>
    </div>
    <div class="modal-footer justify-content-between">
        <form action={{ route('jasapengiriman.destroy', $jp->id) }} method="POST">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Ya</button>
        </form>
    </div>
@endforeach
