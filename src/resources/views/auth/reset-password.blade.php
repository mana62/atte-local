@extends('layouts.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="flex items-center justify-center min-h-screen ">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('メールアドレス')" class="text-center" />
                    <x-input id="email" class="block mt-1 w-full border-2 border-gray-800 rounded-md" type="email"
                        name="email" :value="old('email', $request->email)" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('パスワード')" class="text-center" />
                    <x-input id="password" class="block mt-1 w-full border-2 border-gray-800 rounded-md" type="password"
                        name="password" required />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('確認用パスワード')" class="text-center" />
                    <x-input id="password_confirmation" class="block mt-1 w-full border-2 border-gray-800 rounded-md"
                        type="password" name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="w-full justify-center">
                        {{ __('パスワードリセット') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
@endsection
