<?php

	$path ='/dir0/dir1/myfile.php';
	$file = 'file1.txt';


	// Return filename

	// echo basename($path);


	// Return filename without ext
	// echo basename($path, '.php');

	// Return the dir name from path only dirnames though
	// echo dirname($path);

	// Check if file exists
	// (returns a boolean 1 = true nothing = false)
	// echo file_exists($file);

	// Get abs path
	// the whole path not the relative path
	// echo realpath($file);

	// Checks to see if it is file or a folder
	//(returns a boolean 1 = true nothing = false)
	// echo file_exists('test');

	// Check if writeable
	//(returns a boolean 1 = true nothing = false)
	// echo is_writable($file);

	// Check if readable
	// echo is_readable($file);

	// Get file size ( in bytes)
	// echo filesize($file);
/*
	// Create a directory
	mkdir('testing');

	// Remove dir if empty
	rmdir('testing');

	// Copy file
	//copy('nameOfFile', 'nameOfCopy');
	echo copy('file1.txt', 'file2.txt');

	// Rename file
	// /rename('name1.txt', 'name2.txt');
	rename('file2.txt', 'myfile.txt');

	// Delete File
	unlink('myfile.txt');

	// Write from file to string
	echo file_get_contents($file);

	// Write string to file
	echo file_put_contents($file, 'Goodbye World');
	// get the string
	$current = file_get_contents($file);
	// append to it
	$current .= ' Goodbye World';
	// write the data back
	//file_put_contents($file, $variableWithString);
	file_put_contents($file, $current);

	// Open File For Reading
	//fopen($fileName,'r(read)');
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	fclose($handle);
	*/

	// Open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt = "John Doe\n";
	fwrite($handle, $txt);
	$txt = "Steve Smith\n";
	fwrite($handle, $txt);
	fclose($handle);
