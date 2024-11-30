<div class="col xl-12">
    <div class="detail-bgr">
        <div class="progress-container">
            <div class="step-wrapper">
                <div class="step active">
                    <div class="circle">1</div>
                    <div class="price">Thông tin</div class="price">
                </div>
                <div class="step">
                    <div class="circle">2</div>
                    <div class="price">Thanh toán</div class="price">
                </div>
                <div class="step">
                    <div class="circle">3</div>
                    <div class="price">Vào học</div class="price">
                </div>
            </div>
            <div class="progress-line-active" id="progressLineActive"></div>
        </div>

        <!-- Thanh toán bước 1 -->
        <div id="step1Content" class="step-content active">
            <div class="detail-main">
                <div class="detail-course-main-body">
                    <div class="bgr-step">
                        <div class="detail-main">
                            <form class="form-pay-left" id="step1Form" action="#" method="post">
                                <p class="price">Thông tin người mua</p>
                                <div class="mb-3">
                                    <label for="name" class="rating">Họ tên:</label>
                                    <input type="text" class="rating form-control" id="name" placeholder="Nhập đầy đủ họ tên của bạn" name="name">
                                    <small id="nameError" class="count text-danger" style="display:none;">Vui lòng nhập họ tên.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="rating">Email:</label>
                                    <input type="email" class="rating form-control" id="email" placeholder="Email của bạn" name="email">
                                    <small id="emailError" class="count text-danger" style="display:none;">Vui lòng nhập email hợp lệ.</small>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="rating">Số điện thoại:</label>
                                    <input type="tel" class="rating form-control" id="phone" placeholder="Số điện thoại của bạn" name="phone">
                                    <small id="phoneError" class="count text-danger" style="display:none;">Vui lòng nhập số điện thoại.</small>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-danger w-100 btn-lg p-3 fs-3" onclick="nextStep(1, 2)">Gửi</button>
                        </div>
                    </div>

                    <div class="bgr-step">
                        <div class="detail-main">
                        <form class="form-pay-right" action="">
                            <div class="payment-summary">
                                <div class="price">Đơn hàng: (<span class="selected-count-pay"><?= count($cartItems) ?></span> khóa học)</div>
                                <hr>
                                <?php foreach ($cartItems as $item): ?>
                                    <div class="check-counts-pay top-star d-flex justify-content-between">
                                        <div class="cart-pading">
                                            <div class="rating"><?= $item['TenKhoaHoc'] ?></div>
                                        </div>
                                        <div>
                                            <p class="price"><?= number_format($item['Gia'], 0, ',', '.') ?>đ</p>
                                            <span class="price"><del><?= number_format($item['Gia'], 0, ',', '.') ?>đ</del></span>
                                        </div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            </div>
                            <!-- Tổng cộng -->
                            <div class="total-summary detail-course-main-body">
                                <div class="cart-pading">
                                    <div class="price">Tổng cộng</div>
                                </div>
                                <p class="price text-danger">
                                    <span class="total-allprice"><?= number_format(array_sum(array_column($cartItems, 'Gia')), 0, ',', '.') ?></span>đ
                                </p>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thanh toán bước 2 -->
        <div id="step2Content" class="step-content">
            <div class="detail-main">
                <div class="detail-course-main-body">
                    <div class="bgr-step">
                        <div class="detail-main">
                            <form  class="form-pay-left" id="paymentForm" action="#" method="post">
                                <p class="fw-bold fs-4 mb-4">Hình thức thanh toán</p>
                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="bank" class="count ms-3 form-check-label flex-grow-1">Chuyển khoản ngân hàng</label>
                                    <img src="assets\image\logo\logo_bankStranfer.png" alt="Bank Transfer" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="momo" class="count ms-3 form-check-label flex-grow-1">Ví điện tử MoMo</label>
                                    <img src="assets\image\logo\logo_momo.png" alt="MoMo" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="napas" class="count ms-3 form-check-label flex-grow-1">Thẻ ATM / Internet Banking</label>
                                    <img src="assets\image\logo\logo_napas.png" alt="Napas" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="visa" class="count ms-3 form-check-label flex-grow-1">Thẻ quốc tế VISA / Master</label>
                                    <img src="assets\image\logo\logo_visa.png" alt="Visa" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="shopeepay" class="count ms-3 form-check-label flex-grow-1">Ví điện tử ShopeePay</label>
                                    <img src="assets\image\logo\log_shoppe.png" alt="ShopeePay" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" class="check-radio">
                                    <label for="zalopay" class="count ms-3 form-check-label flex-grow-1">Ví điện tử ZaloPay</label>
                                    <img src="assets\image\logo\logo_zalo.png" alt="ZaloPay" class="ms-3" width="40">
                                </div>
                            </form>
                            <small id="paymentError" class="count text-danger" style="display:none;">Vui lòng chọn một phương thức thanh toán.</small>
                            <button type="submit" class="btn btn-danger w-100 btn-lg p-3 fs-3" onclick="nextStep(2, 3)">Tiến hành thanh toán</button>
                        </div>
                    </div>
                    <div class="bgr-step">
                        <div class="detail-main">
                        <form class="form-pay-right" action="">
                            <div class="payment-summary">
                                <div class="price">Đơn hàng: (<span class="selected-count-pay"><?= count($cartItems) ?></span> khóa học)</div>
                                <hr>
                                <?php foreach ($cartItems as $item): ?>
                                    <div class="check-counts-pay top-star d-flex justify-content-between">
                                        <div class="cart-pading">
                                            <div class="rating"><?= $item['TenKhoaHoc'] ?></div>
                                        </div>
                                        <div>
                                            <p class="price"><?= number_format($item['Gia'], 0, ',', '.') ?>đ</p>
                                            <span class="price"><del><?= number_format($item['Gia'], 0, ',', '.') ?>đ</del></span>
                                        </div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            </div>
                            <!-- Tổng cộng -->
                            <div class="total-summary detail-course-main-body">
                                <div class="cart-pading">
                                    <div class="price">Tổng cộng</div>
                                </div>
                                <p class="price text-danger">
                                    <span class="total-allprice"><?= number_format(array_sum(array_column($cartItems, 'Gia')), 0, ',', '.') ?></span>đ
                                </p>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thanh toán bước 3 -->
        <div id="step3Content" class="step-content">
            <div class="detail-main">
                <div class="bgr-step">
                    <div class="step-flex">
                        <div class="detail-main">
                            <div class="step-container">
                                <div class="order-success my-3">
                                    <i class="fas fa-check-circle"></i> ĐẶT HÀNG THÀNH CÔNG!
                                </div>
                                <p class="count">Vui lòng chuyển khoản trong 15 phút để giữ ưu đãi</p>
                                <div class="step-timer">14:59</div>
                                <table class="table table-bordered border-dark text-left">
                                    <tbody>
                                        <tr>
                                            <th class="price">Tên tài khoản</th>
                                            <td class="rating">Công ty cổ phần đào tạo trực tuyến QTP edu</td>
                                        </tr>
                                        <tr>
                                            <th class="price">Số tài khoản</th>
                                            <td class="rating ">
                                                <span class="count">0988133043</span> 
                                                <i class="fas fa-qrcode" id="qr-icon"></i>
                                            </td>
                                        </tr>
                                        <!-- Div chứa hình ảnh QR -->
                                        <div id="qr-modal">
                                            <div id="qr-container">
                                                <img src="./assets/image/account/QR.png" alt="QR Code Thanh toán">
                                            </div>
                                        </div>
                                        <tr>
                                            <th class="price">Ngân hàng</th>
                                            <td class="rating">MBBank - chi nhánh Thanh Hóa</td>
                                        </tr>
                                        <tr>
                                            <th class="price">Nội dung</th>
                                            <td class="rating">Thanh toán đơn hàng 1500927</td>
                                        </tr>
                                        <tr>
                                            <th class="price">Số tiền</th>
                                            <td class="rating">
                                                <p class="price text-danger">
                                                    <span class="total-allprice"><?= number_format(array_sum(array_column($cartItems, 'Gia')), 0, ',', '.') ?></span>đ
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a href="<?= BASE_URL ?>/"><button class="btn btn-danger btn-lg p-3 fs-3">Xác nhận đã chuyển khoản</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
  // Hàm khởi tạo đếm ngược
  function startCountdown(durationInSeconds, displayElement) {
    let remainingTime = durationInSeconds;

    // Hàm cập nhật hiển thị thời gian
    function updateTimer() {
      // Tính số phút và giây
      const minutes = Math.floor(remainingTime / 60);
      const seconds = remainingTime % 60;

      // Hiển thị thời gian ở định dạng mm:ss
      displayElement.textContent = 
        `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

      // Giảm thời gian còn lại
      if (remainingTime > 0) {
        remainingTime--;
      } else {
        clearInterval(timerInterval); // Dừng đếm khi hết thời gian
        displayElement.textContent = "Đã hết thời gian, vui lòng thanh toán lại!"; // Thông báo hết giờ
      }
    }

    // Cập nhật mỗi giây
    const timerInterval = setInterval(updateTimer, 1000);

    // Gọi lần đầu để hiển thị ngay lập tức
    updateTimer();
  }

  // Tìm phần tử hiển thị
  const timerElement = document.querySelector('.step-timer');

  // Bắt đầu đếm ngược 15 phút (15 * 60 giây)
  startCountdown(15 * 60, timerElement);


  // Lấy các phần tử
const qrIcon = document.getElementById('qr-icon');
const qrModal = document.getElementById('qr-modal');

// Hiển thị modal khi nhấp vào icon QR
qrIcon.addEventListener('click', () => {
    qrModal.style.display = 'flex';
});

// Ẩn modal khi nhấp ra ngoài vùng chứa ảnh QR
qrModal.addEventListener('click', (e) => {
    if (e.target === qrModal) {
        qrModal.style.display = 'none';
    }
});

</script>

<style>
    /* Ẩn modal mặc định */
#qr-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Màu nền mờ */
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

#qr-container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

#qr-container img {
    max-width: 300px;
    max-height: 300px;
}

</style>