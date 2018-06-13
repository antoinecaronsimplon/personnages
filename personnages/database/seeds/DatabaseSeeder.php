<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $path = resource_path() .'/assets/data/datas.csv';
        $reader = Reader::createFromPath($path, 'r');

        $records = $reader->getRecords(['Name', 'Job', 'Phone', 'Mail', 'Address', 'Postal code', 'Town', 'Biography']);
        foreach ($records as $offset => $record) {
            var_export($record);

            DB::table('characters')->insert([
                'Name' => $record['Name'],
                'Job' => $record['Job'],
                'Phone' => $record['Phone'],
                'Mail' => $record['Mail'],
                'Address' => $record['Address'],
                'Postal code' => $record['Postal code'],
                'Town' => $record['Town'],
                'Biography' => $record['Biography'],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
