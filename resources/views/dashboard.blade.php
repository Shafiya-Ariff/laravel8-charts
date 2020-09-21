<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laravel Chart
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Chart's container -->
        <div id="chart" style="height: 300px;"></div>
        <!-- Charting library -->
        <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
        <!-- Your application script -->
        <script>
            const chart = new Chartisan({
                el: '#chart',
                url: "@chart('my_chart')",
                hooks: new ChartisanHooks()
                    .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                    .datasets('pie')
                    .axis(false)
            });
        </script>
    </div>
</x-app-layout>
