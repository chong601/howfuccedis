<x-base-layout>
    <h1>Welcome to the glorious list of hosts where you can check out how fucked chong601's internet is.</h1>

    <h2>Available hosts:</h2>
    @foreach($allPingHosts as $pingHost)
        <h2><a href="{{ route('ping:charts:host:get-chart-page', ['host' => $pingHost->name]) }}" target="_blank">{{ $pingHost->friendly_name }} ({{ $pingHost->system_details }})</a></h2>
    @endforeach
</x-base-layout>
