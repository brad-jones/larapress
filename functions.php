<?php
////////////////////////////////////////////////////////////////////////////////
//      ____                       __________                                   
//     |    |   _____ ____________ \______   \_______   ____   ______ ______    
//     |    |   \__  \\_  __ \__  \ |     ___/\_  __ \_/ __ \ /  ___//  ___/
//     |    |___ / __ \|  | \// __ \|    |     |  | \/\  ___/ \___ \ \___ \     
//     |_______ (____  /__|  (____  /____|     |__|    \___  >____  >____  >    
//             \/    \/           \/                       \/     \/     \/     
// -----------------------------------------------------------------------------
//          Designed and Developed by Brad Jones <brad @="bjc.id.au" />         
// -----------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////

// Lets check to see if a child theme has already booted up LaraPress.
if (!LaraPress\Bootloader::isBooted())
{
	// If there is no child theme or the child theme
	// has no requirement for a custom boot loader.
	// We will run the Bootloader now.
	new LaraPress\Bootloader();
}