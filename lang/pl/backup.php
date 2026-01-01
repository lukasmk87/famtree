<?php

declare(strict_types=1);

return [
    // Labels
    'backup'  => 'Kopia zapasowa',
    'backups' => 'Kopie zapasowe',
    'no_data' => 'Brak dostępnych kopii zapasowych.',

    // Actions
    'create'        => 'Nowa kopia zapasowa',
    'download'      => 'Pobierz',
    'delete'        => 'Usuń',
    'delete_backup' => 'tę kopię zapasową',

    // Attributes
    'id'      => '#',
    'file'    => 'Plik',
    'size'    => 'Rozmiar',
    'date'    => 'Data',
    'age'     => 'Wiek',
    'actions' => 'Akcje',

    // Comments
    'backup_daily'  => 'Kopie zapasowe są tworzone automatycznie codziennie (o godzinie ' . config('app.backup.daily_run') . ').',
    'backup_email'  => 'E-mail zostanie wysłany na adres e-mail aplikacji po każdej kopii zapasowej.',
    'backup_cron_1' => 'Kopie zapasowe można zautomatyzować (uruchamiać codziennie) wydając następujące zadanie cron na serwerze produkcyjnym:',
    'backup_cron_2' => '* * * * * cd /sciezka_do_twojej_aplikacji && php artisan schedule:run >> /dev/null 2>&1',

    // Messages
    'created'     => 'Nowa kopia zapasowa została zapisana.',
    'deleted'     => 'została usunięta.',
    'downloading' => 'Pobieranie rozpoczęte.',
    'failed'      => 'Kopia zapasowa nie powiodła się.',
    'not_found'   => 'Kopia zapasowa nie została znaleziona.',
];
