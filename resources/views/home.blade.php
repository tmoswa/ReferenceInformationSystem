@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if (count($errors) > 0)

                <div class="alert alert-danger">
              
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
              
                  <ul>
              
                     @foreach ($errors->all() as $error)
              
                       <li>{{ $error }}</li>
              
                     @endforeach
              
                  </ul>
              
                </div>
              
              @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
