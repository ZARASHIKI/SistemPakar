@extends('layouts.layout')

@section('title', 'Sistem Pakar')

@section('content')
    <h1>Silahkan Menjawab Pertanyaan Dibawah Ini:</h1>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th><h2>Apakah Tumbuhan Mengalami</h2></th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users[0]))
                <tr>
                    <td><h2>{{ $users[0]->gejala }} ?</h2></td>
                </tr>
                <td>
                    <h4>
                        <form action="{{ url('input') }}" method="post">
                            @csrf
                            <div class="br">
                            <div class="form-check" style="margin-right: 30px">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    YA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Tidak
                                </label>
                            </div>
                        </div>
                            <input type="hidden" name="id_table1" value="{{ $users[0]->id_gejala}}">
                            <div class="br">
                            <button type="submit" class="btn btn-success" style="margin-top: 10px;margin-right:30px">Process</button>
                        </form>
                        <form action="{{ url('hapus') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="margin-top: 10px; display: flex;">Ulangi Pertanyaan</button>
                        </form>
                    </div>
                    </h4>
                </td>
            @endif
        </tbody>
    </table>
@endsection
