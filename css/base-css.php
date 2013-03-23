<?
### BASE.MAIN.CSS PHP VERSION ###
### BASIS USES PHP FOR THE TEMPLATE AND LAYOUT DEVELOPMENT ###

## ****** READ BELOW PRIOR TO MAKING ANY EDITS ****** ##

## BASIS FRAMEWORK CREATES A FILE TITLED "BASE.MAIN.CSS" - BASE.MAIN.CSS IS WHERE CSS CHANGES SHOUD BE MADE ##


   ##############################
    ###  STYLESHEET LAYOUT    ###
    #############################
?>

    Document   : main.css
    Created on : March 21, 2013
    Author     : Dylan A Burkey - http://dylanburkey.com;
    Description: The styles below are provided for use with "Basis" - an HTML5/CSS3 Framework that uses Flexbox to create mobile ready,
    responsive layouts. 
    
<?php

## CSS VARS
	// -> a. BASIS COLOR CLASSES
			//-> 1. Light Blue
                $c_lblue = '';
##          
            //-> 2. Medium Blue
                $c_mblue = '';
                ##          
            //-> 2. Dark Blue
                $c_dblue = '';
* {
    box-sizing: border-box;
}

/* Dylanburkey.com Color Swatch */

.c-mblue  {
    color: #07455E;
}
    .bg-mblue {
        background: #07455E;    
    }

/* Medium Blue */


/* Dark Blue */

.c-darkblue{
    color: #00313F; 
}

.bg-darkblue{
    background: #00313F;
}

/* Red - Base Color */

.c-red {
    color: #C03926; 
}
    
    .bg-red {
        background: #C03926;
    }
    
/* Light Blue */

.c-lblue {
    color: #B7EFFE;
}
    .bg-lblue {
        background: #B7EFFE;
    }
/* End Website Color Swatch Classes */  




?>    
   


*/

/* 

******
The BASIS Framework is a responsive, mobile ready foundation based on using Flexbox for the template structre. 

*/

/* ------------------------- Backgrounds */
/*body {background:url("../images/im_bg.gif") left top repeat;}*/

/* ------------------------- Generic */
body {
    /*color:#ffffff;*/
    color: #444;
    line-height: 1.4;
    font-family: ;



}
.clear {clear:both;}
img { /* Needed for mobile */
    display:block;
    margin-left:auto;
    margin-right:auto;
    width:100%;
}

/* ------------------------- Typography */
strong {font-weight:bold;}
p { font-size: small;
    padding: 4px;
 }
h1 {
        
}
h2 {}
h3 {}
h4 {}
h5 {}
h6 {}
address {}
pre, code {font-family: monospace;}

/* Links */
a, a:visited, a:active {}
a:hover {}

/* ------------------------- Forms */
input {}
select {}
label {}

/* ------------------------- Lists */

/* ------------------------- Layout */

/* ------------------------- Popups */

/* ------------------------- Media Queries */
 
/* ---------------------------------------------------------------------------- */
/* MEDIA QUERIES -------------------------------------------------------------- */
/* ---------------------------------------------------------------------------- */

/* Smartphones (portrait) ----------- */
@media only screen 
and (max-width : 320px) {
    /* Styles */

}

/* Smartphones (landscape) ----------- */
@media only screen 
and (min-width : 321px)
and (max-width : 480px) {
    /* Styles */

}

/* iPads (portrait) ----------- */
@media only screen 
and (min-width : 481px)
and (max-width : 768px) {
    /* Styles */

}

/* iPads (landscape) ----------- */
@media only screen 
and (min-width : 769px) 
and (max-width : 1024px) {
    /* Styles */

}

/* Larger screens ----------- */
@media only screen 
and (min-width : 1024px) {
    /* Styles */

}