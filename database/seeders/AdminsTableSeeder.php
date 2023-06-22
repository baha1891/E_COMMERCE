<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admins')->delete();

        \DB::table('admins')->insert(array (
            0 =>
            array (
                'created_at' => '2023-06-10 13:27:07',
                'email' => 'ahmad1@test.com',
                'first_name' => '{"en":"ahmad","ar":"\\u0627\\u062d\\u0645\\u062f"}',
                'id' => 1,
                'last_name' => '{"en":"shalah jaketo","ar":"\\u0634\\u0644\\u062d \\u062c\\u0627\\u0643\\u064a\\u062a\\u0647"}',
                'password' => '$2y$10$2bkn4FZj9AEUTHm7NnaK2u4XtLQtDGlSNuTe.HrSICjRb63gWNQ6e',
                'phone' => '1122554488',
                'status' => 'active',
                'updated_at' => '2023-06-10 13:27:07',
            ),
            1 =>
            array (
                'created_at' => '2023-06-10 22:06:52',
                'email' => 'ashraf@test.com',
                'first_name' => '{"en":"ashraf","ar":"\\u0627\\u0634\\u0631\\u0641"}',
                'id' => 2,
                'last_name' => '{"en":"shaleh kanzto","ar":"\\u0634\\u0627\\u0644\\u062d \\u0643\\u0646\\u0632\\u062a\\u0648"}',
                'password' => '$2y$10$VE8vWnMy.RPI3MPcBRLM4usIaR6mIaSvlzixCZRfSVqy60W2dzlO2',
                'phone' => '4455889966',
                'status' => 'active',
                'updated_at' => '2023-06-10 22:06:52',
            ),
            2 =>
            array (
                'created_at' => '2023-06-10 22:10:38',
                'email' => 'khaled@test.com',
                'first_name' => '{"en":"khaled","ar":"\\u062e\\u0627\\u0644\\u062f"}',
                'id' => 3,
                'last_name' => '{"en":"mdyea jrabo","ar":"\\u0645\\u0636\\u064a\\u0639 \\u062c\\u0631\\u0627\\u0628\\u0648"}',
                'password' => '$2y$10$BTlbcqfyLJAwKFyT23ZdaexJbQDm9OVC8klIGYhikf23F3ByJnr6m',
                'phone' => '1122556697',
                'status' => 'active',
                'updated_at' => '2023-06-10 22:10:38',
            ),
            3 =>
            array (
                'created_at' => '2023-06-10 22:11:50',
                'email' => 'mostafa@test.com',
                'first_name' => '{"en":"mostafa","ar":"\\u0645\\u0635\\u0637\\u0641\\u0649"}',
                'id' => 4,
                'last_name' => '{"en":"sahabo alnamel","ar":"\\u0633\\u062d\\u0628\\u0648 \\u0627\\u0644\\u0646\\u0645\\u0644"}',
                'password' => '$2y$10$CtdgJXfsCDJYyzcI7wAuQ.eanpUq3fJSjIMkFCDCsV92YXwtdOlh6',
                'phone' => '77885544112',
                'status' => 'active',
                'updated_at' => '2023-06-10 22:11:50',
            ),
        ));


    }
}
