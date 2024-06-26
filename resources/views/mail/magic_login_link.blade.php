<x-mail::message>
Your magic login link.

<x-mail::button :url="''">
Log In
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
