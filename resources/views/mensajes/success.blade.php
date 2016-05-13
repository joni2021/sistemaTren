@if(session('ok'))
    <div class="alert alert-sm alert-border-left alert-success light alert-dismissable animated fadeInDown">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <strong>Éxito:</strong>

        <ul>
            <li>{!! session('ok') !!}</li>
        </ul>
    </div>
@endif