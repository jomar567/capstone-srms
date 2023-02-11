@component('mail::message')

  Result for {{$mailData['courseName']}} - {{$mailData['courseYear']}} Section {{$mailData['section']}} are now posted.
  Check your email or login to your account to view your respective result.

  @component('mail::button', ['url' => 'www.google.com'])
    Click here
  @endcomponent

@endcomponent

