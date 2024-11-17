<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ganti dengan model yang sesuai

class HashPasswords extends Command
{
    protected $signature = 'hash:passwords';
    protected $description = 'Hash ulang semua password di database menggunakan bcrypt';

    public function handle()
    {
        // Ambil semua user
        $users = User::all(); // Ganti User dengan model yang sesuai

        foreach ($users as $user) {
            // Cek apakah password sudah di-hash
            if (!Hash::needsRehash($user->password)) {
                $this->info("Password untuk {$user->email} sudah di-hash, melewati...");
                continue;
            }

            // Hash ulang password
            $user->password = Hash::make($user->password);
            $user->save();

            $this->info("Password untuk {$user->email} berhasil di-hash ulang.");
        }

        $this->info('Semua password berhasil di-hash ulang.');
    }
}
