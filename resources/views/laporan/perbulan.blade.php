@extends('layouts.laporan',['title'=>'Laporan Perbulan'])
@section('content')
    <div class="container-fluid">
        <h3 class="text-center mt-2">
            {{ config('app.name') }}
        </h3>
        <p class="text-center">
            <small>
                Jl. Raya Padaherang Km.1, Desa Padaherang <br>
                Kec. Padaherang - Kab. Pangandaran
            </small>
        </p>
        @php
            $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        @endphp
        <p>
            Judul : Laporan Perbulan <br>
            Tanggal : {{ $bulan[(request()->bulan - 1)] }} {{ request()->tahun }} <br>
        </p>
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pendapatan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($row->tanggal)) }}</td>
                        <td>{{ number_format($row->jumlah,0,',','.') }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="border-bottom">
                    <th class="text-center" colspan="2" ></th>
                    <th>{{ number_format($data->sum('jumlah'),0,',','.') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection