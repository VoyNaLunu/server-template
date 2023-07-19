<?php

return array(

    'does_not_exist' => 'Аксессуар [:id] не существует.',
    'assoc_users'	 => 'Этот аксессуар в настоящее время имеет :count предметов, выданных пользователям. Пожалуйста, сначала сделайте возврат аксессуаров, и затем попробуйте удалить снова. ',

    'create' => array(
        'error'   => 'Аксессуар не был создан, пожалуйста, попробуйте снова.',
        'success' => 'Аксессуар был успешно создан.'
    ),

    'update' => array(
        'error'   => 'Не удалось изменить аксессуар, пожалуйста, попробуйте снова',
        'success' => 'Аксессуар успешно изменён.'
    ),

    'delete' => array(
        'confirm'   => 'Вы уверены, что хотите удалить этот аксессуар?',
        'error'   => 'Возникла проблема при удалении аксессуара, пожалуйста, попробуйте снова.',
        'success' => 'Аксессуар был успешно удалён.'
    ),

     'checkout' => array(
        'error'   		=> 'Не удалось выдать аксессуар, пожалуйста, попробуйте снова',
        'success' 		=> 'Актив успешно выдан.',
        'unavailable'   => 'Аксессуар не доступен для выдачи. Проверьте наличие',
        'user_does_not_exist' => 'Неверный пользователь. Пожалуйста, попробуйте снова.'
    ),

    'checkin' => array(
        'error'   		=> 'Аксессуар не был возвращён, пожалуйста, попробуйте снова',
        'success' 		=> 'Аксессуар успешно возвращён.',
        'user_does_not_exist' => 'Неверный пользователь. Пожалуйста, попробуйте снова.'
    )


);