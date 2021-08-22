<div class="modal fade" id="exampleModalVerif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form id="form-verif" action="" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="status" id="status" required>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script>
    $('.verif').on('click', function(e){
    var route = $(this).data('route');
    var status = $(this).data('status');
    var text = $(this).data('text');
    $('#form-verif').attr('action',route);

    $('#status').val(status);
    $('#exampleModalLabel1').text(text);
    });
</script>
@endsection