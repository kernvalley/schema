<?php
if (! function_exists('php_check_syntax')) {
	function php_check_syntax(string $filename, string &$error_message = ''): bool
	{
		try {
			$cmd = sprintf('php -l %s', escapeshellarg($filename));
			$error_message = @exec($cmd, $output, $ret);
			return $ret === 0;
		} catch(Throwable $e) {
			$error_message = $e->getMessage();
			return false;
		}
	}
}
