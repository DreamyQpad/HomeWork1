<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // Seed the opsystem table with opsystem.txt values
        if (file_exists($fileName = storage_path() . "\dataBaseSeederData\opsystem.txt")) {
            $file = fopen($fileName, "r");
            fgets($file);       // delete the first line from a file

            $i = 1;
            while (($line = fgets($file)) !== FALSE) {
                $parts = preg_split('/\t+/', $line);

                DB::table('opsystem')->insert([
                    "id" => $parts[0],
                    "osname" => $parts[1]
                ]);
                $i++;
            }
        }

        // Seed the opsystem table with opsystem.txt values
        if (file_exists($fileName = storage_path() . "\dataBaseSeederData\processor.txt")) {
            $file = fopen($fileName, "r");
            fgets($file);       // delete the first line from a file

            $i = 1;
            while (($line = fgets($file)) !== FALSE) {
                $parts = preg_split('/\t+/', $line);

                DB::table('processor')->insert([
                    "id" => $parts[0],
                    "manufacturer" => $parts[1],
                    "type" => $parts[2]
                ]);

                $i++;
            }
        }


        // Seed the processor  table with processor.txt values
        if (file_exists($fileName = storage_path() . "\dataBaseSeederData/notebook.txt")) {
            $file = fopen($fileName, "r");
            fgets($file);       // delete the first line from a file

            $i = 1;
            while (($line = fgets($file)) !== FALSE) {
                $parts = preg_split('/\t+/', $line);

                DB::table('notebook')->insert([
                    "manufacturer" => $parts[0],
                    "type" => $parts[1],
                    "display" => (double) $parts[2],
                    "memory" => $parts[3],
                    "harddisk" => $parts[4],
                    "videocontroller" => $parts[5],
                    "price" => $parts[6],
                    "processorid" => $parts[7],
                    "opsystemid" => $parts[8],
                    "pieces" => $parts[9]
                ]);

                $i++;
            }
        }

        // Posts Part
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $person = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'excerpt' => 'Excerpt for my Post',
            'body' => 'Lorem Ipsul dolar sit amet.',
            'slug' => 'my-family-post',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'excerpt' => 'Excerpt for my Post',
            'body' => 'Lorem Ipsul dolar sit amet.',
            'slug' => 'my-work-post',
        ]);
    }
}
