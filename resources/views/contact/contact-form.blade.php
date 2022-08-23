@component('mail::message')
<h1>Contact Mail:{{$contact_from_data['email']}}</h1>
<p>name:{{$contact_from_data['name']}}</p>
<p>phone:{{$contact_from_data['phone']}}</p>
<p>massage:{{$contact_from_data['message']}}</p>
@endcomponent
