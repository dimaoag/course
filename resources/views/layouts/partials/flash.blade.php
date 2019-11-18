@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1>lsjdf ls lksjd  {{ session('key') }}</h1>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ( Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif
