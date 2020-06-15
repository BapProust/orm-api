<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Employee;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach(Employee::all() as $e) {
		User::create(['emp_no' => $e->emp_no, 'email' => $e->first_name . '.' . $e->first_name . '.' . $e->last_name . '.' . $e->emp_no . '@employee.edu', 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'api_token' => Str::random(80)]);
	}
    }
}
