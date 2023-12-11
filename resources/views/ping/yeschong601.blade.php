<x-subpage-layout>
    <h1>Massively fucked.</h1>
    <h5>
        chong601's internet has been up for <span x-data="{ counter: 1 }" x-init="setInterval(() => {counter++;}, 1000)" x-text="counter"></span> seconds.
        <br>
        chong601's internet was last disconnected <span x-data="{ lastDisconnectUnixRoute: 'blah', currentTime: dayjs(), text: null, render() {this.text = dayjs().to(this.currentTime); console.log(this.text)}}" x-init="setInterval(() => {render()}, 1000)" x-text="text"></span> <br>at <span x-data="{ lastDisconnectUnixRoute: 'blah', text: dayjs().tz('Asia/Kuala_Lumpur').format('YYYY-MM-DD HH:mm:ss ZZ')}" x-text="text"></span>.
        <br><br>`
        This is the 26th time it has disconnected since <span x-data="{ text: dayjs().tz('Asia/Kuala_Lumpur').format('YYYY-MM-DD')}" x-text="text"></span>.
    </h5>
{{--    <h5>--}}
{{--        The nets has gone away at <span x-data="{ lastDisconnectUnixRoute: 'blah', text: dayjs().tz('Asia/Kuala_Lumpur').format('YYYY-MM-DD HH:mm:ss ZZ')}" x-text="text"></span>.<br>Thank Telekom Malaysia (AS 4788) for that!<br>--}}
{{--        This is the 26th time it has disconnected.--}}
{{--    </h5>--}}
    <h2>Check out how fucked is chong601's internet <a href="{{ route('ping:charts:index') }}" target="_blank">here</a>.</h2>
    <div class="letter" style="margin-top: 150px">
        This site is a parody/tribute to <a href="https://twitter.com/lozzd" target="_blank">lozzd</a>/<a href="https://laur.ie" target="_blank">Laurie</a>'s/<a href="https://twitter.com/TheGuyDanish" target="_blank">Danish's</a> howfuckedismy.com series at
        <a target="_blank" href="http://howfuckedismydatabase.com">howfuckedismydatabase.com</a>, <a target="_blank" href="http://howfuckedismydistro.com">howfuckedismydistro.com</a> and
        <a target="_blank" href="http://howfuckedismyhypervisor.com">howfuckedismyhypervisor.com</a>
        <br>
        site by <a href="https://chong601.is.whatsmyname.my">chong601</a>, <s>forced</s>inspired by <a href="http://reddit.com/r/Homelab" target="_blank">Homelab</a> <a href="https://discord.gg/homelab" target="_blank">Discord</a>
    </div>
</x-subpage-layout>
