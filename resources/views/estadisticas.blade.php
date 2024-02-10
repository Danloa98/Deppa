<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados si es necesario -->
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Estadísticas</h1>

        <div class="row">
            <div class="col-md-4">
                <!-- Gráfico de pastel 1 -->
                <canvas id="pastelChart1" width="200" height="200"></canvas>
                <button class="btn btn-primary mt-2" onclick="exportData('pastel1')">Exportar</button>
            </div>

            <div class="col-md-4">
                <!-- Gráfico de pastel 2 -->
                <canvas id="pastelChart2" width="200" height="200"></canvas>
                <button class="btn btn-primary mt-2" onclick="exportData('pastel2')">Exportar</button>
            </div>

            <div class="col-md-4">
                <!-- Gráfico de barras -->
                <canvas id="barChart" width="200" height="200"></canvas>
                <button class="btn btn-primary mt-2" onclick="exportData('bar')">Exportar</button>
            </div>
        </div>
    </div>

    <!-- Elemento input de tipo file oculto -->
    <input type="file" id="fileInput" style="display: none;">

    <!-- Scripts de Chart.js y Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Datos dummy para gráficos
        const pastelData1 = {
            labels: ['A', 'B', 'C'],
            datasets: [{
                data: [300, 200, 100],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        const pastelData2 = {
            labels: ['X', 'Y', 'Z'],
            datasets: [{
                data: [150, 250, 200],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        const barData = {
            labels: ['A', 'B', 'C'],
            datasets: [{
                label: 'Valores',
                data: [10, 20, 30],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56']
            }]
        };

        // Crear gráficos
        const pastelChart1 = new Chart(document.getElementById('pastelChart1'), {
            type: 'pie',
            data: pastelData1
        });

        const pastelChart2 = new Chart(document.getElementById('pastelChart2'), {
            type: 'pie',
            data: pastelData2
        });

        const barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: barData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Función para exportar datos
        function exportData(chartType) {
            var format = prompt("Elegir formato (PDF o CSV):");
            if (format !== null && format.trim() !== "") {
                // Mostrar el selector de archivos
                document.getElementById('fileInput').click();
            }
        }
    </script>
</body>
</html>
