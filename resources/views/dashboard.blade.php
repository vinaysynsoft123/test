<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome To Dashboard') }}
        </h2>
    </x-slot>

    <div class="container p-4">

        

        <!-- Single Row: 4 Boxes -->
        <div class="flex gap-4 justify-center align-items-center text-center">
            <!-- Total Students -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div class="panel-heading">Total Students</div>
                    <div class="panel-body">
                        <h3>{{ $totalStudents }}</h3>
                    </div>
            </div>

            <!-- Active Students -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div class="panel-heading">Active Students</div>
                    <div class="panel-body">
                        <h3>{{ $activeStudents }}</h3>
                    </div>
            </div>

            <!-- Pending Students -->
                <div class="bg-red-500 shadow-md rounded-lg p-4">
                    <div class="panel-heading">Pending Students</div>
                    <div class="panel-body">
                        <h3>{{ $pendingStudents }}</h3>
                    </div>
            </div>

            <!-- Inactive Students -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div class="panel-heading">Inactive Students</div>
                    <div class="panel-body">
                        <h3>{{ $inactiveStudents }}</h3>
                    </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Student Status Chart</div>
                    <div class="panel-body" style="height:400px;">
                        <canvas id="studentsChart" style="width:100%; height:100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('studentsChart').getContext('2d');
        var studentsChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Active', 'Pending', 'Inactive'],
                datasets: [{
                    data: [{{ $activeStudents }}, {{ $pendingStudents }}, {{ $inactiveStudents }}],
                    backgroundColor: ['#5cb85c', '#f0ad4e', '#d9534f']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: { position: 'bottom' }
            }
        });
    </script>
</x-app-layout>
