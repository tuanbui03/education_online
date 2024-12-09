# Dự Án Trang Web Bán Khóa Học và Học Online

## Mô tả dự án

Dự án này nhằm tạo ra một nền tảng trực tuyến cho phép người dùng mua và tham gia các khóa học trực tuyến. Trang web cung cấp một loạt các khóa học từ nhiều lĩnh vực khác nhau, giúp người học có thể tiếp cận kiến thức một cách dễ dàng và linh hoạt.

## Tính năng chính

-   Đăng ký và Đăng nhập: Người dùng có thể tạo tài khoản, đăng nhập và quản lý thông tin cá nhân của mình.
-   Danh sách khóa học: Hiển thị danh sách các khóa học hiện có với các thông tin chi tiết như mô tả, giá cả, thời lượng và giảng viên.
-   Tìm kiếm và Bộ lọc: Cho phép người dùng tìm kiếm khóa học theo từ khóa và lọc khóa học theo các tiêu chí như lĩnh vực, mức giá và đánh giá.
-   Giỏ hàng và Thanh toán: Người dùng có thể thêm các khóa học vào giỏ hàng và tiến hành thanh toán trực tuyến.
-   Quản lý học tập: Người dùng có thể theo dõi tiến độ học tập của mình, truy cập vào các bài giảng và tài liệu học tập.
-   Đánh giá và Bình luận: Người dùng có thể đánh giá và để lại bình luận về các khóa học mà họ đã tham gia.

## Công nghệ sử dụng

-   Backend: PHP với framework Laravel
-   Frontend: HTML, CSS, JavaScript với framework Vue.js
-   Database: MySQL
-   Hosting: Được triển khai trên AWS

## Cài đặt và chạy dự án

### Yêu cầu hệ thống

-   PHP >= 7.3
-   Composer
-   MySQL

### Các bước cài đặt

1. Clone repository của dự án:
    ```bash
    git clone https://github.com/tuanbui03/education_online
    ```
2. Điều hướng đến thư mục của dự án
    ```bash
    cd yourproject
    ```
3. Cài đặt các gói phụ thuộc bằng Composer
    ```bash
    composer install
    ```
4. Sao chép tệp .env.example thành .env và cấu hình các thông số môi trường
    ```bash
    cp .env.example .env
    ```
