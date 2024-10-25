<?php

namespace Database\Seeders;

use App\Models\Bike;
use App\Models\TypeOfBike;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\UserFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        UserFactory::new()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        TypeOfBike::factory()->count(10)->create();

        Bike::factory()->count(100)->create();


////        Storage::disk('public')->deleteDirectory('/users');
//        $user = User::query()->first();
//        Storage::disk('public')->makeDirectory("/users/{$user->id}");
//        Storage::disk('public')->makeDirectory("/users/{$user->id}/test/images");
//        Factory::create()->image(storage_path("app/public/users/{$user->id}/test/images"), 500, 500, null, false);
//        Factory::create()->image(storage_path("app/public/users/{$user->id}/"), 500, 500, null, false);

    }
}
