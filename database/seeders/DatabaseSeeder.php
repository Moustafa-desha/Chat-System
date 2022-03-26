<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use function Livewire\str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         Conversation::create([
             'name'   => 'Family Group',
             'uuid'   => str::uuid(),
             'user_id'   => rand(1,5),
         ]);

        Conversation::create([
            'name'   => 'Friends Group',
            'uuid'   => str::uuid(),
            'user_id'   => rand(1,5),
        ]);

        Conversation::create([
            'name'   => 'Work Group',
            'uuid'   => str::uuid(),
            'user_id'   =>rand(1,5),
        ]);


    }
}
