<?php

// Extract relevant fields for testing.
// Alternately, $_POST... variables can be used directly in the 'if' statements.
// THESE MUST MATCH the 'name' variable in an input field (not the 'id' field).
$N1 = $_POST['template-contactform-first-name'];
$N2 = $_POST['template-contactform-last-name'];
$S1 = $_POST['template-contactform-subject'];
$HP = $_POST['template-contactform-name'];

// Tests.  If fail, set Validation Flag to false.

  	// Are the first and last name fields the same?
	if ($N1==$N2) { $ValidatedOK = false; }
	
	// Is the Subject different from expected?
	// This must match EXACTLY from the form field named 'subject'.
	if ($S1 !== 'A New Contact Request From Our Website') { $ValidatedOK = false; }
	
	// Has someone filled out the "name" field (honeypot)?
	if (strlen($HP)>0) { $ValidatedOK = false; }
	
?>

