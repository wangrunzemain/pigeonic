@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Console</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello, {{Auth::user()->name}}.
                    <br />
                    <a href="admin/release">发布新内容</a>
                    <br />
                    <a href="admin/delete">删除内容</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
