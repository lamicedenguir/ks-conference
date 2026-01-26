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
            $redirect = 'cirpcsi2022session1.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '8B63F4C2-8582-440F-AB5D-CF89DACED4DA';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1.php';
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
<title>Day 1 sessions 10h50 to 12h30</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 1 sessions 10h50 to 12h30">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}@font-face{font-display:block;font-family:"EB Garamond";src:url('css/EBGaramond-Regular.woff2') format('woff2'),url('css/EBGaramond-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps388{position:relative;margin-top:0}.v33{display:block;vertical-align:top}.s434{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v34{display:inline-block;vertical-align:top}.ps389{position:relative;margin-left:0;margin-top:0}.s435{min-width:1920px;width:1920px;min-height:142px}.ps390{position:relative;margin-left:0;margin-top:0}.s436{min-width:165px;width:165px;min-height:142px;height:142px}.c613{z-index:3;pointer-events:auto}.a9{display:block}.i55{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i56{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps391{position:relative;margin-left:-21px;margin-top:6px}.s437{min-width:424px;width:424px;min-height:130px;height:130px}.c614{z-index:1;pointer-events:auto}.i57{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps392{position:relative;margin-left:1038px;margin-top:54px}.s438{min-width:84px;width:84px;min-height:36px}.c615{z-index:30;pointer-events:auto}.f123{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn143{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn143:hover{background-color:#82939e;border-color:#000;color:#000}.btn143:active{background-color:#677a85;border-color:#000;color:#808080}.v35{display:inline-block;overflow:hidden;outline:0}.s439{width:84px;padding-right:0;height:24px}.ps393{position:relative;margin-left:10px;margin-top:30px}.s440{min-width:84px;width:84px;min-height:82px}.c616{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p24{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f124{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s441{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps394{position:relative;margin-left:0;margin-top:21px}.s442{min-width:136px;width:136px;min-height:100px;height:100px}.c617{z-index:19;pointer-events:auto}.i58{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps395{position:relative;margin-top:8px}.s443{width:100%;min-width:1920px;min-height:744px}.c618{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-32.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c618{background-image:url(images/cirp-csi-2022-320-33.php)}.ps396{position:relative;margin-top:60px}.s444{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps397{position:relative;margin-left:240px;margin-top:0}.s445{min-width:1600px;width:1600px;min-height:160px}.ps398{position:relative;margin-left:0;margin-top:0}.s446{min-width:1520px;width:1520px;min-height:160px}.c619{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f125{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps399{position:relative;margin-left:-4px;margin-top:0}.s447{min-width:84px;width:84px;min-height:80px}.c620{z-index:172;pointer-events:auto;overflow:hidden;height:80px}.f126{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s448{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f127{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps400{position:relative;margin-top:104px}.s449{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:70px}.ps401{position:relative;margin-left:500px;margin-top:0}.s450{min-width:1040px;width:1040px;min-height:70px}.s451{min-width:320px;width:320px;min-height:70px}.c621{z-index:18;pointer-events:auto}.f128{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn144{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn144:hover{background-color:#82939e;border-color:#000;color:#000}.btn144:active{background-color:#677a85;border-color:#000;color:#808080}.s452{width:320px;padding-right:0;height:29px}.ps402{position:relative;margin-left:40px;margin-top:0}.c622{z-index:22;pointer-events:auto}.btn145{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn145:hover{background-color:#82939e;border-color:#000;color:#000}.btn145:active{background-color:#677a85;border-color:#000;color:#808080}.ps403{position:relative;margin-left:40px;margin-top:0}.c623{z-index:23;pointer-events:auto}.btn146{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn146:hover{background-color:#82939e;border-color:#000;color:#000}.btn146:active{background-color:#677a85;border-color:#000;color:#808080}.ps404{position:relative;margin-top:63px}.s453{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:51px}.ps405{position:relative;margin-left:55px;margin-top:0}.s454{min-width:845px;width:845px;min-height:51px}.c624{z-index:31;pointer-events:auto;overflow:hidden;height:51px}.p25{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f129{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps406{position:relative;margin-top:20px}.s455{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:240px}.ps407{position:relative;margin-left:55px;margin-top:2px}.s456{min-width:1805px;width:1805px;min-height:63px}.c625{z-index:32;pointer-events:auto}.f130{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn147{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn147:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn147:active{background-color:#677a85;border-color:#000;color:#fff}.s457{width:1805px;padding-right:0;height:34px}.ps408{position:relative;margin-left:55px;margin-top:19px}.s458{min-width:1805px;width:1805px;min-height:63px}.c626{z-index:33;pointer-events:auto}.f131{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn148{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn148:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn148:active{background-color:#677a85;border-color:#000;color:#fff}.ps409{position:relative;margin-left:55px;margin-top:24px}.s459{min-width:1805px;width:1805px;min-height:63px}.c627{z-index:34;pointer-events:auto}.f132{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn149{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn149:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn149:active{background-color:#677a85;border-color:#000;color:#fff}.c628{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:9px;min-height:2473px}.ps410{position:relative;margin-top:0}.s460{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2473px}.s461{width:1926px;margin-left:-3px;min-height:2473px}.s462{min-width:1926px;width:1926px;min-height:789px}.c629{z-index:35}.ps411{position:relative;margin-left:58px;margin-top:0}.s463{min-width:600px;width:600px;min-height:51px}.c630{z-index:41;pointer-events:auto;overflow:hidden;height:51px}.ps412{position:relative;margin-left:0;margin-top:-3px}.s464{min-width:1926px;width:1926px;min-height:447px}.w7{line-height:0}.c631{z-index:36}.s465{min-width:1920px;width:1920px;min-height:147px;height:147px}.c632{z-index:38;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps413{position:relative;margin-left:20px;margin-top:3px}.s466{min-width:1784px;width:1784px;min-height:144px}.c633{z-index:39;pointer-events:auto;overflow:hidden;height:144px}.f133{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f134{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps414{position:relative;margin-left:0;margin-top:-6px}.s467{min-width:1920px;width:1920px;min-height:147px}.c634{z-index:37;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps415{position:relative;margin-left:1843px;margin-top:-413px}.s468{min-width:54px;width:54px;min-height:380px}.c635{z-index:42}.s469{min-width:54px;width:54px;min-height:86px}.c636{z-index:51;pointer-events:auto;overflow:hidden;height:86px}.ps416{position:relative;margin-left:0;margin-top:61px}.c637{z-index:52;pointer-events:auto;overflow:hidden;height:86px}.ps417{position:relative;margin-left:23px;margin-top:-294px}.s470{min-width:1784px;width:1784px;min-height:142px}.c638{z-index:46;pointer-events:auto;overflow:hidden;height:142px}.f135{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.468;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f136{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.468;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f137{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.468;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps418{position:relative;margin-left:0;margin-top:-2473px}.s471{min-width:1920px;width:1920px;min-height:1px}.v36{display:none;vertical-align:top}.s472{width:100%;min-width:1920px;min-height:198px}.c639{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps420{position:relative;margin-top:34px}.s473{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps421{position:relative;margin-left:24px;margin-top:0}.s474{min-width:1876px;width:1876px;min-height:78px}.c640{pointer-events:auto;overflow:hidden;height:78px}.f138{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f139{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps422{position:relative;margin-left:684px;margin-top:0}.s475{min-width:256px;width:256px;min-height:64px}.c641{pointer-events:auto}.f140{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn150{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn150:hover{background-color:#82939e;border-color:#000;color:#000}.btn150:active{background-color:#181b28;border-color:#000;color:#808080}.s476{width:256px;padding-right:0;height:24px}.ps423{position:relative;margin-left:40px;margin-top:0}.f141{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn151{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn151:hover{background-color:#82939e;border-color:#000;color:#000}.btn151:active{background-color:#181b28;border-color:#000;color:#808080}.ps424{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435189;pointer-events:none;visibility:hidden;opacity:0}.v37{display:inline-block;vertical-align:top;pointer-events:auto}.ps425{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s477{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c642{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps426{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435184;pointer-events:none;visibility:hidden;opacity:0}.c643{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps427{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435179;pointer-events:none;visibility:hidden;opacity:0}.c644{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps428{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435239;pointer-events:none;visibility:hidden;opacity:0}.c645{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps429{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435234;pointer-events:none;visibility:hidden;opacity:0}.c646{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps430{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435229;pointer-events:none;visibility:hidden;opacity:0}.c647{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps431{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435224;pointer-events:none;visibility:hidden;opacity:0}.c648{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps432{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435219;pointer-events:none;visibility:hidden;opacity:0}.c649{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps433{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435214;pointer-events:none;visibility:hidden;opacity:0}.c650{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps434{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435209;pointer-events:none;visibility:hidden;opacity:0}.c651{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps435{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435204;pointer-events:none;visibility:hidden;opacity:0}.c652{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps436{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435199;pointer-events:none;visibility:hidden;opacity:0}.c653{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps437{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435194;pointer-events:none;visibility:hidden;opacity:0}.c654{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps438{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435174;pointer-events:none;visibility:hidden;opacity:0}.c655{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps439{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435097;pointer-events:none;visibility:hidden;opacity:0}.c656{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps388{margin-top:4px}.s434{min-width:1200px;width:1200px;min-height:89px}.s435{min-width:1200px;width:1200px;min-height:89px}.s436{min-width:115px;width:115px;min-height:89px;height:89px}.i55{left:13px;width:89px;height:89px}.ps391{margin-left:-16px;margin-top:4px}.s437{min-width:265px;width:265px;min-height:81px;height:81px}.i57{width:265px;height:81px}.ps392{margin-left:640px;margin-top:30px}.s438{min-width:52px;width:52px;min-height:22px}.f123{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s439{width:52px;height:15px}.ps393{margin-left:7px;margin-top:15px}.s440{min-width:52px;width:52px;min-height:51px}.c616{height:51px}.f124{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s441{height:30px;transform:scale(1.000) translateY(3px)}.ps394{margin-top:9px}.s442{min-width:85px;width:85px;min-height:63px;height:63px}.i58{width:85px;height:31px;top:16px}.ps395{margin-top:5px}.s443{min-width:1200px;min-height:494px}.ps396{margin-top:4px}.s444{min-width:1200px;width:1200px;min-height:116px}.ps397{margin-left:150px}.s445{min-width:999px;width:999px;min-height:116px}.s446{min-width:950px;width:950px;min-height:116px}.c619{height:116px}.f125{font-size:30px;font-size:calc(30px * var(--f))}.ps399{margin-left:-3px}.s447{min-width:52px;width:52px;min-height:58px}.c620{height:58px}.f126{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s448{height:27px;transform:scale(1.111) translateY(2px)}.f127{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps400{margin-top:49px}.s449{min-width:1200px;width:1200px;min-height:44px}.ps401{margin-left:275px}.s450{min-width:650px;width:650px;min-height:44px}.s451{min-width:200px;width:200px;min-height:44px}.f128{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s452{width:200px;height:18px}.ps402{margin-left:25px}.ps403{margin-left:25px}.ps404{margin-top:40px}.s453{min-width:1200px;width:1200px;min-height:35px}.ps405{margin-left:34px}.s454{min-width:485px;width:485px;min-height:35px}.c624{height:35px}.f129{font-size:18px;font-size:calc(18px * var(--f))}.ps406{margin-top:8px}.s455{min-width:1200px;width:1200px;min-height:153px}.ps407{margin-left:34px}.s456{min-width:1129px;width:1129px;min-height:39px}.f130{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s457{width:1129px;height:21px}.ps408{margin-left:34px;margin-top:12px}.s458{min-width:1129px;width:1129px;min-height:40px}.f131{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.ps409{margin-left:34px;margin-top:15px}.s459{min-width:1129px;width:1129px;min-height:39px}.f132{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c628{width:max(1200px, 100%);margin-top:14px;min-height:1554px}.s460{min-width:1200px;width:1200px;min-height:1554px}.s461{width:1206px;min-height:1554px}.s462{min-width:1206px;width:1206px;min-height:495px}.ps411{margin-left:37px}.s463{min-width:375px;width:375px;min-height:32px}.c630{height:32px}.s464{min-width:1206px;width:1206px;min-height:282px}.s465{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps413{margin-left:6px}.s466{min-width:1107px;width:1107px;min-height:89px}.c633{height:89px}.f133{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.f134{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.s467{min-width:1200px;width:1200px;min-height:92px}.ps415{margin-left:1149px;margin-top:-259px}.s468{min-width:33px;width:33px;min-height:237px}.s469{min-width:33px;width:33px;min-height:53px}.c636{height:53px}.ps416{margin-top:39px}.c637{height:53px}.ps417{margin-left:9px;margin-top:-181px}.s470{min-width:1107px;width:1107px;min-height:81px}.c638{height:81px}.f135{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.f136{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.f137{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.ps418{margin-top:-1554px}.s471{min-width:1200px;width:1200px}.s472{min-width:1200px;min-height:129px}.ps420{margin-top:21px}.s473{min-width:1200px;width:1200px;min-height:84px}.ps421{margin-left:15px}.s474{min-width:1172px;width:1172px;min-height:49px}.c640{height:49px}.f138{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f139{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps422{margin-left:412px;margin-top:-5px}.s475{min-width:160px;width:160px;min-height:40px}.f140{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s476{width:160px;height:15px}.ps423{margin-left:55px;margin-top:-5px}.f141{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps425{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s477{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s434{min-width:960px;width:960px;min-height:71px}.s435{min-width:960px;width:960px;min-height:71px}.s436{min-width:69px;width:69px;min-height:71px;height:71px}.i55{left:0;width:69px;height:69px;top:1px}.ps391{margin-left:1px;margin-top:3px}.s437{min-width:212px;width:212px;min-height:65px;height:65px}.i57{width:212px;height:65px}.ps392{margin-left:521px;margin-top:27px}.s438{min-width:42px;width:42px;min-height:18px}.f123{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s439{width:42px;height:11px}.ps393{margin-left:5px;margin-top:15px}.s440{min-width:42px;width:42px;min-height:41px}.c616{height:41px}.f124{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s441{height:24px;transform:scale(1.000) translateY(2px)}.ps394{margin-top:10px}.s442{min-width:68px;width:68px;min-height:51px;height:51px}.i58{width:68px;height:25px;top:13px}.ps395{margin-top:4px}.s443{min-width:960px;min-height:501px}.ps396{margin-top:0}.s444{min-width:960px;width:960px;min-height:92px}.ps397{margin-left:118px}.s445{min-width:802px;width:802px;min-height:92px}.s446{min-width:760px;width:760px;min-height:92px}.c619{height:92px}.f125{font-size:24px;font-size:calc(24px * var(--f))}.ps399{margin-left:0}.s447{min-width:42px;width:42px;min-height:46px}.c620{height:46px}.f126{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s448{height:22px;transform:scale(1.111) translateY(2px)}.f127{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps400{margin-top:8px}.s449{min-width:960px;width:960px;min-height:35px}.ps401{margin-left:220px}.s450{min-width:520px;width:520px;min-height:35px}.s451{min-width:160px;width:160px;min-height:35px}.f128{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s452{width:160px;height:15px}.ps402{margin-left:20px}.ps403{margin-left:20px}.ps404{margin-top:19px}.s453{min-width:960px;width:960px;min-height:26px}.ps405{margin-left:27px}.s454{min-width:368px;width:368px;min-height:26px}.c624{height:26px}.f129{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps406{margin-top:11px}.s455{min-width:960px;width:960px;min-height:124px}.ps407{margin-left:27px}.s456{min-width:903px;width:903px;min-height:31px}.f130{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s457{width:903px;height:16px}.ps408{margin-left:27px;margin-top:10px}.s458{min-width:903px;width:903px;min-height:32px}.f131{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.ps409{margin-left:27px;margin-top:12px}.s459{min-width:903px;width:903px;min-height:31px}.f132{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c628{width:max(960px, 100%);margin-top:14px;min-height:1247px}.s460{min-width:960px;width:960px;min-height:1247px}.s461{width:966px;min-height:1247px}.s462{min-width:966px;width:966px;min-height:397px}.ps411{margin-left:30px}.s463{min-width:300px;width:300px;min-height:26px}.c630{height:26px}.s464{min-width:966px;width:966px;min-height:227px}.s465{min-width:960px;width:960px;min-height:73px;height:73px}.ps413{margin-left:10px;margin-top:1px}.s466{min-width:890px;width:890px;min-height:71px}.c633{height:71px}.f133{font-size:15px;font-size:calc(15px * var(--f));line-height:1.468}.f134{font-size:15px;font-size:calc(15px * var(--f));line-height:1.468}.s467{min-width:960px;width:960px;min-height:74px}.ps415{margin-left:926px;margin-top:-209px}.s468{min-width:28px;width:28px;min-height:190px}.s469{min-width:26px;width:26px;min-height:42px}.c636{height:42px}.ps416{margin-left:2px;margin-top:29px}.c637{height:42px}.ps417{margin-left:13px;margin-top:-148px}.s470{min-width:890px;width:890px;min-height:71px}.c638{height:71px}.f135{font-size:15px;font-size:calc(15px * var(--f))}.f136{font-size:15px;font-size:calc(15px * var(--f))}.f137{font-size:15px;font-size:calc(15px * var(--f))}.ps418{margin-top:-1247px}.s471{min-width:960px;width:960px}.s472{min-width:960px;min-height:106px}.ps420{margin-top:17px}.s473{min-width:960px;width:960px;min-height:68px}.ps421{margin-left:12px}.s474{min-width:938px;width:938px;min-height:39px}.c640{height:39px}.f138{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f139{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps422{margin-left:342px;margin-top:-3px}.s475{min-width:128px;width:128px;min-height:32px}.f140{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s476{width:128px;height:12px}.ps423{margin-left:20px;margin-top:-3px}.f141{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps425{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s477{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s434{min-width:768px;width:768px;min-height:57px}.s435{min-width:768px;width:768px;min-height:57px}.s436{min-width:55px;width:55px;min-height:57px;height:57px}.i55{left:0;width:55px;height:55px;top:1px}.ps391{margin-left:1px;margin-top:2px}.s437{min-width:170px;width:170px;min-height:52px;height:52px}.i57{width:170px;height:52px}.ps392{margin-left:416px;margin-top:22px}.s438{min-width:34px;width:34px;min-height:14px}.f123{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s439{width:34px;height:9px}.ps393{margin-left:4px;margin-top:12px}.s440{min-width:34px;width:34px;min-height:33px}.c616{height:33px}.f124{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s441{height:19px;transform:scale(1.000) translateY(2px)}.ps394{margin-top:8px}.s442{min-width:54px;width:54px;min-height:41px;height:41px}.i58{width:54px;height:20px;top:10px}.ps395{margin-top:3px}.s443{min-width:768px;min-height:401px}.ps396{margin-top:0}.s444{min-width:768px;width:768px;min-height:73px}.ps397{margin-left:94px}.s445{min-width:642px;width:642px;min-height:73px}.s446{min-width:608px;width:608px;min-height:73px}.c619{height:73px}.f125{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps399{margin-left:0}.s447{min-width:34px;width:34px;min-height:37px}.c620{height:37px}.f126{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s448{height:17px;transform:scale(1.111) translateY(2px)}.f127{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps400{margin-top:7px}.s449{min-width:768px;width:768px;min-height:28px}.ps401{margin-left:176px}.s450{min-width:416px;width:416px;min-height:28px}.s451{min-width:128px;width:128px;min-height:28px}.f128{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s452{width:128px;height:11px}.ps402{margin-left:16px}.ps403{margin-left:16px}.ps404{margin-top:15px}.s453{min-width:768px;width:768px;min-height:21px}.ps405{margin-left:22px}.s454{min-width:294px;width:294px;min-height:21px}.c624{height:21px}.f129{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps406{margin-top:8px}.s455{min-width:768px;width:768px;min-height:101px}.ps407{margin-left:22px}.s456{min-width:722px;width:722px;min-height:25px}.f130{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s457{width:722px;height:12px}.ps408{margin-left:22px;margin-top:8px}.s458{min-width:722px;width:722px;min-height:26px}.f131{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:7px}.ps409{margin-left:22px;margin-top:9px}.s459{min-width:722px;width:722px;min-height:25px}.f132{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c628{width:max(768px, 100%);margin-top:10px;min-height:998px}.s460{min-width:768px;width:768px;min-height:998px}.s461{width:774px;min-height:998px}.s462{min-width:774px;width:774px;min-height:318px}.ps411{margin-left:25px}.s463{min-width:240px;width:240px;min-height:21px}.c630{height:21px}.s464{min-width:774px;width:774px;min-height:183px}.s465{min-width:768px;width:768px;min-height:58px;height:58px}.ps413{margin-left:8px;margin-top:1px}.s466{min-width:712px;width:712px;min-height:56px}.c633{height:56px}.f133{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f134{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.s467{min-width:768px;width:768px;min-height:59px}.ps415{margin-left:741px;margin-top:-168px}.s468{min-width:23px;width:23px;min-height:152px}.s469{min-width:21px;width:21px;min-height:33px}.c636{height:33px}.ps416{margin-left:2px;margin-top:24px}.c637{height:33px}.ps417{margin-left:11px;margin-top:-119px}.s470{min-width:712px;width:712px;min-height:56px}.c638{height:56px}.f135{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f136{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f137{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:12px;font-size:calc(12px * var(--f));line-height:1.168}.ps418{margin-top:-998px}.s471{min-width:768px;width:768px}.s472{min-width:768px;min-height:85px}.ps420{margin-top:14px}.s473{min-width:768px;width:768px;min-height:54px}.ps421{margin-left:10px}.s474{min-width:750px;width:750px;min-height:31px}.c640{height:31px}.f138{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f139{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps422{margin-left:274px;margin-top:-3px}.s475{min-width:102px;width:102px;min-height:26px}.f140{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s476{width:102px;height:10px}.ps423{margin-left:16px;margin-top:-3px}.f141{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps425{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s477{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps388{margin-top:29px}.s434{min-width:480px;width:480px;min-height:153px}.ps389{margin-left:6px}.s435{min-width:464px;width:464px;min-height:153px}.s436{min-width:120px;width:120px;min-height:96px;height:96px}.i55{width:96px;height:96px}.ps391{margin-left:-25px;margin-top:19px}.s437{min-width:196px;width:196px;min-height:59px;height:59px}.i57{width:196px;height:59px}.ps392{margin-left:33px;margin-top:117px}.s438{min-width:140px;width:140px}.s439{width:140px}.ps393{margin-left:324px;margin-top:-143px}.s440{min-width:71px;width:71px;min-height:62px}.c616{height:62px}.f124{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s441{height:37px;transform:scale(1.000) translateY(4px)}.ps394{margin-left:377px;margin-top:-150px}.s442{min-width:87px;width:87px;min-height:75px;height:75px}.i58{width:87px;height:32px;top:21px}.ps395{margin-top:-47px}.s443{min-width:480px;min-height:336px}.ps396{margin-top:-66px}.s444{min-width:480px;width:480px;min-height:230px}.ps397{margin-left:33px}.s445{min-width:447px;width:447px;min-height:230px}.ps398{margin-top:66px}.s446{min-width:414px;width:414px;min-height:164px}.c619{height:164px}.f125{font-size:30px;font-size:calc(30px * var(--f))}.ps399{margin-left:-37px}.s447{min-width:70px;width:70px;min-height:66px}.c620{height:66px}.f126{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s448{height:33px}.f127{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps400{margin-top:46px}.s449{min-width:480px;width:480px;min-height:333px}.ps401{margin-left:33px}.s450{min-width:414px;width:414px;min-height:333px}.s451{min-width:414px;width:414px;min-height:72px}.f128{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s452{width:414px;height:33px}.ps402{margin-left:0;margin-top:57px}.ps403{margin-left:0;margin-top:60px}.ps404{margin-top:32px}.s453{min-width:480px;width:480px;min-height:91px}.ps405{margin-left:9px}.s454{min-width:462px;width:462px;min-height:91px}.c624{height:91px}.f129{font-size:21px;font-size:calc(21px * var(--f))}.ps406{margin-top:-2px}.s455{min-width:480px;width:480px;min-height:292px}.ps407{margin-left:15px}.s456{min-width:452px;width:452px;min-height:83px}.f130{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s457{width:452px;height:26px}.ps408{margin-left:15px}.s458{min-width:452px;width:452px;min-height:83px}.f131{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.ps409{margin-left:15px;margin-top:18px}.s459{min-width:452px;width:452px;min-height:81px}.f132{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:27px}.c628{width:max(480px, 100%);margin-top:25px;min-height:1766px}.s460{min-width:480px;width:480px;min-height:1766px}.s461{width:486px;min-height:1766px}.s462{min-width:486px;width:486px;min-height:563px}.ps411{margin-left:12px}.s463{min-width:462px;width:462px;min-height:39px}.c630{height:39px}.s464{min-width:486px;width:486px;min-height:317px}.s465{min-width:480px;width:480px;min-height:102px;height:102px}.ps413{margin-left:5px;margin-top:5px}.s466{min-width:412px;width:412px;min-height:97px}.c633{height:97px}.f133{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f134{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s467{min-width:480px;width:480px;min-height:107px}.ps415{margin-left:425px;margin-top:-294px}.s468{min-width:58px;width:58px;min-height:267px}.s469{min-width:58px;width:58px;min-height:63px}.c636{height:63px}.ps416{margin-top:39px}.c637{height:63px}.ps417{margin-left:8px;margin-top:-203px}.s470{min-width:412px;width:412px;min-height:98px}.c638{height:98px}.f135{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f136{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f137{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:16px;font-size:calc(16px * var(--f));line-height:0.876}.ps418{margin-top:-1811px}.s471{min-width:480px;width:480px}.s472{min-width:480px}.ps420{margin-top:8px}.s473{min-width:480px;width:480px;min-height:166px}.ps421{margin-left:17px}.s474{min-width:448px;width:448px;min-height:136px}.c640{height:136px}.f138{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f139{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps422{margin-left:137px}.s475{min-width:99px;width:99px;min-height:30px}.f140{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s476{width:99px;height:18px}.ps423{margin-left:9px}.f141{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps425{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s477{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps388{margin-top:19px}.s434{min-width:320px;width:320px;min-height:102px}.ps389{margin-left:4px}.s435{min-width:309px;width:309px;min-height:102px}.s436{min-width:80px;width:80px;min-height:64px;height:64px}.i55{left:8px;width:64px;height:64px}.ps391{margin-left:-17px;margin-top:13px}.s437{min-width:131px;width:131px;min-height:39px;height:39px}.i57{width:131px;height:39px}.ps392{margin-left:22px;margin-top:78px}.s438{min-width:93px;width:93px;min-height:24px}.f123{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s439{width:93px;height:16px}.ps393{margin-left:216px;margin-top:-95px}.s440{min-width:47px;width:47px;min-height:41px}.c616{height:41px}.f124{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s441{height:25px;transform:scale(1.000) translateY(3px)}.ps394{margin-left:251px;margin-top:-100px}.s442{min-width:58px;width:58px;min-height:50px;height:50px}.i58{width:58px;height:21px;top:15px}.ps395{margin-top:-31px}.s443{min-width:320px;min-height:224px}.ps396{margin-top:-44px}.s444{min-width:320px;width:320px;min-height:153px}.ps397{margin-left:22px}.s445{min-width:298px;width:298px;min-height:153px}.ps398{margin-top:44px}.s446{min-width:276px;width:276px;min-height:109px}.c619{height:109px}.f125{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps399{margin-left:-25px}.s447{min-width:47px;width:47px;min-height:44px}.c620{height:44px}.f126{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s448{height:22px;transform:scale(1.111) translateY(2px)}.f127{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps400{margin-top:31px}.s449{min-width:320px;width:320px;min-height:222px}.ps401{margin-left:22px}.s450{min-width:276px;width:276px;min-height:222px}.s451{min-width:276px;width:276px;min-height:48px}.f128{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s452{width:276px;height:23px}.ps402{margin-left:0;margin-top:38px}.ps403{margin-left:0;margin-top:40px}.ps404{margin-top:21px}.s453{min-width:320px;width:320px;min-height:61px}.ps405{margin-left:6px}.s454{min-width:308px;width:308px;min-height:61px}.c624{height:61px}.f129{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps406{margin-top:-2px}.s455{min-width:320px;width:320px;min-height:197px}.ps407{margin-left:10px}.s456{min-width:301px;width:301px;min-height:55px}.f130{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s457{width:301px;height:17px}.ps408{margin-left:10px;margin-top:13px}.s458{min-width:301px;width:301px;min-height:55px}.f131{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps409{margin-left:10px;margin-top:12px}.s459{min-width:301px;width:301px;min-height:54px}.f132{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:18px}.c628{width:max(320px, 100%);margin-top:15px;min-height:1178px}.s460{min-width:320px;width:320px;min-height:1178px}.s461{width:326px;min-height:1178px}.s462{min-width:326px;width:326px;min-height:376px}.ps411{margin-left:9px}.s463{min-width:308px;width:308px;min-height:26px}.c630{height:26px}.s464{min-width:326px;width:326px;min-height:213px}.s465{min-width:320px;width:320px;min-height:68px;height:68px}.ps413{margin-left:3px}.s466{min-width:275px;width:275px;min-height:65px}.c633{height:65px}.f133{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f134{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s467{min-width:320px;width:320px;min-height:71px}.ps415{margin-left:284px;margin-top:-197px}.s468{min-width:39px;width:39px;min-height:178px}.s469{min-width:39px;width:39px;min-height:42px}.c636{height:42px}.ps416{margin-top:26px}.c637{height:42px}.ps417{margin-left:6px;margin-top:-136px}.s470{min-width:275px;width:275px;min-height:65px}.c638{height:65px}.f135{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f136{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f137{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:11px;font-size:calc(11px * var(--f));line-height:0.910}.ps418{margin-top:-1208px}.s471{min-width:320px;width:320px}.s472{min-width:320px;min-height:132px}.ps420{margin-top:5px}.s473{min-width:320px;width:320px;min-height:111px}.ps421{margin-left:11px}.s474{min-width:299px;width:299px;min-height:91px}.c640{height:91px}.f138{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f139{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps422{margin-left:91px}.s475{min-width:66px;width:66px;min-height:20px}.f140{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s476{width:66px;height:12px}.ps423{margin-left:6px}.f141{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps425{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s477{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-640-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-640-33.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-960-102.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-103.php)}}@media (min-width:320px) {.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}.c618{background-image:url(images/cirp-csi-2022-480-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-480-33.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}.c618{background-image:url(images/cirp-csi-2022-960-64.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-65.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}.c618{background-image:url(images/cirp-csi-2022-1440-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1440-9.php)}}@media (min-width:480px) {.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}.c618{background-image:url(images/cirp-csi-2022-768-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-768-33.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}.c618{background-image:url(images/cirp-csi-2022-1536-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1536-33.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}.c618{background-image:url(images/cirp-csi-2022-2304-8.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2304-9.php)}}@media (min-width:768px) {.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}.c618{background-image:url(images/cirp-csi-2022-960-66.php)}.webp .c618{background-image:url(images/cirp-csi-2022-960-67.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}.c618{background-image:url(images/cirp-csi-2022-1920-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1920-33.php)}}@media (min-width:960px) {.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}.c618{background-image:url(images/cirp-csi-2022-1200-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1200-33.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}.c618{background-image:url(images/cirp-csi-2022-2400-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2400-33.php)}}@media (min-width:1200px) {.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}.c618{background-image:url(images/cirp-csi-2022-1415-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-1415-27.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}.c618{background-image:url(images/cirp-csi-2022-2830-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2830-27.php)}}@media (min-width:1600px) {.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}.c618{background-image:url(images/cirp-csi-2022-2000-32.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2000-33.php)}}@media (min-width:2000px) {.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}.c618{background-image:url(images/cirp-csi-2022-2131-26.php)}.webp .c618{background-image:url(images/cirp-csi-2022-2131-27.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps388 v33 s434">
<div class="v34 ps389 s435 c612">
<div class="v34 ps390 s436 c613">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a9"><picture class="i56"><source srcset="images/transparentks-64-33.php 1x, images/transparentks-128-33.php 2x, images/transparentks-192-53.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-32.php 1x, images/transparentks-128-32.php 2x, images/transparentks-192-52.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-33.php 1x, images/transparentks-192-33.php 2x, images/transparentks-288-9.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-32.php 1x, images/transparentks-192-32.php 2x, images/transparentks-288-8.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-27.php 1x, images/transparentks-110-27.php 2x, images/transparentks-165-9.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-26.php 1x, images/transparentks-110-26.php 2x, images/transparentks-165-8.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-27.php 1x, images/transparentks-138-27.php 2x, images/transparentks-207-9.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-26.php 1x, images/transparentks-138-26.php 2x, images/transparentks-207-8.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-67.php 1x, images/transparentks-178-67.php 2x, images/transparentks-267-17.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-66.php 1x, images/transparentks-178-66.php 2x, images/transparentks-267-16.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-91.php 1x, images/transparentks-284-59.php 2x, images/transparentks-426-17.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-90.php 1x, images/transparentks-284-58.php 2x, images/transparentks-426-16.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-58.php" title="knowledge &amp; skills logo" alt="ks logo" class="un646 i55"></picture></a>
<?php
    }
?>

</div>
<div class="v34 ps391 s437 c614">
<picture class="i56">
<source srcset="images/k-stransparent-131-25.php 1x, images/k-stransparent-262-25.php 2x, images/k-stransparent-393-9.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-24.php 1x, images/k-stransparent-262-24.php 2x, images/k-stransparent-393-8.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-25.php 1x, images/k-stransparent-392-25.php 2x, images/k-stransparent-588-9.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-24.php 1x, images/k-stransparent-392-24.php 2x, images/k-stransparent-588-8.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-31.php 1x, images/k-stransparent-340-31.php 2x, images/k-stransparent-510-9.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-30.php 1x, images/k-stransparent-340-30.php 2x, images/k-stransparent-510-8.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-33.php 1x, images/k-stransparent-424-65.php 2x, images/k-stransparent-636-9.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-32.php 1x, images/k-stransparent-424-64.php 2x, images/k-stransparent-636-8.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-33.php 1x, images/k-stransparent-530-33.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-32.php 1x, images/k-stransparent-530-32.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-67.php 1x, images/k-stransparent-848-33.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-66.php 1x, images/k-stransparent-848-32.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-32.php" alt="Knowledge an Skills shared by talented engineers" class="un647 i57">
</picture>
</div>
<div class="v34 ps392 s438 c615">
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
<a href="./logout-415c8e.php" class="f123 btn143 v35 s439">Logout</a>
<?php
    }
?>

</div>
<div class="v34 ps393 s440 c616">
<p class="p24 f124"><a href="cirpcsi2022.php"><x-svg class="s441"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v34 ps394 s442 c617">
<a href="cirpcsi2022.php" class="a9"><picture class="i56"><source srcset="images/csi-logo-58-25.php 1x, images/csi-logo-116-25.php 2x, images/csi-logo-174-45.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-24.php 1x, images/csi-logo-116-24.php 2x, images/csi-logo-174-44.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-25.php 1x, images/csi-logo-174-25.php 2x, images/csi-logo-261-9.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-24.php 1x, images/csi-logo-174-24.php 2x, images/csi-logo-261-8.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-31.php 1x, images/csi-logo-108-31.php 2x, images/csi-logo-162-9.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-30.php 1x, images/csi-logo-108-30.php 2x, images/csi-logo-162-8.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-31.php 1x, images/csi-logo-136-61.php 2x, images/csi-logo-204-9.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-30.php 1x, images/csi-logo-136-60.php 2x, images/csi-logo-204-8.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-31.php 1x, images/csi-logo-170-31.php 2x, images/csi-logo-255-9.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-30.php 1x, images/csi-logo-170-30.php 2x, images/csi-logo-255-8.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-63.php 1x, images/csi-logo-272-31.php 2x, images/csi-logo-408-9.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-62.php 1x, images/csi-logo-272-30.php 2x, images/csi-logo-408-8.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-30.php" alt="cirp csi 2022" class="un648 i58"></picture></a>
</div>
</div>
</div>
<div class="v34 ps395 s443 c618"></div>
<div class="ps396 v33 s444">
<div class="v34 ps397 s445 c612">
<div class="v34 ps398 s446 c619">
<p class="p24 f125">6th CIRP Conference on Surface Integrity </p>
<p class="p24 f125">Day 1 presentations replay</p>
</div>
<div class="v34 ps399 s447 c620">
<p class="p24 f126"><a href="cirpcsi2022.php"><x-svg class="s448"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p24 f127"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps400 v33 s449">
<div class="v34 ps401 s450 c612">
<div class="v34 ps390 s451 c621">
<a href="#" class="f128 btn144 v35 s452">10:50 - 12:30 CET</a>
</div>
<div class="v34 ps402 s451 c622">
<a href="cirpcsi2022session1-2.php" class="f128 btn145 v35 s452">14:45 - 16:05 CET</a>
</div>
<div class="v34 ps403 s451 c623">
<a href="cirpcsi2022session1-3.php" class="f128 btn146 v35 s452">16:35 - 18:15 CET</a>
</div>
</div>
</div>
<div class="ps404 v33 s453">
<div class="v34 ps405 s454 c624">
<p class="p25 f129">Themes scheduled on Day 1 between 10:50 and 12:30 CET</p>
</div>
</div>
<div class="ps406 v33 s455">
<div class="v34 ps407 s456 c625">
<a href="#anchor1" class="f130 btn147 v35 s457">1- Numerical modelling of Surface Integrity</a>
</div>
<div class="v34 ps408 s458 c626">
<a href="#anchor2" class="f131 btn148 v35 s457">2- Post-processing of AM Parts</a>
</div>
<div class="v34 ps409 s459 c627">
<a href="#anchor3" class="f132 btn149 v35 s457">3- Advanced Materials &amp; Coatings</a>
</div>
</div>
<div class="c628">
<div class="ps410 v33 s460">
<div class="s461">
<div class="v34 ps390 s462 c629">
<div class="v34 ps411 s463 c630">
<p class="p25 f129">1- Numerical modeling of Surface Integrity</p>
</div>
<div class="v34 ps412 s464 c612">
<div class="v34 ps390 s464 w7">
<div class="v34 ps390 s464 c631">
<div class="v34 ps390 s465 c632">
<div class="v34 ps413 s466 c633">
<p class="p25 f133">A Finite Element Analysis Based Approach to Understand the Effects of Targeted Minimum Quantity Cutting Fluid Application on Surface Integrity</p>
<p class="p25 f134">C. S. Rakurty, Nithin Rangasamy, A. K. Balaji and Swapnil Pandey</p>
</div>
</div>
<div class="v34 ps414 s467 c634"></div>
<div class="v5 ps351 s386 c507"></div>
</div>
<div class="v34 ps415 s468 c635">
<div class="v34 ps390 s469 c636">
<p class="p24 f124"><a onclick="pop&&pop.openPopup('popup41');return false" style="cursor:pointer;"><x-svg class="s441"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v34 ps416 s469 c637">
<p class="p24 f124"><a onclick="pop&&pop.openPopup('popup42');return false" style="cursor:pointer;"><x-svg class="s441"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c508">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup43');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v34 ps417 s470 c638">
<p class="p25"><span class="f135">Numerical prediction of machining induced residual stresses when hard cutting AISI 4140<br></span><span class="f136">Markus Meurer, Berk Tekkaya, Daniel Schraknepper, Thomas Bergs and Sebastian M</span><span class="f137">ü</span><span class="f136">nstermann</span></p>
</div>
<div class="v5 ps353 s389 c509">
<p class="p18 f114">Thermal process signature in machining of Ti-6Al-4V with worn tools<br><span class="f115">E-Lexus Thornton and Julius Schoop</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s390 c45">
<div class="v5 ps33 s390 w2">
<div class="v5 ps33 s390 c510">
<div class="v5 ps33 s391 c511"></div>
<div class="v5 ps351 s392 c512"></div>
</div>
<div class="v5 ps354 s393 c513">
<div class="v5 ps33 s394 c514">
<p class="p18 f114">Numerical investigations on residual stresses in orthogonal cutting of Ti-6Al-4V<br><span class="f115">Kejia Zhuang, Yujian Huang, Jian Weng, Delai Zhang and Jinming Zhou</span></p>
</div>
<div class="v5 ps355 s395 c515">
<p class="p18 f114">Machining subsurface deformation under various rake angles</p>
<p class="p18 f115">Dong Zhang, Shuang Zhao, Xiao-Ming Zhang and Han Ding</p>
</div>
</div>
<div class="v5 ps356 s396 c516">
<div class="v5 ps33 s397 c517">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup44');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c518">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup45');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps358 s398 c519">
<div class="v5 ps359 s399 c520">
<p class="p18 f116">2- Post-processing of AM Parts</p>
</div>
<div class="v5 ps360 s400 c45">
<div class="v5 ps33 s400 w2">
<div class="v5 ps33 s400 c521">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c522"></div>
<div class="v5 ps361 s403 c523">
<p class="p18 f114">Analysis of Plasma-Electrolytic Polishing Process Initiation<br><span class="f115">Henning Zeidler, Toni Bottger, Sam Schroder, Michael Schneider, Christoph Lammel, Frederic Sahr, Joffrey Tardelli and Loic Exbrayat</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c524"></div>
<div class="v5 ps351 s386 c525"></div>
</div>
<div class="v5 ps362 s405 c526">
<div class="v5 ps33 s397 c527">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup46');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps363 s397 c528">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup47');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c529">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup48');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps364 s406 c530">
<p class="p18 f114">Electropolishing of 316L stainless steel parts elaborated by selective laser melting: from laboratory to pilot scale<br><span class="f115">Marie-Laure Doche, Jean-Yves Hihn, Estelle Drynski, Florian Roy, Aurélien Boucher, Jason Rolet and Joffrey Tardelli</span></p>
</div>
<div class="v5 ps365 s407 c531">
<p class="p18 f114">Surface integrity of new dry-electropolishing technology on WC-Co cemented carbides<br><span class="f115">Guiomar Riu, Dominik Weil, Luis Llanes, Kurt E. Johanns, Warren C. Oliver and Joan Josep Roa</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s408 c45">
<div class="v5 ps33 s408 w2">
<div class="v5 ps33 s408 c532">
<div class="v5 ps33 s391 c533"></div>
<div class="v5 ps351 s409 c534"></div>
</div>
<div class="v5 ps366 s410 c535">
<div class="v5 ps33 s411 c536">
<p class="p18 f114">Small-scale mechanical response at intermediate/high temperature of 3D printed WC-Co<br><span class="f115">Guiomar Riu and Joan Josep Roa</span></p>
</div>
<div class="v5 ps367 s412 c537">
<p class="p18 f117">Efficient polishing of additive manufactured titanium alloys<br><span class="f118">Kristina Navickait</span><span class="f119">ė</span><span class="f118">, Klaus Nestler, Falko Bottger-Hiller, Carmel Matias, Alex Diskin, Oz Golan, Andrey Garkun, Evgeny Strokin, Roman Biletskiy, Daniel Safranchik and Henning Zeidler</span></p>
</div>
</div>
<div class="v5 ps368 s396 c538">
<div class="v5 ps33 s397 c539">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup49');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c540">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup50');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps369 s121"></a>
<div class="v5 ps370 s413 c541">
<div class="v5 ps359 s399 c542">
<p class="p18 f116">3- Advanced Materials &amp; Coatings</p>
</div>
<div class="v5 ps360 s400 c45">
<div class="v5 ps33 s400 w2">
<div class="v5 ps33 s400 c543">
<div class="v5 ps33 s414 c544">
<div class="v5 ps371 s415 c545">
<p class="p18 f117">Influence of Surface Integrity and Coating on the High Cycle Fatigue Properties of 300M Steel from Self-Heating Tests under Cyclic Loads<br><span class="f118">P. Lepitre, S. Calloch, C. Doudard, M. Dhondt and M. Surand</span></p>
</div>
</div>
<div class="v5 ps351 s404 c546"></div>
<div class="v5 ps351 s386 c547"></div>
</div>
<div class="v5 ps362 s405 c351">
<div class="v5 ps33 s397 c548">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup51');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps363 s397 c549">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup52');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c550">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup53');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps372 s416 c551">
<p class="p18 f114">Effect of actual surface area on adhesion strength of copper electroplated on ABS plastic via photolithography micro-texturing<br><span class="f115">Ruslan Melentiev, Ran Tao, Lujain Fatta, Amit K. Tevtia and Gilles Lubineau</span></p>
</div>
<div class="v5 ps373 s417 c552">
<p class="p18 f114">Surface hardening in finishing of sintered and thermal sprayed X120Mn12<br><span class="f115">Hendrik Liborius, Thomas Lindner, Andreas Nestler, Thomas Uhlig, Thomas Lampke, Guntram Wagner, Andreas Schubert</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s390 c45">
<div class="v5 ps33 s390 w2">
<div class="v5 ps33 s390 c553">
<div class="v5 ps33 s391 c554"></div>
<div class="v5 ps351 s392 c555"></div>
</div>
<div class="v5 ps374 s418 c556">
<div class="v5 ps33 s403 c557">
<p class="p18 f117">Modification of Surface and Sub-Surface Conditions of Cemented Carbide by Pressurized Air Wet Abrasive Jet Machining for PVD Coatings<br><span class="f118">AAlexander Leonard Meijer, Alexander Ott, Dominic Stangier, Wolfgang Tillmann and Dirk Biermann</span></p>
</div>
<div class="v5 ps375 s403 c557">
<p class="p18 f114">Amorphous Carbon Coated Silicon Wafer as Mold Insert for Precision Glass Molding<br><span class="f115">Lin Zhang and Jiwang Yan</span></p>
</div>
</div>
<div class="v5 ps376 s396 c341">
<div class="v5 ps33 s397 c558">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup54');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c559">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup55');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps377 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v33 ps418 s471"></a>
<div class="btf ps378 v7 s419">
<div class="v5 ps379 s420 c560">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps380 s49 c561">
<div class="v5 ps38 s50 c562">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un766"><source data-srcset="images/transparentks-102-33.php 1x, images/transparentks-204-33.php 2x, images/transparentks-306-53.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-32.php 1x, images/transparentks-204-32.php 2x, images/transparentks-306-52.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-33.php 1x, images/transparentks-306-33.php 2x, images/transparentks-459-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-32.php 1x, images/transparentks-306-32.php 2x, images/transparentks-459-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-37.php 1x, images/transparentks-114-37.php 2x, images/transparentks-171-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-36.php 1x, images/transparentks-114-36.php 2x, images/transparentks-171-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-33.php 1x, images/transparentks-142-93.php 2x, images/transparentks-213-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-32.php 1x, images/transparentks-142-92.php 2x, images/transparentks-213-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-69.php 1x, images/transparentks-178-69.php 2x, images/transparentks-267-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-68.php 1x, images/transparentks-178-68.php 2x, images/transparentks-267-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-95.php 1x, images/transparentks-284-61.php 2x, images/transparentks-426-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-94.php 1x, images/transparentks-284-60.php 2x, images/transparentks-426-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-60.php" title="knowledge &amp; skills logo" alt="logo" class="un649 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un767">
<source data-srcset="images/k-stransparent-110-33.php 1x, images/k-stransparent-220-33.php 2x, images/k-stransparent-330-53.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-32.php 1x, images/k-stransparent-220-32.php 2x, images/k-stransparent-330-52.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-33.php 1x, images/k-stransparent-330-33.php 2x, images/k-stransparent-495-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-32.php 1x, images/k-stransparent-330-32.php 2x, images/k-stransparent-495-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-31.php 1x, images/k-stransparent-340-31.php 2x, images/k-stransparent-510-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-30.php 1x, images/k-stransparent-340-30.php 2x, images/k-stransparent-510-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-33.php 1x, images/k-stransparent-424-65.php 2x, images/k-stransparent-636-9.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-32.php 1x, images/k-stransparent-424-64.php 2x, images/k-stransparent-636-8.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-33.php 1x, images/k-stransparent-530-33.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-32.php 1x, images/k-stransparent-530-32.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-67.php 1x, images/k-stransparent-848-33.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-66.php 1x, images/k-stransparent-848-32.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-32.php" alt="Knowledge an Skills shared by talented engineers" class="un650 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c565"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c567"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c569"></div>
<div class="v5 ps48 s67 c172">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z'/></svg></x-svg></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps49 s68 c570">
<p class="p3 f13">Follow us on social media and join our community on <span class="f14"><a href="https://www.linkedin.com/company/knowledge-and-skills-sas/" target="_blank" rel="noopener">LinkedIn</a></span>, <span class="f14"><a href="https://www.facebook.com/knowledgeandskillseu" target="_blank" rel="noopener">Facebook</a></span> and <span class="f14"><a href="https://twitter.com/knowledgeandsk">Twitter</a></span></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps38 s69 c571">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v36 ps419 s472 c639">
<div class="ps420 v33 s473">
<div class="v34 ps421 s474 c640">
<p class="p25 f138">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f139"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v34 ps422 s475 c641">
<a href="javascript:void(0)" class="denyConsent f140 btn150 v35 s476">Refuse</a>
</div>
<div class="v34 ps423 s475 c641">
<a href="javascript:void(0)" class="allowConsent f141 btn151 v35 s476">OK</a>
</div>
</div>
</div>
<div id="popup45" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps424">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c642">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c328">
<div class="player un651 pl46">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-414.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps381 s422 c573">
<div class="v5 ps33 s422 c45">
<div class="v5 ps33 s423 c574">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps382 s424 c320">
<a onclick="pop&&pop.closePopup('popup45');return false" style="cursor:pointer;" class="f120 btn128 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup44" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps426">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c643">
<div class="ps38 v7 s421">
<div class="v5 ps179 s425 c45">
<div class="v5 ps180 s235 c334">
<div class="player un652 pl47">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-423.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps383 s426 c575">
<div class="v5 ps33 s426 c45">
<div class="v5 ps33 s427 c576">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps384 s428 c577">
<a onclick="pop&&pop.closePopup('popup44');return false" style="cursor:pointer;" class="f121 btn129 v6 s429"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup43" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps427">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c644">
<div class="ps38 v7 s421">
<div class="v5 ps179 s425 c45">
<div class="v5 ps180 s235 c578">
<div class="player un653 pl48">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-556.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps385 s430 c579">
<div class="v5 ps33 s430 c45">
<div class="v5 ps33 s431 c580">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps386 s432 c581">
<a onclick="pop&&pop.closePopup('popup43');return false" style="cursor:pointer;" class="f122 btn130 v6 s433"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup55" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps428">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c645">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c582">
<div class="player un654 pl49">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-477.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c583">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c584">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c585">
<a onclick="pop&&pop.closePopup('popup55');return false" style="cursor:pointer;" class="f67 btn131 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup54" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps429">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c646">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c285">
<div class="player un655 pl50">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-457.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c286">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c287">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c288">
<a onclick="pop&&pop.closePopup('popup54');return false" style="cursor:pointer;" class="f67 btn132 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup53" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps430">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c647">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c586">
<div class="player un656 pl51">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-433.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c587">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c588">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c294">
<a onclick="pop&&pop.closePopup('popup53');return false" style="cursor:pointer;" class="f67 btn133 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup52" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps431">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c648">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c589">
<div class="player un657 pl52">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-424.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c590">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c591">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c592">
<a onclick="pop&&pop.closePopup('popup52');return false" style="cursor:pointer;" class="f67 btn134 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup51" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps432">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c649">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c303">
<div class="player un658 pl53">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-377.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c593">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c594">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c295">
<a onclick="pop&&pop.closePopup('popup51');return false" style="cursor:pointer;" class="f67 btn135 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup50" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps433">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c650">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c309">
<div class="player un659 pl54">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S2-454.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c595">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c596">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c597">
<a onclick="pop&&pop.closePopup('popup50');return false" style="cursor:pointer;" class="f67 btn136 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup49" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps434">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c651">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c598">
<div class="player un660 pl55">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S2-511.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c599">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c600">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c601">
<a onclick="pop&&pop.closePopup('popup49');return false" style="cursor:pointer;" class="f67 btn137 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup48" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps435">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c652">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c310">
<div class="player un661 pl56">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S2-510.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c311">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c312">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c313">
<a onclick="pop&&pop.closePopup('popup48');return false" style="cursor:pointer;" class="f67 btn138 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup47" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps436">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c653">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c602">
<div class="player un662 pl57">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S2-35.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c603">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c604">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c319">
<a onclick="pop&&pop.closePopup('popup47');return false" style="cursor:pointer;" class="f67 btn139 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup46" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps437">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c654">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c605">
<div class="player un663 pl58">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S2-1281.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c606">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c607">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c608">
<a onclick="pop&&pop.closePopup('popup46');return false" style="cursor:pointer;" class="f67 btn140 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup42" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps438">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c655">
<div class="ps38 v7 s421">
<div class="v5 ps179 s425 c45">
<div class="v5 ps180 s235 c335">
<div class="player un664 pl59">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-570.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps387 s236 c336">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c337">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c338">
<a onclick="pop&&pop.closePopup('popup42');return false" style="cursor:pointer;" class="f67 btn141 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup41" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps439">
<div onclick="event.stopPropagation()" class="popup v37 ps425 s477 c656">
<div class="ps38 v7 s421">
<div class="v5 ps179 s425 c45">
<div class="v5 ps180 s235 c609">
<div class="player un665 pl60">
<video preload="metadata" poster="images/poster-3592-1.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-580.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps387 s236 c610">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c611">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c48">
<a onclick="pop&&pop.closePopup('popup41');return false" style="cursor:pointer;" class="f67 btn142 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=parseInt(1e7/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size"))+.5)/1e5,n=document.body;r!=n.style.getPropertyValue("--f")&&n.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session1.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>