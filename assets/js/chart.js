   // Nhận mảng dữ liệu từ PHP
   const phpData = <?php echo json_encode($thongke)?>;
   // Chuyển đổi dữ liệu thành định dạng của Chart.js
   const labels = phpData.map(item => item.loaitk); // Lấy tên tháng
   const sales = phpData.map(item => item.thongke); // Lấy giá trị doanh số

   // Cấu hình biểu đồ
   const chartData = {
       labels: labels,
       datasets: [{
           label: 'Monthly Sales',
           data: sales,
           backgroundColor: 'rgba(75, 192, 192, 0.2)',
           borderColor: 'rgba(75, 192, 192, 1)',
           borderWidth: 1
       }]
   };

   const config = {
       type: 'bar', // Loại biểu đồ (cột)
       data: chartData,
       options: {
           scales: {
               y: {
                   beginAtZero: true
               }
           }
       }
   };

   // Vẽ biểu đồ
   const myChart = new Chart(
       document.getElementById('myChart'),
       config
   );