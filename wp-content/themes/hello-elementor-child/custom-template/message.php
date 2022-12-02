<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<div class="hasu-section --bg-gray --mobile-bg-white">
    <h3 class="hasu-section-title text-center">通信欄</h3>
    <div class="flex-table  user-information user-and-checkout">

        <!-- specify delivery time -->
        <div class="message flex-table-row --mobile-can-break">
            <div class=" flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="message" class="text-bold">通信欄（500文字以内）</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="form-group">
                    <textarea name="message" id="message" class="hasu-form-input --bg-gray">※配達会社の指定や置き配は対応できません。
※領収証の発行をご希望の場合こちらにご入力ください。</textarea>
                </div>
            </div>
        </div>

    </div>
</div>