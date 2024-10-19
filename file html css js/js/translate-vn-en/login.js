// Hàm để khôi phục giá trị đã chọn từ localStorage khi trang được tải lại
function restoreSelectedOption() {
    const savedOption = localStorage.getItem('selectedLanguage');
    if (savedOption) {
        document.querySelectorAll('.option').forEach(function(option) {
            if (option.querySelector('span').textContent === savedOption) {
                let selectedText = option.querySelector('span').textContent;
                document.querySelector('#selected-text').innerHTML = `
                        <img src="${option.querySelector('img').src}" alt="${selectedText}" class="option-img">
                        <span>${selectedText}</span>
                        <span class="arrow">&#9662;</span>`;
                option.classList.add('selected'); // Đánh dấu tùy chọn đã được chọn
            }
        });
    }
}

window.addEventListener('load', function() {
    restoreSelectedOption(); // Khôi phục tùy chọn đã chọn khi tải trang
});

document.querySelector('.selected-option').addEventListener('click', function() {
    let optionList = document.querySelector('.option-list');
    let arrow = document.querySelector('.arrow');

    // Kiểm tra trạng thái hiển thị và xoay mũi tên
    if (optionList.style.display === 'block') {
        optionList.style.display = 'none'; // Thu lại danh sách
        arrow.style.transform = 'rotate(0deg)'; // Mũi tên chỉ xuống
    } else {
        optionList.style.display = 'block'; // Mở danh sách
        arrow.style.transform = 'rotate(180deg)'; // Mũi tên chỉ lên
    }
});

document.querySelectorAll('.option').forEach(function(option) {
    option.addEventListener('click', function() {
        let selectedText = this.querySelector('span').textContent;
        document.querySelector('#selected-text').innerHTML = `
                <img src="${this.querySelector('img').src}" alt="${selectedText}" class="option-img">
                <span>${selectedText}</span>
                <span class="arrow">&#9662;</span>`;

        // Lấy giá trị của tùy chọn được chọn
        let selectedValue = this.getAttribute('data-value');

        // Lưu giá trị đã chọn vào localStorage
        localStorage.setItem('selectedLanguage', selectedText);

        // Gọi hàm điều hướng
        navigateToUrl(selectedValue);

        // Ẩn danh sách tùy chọn sau khi chọn
        document.querySelector('.option-list').style.display = 'none';
    });
});

// Hàm điều hướng dựa trên giá trị của tùy chọn
function navigateToUrl(optionValue) {
    if (optionValue === 'option1') {
        window.location.href = 'http://127.0.0.1:8000/login';
    } else if (optionValue === 'option2') {
        window.location.href = 'http://127.0.0.1:8000/login/vn';
    }
}
