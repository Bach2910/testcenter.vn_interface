const path = require('path');

module.exports = {
    entry: './src/index.js', // Tệp JavaScript chính
    output: {
        filename: 'bundle.js', // Tên tệp đầu ra
        path: path.resolve(__dirname, 'dist'), // Thư mục lưu trữ
    },
    module: {
        rules: [
            {
                test: /\.css$/, // Quy tắc cho các tệp CSS
                use: ['style-loader', 'css-loader'], // Dùng style-loader và css-loader
            },
            {
                test: /\.(scss|sass)$/, // Quy tắc cho các tệp SCSS hoặc SASS
                use: ['style-loader', 'css-loader', 'sass-loader'], // Dùng sass-loader
            },
            {
                test: /\.(png|jpg|jpeg|gif|svg)$/, // Quy tắc cho hình ảnh
                type: 'asset/resource',
            },
        ],
    },
};
