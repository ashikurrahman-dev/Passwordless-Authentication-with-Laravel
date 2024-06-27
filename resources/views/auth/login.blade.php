<x-app-layout>
    <div class="flex items-center justify-center min-h-screen">
        <form action="{{ route('auth.login') }}" method="post"
            class="max-w-md w-full bg-white bg-gradient-to-r from-rose-100 to-teal-100 p-6 rounded-lg shadow-2xl space-y-6">
            @csrf
            <h1 class="font-bold text-2xl text-gray-700 text-center">Login</h1>
            <div class="space-y-2">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    placeholder="example@gmail.com"
                    class="bg-slate-50 px-2 py-3  w-full rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('email') border-2 border-red-500 @enderror">
                @error('email')
                    <p class="text-red-600 text-sm">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button type="submit"
                class="w-full bg-teal-500 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-rose-400">Log
                In</button>

            @if (session()->has('success'))
                <p>
                    {{ session('success') }}
                </p>
            @endif
        </form>
    </div>
</x-app-layout>
