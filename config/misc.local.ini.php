<?php
/*
    Copyright (c) 2021-2031, All rights reserved.
    This is NOT a freeware
    LICENSE: https://github.com/thefunpower/core/blob/main/LICENSE.md 
    Connect Email: sunkangchina@163.com 
    Code Vesion: v1.0.x
*/

global $misc_config;

/**
 * misc('jquery,vue,element');  
 */ 

/**
 * https://purecss.io/layouts/side-menu/#company
 */
$misc_config['pure'] = [
	'static/css/pure.css', 
];



$misc_config['node'] = [
	'static/js/common.js',
];

$misc_config['css'] = [
	'static/css/admin.css',
];

/**
* stackedit.js 
*/
 
$misc_config['stackedit'] = [
	'static/js/stackedit.js', 
];
/**
 *https://purecss.io/start/
 */
$misc_config['pure'] = [
	'static/css/pure.css',
];

/*
https://github.com/highlightjs/highlight.js
hljs.highlightAll();
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
      hljs.highlightElement(el);
    });
  });
</script>
*/
$misc_config['hljs'] = [
	'static/lib/hljs/highlight.min.css',
	'static/lib/hljs/highlight.min.js',
];



/**
* https://animate.style/
*/
$misc_config['animate'] = [
	'static/css/animate.min.css', 
];


$misc_config['fontawesome'] = [
	'static/lib/font-awesome/css/font-awesome.min.css',
];
  
 
/**
* https://fomantic-ui.com/introduction/getting-started.html
*/
$misc_config['fui'] = [
	'static/lib/fomantic-ui/dist/semantic.min.css', 
	'static/lib/fomantic-ui/dist/semantic.min.js', 
]; 


/**
* https://github.com/abodelot/jquery.json-viewer
* misc('json-viewer');
<pre id="json-renderer"></pre> 
var data = {
  "foobar": "foobaz"
};
$('#json-renderer').jsonViewer(data); 
*/
$misc_config['json-viewer'] = [
	'static/lib/json-viewer/jquery.json-viewer.js',
	'static/lib/json-viewer/jquery.json-viewer.css',
];



/**
 * https://pandao.github.io/editor.md/
 */
$misc_config['md'] = [
	'static/lib/editor.md/editormd.amd.min.js',
];



// https://treejs.cn/v3/faq.php#_206
$misc_config['ztree'] = [
	'static/lib/ztree/css/zTreeStyle/zTreeStyle.css',
	'static/lib/ztree/js/jquery.ztree.core.min.js',
];

//////////////////////////////////////////////

$misc_config['element'] = [
	'static/lib/element-ui/theme-chalk/index.css',
	'static/lib/element-ui/index.js',
];
/**
* https://layui.github.io/
* 2.7.6
*/
$misc_config['layui'] = [
	'static/lib/layui/layui.js',
	'static/lib/layui/css/layui.css',
];

$misc_config['jquery'] = [
	'static/js/jquery.js',
	'static/js/jquery-migrate-3.0.0.js',
	'static/js/jquery.cookie.js',
	'static/js/jquery.form.js',
	'static/js/math.js', 
	'static/js/md5.js', 
];
  

$misc_config['vue'] = [
	'static/js/vue.js',
];


$misc_config['wangEditor'] = [ 
	'static/lib/wangeditor/editor/dist/css/style.css',
	'static/lib/wangeditor/editor/dist/index.js', 
];
/**
 * https://sortablejs.github.io/Sortable/
 * https://github.com/SortableJS/Vue.Draggable
 */
$misc_config['sortable'] = [
	'static/lib/sortable/sortable.js',  
	'static/lib/sortable/vuedraggable.umd.js'
];


$misc_config['echarts'] = [
	'static/js/echarts.js',
];


$misc_config['bs5'] = [
	'static/lib/bs5/css/bootstrap.min.css',
	'static/lib/bs5/js/bootstrap.bundle.min.js', 
];

$misc_config['jui'] = [
	'static/lib/jquery-ui/jquery-ui.min.css',
	'static/lib/jquery-ui/jquery-ui.min.js',
];
