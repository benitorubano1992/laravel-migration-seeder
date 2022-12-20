<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use PhpParser\Node\Stmt\Foreach_;

class TrainCsvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function getCsvData($path)
    {
        $data = [];
        $file_stream = fopen($path, 'r');
        if ($file_stream === false) {
            exit('Can not open file');
        }
        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }
        fclose($file_stream);
        return $data;
    }

    public function run()
    {
        $trainData = $this->getCsvData(__DIR__ . "/trains.csv");

        foreach ($trainData as $key => $train) {
            if ($key !== 0) {
                $newTrain = new Train();   //
                $newTrain->azineda = $train[0];
                $newTrain->stazione_partenza = $train[1];
                $newTrain->stazione_arrivo = $train[2];
                $newTrain->orario_partenza = $train[3];
                $newTrain->orario_arrivo = $train[4];
                $newTrain->codice = $train[5];
                $newTrain->carrozze = $train[6];
                $newTrain->in_orario = $train[7];
                $newTrain->cancellato = $train[8];
                $newTrain->save();
            }
        }
    }
}
