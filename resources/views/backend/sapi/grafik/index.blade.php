@php
    $keys = [];
    $values = [];
    
    $data = $sapi->records()->orderBy('created_at', 'DESC')->limit(100)->get();
    
    foreach ($data as $value) {
        $keys[] = \App\Helpers\Formatter::datetime($value->created_at);
        $values[] = $value->value;
    }

    $keys = array_reverse($keys);
    $values = array_reverse($values);
@endphp
<div class="tab-pane fade pt-4" id="grafik" role="tabpanel" aria-labelledby="grafik-tab">
    <div class="mt-3">
        <p class="p-2">
            Menampilkan 100 data terakhir(bila ada) sebagai grafik
        </p>
        <canvas id="myChart"></canvas>
    </div>
</div>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
    <script>
        const config = {
            type: 'bar',
            data: {
                labels: {!! json_encode($keys) !!},
                datasets: [{
                    label: '# of Record',
                    data: {!! json_encode($values) !!},
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        const myctx = document.getElementById('myChart');
        new Chart(myctx, config);
    </script>
@endsection
