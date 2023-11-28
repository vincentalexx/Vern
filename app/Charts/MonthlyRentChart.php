<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyRentChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build($inputYear): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $year = (int)$inputYear;
//        $year = 2021;
        $januaryCount = Order::whereMonth('start_time', 1)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $februaryCount = Order::whereMonth('start_time', 2)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $marchCount = Order::whereMonth('start_time', 3)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $aprilCount = Order::whereMonth('start_time', 4)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $mayCount = Order::whereMonth('start_time', 5)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $juneCount = Order::whereMonth('start_time', 6)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $julyCount = Order::whereMonth('start_time', 7)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $augustCount = Order::whereMonth('start_time', 8)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $septemberCount = Order::whereMonth('start_time', 9)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $octoberCount = Order::whereMonth('start_time', 10)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $novemberCount = Order::whereMonth('start_time', 11)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        $decemberCount = Order::whereMonth('start_time', 12)
            ->whereYear('start_time', $year)
            ->where('status', 4)
            ->count();
        return $this->chart->lineChart()
            ->setTitle('Rent Sales during ' . $year)
            ->setSubtitle('Vehicle Rent Sales')
            ->addData('Rent Sales', [$januaryCount, $februaryCount, $marchCount, $aprilCount, $mayCount, $juneCount, $julyCount, $augustCount, $septemberCount, $octoberCount, $novemberCount, $decemberCount])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'])
            ->setGrid();
    }
}
