@if( session()->has('success') )
<!-- Success Message -->
<div class="container alert alert-success alert-dismissible fade show mt-5 w-50 text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

@if( session()->has('error') )
<!-- Error Message -->
<div class="container alert alert-danger alert-dismissible fade show mt-5 w-50 text-center" role="alert">
    <strong>{{ session('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif