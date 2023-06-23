@extends('layouts.app')

@section('template_title')
    Clientcompany
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compañia cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientcompanies.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Id Cliente</th>

										<th>Nombre compañia</th>
										<th>Telefono</th>
										<th>Nombre del contacto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientcompanies as $clientcompany)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $clientcompany->name }}</td>
											<td>{{ $clientcompany->phone }}</td>
											<td>{{ $clientcompany->contact_name }}</td>

                                            <td>
                                                <form action="{{ route('clientcompanies.destroy',$clientcompany->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientcompanies.show',$clientcompany->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientcompanies.edit',$clientcompany->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $clientcompanies->links() !!}
            </div>
        </div>
    </div>
@endsection
