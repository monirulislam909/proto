
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
    <span>{{ session('success') }}</span>
        <button type="button" class="btn-close  border-0 bg-transparent" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times" style="color:brown; background-color: #d4edda; border: none; font-size: 20px"></i></button>
    </div>
@endif