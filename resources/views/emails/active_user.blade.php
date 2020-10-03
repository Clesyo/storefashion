@component('mail::message')
Olá Sr(a). {{ $datas['name'] }}

Quero agradecer por fazer parte do Store Fashion.

Para dar continuidade no processo de cadastro por favor ative seu usuário clicando no botão abaixo.
@component('mail::button', ['url' => 'active-user/'.$datas['token']])
Ativar agora
@endcomponent

Obrigado!!!<br>
@endcomponent
