@extends('layouts.conquer2')

@section('content')
    <table class="table" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Pembeli</th>
                <th>Kasir</th>
                <th>Tanggal Transaction</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->buyer->name }}</td>
                    <td>{{ $d->user->name }}</td>
                    <td>{{ $d->transaction_date }}</td>
                    <td><a class="btn btn-default" data-toggle="modal" href="/detil/{{$d->id}}";">Lihat Rincian Pembelian</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection