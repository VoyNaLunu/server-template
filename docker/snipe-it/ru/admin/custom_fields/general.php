<?php

return [
    'custom_fields'		        => 'Настраиваемые поля',
    'manage'                    => 'Управление',
    'field'		                => 'Поле',
    'about_fieldsets_title'		=> 'О наборах полей',
    'about_fieldsets_text'		=> 'Наборы полей позволяют вам создавать группы пользовательских полей, которые часто используются для конкретных типов модели активов.',
    'custom_format'             => 'Пользовательский формат регулярных выражений...',
    'encrypt_field'      	        => 'Зашифровать значение этого поля в базе данных',
    'encrypt_field_help'      => 'ПРЕДУПРЕЖДЕНИЕ: Шифрование поля исключит возможность его поиска.',
    'encrypted'      	        => 'Зашифровано',
    'fieldset'      	        => 'Набор полей',
    'qty_fields'      	      => 'Кол-во полей',
    'fieldsets'      	        => 'Наборы полей',
    'fieldset_name'           => 'Название набора полей',
    'field_name'              => 'Название поля',
    'field_values'            => 'Значения полей',
    'field_values_help'       => 'Добавьте выбранные значения по одной в строку. Пустые строки, кроме первой, будут проигнорованы.',
    'field_element'           => 'Элемент формы',
    'field_element_short'     => 'Элемент',
    'field_format'            => 'Формат',
    'field_custom_format'     => 'Пользовательский формат',
    'field_custom_format_help'     => 'Это поле позволяет использовать регулярное выражения для проверки. Оно должен начинаться с «regex:». Например, чтобы проверить, что значение настраиваемого поля содержит допустимый IMEI (15 цифр), вы должны использовать <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Обязательно',
    'req'   		              => 'Треб.',
    'used_by_models'   		    => 'Использован в моделях',
    'order'   		            => 'Порядок',
    'create_fieldset'         => 'Новый набор полей',
    'update_fieldset'         => 'Редактировать набор полей',
    'fieldset_does_not_exist'   => 'Набор полей :id не существует',
    'fieldset_updated'         => 'Набор полей изменён',
    'create_fieldset_title' => 'Создайте новый набор полей',
    'create_field'            => 'Новое настраиваемое поле',
    'create_field_title' => 'Создайте новое настраиваемое поле',
    'value_encrypted'      	        => 'Значение этого поля зашифровано в базе данных. Только администраторам будет доступно для просмотра расшифрованное значение',
    'show_in_email'     => 'Включать значение этого поля в электронные письма, которые будут отправляться пользователю? Зашифрованные поля не могут быть включены в электронные письма.',
    'help_text' => 'Текст справки',
    'help_text_description' => 'Это необязательный текст, который будет отображаться под элементами формы при редактировании актива для предоставления контекста в поле.',
    'about_custom_fields_title' => 'О пользовательских полях',
    'about_custom_fields_text' => 'Настраиваемые поля позволяют добавлять произвольные атрибуты к ресурсам.',
    'add_field_to_fieldset' => 'Добавить поле к набору полей',
    'make_optional' => 'Требуется - нажмите чтобы сделать необязательным',
    'make_required' => 'Необязательное - нажмите чтобы сделать обязательным',
    'reorder' => 'Изменить порядок',
    'db_field' => 'Поле БД',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'Это значение должно быть уникальным для всех активов',
    'unique' => 'Уникальный',
    'display_in_user_view' => 'Разрешить владельцу актива просматривать эти значения на странице Показать назначенные активы',
    'display_in_user_view_table' => 'Видимый для пользователя',
];
