@component('mail::message')
   <p>Hello{{$user->name}}</p> 


@component('mail::button',['url'=>url('verify/'.$user->remember_token)])
Verify
    
@endcomponent
<p>IN case you have issues please contact out contact us.</p>
Thanks ,<br/>
{{config('app.name')}}
@endcomponent
