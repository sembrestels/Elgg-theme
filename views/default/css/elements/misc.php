/* <style> /**/

/* ***************************************
	MISC
*************************************** */
#login-dropdown {
	position: absolute;
	top: 0;
	right: 0;
	z-index: 100;
	a {
		padding: 14px 18px;
	}
}

/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right: 1px solid #EBEBEB;
}
#avatar-croppingtool {
	border-top: 1px solid #DCDCDC;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}

/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */

#friends_collections_accordian {
	li {
		color: #666;
		h2 {
			border-radius: 3px;	
			background: none repeat scroll 0 0 #F0F0F0;
			color: #444;
			cursor: pointer;
			font-size: 1.2em;
			margin: 10px 0;
			padding: 10px;
		}
		&:hover {
			background-color: #E5E5E5;
		}
	}
	.friends_collections_controls {
		float: right;
		font-size: 70%;
	}
	.friends-picker-main-wrapper {
		background: none repeat scroll 0 0 #FFF;
		display: none;
		padding: 0;
	}
}

