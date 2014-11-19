<?php

// check 'local.sqlite' exists
$localDatabaseFile = storage_path().'/database/local.sqlite';

if (!file_exists($localDatabaseFile)) {
	// touch 'local.sqlite'
	Log::info('Make Sqlite File "'.$localDatabaseFile.'"');
	file_put_contents($localDatabaseFile, '');
}
