<div class="py-6 mx-auto space-y-6 max-w-full sm:py-6">
    <div class="px-4 py-6 bg-white rounded-lg shadow-md dark:bg-gray-800" wire:ignore>
        <h1>Pesquisas por setor de Atendimento e Agendamento</h1>
        <span class="text-xs font-light text-gray-500">Exibe o total de avaliações recebidas ordenadas por setor no mês atual.</span>
        <div class="h-24 bg-white" id="chartAtendimento">

        </div>
    </div>

    <script type="module">
        //CHART COM AS PESQUISAS POR MES
        var chartAtendimentoOptions = {
            chart: {
                type: 'bar',
                height: 250,
                zoom: {
                    enabled: true,
                    type: 'x',
                    autoScaleYaxis: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '80%'
                },
            },
            series: [{
                name: 'Pesquisas por setor',
                data: @json($faturas)
            }],
            xaxis: {
                categories: @json($setores),
                //tickPlacement: "on",
                stepSize: 10,

            },

        }
        console.log(@json($sectors));
        var chartAtendimento = new ApexCharts(document.querySelector("#chartAtendimento"), chartAtendimentoOptions);

        chartAtendimento.render();
    </script>
</div>