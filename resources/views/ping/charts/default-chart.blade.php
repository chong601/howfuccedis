<x-chart-layout title="Ping for {{ $systemName }}" hostPath="{{ $hostPath }}">
    <h1>Ping statistics from {{ $systemName }}</h1>
    <x-chart-tip-layout></x-chart-tip-layout>
    <div data-netdata="system.net"
         data-chart-library="easypiechart"
         data-title="Net Inbound"
         data-dimensions="received"
         data-width="200"
         data-height="200"
         data-after="-600"
         data-points="600"
    ></div>
    <div data-netdata="system.net"
         data-chart-library="easypiechart"
         data-title="Net Outbound"
         data-dimensions="sent"
         data-width="200"
         data-height="200"
         data-after="-600"
         data-points="600"
    ></div>
    <div data-netdata="system.net"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="system.cpu"
         data-dygraph-valuerange="[0, 100]"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="system.processes"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_10_55_48_22_rtt"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_10_55_100_244_rtt"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_2001_e68__b_42_rtt"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_2001_e68__b_4014_rtt"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_10_55_48_22_packet_loss"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_10_55_100_244_packet_loss"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_2001_e68__b_42_packet_loss"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
    <div data-netdata="ping_ISP_Edge.host_2001_e68__b_4014_packet_loss"
         data-chart-library="dygraph"
         data-width="90%"
         data-height="200"
         data-after="-600"
    ></div>
</x-chart-layout>
