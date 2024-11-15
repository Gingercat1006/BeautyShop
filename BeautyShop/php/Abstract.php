<?php
    abstract class Abstract{
        //DB接続先、ユーザーID、パスワード、DBハンドラ
        protected $dsn,$user,$password,$dbh;
        $dsn = "mysql:host=localhost;dbname=miyata;charset=utf8mb4";
        $user = "root";
        $password = "";

        //コンストラクタ
        public function __construct(){
            $this->conenct();
        }

        private function connect(){
            try{
                $dbh = new PDO($dsn,$user,$password);
                $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                if($dbh == null){
                    print("接続に失敗<br>");
                }
            }catch(PDOException $e){
                print("Error:" . $e->getMessage());
                die();
            }
        }

        //デストラクタ
        public function __destruct(){
            $dbh = null;
        }
    }
?>