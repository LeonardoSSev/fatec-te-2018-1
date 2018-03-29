<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com.br/assets/img/bootstrap-stack.png">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S JUST JUNK FOR OUR DOCS!
        // ++++++++++++++++++++++++++++++++++++++++++
        /*!
        * Copyright 2014-2015 Twitter, Inc.
        *
        * Licensed under the Creative Commons Attribution 3.0 Unported License. For
        * details, see https://creativecommons.org/licenses/by/3.0/.
        */
        // Intended to prevent false-positive bug reports about Bootstrap not working properly in old versions of IE due to folks testing using IE's unreliable emulation modes.
        (function () {
        'use strict';

        function emulatedIEMajorVersion() {
            var groups = /MSIE ([0-9.]+)/.exec(window.navigator.userAgent)
            if (groups === null) {
            return null
            }
            var ieVersionNum = parseInt(groups[1], 10)
            var ieMajorVersion = Math.floor(ieVersionNum)
            return ieMajorVersion
        }

        function actualNonEmulatedIEMajorVersion() {
            // Detects the actual version of IE in use, even if it's in an older-IE emulation mode.
            // IE JavaScript conditional compilation docs: https://msdn.microsoft.com/library/121hztk3%28v=vs.94%29.aspx
            // @cc_on docs: https://msdn.microsoft.com/library/8ka90k2e%28v=vs.94%29.aspx
            var jscriptVersion = new Function('/*@cc_on return @_jscript_version; @*/')() // jshint ignore:line
            if (jscriptVersion === undefined) {
            return 11 // IE11+ not in emulation mode
            }
            if (jscriptVersion < 9) {
            return 8 // IE8 (or lower; haven't tested on IE<8)
            }
            return jscriptVersion // IE9 or IE10 in any mode, or IE11 in non-IE11 mode
        }

        var ua = window.navigator.userAgent
        if (ua.indexOf('Opera') > -1 || ua.indexOf('Presto') > -1) {
            return // Opera, which might pretend to be IE
        }
        var emulated = emulatedIEMajorVersion()
        if (emulated === null) {
            return // Not IE
        }
        var nonEmulated = actualNonEmulatedIEMajorVersion()

        if (emulated !== nonEmulated) {
            window.alert('WARNING: You appear to be using IE' + nonEmulated + ' in IE' + emulated + ' emulation mode.\nIE emulation modes can behave significantly differently from ACTUAL older versions of IE.\nPLEASE DON\'T FILE BOOTSTRAP BUGS based on testing in IE emulation modes!')
        }
        })();
    </script>
  </head>