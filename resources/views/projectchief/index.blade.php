@extends('layouts.app')

@section('template_title')
    Projectchief
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jefe de proyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('projectchiefs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('crear nuevo') }}
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
                                        <th>Id jefe</th>

										<th>Nombre</th>
										<th>Telefono</th>
										<th>Sexo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projectchiefs as $projectchief)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $projectchief->name }}</td>
											<td>{{ $projectchief->phone }}</td>
											<td>{{ $projectchief->sex }}</td>

                                            <td>
                                                <form action="{{ route('projectchiefs.destroy',$projectchief->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('projectchiefs.show',$projectchief->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('projectchiefs.edit',$projectchief->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $projectchiefs->links() !!}
            </div>
        </div>
    </div>
@endsection
