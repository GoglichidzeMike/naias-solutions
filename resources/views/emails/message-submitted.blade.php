@component('mail::message')
# Naias Automated Email

## A new Message has been submitted.

<h2> {{$single['name']}} </h2> 

**Name:**   {{ $single['name'] }}  <br />
**Email:**   {{ $single['email'] }}  <br />
**Company:**    {{ $single['company'] }}  <br />
**Website:**    {{ $single['website'] }}  <br /><br />
**Message:**    {{ $single['message'] }}  <br /><br />
**Date:**    {{ $single['created_at']->toDayDateTimeString() }}  <br />





[See this entry in the dashboard](http://localhost:8000/dashboard/leads)



Thanks,<br>
{{ config('app.name') }}
@endcomponent
