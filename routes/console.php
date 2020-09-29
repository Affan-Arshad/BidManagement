<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('updatedb', function () {
    // Variables
    $user = config('database.connections.mysql.username');
    $database = config('database.connections.mysql.database');
    $password = config('database.connections.mysql.password');
    $file = 'database/seeds/backup.sql';
    $backups = 'database/seeds/backups/'.date('YmdHis').'.sql';

    // Make a DB backup
    $this->comment('Backing up DB...');
    $output = NULL;
    $return_var = 0; // Errors
    if(!file_exists($file)) {
        if($password == null) {
            exec('mysqldump -u '.$user.' '.$database.' --complete-insert -t --compact --extended-insert=FALSE --ignore-table=bid.migrations > '.$file, $output, $return_var);
        } else {
            exec('mysqldump -u '.$user.' -p'.$password.' '.$database.' -t --compact --extended-insert=FALSE --ignore-table=bid.migrations > '.$file, $output, $return_var);
        }
    } else {
        $output = 'Backup File Already Exists..';
    }
    // Print Output and Errors
    $this->line($output);
    if($return_var) {
        return $this->line('error: '.$return_var);
    } else $this->line('...success!');

    // Drop All Table
    $this->comment('Dropping all tables...');
    $tables = DB::select('SHOW TABLES');
    foreach($tables as $table){
        Schema::drop($table->Tables_in_bid);
    } 
    // Print
    $this->line('...success!');

    // run migrate
    $this->comment('Re-creating tables...');
    $output = NULL;
    $return_var = 0; // Errors
    exec('php artisan migrate:refresh', $output, $return_var);
    // Print Output and Errors
    $this->line($output);
    if($return_var) {
        $this->line($return_var);
    } else $this->line('...success!');

    // seed from backed up sql file
    $this->comment('Seeding tables from backup...');
    $output = NULL;
    $return_var = 0; // Errors
    if($password == null) {
        exec('mysql -u '.$user.' '.$database.' < '.$file, $output, $return_var);
    } else {
        exec('mysql -u '.$user.' -p'.$password.' '.$database.' < '.$file, $output, $return_var);
    }
    // Print Output and Errors
    $this->line($output);
    if($return_var) {
        $this->line($return_var);
    } else {
        exec('mv '.$file.' '.$backups);
        $this->line('...success!');
    }

})->describe('Make a DB backup, run migrate:refresh, and seed from backed up sql file');
