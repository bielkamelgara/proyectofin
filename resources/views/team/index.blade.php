@extends('layouts.app')

@section('template_title')
    Team
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipo de trabajo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Id equipo</th>

										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Sexo</th>
										<th>id Proyecto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $team->names }}</td>
											<td>{{ $team->surnames }}</td>
											<td>{{ $team->sex }}</td>
											<td>{{ $team->id_project }}</td>

                                            <td>
                                                <form action="{{ route('teams.destroy',$team->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('teams.show',$team->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('teams.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $teams->links() !!}
            </div>
        </div>
    </div>
@endsection
