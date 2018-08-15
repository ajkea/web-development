<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | De following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'De :attribute moet aanvaard worden.',
    'active_url'           => 'De :attribute is geen bestaande URL.',
    'after'                => 'De :attribute moet een datum zijn na :date.',
    'after_or_equal'       => 'De :attribute moet een datum zijn later of gelijk aan :date.',
    'alpha'                => 'De :attribute mag enkel bestaan uit letters.',
    'alpha_dash'           => "De :attribute mag enkel bestaan uit letters, cijfers en komma's.",
    'alpha_num'            => 'De :attribute mag enkel bestaan uit letters en cijfers.',
    'array'                => 'De :attribute moet een array zijn.',
    'before'               => 'De :attribute moet een datum zijn voor :date.',
    'before_or_equal'      => 'De :attribute moet een datum zijn voor of gelijk aan :date.',
    'between'              => [
        'numeric' => 'De :attribute moet een getal zijn tussen :min en :max.',
        'file'    => 'De :attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => 'De :attribute moet tussen :min en :max karakters zijn.',
        'array'   => 'De :attribute moet tussen :min en :max items zijn.',
    ],
    'boolean'              => 'Het :attribute veld moet true of false zijn.',
    'confirmed'            => 'De :attribute bevesting komen niet overeen.',
    'date'                 => 'De :attribute is geen geldige datum.',
    'date_format'          => 'De :attribute komt niet overeen met formaat: :format.',
    'different'            => 'De :attribute en :other moeten verschillend zijn.',
    'digits'               => 'De :attribute moet :digits cijfers zijn.',
    'digits_between'       => 'De :attribute moet tussen :min en :max zijn.',
    'dimensions'           => 'De :attribute heeft ongeldige afbeelding dimensies.',
    'distinct'             => 'De :attribute veld heeft een dubbele waarde.',
    'email'                => 'De :attribute moet een geldige emailadres zijn.',
    'exists'               => 'Het geselecteerde :attribute is niet geldig.',
    'file'                 => 'De :attribute moet een bestand zijn.',
    'filled'               => 'De :attribute veld moet een waarde hebben.',
    'gt'                   => [
        'numeric' => 'De :attribute moet groter zijn dan :value.',
        'file'    => 'De :attribute moet groter zijn dan :value kilobytes.',
        'string'  => 'De :attribute moet groter zijn dan :value karakters.',
        'array'   => 'De :attribute moet meer dan :value items hebben.',
    ],
    'gte'                  => [
        'numeric' => 'De :attribute moet groter zijn dan of gelijk aan :value.',
        'file'    => 'De :attribute moet groter zijn dan of gelijk aan :value kilobytes.',
        'string'  => 'De :attribute moet groter zijn dan of gelijk aan :value karakters.',
        'array'   => 'De :attribute moet :value items of meer tellen.',
    ],
    'image'                => 'De :attribute moet een afbeelding zijn.',
    'in'                   => 'Het geslecteerde :attribute is ongeldig.',
    'in_array'             => 'De :attribute field komt niet voor in :other.',
    'integer'              => 'De :attribute moet een cijfer zijn.',
    'ip'                   => 'De :attribute moet een geldig IP address zijn.',
    'ipv4'                 => 'De :attribute moet een geldig IPv4 address zijn.',
    'ipv6'                 => 'De :attribute moet een geldig IPv6 address zijn.',
    'json'                 => 'De :attribute moet een geldig JSON string zijn.',
    'lt'                   => [
        'numeric' => 'De :attribute moet minder zijn dan :value.',
        'file'    => 'De :attribute moet minder zijn dan :value kilobytes.',
        'string'  => 'De :attribute moet minder zijn dan :value karakters.',
        'array'   => 'De :attribute moet minder dan :value items hebben.',
    ],
    'lte'                  => [
        'numeric' => 'De :attribute moet minder zijn dan of gelijk aan :value.',
        'file'    => 'De :attribute moet minder zijn dan of gelijk aan :value kilobytes.',
        'string'  => 'De :attribute moet minder zijn dan of gelijk aan :value karakters.',
        'array'   => 'De :attribute mag niet meer dan :value items hebben.',
    ],
    'max'                  => [
        'numeric' => 'De :attribute mag niet groter zijn dan :max.',
        'file'    => 'De :attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => 'De :attribute mag niet groter zijn dan :max karakters.',
        'array'   => 'De :attribute mag niet meer zijn dan :max items.',
    ],
    'mimes'                => 'De :attribute moet een bestand zijn met type: :values.',
    'mimetypes'            => 'De :attribute moet een bestand zijn met type: :values.',
    'min'                  => [
        'numeric' => 'De :attribute moet minstens :min zijn.',
        'file'    => 'De :attribute moet minstens :min kilobytes zijn.',
        'string'  => 'De :attribute moet minstens :min karakters zijn.',
        'array'   => 'De :attribute moet minsten bestaan uit :min items.',
    ],
    'not_in'               => 'De geslecteerde :attribute is ongeldig.',
    'not_regex'            => 'De :attribute format is ongeldig.',
    'numeric'              => 'De :attribute moet een cijfer zijn.',
    'present'              => 'Het :attribute veld moet bestaan.',
    'regex'                => 'De :attribute formaat is ongeldig.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute veld is verplicht wanneer :other gelijk is aan :value.',
    'required_unless'      => 'Het :attribute veld is verplicht tenzij :other in de :values zit.',
    'required_with'        => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all'    => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without'     => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen enkele van de :values aanwezig zijn.',
    'same'                 => 'De :attribute en :other moet overeenkomen.',
    'size'                 => [
        'numeric' => 'De :attribute moet een grootte hebben van :size.',
        'file'    => 'De :attribute moet een grootte hebben van :size kilobytes.',
        'string'  => 'De :attribute moet :size karakters tellen.',
        'array'   => 'De :attribute moet bestaan uit :size items.',
    ],
    'string'               => 'Het veld :attribute moet een string zijn.',
    'timezone'             => 'De :attribute is geen bestaande tijdzone.',
    'unique'               => 'Deze :attribute is al bezet.',
    'uploaded'             => 'Uploaden van :attribute is mislukt.',
    'url'                  => 'De :attribute format is ongeldig.',

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
    | De following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
