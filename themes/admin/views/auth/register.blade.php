<x-guest-layout>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <a href="{{url('/admin/login')}}">
                <img alt="fatima"  src="{{asset('admin/images/bzu.png')}}">
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('admin.register') }}">
                @csrf

                 <!-- Name -->
                 <div>
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Name') }}
                    </label>

                    <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Email') }}
                    </label>

                    <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Phone') }}
                    </label>

                    <input id="phone" type="text"
                            class="form-input w-full @error('phone') border-red-500 @enderror" name="phone"
                            required autocomplete="phone">

                    @error('phone')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('ID Number') }}
                    </label>

                    <input id="ssn" type="number"
                            class="form-input w-full @error('ssn') border-red-500 @enderror" name="ssn"
                            value="{{ old('ssn') }}" required autocomplete="ssn">

                    @error('ssn')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Bank Number') }}
                    </label>

                    <input id="bankNum" type="text"
                            class="form-input w-full @error('bankNum') border-red-500 @enderror" name="bankNum"
                            required autocomplete="bankNum">

                    @error('bankNum')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Password') }}
                    </label>

                    <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                    @error('password')
                        <p class="mt-1 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">
                        {{ __('Confirm Password') }}
                    </label>

                    <input id="password-confirm" type="password" class="w-full form-input"
                            name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('admin.login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
