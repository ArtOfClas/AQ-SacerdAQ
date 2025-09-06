<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    /**
     * Base Site URL
     *
     * URL to your CodeIgniter root. Typically this will be your base URL,
     * WITH a trailing slash:
     *
     *    http://example.com/
     *
     * @var string
     */
    public string $baseURL = 'http://localhost/sacredaq-reborn/';

    /**
     * If this is not set then CodeIgniter will guess the protocol and path.
     * You should set this explicitly and never rely on auto-guessing,
     * especially in production environments.
     *
     * @var string
     */
    public string $allowedHostnames = '';

    /**
     * Index File
     *
     * Typically this will be your index.php file, unless you've renamed it to
     * something else. If you are using mod_rewrite to remove the page set this
     * variable so that it is blank.
     *
     * @var string
     */
    public string $indexPage = '';  // Set to '' for clean URLs with mod_rewrite

    /**
     * URI PROTOCOL
     *
     * This item determines which getServer global should be used to retrieve the
     * URI string.  The default setting of 'REQUEST_URI' works for most servers.
     * If your links do not seem to work, try one of the other delicious flavors:
     *
     * 'REQUEST_URI'    Uses $_SERVER['REQUEST_URI']
     * 'QUERY_STRING'   Uses $_SERVER['QUERY_STRING']
     * 'PATH_INFO'      Uses $_SERVER['PATH_INFO']
     *
     * WARNING: If you set this to 'PATH_INFO', URIs will always be URL-decoded!
     *
     * @var string
     */
    public string $uriProtocol = 'REQUEST_URI';

    /**
     * Default Locale
     *
     * The Locale roughly represents the language and location that your visitor
     * is viewing the site from. It affects the language strings and other
     * strings (like currency markers, numbers, etc), that your program
     * should run under for this request.
     *
     * @var string
     */
    public string $defaultLocale = 'en';

    /**
     * Negotiate Locale
     *
     * If true, the current Request object will automatically determine which
     * localization to use based on the value of the Accept-Language header.
     *
     * If false, no automatic detection will be performed.
     *
     * @var bool
     */
    public bool $negotiateLocale = false;

    /**
     * Supported Locales
     *
     * If $negotiateLocale is true, this array lists the locales supported
     * by the application in descending order of priority. If no localization
     * is found that matches, the first locale will be used.
     *
     * @var string[]
     */
    public array $supportedLocales = ['en'];

    /**
     * Application Timezone
     *
     * The default timezone that will be used in your application to display
     * dates with the date helper, and can be retrieved through app_timezone()
     *
     * @var string
     */
    public string $appTimezone = 'America/Chicago';

    /**
     * Default Character Set
     *
     * This determines which character set is used by default in various methods
     * that require a character set to be provided.
     *
     * @see http://php.net/htmlspecialchars for a list of supported charsets.
     *
     * @var string
     */
    public string $charset = 'UTF-8';

    /**
     * Force Global Secure Requests
     *
     * If true, this will force every request made to this application to be
     * made via a secure connection (HTTPS). If the incoming request is not
     * secure, the user will be redirected to a secure version of the page
     * and the HTTP Strict Transport Security (HSTS) header will be set.
     *
     * @var bool
     */
    public bool $forceGlobalSecureRequests = false;

    /**
     * Session Driver
     *
     * The session storage driver to use:
     * - `CodeIgniter\Session\Handlers\FileHandler`
     * - `CodeIgniter\Session\Handlers\DatabaseHandler`
     * - `CodeIgniter\Session\Handlers\MemcachedHandler`
     * - `CodeIgniter\Session\Handlers\RedisHandler`
     *
     * @var string
     */
    public string $sessionDriver = 'CodeIgniter\Session\Handlers\FileHandler';

    /**
     * Session Cookie Name
     *
     * The session cookie name, must contain only [0-9a-z_-] characters
     *
     * @var string
     */
    public string $sessionCookieName = 'ci_session';

    /**
     * Session Expiration
     *
     * The number of SECONDS you want the session to last.
     * Setting to 0 (zero) means expire when the browser is closed.
     *
     * @var int
     */
    public int $sessionExpiration = 7200;

    /**
     * Session Save Path
     *
     * The location to save sessions to and is driver dependent.
     * For the 'files' driver, it's a path to a writable directory.
     * WARNING: Only absolute paths are supported!
     *
     * @var string
     */
    public string $sessionSavePath = WRITEPATH . 'session';

    /**
     * Session Match IP
     *
     * Whether to match the user's IP address when reading the session data.
     *
     * WARNING: If you're using the database driver, don't forget to update
     *          your session table's PRIMARY KEY when changing this setting.
     *
     * @var bool
     */
    public bool $sessionMatchIP = false;

    /**
     * Session Time to Update
     *
     * How many seconds between CI regenerating the session ID.
     *
     * @var int
     */
    public int $sessionTimeToUpdate = 300;

    /**
     * Session Regenerate Destroy
     *
     * Whether to destroy session data associated with the old session ID
     * when auto-regenerating the session ID. When set to FALSE, the data
     * will be later deleted by the garbage collector.
     *
     * @var bool
     */
    public bool $sessionRegenerateDestroy = false;

    /**
     * Cookie Related Variables
     *
     * Set to .your-domain.com for site-wide cookies.
     *
     * @var string
     */
    public string $cookieDomain = '';

    public string $cookiePath = '/';

    public bool $cookieSecure = false;

    public bool $cookieHTTPOnly = true;

    public ?string $cookieSameSite = 'Lax';

    /**
     * Reverse Proxy IPs
     *
     * If your server is behind a reverse proxy, you must whitelist the proxy
     * IP addresses from which CodeIgniter should trust headers such as
     * HTTP_X_FORWARDED_FOR and HTTP_CLIENT_IP in order to properly identify
     * the visitor's IP address.
     *
     * You can use both an array or a comma-separated list of proxy addresses,
     * as well as specifying whole subnets. Here are a few examples:
     *
     * Comma-separated:  '10.0.1.200,192.168.5.0/24'
     * Array:            ['10.0.1.200', '192.168.5.0/24']
     *
     * @var string|string[]
     */
    public $proxyIPs = '';

    /**
     * CSRF Token Name
     *
     * The token name.
     *
     * @deprecated Use `Config\Security` $tokenName property instead of using this property.
     *
     * @var string
     */
    public string $CSRFTokenName = 'csrf_test_name';

    /**
     * CSRF Header Name
     *
     * The header name.
     *
     * @deprecated Use `Config\Security` $headerName property instead of using this property.
     *
     * @var string
     */
    public string $CSRFHeaderName = 'X-CSRF-TOKEN';

    /**
     * CSRF Cookie Name
     *
     * The cookie name.
     *
     * @deprecated Use `Config\Security` $cookieName property instead of using this property.
     *
     * @var string
     */
    public string $CSRFCookieName = 'csrf_cookie_name';

    /**
     * CSRF Expire
     *
     * The number in seconds the token should expire.
     *
     * @deprecated Use `Config\Security` $expire property instead of using this property.
     *
     * @var int
     */
    public int $CSRFExpire = 7200;

    /**
     * CSRF Regenerate token
     *
     * Regenerate token on every submission?
     *
     * @deprecated Use `Config\Security` $regenerate property instead of using this property.
     *
     * @var bool
     */
    public bool $CSRFRegenerate = true;

    /**
     * CSRF Redirect
     *
     * Redirect to previous page with error on failure?
     *
     * @deprecated Use `Config\Security` $redirect property instead of using this property.
     *
     * @var bool
     */
    public bool $CSRFRedirect = true;

    /**
     * CSRF SameSite
     *
     * Setting for CSRF SameSite cookie token. Allowed values are:
     * None - Lax - Strict - ''.
     *
     * Defaults to `Lax` as recommended in this link:
     *
     * @see https://portswigger.net/web-security/csrf/samesite-cookies
     * @deprecated Use `Config\Security` $samesite property instead of using this property.
     *
     * @var string
     */
    public string $CSRFSameSite = 'Lax';

    /**
     * Content Security Policy
     *
     * Enables the Response's Content Security Policy to be set.
     *
     * @var bool
     */
    public bool $CSPEnabled = false;
}