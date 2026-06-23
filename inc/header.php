<?php
require_once dirname(__DIR__) . '/config.php';

// ── Cabeçalhos de segurança ───────────────────────
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
header_remove('X-Powered-By');

// ── Content Security Policy ───────────────────────
// Permite apenas recursos do próprio domínio + Google Fonts + WhatsApp
header("Content-Security-Policy: "
    . "default-src 'self'; "
    . "script-src 'self' 'unsafe-inline'; "
    . "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
    . "font-src 'self' https://fonts.gstatic.com; "
    . "img-src 'self' data:; "
    . "connect-src 'self'; "
    . "frame-ancestors 'none'; "
    . "base-uri 'self'; "
    . "form-action 'self';"
);

// ── Minificação do HTML de saída ─────────────────
function _minify_html(string $html): string {
    $html = preg_replace('/<!--(?!\[if).*?-->/s', '', $html);
    $html = preg_replace('/>\s{2,}</s', '> <', $html);
    $html = preg_replace('/^\s+|\s+$/m', '', $html);
    return $html;
}
ob_start('_minify_html');
?>
