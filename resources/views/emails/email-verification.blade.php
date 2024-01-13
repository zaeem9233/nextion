<x-mail::message>
# Email Verification

<p>Dear {{ $name }}</p>

<p>This email has been sent to verify email address. This email verification link is valid for 24 hours only. If it is expired, you can resend this link after login.</p>

<x-mail::button :url="$url">
Verify Email
</x-mail::button>

Thanks,<br>
Nextion Team
</x-mail::message>