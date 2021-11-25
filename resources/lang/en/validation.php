<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute must be accepted.',
    'accepted_if' => 'El :attribute must be accepted when :other is :value.',
    'active_url' => 'El :attribute is not a valid URL.',
    'after' => 'El :attribute must be a date after :date.',
    'after_or_equal' => 'El :attribute must be a date after or equal to :date.',
    'alpha' => 'El :attribute must only contain letters.',
    'alpha_dash' => 'El :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'El :attribute must only contain letters and numbers.',
    'array' => 'El :attribute must be an array.',
    'before' => 'El :attribute must be a date before :date.',
    'before_or_equal' => 'El :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'El :attribute must be between :min and :max.',
        'file' => 'El :attribute must be between :min and :max kilobytes.',
        'string' => 'El :attribute must be between :min and :max caracteres.',
        'array' => 'El :attribute must have between :min and :max items.',
    ],
    'boolean' => 'El :attribute field must be true or false.',
    'confirmed' => 'La confirmación del :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El :attribute is not a valid date.',
    'date_equals' => 'El :attribute must be a date equal to :date.',
    'date_format' => 'El :attribute does not match the format :format.',
    'declined' => 'El :attribute must be declined.',
    'declined_if' => 'El :attribute must be declined when :other is :value.',
    'different' => 'El :attribute and :other must be different.',
    'digits' => 'El :attribute must be :digits digits.',
    'digits_between' => 'El :attribute must be between :min and :max digits.',
    'dimensions' => 'El :attribute has invalid image dimensions.',
    'distinct' => 'El :attribute field has a duplicate value.',
    'email' => 'El :attribute must be a valid email address.',
    'ends_with' => 'El :attribute must end with one of the following: :values.',
    'exists' => 'El selected :attribute is invalid.',
    'file' => 'El :attribute must be a file.',
    'filled' => 'El :attribute field must have a value.',
    'gt' => [
        'numeric' => 'El :attribute must be greater than :value.',
        'file' => 'El :attribute must be greater than :value kilobytes.',
        'string' => 'El :attribute must be greater than :value caracteres.',
        'array' => 'El :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute must be greater than or equal to :value.',
        'file' => 'El :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'El :attribute must be greater than or equal to :value caracteres.',
        'array' => 'El :attribute must have :value items or more.',
    ],
    'image' => 'El :attribute must be an image.',
    'in' => 'El selected :attribute is invalid.',
    'in_array' => 'El :attribute field does not exist in :other.',
    'integer' => 'El :attribute must be an integer.',
    'ip' => 'El :attribute must be a valid IP address.',
    'ipv4' => 'El :attribute must be a valid IPv4 address.',
    'ipv6' => 'El :attribute must be a valid IPv6 address.',
    'json' => 'El :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'El :attribute must be less than :value.',
        'file' => 'El :attribute must be less than :value kilobytes.',
        'string' => 'El :attribute must be less than :value caracteres.',
        'array' => 'El :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute must be less than or equal to :value.',
        'file' => 'El :attribute must be less than or equal to :value kilobytes.',
        'string' => 'El :attribute must be less than or equal to :value caracteres.',
        'array' => 'El :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute must not be greater than :max.',
        'file' => 'El :attribute must not be greater than :max kilobytes.',
        'string' => 'El :attribute must not be greater than :max caracteres.',
        'array' => 'El :attribute must not have more than :max items.',
    ],
    'mimes' => 'El :attribute must be a file of type: :values.',
    'mimetypes' => 'El :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser de al menos :min.',
        'file' => 'El :attribute debe ser de al menos :min kilobytes.',
        'string' => 'El :attribute debe ser de al menos :min caracteres.',
        'array' => 'El :attribute must have at least :min items.',
    ],
    'multiple_of' => 'El :attribute must be a multiple of :value.',
    'not_in' => 'El selected :attribute is invalid.',
    'not_regex' => 'El :attribute format is invalid.',
    'numeric' => 'El :attribute must be a number.',
    'password' => 'El password is incorrect.',
    'present' => 'El :attribute field must be present.',
    'regex' => 'El :attribute format is invalid.',
    'required' => 'El :attribute field is required.',
    'required_if' => 'El :attribute field is required when :other is :value.',
    'required_unless' => 'El :attribute field is required unless :other is in :values.',
    'required_with' => 'El :attribute field is required when :values is present.',
    'required_with_all' => 'El :attribute field is required when :values are present.',
    'required_without' => 'El :attribute field is required when :values is not present.',
    'required_without_all' => 'El :attribute field is required when none of :values are present.',
    'prohibited' => 'El :attribute field is prohibited.',
    'prohibited_if' => 'El :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'El :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'El :attribute field prohibits :other from being present.',
    'same' => 'El :attribute and :other must match.',
    'size' => [
        'numeric' => 'El :attribute must be :size.',
        'file' => 'El :attribute must be :size kilobytes.',
        'string' => 'El :attribute must be :size caracteres.',
        'array' => 'El :attribute debe contener :size items.',
    ],
    'starts_with' => 'El :attribute must start with one of the following: :values.',
    'string' => 'El :attribute must be a string.',
    'timezone' => 'El :attribute must be a valid timezone.',
    'unique' => 'El :attribute ya ha sido usado.',
    'uploaded' => 'El :attribute failed to upload.',
    'url' => 'El :attribute must be a valid URL.',
    'uuid' => 'El :attribute must be a valid UUID.',

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
    | El following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'password' => 'contraseña'
    ],

];
