<?php
$commands = array();
foreach ($argv as $index => $value) {
	$commands["arg_" . $index] = $value;
}

if (substr($commands["arg_1"], 0, 2) === "--") {
	switch (substr($commands["arg_1"], 2, strlen($commands["arg_1"]))) {
		case "help":
			printHelp();
			break;
		case "list":
			printDocuList();
			break;
		case "lang":
			if (isset($commands["arg_2"])) {
				openDocu($commands["arg_2"]);
			}
			break;
		case "version":
			printVersion();
			break;
		default:
			echo "show help :: docu --help\n";
			break;
	}
} else if (substr($commands["arg_1"], 0, 1) === "-") {
	switch (substr($commands["arg_1"], 1, 1)) {
		case "h":
			printHelp();
			break;
		case "l":
			if (isset($commands["arg_2"])) {
				openDocu($commands["arg_2"]);
			}
			break;
		case "v":
			printVersion();
			break;
		default:
			echo "show help :: docu --help\n";
			break;
	}
} else if ($commands["arg_1"] === "list") {
	exec("ls ~/Development/docs/", $output);
	if (isset($output)) {
		foreach ($output as $index => $docu) {
			echo $docu . "\n";
		}
	}	
}

function openDocu ($lang) {
	$file = "~/Development/docs/" . $lang . "_doc/index.html";
	if (file_exists($file)) {
		exec("open " . $file);
	} else {
		exec("open ~/Development/docs/" . $lang . "*_doc*", $output);
	}
}

function printHelp () {
	echo "usage:\n";
	echo "help :: docu [-h|--help]\n";
	echo "version :: docu [-v|--version]\n";
	echo "open :: docu [-l|--lang] lang\n";	
}

function printVersion () {
	echo "docu 0.1 - 2014 Andreas Bissinger\n";
}

function printDocuList () {
	exec("ls ~/Development/docs/", $output);
	if (isset($output)) {
		foreach ($output as $index => $docu) {
			echo $docu . "\n";
		}
	}
}
?>
