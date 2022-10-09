@extends('layouts.app')


@section('content')
    <div class="search-section">
        <div class="masthead single-masthead">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-md-auto">
                        <h1 class="text-center">User Management</h1>
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
            @can('user-create')
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Users</a>
            @endcan
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Status Verifikasi</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $user)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('M d, Y') }}</td>
                        <td>
                            @if ($user->email_verified_at != null)
                                <strong class="label label-danger"><i class="fas fa-hourglass-end"></i>&nbsp;Verify</strong>
                            @else
                                <strong class="label label-warning"><i class="fas fa-hourglass-end"></i>&nbsp;No
                                    Verify</strong>
                            @endif
                        </td>
                        <td>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="badge bg-info text-dark" href="{{ route('users.show', $user->id) }}">Show</a>
                            @can('user-edit')
                                <a class="badge bg-primary text-dark" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            @endcan
                            @can('user-delete')
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
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
@endsection
