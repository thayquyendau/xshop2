// script.js
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    const offset = -currentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

function changeSlide(step) {
    showSlide(currentSlide + step);
}

// Tự động chuyển slide sau 5 giây
setInterval(() => {
    changeSlide(1);
}, 5000);

// Hiển thị slide đầu tiên
showSlide(currentSlide);

//Slide SanPham
const productList = document.querySelector('.product-list');
const productWidth = document.querySelector('.col').offsetWidth;
let scrollPosition = 0;

document.getElementById('prevButton').addEventListener('click', function () {
    scrollPosition = Math.max(scrollPosition - productWidth, 0);
    productList.scrollTo({
        left: scrollPosition,
        behavior: 'smooth'
    });
});

document.getElementById('nextButton').addEventListener('click', function () {
    scrollPosition = Math.min(scrollPosition + productWidth, productList.scrollWidth - productList.clientWidth);
    productList.scrollTo({
        left: scrollPosition,
        behavior: 'smooth'
    });
});


//Boc loc
document.getElementById("filterButton").addEventListener("click", function () {
    // Chuyển đổi hiển thị của các phần tử radio và toggleCheckbox
    const Radio = document.getElementById("radio");
    const ToggleCheckbox = document.getElementById("toggleCheckbox");

    // Kiểm tra trạng thái hiển thị hiện tại và chuyển đổi tương ứng
    Radio.checked = !Radio.checked;
    ToggleCheckbox.checked = !ToggleCheckbox.checked;
});


//Các bước thanh toán 
function setActiveStep(step) {
    document.querySelectorAll('.step').forEach(stepElem => {
        stepElem.classList.remove('active');
    });
    for (let i = 1; i <= step; i++) {
        document.querySelector('.step:nth-child(' + i + ')').classList.add('active');
    }

    const progressLineActive = document.getElementById('progressLineActive');
    const maxWidth = 64;
    progressLineActive.style.width = ((step - 1) / 2) * maxWidth + '%';

    document.querySelectorAll('.step-content').forEach(content => {
        content.classList.remove('active');
    });
    document.getElementById(`step${step}Content`).classList.add('active');
}

function validateStep1() {
    let isValid = true;

    // Validate Họ tên
    const name = document.getElementById("name").value.trim();
    const nameError = document.getElementById("nameError");
    if (name === "") {
        nameError.style.display = "block";
        isValid = false;
    } else {
        nameError.style.display = "none";
    }

    // Validate Email
    const email = document.getElementById("email").value.trim();
    const emailError = document.getElementById("emailError");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;// Định dạng ký tự hợp lệ của email
    if (!emailRegex.test(email)) {
        emailError.style.display = "block";
        isValid = false;
    } else {
        emailError.style.display = "none";
    }

    // Validate Số điện thoại
    const phone = document.getElementById("phone").value.trim();
    const phoneError = document.getElementById("phoneError");
    if (phone === "") {
        phoneError.style.display = "block";
        isValid = false;
    } else {
        phoneError.style.display = "none";
    }

    return isValid;
}

function validateStep2() {
    const paymentMethods = document.getElementsByName("payment");
    const paymentError = document.getElementById("paymentError");
    let isChecked = false;

    for (const method of paymentMethods) {
        if (method.checked) {
            isChecked = true;
            break;
        }
    }

    if (!isChecked) {
        paymentError.style.display = "block";
        return false;
    } else {
        paymentError.style.display = "none";
        return true;
    }
}

function nextStep(currentStep, nextStep) {
    let isValid = false;

    if (currentStep === 1) {
        isValid = validateStep1();
    } else if (currentStep === 2) {
        isValid = validateStep2();
    }

    if (isValid) {
        // Chuyển nội dung bước
        document.getElementById(`step${currentStep}Content`).classList.remove("active");
        document.getElementById(`step${nextStep}Content`).classList.add("active");

        // Gọi hàm setActiveStep để cập nhật trạng thái và thanh tiến trình
        setActiveStep(nextStep);
    }
}


