<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Polje :attribute mora biti prihvaćeno.',
'accepted_if' => 'Polje :attribute mora biti prihvaćeno kada je :other :value.',
'active_url' => 'Polje :attribute mora biti validan URL.',
'after' => 'Polje :attribute mora biti datum poslije :date.',
'after_or_equal' => 'Polje :attribute mora biti datum poslije ili jednak :date.',
'alpha' => 'Polje :attribute može sadržavati samo slova.',
'alpha_dash' => 'Polje :attribute može sadržavati samo slova, brojeve, crtice i donje crtice.',
'alpha_num' => 'Polje :attribute može sadržavati samo slova i brojeve.',
'array' => 'Polje :attribute mora biti niz.',
'ascii' => 'Polje :attribute može sadržavati samo jednobajtna alfanumerička slova i simbole.',
'before' => 'Polje :attribute mora biti datum prije :date.',
'before_or_equal' => 'Polje :attribute mora biti datum prije ili jednak :date.',
'between' => [
    'array' => 'Polje :attribute mora imati između :min i :max stavki.',
    'file' => 'Polje :attribute mora biti između :min i :max kilobajta.',
    'numeric' => 'Polje :attribute mora biti između :min i :max.',
    'string' => 'Polje :attribute mora biti između :min i :max znakova.',
],
'boolean' => 'Polje :attribute mora biti istinito ili lažno.',
'can' => 'Polje :attribute sadrži neovlaštenu vrijednost.',
'confirmed' => 'Potvrdini i glavni password se ne poklapaju. Pokušajte ponovo.',
'current_password' => 'Lozinka je pogrešna.',
'date' => 'Polje :attribute mora biti validan datum.',
'date_equals' => 'Polje :attribute mora biti datum jednak :date.',
'date_format' => 'Polje :attribute se ne podudara sa formatom :format.',
'decimal' => 'Polje :attribute mora imati :decimal decimalna mjesta.',
'declined' => 'Polje :attribute mora biti odbijeno.',
'declined_if' => 'Polje :attribute mora biti odbijeno kada je :other :value.',
'different' => 'Polje :attribute i :other moraju biti različiti.',
'digits' => 'Polje :attribute mora biti :digits cifara.',
'digits_between' => 'Polje :attribute mora biti između :min i :max cifara.',
'dimensions' => 'Polje :attribute ima nevažeće dimenzije slike.',
'distinct' => 'Polje :attribute ima duplu vrijednost.',
'doesnt_end_with' => 'Polje :attribute ne smije završavati s jednim od sljedećih: :values.',
'doesnt_start_with' => 'Polje :attribute ne smije počinjati s jednim od sljedećih: :values.',
'email' => 'Polje :attribute mora biti validna email adresa.',
'ends_with' => 'Polje :attribute mora završiti s jednim od sljedećih: :values.',
'enum' => 'Odabrani :attribute je nevažeći.',
'exists' => 'Odabrani :attribute je nevažeći.',
'file' => 'Polje :attribute mora biti datoteka.',
'filled' => 'Polje :attribute mora imati vrijednost.',
'gt' => [
    'array' => 'Polje :attribute mora imati više od :value stavki.',
    'file' => 'Polje :attribute mora biti veće od :value kilobajta.',
    'numeric' => 'Polje :attribute mora biti veće od :value.',
    'string' => 'Polje :attribute mora biti duže od :value znakova.',
],
'gte' => [
    'array' => 'Polje :attribute mora imati :value stavki ili više.',
    'file' => 'Polje :attribute mora biti veće ili jednako :value kilobajta.',
    'numeric' => 'Polje :attribute mora biti veće ili jednako :value.',
    'string' => 'Polje :attribute mora biti veće ili jednako :value znakova.',
],
'image' => 'Polje :attribute mora biti slika.',
'in' => 'Odabrani :attribute je nevažeći.',
'in_array' => 'Polje :attribute mora postojati u :other.',
'integer' => 'Polje :attribute mora biti cijeli broj.',
'ip' => 'Polje :attribute mora biti validna IP adresa.',
'ipv4' => 'Polje :attribute mora biti validna IPv4 adresa.',
'ipv6' => 'Polje :attribute mora biti validna IPv6 adresa.',
'json' => 'Polje :attribute mora biti validan JSON string.',
'lowercase' => 'Polje :attribute mora biti malim slovima.',
'lt' => [
    'array' => 'Polje :attribute mora imati manje od :value stavki.',
    'file' => 'Polje :attribute mora biti manje od :value kilobajta.',
    'numeric' => 'Polje :attribute mora biti manje od :value.',
    'string' => 'Polje :attribute mora biti kraće od :value znakova.',
],
'lte' => [
    'array' => 'Polje :attribute ne smije imati više od :value stavki.',
    'file' => 'Polje :attribute mora biti manje ili jednako :value kilobajta.',
    'numeric' => 'Polje :attribute mora biti manje ili jednako :value.',
    'string' => 'Polje :attribute mora biti manje ili jednako :value znakova.',
],
'mac_address' => 'Polje :attribute mora biti validna MAC adresa.',
'max' => [
    'array' => 'Polje :attribute ne smije imati više od :max stavki.',
    'file' => 'Polje :attribute ne smije biti veće od :max kilobajta.',
    'numeric' => 'Polje :attribute ne smije biti veće od :max.',
    'string' => 'Polje :attribute ne smije biti duže od :max znakova.',
],
'max_digits' => 'Polje :attribute ne smije imati više od :max cifara.',
'mimes' => 'Polje :attribute mora biti datoteka tipa: :values.',
'mimetypes' => 'Polje :attribute mora biti datoteka tipa: :values.',
'min' => [
    'array' => 'Polje :attribute mora imati najmanje :min stavki.',
    'file' => 'Polje :attribute mora imati najmanje :min kilobajta.',
    'numeric' => 'Polje :attribute mora imati najmanje :min.',
    'string' => 'Polje :attribute mora imati najmanje :min znakova.',
],
'min_digits' => 'Polje :attribute mora imati najmanje :min cifara.',
'missing' => 'Polje :attribute mora biti nedostajuće.',
'missing_if' => 'Polje :attribute mora biti nedostajuće kada je :other :value.',
'missing_unless' => 'Polje :attribute mora biti nedostajuće osim ako je :other u :values.',
'missing_with' => 'Polje :attribute mora biti nedostajuće kada je :values prisutan.',
'missing_with_all' => 'Polje :attribute mora biti nedostajuće kada su :values prisutni.',
'multiple_of' => 'Polje :attribute mora biti višekratnik :value.',
'not_in' => 'Odabrani :attribute je nevažeći.',
'not_regex' => 'Format polja :attribute nije validan.',
'numeric' => 'Polje :attribute mora biti broj.',
'password' => [
    'letters' => 'Polje :attribute mora sadržavati barem jedno slovo.',
    'mixed' => 'Polje :attribute mora sadržavati barem jedno veliko i jedno malo slovo.',
    'numbers' => 'Polje :attribute mora sadržavati barem jedan broj.',
    'symbols' => 'Polje :attribute mora sadržavati barem jedan simbol.',
    'uncompromised' => 'Dato :attribute se pojavilo u curenju podataka. Molimo odaberite drugo :attribute.',
],
'present' => 'Polje :attribute mora biti prisutno.',
'prohibited' => 'Polje :attribute je zabranjeno.',
'prohibited_if' => 'Polje :attribute je zabranjeno kada je :other :value.',
'prohibited_unless' => 'Polje :attribute je zabranjeno osim ako je :other u :values.',
'prohibits' => 'Polje :attribute zabranjuje :other da bude prisutan.',
'regex' => 'Format polja :attribute nije validan.',
'required' => 'Polje :attribute je obavezno.',
'required_array_keys' => 'Polje :attribute mora sadržavati unose za: :values.',
'required_if' => 'Polje :attribute je obavezno kada je :other :value.',
'required_if_accepted' => 'Polje :attribute je obavezno kada je :other prihvaćeno.',
'required_unless' => 'Polje :attribute je obavezno osim ako je :other u :values.',
'required_with' => 'Polje :attribute je obavezno kada su :values prisutni.',
'required_with_all' => 'Polje :attribute je obavezno kada su :values prisutni.',
'required_without' => 'Polje :attribute je obavezno kada :values nije prisutan.',
'required_without_all' => 'Polje :attribute je obavezno kada nijedan od :values nije prisutan.',
'same' => 'Polje :attribute mora se podudarati s :other.',
'size' => [
    'array' => 'Polje :attribute mora sadržavati :size stavki.',
    'file' => 'Polje :attribute mora biti :size kilobajta.',
    'numeric' => 'Polje :attribute mora biti :size.',
    'string' => 'Polje :attribute mora biti :size znakova.',
],
'starts_with' => 'Polje :attribute mora počinjati s jednim od sljedećih: :values.',
'string' => 'Polje :attribute mora biti tekst.',
'timezone' => 'Polje :attribute mora biti validna vremenska zona.',
'unique' => 'Izabrani :attribute već postoji u bazi. Molimo, probajte drugi',
'uploaded' => 'Polje :attribute nije uspjelo učitavanje.',
'uppercase' => 'Polje :attribute mora biti velikim slovima.',
'url' => 'Polje :attribute mora biti validan URL.',
'ulid' => 'Polje :attribute mora biti validan ULID.',
'uuid' => 'Polje :attribute mora biti validan UUID.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
