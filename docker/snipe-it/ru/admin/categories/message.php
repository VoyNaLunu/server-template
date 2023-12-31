<?php

return array(

    'does_not_exist' => 'Категория не существует.',
    'assoc_models'	 => 'Эта категория на данный момент связана как минимум с одной моделью и не может быть удалена. Пожалуйста, обновите свои модели, чтобы они больше не ссылались на эту категорию и повторите попытку. ',
    'assoc_items'	 => 'Эта категория на данный момент связана как минимум с одним :asset_type и не может быть удалена. Пожалуйста, обновите свои :asset_type, чтобы они больше не ссылались на эту категорию и повторите попытку. ',

    'create' => array(
        'error'   => 'Категория не создана, пожалуйста попробуйте снова.',
        'success' => 'Категория успешно создана.'
    ),

    'update' => array(
        'error'   => 'Не удалось изменить категорию, пожалуйста, попробуйте снова',
        'success' => 'Категория успешно изменена.',
        'cannot_change_category_type'   => 'Вы не можете изменить тип категории после ее создания',
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить эту категорию?',
        'error'   => 'Возникла проблема при удалении категории, пожалуйста, попробуйте снова.',
        'success' => 'Категория была успешно удалена.'
    )

);
