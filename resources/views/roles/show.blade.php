@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1 class="text-center">Show Role</h1>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="topics-wrapper border-style">
                    <h3><span class="icon icon-circle-o text-blue"></span>{{ $role->name }}
                    </h3>
                    <ul class="topics-list">
                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Name: {{ $role->name }}
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp; Permissions:
                            @if (!empty($rolePermissions))
                                @foreach ($rolePermissions as $v)
                                    <label class="label label-success">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
