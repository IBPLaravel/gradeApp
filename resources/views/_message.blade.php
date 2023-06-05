@if(!empty(session('success')))
<div class="alert alert-success alert-dismissible fade in" roel="alert">
    {{ session('success')}}
</div>
@endif

@if(!empty(session('error')))
<div class="alert alert-danger" roel="alert">
    {{ session('error')}}
</div>
@endif

@if(!empty(session('payment-error')))
<div class="alert alert-error alert-dismissible fade in" roel="alert">
    {{ session('payment-error')}}
</div>
@endif

@if(!empty(session('warning')))
<div class="alert alert-warning alert-dismissible fade in" roel="alert">
    {{ session('warning')}}
</div>
@endif

@if(!empty(session('info')))
<div class="alert alert-info alert-dismissible fade in" roel="alert">
    {{ session('info')}}
</div>
@endif

@if(!empty(session('secondary')))
<div class="alert alert-secondary alert-dismissible fade in" roel="alert">
    {{ session('secondary')}}
</div>
@endif

@if(!empty(session('primary')))
<div class="alert alert-primary alert-dismissible fade in" roel="alert">
    {{ session('primary')}}
</div>
@endif