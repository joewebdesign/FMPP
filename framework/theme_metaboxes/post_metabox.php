<?php add_action("admin_init", "post_metabox");?>
<?php function post_metabox(){
			add_meta_box("post-template-meta-container", __('Post Options','iamd_text_domain'), "post_settings","post", "normal", "default");
            add_meta_box("post-format-meta-container",__('Post Format Options','iamd_text_domain'),"post_format_settings","post","normal","default");			
			add_action('save_post','post_meta_save');
	} 
	
	function post_settings($args){ 
		global $post; 
		$tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
		$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();?>
        
        <!-- Layout Start -->
        <div class="custom-box">
			<div class="column one-sixth">                        
                <label><?php _e('Layout','iamd_text_domain');?> </label>
            </div>
			<div class="column five-sixth last">  
                <ul class="bpanel-layout-set">
                    <?php $homepage_layout = array('content-full-width'=>'without-sidebar','with-left-sidebar'=>'left-sidebar','with-right-sidebar'=>	'right-sidebar');
                        $v =  array_key_exists("layout",$tpl_default_settings) ?  $tpl_default_settings['layout'] : 'content-full-width';
                        foreach($homepage_layout as $key => $value):
                            $class = ($key == $v) ? " class='selected' " : "";
                            echo "<li><a href='#' rel='{$key}' {$class}><img src='".IAMD_FW_URL."theme_options/images/columns/{$value}.png' /></a></li>";
                        endforeach;?>
                </ul>
                <?php $v = array_key_exists("layout",$tpl_default_settings) ? $tpl_default_settings['layout'] : 'content-full-width';?>
                <input id="mytheme-post-layout" name="layout" type="hidden"  value="<?php echo $v;?>"/>
                <p class="note"> <?php _e("You can choose between a left, right or no sidebar layout.",'iamd_text_domain');?> </p>
            </div>
        </div><!-- Layout End-->
        
        <!-- Comment Section Start -->
        <div class="custom-box">
			<div class="column one-sixth">                        
                <label><?php _e('Disable Comments','iamd_text_domain');?></label>
            </div>
			<div class="column five-sixth last">  
				<?php $switchclass = array_key_exists("disable-comment",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                      $checked = array_key_exists("disable-comment",$tpl_default_settings) ? ' checked="checked"' : '';?>
                <div data-for="mytheme-post-comment" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="mytheme-post-comment" class="hidden" type="checkbox" name="post-comment" value="true"  <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to disable Comments.','iamd_text_domain');?> </p>
            </div>	
        </div><!-- Comment Section End-->

        <!-- Featured Image Section Start -->
        <div class="custom-box">
			<div class="column one-sixth">                        
        	    <label><?php _e('Disable Featured Image','iamd_text_domain');?></label>
            </div>
			<div class="column five-sixth last">  
				<?php $switchclass = array_key_exists("disable-featured-image",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                      $checked = array_key_exists("disable-featured-image",$tpl_default_settings) ? ' checked="checked"' : '';?>
                <div data-for="mytheme-post-featured-image" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="mytheme-post-featured-image" class="hidden" type="checkbox" name="post-featured-image" value="true"  <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to disable featured image','iamd_text_domain');?> </p>
            </div>
        </div><!-- Featured Image Section End-->
        
        <!-- Every Where Sidebar Start -->
        <div class="custom-box">
			<div class="column one-sixth">   
                <label><?php _e('Disable Every Where Sidebar','iamd_text_domain');?></label>
            </div>
			<div class="column five-sixth last">  
				<?php $switchclass = array_key_exists("disable-everywhere-sidebar",$tpl_default_settings) ? 'checkbox-switch-on' :'checkbox-switch-off';
                      $checked = array_key_exists("disable-everywhere-sidebar",$tpl_default_settings) ? ' checked="checked"' : '';?>
                <div data-for="mytheme-disable-everywhere-sidebar" class="checkbox-switch <?php echo $switchclass;?>"></div>
                <input id="mytheme-disable-everywhere-sidebar" class="hidden" type="checkbox" name="disable-everywhere-sidebar" value="true"  <?php echo $checked;?>/>
                <p class="note"> <?php _e('YES! to disable Every Where Sidebar','iamd_text_domain');?> </p>
            </div>
        </div><!-- Comment Section End-->

        <!-- Post Meta-->
        <div class="custom-box">
            <h3><?php _e('Post Meta Options','iamd_text_domain');?></h3>
            <?php $post_meta = array(array(
                    "id"=>		"disable-author-info",
                    "label"=>	__("Disable the Author info.",'iamd_text_domain'),
                    "tooltip"=>	__("By default the author info will display when viewing your posts. You can choose to disable it here.",'iamd_text_domain')
                ), array(
                    "id"=>		"disable-date-info",
                    "label"=>	__("Disable the date info.",'iamd_text_domain'),
                    "tooltip"=>	__("By default the date info will display when viewing your posts. You can choose to disable it here.",'iamd_text_domain')
                ),
                array(
                    "id"=>		"disable-comment-info",
                    "label"=>	__("Disable the comment info.",'iamd_text_domain'),
                    "tooltip"=>	__("By default the comment info will display when viewing your posts. You can choose to disable it here.",'iamd_text_domain')
                ),
                array(
                    "id"=>		"disable-category-info",
                    "label"=>	__("Disable the category info.",'iamd_text_domain'),
                    "tooltip"=>	__("By default the category info will display when viewing your posts. You can choose to disable it here.",'iamd_text_domain')
                ),
                array(
                    "id"=>		"disable-tag-info",
                    "label"=>	__("Disable the tag info.",'iamd_text_domain'),
                    "tooltip"=>	__("By default the tag info will display when viewing your posts. You can choose to disable it here.",'iamd_text_domain')
                ));
            $count = 1;
            foreach($post_meta as $p_meta):
                $last = ($count%3 == 0)?"last":'';
                $id = 		$p_meta['id'];
                $label =	$p_meta['label'];
                $tooltip =  $p_meta['tooltip'];
                $v =  array_key_exists($id,$tpl_default_settings) ?  $tpl_default_settings[$id] : '';
                $rs =		checked($id,$v,false);
                $switchclass = ($v<>'') ? 'checkbox-switch-on' :'checkbox-switch-off';
                
                echo "<div class='one-third-content {$last}'>";
                echo '<div class="bpanel-option-set">';
                echo "<label>{$label}</label>";							
                echo "<div data-for='{$id}' class='checkbox-switch {$switchclass}'></div>";
                echo "<input class='hidden' id='{$id}' type='checkbox' name='{$id}' value='{$id}' {$rs} />";
				echo '<p class="note">';
				echo ($tooltip);
				echo '</p>';
                echo '</div>';
                echo '</div>';
                
            $count++;	
            endforeach;?>
        </div><!-- Post Meta End--><?php
		
		wp_reset_postdata();
    }
	
    function post_format_settings( $args ) {
        global $post; 
        $tpl_default_settings = get_post_meta($post->ID,'_dt_post_settings',TRUE);
        $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array(); ?>

        <div id="dt-post-format-gallery">
            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('Image Gallery','iamd_text_domain');?> </label></div>
                <div class="column five-sixth last">
                    <div class="dt-media-btns-container">
                        <a href="#" class="dt-open-media-for-gallery-post button button-primary">
                            <?php _e( 'Click Here to Add Images', 'iamd_text_domain' );?> </a>
                    </div>
                    <div class="clear"></div>
                    <div class="dt-media-container">
                        <ul class="dt-items-holder"><?php
                            if ( array_key_exists("items",  $tpl_default_settings)) {
                                foreach ( $tpl_default_settings["items_thumbnail"] as $key => $thumbnail ) {
                                    $item = $tpl_default_settings ['items'] [$key];
                                    $out = "";
                                    $name = "";
                                    $foramts = array ('jpg','jpeg','png','gif');
                                    $parts = explode ( '.', $item );
                                    $ext = strtolower ( $parts [count ( $parts ) - 1] );

                                    $out .= "<li>";
                                    if (in_array ( $ext, $foramts )) {
                                        $name = $tpl_default_settings ['items_name'] [$key];
                                    
                                        $out .= "<img src='{$thumbnail}' alt='' />";
                                        $out .= "<span class='dt-image-name'>{$name}</span>";
                                        $out .= "<input type='hidden' name='items[]' value='{$item}' />";
                                    }
                                    $out .= "<input class='dt-image-name' type='hidden' name='items_name[]' value='{$name}' />";
                                    $out .= "<input type='hidden' name='items_thumbnail[]' value='{$thumbnail}' />";
                                    $out .= "<span class='my_delete'></span>";
                                    $out .= "</li>";
                                    echo $out;
                                }
                            }
                        ?></ul>
                    </div>    
                </div>
            </div> 
        </div>

        <div id="dt-post-format-video-audio">
            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('oEmbed URL','iamd_text_domain');?> </label></div>
                <div class="column five-sixth last">
                    <?php $oembed_url = array_key_exists("oembed-url", $tpl_default_settings) ? $tpl_default_settings['oembed-url'] : "";?>
                    <input type="text" name="oembed-url" value="<?php echo $oembed_url;?>" class="widefat"/>
                    <p class="note"><?php _e("Enter a URL that is compatible with WP's built-in oEmbed feature. This setting is used for your video and audio post formats.",'iamd_text_domain');?></p>
                </div>
            </div>

            <div class="custom-box">
                <div class="column one-sixth"><label><?php _e('Self Hosted URL','iamd_text_domain');?> </label></div>
                <div class="column five-sixth last">
                    <?php $self_hosted_url = array_key_exists("self-hosted-url", $tpl_default_settings) ? $tpl_default_settings['self-hosted-url'] : ""; ?>
                    <input type="text" name="self-hosted-url" value="<?php echo $self_hosted_url;?>" class="widefat"/>
                    <p class="note"><?php _e("Insert your self hosted video or audio url here.",'iamd_text_domain');?></p>                    
                </div>
            </div>            
        </div><?php        
    }
	
	function post_meta_save($post_id){
		global $pagenow;
		if ( 'post.php' != $pagenow ) return $post_id;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 	return $post_id;
		
		$settings = array();
		$settings['layout'] = isset($_POST['layout']) ? $_POST['layout'] : "";
		$settings['disable-comment'] = isset( $_POST['post-comment'] ) ? $_POST['post-comment'] : "";
		$settings['disable-everywhere-sidebar'] = isset($_POST['disable-everywhere-sidebar']) ? $_POST['disable-everywhere-sidebar'] : "";
		$settings['disable-featured-image'] = isset($_POST['post-featured-image']) ? $_POST['post-featured-image'] : "";
		$settings['disable-author-info']	= isset($_POST['disable-author-info']) ? $_POST['disable-author-info'] : "";
		$settings['disable-date-info']	= isset($_POST['disable-date-info']) ? $_POST['disable-date-info'] : "";
		$settings['disable-comment-info']	= isset($_POST['disable-comment-info']) ? $_POST['disable-comment-info'] : "";
		$settings['disable-category-info']	= isset($_POST['disable-category-info'])?$_POST['disable-category-info']: "";
		$settings['disable-tag-info']	= isset($_POST['disable-tag-info']) ? $_POST['disable-tag-info'] : "";
		
        #For Gallery Post Format
        if( $_POST['post_format'] === "gallery") {
            $settings ['items'] = isset ( $_POST ['items'] ) ? $_POST ['items'] : "";
            $settings ['items_thumbnail'] = isset ( $_POST ['items_thumbnail'] ) ? $_POST ['items_thumbnail'] : "";
            $settings ['items_name'] = isset ( $_POST ['items_name'] ) ? $_POST ['items_name'] : "";

        } elseif( $_POST['post_format'] === "video" || $_POST['post_format'] === "audio" ) {
            $settings['oembed-url'] = isset( $_POST['oembed-url'] ) ? $_POST['oembed-url'] : "";
            $settings['self-hosted-url'] = isset( $_POST['self-hosted-url'] ) ? $_POST['self-hosted-url'] : "";
        }
		
		update_post_meta($post_id, "_dt_post_settings", array_filter($settings));
	}?>