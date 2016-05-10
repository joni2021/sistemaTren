@if($errors->any())
    <div class="alert alert-sm alert-border-left alert-danger light alert-dismissable animated fadeInDown">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <strong>Error:</strong>

        <ul>
            @foreach ($errors->all() as $e)
                <li>{!! $e !!}</li>
            @endforeach
        </ul>
    </div>
@endif