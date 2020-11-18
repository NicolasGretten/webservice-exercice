<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('data')->table('example')->insert([
            'id'            => substr('usr_' . md5(Str::uuid()),0 ,25),
            'username'      => 'john.doe@example.com',
            'password'      => Hash::make('john'),
            'role'          => 'company',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::connection('data')->table('users')->insert([
            'id'            => substr('usr_' . md5(Str::uuid()),0 ,25),
            'username'      => 'jane.doe@example.com',
            'password'      => Hash::make('jane'),
            'role'          => 'customer',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::connection('data')->table('users')->insert([
            'id'            => substr('usr_' . md5(Str::uuid()),0 ,25),
            'username'      => 'john.smith@example.com',
            'password'      => Hash::make('john'),
            'role'          => 'customer',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            'deleted_at'    => Carbon::now()
        ]);

        DB::connection('data')->table('users')->insert([
            'id'            => substr('usr_' . md5(Str::uuid()),0 ,25),
            'username'      => 'jane.smith@example.com',
            'password'      => Hash::make('jane'),
            'role'          => 'chain',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
            'deleted_at'    => Carbon::now()
        ]);
    }
}
