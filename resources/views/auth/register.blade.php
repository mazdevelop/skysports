@extends('layouts.app')

@section('content')
<div class="container w-1/2 m-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="border border-gray-400 rounded p-6">
                <div class="text-2xl py-3 divide-y divide-gray-500">{{ __('Register') }}</div>

                <div class="p-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row my-2">
                            <label for="name" class="text-sm">{{ __('Name') }}</label>

                            <div class="my-2">
                                <input id="name" type="text" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-sm text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-2">
                            <label for="email" class="text-sm">{{ __('E-Mail Address') }}</label>

                            <div class="my-2">
                                <input id="email" type="email" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-sm text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-2">
                            <label for="password-confirm" class="text-sm">{{ __('Confirm Password') }}</label>

                            <div class="my-2">
                                <input id="password-confirm" type="password" class="focus:ring-2 focus:ring-blue-400  outline-none py-1 rounded w-full border border-gray-200" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row my-2 mb-0">
                            <div class=" w-2/4 m-auto">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 w-full text-white rounded py-3">
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
