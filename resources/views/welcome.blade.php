@extends('layouts.admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    Anda Berhasil Login Sebagai {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
