@component('mail::message')
# Introduction
<h1>{{$msg->nom}}</h1>
<h2>{{$msg->email}}</h2>
@component('mail::panel')
{{$msg->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
