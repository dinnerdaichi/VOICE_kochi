<?php
//Wordpressのバージョン非表示
remove_action('wp_head','wp_generator');

//WordPress以外の外部ツールからの投稿プロトコルのタグ非表示
remove_action('wp_head', 'rsd_link');

//Windows Live Writerで投稿する場合に必要なタグ非表示
remove_action('wp_head', 'wlwmanifest_link');

//ページネーション非表示
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//短縮リンク非表示
remove_action('wp_head', 'wp_shortlink_wp_head');

//絵文字系の設定(wpemojiSettings)を削除
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles', 10 );

//管理バーを非表示
add_filter( 'show_admin_bar', '__return_false' );

//wp-jsonを削除
remove_action('wp_head','rest_output_link_wp_head');

//DNSプリフェッチ用コードを削除
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

//Gutenberg（ブロックエディタ）のcssを削除
function remove_block_library_style() {
  wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );

// オートフォーマット関連の無効化
add_action('init', function() {
	remove_filter('the_title', 'wptexturize');
	remove_filter('the_content', 'wptexturize');
	remove_filter('the_excerpt', 'wptexturize');
	remove_filter('the_title', 'wpautop');
	remove_filter('the_content', 'wpautop');
	remove_filter('the_excerpt', 'wpautop');
	remove_filter('the_editor_content', 'wp_richedit_pre');
});

// オートフォーマット関連の無効化 TinyMCE
add_filter('tiny_mce_before_init', function($init) {
	$init['wpautop'] = false;
	$init['apply_source_formatting'] = true;
	return $init;
});

/* ビジュアルエディタのタグ削除を無効*/
function custom_tiny_mce_before_init( $init_array ) {
  global $allowedposttags;

  $init_array['valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['extended_valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['valid_children'] = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']'; //aタグ内にすべてのタグを入れられるように
  $init_array['indent'] = true; //インデントを有効に
  $init_array['wpautop'] = false; //テキストやインライン要素を自動的にpタグで囲む機能を無効に
  $init_array['force_p_newlines'] = false; //改行したらpタグを挿入する機能を無効に
  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );



function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

// スタイルシートの読み込み
function add_css() {

    // jukensei以外
    if( !is_page('jukensei') && is_parent_slug() !== 'jukensei' && is_parent_slug() !== 'future' ):

        // サイト共通のCSSの読み込み
        wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css','',date('YmdGi')); 
        wp_enqueue_style('common-style', '/css/common.css','',date('YmdGi'));
        wp_enqueue_style('menu-style', '/css/menu.css','',date('YmdGi'));
        
        if(is_front_page()):

        wp_enqueue_style('home-style', '/css/home.css','',date('YmdGi'));
        elseif ( is_page() ):
        $page = get_post( get_the_ID() );
        wp_enqueue_style( 'page-style', '/css/'.$page->post_name.'.css','',date('YmdGi'));
        elseif ( is_post_type_archive('news') ||  is_singular('news') || is_tax('news_category')):
        wp_enqueue_style('news-style', '/css/news.css','',date('YmdGi'));
        elseif ( is_post_type_archive('research') ||  is_singular('research') || is_tax('research_category')):
        wp_enqueue_style('research-style', '/css/research.css','',date('YmdGi'));
        elseif ( is_post_type_archive('teacher') ||  is_singular('teacher') || is_tax('teacher_category')):
        wp_enqueue_style('teacher-style', '/css/teacher.css','',date('YmdGi'));
        endif;

        //webfont
        if(is_front_page()):
            wp_enqueue_style('din2014-style', 'https://use.typekit.net/ssv3zgt.css');
        endif;
        //slick
        if(is_front_page() || is_page('opencampus') || is_page('campusmap')):
            wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css','',date('YmdGi'));
            wp_enqueue_style('slick-theme-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css','',date('YmdGi'));
        endif;
        //modaal
        if(is_page('features')):
            wp_enqueue_style('modaal-style', 'https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/css/modaal.min.css','',date('YmdGi'));
        endif;
        
        if(is_front_page()){
            wp_enqueue_style( 'bar-css', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.css', array(), '1.0.0', 'all');
            wp_enqueue_script( 'bar-js', 'https://cdn.jsdelivr.net/npm/simplebar@5.3.6/dist/simplebar.min.js', "", "1.1.1");
        }
        //tab
        /*
        if(is_page('event')):
            wp_enqueue_style('scrollhint-style', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css','',date('YmdGi'));
        endif;
        */

    endif;
}
add_action( 'wp_enqueue_scripts', 'add_css' );

function add_scripts() { 
    if(!is_admin()):

        // jukensei以外
        if( !is_page('jukensei') && is_parent_slug() !== 'jukensei' && is_parent_slug() !== 'future' ):

            // WordPress本体のjquery.jsを読み込まない
            wp_deregister_script('jquery');
            // jQueryの読み込み
            wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', '', '', false );
            wp_enqueue_script( 'menu-script', '/js/menu.js', array( 'jquery' ) , '', true );
            wp_enqueue_script( 'common-script', '/js/common.js', array( 'jquery' ) , '', true );

            //slick
            if(is_front_page()):
                wp_enqueue_script( 'youtube-bg-script', '/js/video.js' , array( 'jquery' ) , '', true );
                wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ) , '', true );
                wp_enqueue_script( 'slick-script-frontpage', '/js/slick-frontpage.js', array( 'jquery' ) , '202409', true );
            elseif(is_page('opencampus')):
                wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ) , '', true );
                wp_enqueue_script( 'slick-script-frontpage', '/js/slick-opencampus.js', array( 'jquery' ) , '', true );
            elseif(is_page('campusmap')):
                wp_enqueue_script( 'slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ) , '', true );
                wp_enqueue_script( 'slick-script-frontpage', '/js/slick-campusmap.js', array( 'jquery' ) , '', true );
            endif;

            //modaal
            if(is_page('features')):
                wp_enqueue_script( 'modaal-script', 'https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/js/modaal.min.js', array( 'jquery' ) , '', true );
                wp_enqueue_script( 'modaal-config-script', '/js/modaal-config.js', array( 'jquery' ) , '', true );
            endif;

            //tab
            if(is_page('event')):
                //wp_enqueue_script( 'scrollhint-script', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array( 'jquery' ) , '', true );
                wp_enqueue_script( 'tab-script', '/js/tab.js', array( 'jquery' ) , '', true );
            endif;

        endif;
    endif;
}
add_action('wp_print_scripts', 'add_scripts');


//標準メニューの削除
function remove_menus() {
//    remove_menu_page( 'index.php' ); // ダッシュボード.
    remove_menu_page( 'edit.php' ); // 投稿.
//    remove_menu_page( 'upload.php' ); // メディア.
//    remove_menu_page( 'edit.php?post_type=page' ); // 固定.
    remove_menu_page( 'edit-comments.php' ); // コメント.
//    remove_menu_page( 'themes.php' ); // 外観.
//    remove_menu_page( 'plugins.php' ); // プラグイン.
//    remove_menu_page( 'users.php' ); // ユーザー.
    remove_menu_page( 'tools.php' ); // ツール.
//    remove_menu_page( 'options-general.php' ); // 設定.
    if(!current_user_can('administrator')){ // 'administrator'(管理者)以外の権限で実行
        remove_menu_page( 'edit.php?post_type=page' ); // 固定.
        remove_menu_page( 'edit.php?post_type=mw-wp-form' ); // MW WP Form.
    }
}
add_action( 'admin_menu', 'remove_menus', 999 );

//管理バーの要素を非表示に設定する
function remove_admin_bar_menu_control( $wp_admin_bar ) {
	//ログインユーザーが管理者権限の場合は何もしない
	if ( current_user_can( 'administrator' ) ) {
		return;
	}
	//ログインユーザーが管理者権限以外の場合は非表示を実行
	$wp_admin_bar->remove_menu( 'wp-logo' );      // WordPressロゴ
	$wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 → ダッシュボード（ウェブサイト側）
	$wp_admin_bar->remove_menu( 'themes' );       // サイト名 → テーマ（ウェブサイト側）
	$wp_admin_bar->remove_menu( 'customize' );    // サイト名 → カスタマイズ（ウェブサイト側）
	$wp_admin_bar->remove_menu( 'comments' );     // コメント
	$wp_admin_bar->remove_menu( 'updates' );      // 更新
	$wp_admin_bar->remove_menu( 'view' );         // 投稿を表示
	$wp_admin_bar->remove_menu( 'new-content' );  // 新規
	$wp_admin_bar->remove_menu( 'new-post' );     // 新規 → 投稿
	$wp_admin_bar->remove_menu( 'new-media' );    // 新規 → メディア
	$wp_admin_bar->remove_menu( 'new-link' );     // 新規 → リンク
	$wp_admin_bar->remove_menu( 'new-page' );     // 新規 → 固定ページ
	$wp_admin_bar->remove_menu( 'new-user' );     // 新規 → ユーザー
}
add_action('admin_bar_menu', 'remove_admin_bar_menu_control', 111);


//ダッシュボードにある項目を消す
function remove_dashboard_widget() {
  remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); //サイトヘルスステータス
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); //概要
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); //アクティビティ
//  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); //クイックドラフト
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); //WordPressニュース
  remove_action( 'welcome_panel', 'wp_welcome_panel' ); //ようこそ
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

//カスタムメニューの追加
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'mainmenu' => 'Main Menu',
    'footmenu'  => 'Foot Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

/* body_class() */
function my_body_class($classes) {
    $classes = [];
    if (is_front_page()) {
        $classes[] = 'page-home';
    }elseif(is_page()) {
        $page = get_post();
        $classes[] = 'page-' . $page->post_name;
    }elseif( is_post_type_archive('news')){
        $classes[] = 'page-news archive-news';
    }elseif(is_tax('news_category')){
        $classes[] = 'page-news taxnomy-news';
    }elseif( is_singular('news')){
        $classes[] = 'page-news single-news';
    }
    return $classes;
}
add_filter('body_class', 'my_body_class');

//メニューのクラスとID削除
function my_custom_nav( $classes, $item ) {
    $addclass = array('nav-item');
    //在表示しているページの最も上の要素に付与されるクラス名を残す
    if( in_array('current-menu-ancestor', $classes)){
        $addclass[] = 'current-ancestor';
    }
    //現在表示しているページの親の要素に付与されるクラス名を残す
    if( in_array('current-page-parent', $classes)){
        $addclass[] = 'current-parent';
    }
    //現在表示しているページのメニュー項目に付与されるクラス名を残す
    if( in_array('current-menu-item', $classes)){
        $addclass[] = 'current-item';
    }
    //トップページの項目に付与されるクラス名を残す
    if( in_array('menu-item-home', $classes)){
        $addclass[] = 'home-item';
    }

    // 管理画面からメニューにclassを設定した場合設定したclass以外を削除
    if( $classes[0] ){
        array_splice( $classes, 1 );
    }else{ 
        $classes = [];
    }

    // liタグにクラスを付与
    $classes = array_merge($classes, $addclass); 
    return $classes;
}
add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );

//メニューの<a>にクラスを付与する
function my_nav_menu_attr_add( $atts, $item, $args ) {
    // aタグにクラスを付与
    $atts['class'] = 'nav_link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attr_add', 10, 5 );

// メニューのIDを削除する 
function removeId( $id ){ 
    return $id = array(); 
}
add_filter('nav_menu_item_id', 'removeId', 10, 3 );


//固定ページへのファイル読み込みのショートコード
function include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default',
        'option'  => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/parts/$file.php");
    return ob_get_clean();
}
add_shortcode('include', 'include_my_php');

// サイトURLのショートコード
function shortcode_siteurl() {
    return site_url();
}
add_shortcode('surl', 'shortcode_siteurl');

// sourceタグでショートコード
function my_wp_kses_allowed_html( $tags, $context ) {
    $tags['source']['srcset'] = true;
    return $tags;
  }
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );

//カスタム投稿パーマリンク「/taxonomy/」削除
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
    return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);
add_rewrite_rule( 'news/([^/]+)/?$', 'index.php?news_category=$matches[1]', 'top' );
add_rewrite_rule( 'news/([^/]+)/page/([0-9]+)/?$', 'index.php?news_category=$matches[1]&paged=$matches[2]', 'top' );

// ACF用 オプションページ
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => '共同研究プロジェクト',
    'menu_title' => '共同研究プロジェクト',
    'menu_slug' => 'options-project',
    'capability' => 'edit_posts',
    'redirect' => false,
  ));
}
?>