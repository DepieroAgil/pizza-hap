@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Driver Table</h1>

        {{-- start add menu --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Driver Data
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Driver</th>
                            <th>Nama Driver</th>
                            <th>Email</th>
                            <th>No Telf</th>
                            <th>Alamat</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td colspan="2">
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a onclick="return confirm('Are you sure to delete {{ $user->name }}')"
                                        class="btn btn-danger" href="{{ url('delete_driver', $user->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- end of add menu --}}
@endsection
