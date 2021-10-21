@extends('layouts.layout')
@section('header')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endsection
@section('content')

予約画面
<form method="POST" action="/reservation" class="mt-5">
    @csrf
    日時を選択してください。
    <script src="{{ asset('/js/datepicker.js') }}" defer></script>
    <input type="text" class="form-control datetimepicker" name="Appointment_time"> 

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

        <div class="col-md-6">
            <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

            @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>



    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('登録') }}
            </button>
        </div>
    </div>
</form>
@endsection
