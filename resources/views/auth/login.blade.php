@extends('layouts.app')

@section('content')
<div class="container w-1/2 m-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="border border-gray-400 rounded p-6">
                <div class="text-2xl py-3 divide-y divide-gray-500">{{ __('Login') }}</div>

                <div class="p-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row my-2">
                            <label for="email" class="text-sm">{{ __('E-Mail Address') }}</label>

                            <div class="my-2">
                                <input id="email" type="email" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-sm text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-2">
                            <label for="password" class="text-sm">{{ __('Password') }}</label>

                            <div class="my-2">
                                <input id="password" type="password" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-sm text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="my-2 offset-md-4">
                                <div class="flex items-center">
                                    <input class="form-check-input mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-xs" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row my-2 mb-0">
                            <div class="sm:w-2/4 w-3/4 my-5 sm:my-0 m-auto">
                                <button type="submit" class="bg-green-500 hover:bg-green-700 w-full text-white rounded py-3">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-blue-500 text-xs sm:text-sm my-2 text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
