<div class="sixteen columns">
	<div class="ba-thankyou container clearfix" style="width: 100%;margin-bottom:200px;">
		<div class="ba-order-rooms"  style="font-size: 16px;margin-top: 20px;color:#EC0035;">
            <center>Eroare</center>
						<center>{{$message}}</center>
		  <center><a href="http://hello2.infora.ro/{{Session::get('formdata')['redirect_uri']}}" class="ba-blue-button-m" style="width: 200px;">Reintrodu datele cardului</a></center>
       	</div>
	</div>
{{Session::forget('formdata')}}
</div>
