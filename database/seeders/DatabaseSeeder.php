<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Status;
use App\Models\Pegawai;
use App\Models\Pimpinan;
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
            'nama'=> 'Arrya Anandika, M.T',
            'nip'=> 199506232022031014,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Derisma, MT',
            'nip'=> 198204192010122001,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Lathifah Arief, MT',
            'nip'=> 198109122014042001,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Desta Yolanda, MT',
            'nip'=> 0,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Dodon Yendri, M.Kom',
            'nip'=> 196603091986031001,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Mohammad Hafiz Hersyah, MT',
            'nip'=> 198502112008011003,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Nefy Puteri Novani, MT',
            'nip'=> 199111192018032001,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Dr. Eng Budi Rahmadya',
            'nip'=> 198112222008121004,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Dr. Eng Tati Erlina',
            'nip'=> 197804142002122003,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Ratna Aisuwarya, M.Eng',
            'nip'=> 198410302008122002,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Rifki Suwandi, MT',
            'nip'=> 199402062022031004,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Rizka Hadelina, M.T',
            'nip'=> 199404292022032014,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Dr. Ahmad Syafruddin Indrapriyatna, M.T.',
            'nip'=> 196307071991031003,
        ]);
        Pegawai::create([
            'role_id'=> 1,
            'status_id' => 1,
            'nama'=> 'Dr. Eng Rahmadi Kurnia, S.T., M.T.',
            'nip'=> 196908201997031002,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Adi Arga Arifnur, M.Kom',
            'nip'=> 199208202019031005,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Hasdi Putra, ST., MT',
            'nip'=> 198307272008121003,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Afriyanti Dwi Kartika, MT',
            'nip'=> 198904212019032024,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Husnil Kamil, MT',
            'nip'=> 198201182008121002,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Aina Hubby Aziira, M.Eng',
            'nip'=> 199504302022032013,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Jefril Rahmadoni, M.Kom',
            'nip'=> 198904152019031009,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Meza Silvana, MT',
            'nip'=> 198103252008122003,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Prof. Surya Afnarius. Ph.D',
            'nip'=> 196404091995121001,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Rahmatika Pratama Santi, MT',
            'nip'=> 199308152022032017,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Dr. Wahyudi, S.T, M.T',
            'nip'=> 198105052014041001,
        ]);
        Pegawai::create([
            'role_id'=> 2,
            'status_id' => 1,
            'nama'=> 'Dwi Welly Sukma Nirad, MT',
            'nip'=> 199108122019032018,
        ]);

        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 1,
            'nama'=> 'Afdal',
            'nip'=> 196901072014091001,
        ]);
        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 1,
            'nama'=> 'Qadriasih Wina Putri, MM',
            'nip'=> 1988051120160116301,
        ]);
        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 1,
            'nama'=> 'Derison',
            'nip'=> 1985080820150116101,
        ]);
        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 1,
            'nama'=> 'Sri Wahyu Hasni, A.Md',
            'nip'=> 1989101192013216201,
        ]);
        Pegawai::create([
            'role_id'=> 4,
            'status_id' => 1,
            'nama'=> 'Khairisman Fedra, S.Pt',
            'nip'=> 197202142000121001,
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
        Pimpinan::create([
            'id' => 1,
            'jabatan'=> 'Dekan',
            'pegawai_id' => 13,
        ]);
        Pimpinan::create([
            'id' => 2,
            'jabatan' => 'Wakil Dekan I',
            'pegawai_id' => 14,
        ]);
        Pimpinan::create([
            'id' => 3,
            'jabatan' => 'Wakil Dekan II',
            'pegawai_id' => 16,
        ]);
        Pimpinan::create([
            'id' => 4,
            'jabatan' => 'Wakil Dekan III',
            'pegawai_id' => 10,
        ]);
    }
}
