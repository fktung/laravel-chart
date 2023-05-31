<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class PegawaiPositionChart
{
  protected $chart;

  public function __construct(LarapexChart $chart)
  {
    $this->chart = $chart;
  }

  public function build()
  {
    $data = [];
    $label = [];
    $items = DB::table('pegawais')
      ->select(DB::raw('count(*) as jumlah, position'))
      ->groupBy('position')
      ->get();
    foreach ($items as $key => $row) {
      array_push($data, $row->jumlah);
      array_push($label, $row->position);
    }
    return $this->chart->lineChart()
      ->setTitle('Grafik Presentation Position')
      ->setSubtitle('Position.')
      ->addData('Position', $data)
      ->setLabels($label);
  }
}
