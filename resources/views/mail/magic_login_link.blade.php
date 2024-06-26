<x-mail::message>
Your magic login link.

<x-mail::button :url="$url">
Log In
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
