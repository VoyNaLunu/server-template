<?php

return array(

    'does_not_exist' => 'Лицензия не существует или у вас нет разрешения на её просмотр.',
    'user_does_not_exist' => 'Пользователь не существует.',
    'asset_does_not_exist' 	=> 'Актив который вы пытаетесь связать с этой лицензией не существует.',
    'owner_doesnt_match_asset' => 'Владелец актива, который вы пытаетесь связать с этой лицензией, отличается от выбранного в выпадающем списке.',
    'assoc_users'	 => 'Эта лицензия выдана пользователю и не может быть удалена. Перед удалением необходимо сначала сделать возврат лицензии и затем снова пробовать удалить. ',
    'select_asset_or_person' => 'Вы должны выбрать актив или пользователя, но не оба.',
    'not_found' => 'Лицензия не найдена',


    'create' => array(
        'error'   => 'Не удалось создать лицензию, пожалуйста, повторите попытку.',
        'success' => 'Лицензия успешно создана.'
    ),

    'deletefile' => array(
        'error'   => 'Не удалось удалить файл. Пожалуйста, попробуйте снова.',
        'success' => 'Файл успешно удален.',
    ),

    'upload' => array(
        'error'   => 'Не удалось загрузить файл(ы). Пожалуйста, попробуйте снова.',
        'success' => 'Файл(ы) успешно загружены.',
        'nofiles' => 'Вы не выбрали ни одного файла для загрузки или файл, который вы пытаетесь загрузить, слишком большой',
        'invalidfiles' => 'Один или более ваших файлов слишком большой или имеет не разрешённый тип файла. Разрешённые типы файлов: png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml, и lic.',
    ),

    'update' => array(
        'error'   => 'Не удалось изменить лицензию, пожалуйста, попробуйте снова',
        'success' => 'Лицензия успешно изменена.'
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить эту лицензию?',
        'error'   => 'Возникла проблема при удалении лицензии, пожалуйста, попробуйте снова.',
        'success' => 'Лицензия успешно удалена.'
    ),

    'checkout' => array(
        'error'   => 'При выдаче лицензии возникла проблема. Пожалуйста, повторите попытку.',
        'success' => 'Лицензия была успешно выдана'
    ),

    'checkin' => array(
        'error'   => 'Возникла проблема при возврате лицензии, пожалуйста, попробуйте снова.',
        'success' => 'Лицензия была успешно возвращена'
    ),

);