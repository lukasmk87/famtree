<?php

declare(strict_types=1);

return [
    // Labels
    'backup'  => 'Kopja rezervë',
    'backups' => 'Kopjet rezervë',
    'no_data' => 'Nuk ka kopje rezervë të disponueshme.',

    // Actions
    'create'        => 'Kopje rezervë e re',
    'download'      => 'Shkarko',
    'delete'        => 'Fshi',
    'delete_backup' => 'këtë kopje rezervë',

    // Attributes
    'id'      => '#',
    'file'    => 'Skedari',
    'size'    => 'Madhësia',
    'date'    => 'Data',
    'age'     => 'Mosha',
    'actions' => 'Veprimet',

    // Comments
    'backup_daily'  => 'Kopjet rezervë krijohen automatikisht çdo ditë (në orën ' . config('app.backup.daily_run') . ').',
    'backup_email'  => 'Një email do të dërgohet në adresën e emailit të aplikacionit pas çdo kopje rezervë.',
    'backup_cron_1' => 'Kopjet rezervë mund të automatizohen (ekzekutohen çdo ditë) duke lëshuar detyrën e mëposhtme cron në serverin e prodhimit:',
    'backup_cron_2' => '* * * * * cd /rruga_drejt_aplikacionit_tuaj && php artisan schedule:run >> /dev/null 2>&1',

    // Messages
    'created'     => 'Kopja rezervë e re u ruajt.',
    'deleted'     => 'u fshi.',
    'downloading' => 'Shkarkimi filloi.',
    'failed'      => 'Kopja rezervë dështoi.',
    'not_found'   => 'Kopja rezervë nuk u gjet.',
];
