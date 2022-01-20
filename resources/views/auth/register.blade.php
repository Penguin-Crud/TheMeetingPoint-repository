@extends('layouts.headHTML')

@section('register')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-black">
                <h2 style="color:white ;font-size: 3em;" class="d-flex justify-content-center mt-3">{{ __('Register') }}</h2>
                <div class="card-body mt-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3 d-flex flex-row justify-content-center">
                            <label for="name" class="col-md-2 col-form-label text-md-right text-white">{{ __('Name :') }}</label>

                            <div class="col-md-6 ms-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-row justify-content-center">
                            <label for="email" class="col-md-2 col-form-label text-md-right text-white">{{ __('E-Mail Address :') }}</label>

                            <div class="col-md-6 ms-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-row justify-content-center">
                            <label for="password" class="col-md-2 col-form-label text-md-right text-white">{{ __('Password :') }}</label>

                            <div class="col-md-6 ms-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-row justify-content-center">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right text-white">{{ __('Confirm Password :') }}</label>

                            <div class="col-md-6 ms-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-row justify-content-center">
                            <label class="required col-md-2 col-form-label text-md-right text-white" for="timezone">{{ __('TimeZone :') }}</label>
                            <div class="col-md-6 ms-2">
                                <select class="form-control" name="timezone" id="timezone">
                                    @foreach(Helpers::getTimeZoneList() as $timezone => $timezone_gmt_diff)
                                        <option value="{{ $timezone }}" >
                                            {{ $timezone_gmt_diff }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 mt-2">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
