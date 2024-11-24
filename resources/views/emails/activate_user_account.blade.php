@component('mail:message')
 # Activate your account
 @component('mail:panel')
  Hello {{$user->name}},<br>
  Thank you for creating an account with us. Please click on the link below to activate your account: <br>
  @component('mail:button',['url'=>$url])
    Activate Account
    
  @endcomponent
@endcomponent
@endcomponent
