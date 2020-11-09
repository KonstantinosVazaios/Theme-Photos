@component('mail::message')
# Homu Sushi Bar - Φόρμα Επικοινωνίας

Καινούργιο μήνυμα από την φόρμα επικοινωνίας!


<B style="font-size: 17px;">Όνομα:</B> {{$name}}<br>
<B style="font-size: 17px">Τηλέφωνο:</B> {{$telephone}}<br>
<B style="font-size: 17px">Email:</B> {{$email}}<br>
<B style="font-size: 17px">Μήνυμα:</B> {{$message}}<br>
@component('mail::button', ['url' => 'www.homusushibar.gr/login'])
Άνοιγμα Admin Homu
@endcomponent

<br>
Homu Sushi Bar
@endcomponent
