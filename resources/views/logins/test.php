<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .custom-select {
            position: relative;
            width: 200px;
            cursor: pointer;
        }

        .selected-option {
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }

        .option-list {
            display: none;
            position: absolute;
            width: 100%;
            background-color: white;
            border: 1px solid #ccc;
            z-index: 100;
        }

        .option {
            padding: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .option-img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .option:hover {
            background-color: #f0f0f0;
        }

    </style>
</head>
<body>
<div class="custom-select">
    <div class="selected-option">
        <span id="selected-text">VIE</span>
    </div>
    <div class="option-list">
        <div class="option" data-value="option1">
            <img src="eng.png" alt="ENG" class="option-img">
            <span>ENG</span>
        </div>
        <div class="option" data-value="option2">
            <img src="vie.png" alt="VIE" class="option-img">
            <span>VIE</span>
        </div>
    </div>
</div>
</body>
</html>
<script>
    document.querySelector('.selected-option').addEventListener('click', function() {
        document.querySelector('.option-list').style.display = 'block';
    });

    document.querySelectorAll('.option').forEach(function(option) {
        option.addEventListener('click', function() {
            let selectedText = this.querySelector('span').textContent;
            document.getElementById('selected-text').textContent = selectedText;

            // Lấy giá trị của tùy chọn được chọn
            let selectedValue = this.getAttribute('data-value');

            // Gọi hàm điều hướng
            navigateToUrl(selectedValue);

            // Ẩn danh sách tùy chọn sau khi chọn
            document.querySelector('.option-list').style.display = 'none';
        });
    });

    // Hàm điều hướng dựa trên giá trị của tùy chọn
    function navigateToUrl(optionValue) {
        if (optionValue === 'option1') {
            window.location.href = 'english-url.html';
        } else if (optionValue === 'option2') {
            window.location.href = 'vietnamese-url.html';
        }
    }

</script>
