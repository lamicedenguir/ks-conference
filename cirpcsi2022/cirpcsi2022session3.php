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
            $redirect = 'cirpcsi2022session3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '417E1E71-AB87-49CE-BB12-6B6549E2FD3F';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session3.php';
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
<title>Day 3 sessions 8h40 to 10h20</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session3.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 3 sessions 8h40 to 10h20">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps979{position:relative;margin-top:0}.v68{display:block;vertical-align:top}.s958{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v69{display:inline-block;vertical-align:top}.ps980{position:relative;margin-left:0;margin-top:0}.s959{min-width:1920px;width:1920px;min-height:142px}.ps981{position:relative;margin-left:0;margin-top:0}.s960{min-width:165px;width:165px;min-height:142px;height:142px}.c1520{z-index:3;pointer-events:auto}.a16{display:block}.i83{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i84{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps982{position:relative;margin-left:-21px;margin-top:6px}.s961{min-width:424px;width:424px;min-height:130px;height:130px}.c1521{z-index:1;pointer-events:auto}.i85{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps983{position:relative;margin-left:1038px;margin-top:54px}.s962{min-width:84px;width:84px;min-height:36px}.c1522{z-index:22;pointer-events:auto}.f277{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn340{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn340:hover{background-color:#82939e;border-color:#000;color:#000}.btn340:active{background-color:#677a85;border-color:#000;color:#808080}.v70{display:inline-block;overflow:hidden;outline:0}.s963{width:84px;padding-right:0;height:24px}.ps984{position:relative;margin-left:10px;margin-top:30px}.s964{min-width:84px;width:84px;min-height:82px}.c1523{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p38{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f278{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s965{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps985{position:relative;margin-left:0;margin-top:21px}.s966{min-width:136px;width:136px;min-height:100px;height:100px}.c1524{z-index:19;pointer-events:auto}.i86{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps986{position:relative;margin-top:8px}.s967{width:100%;min-width:1920px;min-height:744px}.c1525{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-36.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c1525{background-image:url(images/cirp-csi-2022-320-37.php)}.ps987{position:relative;margin-top:60px}.s968{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps988{position:relative;margin-left:240px;margin-top:0}.s969{min-width:1600px;width:1600px;min-height:160px}.ps989{position:relative;margin-left:0;margin-top:0}.s970{min-width:1520px;width:1520px;min-height:160px}.c1526{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f279{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps990{position:relative;margin-left:-4px;margin-top:0}.s971{min-width:84px;width:84px;min-height:80px}.c1527{z-index:171;pointer-events:auto;overflow:hidden;height:80px}.f280{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s972{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f281{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps991{position:relative;margin-top:90px}.s973{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:457px}.ps992{position:relative;margin-left:620px;margin-top:0}.s974{min-width:680px;width:680px;min-height:70px}.s975{min-width:320px;width:320px;min-height:70px}.c1528{z-index:18;pointer-events:auto}.f282{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn341{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn341:hover{background-color:#82939e;border-color:#000;color:#000}.btn341:active{background-color:#677a85;border-color:#000;color:#808080}.s976{width:320px;padding-right:0;height:29px}.ps993{position:relative;margin-left:40px;margin-top:0}.c1529{z-index:23;pointer-events:auto}.btn342{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn342:hover{background-color:#82939e;border-color:#000;color:#000}.btn342:active{background-color:#677a85;border-color:#000;color:#808080}.ps994{position:relative;margin-left:55px;margin-top:66px}.s977{min-width:845px;width:845px;min-height:51px}.c1530{z-index:24;pointer-events:auto;overflow:hidden;height:51px}.p39{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f283{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps995{position:relative;margin-left:55px;margin-top:34px}.s978{min-width:1805px;width:1805px;min-height:63px}.c1531{z-index:25;pointer-events:auto}.f284{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn343{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn343:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn343:active{background-color:#677a85;border-color:#000;color:#fff}.s979{width:1805px;padding-right:0;height:34px}.ps996{position:relative;margin-left:55px;margin-top:22px}.s980{min-width:1805px;width:1805px;min-height:63px}.c1532{z-index:26;pointer-events:auto}.f285{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn344{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn344:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn344:active{background-color:#677a85;border-color:#000;color:#fff}.ps997{position:relative;margin-left:55px;margin-top:19px}.s981{min-width:1805px;width:1805px;min-height:63px}.c1533{z-index:27;pointer-events:auto}.f286{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn345{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn345:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn345:active{background-color:#677a85;border-color:#000;color:#fff}.c1534{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:53px;min-height:2473px}.ps998{position:relative;margin-top:0}.s982{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2473px}.s983{width:1926px;margin-left:-3px;min-height:2473px}.s984{min-width:1926px;width:1926px;min-height:789px}.c1535{z-index:28}.ps999{position:relative;margin-left:58px;margin-top:0}.s985{min-width:600px;width:600px;min-height:51px}.c1536{z-index:30;pointer-events:auto;overflow:hidden;height:51px}.ps1000{position:relative;margin-left:0;margin-top:-3px}.s986{min-width:1926px;width:1926px;min-height:447px}.w14{line-height:0}.c1537{z-index:31}.s987{min-width:1926px;width:1926px;min-height:153px}.s988{min-width:1920px;width:1920px;min-height:147px}.c1538{z-index:32;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps1001{position:relative;margin-left:23px;margin-top:-140px}.s989{min-width:1760px;width:1760px;min-height:135px}.c1539{z-index:34;pointer-events:auto;overflow:hidden;height:135px}.f287{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f288{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps1002{position:relative;margin-left:0;margin-top:-6px}.s990{min-width:1920px;width:1920px;min-height:147px}.c1540{z-index:33;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps1003{position:relative;margin-left:1843px;margin-top:-413px}.s991{min-width:54px;width:54px;min-height:380px}.c1541{z-index:36}.s992{min-width:54px;width:54px;min-height:86px}.c1542{z-index:45;pointer-events:auto;overflow:hidden;height:86px}.ps1004{position:relative;margin-left:0;margin-top:61px}.c1543{z-index:46;pointer-events:auto;overflow:hidden;height:86px}.ps1005{position:relative;margin-left:23px;margin-top:-287px}.s993{min-width:1760px;width:1760px;min-height:137px}.c1544{z-index:40;pointer-events:auto;overflow:hidden;height:137px}.ps1006{position:relative;margin-left:0;margin-top:-2473px}.s994{min-width:1920px;width:1920px;min-height:1px}.v71{display:none;vertical-align:top}.s995{width:100%;min-width:1920px;min-height:198px}.c1545{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps1008{position:relative;margin-top:34px}.s996{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps1009{position:relative;margin-left:24px;margin-top:0}.s997{min-width:1876px;width:1876px;min-height:78px}.c1546{pointer-events:auto;overflow:hidden;height:78px}.f289{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f290{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps1010{position:relative;margin-left:684px;margin-top:0}.s998{min-width:256px;width:256px;min-height:64px}.c1547{pointer-events:auto}.f291{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn346{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn346:hover{background-color:#82939e;border-color:#000;color:#000}.btn346:active{background-color:#181b28;border-color:#000;color:#808080}.s999{width:256px;padding-right:0;height:24px}.ps1011{position:relative;margin-left:40px;margin-top:0}.f292{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn347{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn347:hover{background-color:#82939e;border-color:#000;color:#000}.btn347:active{background-color:#181b28;border-color:#000;color:#808080}.ps1012{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435238;pointer-events:none;visibility:hidden;opacity:0}.v72{display:inline-block;vertical-align:top;pointer-events:auto}.ps1013{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s1000{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1548{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1014{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435233;pointer-events:none;visibility:hidden;opacity:0}.c1549{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1015{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435228;pointer-events:none;visibility:hidden;opacity:0}.c1550{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1016{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435223;pointer-events:none;visibility:hidden;opacity:0}.c1551{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1017{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435218;pointer-events:none;visibility:hidden;opacity:0}.c1552{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1018{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435213;pointer-events:none;visibility:hidden;opacity:0}.c1553{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1019{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435208;pointer-events:none;visibility:hidden;opacity:0}.c1554{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1020{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435203;pointer-events:none;visibility:hidden;opacity:0}.c1555{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1021{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435198;pointer-events:none;visibility:hidden;opacity:0}.c1556{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1022{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435193;pointer-events:none;visibility:hidden;opacity:0}.c1557{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1023{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435188;pointer-events:none;visibility:hidden;opacity:0}.c1558{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1024{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435183;pointer-events:none;visibility:hidden;opacity:0}.c1559{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1025{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435178;pointer-events:none;visibility:hidden;opacity:0}.c1560{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1026{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435173;pointer-events:none;visibility:hidden;opacity:0}.c1561{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1027{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435168;pointer-events:none;visibility:hidden;opacity:0}.c1562{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps979{margin-top:4px}.s958{min-width:1200px;width:1200px;min-height:89px}.s959{min-width:1200px;width:1200px;min-height:89px}.s960{min-width:115px;width:115px;min-height:89px;height:89px}.i83{left:13px;width:89px;height:89px}.ps982{margin-left:-16px;margin-top:4px}.s961{min-width:265px;width:265px;min-height:81px;height:81px}.i85{width:265px;height:81px}.ps983{margin-left:640px;margin-top:30px}.s962{min-width:52px;width:52px;min-height:22px}.f277{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s963{width:52px;height:15px}.ps984{margin-left:7px;margin-top:15px}.s964{min-width:52px;width:52px;min-height:51px}.c1523{height:51px}.f278{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s965{height:30px;transform:scale(1.000) translateY(3px)}.ps985{margin-top:9px}.s966{min-width:85px;width:85px;min-height:63px;height:63px}.i86{width:85px;height:31px;top:16px}.ps986{margin-top:5px}.s967{min-width:1200px;min-height:494px}.ps987{margin-top:4px}.s968{min-width:1200px;width:1200px;min-height:116px}.ps988{margin-left:150px}.s969{min-width:999px;width:999px;min-height:116px}.s970{min-width:950px;width:950px;min-height:116px}.c1526{height:116px}.f279{font-size:30px;font-size:calc(30px * var(--f))}.ps990{margin-left:-3px}.s971{min-width:52px;width:52px;min-height:58px}.c1527{height:58px}.f280{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s972{height:27px;transform:scale(1.111) translateY(2px)}.f281{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps991{margin-top:44px}.s973{min-width:1200px;width:1200px;min-height:281px}.ps992{margin-left:387px}.s974{min-width:425px;width:425px;min-height:44px}.s975{min-width:200px;width:200px;min-height:44px}.f282{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s976{width:200px;height:18px}.ps993{margin-left:25px}.ps994{margin-left:34px;margin-top:43px}.s977{min-width:485px;width:485px;min-height:35px}.c1530{height:35px}.f283{font-size:18px;font-size:calc(18px * var(--f))}.ps995{margin-left:34px;margin-top:10px}.s978{min-width:1129px;width:1129px;min-height:39px}.f284{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s979{width:1129px;height:21px}.ps996{margin-left:34px;margin-top:13px}.s980{min-width:1129px;width:1129px;min-height:39px}.f285{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.ps997{margin-left:34px;margin-top:12px}.s981{min-width:1129px;width:1129px;min-height:40px}.f286{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.c1534{width:max(1200px, 100%);margin-top:26px;min-height:1554px}.s982{min-width:1200px;width:1200px;min-height:1554px}.s983{width:1206px;min-height:1554px}.s984{min-width:1206px;width:1206px;min-height:495px}.ps999{margin-left:37px}.s985{min-width:375px;width:375px;min-height:32px}.c1536{height:32px}.s986{min-width:1206px;width:1206px;min-height:282px}.s987{min-width:1206px;width:1206px;min-height:98px}.s988{min-width:1200px;width:1200px;min-height:92px}.ps1001{margin-left:15px;margin-top:-87px}.s989{min-width:1095px;width:1095px;min-height:83px}.c1539{height:83px}.f287{font-size:18px;font-size:calc(18px * var(--f))}.f288{font-size:18px;font-size:calc(18px * var(--f))}.s990{min-width:1200px;width:1200px;min-height:92px}.ps1003{margin-left:1149px;margin-top:-259px}.s991{min-width:33px;width:33px;min-height:237px}.s992{min-width:33px;width:33px;min-height:53px}.c1542{height:53px}.ps1004{margin-top:39px}.c1543{height:53px}.ps1005{margin-left:15px;margin-top:-180px}.s993{min-width:1095px;width:1095px;min-height:85px}.c1544{height:85px}.ps1006{margin-top:-1554px}.s994{min-width:1200px;width:1200px}.s995{min-width:1200px;min-height:129px}.ps1008{margin-top:21px}.s996{min-width:1200px;width:1200px;min-height:84px}.ps1009{margin-left:15px}.s997{min-width:1172px;width:1172px;min-height:49px}.c1546{height:49px}.f289{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f290{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps1010{margin-left:412px;margin-top:-5px}.s998{min-width:160px;width:160px;min-height:40px}.f291{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s999{width:160px;height:15px}.ps1011{margin-left:55px;margin-top:-5px}.f292{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps1013{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s1000{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s958{min-width:960px;width:960px;min-height:71px}.s959{min-width:960px;width:960px;min-height:71px}.s960{min-width:69px;width:69px;min-height:71px;height:71px}.i83{left:0;width:69px;height:69px;top:1px}.ps982{margin-left:1px;margin-top:3px}.s961{min-width:212px;width:212px;min-height:65px;height:65px}.i85{width:212px;height:65px}.ps983{margin-left:521px;margin-top:27px}.s962{min-width:42px;width:42px;min-height:18px}.f277{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s963{width:42px;height:11px}.ps984{margin-left:5px;margin-top:15px}.s964{min-width:42px;width:42px;min-height:41px}.c1523{height:41px}.f278{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s965{height:24px;transform:scale(1.000) translateY(2px)}.ps985{margin-top:10px}.s966{min-width:68px;width:68px;min-height:51px;height:51px}.i86{width:68px;height:25px;top:13px}.ps986{margin-top:4px}.s967{min-width:960px;min-height:501px}.ps987{margin-top:0}.s968{min-width:960px;width:960px;min-height:92px}.ps988{margin-left:118px}.s969{min-width:802px;width:802px;min-height:92px}.s970{min-width:760px;width:760px;min-height:92px}.c1526{height:92px}.f279{font-size:24px;font-size:calc(24px * var(--f))}.ps990{margin-left:0}.s971{min-width:42px;width:42px;min-height:46px}.c1527{height:46px}.f280{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s972{height:22px;transform:scale(1.111) translateY(2px)}.f281{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps991{margin-top:7px}.s973{min-width:960px;width:960px;min-height:225px}.ps992{margin-left:310px}.s974{min-width:340px;width:340px;min-height:35px}.s975{min-width:160px;width:160px;min-height:35px}.f282{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s976{width:160px;height:15px}.ps993{margin-left:20px}.ps994{margin-left:27px;margin-top:35px}.s977{min-width:368px;width:368px;min-height:26px}.c1530{height:26px}.f283{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps995{margin-left:27px;margin-top:7px}.s978{min-width:903px;width:903px;min-height:31px}.f284{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s979{width:903px;height:16px}.ps996{margin-left:27px;margin-top:12px}.s980{min-width:903px;width:903px;min-height:31px}.f285{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.ps997{margin-left:27px;margin-top:10px}.s981{min-width:903px;width:903px;min-height:32px}.f286{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.c1534{width:max(960px, 100%);margin-top:23px;min-height:1247px}.s982{min-width:960px;width:960px;min-height:1247px}.s983{width:966px;min-height:1247px}.s984{min-width:966px;width:966px;min-height:397px}.ps999{margin-left:30px}.s985{min-width:300px;width:300px;min-height:26px}.c1536{height:26px}.s986{min-width:966px;width:966px;min-height:227px}.s987{min-width:966px;width:966px;min-height:79px}.s988{min-width:960px;width:960px;min-height:73px}.ps1001{margin-left:13px;margin-top:-72px}.s989{min-width:880px;width:880px;min-height:69px}.c1539{height:69px}.f287{font-size:15px;font-size:calc(15px * var(--f))}.f288{font-size:15px;font-size:calc(15px * var(--f))}.s990{min-width:960px;width:960px;min-height:74px}.ps1003{margin-left:926px;margin-top:-209px}.s991{min-width:28px;width:28px;min-height:190px}.s992{min-width:26px;width:26px;min-height:42px}.c1542{height:42px}.ps1004{margin-left:2px;margin-top:29px}.c1543{height:42px}.ps1005{margin-left:13px;margin-top:-146px}.s993{min-width:880px;width:880px;min-height:69px}.c1544{height:69px}.ps1006{margin-top:-1247px}.s994{min-width:960px;width:960px}.s995{min-width:960px;min-height:106px}.ps1008{margin-top:17px}.s996{min-width:960px;width:960px;min-height:68px}.ps1009{margin-left:12px}.s997{min-width:938px;width:938px;min-height:39px}.c1546{height:39px}.f289{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f290{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps1010{margin-left:342px;margin-top:-3px}.s998{min-width:128px;width:128px;min-height:32px}.f291{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s999{width:128px;height:12px}.ps1011{margin-left:20px;margin-top:-3px}.f292{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps1013{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s1000{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s958{min-width:768px;width:768px;min-height:57px}.s959{min-width:768px;width:768px;min-height:57px}.s960{min-width:55px;width:55px;min-height:57px;height:57px}.i83{left:0;width:55px;height:55px;top:1px}.ps982{margin-left:1px;margin-top:2px}.s961{min-width:170px;width:170px;min-height:52px;height:52px}.i85{width:170px;height:52px}.ps983{margin-left:416px;margin-top:22px}.s962{min-width:34px;width:34px;min-height:14px}.f277{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s963{width:34px;height:9px}.ps984{margin-left:4px;margin-top:12px}.s964{min-width:34px;width:34px;min-height:33px}.c1523{height:33px}.f278{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s965{height:19px;transform:scale(1.000) translateY(2px)}.ps985{margin-top:8px}.s966{min-width:54px;width:54px;min-height:41px;height:41px}.i86{width:54px;height:20px;top:10px}.ps986{margin-top:3px}.s967{min-width:768px;min-height:401px}.ps987{margin-top:0}.s968{min-width:768px;width:768px;min-height:73px}.ps988{margin-left:94px}.s969{min-width:642px;width:642px;min-height:73px}.s970{min-width:608px;width:608px;min-height:73px}.c1526{height:73px}.f279{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps990{margin-left:0}.s971{min-width:34px;width:34px;min-height:37px}.c1527{height:37px}.f280{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s972{height:17px;transform:scale(1.111) translateY(2px)}.f281{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps991{margin-top:6px}.s973{min-width:768px;width:768px;min-height:181px}.ps992{margin-left:248px}.s974{min-width:272px;width:272px;min-height:28px}.s975{min-width:128px;width:128px;min-height:28px}.f282{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s976{width:128px;height:11px}.ps993{margin-left:16px}.ps994{margin-left:22px;margin-top:28px}.s977{min-width:294px;width:294px;min-height:21px}.c1530{height:21px}.f283{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps995{margin-left:22px;margin-top:5px}.s978{min-width:722px;width:722px;min-height:25px}.f284{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s979{width:722px;height:12px}.ps996{margin-left:22px;margin-top:10px}.s980{min-width:722px;width:722px;min-height:25px}.f285{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps997{margin-left:22px;margin-top:8px}.s981{min-width:722px;width:722px;min-height:25px}.f286{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1534{width:max(768px, 100%);margin-top:17px;min-height:999px}.s982{min-width:768px;width:768px;min-height:999px}.s983{width:774px;min-height:999px}.s984{min-width:774px;width:774px;min-height:319px}.ps999{margin-left:25px}.s985{min-width:240px;width:240px;min-height:21px}.c1536{height:21px}.s986{min-width:774px;width:774px;min-height:183px}.s987{min-width:774px;width:774px;min-height:65px}.s988{min-width:768px;width:768px;min-height:59px}.ps1001{margin-left:11px;margin-top:-59px}.s989{min-width:704px;width:704px;min-height:56px}.c1539{height:56px}.f287{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f288{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.s990{min-width:768px;width:768px;min-height:59px}.ps1003{margin-left:741px;margin-top:-168px}.s991{min-width:23px;width:23px;min-height:152px}.s992{min-width:21px;width:21px;min-height:34px}.c1542{height:34px}.ps1004{margin-left:2px;margin-top:23px}.c1543{height:34px}.ps1005{margin-left:11px;margin-top:-117px}.s993{min-width:704px;width:704px;min-height:55px}.c1544{height:55px}.ps1006{margin-top:-999px}.s994{min-width:768px;width:768px}.s995{min-width:768px;min-height:85px}.ps1008{margin-top:14px}.s996{min-width:768px;width:768px;min-height:54px}.ps1009{margin-left:10px}.s997{min-width:750px;width:750px;min-height:31px}.c1546{height:31px}.f289{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f290{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps1010{margin-left:274px;margin-top:-3px}.s998{min-width:102px;width:102px;min-height:26px}.f291{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s999{width:102px;height:10px}.ps1011{margin-left:16px;margin-top:-3px}.f292{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps1013{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s1000{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps979{margin-top:29px}.s958{min-width:480px;width:480px;min-height:153px}.ps980{margin-left:6px}.s959{min-width:464px;width:464px;min-height:153px}.s960{min-width:120px;width:120px;min-height:96px;height:96px}.i83{width:96px;height:96px}.ps982{margin-left:-25px;margin-top:19px}.s961{min-width:196px;width:196px;min-height:59px;height:59px}.i85{width:196px;height:59px}.ps983{margin-left:33px;margin-top:117px}.s962{min-width:140px;width:140px}.s963{width:140px}.ps984{margin-left:324px;margin-top:-143px}.s964{min-width:71px;width:71px;min-height:62px}.c1523{height:62px}.f278{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s965{height:37px;transform:scale(1.000) translateY(4px)}.ps985{margin-left:377px;margin-top:-150px}.s966{min-width:87px;width:87px;min-height:75px;height:75px}.i86{width:87px;height:32px;top:21px}.ps986{margin-top:-47px}.s967{min-width:480px;min-height:336px}.ps987{margin-top:-66px}.s968{min-width:480px;width:480px;min-height:230px}.ps988{margin-left:33px}.s969{min-width:447px;width:447px;min-height:230px}.ps989{margin-top:66px}.s970{min-width:414px;width:414px;min-height:164px}.c1526{height:164px}.f279{font-size:30px;font-size:calc(30px * var(--f))}.ps990{margin-left:-37px}.s971{min-width:70px;width:70px;min-height:66px}.c1527{height:66px}.f280{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s972{height:33px}.f281{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps991{margin-top:46px}.s973{min-width:480px;width:480px;min-height:612px}.ps992{margin-left:33px}.s974{min-width:414px;width:414px;min-height:201px}.s975{min-width:414px;width:414px;min-height:72px}.f282{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s976{width:414px;height:33px}.ps993{margin-left:0;margin-top:57px}.ps994{margin-left:14px;margin-top:23px}.s977{min-width:462px;width:462px;min-height:91px}.c1530{height:91px}.f283{font-size:21px;font-size:calc(21px * var(--f))}.ps995{margin-left:15px;margin-top:0}.s978{min-width:452px;width:452px;min-height:83px}.f284{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s979{width:452px;height:26px}.ps996{margin-left:15px;margin-top:24px}.s980{min-width:452px;width:452px;min-height:82px}.f285{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps997{margin-left:15px;margin-top:20px}.s981{min-width:452px;width:452px;min-height:82px}.f286{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.c1534{width:max(480px, 100%);margin-top:42px;min-height:1766px}.s982{min-width:480px;width:480px;min-height:1766px}.s983{width:486px;min-height:1766px}.s984{min-width:486px;width:486px;min-height:563px}.ps999{margin-left:12px}.s985{min-width:462px;width:462px;min-height:39px}.c1536{height:39px}.s986{min-width:486px;width:486px;min-height:317px}.s987{min-width:486px;width:486px;min-height:108px}.s988{min-width:480px;width:480px;min-height:102px}.ps1001{margin-left:9px;margin-top:-100px}.s989{min-width:416px;width:416px;min-height:97px}.c1539{height:97px}.f287{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f288{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s990{min-width:480px;width:480px;min-height:107px}.ps1003{margin-left:425px;margin-top:-294px}.s991{min-width:58px;width:58px;min-height:267px}.s992{min-width:58px;width:58px;min-height:63px}.c1542{height:63px}.ps1004{margin-top:39px}.c1543{height:63px}.ps1005{margin-left:9px;margin-top:-204px}.s993{min-width:416px;width:416px;min-height:94px}.c1544{height:94px}.ps1006{margin-top:-1832px}.s994{min-width:480px;width:480px}.s995{min-width:480px}.ps1008{margin-top:8px}.s996{min-width:480px;width:480px;min-height:166px}.ps1009{margin-left:17px}.s997{min-width:448px;width:448px;min-height:136px}.c1546{height:136px}.f289{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f290{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps1010{margin-left:137px}.s998{min-width:99px;width:99px;min-height:30px}.f291{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s999{width:99px;height:18px}.ps1011{margin-left:9px}.f292{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps1013{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s1000{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps979{margin-top:19px}.s958{min-width:320px;width:320px;min-height:102px}.ps980{margin-left:4px}.s959{min-width:309px;width:309px;min-height:102px}.s960{min-width:80px;width:80px;min-height:64px;height:64px}.i83{left:8px;width:64px;height:64px}.ps982{margin-left:-17px;margin-top:13px}.s961{min-width:131px;width:131px;min-height:39px;height:39px}.i85{width:131px;height:39px}.ps983{margin-left:22px;margin-top:78px}.s962{min-width:93px;width:93px;min-height:24px}.f277{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s963{width:93px;height:16px}.ps984{margin-left:216px;margin-top:-95px}.s964{min-width:47px;width:47px;min-height:41px}.c1523{height:41px}.f278{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s965{height:25px;transform:scale(1.000) translateY(3px)}.ps985{margin-left:251px;margin-top:-100px}.s966{min-width:58px;width:58px;min-height:50px;height:50px}.i86{width:58px;height:21px;top:15px}.ps986{margin-top:-31px}.s967{min-width:320px;min-height:224px}.ps987{margin-top:-44px}.s968{min-width:320px;width:320px;min-height:153px}.ps988{margin-left:22px}.s969{min-width:298px;width:298px;min-height:153px}.ps989{margin-top:44px}.s970{min-width:276px;width:276px;min-height:109px}.c1526{height:109px}.f279{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps990{margin-left:-25px}.s971{min-width:47px;width:47px;min-height:44px}.c1527{height:44px}.f280{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s972{height:22px;transform:scale(1.111) translateY(2px)}.f281{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps991{margin-top:31px}.s973{min-width:320px;width:320px;min-height:410px}.ps992{margin-left:22px}.s974{min-width:276px;width:276px;min-height:134px}.s975{min-width:276px;width:276px;min-height:48px}.f282{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s976{width:276px;height:23px}.ps993{margin-left:0;margin-top:38px}.ps994{margin-left:9px;margin-top:15px}.s977{min-width:308px;width:308px;min-height:61px}.c1530{height:61px}.f283{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps995{margin-left:10px;margin-top:0}.s978{min-width:301px;width:301px;min-height:55px}.f284{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s979{width:301px;height:17px}.ps996{margin-left:10px;margin-top:16px}.s980{min-width:301px;width:301px;min-height:55px}.f285{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps997{margin-left:10px;margin-top:13px}.s981{min-width:301px;width:301px;min-height:55px}.f286{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.c1534{width:max(320px, 100%);margin-top:26px;min-height:1178px}.s982{min-width:320px;width:320px;min-height:1178px}.s983{width:326px;min-height:1178px}.s984{min-width:326px;width:326px;min-height:376px}.ps999{margin-left:9px}.s985{min-width:308px;width:308px;min-height:26px}.c1536{height:26px}.s986{min-width:326px;width:326px;min-height:213px}.s987{min-width:326px;width:326px;min-height:74px}.s988{min-width:320px;width:320px;min-height:68px}.ps1001{margin-left:7px;margin-top:-68px}.s989{min-width:277px;width:277px;min-height:65px}.c1539{height:65px}.f287{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f288{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s990{min-width:320px;width:320px;min-height:71px}.ps1003{margin-left:284px;margin-top:-197px}.s991{min-width:39px;width:39px;min-height:178px}.s992{min-width:39px;width:39px;min-height:42px}.c1542{height:42px}.ps1004{margin-top:26px}.c1543{height:42px}.ps1005{margin-left:7px;margin-top:-137px}.s993{min-width:277px;width:277px;min-height:63px}.c1544{height:63px}.ps1006{margin-top:-1222px}.s994{min-width:320px;width:320px}.s995{min-width:320px;min-height:132px}.ps1008{margin-top:5px}.s996{min-width:320px;width:320px;min-height:111px}.ps1009{margin-left:11px}.s997{min-width:299px;width:299px;min-height:91px}.c1546{height:91px}.f289{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f290{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps1010{margin-left:91px}.s998{min-width:66px;width:66px;min-height:20px}.f291{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s999{width:66px;height:12px}.ps1011{margin-left:6px}.f292{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps1013{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s1000{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-640-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-640-37.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-121.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-122.php)}}@media (min-width:320px) {.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}.c1525{background-image:url(images/cirp-csi-2022-480-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-480-37.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}.c1525{background-image:url(images/cirp-csi-2022-960-72.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-73.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}.c1525{background-image:url(images/cirp-csi-2022-1440-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1440-23.php)}}@media (min-width:480px) {.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}.c1525{background-image:url(images/cirp-csi-2022-768-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-768-37.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1536-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1536-37.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}.c1525{background-image:url(images/cirp-csi-2022-2304-22.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2304-23.php)}}@media (min-width:768px) {.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}.c1525{background-image:url(images/cirp-csi-2022-960-74.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-960-75.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1920-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1920-37.php)}}@media (min-width:960px) {.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}.c1525{background-image:url(images/cirp-csi-2022-1200-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1200-37.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2400-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2400-37.php)}}@media (min-width:1200px) {.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}.c1525{background-image:url(images/cirp-csi-2022-1415-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-1415-31.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2830-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2830-31.php)}}@media (min-width:1600px) {.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}.c1525{background-image:url(images/cirp-csi-2022-2000-36.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2000-37.php)}}@media (min-width:2000px) {.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}.c1525{background-image:url(images/cirp-csi-2022-2131-30.php)}.webp .c1525{background-image:url(images/cirp-csi-2022-2131-31.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session3.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps979 v68 s958">
<div class="v69 ps980 s959 c1519">
<div class="v69 ps981 s960 c1520">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a16"><picture class="i84"><source srcset="images/transparentks-64-37.php 1x, images/transparentks-128-37.php 2x, images/transparentks-192-72.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-36.php 1x, images/transparentks-128-36.php 2x, images/transparentks-192-71.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-37.php 1x, images/transparentks-192-37.php 2x, images/transparentks-288-23.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-36.php 1x, images/transparentks-192-36.php 2x, images/transparentks-288-22.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-31.php 1x, images/transparentks-110-31.php 2x, images/transparentks-165-23.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-30.php 1x, images/transparentks-110-30.php 2x, images/transparentks-165-22.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-31.php 1x, images/transparentks-138-31.php 2x, images/transparentks-207-23.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-30.php 1x, images/transparentks-138-30.php 2x, images/transparentks-207-22.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-75.php 1x, images/transparentks-178-75.php 2x, images/transparentks-267-45.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-74.php 1x, images/transparentks-178-74.php 2x, images/transparentks-267-44.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-103.php 1x, images/transparentks-284-67.php 2x, images/transparentks-426-45.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-102.php 1x, images/transparentks-284-66.php 2x, images/transparentks-426-44.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-66.php" title="knowledge &amp; skills logo" alt="ks logo" class="un1626 i83"></picture></a>
<?php
    }
?>

</div>
<div class="v69 ps982 s961 c1521">
<picture class="i84">
<source srcset="images/k-stransparent-131-29.php 1x, images/k-stransparent-262-29.php 2x, images/k-stransparent-393-23.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-28.php 1x, images/k-stransparent-262-28.php 2x, images/k-stransparent-393-22.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-29.php 1x, images/k-stransparent-392-29.php 2x, images/k-stransparent-588-23.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-28.php 1x, images/k-stransparent-392-28.php 2x, images/k-stransparent-588-22.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-35.php 1x, images/k-stransparent-340-35.php 2x, images/k-stransparent-510-23.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-34.php 1x, images/k-stransparent-340-34.php 2x, images/k-stransparent-510-22.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-37.php 1x, images/k-stransparent-424-73.php 2x, images/k-stransparent-636-23.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-36.php 1x, images/k-stransparent-424-72.php 2x, images/k-stransparent-636-22.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-37.php 1x, images/k-stransparent-530-37.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-36.php 1x, images/k-stransparent-530-36.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-75.php 1x, images/k-stransparent-848-37.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-74.php 1x, images/k-stransparent-848-36.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-36.php" alt="Knowledge an Skills shared by talented engineers" class="un1627 i85">
</picture>
</div>
<div class="v69 ps983 s962 c1522">
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
<a href="./logout-415c8e.php" class="f277 btn340 v70 s963">Logout</a>
<?php
    }
?>

</div>
<div class="v69 ps984 s964 c1523">
<p class="p38 f278"><a href="cirpcsi2022.php"><x-svg class="s965"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v69 ps985 s966 c1524">
<a href="cirpcsi2022.php" class="a16"><picture class="i84"><source srcset="images/csi-logo-58-29.php 1x, images/csi-logo-116-29.php 2x, images/csi-logo-174-64.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-28.php 1x, images/csi-logo-116-28.php 2x, images/csi-logo-174-63.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-29.php 1x, images/csi-logo-174-29.php 2x, images/csi-logo-261-23.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-28.php 1x, images/csi-logo-174-28.php 2x, images/csi-logo-261-22.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-35.php 1x, images/csi-logo-108-35.php 2x, images/csi-logo-162-23.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-34.php 1x, images/csi-logo-108-34.php 2x, images/csi-logo-162-22.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-35.php 1x, images/csi-logo-136-69.php 2x, images/csi-logo-204-23.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-34.php 1x, images/csi-logo-136-68.php 2x, images/csi-logo-204-22.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-35.php 1x, images/csi-logo-170-35.php 2x, images/csi-logo-255-23.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-34.php 1x, images/csi-logo-170-34.php 2x, images/csi-logo-255-22.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-71.php 1x, images/csi-logo-272-35.php 2x, images/csi-logo-408-23.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-70.php 1x, images/csi-logo-272-34.php 2x, images/csi-logo-408-22.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-34.php" alt="cirp csi 2022" class="un1628 i86"></picture></a>
</div>
</div>
</div>
<div class="v69 ps986 s967 c1525"></div>
<div class="ps987 v68 s968">
<div class="v69 ps988 s969 c1519">
<div class="v69 ps989 s970 c1526">
<p class="p38 f279">6th CIRP Conference on Surface Integrity </p>
<p class="p38 f279">Day 3 presentations replay</p>
</div>
<div class="v69 ps990 s971 c1527">
<p class="p38 f280"><a href="cirpcsi2022.php"><x-svg class="s972"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p38 f281"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps991 v68 s973">
<div class="v69 ps992 s974 c1519">
<div class="v69 ps981 s975 c1528">
<a href="#" class="f282 btn341 v70 s976">8:40 - 10:20 CET</a>
</div>
<div class="v69 ps993 s975 c1529">
<a href="cirpcsi2022session3-2.php" class="f282 btn342 v70 s976">10:50 - 12:30 CET</a>
</div>
</div>
<div class="v69 ps994 s977 c1530">
<p class="p39 f283">Themes scheduled on Day 3 between 8:40 and 10:20 CET</p>
</div>
<div class="v69 ps995 s978 c1531">
<a href="#anchor1" class="f284 btn343 v70 s979">26- Cutting Processes &amp; Residual Stresses</a>
</div>
<div class="v69 ps996 s980 c1532">
<a href="#anchor2" class="f285 btn344 v70 s979">27- Surface Integrity &amp; Functional Properties</a>
</div>
<div class="v69 ps997 s981 c1533">
<a href="#anchor3" class="f286 btn345 v70 s979">28- Abrasive Processes</a>
</div>
</div>
<div class="c1534">
<div class="ps998 v68 s982">
<div class="s983">
<div class="v69 ps981 s984 c1535">
<div class="v69 ps999 s985 c1536">
<p class="p39 f283">26- Cutting Processes &amp; Residual Stresses</p>
</div>
<div class="v69 ps1000 s986 c1519">
<div class="v69 ps981 s986 w14">
<div class="v69 ps981 s986 c1537">
<div class="v69 ps981 s987 c1519">
<div class="v69 ps981 s987 w14">
<div class="v69 ps981 s988 c1538"></div>
<div class="v69 ps1001 s989 c1539">
<p class="p39 f287">Machine Learning based Approach for the Prediction Surface Integrity in Machining<br><span class="f288">V. Kryzhanivskyy, R. M’Saoubi, M. Bhallamudi and M. Cekal</span></p>
</div>
</div>
</div>
<div class="v69 ps1002 s990 c1540"></div>
<div class="v5 ps351 s488 c1464"></div>
</div>
<div class="v69 ps1003 s991 c1541">
<div class="v69 ps981 s992 c1542">
<p class="p38 f278"><a onclick="pop&&pop.openPopup('popup167');return false" style="cursor:pointer;"><x-svg class="s965"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v69 ps1004 s992 c1543">
<p class="p38 f278"><a onclick="pop&&pop.openPopup('popup168');return false" style="cursor:pointer;"><x-svg class="s965"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c1465">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup169');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v69 ps1005 s993 c1544">
<p class="p39 f287">A Multiscale Study on Machining Induced Surface Integrity in Ti-6Al-4V Alloy<br><span class="f288">Nithin Rangasamy, C. S. Rakurty and A. K. Balaji</span></p>
</div>
<div class="v5 ps955 s934 c1466">
<p class="p18 f164">Investigation and reduced model of the variability of residual stress field of forged and machined parts<br><span class="f165">Hugo Chabeauti, Mathieu Ritou, Bruno Lavisse, Guenael Germain and Virginie Charbonnier</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c1467">
<div class="v5 ps33 s391 c1468"></div>
<div class="v5 ps351 s935 c1469"></div>
</div>
<div class="v5 ps956 s936 c1470">
<div class="v5 ps781 s937 c1471">
<p class="p18 f164">Tool development for hybrid finishing milling of iron aluminides<br><span class="f165">Julien Wittea, Dirk Schroepfer, Martin Hamacher, Heiner Michels, Christoph Hamm, Michael Appelt, Andreas Boerner and Thomas Kannengiesser</span></p>
</div>
<div class="v5 ps957 s938 c1472">
<p class="p18 f164">Microstructure analysis of single-lip deep hole drilled bores by electron backscatter diffraction and magnetic Barkhausen noise<br><span class="f165">Nikolas Baak, Jan Nickel, Dirk Biermann and Frank Walther</span></p>
</div>
</div>
<div class="v5 ps958 s396 c665">
<div class="v5 ps33 s387 c1191">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup170');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c775">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup171');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps959 s939 c1473">
<div class="v5 ps33 s940 c45">
<div class="v5 ps33 s940 w2">
<div class="v5 ps359 s941 c1474">
<p class="p18 f116">27- Surface Integrity &amp; Functional Properties</p>
</div>
<div class="v5 ps789 s400 c670">
<div class="v5 ps33 s942 c45">
<div class="v5 ps33 s942 w2">
<div class="v5 ps33 s499 c1475"></div>
<div class="v5 ps960 s943 c1476">
<p class="p18 f164">Analysis of the contact mechanics in machining using a novel high-speed tribometer<br><span class="f165">Joshua Priest, Hassan Ghadbeigi, Sabino Ayvar-Soberanis, Anders Liljerehn and Matthew Way</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c1477"></div>
<div class="v5 ps351 s488 c1478"></div>
</div>
<div class="v5 ps362 s405 c1479">
<div class="v5 ps33 s387 c1480">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup172');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c1481">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup173');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c783">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup174');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps961 s944 c1482">
<p class="p18 f164">Wear resistance enhancement of AISI 1045 steel by vibration assisted ball burnishing process<br><span class="f165">Eric Velazquez-Corral, Ramon Jerez-Mesaa, Jordi Llum, Vincent Wagner, Gilles Dessein and J Antonio Travieso-Rodriguez</span></p>
</div>
<div class="v5 ps962 s945 c1483">
<p class="p18 f164">On the tribological and machining performance of laser textured sintered carbide cutting tools in turning of Al2024<br><span class="f165">Paul Butler-Smith, Reza Nekouie Esfahani, Aneta Chrostek-Mroz and TianLong See</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s946 c45">
<div class="v5 ps33 s946 w2">
<div class="v5 ps33 s622 c880">
<div class="v5 ps33 s391 c1484"></div>
<div class="v5 ps351 s935 c1485"></div>
</div>
<div class="v5 ps963 s947 c1167">
<div class="v5 ps33 s948 c1486">
<p class="p18 f164">Impact of the drilling process on the surface integrity and residual fatigue strength of 2024-T351 aluminum parts<br><span class="f165">Yann Landon, Alexandra Lacombe, Landry Arnaud Kamgaing Souop, Alain Daidi, Manuel Paredes,  et al.</span></p>
</div>
<div class="v5 ps964 s949 c1487">
<p class="p18 f164">Effect of cryogenic friction conditions on surface quality<br><span class="f165">El Mehdi Skalante, Hamid Makich and Mohammed Nouari</span></p>
</div>
</div>
<div class="v5 ps965 s396 c686">
<div class="v5 ps33 s387 c882">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup175');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c792">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup176');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps966 s121"></a>
<div class="v5 ps967 s950 c873">
<div class="v5 ps359 s399 c1488">
<p class="p18 f116">28- Abrasive Processes</p>
</div>
<div class="v5 ps360 s400 c45">
<div class="v5 ps33 s400 w2">
<div class="v5 ps33 s400 c1489">
<div class="v5 ps33 s942 c45">
<div class="v5 ps33 s942 w2">
<div class="v5 ps33 s499 c1490"></div>
<div class="v5 ps968 s951 c1491">
<p class="p18 f164">Honing process parameters influence on surface topographies<br><span class="f165">C. Urville, T. Souvignet, Z. Dimkovski and F. Cabanettes</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c1492"></div>
<div class="v5 ps351 s488 c1493"></div>
</div>
<div class="v5 ps362 s405 c75">
<div class="v5 ps33 s387 c1494">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup177');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c1495">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup178');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c799">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup179');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps969 s952 c1496">
<p class="p18 f164">Surface parameters study of stainless steel 304L and nickel-based alloy 690 after grinding: effect of vortex cooling<br><span class="f165">Maxime Berthaud, Jacqueline Caballero Hinostroza and Yoann Vidalenc</span></p>
</div>
<div class="v5 ps970 s953 c1497">
<p class="p18 f164">Structure Integrity Analysis on Nickel-Diamond Blade in Dicing Process of Hard-brittle Ceramic Die<br><span class="f165">S.K. Lim, M. F. Zamri and A.R. Yusoff</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c898">
<div class="v5 ps33 s391 c1498"></div>
<div class="v5 ps351 s935 c1499"></div>
</div>
<div class="v5 ps971 s954 c1500">
<div class="v5 ps781 s955 c1501">
<p class="p18 f164">Diamond coatings for advanced cutting tools in honing and grinding<br><span class="f165">S. Baron, T. Tounsi, J. Gabler, G. Mahlfeld, C. Stein, M. Hofer, V. Sittinger, H.-W. Hoffmeister, C. Herrmann and K. Droder</span></p>
</div>
<div class="v5 ps972 s956 c1502">
<p class="p18 f164">Research on Surface Integrity of GH4169 Superalloy Processed by Laser Belt<br><span class="f165">Guijian Xiao, Shuai Liu, Yi He and Yun Huang</span></p>
</div>
</div>
<div class="v5 ps973 s396 c346">
<div class="v5 ps33 s387 c900">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup180');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c808">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup181');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps974 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v68 ps1006 s994"></a>
<div class="btf ps975 v7 s419">
<div class="v5 ps976 s420 c1503">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps977 s49 c1504">
<div class="v5 ps38 s50 c1505">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1746"><source data-srcset="images/transparentks-102-37.php 1x, images/transparentks-204-37.php 2x, images/transparentks-306-72.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-36.php 1x, images/transparentks-204-36.php 2x, images/transparentks-306-71.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-37.php 1x, images/transparentks-306-37.php 2x, images/transparentks-459-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-36.php 1x, images/transparentks-306-36.php 2x, images/transparentks-459-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-41.php 1x, images/transparentks-114-41.php 2x, images/transparentks-171-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-40.php 1x, images/transparentks-114-40.php 2x, images/transparentks-171-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-37.php 1x, images/transparentks-142-105.php 2x, images/transparentks-213-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-36.php 1x, images/transparentks-142-104.php 2x, images/transparentks-213-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-77.php 1x, images/transparentks-178-77.php 2x, images/transparentks-267-47.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-76.php 1x, images/transparentks-178-76.php 2x, images/transparentks-267-46.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-107.php 1x, images/transparentks-284-69.php 2x, images/transparentks-426-47.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-106.php 1x, images/transparentks-284-68.php 2x, images/transparentks-426-46.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-68.php" title="knowledge &amp; skills logo" alt="logo" class="un1629 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1747">
<source data-srcset="images/k-stransparent-110-37.php 1x, images/k-stransparent-220-37.php 2x, images/k-stransparent-330-72.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-36.php 1x, images/k-stransparent-220-36.php 2x, images/k-stransparent-330-71.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-37.php 1x, images/k-stransparent-330-37.php 2x, images/k-stransparent-495-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-36.php 1x, images/k-stransparent-330-36.php 2x, images/k-stransparent-495-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-35.php 1x, images/k-stransparent-340-35.php 2x, images/k-stransparent-510-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-34.php 1x, images/k-stransparent-340-34.php 2x, images/k-stransparent-510-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-37.php 1x, images/k-stransparent-424-73.php 2x, images/k-stransparent-636-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-36.php 1x, images/k-stransparent-424-72.php 2x, images/k-stransparent-636-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-37.php 1x, images/k-stransparent-530-37.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-36.php 1x, images/k-stransparent-530-36.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-75.php 1x, images/k-stransparent-848-37.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-74.php 1x, images/k-stransparent-848-36.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-36.php" alt="Knowledge an Skills shared by talented engineers" class="un1630 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c1506"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c1507"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c1508"></div>
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
<div class="v5 ps38 s69 c1509">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v71 ps1007 s995 c1545">
<div class="ps1008 v68 s996">
<div class="v69 ps1009 s997 c1546">
<p class="p39 f289">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f290"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v69 ps1010 s998 c1547">
<a href="javascript:void(0)" class="denyConsent f291 btn346 v70 s999">Refuse</a>
</div>
<div class="v69 ps1011 s998 c1547">
<a href="javascript:void(0)" class="allowConsent f292 btn347 v70 s999">OK</a>
</div>
</div>
</div>
<div id="popup181" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1012">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1548">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c289">
<div class="player un1631 pl172">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S28-598.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c961">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c962">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c963">
<a onclick="pop&&pop.closePopup('popup181');return false" style="cursor:pointer;" class="f67 btn325 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup180" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1014">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1549">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c964">
<div class="player un1632 pl173">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S28-475.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c965">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c966">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c967">
<a onclick="pop&&pop.closePopup('popup180');return false" style="cursor:pointer;" class="f67 btn326 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup179" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1015">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1550">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c290">
<div class="player un1633 pl174">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S28-460.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c291">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c292">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c293">
<a onclick="pop&&pop.closePopup('popup179');return false" style="cursor:pointer;" class="f67 btn327 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup178" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1016">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1551">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c968">
<div class="player un1634 pl175">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S28-413.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c969">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c970">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c299">
<a onclick="pop&&pop.closePopup('popup178');return false" style="cursor:pointer;" class="f67 btn328 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup177" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1017">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1552">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c971">
<div class="player un1635 pl176">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S28-562.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c972">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c973">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c974">
<a onclick="pop&&pop.closePopup('popup177');return false" style="cursor:pointer;" class="f67 btn329 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup176" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1018">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1553">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c308">
<div class="player un1636 pl177">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S27-630.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c975">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c976">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c300">
<a onclick="pop&&pop.closePopup('popup176');return false" style="cursor:pointer;" class="f67 btn330 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup174" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1019">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1554">
<div class="ps38 v7 s883">
<div class="v5 ps179 s884 c45">
<div class="v5 ps180 s957 c314">
<div class="player un1637 pl178">
<video preload="metadata" poster="images/poster-2792-1.php" class="videoinline vd13" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S27-453.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps978 s236 c977">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c978">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c979">
<a onclick="pop&&pop.closePopup('popup174');return false" style="cursor:pointer;" class="f67 btn331 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup173" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1020">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1555">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c980">
<div class="player un1638 pl179">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S27-447.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c981">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c982">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c702">
<a onclick="pop&&pop.closePopup('popup173');return false" style="cursor:pointer;" class="f67 btn332 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup175" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1021">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1556">
<div class="ps38 v7 s883">
<div class="v5 ps179 s884 c45">
<div class="v5 ps180 s885 c315">
<div class="player un1639 pl180">
<video preload="metadata" poster="images/poster-3348-1.php" class="videoinline vd12" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S27-487.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps895 s236 c316">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c317">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c318">
<a onclick="pop&&pop.closePopup('popup175');return false" style="cursor:pointer;" class="f67 btn333 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup172" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1022">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1557">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c983">
<div class="player un1640 pl181">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S27-380.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c984">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c985">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c324">
<a onclick="pop&&pop.closePopup('popup172');return false" style="cursor:pointer;" class="f67 btn334 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup171" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1023">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1558">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1510">
<div class="player un1641 pl182">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-673.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1511">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1512">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c709">
<a onclick="pop&&pop.closePopup('popup171');return false" style="cursor:pointer;" class="f67 btn335 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup170" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1024">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1559">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c333">
<div class="player un1642 pl183">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-660.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1513">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1514">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c325">
<a onclick="pop&&pop.closePopup('popup170');return false" style="cursor:pointer;" class="f67 btn336 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup169" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1025">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1560">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c339">
<div class="player un1643 pl184">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-658.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c922">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1515">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c712">
<a onclick="pop&&pop.closePopup('popup169');return false" style="cursor:pointer;" class="f67 btn337 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup168" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1026">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1561">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1516">
<div class="player un1644 pl185">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-632.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1517">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1518">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c715">
<a onclick="pop&&pop.closePopup('popup168');return false" style="cursor:pointer;" class="f67 btn338 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup167" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1027">
<div onclick="event.stopPropagation()" class="popup v72 ps1013 s1000 c1562">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c340">
<div class="player un1645 pl186">
<video preload="metadata" poster="images/poster-3592-8.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-583.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c341">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c342">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c343">
<a onclick="pop&&pop.closePopup('popup167');return false" style="cursor:pointer;" class="f67 btn339 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session3.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>