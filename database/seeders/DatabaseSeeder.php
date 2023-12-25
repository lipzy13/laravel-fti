<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Status;
use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345',
        ]);
        
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Alpha',
            'nip'=> 12345678,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Beta',
            'nip'=> 12345678,
        ]);

        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 2,
            'nama'=> 'Gamma',
            'nip'=> 12345678,
        ]);

        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 2,
            'nama'=> 'Gamma',
            'nip'=> 12345678,
        ]);

        Role::create([
            'nama'=>'Dosen Teknik Komputer',
            'id'=>1,
        ]);

        Role::create([
            'nama' => 'Dosen Sistem Informasi',
            'id'=>2,
        ]);
    
        Role::create([
            'nama' => 'Dosen Informatika',
            'id'=>3,
        ]);

        Role::create([
            'nama' => 'Tenaga Kependidikan',
            'id' => 4,
        ]);

        Status::create([
            'status' => 'PNS',
            'id' => 1
        ]);

        Status::create([
            'status' => 'Honorer',
            'id' => 2,
        ]);
    }
}
