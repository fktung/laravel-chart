<?php

namespace App\Charts;

use App\Models\Pegawai;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PegawaiAgeChart
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
    $items = Pegawai::getAgeByKategory();
    // dump($items);
    foreach ($items as $key => $row) {
      array_push($data, $row->jumlah);
      array_push($label, $row->kategori);
    }
    return $this->chart->pieChart()
      ->setTitle('Grafik Presentation Age.')
      ->setSubtitle('Age')
      ->addData($data)
      ->setLabels($label);
  }
}
