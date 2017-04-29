/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
var twentyseventeenScreenReaderText = {"quote":"\u2019","expand":"\u30b5\u30d6\u30e1\u30cb\u30e5\u30fc\u3092\u8868\u793a","collapse":"\u30b5\u30d6\u30e1\u30cb\u30e5\u30fc\u3092\u975e\u8868\u793a","icon":"\u2193"};
(function() {
    html = document.getElementsByTagName('html')[0];
    html.className = html.className.replace(/\bno-js\b/,'js');
    var isIe = /(trident|msie)/i.test( navigator.userAgent );

    if ( isIe && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

                element.focus();
            }
        }, false );
    }
})();
