<?php

return [

    'plugin' => [
        'name' => 'Бронирование',
        'description' => 'Плагин быстрого бронирования.',
        'menu_label' => 'Бронирование',
    ],

    'permission' => [
        'tab_label' => 'Бронирование',
        'reservations' => 'Управление бронями',
        'statuses' => 'Управление статусами',
        'export' => 'Экспорт броней',
    ],

    'reservations' => [
        'menu_label' => 'Бронирование',
        'widget_label' => 'Бронирование',
        'bulk_actions' => 'Массовые действия',
        'approved' => 'Подтвердить',
        'approved_question' => 'Вы уверены, что хотите подтвердить брони?',
        'closed' => 'Закрыть',
        'closed_question' => 'Вы уверены, что хотите закрыть брони?',
        'received' => 'Сброить',
        'received_question' => 'Вы уверены, что хотите сбросить брони?',
        'cancelled' => 'Отменить',
        'cancelled_question' => 'Вы уверены, что хотите отменить брони?',
        'delete' => 'Удалить',
        'delete_question' => 'Вы действительно хотите удалить выбранные брони?',
        'change_status_success' => 'Статус брони успешно изменён.',
    ],

    'reservation' => [
        'date' => 'Дата',
        'time' => 'Время',
        'date_format' => 'd.m.Y H:i:s',
        'name' => 'Имя',
        'email' => 'Email',
        'phone' => 'Телефон',
        'status' => 'Статус',
        'created_at' => 'Создано',
        'created_at_format' => 'd.m.Y H:i:s',
        'street' => 'Адрес / улица',
        'message' => 'Комментарий',
        'number' => 'Номер',
        'returning' => 'Постоянный клиент',
        'submit' => 'Отправить',
    ],

    'statuses' => [
        'menu_label' => 'Статусы',
        'change_order' => 'Изменить порядок',
    ],

    'status' => [
        'name' => 'Статус',
        'color' => 'Цвет',
        'ident' => 'ID',
        'order' => 'Порядок сортировки',
        'enabled' => 'Включен',
        'created' => 'Создан',
        'created_format' => 'd.m.Y H:i:s',
        'updated' => 'Обновлён',
        'updated_format' => 'd.m.Y H:i:s',
    ],

    'export' => [
        'menu_label' => 'Выгрузить',
        'status_filter' => 'Отфильтровать по статусам',
        'status_filter_label' => 'Статусы',
        'status_filter_tab' => 'Статусы',
    ],

    'reservationform' => [
        'name' => 'Форма бронирования',
        'description' => 'Форма для бронирования в определенную дату/время.',
        'success' => 'Бронирование успешно отправленно!',
    ],

    'mail' => [
        'cs_label' => 'Подтверждение резервирования CS',
        'en_label' => 'Подтверждение резервирования EN',
        'es_label' => 'Подтверждение резервирования ES',
        'ru_label' => 'Подтверждение резервирования RU',
    ],

    'errors' => [
        'empty_date' => 'Вы должны выбрать дату бронирования!',
        'empty_hour' => 'Вы должны выбрать время бронирования!',
        'please_wait' => 'Вы можете отправить только одно бронирование за 30 секунд, пожалуйста, подождите.',
        'session_expired' => 'Сессия формы истекла! Пожалуйства, обновите страницу.',
        'exception' => 'Сожалеем, но что-то пошло не так, и форма не может быть отправлена.',
        'already_booked' => 'Данное время :reservation уже занято.',
    ],

    'settings' => [
        'description' => 'Управление настройками бронирования',
        'tabs' => [
            'plugin'  => 'Настройки',
            'admin'   => 'Оповещение',
        ],

        'returning_mark' => [
            'label'   => 'Отметка постоянного клиента',
            'comment' => 'Отмечать клиента постоянным, если у него броней больше или равно указанному. Отключено при 0',
        ],
        'admin_confirmation_enable' => [
            'label'   => 'Включить оповещение администратора',
        ],
        'admin_confirmation_email' => [
            'label'   => 'Email администратора',
            'comment' => 'Email администратора для отправки оповещений.',
        ],
        'admin_confirmation_name' => [
            'label'   => 'Имя администратора',
            'comment' => 'Имя name администратора для отправки оповещений.',
        ],
        'admin_confirmation_locale' => [
            'label'   => 'Локаль для оповещения администратора',
            'comment' => 'Локаль шаблона для оповещения администратора.',
        ],
    ],
];
