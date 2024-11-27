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
                                <div>
                                    <div class="price">Đơn hàng: (<span id="selected-count">0</span> khóa học)</div>
                                    <hr>
                                    <?php foreach ($cartItems as $item): ?>
                                        <div class="top-star d-flex justify-content-between">
                                            <div class="cart-pading">
                                                <div class="rating"><?= $item['TenKhoaHoc'] ?></div>
                                            </div>
                                            <div>
                                                <p class="price"><?= $item['Gia'] ?>đ</p>
                                                <span class="price"><del><?= $item['Gia'] ?>đ</del></span>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php endforeach; ?>
                                </div>
                                <div class="detail-course-main-body">
                                    <div class="cart-pading">
                                        <div class="price">Tổng cộng</div>
                                    </div>
                                    <p class="price text-danger">
                                        <span id="checkout-total-price">0</span>đ
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
                                    <input type="radio" name="payment" id="">
                                    <label for="bank" class="count form-check-label flex-grow-1">Chuyển khoản ngân hàng</label>
                                    <img src="assets\image\logo\logo_bankStranfer.png" alt="Bank Transfer" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" id="">
                                    <label for="momo" class="count form-check-label flex-grow-1">Ví điện tử MoMo</label>
                                    <img src="assets\image\logo\logo_momo.png" alt="MoMo" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" id="">
                                    <label for="napas" class="count form-check-label flex-grow-1">Thẻ ATM / Internet Banking</label>
                                    <img src="assets\image\logo\logo_napas.png" alt="Napas" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" id="">
                                    <label for="visa" class="count form-check-label flex-grow-1">Thẻ quốc tế VISA / Master</label>
                                    <img src="assets\image\logo\logo_visa.png" alt="Visa" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" id="">
                                    <label for="shopeepay" class="count form-check-label flex-grow-1">Ví điện tử ShopeePay</label>
                                    <img src="assets\image\logo\log_shoppe.png" alt="ShopeePay" class="ms-3" width="40">
                                </div>

                                <div class="form-check border border-primary rounded p-3 mb-3 d-flex align-items-center">
                                    <input type="radio" name="payment" id="">
                                    <label for="zalopay" class="count form-check-label flex-grow-1">Ví điện tử ZaloPay</label>
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
                                <div>
                                    <div class="title-product">Đơn hàng: (<span id="selected-courses">0</span> khóa học)</div>
                                    <hr>
                                    <?php foreach ($cartItems as $item): ?>
                                        <div class="top-star d-flex justify-content-between">
                                            <div class="cart-pading">
                                                <div class="rating"><?= $item['TenKhoaHoc'] ?></div>
                                            </div>
                                            <div>
                                                <p class="price"><?= $item['Gia'] ?>đ</p>
                                                <span class="price"><del><?= $item['Gia'] ?>đ</del></span>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php endforeach; ?>
                                </div>
                                <div class="detail-course-main-body">
                                    <div class="cart-pading">
                                        <div class="price">Tổng cộng</div>
                                    </div>
                                    <p class="price text-danger">8.599.000đ</p>
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
                                            <td class="rating">******************** <i class="fas fa-qrcode"></i></td>
                                        </tr>
                                        <tr>
                                            <th class="price">Ngân hàng</th>
                                            <td class="rating">BIDV - chi nhánh Cầu Giấy</td>
                                        </tr>
                                        <tr>
                                            <th class="price">Nội dung</th>
                                            <td class="rating">Thanh toán đơn hàng 1500927</td>
                                        </tr>
                                        <tr>
                                            <th class="price">Số tiền</th>
                                            <td class="rating">699,000₫</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button class="btn btn-danger btn-lg p-3 fs-3">Xác nhận đã chuyển khoản</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>