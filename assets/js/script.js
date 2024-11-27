// Slide sản phẩm
let currentSlide = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".slide");
  if (!slides || slides.length === 0) {
    console.error("Không tìm thấy phần tử '.slide'");
    return;
  }

  if (index >= slides.length) {
    currentSlide = 0;
  } else if (index < 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide = index;
  }

  const offset = -currentSlide * 100;
  document.querySelector(".slides").style.transform = `translateX(${offset}%)`;
}

function changeSlide(step) {
  showSlide(currentSlide + step);
}

// Tự động chuyển slide sau 5 giây
setInterval(() => {
  changeSlide(1);
}, 5000);

// Hiển thị slide đầu tiên
document.addEventListener("DOMContentLoaded", () => {
  showSlide(currentSlide);
});

// JS cua Quyen
// Slide sản phẩm
document.addEventListener("DOMContentLoaded", () => {
  const productList = document.querySelector(".product-list-slide");
  const productItem = document.querySelector(".product-list-slide .col-xl-3");

  if (!productList || !productItem) {
    console.error("Không tìm thấy danh sách sản phẩm hoặc sản phẩm.");
    return;
  }

  const productWidth = productItem.offsetWidth;
  let scrollPosition = 0;

  document.getElementById("prevButton").addEventListener("click", function () {
    scrollPosition = Math.max(scrollPosition - productWidth, 0);
    productList.scrollTo({
      left: scrollPosition,
      behavior: "smooth",
    });
  });

  document.getElementById("nextButton").addEventListener("click", function () {
    scrollPosition = Math.min(
      scrollPosition + productWidth,
      productList.scrollWidth - productList.clientWidth
    );
    productList.scrollTo({
      left: scrollPosition, // Sửa thành `left` thay vì `right`
      behavior: "smooth",
    });
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

// Set active step and show corresponding content
function setActiveStep(step) {
  document.querySelectorAll(".step").forEach((stepElem) => {
    stepElem.classList.remove("active");
  });
  for (let i = 1; i <= step; i++) {
    document
      .querySelector(".step:nth-child(" + i + ")")
      .classList.add("active");
  }

  const progressLineActive = document.getElementById("progressLineActive");
  const maxWidth = 64;
  progressLineActive.style.width = ((step - 1) / 2) * maxWidth + "%";

  document.querySelectorAll(".step-content").forEach((content) => {
    content.classList.remove("active");
  });
  document.getElementById(`step${step}Content`).classList.add("active");
}

// Next step logic
function nextStep(currentStep, nextStep) {
  let isValid = false;
  
  if (currentStep === 1) {
    isValid = validateStep1();
  } else if (currentStep === 2) {
    isValid = validateStep2();
  }

  if (isValid) {
    setActiveStep(nextStep);
  }
}

// Step 1 validation
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

  // // Validate Email
  // const email = document.getElementById("email").value.trim();
  // const emailError = document.getElementById("emailError");
  // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  // if (!emailRegex.test(email)) {
  //   emailError.style.display = "block";
  //   isValid = false;
  // } else {
  //   emailError.style.display = "none";
  // }

  // // Validate Số điện thoại
  // const phone = document.getElementById("phone").value.trim();
  // const phoneError = document.getElementById("phoneError");
  // if (phone === "") {
  //   phoneError.style.display = "block";
  //   isValid = false;
  // } else {
  //   phoneError.style.display = "none";
  // }

  return isValid;
}

// Step 2 validation
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


document.addEventListener("DOMContentLoaded", function () {
  // Lấy tất cả các khung chứa radio button
  const formChecks = document.querySelectorAll(".form-check");

  // Thêm sự kiện click vào mỗi khung .form-check
  formChecks.forEach(function (formCheck) {
    formCheck.addEventListener("click", function () {
      // Lấy radio button bên trong mỗi khung
      const radioButton = formCheck.querySelector('input[type="radio"]');
      if (radioButton) {
        // Chọn radio button khi click vào khung
        radioButton.checked = true;
      }
    });
  });
});

function nextStep(currentStep, nextStep) {
  let isValid = false;

  if (currentStep === 1) {
    isValid = validateStep1();
  } else if (currentStep === 2) {
    isValid = validateStep2();
  }

  if (isValid) {
    // Chuyển nội dung bước
    document
      .getElementById(`step${currentStep}Content`)
      .classList.remove("active");
    document.getElementById(`step${nextStep}Content`).classList.add("active");

    // Gọi hàm setActiveStep để cập nhật trạng thái và thanh tiến trình
    setActiveStep(nextStep);
  }
}

function toggleAllProducts(selectAllCheckbox) {
  const checkboxes = document.querySelectorAll(".product-checkbox");
  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAllCheckbox.checked;
  });
  updateTotal();
}

function updateSelectAll() {
  const selectAllCheckbox = document.getElementById("select-all");
  const checkboxes = document.querySelectorAll(".product-checkbox");
  selectAllCheckbox.checked = Array.from(checkboxes).every((cb) => cb.checked);
  updateTotal();
}

function updateTotal() {
  const checkboxes = document.querySelectorAll(".product-checkbox:checked");
  const selectedCount = document.getElementById("selected-count");
  const selectedCounts = document.getElementById("selected-counts");
  const totalPrice = document.getElementById("total-price");
  const totalAllPrice = document.getElementById("total-allprice");

  let total = 0;
  checkboxes.forEach((cb) => {
    const priceElement = cb
      .closest(".category-form-space")
      .querySelector(".price-value");
    total += parseInt(priceElement.textContent);
  });

  selectedCount.textContent = checkboxes.length;
  selectedCounts.textContent = checkboxes.length;
  totalPrice.textContent = total.toLocaleString("vi-VN");
  totalAllPrice.textContent = total.toLocaleString("vi-VN");
}

