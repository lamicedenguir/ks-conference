<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include 'groups-415c8e.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            $redirect = 'search.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '_Sparkle_Site_Search_Page_';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'search.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<title>Search results</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/search.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Search results">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps51{position:relative;margin-top:0}.v8{display:block;vertical-align:top}.s72{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v9{display:inline-block;vertical-align:top}.ps52{position:relative;margin-left:0;margin-top:0}.s73{min-width:1920px;width:1920px;min-height:142px}.ps53{position:relative;margin-left:0;margin-top:0}.s74{min-width:165px;width:165px;min-height:142px;height:142px}.c60{z-index:2;pointer-events:auto}.a3{display:block}.i10{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i11{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps54{position:relative;margin-left:-21px;margin-top:6px}.s75{min-width:424px;width:424px;min-height:130px;height:130px}.c61{z-index:3;pointer-events:auto}.i12{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps55{position:relative;margin-left:1038px;margin-top:54px}.s76{min-width:84px;width:84px;min-height:36px}.c62{z-index:23;pointer-events:auto}.f15{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn16{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn16:hover{background-color:#82939e;border-color:#000;color:#000}.btn16:active{background-color:#677a85;border-color:#000;color:#808080}.v10{display:inline-block;overflow:hidden;outline:0}.s77{width:84px;padding-right:0;height:24px}.ps56{position:relative;margin-left:10px;margin-top:30px}.s78{min-width:84px;width:84px;min-height:82px}.c63{z-index:22;pointer-events:auto;overflow:hidden;height:82px}.p4{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f16{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s79{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps57{position:relative;margin-left:0;margin-top:21px}.s80{min-width:136px;width:136px;min-height:100px;height:100px}.c64{z-index:21;pointer-events:auto}.i13{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps58{position:relative;margin-top:8px}.s81{width:100%;min-width:1920px;min-height:744px}.c65{z-index:1;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-24.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c65{background-image:url(images/cirp-csi-2022-320-25.php)}.ps59{position:relative;margin-top:118px}.s82{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2313px}.ps60{position:relative;margin-left:182px;margin-top:0}.s83{min-width:1536px;width:1536px;min-height:80px}.w3{line-height:0}.ps61{position:relative;margin-left:1406px;margin-top:0}.s84{min-width:84px;width:84px;min-height:80px}.c66{z-index:39;pointer-events:auto;overflow:hidden;height:80px}.f17{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s85{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f18{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps62{position:relative;margin-left:0;margin-top:-64px}.s86{min-width:1536px;width:1536px;min-height:64px}.c67{z-index:24;pointer-events:auto;overflow:hidden;height:64px}.p5{padding-bottom:0;text-align:left;text-indent:0;padding-right:0}.f19{font-family:Lato;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.ps63{position:relative;margin-left:164px;margin-top:24px}.s87{min-width:1536px;width:1536px;min-height:2000px}.c68{z-index:7;pointer-events:auto;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps64{position:relative;margin-left:0;margin-top:16px}.s88{min-width:1536px;width:1536px;min-height:166px}.c69{pointer-events:none}.ps65{position:relative;margin-left:16px;margin-top:0}.s89{min-width:1504px;width:1504px;min-height:64px}.c70{pointer-events:auto;overflow:hidden;height:64px}.f20{font-family:Lato;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.ps66{position:relative;margin-left:16px;margin-top:0}.s90{min-width:1470px;width:1470px;min-height:102px}.c71{pointer-events:auto;overflow:hidden;height:102px}.v11{display:none;vertical-align:top}.s91{width:100%;min-width:1920px;min-height:198px}.c72{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps68{position:relative;margin-top:34px}.s92{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps69{position:relative;margin-left:24px;margin-top:0}.s93{min-width:1876px;width:1876px;min-height:78px}.c73{pointer-events:auto;overflow:hidden;height:78px}.f21{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f22{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps70{position:relative;margin-left:684px;margin-top:0}.s94{min-width:256px;width:256px;min-height:64px}.c74{pointer-events:auto}.f23{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn17{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn17:hover{background-color:#82939e;border-color:#000;color:#000}.btn17:active{background-color:#181b28;border-color:#000;color:#808080}.s95{width:256px;padding-right:0;height:24px}.ps71{position:relative;margin-left:40px;margin-top:0}.f24{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn18{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn18:hover{background-color:#82939e;border-color:#000;color:#000}.btn18:active{background-color:#181b28;border-color:#000;color:#808080}@media (min-width:1200px) and (max-width:1919px) {.ps51{margin-top:4px}.s72{min-width:1200px;width:1200px;min-height:89px}.s73{min-width:1200px;width:1200px;min-height:89px}.s74{min-width:115px;width:115px;min-height:89px;height:89px}.i10{left:13px;width:89px;height:89px}.ps54{margin-left:-16px;margin-top:4px}.s75{min-width:265px;width:265px;min-height:81px;height:81px}.i12{width:265px;height:81px}.ps55{margin-left:640px;margin-top:30px}.s76{min-width:52px;width:52px;min-height:22px}.f15{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s77{width:52px;height:15px}.ps56{margin-left:7px;margin-top:15px}.s78{min-width:52px;width:52px;min-height:51px}.c63{height:51px}.f16{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s79{height:30px;transform:scale(1.000) translateY(3px)}.ps57{margin-top:9px}.s80{min-width:85px;width:85px;min-height:63px;height:63px}.i13{width:85px;height:31px;top:16px}.ps58{margin-top:5px}.s81{min-width:1200px;min-height:494px}.ps59{margin-top:36px}.s82{min-width:1200px;width:1200px;min-height:1393px}.ps60{margin-left:121px}.s83{min-width:960px;width:960px;min-height:58px}.ps61{margin-left:905px}.s84{min-width:52px;width:52px;min-height:58px}.c66{height:58px}.f17{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s85{height:27px;transform:scale(1.111) translateY(2px)}.f18{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps62{margin-top:-40px}.s86{min-width:960px;width:960px;min-height:40px}.c67{height:40px}.f19{font-size:18px;font-size:calc(18px * var(--f));line-height:1.223}.ps63{margin-left:118px;margin-top:20px}.s87{min-width:960px;width:960px;min-height:1250px}.ps64{margin-top:10px}.s88{min-width:960px;width:960px;min-height:106px}.ps65{margin-left:10px}.s89{min-width:940px;width:940px;min-height:40px}.c70{height:40px}.f20{font-size:18px;font-size:calc(18px * var(--f));line-height:1.223}.ps66{margin-left:10px}.s90{min-width:903px;width:903px;min-height:66px}.c71{height:66px}.s91{min-width:1200px;min-height:129px}.ps68{margin-top:21px}.s92{min-width:1200px;width:1200px;min-height:84px}.ps69{margin-left:15px}.s93{min-width:1172px;width:1172px;min-height:49px}.c73{height:49px}.f21{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f22{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps70{margin-left:412px;margin-top:-5px}.s94{min-width:160px;width:160px;min-height:40px}.f23{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s95{width:160px;height:15px}.ps71{margin-left:55px;margin-top:-5px}.f24{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}}@media (min-width:960px) and (max-width:1199px) {.s72{min-width:960px;width:960px;min-height:71px}.s73{min-width:960px;width:960px;min-height:71px}.s74{min-width:69px;width:69px;min-height:71px;height:71px}.i10{left:0;width:69px;height:69px;top:1px}.ps54{margin-left:1px;margin-top:3px}.s75{min-width:212px;width:212px;min-height:65px;height:65px}.i12{width:212px;height:65px}.ps55{margin-left:521px;margin-top:27px}.s76{min-width:42px;width:42px;min-height:18px}.f15{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s77{width:42px;height:11px}.ps56{margin-left:5px;margin-top:15px}.s78{min-width:42px;width:42px;min-height:41px}.c63{height:41px}.f16{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s79{height:24px;transform:scale(1.000) translateY(2px)}.ps57{margin-top:10px}.s80{min-width:68px;width:68px;min-height:51px;height:51px}.i13{width:68px;height:25px;top:13px}.ps58{margin-top:4px}.s81{min-width:960px;min-height:501px}.ps59{margin-top:-46px}.s82{min-width:960px;width:960px;min-height:1152px}.ps60{margin-left:90px}.s83{min-width:770px;width:770px;min-height:46px}.ps61{margin-left:728px}.s84{min-width:42px;width:42px;min-height:46px}.c66{height:46px}.f17{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s85{height:22px;transform:scale(1.111) translateY(2px)}.f18{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps62{margin-top:-32px}.s86{min-width:768px;width:768px;min-height:32px}.c67{height:32px}.f19{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201}.ps63{margin-left:79px;margin-top:8px}.s87{min-width:768px;width:768px;min-height:1000px}.ps64{margin-top:8px}.s88{min-width:768px;width:768px;min-height:86px}.ps65{margin-left:8px}.s89{min-width:752px;width:752px;min-height:32px}.c70{height:32px}.f20{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201}.ps66{margin-left:8px}.s90{min-width:734px;width:734px;min-height:54px}.c71{height:54px}.s91{min-width:960px;min-height:106px}.ps68{margin-top:17px}.s92{min-width:960px;width:960px;min-height:68px}.ps69{margin-left:12px}.s93{min-width:938px;width:938px;min-height:39px}.c73{height:39px}.f21{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f22{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps70{margin-left:342px;margin-top:-3px}.s94{min-width:128px;width:128px;min-height:32px}.f23{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s95{width:128px;height:12px}.ps71{margin-left:20px;margin-top:-3px}.f24{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}}@media (min-width:768px) and (max-width:959px) {.s72{min-width:768px;width:768px;min-height:57px}.s73{min-width:768px;width:768px;min-height:57px}.s74{min-width:55px;width:55px;min-height:57px;height:57px}.i10{left:0;width:55px;height:55px;top:1px}.ps54{margin-left:1px;margin-top:2px}.s75{min-width:170px;width:170px;min-height:52px;height:52px}.i12{width:170px;height:52px}.ps55{margin-left:416px;margin-top:22px}.s76{min-width:34px;width:34px;min-height:14px}.f15{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s77{width:34px;height:9px}.ps56{margin-left:4px;margin-top:12px}.s78{min-width:34px;width:34px;min-height:33px}.c63{height:33px}.f16{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s79{height:19px;transform:scale(1.000) translateY(2px)}.ps57{margin-top:8px}.s80{min-width:54px;width:54px;min-height:41px;height:41px}.i13{width:54px;height:20px;top:10px}.ps58{margin-top:3px}.s81{min-width:768px;min-height:401px}.ps59{margin-top:-37px}.s82{min-width:768px;width:768px;min-height:922px}.ps60{margin-left:72px}.s83{min-width:616px;width:616px;min-height:37px}.ps61{margin-left:582px}.s84{min-width:34px;width:34px;min-height:37px}.c66{height:37px}.f17{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s85{height:17px;transform:scale(1.111) translateY(2px)}.f18{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps62{margin-top:-26px}.s86{min-width:614px;width:614px;min-height:26px}.c67{height:26px}.f19{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251}.ps63{margin-left:63px;margin-top:6px}.s87{min-width:615px;width:615px;min-height:800px}.ps64{margin-top:7px}.s88{min-width:615px;width:615px;min-height:68px}.ps65{margin-left:7px}.s89{min-width:601px;width:601px;min-height:25px}.c70{height:25px}.f20{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251}.ps66{margin-left:7px}.s90{min-width:587px;width:587px;min-height:43px}.c71{height:43px}.s91{min-width:768px;min-height:85px}.ps68{margin-top:14px}.s92{min-width:768px;width:768px;min-height:54px}.ps69{margin-left:10px}.s93{min-width:750px;width:750px;min-height:31px}.c73{height:31px}.f21{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f22{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps70{margin-left:274px;margin-top:-3px}.s94{min-width:102px;width:102px;min-height:26px}.f23{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s95{width:102px;height:10px}.ps71{margin-left:16px;margin-top:-3px}.f24{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}}@media (min-width:480px) and (max-width:767px) {.ps51{margin-top:29px}.s72{min-width:480px;width:480px;min-height:153px}.ps52{margin-left:6px}.s73{min-width:464px;width:464px;min-height:153px}.s74{min-width:120px;width:120px;min-height:96px;height:96px}.i10{width:96px;height:96px}.ps54{margin-left:-25px;margin-top:19px}.s75{min-width:196px;width:196px;min-height:59px;height:59px}.i12{width:196px;height:59px}.ps55{margin-left:33px;margin-top:117px}.s76{min-width:140px;width:140px}.s77{width:140px}.ps56{margin-left:324px;margin-top:-143px}.s78{min-width:71px;width:71px;min-height:62px}.c63{height:62px}.f16{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s79{height:37px;transform:scale(1.000) translateY(4px)}.ps57{margin-left:377px;margin-top:-150px}.s80{min-width:87px;width:87px;min-height:75px;height:75px}.i13{width:87px;height:32px;top:21px}.ps58{margin-top:-44px}.s81{min-width:480px;min-height:336px}.ps59{margin-top:-33px}.s82{min-width:480px;width:480px;min-height:2829px}.ps60{margin-left:47px}.s83{min-width:432px;width:432px;min-height:149px}.ps61{margin-left:361px}.s84{min-width:71px;width:71px;min-height:66px}.c66{height:66px}.f17{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s85{height:33px}.f18{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps62{margin-top:3px}.s86{min-width:384px;width:384px;min-height:80px}.c67{height:80px}.f19{font-size:30px;font-size:calc(30px * var(--f));line-height:1.201}.ps63{margin-left:48px;margin-top:13px}.s87{min-width:384px;width:384px;min-height:2604px}.ps64{margin-top:5px}.s88{min-width:384px;width:384px;min-height:255px}.ps65{margin-left:5px}.s89{min-width:375px;width:375px;min-height:30px}.c70{height:30px}.f20{font-size:18px;font-size:calc(18px * var(--f));line-height:1.223}.ps66{margin-left:8px}.s90{min-width:279px;width:279px;min-height:225px}.c71{height:225px}.s91{min-width:480px}.ps68{margin-top:8px}.s92{min-width:480px;width:480px;min-height:166px}.ps69{margin-left:17px}.s93{min-width:448px;width:448px;min-height:136px}.c73{height:136px}.f21{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f22{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps70{margin-left:137px}.s94{min-width:99px;width:99px;min-height:30px}.f23{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s95{width:99px;height:18px}.ps71{margin-left:9px}.f24{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}}@media (max-width:479px) {.ps51{margin-top:19px}.s72{min-width:320px;width:320px;min-height:102px}.ps52{margin-left:4px}.s73{min-width:309px;width:309px;min-height:102px}.s74{min-width:80px;width:80px;min-height:64px;height:64px}.i10{left:8px;width:64px;height:64px}.ps54{margin-left:-17px;margin-top:13px}.s75{min-width:131px;width:131px;min-height:39px;height:39px}.i12{width:131px;height:39px}.ps55{margin-left:22px;margin-top:78px}.s76{min-width:93px;width:93px;min-height:24px}.f15{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s77{width:93px;height:16px}.ps56{margin-left:216px;margin-top:-95px}.s78{min-width:47px;width:47px;min-height:41px}.c63{height:41px}.f16{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s79{height:25px;transform:scale(1.000) translateY(3px)}.ps57{margin-left:251px;margin-top:-100px}.s80{min-width:58px;width:58px;min-height:50px;height:50px}.i13{width:58px;height:21px;top:15px}.ps58{margin-top:-29px}.s81{min-width:320px;min-height:224px}.ps59{margin-top:-22px}.s82{min-width:320px;width:320px;min-height:1886px}.ps60{margin-left:31px}.s83{min-width:288px;width:288px;min-height:99px}.ps61{margin-left:241px}.s84{min-width:47px;width:47px;min-height:44px}.c66{height:44px}.f17{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s85{height:22px;transform:scale(1.111) translateY(2px)}.f18{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps62{margin-top:2px}.s86{min-width:256px;width:256px;min-height:53px}.c67{height:53px}.f19{font-size:20px;font-size:calc(20px * var(--f));line-height:1.201}.ps63{margin-left:32px;margin-top:9px}.s87{min-width:256px;width:256px;min-height:1736px}.ps64{margin-top:3px}.s88{min-width:256px;width:256px;min-height:170px}.ps65{margin-left:3px}.s89{min-width:250px;width:250px;min-height:20px}.c70{height:20px}.f20{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251}.ps66{margin-left:5px}.s90{min-width:186px;width:186px;min-height:150px}.c71{height:150px}.s91{min-width:320px;min-height:132px}.ps68{margin-top:5px}.s92{min-width:320px;width:320px;min-height:111px}.ps69{margin-left:11px}.s93{min-width:299px;width:299px;min-height:91px}.c73{height:91px}.f21{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f22{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps70{margin-left:91px}.s94{min-width:66px;width:66px;min-height:20px}.f23{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s95{width:66px;height:12px}.ps71{margin-left:6px}.f24{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-640-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-640-25.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-960-94.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-95.php)}}@media (min-width:320px) {.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}.c65{background-image:url(images/cirp-csi-2022-480-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-480-25.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}.c65{background-image:url(images/cirp-csi-2022-960-48.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-49.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}.c65{background-image:url(images/cirp-csi-2022-1440.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1440-1.php)}}@media (min-width:480px) {.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}.c65{background-image:url(images/cirp-csi-2022-768-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-768-25.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}.c65{background-image:url(images/cirp-csi-2022-1536-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1536-25.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}.c65{background-image:url(images/cirp-csi-2022-2304.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2304-1.php)}}@media (min-width:768px) {.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}.c65{background-image:url(images/cirp-csi-2022-960-50.php)}.webp .c65{background-image:url(images/cirp-csi-2022-960-51.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}.c65{background-image:url(images/cirp-csi-2022-1920-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1920-25.php)}}@media (min-width:960px) {.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}.c65{background-image:url(images/cirp-csi-2022-1200-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1200-25.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}.c65{background-image:url(images/cirp-csi-2022-2400-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2400-25.php)}}@media (min-width:1200px) {.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}.c65{background-image:url(images/cirp-csi-2022-1415-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-1415-19.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}.c65{background-image:url(images/cirp-csi-2022-2830-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2830-19.php)}}@media (min-width:1600px) {.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}.c65{background-image:url(images/cirp-csi-2022-2000-24.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2000-25.php)}}@media (min-width:2000px) {.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}.c65{background-image:url(images/cirp-csi-2022-2131-18.php)}.webp .c65{background-image:url(images/cirp-csi-2022-2131-19.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/search.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
</head>
<body class="webp" id="b">
<?php
    $mb = extension_loaded('mbstring');

    function find($searchText, $searchFor) {
        global $mb;
        return $mb ? mb_stripos($searchText, $searchFor) : stripos($searchText, $searchFor);
    }

    function mb_split_str($str) {
        preg_match_all("/./u", $str, $arr);
        return $arr[0];
    }

    function mb_similar_text($str1, $str2, &$percent) {
        global $mb;
        $arr_1 = array_unique(mb_split_str($str1));
        $arr_2 = array_unique(mb_split_str($str2));
        $similarity = count($arr_2) - count(array_diff($arr_2, $arr_1));
        $percent = ($similarity * 2) / ($mb ? (mb_strlen($str1) + mb_strlen($str2)) : (strlen($str1) + strlen($str2)));
        return $similarity;
    }

    function simfind($searchText, $searchWord, &$score) {
        global $mb;
        $s = strtoupper($searchWord);
        foreach(preg_split("/[\\s]+/", $searchText) as $w) {
            mb_similar_text($s, strtoupper($w), $percent);
            if(strlen($searchWord) < 6)
                $percent = $percent * strlen($searchWord) / 5;
            if($percent >= .8) {
                $score = $percent;
                return array($mb ? mb_stripos($searchText, $w) : stripos($searchText, $w), $mb ? mb_strlen($w) : strlen($w));
            }
        }
        return array(FALSE, FALSE);
    }

    function scorecmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return 0;
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function textlencmp($a, $b) {
        if (strlen($a['text']) == strlen($b['text'])) {
            return 0;
        }
        return (strlen($a['text']) < strlen($b['text'])) ? 1 : -1;
    }

    function snipcmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return textlencmp($a, $b);
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function ordercmp($a, $b) {
        if ($a['order'] == $b['order']) {
            return 0;
        }
        return ($a['order'] < $b['order']) ? 1 : -1;
    }

    function mfind($searchText, $searchFor, $words, $w, &$wordsfound) {
        if(empty($searchFor))
            return FALSE;

        $snippet = array('text' => $searchText, 'w' => $w);
        if(($pos = find($searchText, $searchFor)) !== FALSE) {
            $wordsfound = array_merge($wordsfound, $words);
            $snippet['score'] = 20;
            $snippet['pos'] = $pos;
            $snippet['matchlen'] = strlen($searchFor);
            return $snippet;
        }
        foreach($words as $searchWord) {
            if(($pos = find($searchText, $searchWord)) !== FALSE) {
                $snippet['score'] = isset($wordscores[$searchWord]) ? 0.5 : 10;
                $wordsfound[] = $searchWord;
                $snippet['pos'] = $pos;
                $snippet['matchlen'] = strlen($searchWord);
                return $snippet;
            }
        }
        foreach($words as $searchWord) {
            $score = 1;
            $match = simfind($searchText, $searchWord, $score);
            if($match[0] !== FALSE) {
                $wordsfound[] = $searchWord;
                $snippet['score'] = $score * 5;
                $snippet['pos'] = $match[0];
                $snippet['matchlen'] = $match[1];
                return $snippet;
            }
        }
        return FALSE;
    }

    $page = 0;
    $start_page = 0;
    $end_page = -1;
    $searchResults = array();
    $found = array();
    if(isset($_GET['search'])) {
        $results_per_page = 10;
        $pages = 10;
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        if($page < 1) {
            $page = 1;
        }
        $start_page = $page - $pages / 2;
        if($start_page < 1) {
            $start_page = 1;
        }
        $end_page = $page + $pages / 2 - 1;

        $searchFor = $_GET['search'];
        $words = array_filter(preg_split("/[\\s]+/", $searchFor), function ($w) { return strlen($w) > 2; });
        $searchJSON = file_get_contents('search.json');
        $searchPages = json_decode($searchJSON, TRUE);
        foreach($searchPages as $searchPage) {
            $foundwords = array();
            if(($title = mfind($searchPage['title'], $searchFor, $words, 10, $foundwords)) !== FALSE) {
                $title['score'] *= (strlen($searchFor) / strlen($searchPage['title']));
            }
            $snippets = array();
            $order = 0;
            foreach($searchPage['texts'] as $text) {
                if(($s = mfind($text['t'], $searchFor, $words, $text['w'], $foundwords)) !== FALSE) {
                    $s['order'] = $order++;
                    $snippets[] = $s;
                }
            }
            if(count(array_diff(array_unique($words), array_unique($foundwords))) == 0) {
                if(count($snippets)) {
                    $len = 300;
                    $snippet_count = intval(($len + 99) / 100);
                    uasort($snippets, 'snipcmp');
                    $original_snippets = $snippets;
                    if(count($snippets) > $snippet_count) {
                        $snippets = array_slice($snippets, 0, $snippet_count);
                    } else {
                        $snippet_count = count($snippets);
                    }
                
                    $snippet_length = intval($len / $snippet_count);
                    $score = 0;
                
                    foreach($original_snippets as $s) {
                        $l = strlen($s['text']);
                        if($l > $snippet_length)
                            $l = $snippet_length;
                        $score += $s['score'] * $s['w'] * ($l / $snippet_length);
                    }
                
                    uasort($snippets, 'ordercmp');
                    if($title !== FALSE) {
                        $score += 30 * $title['score'];
                    }
                    $found[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'score' => $score, 'snippets' => $snippets);
                } else if($title !== FALSE) {
                    foreach($searchPage['texts'] as $text) {
                        $s = array('text' => $text['t'], 'w' => $text['w']);
                        $s['score'] = $text['w'];
                        $snippets[] = $s;
                    }
                    $found[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'score' => 30 * $title['score'], 'snippets' => $snippets);
                }
            }
        }
        $current_page = $page;
        $end_page = (count($found) + ($results_per_page - 1)) / $results_per_page;
        uasort($found, 'scorecmp');
        $searchResults = array_slice($found, ($page - 1) * $results_per_page, $results_per_page);
    }
?>

<div class="ps51 v8 s72">
<div class="v9 ps52 s73 c59">
<div class="v9 ps53 s74 c60">
<?php
    $show = TRUE;
    $groups = '["0"]';
    if($groups === '!') {
        $show = !isset($_SESSION['user_id']);
    }
    else if($groups !== '*') {
        $show = isset($_SESSION['user_id']) && checkAccess(json_decode($groups));
    }
    if($show) {
?>
<a href="cirpcsi2022.php" class="a3"><picture class="i11"><source srcset="images/transparentks-64-25.php 1x, images/transparentks-128-25.php 2x, images/transparentks-192-45.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-24.php 1x, images/transparentks-128-24.php 2x, images/transparentks-192-44.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-25.php 1x, images/transparentks-192-25.php 2x, images/transparentks-288-1.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-24.php 1x, images/transparentks-192-24.php 2x, images/transparentks-288.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-19.php 1x, images/transparentks-110-19.php 2x, images/transparentks-165-1.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-18.php 1x, images/transparentks-110-18.php 2x, images/transparentks-165.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-19.php 1x, images/transparentks-138-19.php 2x, images/transparentks-207-1.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-18.php 1x, images/transparentks-138-18.php 2x, images/transparentks-207.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-51.php 1x, images/transparentks-178-51.php 2x, images/transparentks-267-1.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-50.php 1x, images/transparentks-178-50.php 2x, images/transparentks-267.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-67.php 1x, images/transparentks-284-43.php 2x, images/transparentks-426-1.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-66.php 1x, images/transparentks-284-42.php 2x, images/transparentks-426.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-42.php" title="knowledge &amp; skills logo" alt="ks logo" class="un31 i10"></picture></a>
<?php
    }
?>

</div>
<div class="v9 ps54 s75 c61">
<picture class="i11">
<source srcset="images/k-stransparent-131-17.php 1x, images/k-stransparent-262-17.php 2x, images/k-stransparent-393-1.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-16.php 1x, images/k-stransparent-262-16.php 2x, images/k-stransparent-393.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-17.php 1x, images/k-stransparent-392-17.php 2x, images/k-stransparent-588-1.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-16.php 1x, images/k-stransparent-392-16.php 2x, images/k-stransparent-588.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-23.php 1x, images/k-stransparent-340-23.php 2x, images/k-stransparent-510-1.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-22.php 1x, images/k-stransparent-340-22.php 2x, images/k-stransparent-510.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-25.php 1x, images/k-stransparent-424-49.php 2x, images/k-stransparent-636-1.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-24.php 1x, images/k-stransparent-424-48.php 2x, images/k-stransparent-636.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-25.php 1x, images/k-stransparent-530-25.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-24.php 1x, images/k-stransparent-530-24.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-51.php 1x, images/k-stransparent-848-25.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-50.php 1x, images/k-stransparent-848-24.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-24.php" alt="Knowledge an Skills shared by talented engineers" class="un32 i12">
</picture>
</div>
<div class="v9 ps55 s76 c62">
<?php
    $show = TRUE;
    $groups = '["0"]';
    if($groups === '!') {
        $show = !isset($_SESSION['user_id']);
    }
    else if($groups !== '*') {
        $show = isset($_SESSION['user_id']) && checkAccess(json_decode($groups));
    }
    if($show) {
?>
<a href="./logout-415c8e.php" class="f15 btn16 v10 s77">Logout</a>
<?php
    }
?>

</div>
<div class="v9 ps56 s78 c63">
<p class="p4 f16"><a href="cirpcsi2022.php"><x-svg class="s79"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v9 ps57 s80 c64">
<a href="cirpcsi2022.php" class="a3"><picture class="i11"><source srcset="images/csi-logo-58-17.php 1x, images/csi-logo-116-17.php 2x, images/csi-logo-174-37.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-16.php 1x, images/csi-logo-116-16.php 2x, images/csi-logo-174-36.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-17.php 1x, images/csi-logo-174-17.php 2x, images/csi-logo-261-1.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-16.php 1x, images/csi-logo-174-16.php 2x, images/csi-logo-261.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-23.php 1x, images/csi-logo-108-23.php 2x, images/csi-logo-162-1.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-22.php 1x, images/csi-logo-108-22.php 2x, images/csi-logo-162.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-23.php 1x, images/csi-logo-136-45.php 2x, images/csi-logo-204-1.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-22.php 1x, images/csi-logo-136-44.php 2x, images/csi-logo-204.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-23.php 1x, images/csi-logo-170-23.php 2x, images/csi-logo-255-1.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-22.php 1x, images/csi-logo-170-22.php 2x, images/csi-logo-255.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-47.php 1x, images/csi-logo-272-23.php 2x, images/csi-logo-408-1.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-46.php 1x, images/csi-logo-272-22.php 2x, images/csi-logo-408.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-22.php" alt="cirp csi 2022" class="un33 i13"></picture></a>
</div>
</div>
</div>
<div class="v9 ps58 s81 c65"></div>
<div class="ps59 v8 s82">
<div class="v9 ps60 s83 c59">
<div class="v9 ps53 s83 w3">
<div class="v9 ps61 s84 c66">
<p class="p4 f17"><a href="cirpcsi2022.php"><x-svg class="s85"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p4 f18"><a href="cirpcsi2022.php">Home</a></p>
</div>
<div class="v9 ps62 s86 c67">
<?php
    $show = TRUE;
    $groups = '["0"]';
    if($groups === '!') {
        $show = !isset($_SESSION['user_id']);
    }
    else if($groups !== '*') {
        $show = isset($_SESSION['user_id']) && checkAccess(json_decode($groups));
    }
    if($show) {
?>
<p class="p5 f19">Search results for &quot;<span class="f19"><?php if(isset($_GET['search'])) echo $_GET['search']; ?></span>&quot;</p>
<?php
    }
?>

</div>
</div>
</div>
<div class="v9 ps63 s87 c68">
<?php
    function rev_string($string) {
        global $mb;
        $chars = $mb ? mb_split_str($string, 1, mb_internal_encoding()) : str_split($string, 1);
        return implode('', array_reverse($chars));
    }

    function word_trunc($string, $length) {
        global $mb;
        if(strlen($string) > $length)
        {
            $string = wordwrap($string, $length);
            $string = $mb? mb_substr($string, 0, mb_strpos($string, "\n")) : substr($string, 0, strpos($string, "\n"));;
        }
        return $string;
    }

    function clip_string($string, $pos, $length, $total) {
        global $mb;
        $m = $mb ? mb_substr($string, $pos, $length) : substr($string, $pos, $length);
        $before = $mb ? mb_substr($string, 0, $pos) : substr($string, 0, $pos);
        $after = $mb ? mb_substr($string, $pos + $length, mb_strlen($string) - ($pos + $length)) : substr($string, $pos + $length, strlen($string) - ($pos + $length));
        $before = rev_string($before);
        $half = intval(($total - $length) / 2);
        $hlPre = '';
        $hlPost = '';
        $out = htmlentities(rev_string(word_trunc($before, $half))) . $hlPre . htmlentities($m) . $hlPost . htmlentities(word_trunc($after, $half));
        return $out;
    }

    if(count($searchResults) == 0) {
        $result = '<div class="v9 ps64 s88 c69"><div class="v9 ps65 s89 c70"><p class="p5 f20">{title}</p></div><div class="v9 ps66 s90 c71"><p class="p5 f20">{text}</p></div></div>';
        $result = str_replace('{title}', htmlentities('No result found for this search query.'), $result);
        $result = str_replace('{text}', '', $result);
        echo $result;
    }
    else {
        echo '';
        foreach($searchResults as $searchResult) {
            $result = '<div class="v9 ps64 s88 c69"><div class="v9 ps65 s89 c70"><p class="p5 f20">{title}</p></div><div class="v9 ps66 s90 c71"><p class="p5 f20">{text}</p></div></div>';
            $result = str_replace('{title}', '<a href="' . $searchResult['link'] . '">' . $searchResult['title'] . '</a>', $result);

            $text = "";
            foreach($searchResult['snippets'] as $s) {
                if(isset($s['pos'])) {
                    $pos = $s['pos'];
                    $m = $s['matchlen'];
                    $snippet = clip_string($s['text'], $pos, $m, $snippet_length);
                } else {
                    $snippet = $s['text'];
                }
                if(strlen($text))
                    $text .= "&hellip;";
                $text .= " " . $snippet;
            }

            $result = str_replace('{text}', $text, $result);
            echo $result;
        }
   }
?>

</div>
<div class="v5 ps32 s42 c30">
<div class="ps31">
<?php

    echo '<style>.pbdn{display:none}.pbc{border: 0;background-color:#808080;color:#808080;border-color:#677a85}</style>';
    $control = '<div class="v5 ps33 s43 c31 {btnclass}"><a href="#" class="f11 btn4 v6 s44 {lnkclass}">&lt;&lt;</a></div>';
    if($page > 1) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page - 1);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{lnkclass}', '', $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s45 c32 {btnclass}"><a href="#" class="f11 btn5 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps35 s45 c33 {btnclass}"><a href="#" class="f11 btn6 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 2 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s43 c34 {btnclass}"><a href="#" class="f11 btn7 v6 s44 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 3 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s45 c35 {btnclass}"><a href="#" class="f11 btn8 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 4 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps36 s47 c36 {btnclass}"><a href="#" class="f11 btn9 v6 s48 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 5 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps35 s47 c37 {btnclass}"><a href="#" class="f11 btn10 v6 s48 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 6 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps36 s45 c38 {btnclass}"><a href="#" class="f11 btn11 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 7 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s43 c39 {btnclass}"><a href="#" class="f11 btn12 v6 s44 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 8 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s45 c40 {btnclass}"><a href="#" class="f11 btn13 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 9 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps35 s45 c41 {btnclass}"><a href="#" class="f11 btn14 v6 s46 {lnkclass}">{page_num}</a></div>';
    $buttonPage = $start_page + 10 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v5 ps34 s43 c42 {btnclass}"><a href="#" class="f11 btn15 v6 s44 {lnkclass}">&gt;&gt;</a></div>';
    if($page < $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page + 1);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{btnclass}', '', $control);
    }
    else {
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

</div>
</div>
</div>
<div class="btf v5 ps37 s49 c43">
<div class="v5 ps38 s50 c44">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c46">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c47">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un61"><source data-srcset="images/transparentks-102-25.php 1x, images/transparentks-204-25.php 2x, images/transparentks-306-45.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-24.php 1x, images/transparentks-204-24.php 2x, images/transparentks-306-44.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-25.php 1x, images/transparentks-306-25.php 2x, images/transparentks-459-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-24.php 1x, images/transparentks-306-24.php 2x, images/transparentks-459.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-29.php 1x, images/transparentks-114-29.php 2x, images/transparentks-171-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-28.php 1x, images/transparentks-114-28.php 2x, images/transparentks-171.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-25.php 1x, images/transparentks-142-69.php 2x, images/transparentks-213-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-24.php 1x, images/transparentks-142-68.php 2x, images/transparentks-213.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-53.php 1x, images/transparentks-178-53.php 2x, images/transparentks-267-3.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-52.php 1x, images/transparentks-178-52.php 2x, images/transparentks-267-2.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-71.php 1x, images/transparentks-284-45.php 2x, images/transparentks-426-3.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-70.php 1x, images/transparentks-284-44.php 2x, images/transparentks-426-2.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-44.php" title="knowledge &amp; skills logo" alt="logo" class="un34 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c48">
<picture class="i8 un62">
<source data-srcset="images/k-stransparent-110-25.php 1x, images/k-stransparent-220-25.php 2x, images/k-stransparent-330-45.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-24.php 1x, images/k-stransparent-220-24.php 2x, images/k-stransparent-330-44.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-25.php 1x, images/k-stransparent-330-25.php 2x, images/k-stransparent-495-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-24.php 1x, images/k-stransparent-330-24.php 2x, images/k-stransparent-495.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-23.php 1x, images/k-stransparent-340-23.php 2x, images/k-stransparent-510-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-22.php 1x, images/k-stransparent-340-22.php 2x, images/k-stransparent-510.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-25.php 1x, images/k-stransparent-424-49.php 2x, images/k-stransparent-636-1.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-24.php 1x, images/k-stransparent-424-48.php 2x, images/k-stransparent-636.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-25.php 1x, images/k-stransparent-530-25.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-24.php 1x, images/k-stransparent-530-24.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-51.php 1x, images/k-stransparent-848-25.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-50.php 1x, images/k-stransparent-848-24.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-24.php" alt="Knowledge an Skills shared by talented engineers" class="un35 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c49">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c50"></div>
<div class="v5 ps44 s60 c51">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c52"></div>
<div class="v5 ps46 s64 c53">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c54"></div>
<div class="v5 ps48 s67 c55">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z'/></svg></x-svg></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps49 s68 c56">
<p class="p3 f13">Follow us on social media and join our community on <span class="f14"><a href="https://www.linkedin.com/company/knowledge-and-skills-sas/" target="_blank" rel="noopener">LinkedIn</a></span>, <span class="f14"><a href="https://www.facebook.com/knowledgeandskillseu" target="_blank" rel="noopener">Facebook</a></span> and <span class="f14"><a href="https://twitter.com/knowledgeandsk">Twitter</a></span></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps38 s69 c57">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c58">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v11 ps67 s91 c72">
<div class="ps68 v8 s92">
<div class="v9 ps69 s93 c73">
<p class="p5 f21">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f22"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v9 ps70 s94 c74">
<a href="javascript:void(0)" class="denyConsent f23 btn17 v10 s95">Refuse</a>
</div>
<div class="v9 ps71 s94 c74">
<a href="javascript:void(0)" class="allowConsent f24 btn18 v10 s95">OK</a>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=parseInt(1e7/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size"))+.5)/1e5,n=document.body;r!=n.style.getPropertyValue("--f")&&n.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>dpth="/";!function(){for(var e=["js/consent.773f77.js","js/jquery.773f77.js","js/search.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<3&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<3;o++)t(o)}();
</script>
</body>
</html>