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

    'accepted' => ':attribute پێویستە قبووڵ بکرێت.',
    'accepted_if' => ':attribute پێویستە قبووڵ بکرێت کاتێک :other :value بێت.',
    'active_url' => ':attribute ناونیشانی URL دروست نییە.',
    'after' => ':attribute پێویستە بەروارێک بێت دوای :date.',
    'after_or_equal' => ':attribute پێویستە بەروارێک بێت دوای یان یەکسان بە :date.',
    'alpha' => ':attribute تەنها پیت پێویستە بگرێت.',
    'alpha_dash' => ':attribute تەنها پیت، ژمارە، داش و ژمارەیەکی بێ پێویستە بگرێت.',
    'alpha_num' => ':attribute تەنها پیت و ژمارە پێویستە بگرێت.',
    'array' => ':attribute پێویستە ئەرای بێت.',
    'ascii' => ':attribute تەنها پیتەکانی تەنیشتی بایتەکی یەکەمی و نیشانەکان پێویستە بگرێت.',
    'before' => ':attribute پێویستە بەروارێک بێت پێش :date.',
    'before_or_equal' => ':attribute پێویستە بەروارێک بێت پێش یان یەکسان بە :date.',
    'between' => [
        'array' => ':attribute پێویستە لە نێوان :min و :max ئایتم بێت.',
        'file' => ':attribute پێویستە لە نێوان :min و :max کیلۆبایت بێت.',
        'numeric' => ':attribute پێویستە لە نێوان :min و :max بێت.',
        'string' => ':attribute پێویستە لە نێوان :min و :max پیت بێت.',
    ],
    'boolean' => ':attribute پێویستە راست یان هەڵە بێت.',
    'confirmed' => 'پشتڕاستکردنەوەی :attribute وەکو یەک نین.',
    'current_password' => 'تێپەڕەوشە هەڵەیە.',
    'date' => ':attribute بەرواری دروست نییە.',
    'date_equals' => ':attribute پێویستە بەرواری یەکسان بە :date بێت.',
    'date_format' => ':attribute پێویستە وەکو فۆرماتی :format بێت.',
    'declined' => ':attribute پێویستە ڕەتکرابێت.',
    'declined_if' => ':attribute پێویستە ڕەتکرابێت کاتێک :other :value بێت.',
    'different' => ':attribute و :other پێویستە جیاواز بن.',
    'digits' => ':attribute پێویستە :digits ژمارە بێت.',
    'digits_between' => ':attribute پێویستە لە نێوان :min و :max ژمارە بێت.',
    'dimensions' => ':attribute پێویستە ڕەهەندەکانی وێنە دروست بن.',
    'distinct' => ':attribute خانەکە نرخی دووبارە هەیە.',
    'doesnt_end_with' => ':attribute نابێت بە یەکێک لەمانە کۆتایی هەبێت: :values.',
    'doesnt_start_with' => ':attribute نابێت بە یەکێک لەمانە دەستپێبکات: :values.',
    'email' => ':attribute پێویستە ناونیشانی ئیمەیڵێکی دروست بێت.',
    'ends_with' => ':attribute پێویستە بە یەکێک لەمانە کۆتایی هەبێت: :values.',
    'enum' => ':attribute هەڵبژاردەیەکی نادروستە.',
    'exists' => ':attribute هەڵبژاردەیەکی نادروستە.',
    'file' => ':attribute پێویستە فایلێک بێت.',
    'filled' => ':attribute خانەکە پێویستە نرخی هەبێت.',
    'gt' => [
        'array' => ':attribute پێویستە زیاتر لە :value ئایتم بێت.',
        'file' => ':attribute پێویستە زیاتر لە :value کیلۆبایت بێت.',
        'numeric' => ':attribute پێویستە زیاتر لە :value بێت.',
        'string' => ':attribute پێویستە زیاتر لە :value پیت بێت.',
    ],
    'gte' => [
        'array' => ':attribute پێویستە :value ئایتم یان زیاتر هەبێت.',
        'file' => ':attribute پێویستە گەورەتر یان یەکسان بە :value کیلۆبایت بێت.',
        'numeric' => ':attribute پێویستە گەورەتر یان یەکسان بە :value بێت.',
        'string' => ':attribute پێویستە گەورەتر یان یەکسان بە :value پیت بێت.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lowercase' => 'The :attribute must be lowercase.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' => 'The :attribute must be a valid URL.',
    'ulid' => 'The :attribute must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
