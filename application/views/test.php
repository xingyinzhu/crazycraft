<!--
<div class="container">
   <div class="span12">
   		
		<?php if(isset($images) && count($images)): 
					foreach ($images as $image):?>
					<p class="text-center">
						<img src="<?php echo $image['url']; ?>"  class="img-circle" width="300" height="300">
					</p>
		
		<?php endforeach;?>
		<?php endif; ?>	
   </div>
</div>
-->


<div class="container">
	<div class="span12">
		<table align="center" valign="middle" height="100%" width="100%">
			<tr>
				<td align="center" valign="middle">

					<?php if(isset($images) && count($images)): 
						foreach ($images as $image):?>
								<img src="<?php echo $image['url']; ?>" width="200" height="200">
						<?php endforeach;?>
					<?php endif; ?>	
				</td>
			</tr>
		</table>
	</div>
</div>