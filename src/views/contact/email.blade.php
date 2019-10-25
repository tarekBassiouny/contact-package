@component('mail::message')
# Introduction

This is a new query from:
=========================

Name: {{ $name }}
<br>
Email: {{ $email }}
<br>
Message: {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
