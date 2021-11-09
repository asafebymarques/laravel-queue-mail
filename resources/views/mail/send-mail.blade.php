@component('mail::message')
<h1>Atenção!!<h1>

<p>Olá {{$user->name}}, Asafe Marques aqui...</p>

@component('mail::button', ['url' => 'https://www.asafebymarques@icloud.com'])
Acessar o site
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
