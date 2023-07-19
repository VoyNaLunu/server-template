<?php

return [
    'does_not_exist' => 'Компания не существует.',
    'assoc_users'    => 'Эта компания на данный момент связана как минимум с одной моделью и не может быть удалена. Пожалуйста, обновите свои модели, чтобы они больше не ссылались на эту компанию и повторите попытку. ',
    'create' => [
        'error'   => 'Компания не была создана, попробуйте ещё раз.',
        'success' => 'Компания успешно создана.',
    ],
    'update' => [
        'error'   => 'Не удалось изменить компанию, пожалуйста, попробуйте снова',
        'success' => 'Компания успешно изменена.',
    ],
    'delete' => [
        'confirm' => 'Вы уверены, что хотите удалить эту компанию?',
        'error'   => 'Возникла проблема при удалении компании, пожалуйста, попробуйте снова.',
        'success' => 'Компания была успешно удалена.',
    ],
];
