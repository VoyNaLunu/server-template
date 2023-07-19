<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':attribute должно быть принято.',
    'active_url'           => ':attribute не является действительным URL.',
    'after'                => ':attribute должно быть датой после :date.',
    'after_or_equal'       => ':attribute должно быть датой после или равной :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и тире.',
    'alpha_num'            => ':attribute может содержать только буквы и цифры.',
    'array'                => ':attribute должно быть массивом.',
    'before'               => ':attribute должно быть датой до :date.',
    'before_or_equal'      => ':attribute должно быть датой до или равной :date.',
    'between'              => [
        'numeric' => ':attribute должно быть между :min - :max.',
        'file'    => ':attribute должно быть между :min - :max килобайт.',
        'string'  => ':attribute должно быть между :min - :max символов.',
        'array'   => ':attribute должно быть между :min и :max предметами.',
    ],
    'boolean'              => ':attribute должно быть true или false.',
    'confirmed'            => 'Подтверждение :attribute не совпадает.',
    'date'                 => ':attribute не является правильной датой.',
    'date_format'          => ':attribute не совпадает с форматом :format.',
    'different'            => ':attribute и :other должны быть разными.',
    'digits'               => ':attribute должно быть :digits цифр.',
    'digits_between'       => ':attribute должно быть между :min и :max цифр.',
    'dimensions'           => 'Атрибут: имеет недопустимые размеры изображения.',
    'distinct'             => 'Поле :attribute содержит повторяющееся значение.',
    'email'                => 'Неправильный формат :attribute.',
    'exists'               => 'Выбранное :attribute неправильное.',
    'file'                 => ':attribute должно быть файлом.',
    'filled'               => 'Поле :attribute должно иметь значение.',
    'image'                => ':attribute должно быть изображением.',
    'import_field_empty'    => 'Значение :fieldname не может быть пустым.',
    'in'                   => 'Выбранное :attribute неправильное.',
    'in_array'             => 'Поле :attribute не существует в :other.',
    'integer'              => ':attribute должно быть целочисленным.',
    'ip'                   => ':attribute должно быть действительным IP-адресом.',
    'ipv4'                 => ':attribute должно быть действительным IPv4-адресом.',
    'ipv6'                 => ':attribute должно быть действительным IPv6-адресом.',
    'is_unique_department' => ':attribute должно быть уникальным для этого географическое расположение компании',
    'json'                 => ':attribute должно быть действительной строкой JSON.',
    'max'                  => [
        'numeric' => ':attribute не должно быть больше, чем :max.',
        'file'    => ':attribute не должно быть больше, чем :max килобайт.',
        'string'  => ':attribute не должно быть больше, чем :max символов.',
        'array'   => ':attribute не должно быть больше, чем :max предметов.',
    ],
    'mimes'                => ':attribute должно быть файлом типа: :values.',
    'mimetypes'            => ':attribute должно быть файлом типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должно быть не менее, чем :min.',
        'file'    => ':attribute должно быть не менее, чем :min килобайт.',
        'string'  => ':attribute должно быть не менее, чем :min символов.',
        'array'   => ':attribute должно содержать не менее, чем :min предметов.',
    ],
    'starts_with'          => ':attribute должно начинаться с одного из следующих значений: :values.',
    'not_in'               => 'Выбранное :attribute неправильное.',
    'numeric'              => ':attribute должно быть числом.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'valid_regex'          => 'Это не правильное регулярное выражение. ',
    'regex'                => 'Неправильный формат :attribute.',
    'required'             => ':attribute является обязательным полем.',
    'required_if'          => ':attribute является обязательным полем, когда :other - :value.',
    'required_unless'      => 'Поле :attribute является обязательным, если :other не в :values.',
    'required_with'        => 'Поле :attribute является обязательное, когда присутствует :values.',
    'required_with_all'    => 'Поле :attribute является обязательным, когда присутствует :values.',
    'required_without'     => 'Поле :attribute является обязательным, когда отсутствует :values.',
    'required_without_all' => 'Поле :attribute является обязательным, когда ни одно из :values не присутствует.',
    'same'                 => ':attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => ':attribute должно быть :size.',
        'file'    => ':attribute должно быть :size килобайт.',
        'string'  => ':attribute должно быть :size символов.',
        'array'   => ':attribute должно содержать :size элементов.',
    ],
    'string'               => ':attribute должно быть строкой.',
    'timezone'             => ':attribute должно быть допустимой зоной.',
    'unique'               => ':attribute уже занят.',
    'uploaded'             => ':attribute не удалось загрузить.',
    'url'                  => 'Неправильный формат :attribute.',
    'unique_undeleted'     => ':attribute должно быть уникальным.',
    'non_circular'         => ':attribute не должно создавать циклическую ссылку.',
    'disallow_same_pwd_as_user_fields' => 'Пароль не может совпадать с именем учётной записи.',
    'letters'              => 'Пароль должен содержать хотя бы одну букву.',
    'numbers'              => 'Пароль должен содержать хотя бы одну цифру.',
    'case_diff'            => 'Пароль должен содержать смешанный регистр.',
    'symbols'              => 'Пароль должен содержать символы.',
    'gte'                  => [
        'numeric'          => 'Значение не может быть отрицательным'
    ],


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
        'alpha_space' => 'Поле :attribute содержит символ, который не разрешен.',
        'email_array'      => 'Один или несколько адресов электронной почты недействительны.',
        'hashed_pass'      => 'Ваш текущий пароль неверен',
        'dumbpwd'          => 'Этот пароль слишком распространен.',
        'statuslabel_type' => 'Вы должны выбрать допустимый тип ярлыка состояния',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format is reflects php Y-m-d, which non-PHP
        // people won't know how to format. 
        'purchase_date.date_format'     => ':attribute должно быть допустимой датой в формате YYYY-MM-DD',
        'last_audit_date.date_format'   =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD hh:mm:ss',
        'expiration_date.date_format'   =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD',
        'termination_date.date_format'  =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD',
        'expected_checkin.date_format'  =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD',
        'start_date.date_format'        =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD',
        'end_date.date_format'          =>  ':attribute должно быть допустимой датой в формате YYYY-MM-DD',

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

    'attributes' => [],

];
