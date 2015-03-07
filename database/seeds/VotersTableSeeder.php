// /database/migrations/seeds/VotersTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters = array(
            ['id' => 1, 'voter_name'=>'fatima'],
            ['id' => 2, 'voter_name'=>'fatima'],
            ['id' => 3, 'voter_name'=>'fatima'],
        );

        // Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}