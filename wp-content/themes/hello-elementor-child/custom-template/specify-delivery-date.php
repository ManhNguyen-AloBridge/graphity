<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<div class="hasu-section --bg-gray --mobile-bg-white">
    <h3 class="hasu-section-title text-center">お届け日の指定</h3>
    <div class="flex-table  user-information user-and-checkout">

        <!-- specify delivery time -->
        <div class="specify-delivery-time flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="specify_delivery_time" class="text-bold">お届け時間の指定</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">

                <div class="hasu-drop-date-select d-flex-items-center gap-8">
                    <select class="dropdate-select max-w-60" name="specify_delivery_time" id="specify_delivery_time">
                        <option value="no">指定なし</option>
                        <option value="yes">指定</option>
                    </select>
                    <span>時に配達を希望</span>
                </div>
            </div>
        </div>

        <!-- Delivery date-->
        <div class="flex-table-row --mobile-can-break">
            <div class="flex-table-column --mobile-12 --col-5">
                <div class="hasu-label-field">
                    <label for="delivery_date" class="text-bold">お届け予定日</label>
                    <span class="badge --danger">必須</span>
                </div>
            </div>
            <div class="flex-table-column --mobile-12 --col-7">
                <div class="hasu-drop-date-select">
                    <input type="text" class="hasu-form-input --bg-gray dropdate" name="birth_date" id="delivery_date" autocomplete="delivery_date" value="" />
                </div>
            </div>
        </div>



    </div>
</div>