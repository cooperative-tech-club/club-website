@component('mail::message')
### Hello {{ $user->name }}!

Welcome to {{ config('app.name') }}. You have successfuly registered as a member of {{ config('app.nick') }} with {{ $user->email }} as your email address.

#### Next Step
* Verify Your Email Address through the verification email,
* Complete your profile,
* Connect & Learn with us.

Regrads,<br>
{{ config('app.nick') }} team.

@component('mail::subcopy')
  Connect with us<br>
  <a href="https://github.com/aekiti"><img src="https://aekiti.com/assets/images/icons/social/github.png" alt="GitHub"></a> <a href="https://twitter.com/AeternityEkiti"><img src="https://aekiti.com/assets/images/icons/social/twitter.png" alt="Twitter"></a> <a href="https://www.youtube.com/channel/UCISZ6H0Zb-ndRLSgcR1sH_g"><img src="https://aekiti.com/assets/images/icons/social/youtube.png" alt="YouTube"></a> <a href="https://telegram.me/aekiti"><img src="https://aekiti.com/assets/images/icons/social/telegram.png" alt="Telegram"></a>
@endcomponent
@endcomponent
