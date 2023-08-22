@extends('admin.layouts.template')

@section('content')
    <div class="section-body">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Doughnut Chart</h4>
                    </div>
                    <div class="card-body">
                        <div class="recent-report__chart">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var data = @json($roleCounts);

            // Calculate the total number of users
            var totalUsers = Object.values(data).reduce((a, b) => a + b, 0);

            // Add the label and value for total users
            data['Total Users'] = totalUsers;

            var ctx = document.getElementById('doughnutChart').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: Object.keys(data),
                    datasets: [{
                        data: Object.values(data),
                        backgroundColor: [
                            '#007bff', // blue
                            '#36a2eb',
                            '#cc65fe',
                            '#ffce56',
                            '#45c490',
                            '#ffa726',
                        ],
                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                },
            });
        });
    </script>
@endsection
