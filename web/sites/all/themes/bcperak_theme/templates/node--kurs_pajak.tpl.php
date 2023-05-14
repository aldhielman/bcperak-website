<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>



<?php if (!$page): ?>
  <kurs id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
    <?php if (!$page): ?>
      <header>
	<?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
  
      <?php if ($display_submitted): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

    <?php if (!$page): ?>
      </header>
  <?php endif; ?>

  <div class="content <?php print $classes_array['1']; ?>"<?php print $content_attributes; ?>>



    <div class="table-responsive">
        <table id="table-kurs">
            <thead>
                <tr>
                    <th>Negara</th>
                    <th>Mata Uang</th>
                    <th>Nilai</th>
                </tr>
            </thead>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/amerika-serikat.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 USD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_usd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/australia.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 AUD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_aud']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/kanada.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 CAD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_cad']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/denmark.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 DKK</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_dkk']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/hongkong.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 HKD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_hkd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/malaysia.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 MYR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_myr']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/selandia-baru.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 NZD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_nzd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/norwegia.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 NOK</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_nok']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/inggris.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 GBP</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_gbp']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/singapura.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 SGD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_sgd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/swedia.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 SEK</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_sek']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/swiss.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 CHF</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_chf']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/jepang.png" class="bendera"></td>
                <td class='kurs-mata-uang'>100 JPY</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_jpy']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/myanmar.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 MMK</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_mmk']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/india.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 INR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_inr']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/kuwait.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 KWD</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_kwd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/pakistan.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 PKR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_pkr']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/philipina.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 PHP</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_php']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/saudi-arabia.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 SAR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_sar']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/sri-lanka.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 LKR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_lkr']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/thailand.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 THB</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_thb']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/brunei-darussalam.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 BND</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_bnd']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/euro.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 EUR</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_eur']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/tiongkok.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 CNY</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_cny']); ?> </td>
            </tr>

            <tr>
                <td class='kurs-negara'><img src="../sites/default/files/bendera/korea.png" class="bendera"></td>
                <td class='kurs-mata-uang'>1 KRW</td>
                <td class='kurs-nilai'><?php print render($content['field_kurs_krw']); ?> </td>
            </tr>



        </table>
    </div>












  </div>

  <?php if (!empty($content['links'])): ?>
    <footer>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
<?php if (!$page): ?>
  </kurs> <!-- /.node -->
<?php endif; ?>
