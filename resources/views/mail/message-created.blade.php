@component('mail::message')

    Hello, thank you for taking the time to contact us.
    We will be reaching out to you soon.

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
        Back to homepage
    @endcomponent

    Thank you,<br>
    The Trendy Home Collective
@endcomponent
