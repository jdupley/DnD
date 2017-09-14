<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dungeons &amp; Dragons Club</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
<header>
	<div id="logo" alt="DnD Club Logo" class="dndlogo dndlogoimg fullmargin">
		<!-- DnD Logo -->
	</div>
</header>

<script type="text/javascript">
$(document).ready(
function() {

    /*$(".cheekytoggle").click(function() {
        $(this).parent().next('lower-box').toggle();
		
		$(".addimg").toggleClass("open");
		
    });*/
	var toggles = document.getElementsByClassName("cheekytoggle");
	for ( var i = 0; i < toggles.length; i++ ){
		toggles[i].addEventListener("click", function(){
				var upperbox = this.parentElement;
				var lowerbox = upperbox.nextElementSibling;
				if(lowerbox.style.display !== "block"){
					lowerbox.style.display = "block";
				}else{
					lowerbox.style.display = "none";
				}
				var children = this.children;
				var grandchildren = children[1].children;
				if (grandchildren[0].className.match(/open/g)){
					grandchildren[0].className="addimg";
				}else{
					grandchildren[0].className="addimg open"
				}
				
		})
	}
	
});
</script>

	<div id="container" class="dicebg dicebgimg fullmargin">

		<div class="upper-box box">
			<a href="javascript:;" class="cheekytoggle box-link">
				<aside style="float: left; width: 50%; text-align:right;">
				<h1>Sign Up</h1>
				</aside>
				<content style="float: right; width: 45%; text-align:left;">
				<div class="addimg"></div>
				</content>
			</a>
		</div>
		<div class="lower-box open-box">		
			<p>Fill in your information to complete sign in</p>
		</div>
		<div class="upper-box box">
			<a href="javascript:;" class="cheekytoggle box-link">
				<aside style="float: left; width: 50%; text-align:right;">
				<h1>Register</h1>
				</aside>
				<content style="float: right; width: 45%; text-align:left;">
				<div class="addimg"></div>
				</content>
			</a>
		</div>
		<div class="lower-box open-box">		
			<p>Fill in your information to complete sign in</p>
		</div>

		<button class="center" type="submit" value="Submit"><h1>Submit</h1></button>
	
	</div>

</body>
</html>