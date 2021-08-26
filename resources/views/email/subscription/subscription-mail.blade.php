@component('mail::message')
# Hello {{ $email }},
<br>
{{ $post->title }}.

<br>
{{ $post->description  }}


Thanks you,<br>
{{ config('app.name') }}
@endcomponent
