@extends('layouts.conquer2')

@section('content')
    <div class="portlet">
        <div class="portlet-title">
            <b>Tampilan Transaksi dari: </b>
        </div>
        <div class="portlet-body">
            <div class="row">
                @foreach($data->medicines as $d)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="https://doodleipsum.com/700/flat?i=dc8797cdd78c30bd8c72a5fbf1157b7e" alt="">
                        <div class="caption">
                            <p align="center"><b>{{ $d->generic_name }}</b></p>
                            <hr/>
                            <p>Kategori: {{ $d->category->name }}</p>
                            <p>Harga: {{ $d->pivot->price }}</p>
                            <p>Jumlah Beli: {{ $d->pivot->quantity }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection