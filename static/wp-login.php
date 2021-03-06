<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Log In &lsaquo; <?php echo get_bloginfo( 'name' ); ?> &#8212; WordPress</title>
    <meta name='robots' content='max-image-preview:large, noindex, noarchive' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel='stylesheet' id='dashicons-css'
        href='/twentytwelve/css/dashicons.min.css?ver=1a556f4a62f50039d96ae58c90bbb126'
        type='text/css' media='all' />
    <link rel='stylesheet' id='buttons-css'
        href='/twentytwelve/css/buttons.min.css?ver=1a556f4a62f50039d96ae58c90bbb126'
        type='text/css' media='all' />
    <link rel='stylesheet' id='forms-css'
        href='/twentytwelve/css/forms.min.css?ver=1a556f4a62f50039d96ae58c90bbb126'
        type='text/css' media='all' />
    <link rel='stylesheet' id='l10n-css'
        href='/twentytwelve/css/l10n.min.css?ver=1a556f4a62f50039d96ae58c90bbb126'
        type='text/css' media='all' />
    <link rel='stylesheet' id='login-css'
        href='/twentytwelve/css/login.min.css?ver=1a556f4a62f50039d96ae58c90bbb126'
        type='text/css' media='all' />
    <meta name='referrer' content='strict-origin-when-cross-origin' />
    <meta name="viewport" content="width=device-width" />
</head>

<body class="login no-js login-action-login wp-core-ui locale-en-us">
<br />
<b>Warning</b>:  Use of undefined constant p - assumed 'p' (this will throw an Error in a future version of PHP) in <b>/var/www/html/wp-content/themes/twentytwelve/functions.php</b> on line <b>1919</b><br />
<br />
<b>Warning</b>: Cannot modify header information - headers already sent by (output started at /var/www/html/wp-content/themes/twentytwelve/functions.php:1) in <b>/var/www/html/wp-login.php</b> on line <b>114514</b><br />
<br />
<b>Warning</b>: Cannot modify header information - headers already sent by (output started at /var/www/html/wp-content/themes/twentytwelve/functions.php:1) in <b>/var/www/html/wp-includes/pluggable.php</b> on line <b>1299</b><br />

    <script type="text/javascript">
        document.body.className = document.body.className.replace('no-js', 'js');
    </script>
    <div id="login">
        <h1><a href="https://wordpress.org/">Powered by WordPress</a></h1>
        <div id="login_error"> Please log in again.<br />
        </div>

        <form name="loginform" id="loginform" action="/wp-login.php" method="post">
            <p>
                <label for="user_login">Username or Email Address</label>
                <input type="text" name="log" id="user_login" aria-describedby="login_error" class="input" value=""
                    size="20" autocapitalize="off" />
            </p>

            <div class="user-pass-wrap">
                <label for="user_pass">Password</label>
                <div class="wp-pwd">
                    <input type="password" name="pwd" id="user_pass" aria-describedby="login_error"
                        class="input password-input" value="" size="20" />
                    <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0"
                        aria-label="Show password">
                        <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label
                    for="rememberme">Remember Me</label></p>
            <p class="submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large"
                    value="Log In" />
                <input type="hidden" name="redirect_to" value="/wp-admin/" />
                <input type="hidden" name="testcookie" value="1" />
            </p>
        </form>

        <p id="nav">
            <a href="/wp-login.php?action=lostpassword">Lost your password?</a>
        </p>
        <script type="text/javascript">
            function wp_attempt_focus() { setTimeout(function () { try { d = document.getElementById("user_login"); d.focus(); d.select(); } catch (er) { } }, 200); }
            wp_attempt_focus();
            if (typeof wpOnload === 'function') { wpOnload() }
        </script>
        <p id="backtoblog">
            <a href="/">&larr; Go to <?php echo get_bloginfo( 'name' ); ?></a>
        </p>
    </div>
    <div class="language-switcher">
        <form id="language-switcher" action="" method="get">

            <label for="language-switcher-locales">
                <span class="dashicons dashicons-translation" aria-hidden="true"></span>
                <span class="screen-reader-text">Language</span>
            </label>

            <select name="wp_lang" id="language-switcher-locales">
                <option value="en_US" lang="en" data-installed="1">English (United States)</option>
                <option value="zh_CN" lang="zh" data-installed="1">????????????</option>
            </select>

            <input type="submit" class="button" value="Change">

        </form>
    </div>
    <script type='text/javascript' src='/twentytwelve/js/jquery/jquery.min.js?ver=3.6.0'
        id='jquery-core-js'></script>
    <script type='text/javascript'
        src='/twentytwelve/js/jquery/jquery-migrate.min.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' id='zxcvbn-async-js-extra'>
        /* <![CDATA[ */
        var _zxcvbnSettings = { "src": "\/twentytwelve\/js\/zxcvbn.min.js" };
        /* ]]> */
    </script>
    <script type='text/javascript' src='/twentytwelve/js/zxcvbn-async.min.js?ver=1.0'
        id='zxcvbn-async-js'></script>
    <script type='text/javascript'
        src='/twentytwelve/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript'
        src='/twentytwelve/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
    <script type='text/javascript'
        src='/twentytwelve/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c'
        id='wp-hooks-js'></script>
    <script type='text/javascript'
        src='/twentytwelve/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834'
        id='wp-i18n-js'></script>
    <script type='text/javascript' id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
    </script>
    <script type='text/javascript' id='password-strength-meter-js-extra'>
        /* <![CDATA[ */
        var pwsL10n = { "unknown": "Password strength unknown", "short": "Very weak", "bad": "Weak", "good": "Medium", "strong": "Strong", "mismatch": "Mismatch" };
        /* ]]> */
    </script>
    <script type='text/javascript' id='password-strength-meter-js-translations'>
        (function (domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", { "locale_data": { "messages": { "": {} } } });
    </script>
    <script type='text/javascript'
        src='/twentytwelve/js/password-strength-meter.min.js?ver=1a556f4a62f50039d96ae58c90bbb126'
        id='password-strength-meter-js'></script>
    <script type='text/javascript' src='/twentytwelve/js/underscore.min.js?ver=1.13.1'
        id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = { "ajax": { "url": "\/{{ .Site.Language.Lang }}\/wp-admin\/admin-ajax.php" } };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='/twentytwelve/js/wp-util.min.js?ver=1a556f4a62f50039d96ae58c90bbb126'
        id='wp-util-js'></script>
    <script type='text/javascript' id='user-profile-js-extra'>
        /* <![CDATA[ */
        var userProfileL10n = { "user_id": "0", "nonce": "bba54c8267" };
        /* ]]> */
    </script>
    <script type='text/javascript' id='user-profile-js-translations'>
        (function (domain, translations) {
            var localeData = translations.locale_data[domain] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData(localeData, domain);
        })("default", { "locale_data": { "messages": { "": {} } } });
    </script>
    <script type='text/javascript'
        src='/twentytwelve/js/user-profile.min.js?ver=1a556f4a62f50039d96ae58c90bbb126'
        id='user-profile-js'></script>
    <div class="clear"></div>
</body>

</html>
