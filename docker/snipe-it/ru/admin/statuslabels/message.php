<?php

return [

    'does_not_exist' => 'Ярлык состояния не существует.',
    'assoc_assets'	 => 'Этот ярлык состояния на данный момент связан как минимум с одним активом и не может быть удалён. Пожалуйста, обновите свои активы, чтобы они больше не ссылались на этот ярлык состояния и повторите попытку. ',

    'create' => [
        'error'   => 'Ярлык состояния не был создан, пожалуйста, попробуйте снова.',
        'success' => 'Ярлык состояния успешно создана.',
    ],

    'update' => [
        'error'   => 'Не удалось изменить ярлык состояния, пожалуйста, попробуйте снова',
        'success' => 'Ярлык состояния успешно изменён.',
    ],

    'delete' => [
        'confirm'   => 'Вы уверены, что хотите удалить этот ярлык состояния?',
        'error'   => 'Возникла проблема при удалении ярлыка состояния, пожалуйста, попробуйте снова.',
        'success' => 'Ярлык состояния был успешно удалён.',
    ],

    'help' => [
        'undeployable'   => 'Эти активы не могут быть назначены никому.',
        'deployable'   => 'Эти активы могут быть выданы. Как только они будут назначены, они получат мета-статус <i class="fas fa-circle text-blue"></i> <strong>Выданные</strong>.',
        'archived'   => 'Эти активы не могут быть выданы и будут отображены только в Архивные. Это полезно для сохранения информации об активах для составления бюджета/исторических целей, но держа их отдельно от повседневного списка активов.',
        'pending'   => 'Эти активы еще не могут быть назначены никому, часто используется для предметов, которые в ремонте, но ожидается их возвращение в оборот.',
    ],

];
