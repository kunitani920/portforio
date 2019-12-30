<?php
//ver2.本体（ver3）に合わせて、残高追加
//ver3.本体（ver4）に合わせて、クラス内に全て移動。ユーザー情報は初期値でセット。残高をmoney->balanceに変更
//ver4.本体（ver5）に合わせて、checkUserList,getById作成、getUser削除
class User {
    //ユーザー数
    const USER_MAX = 2;
    public static $user_list = array(
        1 => array(
            "id" => "1",
            "password" => "pass",
            "name" => "田中",
            "balance" => "500000"
        ),
        2 => array(
            "id" => "2",
            "password" => "word",
            "name" => "原",
            "balance" => "1000000"
        )
    );

    public function checkUserList($id) {
        for($i = 1; $i <= self::USER_MAX; $i++) {
            if(self::$user_list[$i]['id'] === $id) {
                return true;
            }
        }
        return false;
    }

    public function getUserById($id) {
        return self::$user_list[$id];
    }
}

?>