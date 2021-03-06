@section('crud_form')

@if($editar)
<form method="POST" action="{{ route('tipos_medidas.update', $tipo_medida->id) }}" accept-charset="UTF-8">
    <input name="_method" type="hidden" value="PUT">
    @else
    <form method="POST" action="{{ route('tipos_medidas.store') }}" accept-charset="UTF-8">
@endif

 {{ csrf_field() }}
    <!-- Grid row -->
    <div class="form-row">
        <!-- Grid column -->
        <div class="col-md-12">
            <!-- Material input -->
            <div class="md-form">
    <i class="fa fa-balance-scale prefix"></i>
    <input type="text" required id="nombre" value="{{ $tipo_medida->nombre}}" name="nombre" class="form-control validate" maxlength="50">
    <label for="nombre" data-error="Error" data-success="Correcto">Nombre</label>
</div>
@if ($errors->has('nombre'))
                                            <div class="hoverable waves-light alert alert-danger alert-dismissible fade show" role="alert">
                                           {{ $errors->first('nombre') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                                
                                @endif
        </div>
        <!-- Grid column -->
        </div>
    <!-- Grid row -->


    <button type="submit" class="waves-effect btn {{($editar) ? 'btn-warning' : 'btn-success'}} btn-md hoverable">
    <i class="fa fa-2x {{($editar) ? 'fa-pencil-alt' : 'fa-plus'}}"></i> {{($editar) ? 'Editar' : 'Registrar'}}
    </button>
</form>
@endsection

@section('js_links')
<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection