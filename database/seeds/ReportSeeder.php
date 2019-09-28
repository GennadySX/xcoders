<?php

use Illuminate\Database\Seeder;
use App\Report;
class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report = new Report();
        $report->item_id = 1;
        $report->text = "report text by user";
        $report->save();

    }
}
