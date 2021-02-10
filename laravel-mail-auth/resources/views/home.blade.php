@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" action="{{ route('send-email')}}" method="post">
                      @csrf
                      @method('post')

                      <label for="mailText">Testo della mail:</label>
                      <br>
                      <input type="text" name="mailText" value="" style="width:400px; height:200px;">

                      <br>
                      <br>

                      <input type="submit" name="" value="INVIA">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
