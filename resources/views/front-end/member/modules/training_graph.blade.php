<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Training grafiek</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col md 12">
                <canvas id="lineChart" height="70"></canvas>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script src="/js/back-end/plugins/chartJs/Chart.min.js"></script>

    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
                datasets: [
                    {
                        label: "Gevolgde trainingen",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: JSON.parse("{{ json_encode($lessonsPerMonth) }}")
                    },
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        });
    </script>
@endsection
