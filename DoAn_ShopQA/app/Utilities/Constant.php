<?php


namespace App\Utilities;


class Constant
{
    // các hằng số, role dùng chung cho cả system


    //Order
    const order_status_ReceiveOrders = 1;
    const order_status_Unconfirmed = 2;
    const order_status_Confirmed = 3;
    const order_status_Paid = 4;
    const order_status_Processing = 5;
    const order_status_Shipping = 6;
    const order_status_Finish = 7;
    const order_status_Cancel = 0;
    public static $order_status = [
        self::order_status_ReceiveOrders => 'Nhận Đơn Đặt Hàng',
        self::order_status_Unconfirmed => 'Chưa Được Xác Nhận',
        self::order_status_Confirmed => 'Đã Được Xác Nhận',
        self::order_status_Paid => 'Đã Thanh Toán',
        self::order_status_Processing => 'Đang Xử Lí',
        self::order_status_Shipping => 'Đang Giao',
        self::order_status_Finish => 'Đã Giao',
        self::order_status_Cancel => 'Đã Hủy',
    ];

    //User
    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_client = 2;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_admin => 'admin',
        self::user_level_client => 'client',
    ];
}