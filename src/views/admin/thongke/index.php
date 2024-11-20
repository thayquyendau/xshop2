<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #f4f4f4;
        color: #333;
        font-weight: bold;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #eaeaea;
    }

    tbody td {
        color: #555;
    }

    .bang {
        font-family: Arial, sans-serif;
        color: #333;
        margin:20px;
        font-size: 24px; 
        font-weight: bold; 
        text-align: center; 
        border-bottom: 2px solid #ddd; 
        padding-bottom: 10px;
    }
    canvas {
            max-width: 300px;
            margin: auto;
            display: block;
        }
    </style>
</style>

    <h2 class="bang">Bảng Thống Kê</h2>
    <table>
        <thead>
            <tr>
                <th>Chỉ tiêu</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Số lượng người dùng</td>
                <td><?php echo htmlspecialchars($userCount); ?></td>
            </tr>
            <tr>
                <td>Số lượng sản phẩm</td>
                <td><?php echo htmlspecialchars($productCount); ?></td>
            </tr>
            <tr>  
                <td>Giá sản phẩm cao nhất</td>
                <td><?php echo htmlspecialchars($maxPrice); ?></td>
             </tr> 
              <tr> 
                <td>Giá sản phẩm thấp nhất</td>
                <td><?php echo htmlspecialchars($minPrice); ?></td>
            </tr>
        
            <tr>
                <td>Số lượng loại hàng</td>
                <td><?php echo htmlspecialchars($categoryCount); ?></td>
            </tr>
            <tr>
                <td>Số lượng bình luận</td>
                <td><?php echo htmlspecialchars($commentCount); ?></td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <h2 class="bang">Biểu Đồ Hình Tròn Thống Kê</h2>
    <canvas id="myPieChart"></canvas>
    <script>
        // Dữ liệu biểu đồ
        const data = {
            labels: ['Người Dùng', 'Sản Phẩm', 'Loại Hàng', 'Bình Luận'],
            datasets: [{
                label: 'Số lượng',
                data: [<?php echo $userCount; ?>, <?php echo $productCount; ?>, <?php echo $categoryCount; ?>, <?php echo $commentCount; ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(250, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Tạo biểu đồ
        const ctx = document.getElementById('myPieChart').getContext('2d');
        const myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    },
                    datalabels: {
                        display: true,
                        color: '#fff',
                        anchor: 'center',
                        align: 'center',
                        formatter: (value) => {
                            return value;
                        },
                        font: {
                            weight: 'bold',
                            size: 14
                        }
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    