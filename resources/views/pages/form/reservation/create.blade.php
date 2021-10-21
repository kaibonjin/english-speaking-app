@extends('layouts.layout')
@section('content')

予約画面
<form method="POST" action="/reservation" class="mt-5">
    @csrf
    <input class="form-control text-sm datetimepicker col-12 col-md-4" type="text" data-format="YYYY-MM-DD HH:mm" data-toggle="datetimepicker" name="starts_at" id="starts_at" value="2021-10-21 00:00" autocomplete="off" required="">

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
