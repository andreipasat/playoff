@if(Session::has('error'))
    <div class="custom-alerts alert alert-danger fade in">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
        {{ Session::get('error') }}
    </div>
@endif
@if(Session::has('success'))
    <div class="custom-alerts alert alert-success fade in">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
        {{ Session::get('success') }}
    </div>
@endif