<x-app-layout>
    <div class="max-w-md w-full bg-white bg-gradient-to-r text-center from-rose-100 to-teal-100 p-6 rounded-lg shadow-2xl space-y-6">
        @auth
            <h1 class="font-semibold text-slate-700 text-2xl">{{ auth()->user()->name }}</h1>
            <a href="{{ route('auth.logout') }}" class="hover:text-blue-700 text-lg">Logout</a>
        @endauth
        @guest
        <div class="space-x-3">
            <a href="{{ route('auth.login') }}" class="hover:text-blue-700 text-2xl">Login</a>
            <a href="" class="hover:text-blue-700 text-2xl">Register</a>
        </div>
        @endguest
    </div>
</x-app-layout>