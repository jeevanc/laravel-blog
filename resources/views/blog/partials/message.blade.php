@if(session('success_msg'))
    <div class="alert fade in alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('success_msg') }}
    </div>
@elseif(session('error_msg'))
    <div class="alert fade in alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>
        {{ session('error_msg') }}
    </div>
@elseif(session('warning_msg'))
    <div class="alert fade in alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-warning"></i> Warning!</h4>
        {{ session('warning_msg') }}
    </div>
@elseif(session('info_msg'))
    <div class="alert fade in alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-info"></i> Info!</h4>
        {{ session('info_msg') }}
    </div>
@endif