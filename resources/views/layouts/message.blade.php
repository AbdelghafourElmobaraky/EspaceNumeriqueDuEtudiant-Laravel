@if (session('success'))
    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <i class="ace-icon fa fa-check green"></i>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-block alert-danger">
        <button type="button" class="close" data-dismiss="alert">
        </button>
        <i class="ace-icon fa fa-warning red"></i>
        {{ session('error') }}
    </div>
@endif

    