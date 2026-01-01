<?php

declare(strict_types=1);

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

    'accepted'        => 'Fusha :attribute duhet të pranohet.',
    'accepted_if'     => 'Fusha :attribute duhet të pranohet kur :other ka vlerën :value.',
    'active_url'      => 'Fusha :attribute duhet të jetë një URL e vlefshme.',
    'after'           => 'Fusha :attribute duhet të jetë një datë pas :date.',
    'after_or_equal'  => 'Fusha :attribute duhet të jetë një datë pas ose e barabartë me :date.',
    'alpha'           => 'Fusha :attribute mund të përmbajë vetëm shkronja.',
    'alpha_dash'      => 'Fusha :attribute mund të përmbajë vetëm shkronja, numra, viza dhe nënviza.',
    'alpha_num'       => 'Fusha :attribute mund të përmbajë vetëm shkronja dhe numra.',
    'array'           => 'Fusha :attribute duhet të jetë një varg.',
    'ascii'           => 'Fusha :attribute mund të përmbajë vetëm karaktere alfanumerike njëbajtëshe dhe simbole.',
    'before'          => 'Fusha :attribute duhet të jetë një datë para :date.',
    'before_or_equal' => 'Fusha :attribute duhet të jetë një datë para ose e barabartë me :date.',
    'between'         => [
        'array'   => 'Fusha :attribute duhet të ketë nga :min deri në :max elemente.',
        'file'    => 'Fusha :attribute duhet të jetë nga :min deri në :max kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë nga :min deri në :max.',
        'string'  => 'Fusha :attribute duhet të ketë nga :min deri në :max karaktere.',
    ],
    'boolean'           => 'Fusha :attribute duhet të jetë e vërtetë ose e gabuar.',
    'can'               => 'Fusha :attribute përmban një vlerë të paautorizuar.',
    'confirmed'         => 'Konfirmimi i fushës :attribute nuk përputhet.',
    'current_password'  => 'Fjalëkalimi është i gabuar.',
    'date'              => 'Fusha :attribute duhet të jetë një datë e vlefshme.',
    'date_equals'       => 'Fusha :attribute duhet të jetë një datë e barabartë me :date.',
    'date_format'       => 'Fusha :attribute duhet të përputhet me formatin :format.',
    'decimal'           => 'Fusha :attribute duhet të ketë :decimal vende dhjetore.',
    'declined'          => 'Fusha :attribute duhet të refuzohet.',
    'declined_if'       => 'Fusha :attribute duhet të refuzohet kur :other ka vlerën :value.',
    'different'         => 'Fushat :attribute dhe :other duhet të jenë të ndryshme.',
    'digits'            => 'Fusha :attribute duhet të ketë :digits shifra.',
    'digits_between'    => 'Fusha :attribute duhet të ketë nga :min deri në :max shifra.',
    'dimensions'        => 'Fusha :attribute ka përmasat e gabuara të imazhit.',
    'distinct'          => 'Fusha :attribute ka një vlerë të dublikuar.',
    'doesnt_end_with'   => 'Fusha :attribute nuk duhet të mbarojë me një nga këto: :values.',
    'doesnt_start_with' => 'Fusha :attribute nuk duhet të fillojë me një nga këto: :values.',
    'email'             => 'Fusha :attribute duhet të jetë një adresë e-mail e vlefshme.',
    'ends_with'         => 'Fusha :attribute duhet të mbarojë me një nga këto: :values.',
    'enum'              => ':attribute i zgjedhur është i pavlefshëm.',
    'exists'            => ':attribute i zgjedhur është i pavlefshëm.',
    'file'              => 'Fusha :attribute duhet të jetë një skedar.',
    'filled'            => 'Fusha :attribute duhet të ketë një vlerë.',
    'gt'                => [
        'array'   => 'Fusha :attribute duhet të ketë më shumë se :value elemente.',
        'file'    => 'Fusha :attribute duhet të jetë më e madhe se :value kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë më e madhe se :value.',
        'string'  => 'Fusha :attribute duhet të jetë më e gjatë se :value karaktere.',
    ],
    'gte' => [
        'array'   => 'Fusha :attribute duhet të ketë :value elemente ose më shumë.',
        'file'    => 'Fusha :attribute duhet të jetë më e madhe ose e barabartë me :value kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë më e madhe ose e barabartë me :value.',
        'string'  => 'Fusha :attribute duhet të jetë më e gjatë ose e barabartë me :value karaktere.',
    ],
    'image'     => 'Fusha :attribute duhet të jetë një imazh.',
    'in'        => ':attribute i zgjedhur është i pavlefshëm.',
    'in_array'  => 'Fusha :attribute duhet të ekzistojë në :other.',
    'integer'   => 'Fusha :attribute duhet të jetë një numër i plotë.',
    'ip'        => 'Fusha :attribute duhet të jetë një adresë IP e vlefshme.',
    'ipv4'      => 'Fusha :attribute duhet të jetë një adresë IPv4 e vlefshme.',
    'ipv6'      => 'Fusha :attribute duhet të jetë një adresë IPv6 e vlefshme.',
    'json'      => 'Fusha :attribute duhet të jetë një varg JSON i vlefshëm.',
    'lowercase' => 'Fusha :attribute duhet të jetë me shkronja të vogla.',
    'lt'        => [
        'array'   => 'Fusha :attribute duhet të ketë më pak se :value elemente.',
        'file'    => 'Fusha :attribute duhet të jetë më e vogël se :value kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë më e vogël se :value.',
        'string'  => 'Fusha :attribute duhet të jetë më e shkurtër se :value karaktere.',
    ],
    'lte' => [
        'array'   => 'Fusha :attribute nuk duhet të ketë më shumë se :value elemente.',
        'file'    => 'Fusha :attribute duhet të jetë më e vogël ose e barabartë me :value kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë më e vogël ose e barabartë me :value.',
        'string'  => 'Fusha :attribute duhet të jetë më e shkurtër ose e barabartë me :value karaktere.',
    ],
    'mac_address' => 'Fusha :attribute duhet të jetë një adresë MAC e vlefshme.',
    'max'         => [
        'array'   => 'Fusha :attribute nuk duhet të ketë më shumë se :max elemente.',
        'file'    => 'Fusha :attribute nuk duhet të jetë më e madhe se :max kilobajt.',
        'numeric' => 'Fusha :attribute nuk duhet të jetë më e madhe se :max.',
        'string'  => 'Fusha :attribute nuk duhet të jetë më e gjatë se :max karaktere.',
    ],
    'max_digits' => 'Fusha :attribute nuk duhet të ketë më shumë se :max shifra.',
    'mimes'      => 'Fusha :attribute duhet të jetë një skedar i tipit: :values.',
    'mimetypes'  => 'Fusha :attribute duhet të jetë një skedar i tipit: :values.',
    'min'        => [
        'array'   => 'Fusha :attribute duhet të ketë të paktën :min elemente.',
        'file'    => 'Fusha :attribute duhet të jetë të paktën :min kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë të paktën :min.',
        'string'  => 'Fusha :attribute duhet të ketë të paktën :min karaktere.',
    ],
    'min_digits'       => 'Fusha :attribute duhet të ketë të paktën :min shifra.',
    'missing'          => 'Fusha :attribute duhet të mungojë.',
    'missing_if'       => 'Fusha :attribute duhet të mungojë kur :other ka vlerën :value.',
    'missing_unless'   => 'Fusha :attribute duhet të mungojë përveç nëse :other ka vlerën :value.',
    'missing_with'     => 'Fusha :attribute duhet të mungojë kur :values është e pranishme.',
    'missing_with_all' => 'Fusha :attribute duhet të mungojë kur :values janë të pranishme.',
    'multiple_of'      => 'Fusha :attribute duhet të jetë shumëfish i :value.',
    'not_in'           => ':attribute i zgjedhur është i pavlefshëm.',
    'not_regex'        => 'Formati i fushës :attribute është i pavlefshëm.',
    'numeric'          => 'Fusha :attribute duhet të jetë një numër.',
    'password'         => [
        'letters'       => 'Fusha :attribute duhet të përmbajë të paktën një shkronjë.',
        'mixed'         => 'Fusha :attribute duhet të përmbajë të paktën një shkronjë të madhe dhe një të vogël.',
        'numbers'       => 'Fusha :attribute duhet të përmbajë të paktën një numër.',
        'symbols'       => 'Fusha :attribute duhet të përmbajë të paktën një simbol.',
        'uncompromised' => ':attribute i dhënë është shfaqur në një rrjedhje të dhënash. Ju lutemi zgjidhni një :attribute tjetër.',
    ],
    'present'              => 'Fusha :attribute duhet të jetë e pranishme.',
    'prohibited'           => 'Fusha :attribute është e ndaluar.',
    'prohibited_if'        => 'Fusha :attribute është e ndaluar kur :other ka vlerën :value.',
    'prohibited_unless'    => 'Fusha :attribute është e ndaluar përveç nëse :other është në :values.',
    'prohibits'            => 'Fusha :attribute ndalon praninë e :other.',
    'regex'                => 'Formati i fushës :attribute është i pavlefshëm.',
    'required'             => 'Fusha :attribute është e detyrueshme.',
    'required_array_keys'  => 'Fusha :attribute duhet të përmbajë hyrje për: :values.',
    'required_if'          => 'Fusha :attribute është e detyrueshme kur :other ka vlerën :value.',
    'required_if_accepted' => 'Fusha :attribute është e detyrueshme kur :other pranohet.',
    'required_unless'      => 'Fusha :attribute është e detyrueshme përveç nëse :other është në :values.',
    'required_with'        => 'Fusha :attribute është e detyrueshme kur :values është e pranishme.',
    'required_with_all'    => 'Fusha :attribute është e detyrueshme kur :values janë të pranishme.',
    'required_without'     => 'Fusha :attribute është e detyrueshme kur :values nuk është e pranishme.',
    'required_without_all' => 'Fusha :attribute është e detyrueshme kur asnjë nga :values nuk është e pranishme.',
    'same'                 => 'Fusha :attribute duhet të përputhet me :other.',
    'size'                 => [
        'array'   => 'Fusha :attribute duhet të përmbajë :size elemente.',
        'file'    => 'Fusha :attribute duhet të jetë :size kilobajt.',
        'numeric' => 'Fusha :attribute duhet të jetë :size.',
        'string'  => 'Fusha :attribute duhet të ketë :size karaktere.',
    ],
    'starts_with' => 'Fusha :attribute duhet të fillojë me një nga këto: :values.',
    'string'      => 'Fusha :attribute duhet të jetë një varg karakteresh.',
    'timezone'    => 'Fusha :attribute duhet të jetë një zonë kohore e vlefshme.',
    'unique'      => ':attribute tashmë është marrë.',
    'uploaded'    => ':attribute dështoi të ngarkohej.',
    'uppercase'   => 'Fusha :attribute duhet të jetë me shkronja të mëdha.',
    'url'         => 'Fusha :attribute duhet të jetë një URL e vlefshme.',
    'ulid'        => 'Fusha :attribute duhet të jetë një ULID i vlefshëm.',
    'uuid'        => 'Fusha :attribute duhet të jetë një UUID i vlefshëm.',

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

    'surname.required_without'   => 'Kur shtoni një person TË RI, mbiemri është i detyrueshëm.',
    'sex.required_without'       => 'Kur shtoni një person TË RI, gjinia duhet të specifikohet.',
    'person_id.required_without' => 'Kur shtoni një person EKZISTUES, personi duhet të zgjidhet.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
