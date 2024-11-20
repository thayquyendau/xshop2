<style>
.lienhe-title {
    color: #FF0004;
    font-size: 50px;
    font-weight: bold;
    padding: 20px 0 20px 20px;
}

/* Bố cục các cột */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.col {
    flex: 1;
}

.col.xl-6 {
    flex: 0 0 49%; 
}

.col.xl-12 {
    flex: 0 0 100%;
}


/* Phần thông tin liên hệ */
.lienhe {
    padding-right: 20px;
    padding-left: 20px;
}

.lienhe>h4 {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.lienhe>p{
    font-size: 19px;
    color: #555;
    margin-bottom: 15px;
}

/* Bản đồ iframe */
.lienhe>iframe {
    margin-top:  40px;

}
form {
    max-width: 500px; /* Giới hạn chiều rộng form */
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Kiểu dáng của mỗi dòng */
form p {
    display: inline-block; /* Hiển thị cùng dòng */
    width: 30%; /* Chiều rộng cho thẻ <p> */
    font-size: 19px;
    font-weight: bold;
    color: #333;
    margin: 10px 0; /* Khoảng cách giữa các dòng */
}

/* Kiểu dáng cho input */
form input[type="text"] {
    display: inline-block;
    width: 65%; /* Input chiếm phần còn lại */
    padding: 8px;
    font-size: 14px;
    border-radius: 8px ;
    outline: none; /* Bỏ viền xanh khi focus */
    margin-bottom: 10px;
}

/* Nút gửi yêu cầu */
form button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 16px;
    color: #fff; /* Màu chữ trắng */
    background: #FF0004; /* Màu đỏ đô */
    border: none; /* Bỏ viền nút */
    border-radius: 8px; /* Bo góc nhẹ */
    cursor: pointer;
    text-align: center;
    font-weight: bold;
}

</style>
<div class="col xl-12">
    <div class="banner">
        <img class="banner-img" src="./assets/image/banner/Frame 427319557.png" alt="">
    </div>
    <div class="row lienhe-list">
        <div class="col xl-6 md-6">
            <h1 class="lienhe-title">Liên Hệ với QTPedu</h1>
            <div class="lienhe">
                <h4>Trụ sở chính:</h4>
                <p>P.Đông Vệ, TP.Thanh Hóa, Thanh Hóa</p>
                <h4>Hotline: </h4><p>19008386</p>
                <h4>Email: </h4><p>qtpedu@gmail.com</p>
                <h4>Giờ làm việc:</h4>
                <p>08h00 - 17h30, Thứ 2 - Thứ 7</p>
                
            </div>
        </div>
        <div class="col xl-6 md-6">
            <div class="lienhe">     
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.553083505356!2d105.7798723741354!3d19.774133781579494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f98a5d8d886b%3A0x752428b3be1349a8!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1731855738858!5m2!1svi!2s" width="100%" height=356px ></iframe>
            </div>
        </div>
        <div class="lienhe">
            <h4>Hỗ trợ 24/7:</h4>
            <p>Dù bạn gặp khó khăn trong học tập hay cần giải đáp thắc mắc về khóa học, QTPedu cam kết có đội ngũ nhân viên hỗ trợ trực tuyến sẵn sàng đồng hành cùng bạn, giải đáp và hỗ trợ kịp thời.</p>
            <h4>Hình Thức Liên Hệ Trực Tuyến:</h4>
            <p>Hãy gửi yêu cầu hoặc câu hỏi của bạn bằng cách điền vào biểu mẫu dưới đây. Chúng tôi sẽ liên hệ lại ngay khi nhận được thông tin:</p>
        <form action="">
            <p>Họ và tên:</p>
            <input type="text">
            <p>Email:</p>
            <input type="text">
            <p>Số điện thoại:</p>
            <input type="text" maxlength="10">
            <p>Chủ đề:</p>
            <input type="text">
            <p>Nội dung yêu cầu:</p>
            <input type="text">
            <button>Gửi yêu cầu</button>
        </form> 
        <p>Tham gia cùng cộng đồng học viên sôi động tại QTPedu để cập nhật các khóa học mới nhất, tham gia các sự kiện học tập và nhận tư vấn từ đội ngũ chuyên gia.</p><br>
        <h4>QTPedu - Cùng Bạn Học Để Thành Công, Chinh Phục Tương Lai!</h4>
        </div>
    </div> 
</div>