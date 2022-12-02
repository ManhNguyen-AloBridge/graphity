<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
extract($args);



$product = wc_get_products(['status' => 'publish', 'limit' => 1])[0];
?>
<div class="hasu-section --bg-gray --mobile-bg-white">
    <h3 class="hasu-section-title text-center">お客様情報</h3>

    <form action="" id="user-register-form">
        <div class="flex-table  user-information user-and-checkout">

            <!-- Quantity -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="product_id" class="text-bold">商品名</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="hasu-form-group inline-group">
                        <span><?php echo $product->get_title() ?></span>
                        <select name="product_id" class="hasu-base-select">
                            <?php
                            for ($i = 1; $i <= 5; $i++) {

                                echo '<option value="' . $i . '">' . $i . '個</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Name -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_name" class="text-bold">お名前</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input">
                        <input type="text" class="hasu-form-input --bg-gray max-w-280" name="billing_name" id="billing_name" autocomplete="billing_name" value="<?php echo  sanitize_text_field($billing_name); ?>" />
                    </div>
                </div>
            </div>

            <!-- Furigana -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_furigana" class="text-bold">フリガナ</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input">
                        <input type="text" class="hasu-form-input --bg-gray max-w-280" name="billing_furigana" id="billing_furigana" autocomplete="billing_furigana" value="<?php echo sanitize_text_field($billing_name) ?>" />
                    </div>
                </div>
            </div>

            <!-- PostCode -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_postcode_1" class="text-bold">郵便番号</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input post-code">
                        <input type="text" class="hasu-form-input --bg-gray max-w-60" id="billing_postcode_1" value="" name="billing_postcode_first" />
                        <span class="inline-divide-bar"></span>
                        <input type="text" class="hasu-form-input --bg-gray --bg-gray max-w-60" value="" name="billing_postcode_second" />
                        <input type="hidden" class="hasu-form-input --bg-gray max-w-60" name="billing_postcode" value="<?php echo sanitize_text_field($billing_postcode) ?>" />
                    </div>
                </div>
            </div>

            <!-- District -->
            <div class="flex-table-row --mobile-can-break district">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_district" class="text-bold">都道府県</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="hasu-drop-date-select">
                        <select class="dropdate-select" name="billing_district">

                            <option value=""></option>
                            <?php
                            $prefectures = get_option('japan_prefectures');
                            foreach ($prefectures as $key => $prefectures) {
                                $selected = sanitize_text_field($billing_district) == $key ? 'selected' : '';
                                echo '<option value="' . $key . '" ' . $selected . '>' . $prefectures . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Address 1 -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_address_1" class="text-bold">住所1（市郡区／町・村）</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input">
                        <input type="text" class="hasu-form-input --bg-gray" name="billing_address_1" id="billing_address_1" autocomplete="billing_address_1" value="<?php echo sanitize_text_field($billing_address_1)  ?>" />
                    </div>
                </div>
            </div>

            <!-- Address 2 -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_address_2" class="text-bold">住所2（丁目・番地・建物名・号室）</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input">
                        <input type="text" class="hasu-form-input --bg-gray" name="billing_address_1" id="billing_address_2" autocomplete="billing_address_2" value="<?php echo sanitize_text_field($billing_address_2)  ?>" />
                    </div>
                </div>
            </div>

            <!-- Phone -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_phone" class="text-bold">電話番号</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input phone" data-input="billing-phone-group">
                        <input type="text" class="hasu-form-input --bg-gray max-w-70" id="billing_phone" value="" name="billing_phone_first" />
                        <span class="inline-divide-bar"></span>
                        <input type="text" class="hasu-form-input --bg-gray max-w-70" value="" name="billing_phone_second" />
                        <span class="inline-divide-bar"></span>
                        <input type="text" class="hasu-form-input --bg-gray max-w-70" value="" name="billing_phone_third" />

                        <input type="hidden" class="hasu-form-input --bg-gray" name="billing_phone" value="<?php echo sanitize_text_field($billing_phone)   ?>" />
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="billing_email" class="text-bold">メールアドレス</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="form-input">
                        <input type="text" class="hasu-form-input --bg-gray" name="billing_email" id="user_email" autocomplete="billing_email" value="<?php echo sanitize_text_field($billing_email)  ?>" />
                    </div>
                </div>
            </div>



            <?php if (!$loggedIn) : ?>
                <!-- Username -->
                <div class="flex-table-row --mobile-can-break">
                    <div class="flex-table-column --mobile-12 --col-5">
                        <div class="hasu-label-field">
                            <label for="user_name" class="text-bold">ユーザー名</label>
                            <span class="badge --danger">必須</span>
                        </div>
                    </div>
                    <div class="flex-table-column --mobile-12 --col-7">
                        <div class="form-input">
                            <input type="text" class="hasu-form-input --bg-gray" name="user_name" id="user_name" autocomplete="user_name" value="" />
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="flex-table-row --mobile-can-break">
                    <div class="flex-table-column --mobile-12 --col-5">
                        <div class="hasu-label-field">
                            <label for="user_password" class="text-bold">パスワード</label>
                            <span class="badge --danger">必須</span>
                        </div>
                    </div>
                    <div class="flex-table-column --mobile-12 --col-7">
                        <div class="form-input">
                            <input type="text" class="hasu-form-input --bg-gray max-w-280" name="user_password" id="user_password" value="" />
                        </div>
                    </div>
                </div>

                <!-- Password Confirmed -->
                <div class="flex-table-row --mobile-can-break">
                    <div class="flex-table-column --mobile-12 --col-5">
                        <div class="hasu-label-field">
                            <label for="user_password_confirmed" class="text-bold">パスワード確認</label>
                            <span class="badge --danger">必須</span>
                        </div>
                    </div>
                    <div class="flex-table-column --mobile-12 --col-7">
                        <div class="form-input">
                            <input type="text" class="hasu-form-input --bg-gray max-w-280" name="user_password_confirmed" id="user_password_confirmed" autocomplete="user_password_confirmed" value="" />
                        </div>
                    </div>
                </div>
            <?php endif  ?>

            <!-- Gender -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="gender" class="text-bold">性別</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="hasu-radio-button-group">

                        <div class="radio-group">
                            <input type="radio" id="Female" name="gender" value="female" <?php echo sanitize_text_field($gender) == 'female' ? 'checked' : '' ?>>
                            <label for="html">女性</label><br>
                        </div>

                        <div class="radio-group">
                            <input type="radio" id="Male" name="gender" value="male" <?php echo sanitize_text_field($gender) == 'male' ? 'checked' : '' ?>>
                            <label for="css">男性</label><br>
                        </div>

                        <div class="radio-group">
                            <input type="radio" id="Other" name="gender" value="other" <?php echo sanitize_text_field($gender) == 'other' ? 'checked' : '' ?>>
                            <label for="javascript">選択なし</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Birth date -->
            <div class="flex-table-row --mobile-can-break">
                <div class="flex-table-column --mobile-12 --col-5">
                    <div class="hasu-label-field">
                        <label for="birth_date" class="text-bold">生年月日</label>
                        <span class="badge --danger">必須</span>
                    </div>
                </div>
                <div class="flex-table-column --mobile-12 --col-7">
                    <div class="hasu-drop-date-select">
                        <input type="text" class="hasu-form-input --bg-gray dropdate" name="birth_date" id="birth_date" autocomplete="birth_date" value=" <?php echo sanitize_text_field($birth_date) ?>" />
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<?php // @codingStandardsIgnoreLine 
?>