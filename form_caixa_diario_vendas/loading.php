<?php
//__NM____NM__FUNCTION__NM__//
class EmptyClass {}	
	echo <<<HTML
		<style>
			.loader {
				position: fixed;
				left: 0px;
				top: 0px;
				width: 100%;
				height: 100%;
				z-index: 9999;
				background: url('https://i.pinimg.com/originals/8f/0f/1a/8f0f1a58f61495c4d27bec21c31d7a28.gif') 50% 50% no-repeat white;
			}
		</style>
		<div id="loader" class="loader"></div>
		<script>
			window.onload = function(){
				$(".loader").fadeOut("slow");
			};
		</script>
	HTML;
?>