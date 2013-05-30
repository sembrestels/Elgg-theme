<?php
/**
 * Layout Object CSS
 *
 * Image blocks, lists, tables, gallery, messages
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	Image Block
*************************************** */
.elgg-image-block {
	padding: 10px 0;
	.elgg-image {
		float: left;
		margin-right: 8px;
	}
	.elgg-image-alt {
		float: right;
		margin-left: 8px;
	}
}

/* ***************************************
	List
*************************************** */
.elgg-list {
	margin: 5px 0;
	clear: both;
	> li {
		border-bottom: 1px solid #DCDCDC;
	}
}
.elgg-item {
	h3 a {
		padding-bottom: 4px;
	}
	> .elgg-subtext {
		margin-bottom: 4px;
	}
	.elgg-content {
		margin: 10px 5px 10px 0;
	}
}
.elgg-content {
	clear: both;
}

/* ***************************************
	Gallery
*************************************** */
.elgg-gallery {
	border: none;
	margin-right: auto;
	margin-left: auto;
	td {
		padding: 5px;
	}
}
.elgg-gallery-fluid > li {
	float: left;
}
.elgg-gallery-users > li {
	margin: 0 2px;
}

/* ***************************************
	Tables
*************************************** */
.elgg-table {
	width: 100%;
	border-top: 1px solid #DCDCDC;
	td, th {
		padding: 4px 8px;
		border: 1px solid #DCDCDC;
	}
	th {
		background-color: #DDD;
	}
	tr {
		&:nth-child(odd), &.odd {
			background-color: #FFF;
		}
		&:nth-child(even), &.even {
			background-color: #F0F0F0;
		}
	}
}
.elgg-table-alt {
	width: 100%;
	border-top: 1px solid #DCDCDC;
	th {
		background-color: #EEE;
		font-weight: bold;
	}
	td, th {
		padding: 6px 0;
		border-bottom: 1px solid #DCDCDC;
	}
	td:first-child {
		width: 200px;
	}
	tr:hover {
		background: #E4E4E4;
	}
}

/* ***************************************
	Owner Block
*************************************** */
.elgg-owner-block {
	margin-bottom: 20px;
}

/* ***************************************
	Messages
*************************************** */
.elgg-message {
	color: #FFF;
	display: block;
	padding: 10px 20px;
	cursor: pointer;
	opacity: 0.9;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
	border-radius: 3px;
}
.elgg-state-success {
	background-color: #000;
}
.elgg-state-error {
	background-color: #FF0000;
}
.elgg-state-notice {
	background-color: #5097CF;
}
.elgg-box-error {
	padding: 20px;
	color: #B94A48;
	background-color: #F8E8E8;
	border: 1px solid #E5B7B5;
	border-radius: 5px;
}

/* ***************************************
	River
*************************************** */
.elgg-list-river {
	border-top: 1px solid #DCDCDC;
	> li {
		border-bottom: 1px solid #DCDCDC;
	}
}
.elgg-river-item .elgg-pict {
	margin-right: 20px;
}
.elgg-river-timestamp {
	color: #666;
	font-size: 85%;
	font-style: italic;
	line-height: 1.2em;
}

.elgg-river-attachments,
.elgg-river-message,
.elgg-river-content {
	border-left: 1px solid #DCDCDC;
	margin: 8px 0 5px 0;
	padding-left: 8px;
}
.elgg-river-attachments {
	.elgg-avatar, .elgg-icon {
		float: left;
	}
	.elgg-icon-arrow-right {
		margin: 3px 8px 0;
	}
}
.elgg-river-layout .elgg-input-dropdown {
	float: right;
	margin: 10px 0;
}
.elgg-river-comments-tab {
	display: block;
	background-color: #EEE;
	margin-top: 5px;
	width: auto;
	float: right;
	font-size: 85%;
	padding: 1px 7px;
	border-radius: 3px 3px 0 0;
}

<?php //@todo components.php ?>
.elgg-river-comments {
	margin: 0;
	border-top: none;
	li {
		:first-child {
			border-radius: 3px 0 0;
		}
		:last-child {
			border-radius-bottomleft: 0 0 5px 5px;
		}
		background-color: #EEE;
		border-bottom: none;
		padding: 4px 4px 4px 10px;
		margin-bottom: 2px;
	}
	.elgg-media {
		padding: 0;
	}
}
.elgg-river-more {
	background-color: #EEE;
	border-radius: 3px;	
	padding: 2px 4px;
	font-size: 85%;
	margin-bottom: 2px;
}

<?php //@todo location-dependent styles ?>
.elgg-river-item {
	form {
		background-color: #EEE;
		padding: 6px;
		border-radius: 3px;		
		height: auto;
	}
	input[type=text] {
		width: 78%;
	}
	input[type=submit] {
		margin: 0 0 0 10px;
	}
}

/* **************************************
	Comments (from elgg_view_comments)
************************************** */
.elgg-comments {
	margin-top: 25px;
	> form {
		margin-top: 15px;
	}
}

/* ***************************************
	Image-related
*************************************** */
.elgg-photo {
	border: 1px solid #DCDCDC;
	padding: 3px;
	background-color: #FFF;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: 	border-box;
	box-sizing: 		border-box;
}

/* ***************************************
	Tags
*************************************** */
.elgg-tags {
	font-size: 85%;
	> li {
		float:left;
		margin-right: 5px;
	}
	li {
		&.elgg-tag {
			:after {
				content: ",";
			}
			&:last-child:after {
				content: "";
			}
		}
	}
}
.elgg-tagcloud {
	text-align: justify;
	margin-bottom: 5px; 
}

