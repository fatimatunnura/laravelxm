<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('blogs')->delete();

        $blogs = array(
            ['id' => 1, 'title' => 'Hello 1', 'description' => 'asdyg sdasdyus xcdasdwusdty sd', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'Hello 2', 'description' => 'asdyg sdasdyus xcdasdwusdty sd', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'Hello 3', 'description' => 'asdyg sdasdyus xcdasdwusdty sd', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('blogs')->insert($blogs);
    }

}