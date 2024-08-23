<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('pendidikan')->insert([
            [
                'pendidikan' => 'Tidak/Belum Sekolah'
            ],
            [
                'pendidikan' => 'Sekolah Dasar'
            ],
            [
                'pendidikan' => 'Sekolah Menengah Pertama'
            ],
            [
                'pendidikan' => 'Sekolah Menengah Atas'
            ],
            [
                'pendidikan' => 'Akademi/Kejuruan'
            ],
            [
                'pendidikan' => 'Universitas'
            ]
            ]
        );

        DB::table('agama')->insert([
            [
                'agama'=>'Islam'
            ],
            [
                'agama'=>'Kristen Protestan'
            ],
            [
                'agama'=>'Kristen Katolik'
            ],
            [
                'agama'=>'Hindu'
            ],
            [
                'agama'=>'Buddha'
            ],
            [
                'agama'=>'Lainnya'
            ]
            ]);

            DB::table('pernikahan')->insert([
                    [
                        'status_pernikahan'=>'Menikah'
                    ],
                    [
                        'status_pernikahan'=>'Belum Menikah'
                    ],
                    [
                        'status_pernikahan'=>'Janda/Duda'
                    ]
                ]
            );

            DB::table('wilayah')->insert([
                [
                    'wilayah'=>'Indonesia'
                ],
                [
                    'wilayah'=>'Di Luar Indonesia'
                ]
            ]);

            DB::table('gaji')->insert([
                [
                    'gaji'=>'Kurang dari Rp 2.5 Juta'
                ],
                [
                    'gaji'=>'Rp 2.5 Juta s/d < Rp 5 Juta'
                ],
                [
                    'gaji'=>'Rp 5 Juta s/d < Rp 7.5 Juta'
                ],
                [
                    'gaji'=>'Rp 7.5 Juta s/d < Rp 10 Juta'
                ],
                [
                    'gaji'=>'Rp 10 Juta s/d < Rp 25 Juta'
                ],
                [
                    'gaji'=>'Rp 25 juta s/d < Rp 50 Juta'
                ],
                [
                    'gaji'=>'Rp 50 Juta s/d < Rp 100 Juta'
                ],
                [
                    'gaji'=>'Rp 100 Juta s/d < Rp 250 Juta'
                ],
                [
                    'gaji'=>'Rp 250 Juta s/d < Rp 500 Juta'
                ],
                [
                    'gaji'=>'Rp 500 Juta s/d < Rp 1 Miliar'
                ],
                [
                    'gaji'=>'Rp 1 Miliar s/d < Rp 1.5 Miliar'
                ],
                [
                    'gaji'=>'Rp 1.5 Miliar s/d < Rp 2 Miliar'
                ],
                [
                    'gaji'=>'Rp 2 Miliar s/d < Rp 3 Miliar'
                ],
                [
                    'gaji'=>'Rp 3 Miliar s/d < Rp 4 Miliar'
                ],
                [
                    'gaji'=>'Rp 4 Miliar s/d < Rp 5 Miliar'
                ],
                [
                    'gaji'=>'>/= Rp 5 Miliar'
                ],
                [
                    'gaji'=>'Tidak Berpenghasilan'
                ]
            ]);
    }    
}
