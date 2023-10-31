<?php 
    //xử lý URL (thư mục core dùng để bổ trợ cho MVC)
    class App {
        //tạo thuộc tính lưu trữ các thành phần của thanh địa chỉ
        protected $controller = 'home';
        protected $action = 'index';
        protected $params = [];

        function __construct() {
            $url = $this->URLProcess();
            
            //nếu thanh địa chỉ không có url nào, thì gán cứng cho phần tử thứ 0 thành controller mặc định
            if($url == null) {
                $url[0] = $this->controller;
            }

            // kiểm tra trong thư mục controller, xem có file nào tên giống với thuộc tính controller ($url[0]) hay không
            if(file_exists("./mvc/controllers/".$url[0].".php")) {
                // gán thuộc tính controller bằng url[0], sau đó xoá nó khỏi mảng
                $this->controller = $url[0];
                unset($url[0]);
            }

            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            // tương tự với action, thay thể dấu '-' bằng rỗng
            if(isset($url[1])) {
                $url[1] = str_replace("-", "", $url[1]);
                if(method_exists($this->controller, $url[1])) {
                    $this->action = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url?array_values($url):[];
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        //hàm lấy thanh địa chỉ về
        function URLProcess() {
            if(isset($_GET['url'])) {
                // trả về mảng cách nhau bởi dấu '/'
                return explode("/", filter_var(trim($_GET['url'], '/')));
            }
        }
    }
?>