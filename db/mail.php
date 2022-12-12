<?php
session_start();
include 'config.php';



// requesting full data to email


if (isset($_POST["popuprqst"])){
    
    $plno = $_POST["rqstplno"];
    $sql = "SELECT * FROM apr_miss WHERE plno='$plno'";
    $semail = $_POST['email'];
    $yrname= $_POST['yrname'];

    $result = mysqli_query($conn, $sql);
    include_once '../codes.php';
    

    if (mysqli_num_rows($result) > 0) {
        $data_result = mysqli_fetch_assoc($result);
    }

    $flname=$data_result['flname'];
    $email=$data_result['email'];
    $sex=$data_result['sex'];
    $age=$data_result['age'];
    $pno=$data_result['pno'];
    $city=$data_result['city'];
    $dom=$data_result['dom'];
    $pom=$data_result['pom'];
    $height=$data_result['height'];
    $weight=$data_result['weight'];
    $cmplxn=$data_result['cmplxn'];
    $build=$data_result['build'];
    $hair=$data_result['hair'];



    $receiver = $semail;
    $subject = "Here is the data you've requested for | Name: $flname";
    $body = "<!doctype html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>

        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Registration details</title>
        
    <style type='text/css'>
		p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body,#bodyTable,#bodyCell{
			height:100%;
			margin:0;
			padding:0;
			width:100%;
		}
		.mcnPreviewText{
			display:none !important;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		table{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		p,a,li,td,blockquote{
			mso-line-height-rule:exactly;
		}
		a[href^=tel],a[href^=sms]{
			color:inherit;
			cursor:default;
			text-decoration:none;
		}
		p,a,li,td,body,table,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
			line-height:100%;
		}
		a[x-apple-data-detectors]{
			color:inherit !important;
			text-decoration:none !important;
			font-size:inherit !important;
			font-family:inherit !important;
			font-weight:inherit !important;
			line-height:inherit !important;
		}
		.templateContainer{
			max-width:600px !important;
		}
		a.mcnButton{
			display:block;
		}
		.mcnImage,.mcnRetinaImage{
			vertical-align:bottom;
		}
		.mcnTextContent{
			word-break:break-word;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		.mcnDividerBlock{
			table-layout:fixed !important;
		}
		h1{
			color:#222222;
			font-family:Helvetica;
			font-size:40px;
			font-style:normal;
			font-weight:bold;
			line-height:150%;
			letter-spacing:normal;
			text-align:center;
		}
		h2{
			color:#222222;
			font-family:Helvetica;
			font-size:34px;
			font-style:normal;
			font-weight:bold;
			line-height:150%;
			letter-spacing:normal;
			text-align:left;
		}

		h3{
			color:#444444;
			font-family:Helvetica;
			font-size:22px;
			font-style:normal;
			font-weight:bold;
			line-height:150%;
			letter-spacing:normal;
			text-align:left;
		}

		h4{
			color:#949494;
			font-family:Georgia;
			font-size:20px;
			font-style:italic;
			font-weight:normal;
			line-height:125%;
			letter-spacing:normal;
			text-align:left;
		}

		#templateHeader{
			background-color:#F7F7F7;
			background-image:url('https://mcusercontent.com/553f5963ebe8e96567c9b2d81/images/47c49675-1872-0f41-6a50-b21f37c0ecd6.jpg');
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:45px;
			padding-bottom:45px;
		}

		.headerContainer{
			background-color:transparent;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:0;
			padding-bottom:0;
		}

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			color:#757575;
			font-family:Helvetica;
			font-size:16px;
			line-height:150%;
			text-align:left;
		}

		.headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
			color:#007C89;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateBody{
			background-color:#FFFFFF;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:36px;
			padding-bottom:45px;
		}

		.bodyContainer{
			background-color:transparent;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:0;
			padding-bottom:0;
		}

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			color:#757575;
			font-family:Helvetica;
			font-size:16px;
			line-height:150%;
			text-align:left;
		}

		.bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
			color:#007C89;
			font-weight:normal;
			text-decoration:underline;
		}

		#templateFooter{
			background-color:#333333;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:45px;
			padding-bottom:63px;
		}

		.footerContainer{
			background-color:transparent;
			background-image:none;
			background-repeat:no-repeat;
			background-position:center;
			background-size:cover;
			border-top:0;
			border-bottom:0;
			padding-top:0;
			padding-bottom:0;
		}

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			color:#FFFFFF;
			font-family:Helvetica;
			font-size:12px;
			line-height:150%;
			text-align:center;
		}

		.footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
			color:#FFFFFF;
			font-weight:normal;
			text-decoration:underline;
		}
	@media only screen and (min-width:768px){
		.templateContainer{
			width:600px !important;
		}

}	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnRetinaImage{
			max-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImage{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
			max-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupContent{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardBottomImageContent{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockInner{
			padding-top:0 !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageGroupBlockOuter{
			padding-top:9px !important;
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnTextContent,.mcnBoxedTextContentColumn{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
			padding-right:18px !important;
			padding-bottom:0 !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		.mcpreview-image-uploader{
			display:none !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){

		h1{
			font-size:30px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h2{
			font-size:26px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){

		h3{
			font-size:20px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		h4{
			font-size:18px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
			font-size:14px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			font-size:16px !important;
			line-height:150% !important;
		}

}	@media only screen and (max-width: 480px){

		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			font-size:14px !important;
			line-height:150% !important;
		}

}</style></head>
    <body>
	<span class='mcnPreviewText' style='display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;'>Data recived of $flname from PublicLens</span><!--<![endif]-->

        <center>
            <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable'>
                <tr>
                    <td align='center' valign='top' id='bodyCell'>

                        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                            <tr>
                                <td align='center' valign='top' id='templateHeader' data-template-container>

                                    <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                        <tr>
                                            <td valign='top' class='headerContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnImageBlock' style='min-width:100%;'>
    <tbody class='mcnImageBlockOuter'>
            <tr>
                <td valign='top' style='padding:9px' class='mcnImageBlockInner'>
                    <table align='left' width='100%' border='0' cellpadding='0' cellspacing='0' class='mcnImageContentContainer' style='min-width:100%;'>
                        <tbody><tr>
                            <td class='mcnImageContent' valign='top' style='padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;'>
                                
                                    
                                        <img align='center' alt='' src='https://mcusercontent.com/553f5963ebe8e96567c9b2d81/images/e50c9e3d-c9b0-ef72-abd4-b923a5fa57d2.png' width='169.2' style='max-width:625px; padding-bottom: 0; display: inline !important; vertical-align: bottom;' class='mcnImage'>
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding: 0px 18px 9px; font-family: Merriweather, Georgia, &quot;Times New Roman&quot;, serif;'>
                        
                            <h1><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><span style='color:#FFFFFF'><span style='background-color:#000000'>&nbsp;PUBLIC LENS&nbsp;</span></span></span></h1>

                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align='center' valign='top' id='templateBody' data-template-container>
                                    <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                        <tr>
                                            <td valign='top' class='bodyContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                        
                            <div style='text-align: center;'>$yrname, here is the data you have requested for. Thank you for trying to help the community.</div>

                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding: 0px 18px 9px;color: #000000;font-style: normal;font-weight: bold;'>
                        
                            <h3 class='null' style='text-align: left;'><strong>PROFILE DETAILS:</strong></h3>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnImageBlock' style='min-width:100%;'>
    <tbody class='mcnImageBlockOuter'>
            <tr>
                <td valign='top' style='padding:9px' class='mcnImageBlockInner'>
                    <table align='left' width='100%' border='0' cellpadding='0' cellspacing='0' class='mcnImageContentContainer' style='min-width:100%;'>
                        <tbody><tr>
                            <td class='mcnImageContent' valign='top' style='padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0;'>
                                
                                    
                                        <img align='left' alt='' src='https://mcusercontent.com/553f5963ebe8e96567c9b2d81/images/eee791d4-d61b-aab3-9b05-16320e98907b.jpg' width='200' style='max-width:200px; padding-bottom: 0; display: inline !important; vertical-align: bottom;' class='mcnImage'>
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>

                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding: 0px 18px 9px;color: #000000;font-size: 18px;line-height: 200%;'>
                        
                            <strong>Public Lens no.: </strong>$plno<br>
<strong>Full name: </strong>$flname<br>
<strong>Email: </strong> $email <br>
<strong>Gender: </strong>$sex<br>
<strong>Age: </strong>$age<br>
<strong>Phone: </strong>$pno<br>
<strong>Resident city: </strong>$city<br>
<strong>Date of missing: </strong>$dom<br>
<strong>Place of missing: </strong>$pom<br>
<strong>Height (in cm): </strong>$height<br>
<strong>Weight (in Kg): </strong>$weight<br>
<strong>Complexion: </strong>$cmplxn<br>
<strong>Build: </strong>$build<br>
<strong>Hair: </strong>$hair<br>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
    <tbody class='mcnDividerBlockOuter'>
        <tr>
            <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 100%;border-top: 2px solid #000000;'>
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>

                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                        
                            <div style='text-align: center;'>Thank you for using our service. Our service is a lifeline to every missing person, and every family member and friend left behind. We wish to make a change in the society, keep supporting us!</div>

                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
    <tbody class='mcnDividerBlockOuter'>
        <tr>
            <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;'>
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align='center' valign='top' id='templateFooter' data-template-container>

                                    <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                        <tr>
                                            <td valign='top' class='footerContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowBlock' style='min-width:100%;'>
    <tbody class='mcnFollowBlockOuter'>
        <tr>
            <td align='center' valign='top' style='padding:9px' class='mcnFollowBlockInner'>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentContainer' style='min-width:100%;'>
    <tbody><tr>
        <td align='center' style='padding-left:9px;padding-right:9px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;' class='mcnFollowContent'>
                <tbody><tr>
                    <td align='center' valign='top' style='padding-top:9px; padding-right:9px; padding-left:9px;'>
                        <table align='center' border='0' cellpadding='0' cellspacing='0'>
                            <tbody><tr>
                                <td align='center' valign='top'>

                                        
                                            <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                <tbody><tr>
                                                    <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                            <tbody><tr>
                                                                <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                        <tbody><tr>
                                                                            
                                                                                <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                    <a href='http://www.facebook.com' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png' alt='Facebook' style='display:block;' height='24' width='24' class=''></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                        
                                            <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                <tbody><tr>
                                                    <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                            <tbody><tr>
                                                                <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                        <tbody><tr>
                                                                            
                                                                                <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                    <a href='http://www.twitter.com/' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png' alt='Twitter' style='display:block;' height='24' width='24' class=''></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                        
                                        
                                            <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                <tbody><tr>
                                                    <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                            <tbody><tr>
                                                                <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                        <tbody><tr>
                                                                            
                                                                                <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                    <a href='http://www.instagram.com/' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png' alt='Link' style='display:block;' height='24' width='24' class=''></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        

                                        
                                        
                                            <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                <tbody><tr>
                                                    <td valign='top' style='padding-right:0; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                            <tbody><tr>
                                                                <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                        <tbody><tr>
                                                                            
                                                                                <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                    <a href='http://mailchimp.com' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png' alt='Website' style='display:block;' height='24' width='24' class=''></a>
                                                                                </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        

                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
    <tbody class='mcnDividerBlockOuter'>
        <tr>
            <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 100%;border-top: 2px solid #505050;'>
                    <tbody><tr>
                        <td>
                            <span></span>
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
    <tbody class='mcnTextBlockOuter'>
        <tr>
            <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>

                <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                    <tbody><tr>
                        
                        <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                        
                            <em>Copyright © 2022-23 Public Lens | All rights reserved.</em><br>
<br>
<strong>Our mailing address is:</strong><br>
publiclenz11@gmail.com<br>
<br>
Want to change how you receive these emails?<br>
You can <a href=''>update your preferences</a> or <a href=''>unsubscribe from this list</a>.<br>
&nbsp;
                        </td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </center>
    <script type='text/javascript'  src='/P9sRZ2p0H22BU/W/ZXEfkd8ycGjn8/kYiw8rGf/I1NuGlxE/KD0/eVWB6JBU'></script></body>
</html>";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: Public Lens Support <publiclenz11@gmail.com>' . "\r\n";
    mail($receiver, $subject, $body, $headers);

    if ($result) {
        header("Location: ../index.php");
    } else {
       echo "<script>alert('Error.');</script>";
    }
}

// ******************************************************************


// register user into db



if (isset($_POST["regu"])){
    $flname = mysqli_real_escape_string($conn, $_POST["flname"]);
    $address1 = mysqli_real_escape_string($conn, $_POST["address1"]);
    $address2 = mysqli_real_escape_string($conn, $_POST["address2"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $zip = mysqli_real_escape_string($conn, $_POST["zip"]);
    $pno = mysqli_real_escape_string($conn, $_POST["pno"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $pwd1 = mysqli_real_escape_string($conn, $_POST["pwd1"]);
    $pwd2 = mysqli_real_escape_string($conn, $_POST["pwd2"]);
    $gid = mysqli_real_escape_string($conn, $_POST["gid"]);
    $address1 = $address1 . " " . $address2 . " " . $city . " " . $zip;
    if($pwd1!=$pwd2){
        echo "<script>alert('Password doesnt match. Please try again.');</script>";

    }else if($pwd1==$pwd2){
        $pwd1=md5($pwd1);
        $sql = "INSERT INTO user_reg (flname, address1, pno, dob, email, pass, gid) 
        VALUES ('$flname', '$address1', '$pno', '$dob', '$email', '$pwd1', '$gid')";
        $result = mysqli_query($conn, $sql);

        $receiver = $email;
        $subject = "Thank you for registering on PublicLens";
        $body = "<!doctype html>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <title>Thank you for registering!</title>
                
            <style type='text/css'>
                p{
                    margin:10px 0;
                    padding:0;
                }
                table{
                    border-collapse:collapse;
                }
                h1,h2,h3,h4,h5,h6{
                    display:block;
                    margin:0;
                    padding:0;
                }
                img,a img{
                    border:0;
                    height:auto;
                    outline:none;
                    text-decoration:none;
                }
                body,#bodyTable,#bodyCell{
                    height:100%;
                    margin:0;
                    padding:0;
                    width:100%;
                }
                .mcnPreviewText{
                    display:none !important;
                }
                #outlook a{
                    padding:0;
                }
                img{
                    -ms-interpolation-mode:bicubic;
                }
                table{
                    mso-table-lspace:0pt;
                    mso-table-rspace:0pt;
                }
                .ReadMsgBody{
                    width:100%;
                }
                .ExternalClass{
                    width:100%;
                }
                p,a,li,td,blockquote{
                    mso-line-height-rule:exactly;
                }
                a[href^=tel],a[href^=sms]{
                    color:inherit;
                    cursor:default;
                    text-decoration:none;
                }
                p,a,li,td,body,table,blockquote{
                    -ms-text-size-adjust:100%;
                    -webkit-text-size-adjust:100%;
                }
                .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
                    line-height:100%;
                }
                a[x-apple-data-detectors]{
                    color:inherit !important;
                    text-decoration:none !important;
                    font-size:inherit !important;
                    font-family:inherit !important;
                    font-weight:inherit !important;
                    line-height:inherit !important;
                }
                .templateContainer{
                    max-width:600px !important;
                }
                a.mcnButton{
                    display:block;
                }
                .mcnImage,.mcnRetinaImage{
                    vertical-align:bottom;
                }
                .mcnTextContent{
                    word-break:break-word;
                }
                .mcnTextContent img{
                    height:auto !important;
                }
                .mcnDividerBlock{
                    table-layout:fixed !important;
                }
        
                h1{
                color:#222222;
                font-family:Helvetica;
                font-size:40px;
                font-style:normal;
                font-weight:bold;
                line-height:150%;
                letter-spacing:normal;
                text-align:center;
                }
        
                h2{
                color:#222222;
                font-family:Helvetica;
                font-size:34px;
                font-style:normal;
                font-weight:bold;
                line-height:150%;
                letter-spacing:normal;
                text-align:left;
                }
        
                h3{
                color:#444444;
                font-family:Helvetica;
                font-size:22px;
                font-style:normal;
                font-weight:bold;
                line-height:150%;
                letter-spacing:normal;
                text-align:left;
                }
        
                h4{
                color:#949494;
                font-family:Georgia;
                font-size:20px;
                font-style:italic;
                font-weight:normal;
                line-height:125%;
                letter-spacing:normal;
                text-align:left;
                }
        
                #templateHeader{
                background-color:#F7F7F7;
                background-image:url('https://mcusercontent.com/553f5963ebe8e96567c9b2d81/images/47c49675-1872-0f41-6a50-b21f37c0ecd6.jpg');
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:45px;
                padding-bottom:45px;
                }
        
                .headerContainer{
                background-color:transparent;
                background-image:none;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:0;
                padding-bottom:0;
                }
        
                .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
                color:#757575;
                font-family:Helvetica;
                font-size:16px;
                line-height:150%;
                text-align:left;
                }
        
                .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
                color:#007C89;
                font-weight:normal;
                text-decoration:underline;
                }
        
                #templateBody{
                background-color:#FFFFFF;
                background-image:none;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:36px;
                padding-bottom:45px;
                }
        
                .bodyContainer{
                background-color:transparent;
                background-image:none;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:0;
                padding-bottom:0;
                }
        
                .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
                color:#757575;
                font-family:Helvetica;
                font-size:16px;
                line-height:150%;
                text-align:left;
                }
        
                .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
                color:#007C89;
                font-weight:normal;
                text-decoration:underline;
                }
        
                #templateFooter{
                background-color:#333333;
                background-image:none;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:45px;
                padding-bottom:63px;
                }
        
                .footerContainer{
                background-color:transparent;
                background-image:none;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                border-top:0;
                border-bottom:0;
                padding-top:0;
                padding-bottom:0;
                }
        
                .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
                color:#FFFFFF;
                font-family:Helvetica;
                font-size:12px;
                line-height:150%;
                text-align:center;
                }
        
                .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
                color:#FFFFFF;
                font-weight:normal;
                text-decoration:underline;
                }
            @media only screen and (min-width:768px){
                .templateContainer{
                    width:600px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                body,table,td,p,a,li,blockquote{
                    -webkit-text-size-adjust:none !important;
                }
        
        }	@media only screen and (max-width: 480px){
                body{
                    width:100% !important;
                    min-width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnRetinaImage{
                    max-width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImage{
                    width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
                    max-width:100% !important;
                    width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnBoxedTextContentContainer{
                    min-width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageGroupContent{
                    padding:9px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
                    padding-top:9px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
                    padding-top:18px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageCardBottomImageContent{
                    padding-bottom:9px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageGroupBlockInner{
                    padding-top:0 !important;
                    padding-bottom:0 !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageGroupBlockOuter{
                    padding-top:9px !important;
                    padding-bottom:9px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnTextContent,.mcnBoxedTextContentColumn{
                    padding-right:18px !important;
                    padding-left:18px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
                    padding-right:18px !important;
                    padding-bottom:0 !important;
                    padding-left:18px !important;
                }
        
        }	@media only screen and (max-width: 480px){
                .mcpreview-image-uploader{
                    display:none !important;
                    width:100% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                h1{
                font-size:30px !important;
                line-height:125% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                h2{
                font-size:26px !important;
                line-height:125% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                h3{
                font-size:20px !important;
                line-height:150% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                h4{
                font-size:18px !important;
                line-height:150% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
                font-size:14px !important;
                line-height:150% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
                font-size:16px !important;
                line-height:150% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
                font-size:16px !important;
                line-height:150% !important;
                }
        
        }	@media only screen and (max-width: 480px){
        
                .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
                font-size:14px !important;
                line-height:150% !important;
                }
        
        }</style></head>
            <body>
        <span class='mcnPreviewText' style='display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;'>Welcome $flname to Public lens.</span>
        
                <center>
                    <table align='center' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable'>
                        <tr>
                            <td align='center' valign='top' id='bodyCell'>
                                <!-- BEGIN TEMPLATE // -->
                                <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                    <tr>
                                        <td align='center' valign='top' id='templateHeader' data-template-container>
                                            <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                                <tr>
                                                    <td valign='top' class='headerContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnImageBlock' style='min-width:100%;'>
            <tbody class='mcnImageBlockOuter'>
                    <tr>
                        <td valign='top' style='padding:9px' class='mcnImageBlockInner'>
                            <table align='left' width='100%' border='0' cellpadding='0' cellspacing='0' class='mcnImageContentContainer' style='min-width:100%;'>
                                <tbody><tr>
                                    <td class='mcnImageContent' valign='top' style='padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;'>
                                        
                                            
                                                <img align='center' alt='' src='https://mcusercontent.com/553f5963ebe8e96567c9b2d81/images/e50c9e3d-c9b0-ef72-abd4-b923a5fa57d2.png' width='169.2' style='max-width: 625px; padding-bottom: 0px; vertical-align: bottom; display: inline !important; border-radius: 5%;' class='mcnImage'>
                                            
                                        
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
            <tbody class='mcnTextBlockOuter'>
                <tr>
                    <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
        
                        <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                            <tbody><tr>
                                
                                <td valign='top' class='mcnTextContent' style='padding: 0px 18px 9px; font-family: Merriweather, Georgia, &quot;Times New Roman&quot;, serif;'>
                                
                                    <h1><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><span style='color:#FFFFFF'><span style='background-color:#000000'>&nbsp;PUBLIC LENS&nbsp;</span></span></span></h1>
        
                                </td>
                            </tr>
                        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table></td>
                                                </tr>
                                            </table>
        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align='center' valign='top' id='templateBody' data-template-container>
        
                                            <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                                <tr>
                                                    <td valign='top' class='bodyContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
            <tbody class='mcnTextBlockOuter'>
                <tr>
                    <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
        
                        <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                            <tbody><tr>
                                
                                <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                                
                                    <h4 class='null' style='text-align: left;'><span style='color:#000000'><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><strong>Hi $flname,</strong><br>
        We welcome you to our publiclens community. Thank you for registering with us.</span></span><br>
        <br>
        <span style='color:#000000'><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><strong>About the Public Lens program:</strong><br>
        <br>
        We are an independent funded organization, and the only lifeline for missing people and their families in India. PublicLens is a Indian website that provides specialist support to people who are or at risk of missing, and the families and friends left behind.</span></span></h4>
        <br>
        &nbsp;
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnButtonBlock' style='min-width:100%;'>
            <tbody class='mcnButtonBlockOuter'>
                <tr>
                    <td style='padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;' valign='top' align='center' class='mcnButtonBlockInner'>
                        <table border='0' cellpadding='0' cellspacing='0' class='mcnButtonContentContainer' style='border-collapse: separate !important;border-radius: 13px;background-color: #200F0F;'>
                            <tbody>
                                <tr>
                                    <td align='center' valign='middle' class='mcnButtonContent' style='font-family: &quot;Merriweather Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; padding: 15px;'>
                                        <a class='mcnButton ' title='VISIT US' href='https://militarized-ditch.000webhostapp.com/' target='_blank' style='font-weight: bold;letter-spacing: 0px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;'>VISIT US</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
            <tbody class='mcnTextBlockOuter'>
                <tr>
                    <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
        
                        <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                            <tbody><tr>
                                
                                <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                                
                                    <h4 class='null'><strong><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><span style='color:#000000'>How we help?</span></span></strong></h4>
        &nbsp;
        
        <h4 class='null'><span style='font-family:merriweather sans,helvetica neue,helvetica,arial,sans-serif'><span style='color:#000000'>Our missing is to be a lifeline to every missing person, and every family member and friend left behind. Find out what we do. Read more Who we are Read more about our dedication and passionate staff, volunteers, trustees, ambassadors and supporters that make up the incredible Missing People community. View more Work for us Would you like to work for a dynamic, caring organisation which really makes a difference to vulnerable people throughout India, If yes join us on this journey. Be a partner Get Help Being mising My loved one is missing Report a missing person Help services Our Community Lived experiences News Events Forum Contribute Help us find Missing Appeals Become a partner Support us Fundraisnig Volunteering Events Donate For professionals Information and policy Proffessional service Make a referral News and campaigns About charity Who we are Our impact Our Community Contact Us Police services Family support Publicity TextSafe® Accessibility Cookies Feedback Safegaurding</span></span></h4>
        <br>
        &nbsp;
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
            <tbody class='mcnDividerBlockOuter'>
                <tr>
                    <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                        <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 100%;border-top: 2px solid #000000;'>
                            <tbody><tr>
                                <td>
                                    <span></span>
                                </td>
                            </tr>
                        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
            <tbody class='mcnTextBlockOuter'>
                <tr>
                    <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
        
                        <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                            <tbody><tr>
                                
                                <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                                
                                    <div style='text-align: center;'>Thank you for using our service. Our service is a lifeline to every missing person, and every family member and friend left behind. We wish to make a change in the society, keep supporting us!</div>
        
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
            <tbody class='mcnDividerBlockOuter'>
                <tr>
                    <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                        <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;'>
                            <tbody><tr>
                                <td>
                                    <span></span>
                                </td>
                            </tr>
                        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table></td>
                                                </tr>
                                            </table>
        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align='center' valign='top' id='templateFooter' data-template-container>
        
                                            <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' class='templateContainer'>
                                                <tr>
                                                    <td valign='top' class='footerContainer'><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowBlock' style='min-width:100%;'>
            <tbody class='mcnFollowBlockOuter'>
                <tr>
                    <td align='center' valign='top' style='padding:9px' class='mcnFollowBlockInner'>
                        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentContainer' style='min-width:100%;'>
            <tbody><tr>
                <td align='center' style='padding-left:9px;padding-right:9px;'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width:100%;' class='mcnFollowContent'>
                        <tbody><tr>
                            <td align='center' valign='top' style='padding-top:9px; padding-right:9px; padding-left:9px;'>
                                <table align='center' border='0' cellpadding='0' cellspacing='0'>
                                    <tbody><tr>
                                        <td align='center' valign='top'>
        
                                                
                                                
                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                        <tbody><tr>
                                                            <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                                <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                                    <tbody><tr>
                                                                        <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                            <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                                <tbody><tr>
                                                                                    
                                                                                        <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                            <a href='http://www.facebook.com' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png' alt='Facebook' style='display:block;' height='24' width='24' class=''></a>
                                                                                        </td>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
        
                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                        <tbody><tr>
                                                            <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                                <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                                    <tbody><tr>
                                                                        <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                            <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                                <tbody><tr>
                                                                                    
                                                                                        <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                            <a href='http://www.twitter.com/' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png' alt='Twitter' style='display:block;' height='24' width='24' class=''></a>
                                                                                        </td>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                
                                                
                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                        <tbody><tr>
                                                            <td valign='top' style='padding-right:10px; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                                <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                                    <tbody><tr>
                                                                        <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                            <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                                <tbody><tr>
                                                                                    
                                                                                        <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                            <a href='http://www.instagram.com/' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png' alt='Link' style='display:block;' height='24' width='24' class=''></a>
                                                                                        </td>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
        
                                                
                                                
                                                    <table align='left' border='0' cellpadding='0' cellspacing='0' style='display:inline;'>
                                                        <tbody><tr>
                                                            <td valign='top' style='padding-right:0; padding-bottom:9px;' class='mcnFollowContentItemContainer'>
                                                                <table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnFollowContentItem'>
                                                                    <tbody><tr>
                                                                        <td align='left' valign='middle' style='padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;'>
                                                                            <table align='left' border='0' cellpadding='0' cellspacing='0' width=''>
                                                                                <tbody><tr>
                                                                                    
                                                                                        <td align='center' valign='middle' width='24' class='mcnFollowIconContent'>
                                                                                            <a href='http://mailchimp.com' target='_blank'><img src='https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png' alt='Website' style='display:block;' height='24' width='24' class=''></a>
                                                                                        </td>
                                                                                    
                                                                                    
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnDividerBlock' style='min-width:100%;'>
            <tbody class='mcnDividerBlockOuter'>
                <tr>
                    <td class='mcnDividerBlockInner' style='min-width:100%; padding:18px;'>
                        <table class='mcnDividerContent' border='0' cellpadding='0' cellspacing='0' width='100%' style='min-width: 100%;border-top: 2px solid #505050;'>
                            <tbody><tr>
                                <td>
                                    <span></span>
                                </td>
                            </tr>
                        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table><table border='0' cellpadding='0' cellspacing='0' width='100%' class='mcnTextBlock' style='min-width:100%;'>
            <tbody class='mcnTextBlockOuter'>
                <tr>
                    <td valign='top' class='mcnTextBlockInner' style='padding-top:9px;'>
        
                        <table align='left' border='0' cellpadding='0' cellspacing='0' style='max-width:100%; min-width:100%;' width='100%' class='mcnTextContentContainer'>
                            <tbody><tr>
                                
                                <td valign='top' class='mcnTextContent' style='padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;'>
                                
                                    <em>Copyright © 2022-23 Public Lens | All rights reserved.</em><br>
        <br>
        <strong>Our mailing address is:</strong><br>
        publiclenz11@gmail.com<br>
        <br>
        Want to change how you receive these emails?<br>
        You can <a href='*|UPDATE_PROFILE|*'>update your preferences</a> or <a href='*|UNSUB|*'>unsubscribe from this list</a>.<br>
        &nbsp;
                                </td>
                            </tr>
                        </tbody></table>
        
                    </td>
                </tr>
            </tbody>
        </table></td>
                                                </tr>
                                            </table>
        
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </center>
            <script type='text/javascript'  src='/P9sRZ2p0H22BU/W/ZXEfkd8ycGjn8/kYiw8rGf/I1NuGlxE/KD0/eVWB6JBU'></script></body>
        </html>        
        ";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: Public Lens Support <publiclenz11@gmail.com>' . "\r\n";
        mail($receiver, $subject, $body, $headers);

        if ($result) {
            $_SESSION["uname"] = $email;
            $_SESSION["flname"] = $flname;
            $_SESSION["dob"] = $dob;
            $_SESSION["pno"] = $pno;
            $_SESSION["gid"] = $gid;
            $_SESSION["address1"] = $address1;
            header("Location: ../index.php");
        } else {
        echo "<script>alert('Error.');</script>";
        }
    }
}



?>