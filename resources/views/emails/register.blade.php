@component('mail::message')

Thank you for registering!

@component('mail::button', ['url' => $token])
Verify Email
@endcomponent


Regards,<br>
{{ config('app.name') }}

@endcomponent
