@component('mail::message')

    @if($key == \App\Http\Controllers\EmailController::FEEDBACK_KEY)
        <h3>In contact page, client leave a feedback</h3>

@component('mail::panel')

<p>Client name : {{ $user->name }}</p>
<p>Client email : {{ $user->email }}</p>
<p>feedback : {{ $user->message }}</p>

@endcomponent


    @elseif($key == \App\Http\Controllers\EmailController::KP_KEY)

        <h3>Client want commercial proposale , do something</h3>

@component('mail::panel')

<p>Client name : {{ $user->name }}</p>
<p>Client email : {{ $user->email }}</p>

@endcomponent

    @elseif($key == \App\Http\Controllers\EmailController::CALLBACK_KEY)

        <h3>Client want callback, call him</h3>

@component('mail::panel')

<p>Client name : {{ $user->name }}</p>
<p>Client phone : {{ $user->phone }}</p>

@endcomponent

    @else

        <h3>Something went wrong, go to website and check</h3>

    @endif

@component('mail::button', ['url' => 'naeasy/admin'])
    Go and do something
@endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
