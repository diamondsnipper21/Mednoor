<div class="modal fade" id="subtitleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cancel"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Subtitles</h4>
            </div>
            <div class="modal-body">
                
                {!! view('admin.subtitles.show') !!}

                <input type="hidden" id="subtitle-id" value=""/>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
