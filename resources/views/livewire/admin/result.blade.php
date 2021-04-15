<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Perolehan suara</h6>
            </div>
            <div class="card-body">
                @foreach($results as $result)
                <div class="mb-4">
                    <h4 class="h6 font-weight-bold">{{ $result->nama }}<span class="float-right">{{$result->vote}}</span></h4>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{$result->vote/$sum[0]->total*100}}%;" role="progressbar" aria-valuenow="{{$result->vote}}" aria-valuemin="0" aria-valuemax="{{$sum[0]->total}}"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemilih</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart" width="241" height="245" class="chartjs-render-monitor" style="display: block; width: 240px; height: 240px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Sudah Pilih
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Sisa Pemilih
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/chart.js')}}"></script>
<script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Sudah Pilih", "Sisa pemilih"],
            datasets: [{
                data: [ {{$sudahPilih}}, {{$sum[0]->total-$sudahPilih}} ],
                backgroundColor: ['#4e73df', '#1cc88a', ],
                hoverBackgroundColor: ['#2e59d9', '#17a673', ],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>