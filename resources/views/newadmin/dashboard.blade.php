@extends('newadmin.layout.app')

@section('content')
    <div class="pagetitle">
        <h1>Analytics</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Plan Subscriptions Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plan Subscriptions</h5>
                        <canvas id="subscriptionChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Yearly Revenue Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Yearly Revenue from Plans</h5>
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Service Analytics Chart -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Service Analytics</h5>
                        <canvas id="serviceCountChart" style="max-height: 400px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Plan Subscriptions Chart
            var standardUsers = {{ \App\Models\Plan::countStandardPlans() }};
            var premiumUsers = {{ \App\Models\Plan::countPremiumPlans() }};
            var ctx1 = document.getElementById('subscriptionChart').getContext('2d');
            var subscriptionChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Standard Plans', 'Premium Plans'],
                    datasets: [{
                        label: 'Number of Users',
                        data: [standardUsers, premiumUsers],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
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
            });

            // Yearly Revenue Chart
            var standardPrice = 126000; // Price of Standard Plan
            var premiumPrice = 136000;  // Price of Premium Plan
            var standardRevenue = standardUsers * standardPrice;
            var premiumRevenue = premiumUsers * premiumPrice;
            var ctx2 = document.getElementById('revenueChart').getContext('2d');
            var revenueChart = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ['2023','2024','2025','2026','2027','2028','2029','2030'],
                    datasets: [{
                        label: 'Standard Plan Revenue',
                        data: [standardRevenue],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: true
                    }, {
                        label: 'Premium Plan Revenue',
                        data: [premiumRevenue],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Service Analytics Chart (Pie)
            var serviceLabels = {!! json_encode($serviceCounts->pluck('service')) !!};
            var serviceData = {!! json_encode($serviceCounts->pluck('total')) !!};
            var ctx3 = document.getElementById('serviceCountChart').getContext('2d');
            var serviceCountChart = new Chart(ctx3, {
                type: 'pie',
                data: {
                    labels: serviceLabels,
                    datasets: [{
                        label: 'Number of Services Taken',
                        data: serviceData,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)'
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
@endsection
