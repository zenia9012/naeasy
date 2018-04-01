<button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#modal_callback">
    {{ __('main.button_callback') }}
</button>

<!-- Modal -->
<div class="modal fade" id="modal_callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('main.button_callback') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('callback') }}" class="form-horizontal" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="name" class="control-label"></label>
                                        <input type="text" class="form-control"
                                               id="name" name="name" placeholder="{{ __('base.pl_name') }}" required>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <label for="phone" class="control-label"></label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               placeholder="{{ __('base.pl_phone') }}"
                                               pattern="\d*" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary button_orange">{{ __('base.pl_callback_button') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>