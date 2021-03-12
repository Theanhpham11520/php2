<?php
require_once BASE_Ctl . '/BaseController.php';
class CartController extends BaseController
{
    public function viewCart()
    {
        $this->render('cart');
    }

    public function deleteCart()
    {
        unset($_SESSION['cart']);
        header('Location: /');
    }
}