<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Ruang;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:is');
        Ruang::insert([
            ['nama_ruang'=>'Front Office',
              'created_at'=> $now, 'updated_at'=>$now
            ],
            ['nama_ruang'=>'Marketing',
              'created_at'=> $now, 'updated_at'=>$now
            ],
            ['nama_ruang'=>'Finance',
              'created_at'=> $now, 'updated_at'=>$now
        ]
        ]);
    }
}
