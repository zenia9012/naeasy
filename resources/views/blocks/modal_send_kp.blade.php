<button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#modal_kp">
    {{ __('main.button_get_kp') }}
</button>

<!-- Modal -->
<div class="modal fade" id="modal_kp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('main.button_get_kp') }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('sendKP') }}" class="form-horizontal" method="post">
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
                                    <label for="email" class="control-label"></label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="{{ __('base.pl_email') }}" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary button_orange">{{ __('base.pl_button') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>