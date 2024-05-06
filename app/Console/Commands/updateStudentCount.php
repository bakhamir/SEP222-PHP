<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\school;

class updateStudentCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-student-count';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schools = school::get();

        foreach ($schools as $school){
            $school->studentsCount = $school->students->count();
            $school->save();
        }
        print("hello command!");
        return Command::SUCCESS;
    }
}
