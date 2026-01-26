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
            $redirect = 'cirpcsi2022session2-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = 'C99C4A43-39DD-4105-AC3A-3EA4F8E78864';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-2.php';
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
<title>Day 2 sessions 10h50 to 12h30</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-2.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 2 sessions 10h50 to 12h30">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps695{position:relative;margin-top:0}.v53{display:block;vertical-align:top}.s716{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v54{display:inline-block;vertical-align:top}.ps696{position:relative;margin-left:0;margin-top:0}.s717{min-width:1920px;width:1920px;min-height:142px}.ps697{position:relative;margin-left:0;margin-top:0}.s718{min-width:165px;width:165px;min-height:142px;height:142px}.c1085{z-index:3;pointer-events:auto}.a13{display:block}.i71{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i72{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps698{position:relative;margin-left:-21px;margin-top:6px}.s719{min-width:424px;width:424px;min-height:130px;height:130px}.c1086{z-index:1;pointer-events:auto}.i73{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps699{position:relative;margin-left:1038px;margin-top:54px}.s720{min-width:84px;width:84px;min-height:36px}.c1087{z-index:22;pointer-events:auto}.f218{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn248{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn248:hover{background-color:#82939e;border-color:#000;color:#000}.btn248:active{background-color:#677a85;border-color:#000;color:#808080}.v55{display:inline-block;overflow:hidden;outline:0}.s721{width:84px;padding-right:0;height:24px}.ps700{position:relative;margin-left:10px;margin-top:30px}.s722{min-width:84px;width:84px;min-height:82px}.c1088{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p32{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f219{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s723{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps701{position:relative;margin-left:0;margin-top:21px}.s724{min-width:136px;width:136px;min-height:100px;height:100px}.c1089{z-index:18;pointer-events:auto}.i74{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps702{position:relative;margin-top:8px}.s725{width:100%;min-width:1920px;min-height:744px}.c1090{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-40.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c1090{background-image:url(images/cirp-csi-2022-320-46.php)}.ps703{position:relative;margin-top:60px}.s726{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps704{position:relative;margin-left:240px;margin-top:0}.s727{min-width:1600px;width:1600px;min-height:160px}.ps705{position:relative;margin-left:0;margin-top:0}.s728{min-width:1520px;width:1520px;min-height:160px}.c1091{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f220{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps706{position:relative;margin-left:-4px;margin-top:0}.s729{min-width:84px;width:84px;min-height:80px}.c1092{z-index:221;pointer-events:auto;overflow:hidden;height:80px}.f221{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s730{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f222{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps707{position:relative;margin-top:108px}.s731{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:521px}.ps708{position:relative;margin-left:260px;margin-top:0}.s732{min-width:1400px;width:1400px;min-height:70px}.s733{min-width:320px;width:320px;min-height:70px}.c1093{z-index:19;pointer-events:auto}.f223{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn249{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn249:hover{background-color:#82939e;border-color:#000;color:#000}.btn249:active{background-color:#677a85;border-color:#000;color:#808080}.s734{width:320px;padding-right:0;height:29px}.ps709{position:relative;margin-left:40px;margin-top:0}.c1094{z-index:24;pointer-events:auto}.btn250{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn250:hover{background-color:#82939e;border-color:#000;color:#000}.btn250:active{background-color:#677a85;border-color:#000;color:#808080}.ps710{position:relative;margin-left:40px;margin-top:0}.c1095{z-index:23;pointer-events:auto}.btn251{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn251:hover{background-color:#82939e;border-color:#000;color:#000}.btn251:active{background-color:#677a85;border-color:#000;color:#808080}.ps711{position:relative;margin-left:40px;margin-top:0}.c1096{z-index:25;pointer-events:auto}.btn252{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn252:hover{background-color:#82939e;border-color:#000;color:#000}.btn252:active{background-color:#677a85;border-color:#000;color:#808080}.ps712{position:relative;margin-left:55px;margin-top:43px}.s735{min-width:845px;width:845px;min-height:51px}.c1097{z-index:26;pointer-events:auto;overflow:hidden;height:51px}.p33{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f224{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps713{position:relative;margin-left:55px;margin-top:34px}.s736{min-width:1805px;width:1805px;min-height:63px}.c1098{z-index:27;pointer-events:auto}.f225{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn253{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn253:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn253:active{background-color:#677a85;border-color:#000;color:#fff}.s737{width:1805px;padding-right:0;height:34px}.ps714{position:relative;margin-left:55px;margin-top:22px}.s738{min-width:1805px;width:1805px;min-height:63px}.c1099{z-index:28;pointer-events:auto}.f226{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn254{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn254:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn254:active{background-color:#677a85;border-color:#000;color:#fff}.ps715{position:relative;margin-left:55px;margin-top:19px}.s739{min-width:1805px;width:1805px;min-height:63px}.c1100{z-index:29;pointer-events:auto}.f227{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn255{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn255:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn255:active{background-color:#677a85;border-color:#000;color:#fff}.ps716{position:relative;margin-left:55px;margin-top:24px}.s740{min-width:1805px;width:1805px;min-height:63px}.c1101{z-index:30;pointer-events:auto}.f228{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn256{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn256:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn256:active{background-color:#677a85;border-color:#000;color:#fff}.c1102{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:34px;min-height:3314px}.ps717{position:relative;margin-top:0}.s741{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3314px}.s742{width:1926px;margin-left:-3px;min-height:3314px}.s743{min-width:1926px;width:1926px;min-height:789px}.c1103{z-index:31}.ps718{position:relative;margin-left:58px;margin-top:0}.s744{min-width:600px;width:600px;min-height:51px}.c1104{z-index:33;pointer-events:auto;overflow:hidden;height:51px}.ps719{position:relative;margin-left:0;margin-top:-3px}.s745{min-width:1926px;width:1926px;min-height:447px}.w11{line-height:0}.c1105{z-index:34}.s746{min-width:1920px;width:1920px;min-height:147px;height:147px}.c1106{z-index:36;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps720{position:relative;margin-left:20px;margin-top:3px}.s747{min-width:1760px;width:1760px;min-height:142px}.c1107{z-index:37;pointer-events:auto;overflow:hidden;height:142px}.f229{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f230{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps721{position:relative;margin-left:0;margin-top:-6px}.s748{min-width:1920px;width:1920px;min-height:147px}.c1108{z-index:35;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps722{position:relative;margin-left:1843px;margin-top:-413px}.s749{min-width:54px;width:54px;min-height:380px}.c1109{z-index:39}.s750{min-width:54px;width:54px;min-height:86px}.c1110{z-index:48;pointer-events:auto;overflow:hidden;height:86px}.ps723{position:relative;margin-left:0;margin-top:61px}.s751{min-width:54px;width:54px;min-height:86px}.c1111{z-index:49;pointer-events:auto;overflow:hidden;height:86px}.ps724{position:relative;margin-left:23px;margin-top:-297px}.s752{min-width:1760px;width:1760px;min-height:148px}.c1112{z-index:43;pointer-events:auto;overflow:hidden;height:148px}.f231{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f232{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps725{position:relative;margin-left:23px;margin-top:-150px}.s753{min-width:1764px;width:1764px;min-height:142px}.c1113{z-index:47;pointer-events:auto;overflow:hidden;height:142px}.ps726{position:relative;margin-left:0;margin-top:-3314px}.s754{min-width:1920px;width:1920px;min-height:1px}.v56{display:none;vertical-align:top}.s755{width:100%;min-width:1920px;min-height:198px}.c1114{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps728{position:relative;margin-top:34px}.s756{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps729{position:relative;margin-left:24px;margin-top:0}.s757{min-width:1876px;width:1876px;min-height:78px}.c1115{pointer-events:auto;overflow:hidden;height:78px}.f233{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f234{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps730{position:relative;margin-left:684px;margin-top:0}.s758{min-width:256px;width:256px;min-height:64px}.c1116{pointer-events:auto}.f235{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn257{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn257:hover{background-color:#82939e;border-color:#000;color:#000}.btn257:active{background-color:#181b28;border-color:#000;color:#808080}.s759{width:256px;padding-right:0;height:24px}.ps731{position:relative;margin-left:40px;margin-top:0}.f236{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn258{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn258:hover{background-color:#82939e;border-color:#000;color:#000}.btn258:active{background-color:#181b28;border-color:#000;color:#808080}.ps732{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435288;pointer-events:none;visibility:hidden;opacity:0}.v57{display:inline-block;vertical-align:top;pointer-events:auto}.ps733{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s760{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1117{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps734{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435283;pointer-events:none;visibility:hidden;opacity:0}.c1118{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps735{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435278;pointer-events:none;visibility:hidden;opacity:0}.c1119{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps736{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435273;pointer-events:none;visibility:hidden;opacity:0}.c1120{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps737{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435268;pointer-events:none;visibility:hidden;opacity:0}.c1121{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps738{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435263;pointer-events:none;visibility:hidden;opacity:0}.c1122{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps739{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435258;pointer-events:none;visibility:hidden;opacity:0}.c1123{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps740{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435253;pointer-events:none;visibility:hidden;opacity:0}.c1124{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps741{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435248;pointer-events:none;visibility:hidden;opacity:0}.c1125{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps742{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435243;pointer-events:none;visibility:hidden;opacity:0}.c1126{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps743{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435238;pointer-events:none;visibility:hidden;opacity:0}.c1127{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps744{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435233;pointer-events:none;visibility:hidden;opacity:0}.c1128{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps745{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435228;pointer-events:none;visibility:hidden;opacity:0}.c1129{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps746{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435223;pointer-events:none;visibility:hidden;opacity:0}.c1130{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps747{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435218;pointer-events:none;visibility:hidden;opacity:0}.c1131{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps748{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435213;pointer-events:none;visibility:hidden;opacity:0}.c1132{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps749{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435208;pointer-events:none;visibility:hidden;opacity:0}.c1133{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps750{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435203;pointer-events:none;visibility:hidden;opacity:0}.c1134{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps751{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435198;pointer-events:none;visibility:hidden;opacity:0}.c1135{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps752{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435193;pointer-events:none;visibility:hidden;opacity:0}.c1136{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps695{margin-top:4px}.s716{min-width:1200px;width:1200px;min-height:89px}.s717{min-width:1200px;width:1200px;min-height:89px}.s718{min-width:115px;width:115px;min-height:89px;height:89px}.i71{left:13px;width:89px;height:89px}.ps698{margin-left:-16px;margin-top:4px}.s719{min-width:265px;width:265px;min-height:81px;height:81px}.i73{width:265px;height:81px}.ps699{margin-left:640px;margin-top:30px}.s720{min-width:52px;width:52px;min-height:22px}.f218{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s721{width:52px;height:15px}.ps700{margin-left:7px;margin-top:15px}.s722{min-width:52px;width:52px;min-height:51px}.c1088{height:51px}.f219{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s723{height:30px;transform:scale(1.000) translateY(3px)}.ps701{margin-top:9px}.s724{min-width:85px;width:85px;min-height:63px;height:63px}.i74{width:85px;height:31px;top:16px}.ps702{margin-top:5px}.s725{min-width:1200px;min-height:494px}.ps703{margin-top:4px}.s726{min-width:1200px;width:1200px;min-height:116px}.ps704{margin-left:150px}.s727{min-width:999px;width:999px;min-height:116px}.s728{min-width:950px;width:950px;min-height:116px}.c1091{height:116px}.f220{font-size:30px;font-size:calc(30px * var(--f))}.ps706{margin-left:-3px}.s729{min-width:52px;width:52px;min-height:58px}.c1092{height:58px}.f221{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s730{height:27px;transform:scale(1.111) translateY(2px)}.f222{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps707{margin-top:49px}.s731{min-width:1200px;width:1200px;min-height:345px}.ps708{margin-left:164px}.s732{min-width:872px;width:872px;min-height:44px}.s733{min-width:200px;width:200px;min-height:44px}.f223{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s734{width:200px;height:18px}.ps709{margin-left:25px}.ps710{margin-left:25px}.ps711{margin-left:22px}.ps712{margin-left:34px;margin-top:53px}.s735{min-width:485px;width:485px;min-height:35px}.c1097{height:35px}.f224{font-size:18px;font-size:calc(18px * var(--f))}.ps713{margin-left:34px;margin-top:10px}.s736{min-width:1129px;width:1129px;min-height:39px}.f225{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s737{width:1129px;height:21px}.ps714{margin-left:34px;margin-top:13px}.s738{min-width:1129px;width:1129px;min-height:39px}.f226{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.ps715{margin-left:34px;margin-top:12px}.s739{min-width:1129px;width:1129px;min-height:40px}.f227{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.ps716{margin-left:34px;margin-top:15px}.s740{min-width:1129px;width:1129px;min-height:39px}.f228{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c1102{width:max(1200px, 100%);margin-top:27px;min-height:2080px}.s741{min-width:1200px;width:1200px;min-height:2080px}.s742{width:1206px;min-height:2080px}.s743{min-width:1206px;width:1206px;min-height:495px}.ps718{margin-left:37px}.s744{min-width:375px;width:375px;min-height:32px}.c1104{height:32px}.s745{min-width:1206px;width:1206px;min-height:282px}.s746{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps720{margin-left:12px;margin-top:8px}.s747{min-width:1095px;width:1095px;min-height:83px}.c1107{height:83px}.f229{font-size:18px;font-size:calc(18px * var(--f))}.f230{font-size:18px;font-size:calc(18px * var(--f))}.s748{min-width:1200px;width:1200px;min-height:92px}.ps722{margin-left:1149px;margin-top:-259px}.s749{min-width:33px;width:33px;min-height:237px}.s750{min-width:33px;width:33px;min-height:53px}.c1110{height:53px}.ps723{margin-top:39px}.s751{min-width:33px;width:33px;min-height:53px}.c1111{height:53px}.ps724{margin-left:15px;margin-top:-178px}.s752{min-width:1095px;width:1095px;min-height:83px}.c1112{height:83px}.f231{font-size:18px;font-size:calc(18px * var(--f))}.f232{font-size:18px;font-size:calc(18px * var(--f))}.ps725{margin-left:15px;margin-top:-89px}.s753{min-width:1095px;width:1095px;min-height:86px}.c1113{height:86px}.ps726{margin-top:-2080px}.s754{min-width:1200px;width:1200px}.s755{min-width:1200px;min-height:129px}.ps728{margin-top:21px}.s756{min-width:1200px;width:1200px;min-height:84px}.ps729{margin-left:15px}.s757{min-width:1172px;width:1172px;min-height:49px}.c1115{height:49px}.f233{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f234{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps730{margin-left:412px;margin-top:-5px}.s758{min-width:160px;width:160px;min-height:40px}.f235{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s759{width:160px;height:15px}.ps731{margin-left:55px;margin-top:-5px}.f236{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps733{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s760{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s716{min-width:960px;width:960px;min-height:71px}.s717{min-width:960px;width:960px;min-height:71px}.s718{min-width:69px;width:69px;min-height:71px;height:71px}.i71{left:0;width:69px;height:69px;top:1px}.ps698{margin-left:1px;margin-top:3px}.s719{min-width:212px;width:212px;min-height:65px;height:65px}.i73{width:212px;height:65px}.ps699{margin-left:521px;margin-top:27px}.s720{min-width:42px;width:42px;min-height:18px}.f218{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s721{width:42px;height:11px}.ps700{margin-left:5px;margin-top:15px}.s722{min-width:42px;width:42px;min-height:41px}.c1088{height:41px}.f219{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s723{height:24px;transform:scale(1.000) translateY(2px)}.ps701{margin-top:10px}.s724{min-width:68px;width:68px;min-height:51px;height:51px}.i74{width:68px;height:25px;top:13px}.ps702{margin-top:4px}.s725{min-width:960px;min-height:501px}.ps703{margin-top:0}.s726{min-width:960px;width:960px;min-height:92px}.ps704{margin-left:118px}.s727{min-width:802px;width:802px;min-height:92px}.s728{min-width:760px;width:760px;min-height:92px}.c1091{height:92px}.f220{font-size:24px;font-size:calc(24px * var(--f))}.ps706{margin-left:0}.s729{min-width:42px;width:42px;min-height:46px}.c1092{height:46px}.f221{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s730{height:22px;transform:scale(1.111) translateY(2px)}.f222{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps707{margin-top:6px}.s731{min-width:960px;width:960px;min-height:269px}.ps708{margin-left:130px}.s732{min-width:697px;width:697px;min-height:35px}.s733{min-width:160px;width:160px;min-height:35px}.f223{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s734{width:160px;height:15px}.ps709{margin-left:20px}.ps710{margin-left:20px}.ps711{margin-left:17px}.ps712{margin-left:27px;margin-top:36px}.s735{min-width:368px;width:368px;min-height:26px}.c1097{height:26px}.f224{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps713{margin-left:27px;margin-top:7px}.s736{min-width:903px;width:903px;min-height:31px}.f225{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s737{width:903px;height:16px}.ps714{margin-left:27px;margin-top:12px}.s738{min-width:903px;width:903px;min-height:31px}.f226{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.ps715{margin-left:27px;margin-top:10px}.s739{min-width:903px;width:903px;min-height:32px}.f227{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.ps716{margin-left:27px;margin-top:12px}.s740{min-width:903px;width:903px;min-height:31px}.f228{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c1102{width:max(960px, 100%);margin-top:18px;min-height:1672px}.s741{min-width:960px;width:960px;min-height:1672px}.s742{width:966px;min-height:1672px}.s743{min-width:966px;width:966px;min-height:397px}.ps718{margin-left:30px}.s744{min-width:300px;width:300px;min-height:26px}.c1104{height:26px}.s745{min-width:966px;width:966px;min-height:227px}.s746{min-width:960px;width:960px;min-height:73px;height:73px}.ps720{margin-left:10px;margin-top:5px}.s747{min-width:882px;width:882px;min-height:65px}.c1107{height:65px}.f229{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.f230{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.s748{min-width:960px;width:960px;min-height:74px}.ps722{margin-left:926px;margin-top:-209px}.s749{min-width:28px;width:28px;min-height:190px}.s750{min-width:26px;width:26px;min-height:42px}.c1110{height:42px}.ps723{margin-left:2px;margin-top:29px}.s751{min-width:26px;width:26px;min-height:42px}.c1111{height:42px}.ps724{margin-left:13px;margin-top:-147px}.s752{min-width:882px;width:882px;min-height:71px}.c1112{height:71px}.f231{font-size:15px;font-size:calc(15px * var(--f))}.f232{font-size:15px;font-size:calc(15px * var(--f))}.ps725{margin-left:13px;margin-top:-69px}.s753{min-width:882px;width:882px;min-height:63px}.c1113{height:63px}.ps726{margin-top:-1672px}.s754{min-width:960px;width:960px}.s755{min-width:960px;min-height:106px}.ps728{margin-top:17px}.s756{min-width:960px;width:960px;min-height:68px}.ps729{margin-left:12px}.s757{min-width:938px;width:938px;min-height:39px}.c1115{height:39px}.f233{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f234{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps730{margin-left:342px;margin-top:-3px}.s758{min-width:128px;width:128px;min-height:32px}.f235{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s759{width:128px;height:12px}.ps731{margin-left:20px;margin-top:-3px}.f236{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps733{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s760{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s716{min-width:768px;width:768px;min-height:57px}.s717{min-width:768px;width:768px;min-height:57px}.s718{min-width:55px;width:55px;min-height:57px;height:57px}.i71{left:0;width:55px;height:55px;top:1px}.ps698{margin-left:1px;margin-top:2px}.s719{min-width:170px;width:170px;min-height:52px;height:52px}.i73{width:170px;height:52px}.ps699{margin-left:416px;margin-top:22px}.s720{min-width:34px;width:34px;min-height:14px}.f218{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s721{width:34px;height:9px}.ps700{margin-left:4px;margin-top:12px}.s722{min-width:34px;width:34px;min-height:33px}.c1088{height:33px}.f219{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s723{height:19px;transform:scale(1.000) translateY(2px)}.ps701{margin-top:8px}.s724{min-width:54px;width:54px;min-height:41px;height:41px}.i74{width:54px;height:20px;top:10px}.ps702{margin-top:3px}.s725{min-width:768px;min-height:401px}.ps703{margin-top:0}.s726{min-width:768px;width:768px;min-height:73px}.ps704{margin-left:94px}.s727{min-width:642px;width:642px;min-height:73px}.s728{min-width:608px;width:608px;min-height:73px}.c1091{height:73px}.f220{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps706{margin-left:0}.s729{min-width:34px;width:34px;min-height:37px}.c1092{height:37px}.f221{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s730{height:17px;transform:scale(1.111) translateY(2px)}.f222{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps707{margin-top:5px}.s731{min-width:768px;width:768px;min-height:217px}.ps708{margin-left:104px}.s732{min-width:558px;width:558px;min-height:28px}.s733{min-width:128px;width:128px;min-height:28px}.f223{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s734{width:128px;height:11px}.ps709{margin-left:16px}.ps710{margin-left:16px}.ps711{margin-left:14px}.ps712{margin-left:22px;margin-top:29px}.s735{min-width:294px;width:294px;min-height:21px}.c1097{height:21px}.f224{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps713{margin-left:22px;margin-top:5px}.s736{min-width:722px;width:722px;min-height:25px}.f225{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s737{width:722px;height:12px}.ps714{margin-left:22px;margin-top:10px}.s738{min-width:722px;width:722px;min-height:25px}.f226{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps715{margin-left:22px;margin-top:8px}.s739{min-width:722px;width:722px;min-height:25px}.f227{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps716{margin-left:22px;margin-top:10px}.s740{min-width:722px;width:722px;min-height:25px}.f228{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1102{width:max(768px, 100%);margin-top:13px;min-height:1338px}.s741{min-width:768px;width:768px;min-height:1338px}.s742{width:774px;min-height:1338px}.s743{min-width:774px;width:774px;min-height:318px}.ps718{margin-left:25px}.s744{min-width:240px;width:240px;min-height:21px}.c1104{height:21px}.s745{min-width:774px;width:774px;min-height:182px}.s746{min-width:768px;width:768px;min-height:58px;height:58px}.ps720{margin-left:8px;margin-top:4px}.s747{min-width:706px;width:706px;min-height:52px}.c1107{height:52px}.f229{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.f230{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.s748{min-width:768px;width:768px;min-height:59px}.ps722{margin-left:741px;margin-top:-167px}.s749{min-width:23px;width:23px;min-height:152px}.s750{min-width:21px;width:21px;min-height:33px}.c1110{height:33px}.ps723{margin-left:2px;margin-top:23px}.s751{min-width:21px;width:21px;min-height:34px}.c1111{height:34px}.ps724{margin-left:11px;margin-top:-118px}.s752{min-width:706px;width:706px;min-height:57px}.c1112{height:57px}.f231{font-size:12px;font-size:calc(12px * var(--f))}.f232{font-size:12px;font-size:calc(12px * var(--f))}.ps725{margin-left:11px;margin-top:-55px}.s753{min-width:706px;width:706px;min-height:50px}.c1113{height:50px}.ps726{margin-top:-1338px}.s754{min-width:768px;width:768px}.s755{min-width:768px;min-height:85px}.ps728{margin-top:14px}.s756{min-width:768px;width:768px;min-height:54px}.ps729{margin-left:10px}.s757{min-width:750px;width:750px;min-height:31px}.c1115{height:31px}.f233{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f234{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps730{margin-left:274px;margin-top:-3px}.s758{min-width:102px;width:102px;min-height:26px}.f235{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s759{width:102px;height:10px}.ps731{margin-left:16px;margin-top:-3px}.f236{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps733{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s760{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps695{margin-top:29px}.s716{min-width:480px;width:480px;min-height:153px}.ps696{margin-left:6px}.s717{min-width:464px;width:464px;min-height:153px}.s718{min-width:120px;width:120px;min-height:96px;height:96px}.i71{width:96px;height:96px}.ps698{margin-left:-25px;margin-top:19px}.s719{min-width:196px;width:196px;min-height:59px;height:59px}.i73{width:196px;height:59px}.ps699{margin-left:33px;margin-top:117px}.s720{min-width:140px;width:140px}.s721{width:140px}.ps700{margin-left:324px;margin-top:-143px}.s722{min-width:71px;width:71px;min-height:62px}.c1088{height:62px}.f219{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s723{height:37px;transform:scale(1.000) translateY(4px)}.ps701{margin-left:377px;margin-top:-150px}.s724{min-width:87px;width:87px;min-height:75px;height:75px}.i74{width:87px;height:32px;top:21px}.ps702{margin-top:-47px}.s725{min-width:480px;min-height:336px}.ps703{margin-top:-66px}.s726{min-width:480px;width:480px;min-height:230px}.ps704{margin-left:33px}.s727{min-width:447px;width:447px;min-height:230px}.ps705{margin-top:66px}.s728{min-width:414px;width:414px;min-height:164px}.c1091{height:164px}.f220{font-size:30px;font-size:calc(30px * var(--f))}.ps706{margin-left:-37px}.s729{min-width:70px;width:70px;min-height:66px}.c1092{height:66px}.f221{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s730{height:33px}.f222{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps707{margin-top:46px}.s731{min-width:480px;width:480px;min-height:861px}.ps708{margin-left:33px}.s732{min-width:414px;width:414px;min-height:354px}.s733{min-width:414px;width:414px;min-height:72px}.f223{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s734{width:414px;height:33px}.ps709{margin-left:0;margin-top:21px}.ps710{margin-left:0;margin-top:24px}.ps711{margin-left:0;margin-top:21px}.ps712{margin-left:14px;margin-top:20px}.s735{min-width:462px;width:462px;min-height:91px}.c1097{height:91px}.f224{font-size:21px;font-size:calc(21px * var(--f))}.ps713{margin-left:15px;margin-top:0}.s736{min-width:452px;width:452px;min-height:83px}.f225{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s737{width:452px;height:26px}.ps714{margin-left:15px;margin-top:24px}.s738{min-width:452px;width:452px;min-height:82px}.f226{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps715{margin-left:15px;margin-top:20px}.s739{min-width:452px;width:452px;min-height:82px}.f227{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps716{margin-left:15px;margin-top:18px}.s740{min-width:452px;width:452px;min-height:81px}.f228{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:27px}.c1102{width:max(480px, 100%);margin-top:21px;min-height:2370px}.s741{min-width:480px;width:480px;min-height:2370px}.s742{width:486px;min-height:2370px}.s743{min-width:486px;width:486px;min-height:563px}.ps718{margin-left:12px}.s744{min-width:462px;width:462px;min-height:39px}.c1104{height:39px}.s745{min-width:486px;width:486px;min-height:317px}.s746{min-width:480px;width:480px;min-height:102px;height:102px}.ps720{margin-left:6px;margin-top:6px}.s747{min-width:411px;width:411px;min-height:96px}.c1107{height:96px}.f229{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f230{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s748{min-width:480px;width:480px;min-height:107px}.ps722{margin-left:425px;margin-top:-294px}.s749{min-width:58px;width:58px;min-height:267px}.s750{min-width:58px;width:58px;min-height:63px}.c1110{height:63px}.ps723{margin-top:39px}.s751{min-width:58px;width:58px;min-height:63px}.c1111{height:63px}.ps724{margin-left:9px;margin-top:-206px}.s752{min-width:411px;width:411px;min-height:101px}.c1112{height:101px}.f231{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f232{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps725{margin-left:8px;margin-top:-99px}.s753{min-width:411px;width:411px;min-height:96px}.c1113{height:96px}.ps726{margin-top:-2437px}.s754{min-width:480px;width:480px}.s755{min-width:480px}.ps728{margin-top:8px}.s756{min-width:480px;width:480px;min-height:166px}.ps729{margin-left:17px}.s757{min-width:448px;width:448px;min-height:136px}.c1115{height:136px}.f233{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f234{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps730{margin-left:137px}.s758{min-width:99px;width:99px;min-height:30px}.f235{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s759{width:99px;height:18px}.ps731{margin-left:9px}.f236{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps733{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s760{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps695{margin-top:19px}.s716{min-width:320px;width:320px;min-height:102px}.ps696{margin-left:4px}.s717{min-width:309px;width:309px;min-height:102px}.s718{min-width:80px;width:80px;min-height:64px;height:64px}.i71{left:8px;width:64px;height:64px}.ps698{margin-left:-17px;margin-top:13px}.s719{min-width:131px;width:131px;min-height:39px;height:39px}.i73{width:131px;height:39px}.ps699{margin-left:22px;margin-top:78px}.s720{min-width:93px;width:93px;min-height:24px}.f218{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s721{width:93px;height:16px}.ps700{margin-left:216px;margin-top:-95px}.s722{min-width:47px;width:47px;min-height:41px}.c1088{height:41px}.f219{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s723{height:25px;transform:scale(1.000) translateY(3px)}.ps701{margin-left:251px;margin-top:-100px}.s724{min-width:58px;width:58px;min-height:50px;height:50px}.i74{width:58px;height:21px;top:15px}.ps702{margin-top:-31px}.s725{min-width:320px;min-height:224px}.ps703{margin-top:-44px}.s726{min-width:320px;width:320px;min-height:153px}.ps704{margin-left:22px}.s727{min-width:298px;width:298px;min-height:153px}.ps705{margin-top:44px}.s728{min-width:276px;width:276px;min-height:109px}.c1091{height:109px}.f220{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps706{margin-left:-25px}.s729{min-width:47px;width:47px;min-height:44px}.c1092{height:44px}.f221{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s730{height:22px;transform:scale(1.111) translateY(2px)}.f222{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps707{margin-top:31px}.s731{min-width:320px;width:320px;min-height:576px}.ps708{margin-left:22px}.s732{min-width:276px;width:276px;min-height:236px}.s733{min-width:276px;width:276px;min-height:48px}.f223{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s734{width:276px;height:23px}.ps709{margin-left:0;margin-top:14px}.ps710{margin-left:0;margin-top:16px}.ps711{margin-left:0;margin-top:14px}.ps712{margin-left:9px;margin-top:13px}.s735{min-width:308px;width:308px;min-height:61px}.c1097{height:61px}.f224{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps713{margin-left:10px;margin-top:0}.s736{min-width:301px;width:301px;min-height:55px}.f225{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s737{width:301px;height:17px}.ps714{margin-left:10px;margin-top:16px}.s738{min-width:301px;width:301px;min-height:55px}.f226{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps715{margin-left:10px;margin-top:13px}.s739{min-width:301px;width:301px;min-height:55px}.f227{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps716{margin-left:10px;margin-top:12px}.s740{min-width:301px;width:301px;min-height:54px}.f228{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:18px}.c1102{width:max(320px, 100%);margin-top:12px;min-height:1581px}.s741{min-width:320px;width:320px;min-height:1581px}.s742{width:326px;min-height:1581px}.s743{min-width:326px;width:326px;min-height:376px}.ps718{margin-left:9px}.s744{min-width:308px;width:308px;min-height:26px}.c1104{height:26px}.s745{min-width:326px;width:326px;min-height:213px}.s746{min-width:320px;width:320px;min-height:68px;height:68px}.ps720{margin-left:4px;margin-top:4px}.s747{min-width:274px;width:274px;min-height:64px}.c1107{height:64px}.f229{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f230{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s748{min-width:320px;width:320px;min-height:71px}.ps722{margin-left:284px;margin-top:-197px}.s749{min-width:39px;width:39px;min-height:178px}.s750{min-width:39px;width:39px;min-height:42px}.c1110{height:42px}.ps723{margin-top:26px}.s751{min-width:39px;width:39px;min-height:42px}.c1111{height:42px}.ps724{margin-left:7px;margin-top:-138px}.s752{min-width:274px;width:274px;min-height:67px}.c1112{height:67px}.f231{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f232{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps725{margin-left:6px;margin-top:-67px}.s753{min-width:274px;width:274px;min-height:64px}.c1113{height:64px}.ps726{margin-top:-1626px}.s754{min-width:320px;width:320px}.s755{min-width:320px;min-height:132px}.ps728{margin-top:5px}.s756{min-width:320px;width:320px;min-height:111px}.ps729{margin-left:11px}.s757{min-width:299px;width:299px;min-height:91px}.c1115{height:91px}.f233{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f234{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps730{margin-left:91px}.s758{min-width:66px;width:66px;min-height:20px}.f235{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s759{width:66px;height:12px}.ps731{margin-left:6px}.f236{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps733{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s760{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-640-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-640-46.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-112.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-113.php)}}@media (min-width:320px) {.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}.c1090{background-image:url(images/cirp-csi-2022-480-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-480-46.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}.c1090{background-image:url(images/cirp-csi-2022-960-80.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-114.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}.c1090{background-image:url(images/cirp-csi-2022-1440-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1440-17.php)}}@media (min-width:480px) {.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}.c1090{background-image:url(images/cirp-csi-2022-768-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-768-46.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1536-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1536-46.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}.c1090{background-image:url(images/cirp-csi-2022-2304-16.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2304-17.php)}}@media (min-width:768px) {.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}.c1090{background-image:url(images/cirp-csi-2022-960-81.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-960-90.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1920-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1920-46.php)}}@media (min-width:960px) {.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}.c1090{background-image:url(images/cirp-csi-2022-1200-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1200-46.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2400-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2400-46.php)}}@media (min-width:1200px) {.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}.c1090{background-image:url(images/cirp-csi-2022-1415-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-1415-40.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2830-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2830-40.php)}}@media (min-width:1600px) {.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}.c1090{background-image:url(images/cirp-csi-2022-2000-40.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2000-46.php)}}@media (min-width:2000px) {.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}.c1090{background-image:url(images/cirp-csi-2022-2131-34.php)}.webp .c1090{background-image:url(images/cirp-csi-2022-2131-40.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-2.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps695 v53 s716">
<div class="v54 ps696 s717 c1084">
<div class="v54 ps697 s718 c1085">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a13"><picture class="i72"><source srcset="images/transparentks-64-46.php 1x, images/transparentks-128-46.php 2x, images/transparentks-192-63.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-40.php 1x, images/transparentks-128-40.php 2x, images/transparentks-192-62.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-46.php 1x, images/transparentks-192-64.php 2x, images/transparentks-288-17.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-40.php 1x, images/transparentks-192-40.php 2x, images/transparentks-288-16.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-40.php 1x, images/transparentks-110-40.php 2x, images/transparentks-165-17.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-34.php 1x, images/transparentks-110-34.php 2x, images/transparentks-165-16.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-40.php 1x, images/transparentks-138-40.php 2x, images/transparentks-207-17.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-34.php 1x, images/transparentks-138-34.php 2x, images/transparentks-207-16.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-94.php 1x, images/transparentks-178-94.php 2x, images/transparentks-267-33.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-82.php 1x, images/transparentks-178-82.php 2x, images/transparentks-267-32.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-130.php 1x, images/transparentks-284-86.php 2x, images/transparentks-426-33.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-114.php 1x, images/transparentks-284-74.php 2x, images/transparentks-426-32.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-74.php" title="knowledge &amp; skills logo" alt="ks logo" class="un1146 i71"></picture></a>
<?php
    }
?>

</div>
<div class="v54 ps698 s719 c1086">
<picture class="i72">
<source srcset="images/k-stransparent-131-38.php 1x, images/k-stransparent-262-38.php 2x, images/k-stransparent-393-17.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-32.php 1x, images/k-stransparent-262-32.php 2x, images/k-stransparent-393-16.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-38.php 1x, images/k-stransparent-392-38.php 2x, images/k-stransparent-588-17.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-32.php 1x, images/k-stransparent-392-32.php 2x, images/k-stransparent-588-16.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-44.php 1x, images/k-stransparent-340-44.php 2x, images/k-stransparent-510-17.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-38.php 1x, images/k-stransparent-340-38.php 2x, images/k-stransparent-510-16.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-46.php 1x, images/k-stransparent-424-96.php 2x, images/k-stransparent-636-17.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-40.php 1x, images/k-stransparent-424-80.php 2x, images/k-stransparent-636-16.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-46.php 1x, images/k-stransparent-530-46.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-40.php 1x, images/k-stransparent-530-40.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-90.php 1x, images/k-stransparent-848-46.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-81.php 1x, images/k-stransparent-848-40.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-40.php" alt="Knowledge an Skills shared by talented engineers" class="un1147 i73">
</picture>
</div>
<div class="v54 ps699 s720 c1087">
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
<a href="./logout-415c8e.php" class="f218 btn248 v55 s721">Logout</a>
<?php
    }
?>

</div>
<div class="v54 ps700 s722 c1088">
<p class="p32 f219"><a href="cirpcsi2022.php"><x-svg class="s723"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v54 ps701 s724 c1089">
<a href="cirpcsi2022.php" class="a13"><picture class="i72"><source srcset="images/csi-logo-58-38.php 1x, images/csi-logo-116-38.php 2x, images/csi-logo-174-55.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-32.php 1x, images/csi-logo-116-32.php 2x, images/csi-logo-174-54.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-38.php 1x, images/csi-logo-174-56.php 2x, images/csi-logo-261-17.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-32.php 1x, images/csi-logo-174-32.php 2x, images/csi-logo-261-16.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-44.php 1x, images/csi-logo-108-44.php 2x, images/csi-logo-162-17.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-38.php 1x, images/csi-logo-108-38.php 2x, images/csi-logo-162-16.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-44.php 1x, images/csi-logo-136-92.php 2x, images/csi-logo-204-17.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-38.php 1x, images/csi-logo-136-76.php 2x, images/csi-logo-204-16.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-44.php 1x, images/csi-logo-170-44.php 2x, images/csi-logo-255-17.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-38.php 1x, images/csi-logo-170-38.php 2x, images/csi-logo-255-16.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-86.php 1x, images/csi-logo-272-44.php 2x, images/csi-logo-408-17.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-77.php 1x, images/csi-logo-272-38.php 2x, images/csi-logo-408-16.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-38.php" alt="cirp csi 2022" class="un1148 i74"></picture></a>
</div>
</div>
</div>
<div class="v54 ps702 s725 c1090"></div>
<div class="ps703 v53 s726">
<div class="v54 ps704 s727 c1084">
<div class="v54 ps705 s728 c1091">
<p class="p32 f220">6th CIRP Conference on Surface Integrity </p>
<p class="p32 f220">Day 2 presentations replay</p>
</div>
<div class="v54 ps706 s729 c1092">
<p class="p32 f221"><a href="cirpcsi2022.php"><x-svg class="s730"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p32 f222"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps707 v53 s731">
<div class="v54 ps708 s732 c1084">
<div class="v54 ps697 s733 c1093">
<a href="cirpcsi2022session2.php" class="f223 btn249 v55 s734">8:40 - 10:20 CET</a>
</div>
<div class="v54 ps709 s733 c1094">
<a href="#" class="f223 btn250 v55 s734">10:50 - 12:30 CET</a>
</div>
<div class="v54 ps710 s733 c1095">
<a href="cirpcsi2022session2-3.php" class="f223 btn251 v55 s734">14:45 - 16:45 CET</a>
</div>
<div class="v54 ps711 s733 c1096">
<a href="cirpcsi2022session2-4.php" class="f223 btn252 v55 s734">17:15 - 19:15 CET</a>
</div>
</div>
<div class="v54 ps712 s735 c1097">
<p class="p33 f224">Themes scheduled on Day 2 between 10:50 and 12:30 CET</p>
</div>
<div class="v54 ps713 s736 c1098">
<a href="#anchor1" class="f225 btn253 v55 s737">14- Cutting Processes &amp; Residual Stresses</a>
</div>
<div class="v54 ps714 s738 c1099">
<a href="#anchor2" class="f226 btn254 v55 s737">15- Additive Manufacturing</a>
</div>
<div class="v54 ps715 s739 c1100">
<a href="#anchor3" class="f227 btn255 v55 s737">16- Composite structures</a>
</div>
<div class="v54 ps716 s740 c1101">
<a href="#anchor4" class="f228 btn256 v55 s737">17- Cutting Processes &amp; Microstructure</a>
</div>
</div>
<div class="c1102">
<div class="ps717 v53 s741">
<div class="s742">
<div class="v54 ps697 s743 c1103">
<div class="v54 ps718 s744 c1104">
<p class="p33 f224">14- Cutting Processes &amp; Residual Stresses</p>
</div>
<div class="v54 ps719 s745 c1084">
<div class="v54 ps697 s745 w11">
<div class="v54 ps697 s745 c1105">
<div class="v54 ps697 s746 c1106">
<div class="v54 ps720 s747 c1107">
<p class="p33 f229">Effects of residual stresses on part distortion in machining of 7075-T6 aluminum alloy<br><span class="f230">Mohamed Ali Louhichi, Gerard Poulachon, Philippe Lorong, Jose Outeiro and Eric Monteiro</span></p>
</div>
</div>
<div class="v54 ps721 s748 c1108"></div>
<div class="v5 ps351 s488 c1042"></div>
</div>
<div class="v54 ps722 s749 c1109">
<div class="v54 ps697 s750 c1110">
<p class="p32 f219"><a onclick="pop&&pop.openPopup('popup103');return false" style="cursor:pointer;"><x-svg class="s723"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v54 ps723 s751 c1111">
<p class="p32 f219"><a onclick="pop&&pop.openPopup('popup104');return false" style="cursor:pointer;"><x-svg class="s723"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c871">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup105');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v54 ps724 s752 c1112">
<p class="p33 f231">Depth-resolved characterization of cryogenic hard turned surface layer of AISI 52100 by X-ray diffraction and scanning electron microscopy investigations<br><span class="f232">Werner Ankener, M. Smaga, J. Uebel, J. Seewig, F. Grossmanc, S. Basten, B. Kirsch, J. C. Aurich and Tilmann Beck</span></p>
</div>
<div class="v54 ps725 s753 c1113">
<p class="p33 f229">Investigation on surface integrity in laser-assisted machining of Inconel 718 based on in-situ observation<br><span class="f230">Hang Zhang, Rong Yan, Ben Deng, Jieyu Lin, Minghui Yang and Fangyu Peng</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c1043">
<div class="v5 ps33 s623 c1044"></div>
<div class="v5 ps351 s392 c1045"></div>
</div>
<div class="v5 ps671 s693 c374">
<div class="v5 ps33 s694 c1046">
<p class="p18 f188">Analysis of chip segmentation frequencies in turning Ti-6Al-4V for the prediction of residual stresses<br><span class="f189">Florian Pachnek, German Gonzalez, Daniel Diaz Ocampo, Michael Heizmann and Frederik Zanger</span></p>
</div>
<div class="v5 ps672 s695 c1047">
<p class="p18 f164">Thermoelectric monitoring of surface properties in turning of aluminum alloys applying different cooling strategies<br><span class="f165">Thomas Junge, Thomas Mehner, Andreas Nestler, Andreas Schubert and Thomas Lampke</span></p>
</div>
</div>
<div class="v5 ps673 s396 c873">
<div class="v5 ps33 s397 c874">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup106');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c508">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup107');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps358 s413 c380">
<div class="v5 ps359 s399 c875">
<p class="p18 f116">15- Additive Manufacturing</p>
</div>
<div class="v5 ps360 s484 c45">
<div class="v5 ps33 s484 w2">
<div class="v5 ps33 s484 c368">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c1048"></div>
<div class="v5 ps674 s696 c1049">
<p class="p18 f164">Effect of additive manufacturing process parameters on the titanium alloy microstructure, properties and surface integrity<br><span class="f165">Seyyed-Saeid Biriaie, Mohammed Nouari, Houssemeddine Ben Boubaker and Pascal Laheurte</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c1050"></div>
<div class="v5 ps351 s488 c1051"></div>
</div>
<div class="v5 ps447 s405 c880">
<div class="v5 ps33 s397 c881">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup108');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c882">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup109');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c883">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup110');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps675 s697 c1052">
<p class="p18 f164">Microstructure, texture and mechanical properties with raw surface states of Ti-6Al-4V parts built by L-PBF<br><span class="f165">Quentin Gaillard, Sophie Cazottes, Xavier Boulnat, Sylvain Dancette, Christophe Desrayaud</span></p>
</div>
<div class="v5 ps676 s698 c1053">
<p class="p18 f164">PIM-like EAM of steel-tool alloy via bio-based polymer<br><span class="f165">N. Charpentier, T. Barriere, F. Bernard, N. Boudeau, A. Gilbin and P. Vikner</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c526">
<div class="v5 ps33 s623 c1054"></div>
<div class="v5 ps351 s392 c1055"></div>
</div>
<div class="v5 ps677 s699 c888">
<div class="v5 ps33 s700 c1056">
<p class="p18 f190">Surface Feature Characteristics of Laser Powder Bed Fusion of Nickel Super Alloy 625 Bulk Regions <span class="f215">(not available in replay format)<br></span><span class="f191">Jason C. Fox, Aarush Sood, Romaine Isaacs, et al.</span></p>
</div>
<div class="v5 ps678 s701 c1057">
<p class="p18 f164">Understanding the Parameter Effects on Densification and Single Track Formation of Laser Powder Bed Fusion Inconel 939<br><span class="f165">Gokhan Dursun, Akin Orhangul, Ayca Urkmez and Guray Akbulut</span></p>
</div>
</div>
<div class="v5 ps679 s396 c891">
<div class="v5 ps33 s397 c528">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
<div class="v5 ps357 s387 c529">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup111');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps594 s121"></a>
<div class="v5 ps595 s413 c516">
<div class="v5 ps359 s399 c892">
<p class="p18 f116">16- Composite structures</p>
</div>
<div class="v5 ps360 s484 c45">
<div class="v5 ps33 s484 w2">
<div class="v5 ps33 s484 c893">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c1058"></div>
<div class="v5 ps680 s702 c1059">
<p class="p18 f169">Effect of Tool Geometry and LCO2 Cooling on Cutting Forces and Delamination when Drilling CFRP Composites Using PCD Tools<br><span class="f170">I. Rodriguez, D. Soriano, G. Ortiz-de-Zarate, M. Cuesta, F.Pušavec and P.J. Arrazola</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c1060"></div>
<div class="v5 ps351 s488 c1061"></div>
</div>
<div class="v5 ps447 s405 c898">
<div class="v5 ps33 s397 c899">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup112');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c900">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup113');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c901">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup114');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps681 s703 c1062">
<p class="p18 f169">Study of the surface integrity during CFRP trimming: Tool material and geometry, fiber orientation and tool wear effect analysis<br><span class="f170">Iker Urresti, Inigo Llanos, L.N. Lopez de Lacalle and Oier Zelaieta</span></p>
</div>
<div class="v5 ps682 s704 c1063">
<p class="p18 f164">Surface integrity quantification in machining of aluminum honeycomb structure<br><span class="f165">Hamid Makich, Mohammed Nouari and Mohamed Jaafar</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c351">
<div class="v5 ps33 s623 c1064"></div>
<div class="v5 ps351 s392 c1065"></div>
</div>
<div class="v5 ps683 s705 c906">
<div class="v5 ps33 s706 c1066">
<p class="p18 f164">Surface Quality in Dry Machining of CFRP Composite/Ti6Al4V Stack Laminate<br><span class="f165">Lhoucine Boutrih, Hamid Makich, Mohammed Nouari and Lanouar Ben Ayed</span></p>
</div>
<div class="v5 ps684 s707 c1067">
<p class="p18 f164">Hole quality analysis of AISI 304-GFRP stacks using robotic drilling<br><span class="f165">Thomas Beuscart, Pedro-Jose Arrazola, Edouard Riviere-Lorphevre, Paulo Flores and Francois Ducobu</span></p>
</div>
</div>
<div class="v5 ps685 s396 c909">
<div class="v5 ps33 s397 c549">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup115');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c550">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup116');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps531 s121"></a>
<div class="v5 ps602 s708 c538">
<div class="v5 ps359 s399 c910">
<p class="p18 f116">17- Cutting Processes &amp; Microstructure</p>
</div>
<div class="v5 ps360 s633 c45">
<div class="v5 ps33 s633 w2">
<div class="v5 ps33 s633 c911">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c1068"></div>
<div class="v5 ps686 s709 c1069">
<p class="p18 f194">An evaluation of non-destructive methods for detection of thermallyinduced metallurgical machining defects<br><span class="f195">Matthew Brown, David Curtis, Gary McKee and Pete Crawforth</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s487 c1070"></div>
<div class="v5 ps351 s488 c1071"></div>
</div>
<div class="v5 ps447 s405 c916">
<div class="v5 ps33 s397 c917">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup117');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c918">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup118');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c919">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup119');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps687 s710 c1072">
<p class="p18 f216">Setting of deformation-induced martensite content in cryogenic external longitudinal turning<br><span class="f217">Berend Denkena, Bernd Breidenstein, Marc-Andre Dittrich, Marcel Wichmann, Hai Nam Nguyen, Lara Vivian Fricke, David Zaremba and Sebastian Barton</span></p>
</div>
<div class="v5 ps688 s711 c1073">
<p class="p18 f164">Investigation of surface integrity on laser pre-heat assisted diamond turning of binderless tungsten carbide<br><span class="f165">Kaiyuan You, Guangyu Liu and Fengzhou Fang</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c922">
<div class="v5 ps33 s638 c1074"></div>
<div class="v5 ps351 s712 c1075"></div>
</div>
<div class="v5 ps689 s713 c331">
<div class="v5 ps33 s714 c1076">
<p class="p18 f164">Detecting material defects during turning of DA718 components<br><span class="f165">D. Pfirrmann and P. Wiederkehr</span></p>
</div>
<div class="v5 ps690 s715 c1077">
<p class="p18 f164">Investigation of the thermomechanical loads on the bore surface during single-lip deep hole drilling of steel components</p>
<p class="p18 f165">Jan Nickel, Nikolas Baak, Frank Walther and Dirk Biermann</p>
</div>
</div>
<div class="v5 ps691 s396 c926">
<div class="v5 ps33 s397 c927">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup120');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c928">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup121');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor4" class="v5 ps692 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v53 ps726 s754"></a>
<div class="btf ps693 v7 s419">
<div class="v5 ps611 s420 c1078">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps694 s49 c930">
<div class="v5 ps38 s50 c1079">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1296"><source data-srcset="images/transparentks-102-46.php 1x, images/transparentks-204-46.php 2x, images/transparentks-306-63.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-40.php 1x, images/transparentks-204-40.php 2x, images/transparentks-306-62.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-46.php 1x, images/transparentks-306-64.php 2x, images/transparentks-459-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-40.php 1x, images/transparentks-306-40.php 2x, images/transparentks-459-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-50.php 1x, images/transparentks-114-50.php 2x, images/transparentks-171-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-44.php 1x, images/transparentks-114-44.php 2x, images/transparentks-171-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-46.php 1x, images/transparentks-142-140.php 2x, images/transparentks-213-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-40.php 1x, images/transparentks-142-115.php 2x, images/transparentks-213-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-95.php 1x, images/transparentks-178-95.php 2x, images/transparentks-267-35.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-83.php 1x, images/transparentks-178-83.php 2x, images/transparentks-267-34.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-131.php 1x, images/transparentks-284-87.php 2x, images/transparentks-426-35.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-116.php 1x, images/transparentks-284-75.php 2x, images/transparentks-426-34.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-75.php" title="knowledge &amp; skills logo" alt="logo" class="un1149 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1297">
<source data-srcset="images/k-stransparent-110-46.php 1x, images/k-stransparent-220-46.php 2x, images/k-stransparent-330-63.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-40.php 1x, images/k-stransparent-220-40.php 2x, images/k-stransparent-330-62.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-46.php 1x, images/k-stransparent-330-64.php 2x, images/k-stransparent-495-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-40.php 1x, images/k-stransparent-330-40.php 2x, images/k-stransparent-495-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-44.php 1x, images/k-stransparent-340-44.php 2x, images/k-stransparent-510-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-38.php 1x, images/k-stransparent-340-38.php 2x, images/k-stransparent-510-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-46.php 1x, images/k-stransparent-424-96.php 2x, images/k-stransparent-636-17.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-40.php 1x, images/k-stransparent-424-80.php 2x, images/k-stransparent-636-16.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-46.php 1x, images/k-stransparent-530-46.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-40.php 1x, images/k-stransparent-530-40.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-90.php 1x, images/k-stransparent-848-46.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-81.php 1x, images/k-stransparent-848-40.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-40.php" alt="Knowledge an Skills shared by talented engineers" class="un1150 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c1080"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c1081"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c1082"></div>
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
<div class="v5 ps38 s69 c1083">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v56 ps727 s755 c1114">
<div class="ps728 v53 s756">
<div class="v54 ps729 s757 c1115">
<p class="p33 f233">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f234"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v54 ps730 s758 c1116">
<a href="javascript:void(0)" class="denyConsent f235 btn257 v55 s759">Refuse</a>
</div>
<div class="v54 ps731 s758 c1116">
<a href="javascript:void(0)" class="allowConsent f236 btn258 v55 s759">OK</a>
</div>
</div>
</div>
<div id="popup121" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps732">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1117">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c240">
<div class="player un1151 pl108">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S17-664.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c241">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c242">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c243">
<a onclick="pop&&pop.closePopup('popup121');return false" style="cursor:pointer;" class="f67 btn228 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup120" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps734">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1118">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c936">
<div class="player un1152 pl109">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S17-585.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c937">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c938">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c249">
<a onclick="pop&&pop.closePopup('popup120');return false" style="cursor:pointer;" class="f67 btn229 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup118" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps735">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1119">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c939">
<div class="player un1153 pl110">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S17-411.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c940">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c941">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c942">
<a onclick="pop&&pop.closePopup('popup118');return false" style="cursor:pointer;" class="f67 btn230 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup119" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps736">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1120">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c258">
<div class="player un1154 pl111">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S17-579.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c943">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c944">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c250">
<a onclick="pop&&pop.closePopup('popup119');return false" style="cursor:pointer;" class="f67 btn231 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup117" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps737">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1121">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c264">
<div class="player un1155 pl112">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S17-381.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c945">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c946">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c947">
<a onclick="pop&&pop.closePopup('popup117');return false" style="cursor:pointer;" class="f67 btn232 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup116" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps738">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1122">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c948">
<div class="player un1156 pl113">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-560.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c949">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c950">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c951">
<a onclick="pop&&pop.closePopup('popup116');return false" style="cursor:pointer;" class="f67 btn233 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup115" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps739">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1123">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c265">
<div class="player un1157 pl114">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-596.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c266">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c267">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c268">
<a onclick="pop&&pop.closePopup('popup115');return false" style="cursor:pointer;" class="f67 btn234 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup113" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps740">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1124">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c952">
<div class="player un1158 pl115">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-642.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c953">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c954">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c274">
<a onclick="pop&&pop.closePopup('popup113');return false" style="cursor:pointer;" class="f67 btn235 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup114" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps741">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1125">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c955">
<div class="player un1159 pl116">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-635.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c956">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c957">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c958">
<a onclick="pop&&pop.closePopup('popup114');return false" style="cursor:pointer;" class="f67 btn236 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup112" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps742">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1126">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c283">
<div class="player un1160 pl117">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-648.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c959">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c960">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c275">
<a onclick="pop&&pop.closePopup('popup112');return false" style="cursor:pointer;" class="f67 btn237 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup111" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps743">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1127">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c289">
<div class="player un1161 pl118">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-428.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c961">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c962">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c963">
<a onclick="pop&&pop.closePopup('popup111');return false" style="cursor:pointer;" class="f67 btn238 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup122" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps744">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1128">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c964">
<div class="player un1162 pl119">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-561.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c965">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c966">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c967">
<a onclick="pop&&pop.closePopup('popup122');return false" style="cursor:pointer;" class="f67 btn239 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup109" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps745">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1129">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c290">
<div class="player un1163 pl120">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-636.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c291">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c292">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c293">
<a onclick="pop&&pop.closePopup('popup109');return false" style="cursor:pointer;" class="f67 btn240 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup110" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps746">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1130">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c968">
<div class="player un1164 pl121">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-565.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c969">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c970">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c299">
<a onclick="pop&&pop.closePopup('popup110');return false" style="cursor:pointer;" class="f67 btn241 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup108" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps747">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1131">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c971">
<div class="player un1165 pl122">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-676.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c972">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c973">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c974">
<a onclick="pop&&pop.closePopup('popup108');return false" style="cursor:pointer;" class="f67 btn242 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup107" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps748">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1132">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c308">
<div class="player un1166 pl123">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-430.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c975">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c976">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c300">
<a onclick="pop&&pop.closePopup('popup107');return false" style="cursor:pointer;" class="f67 btn243 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup106" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps749">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1133">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c314">
<div class="player un1167 pl124">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-418.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c977">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c978">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c979">
<a onclick="pop&&pop.closePopup('popup106');return false" style="cursor:pointer;" class="f67 btn244 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup104" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps750">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1134">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c980">
<div class="player un1168 pl125">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-393.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c981">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c982">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c702">
<a onclick="pop&&pop.closePopup('popup104');return false" style="cursor:pointer;" class="f67 btn245 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup105" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps751">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1135">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c315">
<div class="player un1169 pl126">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-399.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c316">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c317">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c318">
<a onclick="pop&&pop.closePopup('popup105');return false" style="cursor:pointer;" class="f67 btn246 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup103" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps752">
<div onclick="event.stopPropagation()" class="popup v57 ps733 s760 c1136">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c983">
<div class="player un1170 pl127">
<video preload="metadata" poster="images/poster-3592-5.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-391.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c984">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c985">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c324">
<a onclick="pop&&pop.closePopup('popup103');return false" style="cursor:pointer;" class="f67 btn247 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session2-2.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>