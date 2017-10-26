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

    "accepted"         => ":attribute يجب أن يتم قبوله.",
    "active_url"       => ":attribute ليس عنوان إنترنت صالحًا.",
    "after"            => ":attribute يجب أن يكون تاريخًا بعد :date.",
    'after_or_equal'       => 'The :attribute يجب أن يكون تاريخا بعد أو يساوي :date.',
    "alpha"            => ":attribute يجب أن يحوي أحرفاً فقط.",
    "alpha_dash"       => ":attribute يجب أن يحوي أحرف وأرقام وإشارة ناقص.",
    "alpha_num"        => ":attribute يجب أن يحوي أحرف وأرقام.",
    'array'                => 'The :attribute يجب أن يكون صف.',
    'before'               => 'The :attribute يجب أن يكون التاريخ من قبل :date.',
    'before_or_equal'      => 'The :attribute يجب أن يكون تاريخا قبل أو يساوي :date.',
    "between"          => [
        "numeric" => ":attribute يجب أن يكون ؤقمًا بين :min - :max.",
        "file"    => ":attribute يجب أن يكون بين :min - :max كيلو بايت.",
        "string"  => ":attribute يجب أن يكون طوله بين :min - :max من الأحرف.",
        "array"   => "The :attribute يجب أن يكون بين :min - :max items."
    ],
    'boolean'              => ':attribute يجب أن يكون الحقل صحيحا أو خاطئا.',
    'confirmed'            => ':attribute تأكيد لا يطابق.',
    "date"             => ":attribute ليس تاريخ صحيح.",
    "date_format"      => ":attribute لا يطابق الصيغة :format.",
    "different"        => ":attribute و :other يجب أن يكونا مختلفين.",
    "digits"           => ":attribute يجب أن يتكون من :digits أرقام.",
    "digits_between"   => ":attribute يجب أن يكون بين :min و :max أرقام.",
    'dimensions'           => ':attribute أبعاد صورة غير صالحة.',
    'distinct'             => ':attribute الحقل له قيمة مكررة.',
    "email"            => ":attribute بصيغة خاطئة.",
    "exists"           => ":attribute المختار غير صالح.",
    'file'                 => ':attribute يجب أن يكون ملف.',
    'filled'               => ':attribute يجب أن يكون للحقل قيمة.',
    'image'                => ':attribute يجب أن تكون صورة.',
    'in'                   => 'المحدد :attribute غير صالح.',
    'in_array'             => ':attribute الحقل غير موجود في :other.',
    'integer'              => ':attribute يجب أن يكون رقما صحيحا.',
    'ip'                   => ':attribute يجب أن يكون عنوان إب صالحا.',
    'ipv4'                 => ':attribute يجب أن يكون عنوان IPv4 صالحا.',
    'ipv6'                 => ':attribute يجب أن يكون عنوان IPv6 صالحا.',
    'json'                 => ':attribute يجب أن تكون سلسلة جسون صالحة.',
    'max'                  => [
        'numeric' => ':attribute قد لا يكون أكبر من :max.',
        'file'    => ':attribute قد لا يكون أكبر من :max كيلوبايت.',
        'string'  => ':attribute قد لا يكون أكبر من :max احرف .',
        'array'   => ':attribute قد لا يكون أكثر من :max عنصر .',
    ],
    'mimes'                => ':attribute يجب أن يكون ملف type: :values.',
    'mimetypes'            => ':attribute يجب أن يكون ملف type: :values.',
    'min'                  => [
        'numeric' => ':attribute يجب ألا يكون أكبر من :max.',
        'file'    => ':attribute يجب ألا يكون أكبر من :max كيلو بايت.',
        'string'  => ':attribute يجب ألا يكون أكبر من :max محرف.',
        'array'   => ':attribute يجب أن يكون على الأقل :min عنصر.',
    ],
    'not_in'               => 'المحدد :attribute غير صالح.',
    'numeric'              => ':attribute يجب أن يكون رقما.',
    'present'              => ':attribute يجب أن يكون الحقل حاضرا.',
    'regex'                => ':attribute التنسيق غير صالح.',
    'required'             => ':attribute هذا الحقل مطلوب.',
    'required_if'          => ':attribute حقل مطلوب عندما :other يكون :value.',
    'required_unless'      => ':attribute حقل مطلوب ما لم :other في داخل :values.',
    'required_with'        => ':attribute حقل مطلوب عندما :values حاضر.',
    'required_with_all'    => ':attribute حقل مطلوب عندما :values حاضر.',
    'required_without'     => ':attribute حقل مطلوب عندما :values غير موجود.',
    'required_without_all' => ':attribute حقل مطلوب عندما لا شيء من :values حاضرون.',
    'same'                 => ':attribute و :other متطابق',
    'size'                 => [
        'numeric' => ':attribute يجب ان :size.',
        'file'    => ':attribute يجب ان :size كيلوبايت.',
        'string'  => ':attribute يجب ان :size احرف .',
        'array'   => ':attribute يجب أن تحتوي على :size عناصر .',
    ],
    'string'               => ':attribute يجب أن تكون سلسلة.',
    'timezone'             => 'attribute يجب أن تكون منطقة صالحة.',
    'unique'               => 'قيمة :attribute تم استخدامها مسبقاً.',
    'uploaded'             => 'attribute فشل في التحميل .',
    'url'                  => ':attribute صيغته غير صحيحة.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

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

    'attributes'           => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'عنوان السكن',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
    ],

];
