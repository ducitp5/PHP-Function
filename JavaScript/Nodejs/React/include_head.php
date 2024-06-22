<!--    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>-->
<!--    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>-->
<!--    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>-->
<?php
    function getCurrentUrl() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $requestUri = $_SERVER['REQUEST_URI'];

        return $protocol . $host . $requestUri;
    }

    function getBaseUrl() {
        // Determine the protocol (HTTP or HTTPS)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        // Get the host name (e.g., localhost or example.com)
        $host = $_SERVER['HTTP_HOST'];

        // Return the base URL
        return $protocol . $host;
    }

    function get_file_as_url(){
        // Determine the directory of the current script (include_head.php)
        $fileSystemDir = dirname(__FILE__);
        $fileSystemDir = str_replace('\\', '/', $fileSystemDir);

        $hostUrl = getBaseUrl();
        $documentRootDir = $_SERVER['DOCUMENT_ROOT'];

        return str_replace($documentRootDir, $hostUrl, $fileSystemDir);
    }

?>

<script src="<?php echo get_file_as_url() . '/React_lib/react.development.js'; ?>" crossorigin></script>
<script src="<?php echo get_file_as_url() . '/React_lib/react-dom.development.js';; ?>" crossorigin></script>
<script src="<?php echo get_file_as_url() . '/React_lib/babel.min.js'; ?>" ></script>
