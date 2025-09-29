@component('mail::message')
# Hello {{ $student->name }},

Thank you for registering for the class **{{ $student->class }}**.

We have received your details:

- **Email:** {{ $student->email }}
- **Phone:** {{ $student->mobile }}
- **Message:** {{ $student->message ?? 'N/A' }}

We will review your application and get back to you soon.

@component('mail::button', ['url' => url('/')])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
