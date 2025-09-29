@component('mail::message')

Hello Admin,
A new student has registered on the platform. Here are the details:
- **Name:** {{ $student->name }}
- **Email:** {{ $student->email }}
- **Phone:** {{ $student->mobile ?? 'N/A' }}
- **Message:** {{ $student->message ?? 'N/A' }}
- **Class:** {{ $student->class ?? 'N/A' }}
- **created date:** {{ $student->created_at ?? 'N/A' }}
Please review the details and take appropriate action.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
