<?php

use Illuminate\Database\Seeder;

class tugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$a = [
        ['Nama'=>'taufik', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'rudi', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL',],
        	['Nama'=>'Robi F', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'Firas', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'M Satria D', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	


        ];
        DB::table('learn')->insert($a);
    }
}
