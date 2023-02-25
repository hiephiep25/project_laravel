Web bán hàng laravel

Công nghệ sử dụng: Laravel, thư viện bumbummen99/shoppingcart, template front-end codelearn

Mô tả đề tài: Xây dựng website bán hàng với các chức năng của user và admin


Công việc hoàn thành:
- thiết kế database, xây dựng web theo mô hình MVC
- hiển thị trang web dưới dạng dữ liệu động
- xây dựng chức năng cho user: đăng nhập, đăng kí, bình luận sản phẩm, đặt hàng, thao tác với giỏ hàng, tìm kiếm sản phẩm, bộ lọc sản phẩm, phân trang
- xây dựng chức năng cho admin: đăng nhập, xem tài khoản user, quản lí danh mục sản phẩm, quản lí sản phẩm, xem thông tin đơn hàng


Version: 
- Xampp: 3.3.0
- Composer: 2.5.1
- Laravel: 9.48.0

Cách cài đặt code:
- clone src code về máy
- khởi động xampp, start apache và mysql
- mở src code
- composer install
- npm install 
- cp .env.example .env (sau đó cấu hình lại file .env)
- php artisan key:generate
- php artisan migrate để tạo DB
- php artisan db:seed để thêm dữ liệu vào DB
- php artisan serve để khởi động project trên trình duyệt
