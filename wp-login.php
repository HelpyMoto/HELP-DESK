<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Log In &lsaquo; help desk &#8212; WordPress</title>
	<meta name="robots" content="max-image-preview:large, noindex, noarchive">
<script src="/wp-includes/js/jquery/jquery.min.js?ver=3.6.1" id="jquery-core-js"></script>
<script src="/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script src="/wp-content/plugins/js-support-ticket/includes/js/common.js?ver=6.1.1" id="commonjs-js"></script>
<script src="/wp-content/plugins/js-support-ticket/includes/js/responsivetable.js?ver=6.1.1" id="responsivetablejs-js"></script>
<script src="/wp-content/plugins/js-support-ticket/includes/js/jquery.form-validator.js?ver=6.1.1" id="jsst-formvalidator-js"></script>
<script id="jsst-formvalidator-js-after">jQuery.formUtils.LANG = {
            errorTitle: "Form submission failed!",
            requiredFields: "You have not answered all required fields",
            badTime: "You have not given a correct time",
            badEmail: "You have not given a correct e-mail address",
            badTelephone: "You have not given a correct phone number",
            badSecurityAnswer: "You have not given a correct answer to the security question",
            badDate: "You have not given a correct date",
            lengthBadStart: "The input value must be between ",
            lengthBadEnd: " characters",
            lengthTooLongStart: "The input value is longer than ",
            lengthTooShortStart: "The input value is shorter than ",
            notConfirmed: "Input values could not be confirmed",
            badDomain: "Incorrect domain value",
            badUrl: "The input value is not a correct URL",
            badCustomVal: "The input value is incorrect",
            badInt: "The input value was not a correct number",
            badSecurityNumber: "Your social security number was incorrect",
            badUKVatAnswer: "Incorrect UK VAT Number",
            badStrength: "The password isn't strong enough",
            badNumberOfSelectedOptionsStart: "You have to choose at least ",
            badNumberOfSelectedOptionsEnd: " answers",
            badAlphaNumeric: "The input value can only contain alphanumeric characters ",
            badAlphaNumericExtra: " and ",
            wrongFileSize: "The file you are trying to upload is too large",
            wrongFileType: "The file you are trying to upload is of the wrong type",
            groupCheckedRangeStart: "Please choose between ",
            groupCheckedTooFewStart: "Please choose at least ",
            groupCheckedTooManyStart: "Please choose a maximum of ",
            groupCheckedEnd: " item(s)",
            badCreditCard: "The credit card number is not correct",
            badCVV: "The CVV number was not correct"
        };</script>
<link rel="stylesheet" id="dashicons-css" href="/wp-includes/css/dashicons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="buttons-css" href="/wp-includes/css/buttons.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="forms-css" href="/wp-admin/css/forms.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="l10n-css" href="/wp-admin/css/l10n.min.css?ver=6.1.1" media="all">
<link rel="stylesheet" id="login-css" href="/wp-admin/css/login.min.css?ver=6.1.1" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-en-us">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://wordpress.org/">Powered by WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/help%20desk/wordpress/wp-login.php" method="post">
			<p>
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Remember Me</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In">
									<input type="hidden" name="redirect_to" value="http://localhost/help%20desk/wordpress/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="/wp-login.php?action=lostpassword">Lost your password?</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="/">&larr; Go to help desk</a>		</p>
			</div>
			<script src="/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
<script src="/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.2" id="jquery-ui-accordion-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9" id="regenerator-runtime-js"></script>
<script src="/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};</script>
<script src="/wp-admin/js/password-strength-meter.min.js?ver=6.1.1" id="password-strength-meter-js"></script>
<script src="/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/help%20desk\/wordpress\/wp-admin\/admin-ajax.php"}};</script>
<script src="/wp-includes/js/wp-util.min.js?ver=6.1.1" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"44f45f71a0"};</script>
<script src="/wp-admin/js/user-profile.min.js?ver=6.1.1" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>