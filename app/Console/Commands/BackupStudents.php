<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;
use App\Student;

class BackupStudents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:now';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup Students to storage folder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $students = Student::get();
        $data = '';
        foreach ($students as $student) {
        // code
            $data .= $student->id.' | '.$student->name.' | '.$student->phone.' | '.show_datetime($student->created_at)."\r";
        }
        Storage::put('backup_'.time().'.txt', $data);
        $this->line('backup done');
    }
}
