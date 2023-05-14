<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 *
 * views-view-fields-view-kurs-block-view-kurs.tpl.php
 */
?>

<div class="table-responsive">
    <div align="center">
        <strong>
            <?php print $fields['field_kurs_awal_berlaku']->content; ?> s/d <?php print $fields['field_kurs_akhir_berlaku']->content; ?>
        </strong>
    </div>

        <table>
            <thead>
                <tr>
                    <th>Negara</th>
                    <th>Mata Uang</th>
                    <th>Nilai</th>
                </tr>
            </thead>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/amerika-serikat.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 USD</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_usd']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/australia.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 AUD</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_aud']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/hongkong.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 HKD</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_hkd']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/inggris.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 GBP</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_gbp']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/singapura.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 SGD</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_sgd']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/jepang.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>100 JPY</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_jpy']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/euro.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 EUR</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_eur']->content; ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/tiongkok.png" class="bendera-kecil"></td>
                <td class='kurs-mata-uang'>1 CNY</td>
                <td class='kurs-nilai'><?php print $fields['field_kurs_cny']->content; ?> </td>
            </tr>

  </table>
</div>
</div>
