@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Переводы</div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Group</th>
                                <th>Key</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($translations as $translation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $translation->group }}</td>
                                    <td>{{ $translation->key }}</td>
                                    <td>
                                        <a class="btn btn-outline-success" href="{{route('dashboard.translation.edit', $translation)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection