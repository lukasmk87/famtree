<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class AdminSeeder extends Seeder
{
    /**
     * Create the admin/developer user.
     * Configure via .env:
     * - ADMIN_FIRSTNAME
     * - ADMIN_SURNAME
     * - ADMIN_EMAIL
     * - ADMIN_PASSWORD
     */
    public function run(): void
    {
        // Check if admin already exists
        $email = env('ADMIN_EMAIL', 'admin@localhost');

        if (User::where('email', $email)->exists()) {
            $this->command->info("Admin user with email {$email} already exists. Skipping.");
            return;
        }

        $user = User::factory([
            'firstname'    => env('ADMIN_FIRSTNAME', 'Admin'),
            'surname'      => env('ADMIN_SURNAME', ''),
            'email'        => $email,
            'password'     => Hash::make(env('ADMIN_PASSWORD', 'password')),
            'is_developer' => true,
            'timezone'     => 'Europe/Berlin',
        ])->withPersonalTeam()->create();

        // Rename personal team to "Stammbaum"
        $user->currentTeam->update([
            'name' => 'Stammbaum',
        ]);

        $this->command->info("Admin user '{$user->firstname}' created with email: {$email}");
    }
}
