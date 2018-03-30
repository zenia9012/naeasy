<form action="{{ route('feedback') }}" class="form-horizontal" method="post">
    {{csrf_field()}}
    <div class="personal-data">
        <div class="form-group">
            <div class="col-sm-12">
                <label for="name" class="control-label"></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('base.pl_name') }}"
                       required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label"></label>
            <div class="col-sm-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('base.pl_email') }}"
                       required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="control-label"></label>
            <div class="col-sm-12">
                <textarea class="form-control" name="message" id="message" cols="30" rows="4" required
                          placeholder="{{ __('base.pl_message') }}"></textarea>
            </div>
        </div>
        @if($errors->any())
            <div class="row">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div style="clear: both;"></div>
        @endif
    </div>
    <div class="form-gorup">
        <button type="submit" class="btn btn-default">{{ __('base.pl_button') }}</button>
    </div>
</form>