@extends('layouts.admin')
@section('content')

    <div class="contianer">
        <div class="row">
            
            <div class="col-6 ">
                <button type="submit" class="btnHeader">
                    <a class="colorLink" href="{{ route('admin.portfolios.create') }}">Home</a>
                </button>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($portfolio as $portfolios)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $portfolios->title}}</div>
                        <div class="card-body">{{ $portfolios->description }}</div>
                        <div>
                            <img class="StyleImg" src="{{$portfolios->thumb}}" alt="">
                        </div>
                        <div>
                            {{ $portfolios->type ? $portfolios->type->date : 'senza categoria' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
<style>

.StyleImg{

    width: 300px;
    height: 200px;
    object-fit: cover;
    margin: 20px 20px 20px 80px    
}   

</style>