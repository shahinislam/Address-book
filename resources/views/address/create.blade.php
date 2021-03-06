@extends('layouts.app')

@section('title', 'Address Create')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pb-5">
                <div class="card-header text-center text-uppercase text-light text-info"
                     style="font-family: 'Times New Roman';
                     background: -webkit-linear-gradient(left, darkgreen, darkblue);">
                    <h1>Insert Address</h1>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="col-md-10">
                        <h3 class="text-uppercase text-success m-2" style="font-family: cursive;" >
                            {{ $contact->firstname }} {{ $contact->lastname }}</h3>

                        <form action="/contacts/{{ $contact->id }}/address" method="post">


                            @include('address.form')

                            @csrf

                            <button class="btn btn-success">Add Address</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection