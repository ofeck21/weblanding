@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- add if has message error --}}
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Whoops!</strong> Something wrong.<br><br>
    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
    <ul>
        <li>{{ Session::get('error') }}</li>
    </ul>
</div>
@endif
