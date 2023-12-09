<?php

namespace App\Http\Controllers;

use App\Models\PingHost;
use Illuminate\Http\Request;
use function App\Helpers\getHostPath;

class PingController extends Controller
{
    public function index(Request $request) {
        return view('ping.index');
    }

    public function notchong601(Request $request) {
        return view('ping.notchong601');
    }

    public function yeschong601(Request $request) {
        return view('ping.yeschong601');
    }

    public function anythingElse(Request $request) {
        return view('ping.anythingElse');
    }

    public function unifi2Gbps(Request $request) {
        return view('ping.unifi2Gbps');
    }

    public function charts(Request $request) {
        $allPingHosts = PingHost::whereActive(true)->get();
        return view('ping.charts.index', ['allPingHosts' => $allPingHosts]);
    }

    public function getChartPage(Request $request, $host) {
        $pingHost = PingHost::whereName($host)->firstOrFail();
        $target = getHostPath($host);

        if ($host === 'optiplex-5050') {
            return view('ping.charts.vyos', ['hostPath' => $target, 'systemName' => $pingHost->friendly_name]);
        } else {
            return view('ping.charts.not-vyos', ['hostPath' => $target, 'systemName' => $pingHost->friendly_name]);
        }
    }
}
