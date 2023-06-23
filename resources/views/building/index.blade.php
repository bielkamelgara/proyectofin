@extends('layouts.app')

@section('template_title')
    Building
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Edificios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('buildings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Codigo edificio</th>

										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buildings as $building)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $building->address }}</td>
											<td>{{ $building->phone }}</td>

                                            <td>
                                                <form action="{{ route('buildings.destroy',$building->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('buildings.show',$building->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('buildings.edit',$building->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $buildings->links() !!}
            </div>
        </div>
    </div>
@endsection
