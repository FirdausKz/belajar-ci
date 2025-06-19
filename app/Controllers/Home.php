<?php

namespace App\Controllers;

use App\Models\ProductModel; 
use App\Models\transactionModel;
use App\Models\transactionDetailModel;

class Home extends BaseController
{
    protected $product;
    protected $transaction;
    protected $transaction_Detail;

    function __construct()
    {
            helper('form');
            helper('number');
            $this->product = new ProductModel();
            $this->transaction = new transactionModel();
            $this->transaction_detail = new transactionDetailModel();
    }
    public function index(): string
    {
        $product = $this->product->findAll();
        $data['product'] = $product;
        return view('v_home', $data);
    }
    public function history()
{
    $username = session()->get('username');
    $data['username'] = $username;

    $buy = $this->transaction->where('username', $username)->findAll();
    $data['buy'] = $buy;

    $product = [];

    if (!empty($buy)) {
        foreach ($buy as $item) {
            $detail = $this->transaction_detail->select('transaction_detail.*, product.nama, product.harga, product.foto')->join('product', 'transaction_detail.product_id=product.id')->where('transaction_id', $item['id'])->findAll();

            if (!empty($detail)) {
                $product[$item['id']] = $detail;
            }
        }
    }

    $data['product'] = $product;

    return view('v_history', $data);
}
}
