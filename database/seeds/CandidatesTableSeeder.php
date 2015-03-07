// /database/migrations/seeds/CandidatesTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates = array(
            ['id' => 1, 'candidate_name'=>'fatima'],
            ['id' => 2, 'candidate_name'=>'fatima'],
            ['id' => 3, 'candidate_name'=>'fatima'],
        );

        // Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}