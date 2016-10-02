<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<style>
#friend-head,.footer-info{
	display:inline;
}
p#friend-head{
    cursor: pointer;
	color: #7ebb8a;
}

</style>

<!--  #footer -->
<div class="footer">
  <div class="footer-pic">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 428.81 428.81" version="1.1"><path class="svg-clover" d="M81.06 197.08c24.35 35.02 66.73 4.15 98.71-24.63 -28.78 31.99-59.65 74.37-24.63 98.72 19.56 13.6 39.4-7.75 54.25-12.39 -0.05 7.49-0.29 14.99-0.9 22.46 -1.58 20.2-4.8 40.23-10.56 59.67 -5.71 19.28-13.69 38.09-24.58 55.03 -6.95 10.87-10.87 27.32 5.92 32.1 17.34 4.94 23.23-14.96 28.03-27.12 6.78-17.19 11.37-35.35 13.99-53.63 4.19-29.28 3.56-58.68-0.15-87.91 14.64 5.62 33.71 24.88 52.53 11.8 35.02-24.35 4.15-66.73-24.63-98.72 31.99 28.78 74.37 59.65 98.71 24.63 15.2-21.85-13.26-44.06-13.26-59.26 0-15.2 28.46-37.4 13.26-59.26 -24.35-35.02-66.73-4.14-98.71 24.63 28.78-31.99 59.65-74.37 24.63-98.72 -21.86-15.2-44.06 13.26-59.26 13.26 -15.19 0-37.4-28.46-59.26-13.26 -35.02 24.35-4.15 66.73 24.63 98.72 -31.98-28.78-74.36-59.65-98.71-24.63 -15.2 21.86 13.26 44.07 13.26 59.26C94.31 153.01 65.86 175.22 81.06 197.08zM213.1 137.4c-6.24-19.16-5.77-44.53 1.3-62.83 7.08 18.3 7.54 43.68 1.3 62.84 19.16-6.2 44.51-5.8 62.79 1.31 -18.27 7.1-43.59 7.51-62.75 1.33 6.17 19.15 5.76 44.45-1.34 62.7 -7.1-18.25-7.51-43.54-1.34-62.69 -19.15 6.21-44.47 5.73-62.75-1.33C168.6 131.65 193.94 131.17 213.1 137.4z" fill="#8edc9d"></path></svg>

  </div>
  <div class="footer-text">
		
		<div class="footer-info">
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>" class="link"><?php $this->options->title(); ?></a>
            
		</div>
        <p id="friend-head">朋友们</p>
        <div id="friends">
            <a href="http://www.wecho.cc/" class="link" target="_blank">SNlone</a>
            <i>/</i>
            <a href="http://caisiduo.xyz/" class="link" target="_blank">CAISIDUO</a>
            <i>/</i>
            <a href="http://sqiu.me/" class="link" target="_blank">三秋</a>
            <i>/</i>
            <a href="https://hran.me/" class="link" target="_blank">hran</a>  
            <i>/</i>
            <a href="http://techair.cc/" class="link" target="_blank">飞翔的技术宅</a>
            <i>/</i>
            <a href="http://fyzgxy.cn/" class="link" target="_blank">雷的窝</a>          
            <i>/</i>
            <a href="https://www.dreamwings.cn/" class="link" target="_blank">千千</a>
            <i>/</i>
            <a href="http://czduban.com/" class="link" target="_blank">以歌</a>
            <i>/</i>
            <a href="http://yufanboke.top/" class="link" target="_blank">yufan</a>                    		
             <i>/</i>
             <a href="https://quericy.me/" class="link" target="_blank">quericy</a>                    		
             <i>/</i>
            <a href="https://mist.ink/" class="link" target="_blank">十四行詩</a>   
            <i>/</i>
            <a href="http://ryli.pw/" class="link" target="_blank">RY</a>      
            <i>/</i>
            <a href="https://blog.timelovelife.com/" class="link" target="_blank">Jackrabbit</a> 
            <i>/</i>
            <a href="http://www.4zen.top/" class="link" target="_blank">1900</a>          
        </div>
</div>
</div>

<script>
var $content = $("#friends");
$content.hide();
$(function(){
$("#friend-head").bind("click",function(){
	if($content.is(":visible")){
		$content.fadeOut();
	}
	else{
		$content.fadeIn();
	}
})
});
</script>
    

<?php $this->footer(); ?>
