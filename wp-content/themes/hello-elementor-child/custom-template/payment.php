<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<div class="hasu-section --bg-gray --mobile-bg-white">
    <h3 class="hasu-section-title text-center">お客様情報</h3>

    <div class="flex-table  user-information user-and-checkout">

        <!-- Payment method -->
        <div class="payment-method flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="product_id" class="text-bold">お支払い方法</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="hasu-form-group inline-group hasu-drop-date-select ">
                    <select name="product_id" class="dropdate-select">
                        <option value="1">クレジットカード</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Credit Card Number -->
        <div class="flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="credit_card_number" class="text-bold">クレジットカード番号</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="form-input">
                    <input type="text" class="hasu-form-input --bg-gray max-w-280" name="credit_card_number" id="credit_card_number" value="" />
                </div>
            </div>
        </div>

        <!-- Datem of expiry -->
        <div class="flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="billing_furigana" class="text-bold">有効期限</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="hasu-drop-date-select card-expiry-select">
                    <div class="d-flex-items-center gap-8">
                        <select class="dropdate-select max-w-60">
                            <option value=""></option>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }

                            ?>
                        </select>
                        <span>月</span>
                    </div>
                    <div class="d-flex-items-center gap-8">
                        <select class="dropdate-select max-w-60">
                            <option value=""></option>

                            <?php
                            $year = (int) date('y');
                            for ($i = $year; $i <= $year + 10; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }

                            ?>
                        </select>
                        <span>年</span>
                    </div>

                    <input type="hidden" class="hasu-form-input --bg-gray max-w-280" name="billing_furigana" id="billing_furigana" autocomplete="billing_furigana" value="" />
                </div>
            </div>
        </div>

        <!-- Card Holder -->
        <div class="flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="credit_card_holder" class="text-bold">カードの名義人</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="form-input">
                    <input type="text" class="hasu-form-input --bg-gray max-w-280" name="credit_card_holder" id="credit_card_holder" value="" />
                </div>
            </div>

        </div>

        <!-- Security Code -->
        <div class="flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="credit_card_security_code" class="text-bold">セキュリティコード</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="form-input">
                    <input type="text" class="hasu-form-input --bg-gray max-w-110" name="credit_card_security_code" id="credit_card_security_code" value="" />
                </div>
            </div>

        </div>

    </div>
</div>