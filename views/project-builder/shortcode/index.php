<div class="tab-pane fade" id="shortcode" role="tabpanel" aria-labelledby="shortcode-tab">
   <div class="mpg-container d-flex align-items-start">
        <div class="main-inner-content">
            <div class="card w-100 p-0 m-0 mb-4 mpg-card">
                <div class="card-header">
                    <h2 class="project-name-header"><?php _e('Shortcode', 'mpg'); ?></h2>
                </div>
                <div class="card-body">
                    <div class="sub-section">
                        <div class="block-with-tooltip">
                            <div class="left">
                                <?php _e('Select header', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Choose some header from the dropdown to get appropriate shortcode', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <select class="shortcode-headers-dropdown input-data"></select>
                            </div>
                        </div>
                        <div class="block-with-tooltip">
                            <div class="left"><?php _e('Shortcode preview', 'mpg'); ?></div>
                            <div class="right">
                                <div class="shortcode-field-copy input-data highlight">
                                    <span class="shortcode-preview-output">
                                        <?php if (isset($headers[0])) {
                                            echo '{{mpg_' . strtolower($headers[0]) . '}}';
                                        } ?>
                                    </span>
                                    <button class="copy-shortcode-btn">
                                        <img src=<?php echo esc_url( MPG_BASE_IMG_PATH . '/copy-icon.png' ); ?> alt="" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100 p-0 m-0 mb-4 mpg-card">
                <div class="card-header">
                    <h2 class="project-name-header"><?php _e('Generate list', 'mpg'); ?></h2>
                </div>
                <div class="card-body">
                    <div class="sub-section">
                        <div class="block-with-tooltip conditions-block mb-0">
                            <div class="left">
                                <?php _e('Set filters', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this shortcode to make a list of generated items from your source file. For example you can use this to generate a list of all URLs in your source file that match a certain criteria. Place this shortcode on any page not generated by MPG. This is an excellent tool to build up inlinks for your generated pages.', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="condition-container"></div>
                                <a href="#" class="w-100 mt-3 btn btn-outline-primary add-new-rule">
                                    <?php esc_html_e( 'Add filter', 'mpg' ); ?>
                                    <span class="dashicons dashicons-plus-alt2 ml-2"></span>
                                </a>
                            </div>
                        </div>
                        <div class="block-with-tooltip conditions-block operator-selector-block">
                            <div class="left">
                                <?php _e('Logic', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this to set up relation between filters', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <select id="mpg_operator_selector">
                                    <option disabled value=""><?php _e('Choose logic', 'mpg') ?></option>
                                    <option value="all"><?php _e('Show items that match all filters', 'mpg'); ?></option>
                                    <option selected value="any"><?php _e('Show items that match any filter', 'mpg'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="sub-section filters">
                        <div class="block-with-tooltip ">
                            <div class="left">
                                <?php _e('Direction', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this to set up column header to sort by (optional)', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <select id="mpg_direction" class="input-data">
                                    <option disabled selected value=""><?php _e('Choose direction of sorting', 'mpg') ?></option>
                                    <option value="asc"><?php _e('Ascending', 'mpg'); ?></option>
                                    <option value="desc"><?php _e('Descending', 'mpg'); ?></option>
                                    <option value="random"><?php _e('Random', 'mpg'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="block-with-tooltip">
                            <div class="left">
                                <?php _e('Order By', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this to set up column header to sort by', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <select id="mpg_order_by" disabled="disabled" class="input-data">
                                    <option disabled selected value=""><?php _e('Choose column to order by', 'mpg'); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="block-with-tooltip ">
                            <div class="left">
                                <?php _e('Limit', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this to set up the number of rows that the shortcode will display', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <input type="number" id="mpg_limit" min="1" step="1" value="5" class="input-data">
                            </div>
                        </div>
                        <div class="block-with-tooltip ">
                            <div class="left">
                                <?php _e('Unique rows', 'mpg'); ?>
                                <div class="tooltip-circle" data-tippy-content="<?php _e('Use this to make shortcode responses without duplicating rows', 'mpg'); ?>">
                                    <span class="dashicons dashicons-info-outline"></span>
                                </div>
                            </div>
                            <div class="right">
                                <select id="mpg_unique_rows" class="input-data">
                                    <option selected value="no"><?php _e('No', 'mpg'); ?></option>
                                    <option value="yes"><?php _e('Yes', 'mpg'); ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="sub-section">
                        <div class="block-with-tooltip  conditions-block">
                            <div class="left">
                                <?php _e('Choose shortcode', 'mpg'); ?>
                            </div>
                            <div class="right">
                                <div class="insert-shortcode-dn">
                                    <select id="mpg_shortcode_tab_insert_shortcode_dropdown" class="input-data"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="sub-section">
                        <div class="block-with-tooltip sandbox-container">
                            <div class="left">
                                <?php _e('Shortcode sandbox', 'mpg'); ?>
                            </div>
                            <div class="right">
                                <div class="sandbox-block">
                                    <code>
                                        <textarea id="mpg_shortcode_sandbox_textarea" class="input-data" style="width:100%; min-height: 100px;">[mpg project-id=""][/mpg]</textarea>
                                    </code>
                                    <div class="message">Choose how the tags are used in the list generation and preview it in the right sidebar.</div>
                                    <button class="btn btn-primary shortcode-preview"><?php _e('Preview', 'mpg'); ?></button>
                                    <button class="btn btn-link shortcode-copy"><?php _e('Copy expression', 'mpg'); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="block-with-tooltip" style="align-items: flex-start;">
                            <div class="left">
                                <p><?php _e('List preview', 'mpg'); ?></p>
                            </div>
                            <div class="right">
                                <div class="mpg_list_preview-block">
                                    <ul id="mpg_list_preview"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-container">
            <?php require_once('sidebar.php') ?>
        </div>
    </div>
</div>