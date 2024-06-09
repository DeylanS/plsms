<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publications = [
            [
                'Publication_Field'=> 'text is here',
                'Mentor_ID'=>1,
                'User_ID'=>1,
                'Publication_Title'=> 'text is here',
                'Publication_File'=> 'file is here',
                'Publication_Author'=> 'author is here',
                'Publication_Type'=> 'type is here',
            ]
        ];

        foreach ($publications as $publication) {
		    Publication::create($publication);
		}
    }
}
