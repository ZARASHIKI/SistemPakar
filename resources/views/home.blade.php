@extends('layouts.layout')

@section('title', 'Sistem Pakar')

@section('content')
    <h1 style="text-align: center">Sistem Pakar Penyakit Tumbuhan Hidroponik</h1>

    <table >
        <thead>
            <tr>
                <th>Nama Penyakit :</th>
            </tr>
        </thead>
        @foreach ($penyakit as $item)
        <tbody>
            <tr>
                <td>
                    {{$item->penyakit}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
