<div>
    <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>

    <!-- Stats -->
    <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Total Scholarships -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Program Beasiswa
                            </dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">
                                    <?= $total_scholarships ?>
                                </div>
                                <div class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                    <?= $active_scholarships ?> aktif
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <a href="<?= base_url('admin/scholarships') ?>" class="font-medium text-blue-700 hover:text-blue-900">
                        Lihat semua
                    </a>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Pendaftar
                            </dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">
                                    <?= $total_applications ?>
                                </div>
                                <div class="ml-2 flex items-baseline text-sm font-semibold text-yellow-600">
                                    <?= $pending_applications ?> menunggu
                                </div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <a href="<?= base_url('admin/applications') ?>" class="font-medium text-blue-700 hover:text-blue-900">
                        Lihat semua
                    </a>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Pengguna
                            </dt>
                            <dd class="text-2xl font-semibold text-gray-900">
                                <?= $total_users ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <a href="<?= base_url('admin/users') ?>" class="font-medium text-blue-700 hover:text-blue-900">
                        Lihat semua
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="mt-8 grid grid-cols-1 gap-5 lg:grid-cols-2">
        <!-- Monthly Applications -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Pendaftar per Bulan
                </h3>
                <div class="mt-2">
                    <canvas id="monthlyApplicationsChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Applications by Status -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Status Pendaftaran
                </h3>
                <div class="mt-2">
                    <canvas id="applicationsByStatusChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="mt-8 grid grid-cols-1 gap-5 lg:grid-cols-2">
        <!-- Recent Applications -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Pendaftar Terbaru
                </h3>
                <div class="mt-4 flow-root">
                    <div class="-my-5 divide-y divide-gray-200">
                        <?php foreach ($recent_applications as $application): ?>
                            <div class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-blue-100">
                                            <span class="text-sm font-medium leading-none text-blue-700">
                                                <?= substr($application->name, 0, 1) ?>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            <?= $application->name ?>
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            <?= $application->scholarship_name ?>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="<?= base_url('admin/applications/view/' . $application->id) ?>"
                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                            Lihat
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Users -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="p-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Pengguna Terbaru
                </h3>
                <div class="mt-4 flow-root">
                    <div class="-my-5 divide-y divide-gray-200">
                        <?php foreach ($recent_users as $user): ?>
                            <div class="py-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-green-100">
                                            <span class="text-sm font-medium leading-none text-green-700">
                                                <?= substr($user->name, 0, 1) ?>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            <?= $user->name ?>
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            <?= $user->email ?>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="<?= base_url('admin/users/view/' . $user->id) ?>"
                                            class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                            Lihat
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart Initialization -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Monthly Applications Chart
        const monthlyCtx = document.getElementById('monthlyApplicationsChart').getContext('2d');
        new Chart(monthlyCtx, {
            type: 'line',
            data: {
                labels: <?= json_encode(array_column($monthly_applications, 'month')) ?>,
                datasets: [{
                    label: 'Pendaftar',
                    data: <?= json_encode(array_column($monthly_applications, 'count')) ?>,
                    borderColor: '#3B82F6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });

        // Applications by Status Chart
        const statusCtx = document.getElementById('applicationsByStatusChart').getContext('2d');
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: <?= json_encode(array_column($application_by_status, 'status')) ?>,
                datasets: [{
                    data: <?= json_encode(array_column($application_by_status, 'count')) ?>,
                    backgroundColor: [
                        '#3B82F6', // Blue
                        '#10B981', // Green
                        '#F59E0B', // Yellow
                        '#EF4444' // Red
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    });
</script>