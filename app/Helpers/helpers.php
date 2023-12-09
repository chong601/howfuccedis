<?php
namespace App\Helpers;

use App\Models\PingHost;

function getHostPath($host) {
    $host = PingHost::whereName($host)->firstOrFail();
    if ($host->slug) {
        return route('ping:charts:host:get-chart-page', ['host' => $host->hostname]);
    } else {
        return $host->hostname;
    }
}
