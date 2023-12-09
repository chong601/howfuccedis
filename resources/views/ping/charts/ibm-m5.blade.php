<x-chart-layout title="Ping for IBM System x3650 M5" hostPath="{{ $hostPath }}">
    <h1>Ping statistics from IBM System x3650 M5</h1>
    <p>Note that this host bridges between Dell Optiplex 5050 to the rest of the network, hence the weird net inbound and outbound values</p>
    <div data-netdata="system.net"
         data-chart-library="easypiechart"
         data-title="Net Inbound"
         data-dimensions="received"
         data-width="200"
         data-height="200"
         data-after="-600"
         data-points="300"
    ></div>
    <div data-netdata="system.net"
         data-chart-library="easypiechart"
         data-title="Net Outbound"
         data-dimensions="sent"
         data-width="200"
         data-height="200"
         data-after="-600"
         data-points="300"
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
    <div data-netdata="ping_ISP_Edge.host_10_55_100_246_rtt"
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
    <div data-netdata="ping_ISP_Edge.host_10_55_100_246_packet_loss"
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
