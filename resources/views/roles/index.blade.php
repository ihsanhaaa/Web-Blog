@extends('layouts.app')

@section('content')
    <div class="search-section">
        <div class="masthead single-masthead">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <h1 class="text-center">Role Management</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="mb-3">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->created_at->format('M d, Y') }}</td>
                        <td>
                            <a class="badge bg-info text-dark" href="{{ route('roles.show', $role->id) }}">Show</a>
                            @can('role-edit')
                                <a class="badge bg-info text-dark" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge bg-danger" style="border: none;">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $roles->render() !!}
@endsection
