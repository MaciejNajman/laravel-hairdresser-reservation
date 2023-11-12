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

    'accepted' => 'Pole :attribute musi zostać zaakceptowane.',
    'accepted_if' => 'Pole :attribute musi zostać zaakceptowane kiedy :other jest :value.',
    'active_url' => 'Pole :attribute nie jest prawidłowym adresem URL.',
    'after' => 'Pole :attribute musi być datą następującą po :date.',
    'after_or_equal' => 'Pole :attribute musi być datą późniejszą lub równą :date.',
    'alpha' => 'Pole :attribute musi zawierać tylko litery.',
    'alpha_dash' => 'Pole :attribute musi zawierać wyłącznie litery, cyfry, myślniki i podkreślenia.',
    'alpha_num' => 'Pole :attribute musi zawierać wyłącznie litery i cyfry.',
    'array' => 'Pole :attribute musi być tablicą.',
    'before' => 'Pole :attribute musi być datą wcześniejszą niż :date.',
    'before_or_equal' => 'Pole :attribute musi być datą wcześniejszą lub równą :date.',
    'between' => [
        'array' => 'Pole :attribute musi zawierać elementy od :min do :max.',
        'file' => 'Pole :attribute musi mieścić się w przedziale od :min do :max kilobajtów.',
        'numeric' => 'Pole :attribute musi mieścić się w przedziale od :min do :max.',
        'string' => 'Pole :attribute musi mieścić się w przedziale od :min do :max znaków.',
    ],
    'boolean' => 'Pole :attribute pole musi mieć wartość true lub false.',
    'confirmed' => 'Potwierdzenie pola :attribute nie pasuje.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date' => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals' => 'Pole :attribute musi być datą równą :date.',
    'date_format' => 'Pole :attribute nie pasuje do formatu :format.',
    'declined' => 'Pole :attribute musi zostać odrzucone.',
    'declined_if' => 'Pole :attribute musi zostać odrzucone kiedy :other jest :value.',
    'different' => 'Pola :attribute i :other muszą być różne',
    'digits' => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between' => 'Pole :attribute musi mieścić się w przedziale od :min do :max cyfr.',
    'dimensions' => 'Pole :attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma zduplikowaną wartość.',
    'email' => 'Pole :attribute musi być prawidłowym adresem e-mail.',
    'ends_with' => 'Pole :attribute musi kończyć się na: :values.',
    'enum' => 'Wybrane pole :attribute jest nieprawidłowe.',
    'exists' => 'Wybrane pole :attribute jest nieprawidłowe.',
    'file' => 'Pole :attribute musi być plikiem.',
    'filled' => 'Pole :attribute musi posiadać jakąkolwiek wartość.',
    'gt' => [
        'array' => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file' => 'Pole :attribute musi mieć więcej niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string' => 'Pole :attribute musi być większe niż :value znaków.',
    ],
    'gte' => [
        'array' => 'Pole :attribute musi zawierać :value lub więcej elementów.',
        'file' => 'Pole :attribute musi być większe lub równe :value kilobajtom.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string' => 'Pole :attribute musi być większe lub równe :value znakom.',
    ],
    'image' => 'Pole :attribute musi być obrazem.',
    'in' => 'Wybrane pole :attribute jest nieprawidłowe.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'ip' => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4' => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6' => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json' => 'Pole :attribute musi być prawidłowym ciągiem JSON.',
    'lt' => [
        'array' => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file' => 'Pole :attribute musi mieć mniej niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string' => 'Pole :attribute musi być mniejsze niż :value znaków.',
    ],
    'lte' => [
        'array' => 'Pole :attribute must not have more than :value items.',
        'file' => 'Pole :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'Pole :attribute must be less than or equal to :value.',
        'string' => 'Pole :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'Pole :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'Pole :attribute must not have more than :max items.',
        'file' => 'Pole :attribute must not be greater than :max kilobytes.',
        'numeric' => 'Pole :attribute must not be greater than :max.',
        'string' => 'Pole :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'Pole :attribute must be a file of type: :values.',
    'mimetypes' => 'Pole :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'Pole :attribute must have at least :min items.',
        'file' => 'Pole :attribute must be at least :min kilobytes.',
        'numeric' => 'Pole :attribute must be at least :min.',
        'string' => 'Pole :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'Pole :attribute must be a multiple of :value.',
    'not_in' => 'Pole selected :attribute is invalid.',
    'not_regex' => 'Pole :attribute format is invalid.',
    'numeric' => 'Pole :attribute must be a number.',
    'password' => 'Pole password is incorrect.',
    'present' => 'Pole :attribute field must be present.',
    'prohibited' => 'Pole :attribute field is prohibited.',
    'prohibited_if' => 'Pole :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'Pole :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'Pole :attribute field prohibits :other from being present.',
    'regex' => 'Pole :attribute format is invalid.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_array_keys' => 'Pole :attribute field must contain entries for: :values.',
    'required_if' => 'Pole :attribute field is required when :other is :value.',
    'required_unless' => 'Pole :attribute field is required unless :other is in :values.',
    'required_with' => 'Pole :attribute field is required when :values is present.',
    'required_with_all' => 'Pole :attribute field is required when :values are present.',
    'required_without' => 'Pole :attribute field is required when :values is not present.',
    'required_without_all' => 'Pole :attribute field is required when none of :values are present.',
    'same' => 'Pole :attribute and :other must match.',
    'size' => [
        'array' => 'Pole :attribute must contain :size items.',
        'file' => 'Pole :attribute must be :size kilobytes.',
        'numeric' => 'Pole :attribute must be :size.',
        'string' => 'Pole :attribute must be :size characters.',
    ],
    'starts_with' => 'Pole :attribute must start with one of the following: :values.',
    'string' => 'Pole :attribute must be a string.',
    'timezone' => 'Pole :attribute must be a valid timezone.',
    'unique' => 'Pole :attribute has already been taken.',
    'uploaded' => 'Pole :attribute failed to upload.',
    'url' => 'Pole :attribute must be a valid URL.',
    'uuid' => 'Pole :attribute must be a valid UUID.',

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
