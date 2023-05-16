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
            <tr>
            <td><h2>{{$users[0]->gejala}} ?</h2></td>
            </tr>
            <td><h4>
                <form action="" method="post">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  YA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Tidak
                </label>
            </form>
              </div></h4></td>
        </tbody>
    </table>
@endsection
