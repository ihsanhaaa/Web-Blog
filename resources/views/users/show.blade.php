@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1 class="text-center">Show User</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5 col-md-6">
                <div class="topics-wrapper border-style">
                    <h3><span class="icon icon-circle-o text-blue"></span>{{ $user->name }}
                    </h3>
                    <ul class="topics-list">
                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Name: {{ $user->email }}
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Status:
                            @if ($user->email_verified_at != null)
                                <strong class="label label-danger"><i class="fas fa-hourglass-end"></i>&nbsp;Verify</strong>
                            @else
                                <strong class="label label-warning"><i class="fas fa-hourglass-end"></i>&nbsp;No
                                    Verify</strong>
                            @endif
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Role:
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
