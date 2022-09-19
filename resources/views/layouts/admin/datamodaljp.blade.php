@foreach ($charts as $chart)
    <div class="modal-body">
        <p>Apakah yakin untuk menghapus produk {{ $chart->name }} &hellip; ?</p>
    </div>
    <div class="modal-footer justify-content-between">
        <form action={{ route('chart.destroy', $chart->id) }} method="POST">
            @csrf
            @method('delete')
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Ya</button>
        </form>
    </div>
@endforeach
