<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<div class="hasu-section --bg-gray --mobile-bg-white payment-type-section mobile-hidden">
    <h3 class="hasu-section-title text-center">お買い上げの商品</h3>


    <div class="payment-types text-center">
        <div class="payment-type normal">
            <button class="hasu-button --dark --bg-blue-gradient">申し込み内容を確認する</button>

            <div class="payment-type__prices">
                <div class="payment-type__price">
                    <span class="label">初回購入のお客様</span>
                    <span class="price">1,980円／本</span>

                </div>
                <div class="payment-type__price">
                    <span class="label">継続購入のお客様</span>
                    <span class="price">7,700円／本</span>
                </div>
            </div>

        </div>

        <div class="payment-type subscription">
            <button class="hasu-button --dark --bg-blue-gradient">申し込み内容を確認する</button>
            <div class="payment-type__prices">
                <div class="payment-type__price">
                    <span class="label">初月</span>
                    <span class="price">1,980円／本</span>

                </div>
                <div class="payment-type__price">
                    <span class="label">2ヶ月目から</span>
                    <span class="price">4,900円／本</span>
                </div>
            </div>
            <span>※毎月●日に自動決済後発送されます。</span>
        </div>
    </div>
</div>