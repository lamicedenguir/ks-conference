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
            $redirect = 'cirpcsi2022session2-4.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = 'E5E28EF9-A686-4D92-9D1B-CF050BD4FA8A';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-4.php';
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
<title>Day 2 sessions 17h15 to 19h15</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-4.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 2 sessions 17h15 to 19h15">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps896{position:relative;margin-top:0}.v63{display:block;vertical-align:top}.s886{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v64{display:inline-block;vertical-align:top}.ps897{position:relative;margin-left:0;margin-top:0}.s887{min-width:1920px;width:1920px;min-height:142px}.ps898{position:relative;margin-left:0;margin-top:0}.s888{min-width:165px;width:165px;min-height:142px;height:142px}.c1408{z-index:3;pointer-events:auto}.a15{display:block}.i79{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i80{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps899{position:relative;margin-left:-21px;margin-top:6px}.s889{min-width:424px;width:424px;min-height:130px;height:130px}.c1409{z-index:1;pointer-events:auto}.i81{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps900{position:relative;margin-left:1038px;margin-top:54px}.s890{min-width:84px;width:84px;min-height:36px}.c1410{z-index:22;pointer-events:auto}.f257{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn314{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn314:hover{background-color:#82939e;border-color:#000;color:#000}.btn314:active{background-color:#677a85;border-color:#000;color:#808080}.v65{display:inline-block;overflow:hidden;outline:0}.s891{width:84px;padding-right:0;height:24px}.ps901{position:relative;margin-left:10px;margin-top:30px}.s892{min-width:84px;width:84px;min-height:82px}.c1411{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p36{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f258{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s893{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps902{position:relative;margin-left:0;margin-top:21px}.s894{min-width:136px;width:136px;min-height:100px;height:100px}.c1412{z-index:18;pointer-events:auto}.i82{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps903{position:relative;margin-top:8px}.s895{width:100%;min-width:1920px;min-height:744px}.c1413{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-42.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c1413{background-image:url(images/cirp-csi-2022-320-48.php)}.ps904{position:relative;margin-top:60px}.s896{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps905{position:relative;margin-left:240px;margin-top:0}.s897{min-width:1600px;width:1600px;min-height:160px}.ps906{position:relative;margin-left:0;margin-top:0}.s898{min-width:1520px;width:1520px;min-height:160px}.c1414{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f259{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps907{position:relative;margin-left:-4px;margin-top:0}.s899{min-width:84px;width:84px;min-height:80px}.c1415{z-index:199;pointer-events:auto;overflow:hidden;height:80px}.f260{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s900{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f261{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps908{position:relative;margin-top:108px}.s901{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:525px}.ps909{position:relative;margin-left:260px;margin-top:0}.s902{min-width:1400px;width:1400px;min-height:70px}.s903{min-width:320px;width:320px;min-height:70px}.c1416{z-index:19;pointer-events:auto}.f262{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn315{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn315:hover{background-color:#82939e;border-color:#000;color:#000}.btn315:active{background-color:#677a85;border-color:#000;color:#808080}.s904{width:320px;padding-right:0;height:29px}.ps910{position:relative;margin-left:40px;margin-top:0}.c1417{z-index:24;pointer-events:auto}.btn316{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn316:hover{background-color:#82939e;border-color:#000;color:#000}.btn316:active{background-color:#677a85;border-color:#000;color:#808080}.ps911{position:relative;margin-left:40px;margin-top:0}.c1418{z-index:23;pointer-events:auto}.btn317{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn317:hover{background-color:#82939e;border-color:#000;color:#000}.btn317:active{background-color:#677a85;border-color:#000;color:#808080}.ps912{position:relative;margin-left:40px;margin-top:0}.c1419{z-index:25;pointer-events:auto}.btn318{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn318:hover{background-color:#82939e;border-color:#000;color:#000}.btn318:active{background-color:#677a85;border-color:#000;color:#808080}.ps913{position:relative;margin-left:55px;margin-top:47px}.s905{min-width:845px;width:845px;min-height:51px}.c1420{z-index:26;pointer-events:auto;overflow:hidden;height:51px}.p37{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f263{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps914{position:relative;margin-left:55px;margin-top:34px}.s906{min-width:1805px;width:1805px;min-height:63px}.c1421{z-index:27;pointer-events:auto}.f264{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn319{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn319:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn319:active{background-color:#677a85;border-color:#000;color:#fff}.s907{width:1805px;padding-right:0;height:34px}.ps915{position:relative;margin-left:55px;margin-top:22px}.s908{min-width:1805px;width:1805px;min-height:63px}.c1422{z-index:28;pointer-events:auto}.f265{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn320{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn320:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn320:active{background-color:#677a85;border-color:#000;color:#fff}.ps916{position:relative;margin-left:55px;margin-top:19px}.s909{min-width:1805px;width:1805px;min-height:63px}.c1423{z-index:29;pointer-events:auto}.f266{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn321{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn321:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn321:active{background-color:#677a85;border-color:#000;color:#fff}.s910{width:1805px;padding-right:0;height:34px}.ps917{position:relative;margin-left:55px;margin-top:24px}.s911{min-width:1805px;width:1805px;min-height:63px}.c1424{z-index:30;pointer-events:auto}.f267{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn322{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn322:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn322:active{background-color:#677a85;border-color:#000;color:#fff}.c1425{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:34px;min-height:3331px}.ps918{position:relative;margin-top:0}.s912{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3331px}.s913{width:1926px;margin-left:-3px;min-height:3331px}.s914{min-width:1926px;width:1926px;min-height:935px}.c1426{z-index:31}.w13{line-height:0}.s915{min-width:1926px;width:1926px;min-height:789px}.c1427{z-index:33}.ps919{position:relative;margin-left:58px;margin-top:0}.s916{min-width:600px;width:600px;min-height:51px}.c1428{z-index:34;pointer-events:auto;overflow:hidden;height:51px}.ps920{position:relative;margin-left:0;margin-top:-3px}.s917{min-width:1926px;width:1926px;min-height:447px}.c1429{z-index:35}.s918{min-width:1920px;width:1920px;min-height:147px;height:147px}.c1430{z-index:37;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps921{position:relative;margin-left:20px;margin-top:3px}.s919{min-width:1764px;width:1764px;min-height:142px}.c1431{z-index:38;pointer-events:auto;overflow:hidden;height:142px}.f268{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f269{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps922{position:relative;margin-left:0;margin-top:-6px}.s920{min-width:1920px;width:1920px;min-height:147px}.c1432{z-index:36;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps923{position:relative;margin-left:1843px;margin-top:-413px}.s921{min-width:54px;width:54px;min-height:380px}.c1433{z-index:40}.s922{min-width:54px;width:54px;min-height:86px}.c1434{z-index:49;pointer-events:auto;overflow:hidden;height:86px}.ps924{position:relative;margin-left:23px;margin-top:-297px}.s923{min-width:1800px;width:1800px;min-height:147px}.c1435{z-index:44;pointer-events:auto;overflow:hidden;height:147px}.f270{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f271{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#c32f2d;background-color:initial;text-shadow:none}.f272{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps925{position:relative;margin-left:0;margin-top:-7px}.s924{min-width:1926px;width:1926px;min-height:153px}.c1436{z-index:55}.c1437{z-index:56}.s925{min-width:1920px;width:1920px;min-height:147px;height:147px}.c1438{z-index:57;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps926{position:relative;margin-left:20px;margin-top:5px}.s926{min-width:1760px;width:1760px;min-height:142px}.c1439{z-index:58;pointer-events:auto;overflow:hidden;height:142px}.ps927{position:relative;margin-left:1843px;margin-top:-122px}.c1440{z-index:59;pointer-events:auto;overflow:hidden;height:86px}.ps928{position:relative;margin-left:0;margin-top:-3331px}.s927{min-width:1920px;width:1920px;min-height:1px}.v66{display:none;vertical-align:top}.s928{width:100%;min-width:1920px;min-height:198px}.c1441{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps930{position:relative;margin-top:34px}.s929{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps931{position:relative;margin-left:24px;margin-top:0}.s930{min-width:1876px;width:1876px;min-height:78px}.c1442{pointer-events:auto;overflow:hidden;height:78px}.f273{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f274{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps932{position:relative;margin-left:684px;margin-top:0}.s931{min-width:256px;width:256px;min-height:64px}.c1443{pointer-events:auto}.f275{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn323{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn323:hover{background-color:#82939e;border-color:#000;color:#000}.btn323:active{background-color:#181b28;border-color:#000;color:#808080}.s932{width:256px;padding-right:0;height:24px}.ps933{position:relative;margin-left:40px;margin-top:0}.f276{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn324{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn324:hover{background-color:#82939e;border-color:#000;color:#000}.btn324:active{background-color:#181b28;border-color:#000;color:#808080}.ps934{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435266;pointer-events:none;visibility:hidden;opacity:0}.v67{display:inline-block;vertical-align:top;pointer-events:auto}.ps935{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s933{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1444{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps936{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435261;pointer-events:none;visibility:hidden;opacity:0}.c1445{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps937{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435256;pointer-events:none;visibility:hidden;opacity:0}.c1446{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps938{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435251;pointer-events:none;visibility:hidden;opacity:0}.c1447{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps939{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435246;pointer-events:none;visibility:hidden;opacity:0}.c1448{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps940{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435241;pointer-events:none;visibility:hidden;opacity:0}.c1449{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps941{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435236;pointer-events:none;visibility:hidden;opacity:0}.c1450{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps942{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435231;pointer-events:none;visibility:hidden;opacity:0}.c1451{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps943{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435226;pointer-events:none;visibility:hidden;opacity:0}.c1452{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps944{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435221;pointer-events:none;visibility:hidden;opacity:0}.c1453{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps945{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435216;pointer-events:none;visibility:hidden;opacity:0}.c1454{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps946{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435211;pointer-events:none;visibility:hidden;opacity:0}.c1455{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps947{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435206;pointer-events:none;visibility:hidden;opacity:0}.c1456{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps948{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435201;pointer-events:none;visibility:hidden;opacity:0}.c1457{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps949{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435196;pointer-events:none;visibility:hidden;opacity:0}.c1458{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps950{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435191;pointer-events:none;visibility:hidden;opacity:0}.c1459{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps951{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435186;pointer-events:none;visibility:hidden;opacity:0}.c1460{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps952{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435181;pointer-events:none;visibility:hidden;opacity:0}.c1461{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps953{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435176;pointer-events:none;visibility:hidden;opacity:0}.c1462{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps954{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435171;pointer-events:none;visibility:hidden;opacity:0}.c1463{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps896{margin-top:4px}.s886{min-width:1200px;width:1200px;min-height:89px}.s887{min-width:1200px;width:1200px;min-height:89px}.s888{min-width:115px;width:115px;min-height:89px;height:89px}.i79{left:13px;width:89px;height:89px}.ps899{margin-left:-16px;margin-top:4px}.s889{min-width:265px;width:265px;min-height:81px;height:81px}.i81{width:265px;height:81px}.ps900{margin-left:640px;margin-top:30px}.s890{min-width:52px;width:52px;min-height:22px}.f257{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s891{width:52px;height:15px}.ps901{margin-left:7px;margin-top:15px}.s892{min-width:52px;width:52px;min-height:51px}.c1411{height:51px}.f258{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s893{height:30px;transform:scale(1.000) translateY(3px)}.ps902{margin-top:9px}.s894{min-width:85px;width:85px;min-height:63px;height:63px}.i82{width:85px;height:31px;top:16px}.ps903{margin-top:5px}.s895{min-width:1200px;min-height:494px}.ps904{margin-top:4px}.s896{min-width:1200px;width:1200px;min-height:116px}.ps905{margin-left:150px}.s897{min-width:999px;width:999px;min-height:116px}.s898{min-width:950px;width:950px;min-height:116px}.c1414{height:116px}.f259{font-size:30px;font-size:calc(30px * var(--f))}.ps907{margin-left:-3px}.s899{min-width:52px;width:52px;min-height:58px}.c1415{height:58px}.f260{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s900{height:27px;transform:scale(1.111) translateY(2px)}.f261{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps908{margin-top:49px}.s901{min-width:1200px;width:1200px;min-height:345px}.ps909{margin-left:164px}.s902{min-width:872px;width:872px;min-height:44px}.s903{min-width:200px;width:200px;min-height:44px}.f262{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s904{width:200px;height:18px}.ps910{margin-left:25px}.ps911{margin-left:25px}.ps912{margin-left:22px}.ps913{margin-left:34px;margin-top:53px}.s905{min-width:485px;width:485px;min-height:35px}.c1420{height:35px}.f263{font-size:18px;font-size:calc(18px * var(--f))}.ps914{margin-left:34px;margin-top:10px}.s906{min-width:1129px;width:1129px;min-height:39px}.f264{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s907{width:1129px;height:21px}.ps915{margin-left:34px;margin-top:13px}.s908{min-width:1129px;width:1129px;min-height:39px}.f265{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.ps916{margin-left:34px;margin-top:12px}.s909{min-width:1129px;width:1129px;min-height:40px}.f266{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.s910{width:1129px;height:21px}.ps917{margin-left:34px;margin-top:15px}.s911{min-width:1129px;width:1129px;min-height:39px}.f267{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c1425{width:max(1200px, 100%);margin-top:31px;min-height:2092px}.s912{min-width:1200px;width:1200px;min-height:2092px}.s913{width:1206px;min-height:2092px}.s914{min-width:1206px;width:1206px;min-height:587px}.s915{min-width:1206px;width:1206px;min-height:495px}.ps919{margin-left:37px}.s916{min-width:375px;width:375px;min-height:32px}.c1428{height:32px}.s917{min-width:1206px;width:1206px;min-height:282px}.s918{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps921{margin-left:12px;margin-top:2px}.s919{min-width:1095px;width:1095px;min-height:89px}.c1431{height:89px}.f268{font-size:18px;font-size:calc(18px * var(--f))}.f269{font-size:18px;font-size:calc(18px * var(--f))}.s920{min-width:1200px;width:1200px;min-height:92px}.ps923{margin-left:1149px;margin-top:-259px}.s921{min-width:33px;width:33px;min-height:237px}.s922{min-width:33px;width:33px;min-height:53px}.c1434{height:53px}.ps924{margin-left:15px;margin-top:-185px}.s923{min-width:1095px;width:1095px;min-height:88px}.c1435{height:88px}.f270{font-size:18px;font-size:calc(18px * var(--f))}.f271{font-size:18px;font-size:calc(18px * var(--f))}.f272{font-size:18px;font-size:calc(18px * var(--f))}.ps925{margin-top:-6px}.s924{min-width:1206px;width:1206px;min-height:98px}.s925{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps926{margin-left:12px;margin-top:0}.s926{min-width:1095px;width:1095px;min-height:92px}.c1439{height:92px}.ps927{margin-left:1149px;margin-top:-77px}.c1440{height:53px}.ps928{margin-top:-2092px}.s927{min-width:1200px;width:1200px}.s928{min-width:1200px;min-height:129px}.ps930{margin-top:21px}.s929{min-width:1200px;width:1200px;min-height:84px}.ps931{margin-left:15px}.s930{min-width:1172px;width:1172px;min-height:49px}.c1442{height:49px}.f273{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f274{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps932{margin-left:412px;margin-top:-5px}.s931{min-width:160px;width:160px;min-height:40px}.f275{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s932{width:160px;height:15px}.ps933{margin-left:55px;margin-top:-5px}.f276{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps935{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s933{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s886{min-width:960px;width:960px;min-height:71px}.s887{min-width:960px;width:960px;min-height:71px}.s888{min-width:69px;width:69px;min-height:71px;height:71px}.i79{left:0;width:69px;height:69px;top:1px}.ps899{margin-left:1px;margin-top:3px}.s889{min-width:212px;width:212px;min-height:65px;height:65px}.i81{width:212px;height:65px}.ps900{margin-left:521px;margin-top:27px}.s890{min-width:42px;width:42px;min-height:18px}.f257{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s891{width:42px;height:11px}.ps901{margin-left:5px;margin-top:15px}.s892{min-width:42px;width:42px;min-height:41px}.c1411{height:41px}.f258{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s893{height:24px;transform:scale(1.000) translateY(2px)}.ps902{margin-top:10px}.s894{min-width:68px;width:68px;min-height:51px;height:51px}.i82{width:68px;height:25px;top:13px}.ps903{margin-top:4px}.s895{min-width:960px;min-height:501px}.ps904{margin-top:0}.s896{min-width:960px;width:960px;min-height:92px}.ps905{margin-left:118px}.s897{min-width:802px;width:802px;min-height:92px}.s898{min-width:760px;width:760px;min-height:92px}.c1414{height:92px}.f259{font-size:24px;font-size:calc(24px * var(--f))}.ps907{margin-left:0}.s899{min-width:42px;width:42px;min-height:46px}.c1415{height:46px}.f260{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s900{height:22px;transform:scale(1.111) translateY(2px)}.f261{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps908{margin-top:6px}.s901{min-width:960px;width:960px;min-height:269px}.ps909{margin-left:130px}.s902{min-width:697px;width:697px;min-height:35px}.s903{min-width:160px;width:160px;min-height:35px}.f262{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s904{width:160px;height:15px}.ps910{margin-left:20px}.ps911{margin-left:20px}.ps912{margin-left:17px}.ps913{margin-left:27px;margin-top:36px}.s905{min-width:368px;width:368px;min-height:26px}.c1420{height:26px}.f263{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps914{margin-left:27px;margin-top:7px}.s906{min-width:903px;width:903px;min-height:31px}.f264{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s907{width:903px;height:16px}.ps915{margin-left:27px;margin-top:12px}.s908{min-width:903px;width:903px;min-height:31px}.f265{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.ps916{margin-left:27px;margin-top:10px}.s909{min-width:903px;width:903px;min-height:32px}.f266{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.s910{width:903px;height:16px}.ps917{margin-left:27px;margin-top:12px}.s911{min-width:903px;width:903px;min-height:31px}.f267{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c1425{width:max(960px, 100%);margin-top:21px;min-height:1674px}.s912{min-width:960px;width:960px;min-height:1674px}.s913{width:966px;min-height:1674px}.s914{min-width:966px;width:966px;min-height:471px}.s915{min-width:966px;width:966px;min-height:397px}.ps919{margin-left:30px}.s916{min-width:300px;width:300px;min-height:26px}.c1428{height:26px}.s917{min-width:966px;width:966px;min-height:227px}.s918{min-width:960px;width:960px;min-height:73px;height:73px}.ps921{margin-left:10px;margin-top:0}.s919{min-width:880px;width:880px;min-height:71px}.c1431{height:71px}.f268{font-size:15px;font-size:calc(15px * var(--f))}.f269{font-size:15px;font-size:calc(15px * var(--f))}.s920{min-width:960px;width:960px;min-height:74px}.ps923{margin-left:926px;margin-top:-209px}.s921{min-width:28px;width:28px;min-height:190px}.s922{min-width:26px;width:26px;min-height:42px}.c1434{height:42px}.ps924{margin-left:13px;margin-top:-149px}.s923{min-width:894px;width:894px;min-height:72px}.c1435{height:72px}.f270{font-size:15px;font-size:calc(15px * var(--f))}.f271{font-size:15px;font-size:calc(15px * var(--f))}.f272{font-size:15px;font-size:calc(15px * var(--f))}.ps925{margin-top:-6px}.s924{min-width:966px;width:966px;min-height:80px}.s925{min-width:960px;width:960px;min-height:74px;height:74px}.ps926{margin-left:10px;margin-top:0}.s926{min-width:894px;width:894px;min-height:71px}.c1439{height:71px}.ps927{margin-left:926px;margin-top:-61px}.c1440{height:42px}.ps928{margin-top:-1674px}.s927{min-width:960px;width:960px}.s928{min-width:960px;min-height:106px}.ps930{margin-top:17px}.s929{min-width:960px;width:960px;min-height:68px}.ps931{margin-left:12px}.s930{min-width:938px;width:938px;min-height:39px}.c1442{height:39px}.f273{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f274{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps932{margin-left:342px;margin-top:-3px}.s931{min-width:128px;width:128px;min-height:32px}.f275{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s932{width:128px;height:12px}.ps933{margin-left:20px;margin-top:-3px}.f276{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps935{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s933{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s886{min-width:768px;width:768px;min-height:57px}.s887{min-width:768px;width:768px;min-height:57px}.s888{min-width:55px;width:55px;min-height:57px;height:57px}.i79{left:0;width:55px;height:55px;top:1px}.ps899{margin-left:1px;margin-top:2px}.s889{min-width:170px;width:170px;min-height:52px;height:52px}.i81{width:170px;height:52px}.ps900{margin-left:416px;margin-top:22px}.s890{min-width:34px;width:34px;min-height:14px}.f257{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s891{width:34px;height:9px}.ps901{margin-left:4px;margin-top:12px}.s892{min-width:34px;width:34px;min-height:33px}.c1411{height:33px}.f258{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s893{height:19px;transform:scale(1.000) translateY(2px)}.ps902{margin-top:8px}.s894{min-width:54px;width:54px;min-height:41px;height:41px}.i82{width:54px;height:20px;top:10px}.ps903{margin-top:3px}.s895{min-width:768px;min-height:401px}.ps904{margin-top:0}.s896{min-width:768px;width:768px;min-height:73px}.ps905{margin-left:94px}.s897{min-width:642px;width:642px;min-height:73px}.s898{min-width:608px;width:608px;min-height:73px}.c1414{height:73px}.f259{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps907{margin-left:0}.s899{min-width:34px;width:34px;min-height:37px}.c1415{height:37px}.f260{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s900{height:17px;transform:scale(1.111) translateY(2px)}.f261{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps908{margin-top:5px}.s901{min-width:768px;width:768px;min-height:217px}.ps909{margin-left:104px}.s902{min-width:558px;width:558px;min-height:28px}.s903{min-width:128px;width:128px;min-height:28px}.f262{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s904{width:128px;height:11px}.ps910{margin-left:16px}.ps911{margin-left:16px}.ps912{margin-left:14px}.ps913{margin-left:22px;margin-top:29px}.s905{min-width:294px;width:294px;min-height:21px}.c1420{height:21px}.f263{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps914{margin-left:22px;margin-top:5px}.s906{min-width:722px;width:722px;min-height:25px}.f264{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s907{width:722px;height:12px}.ps915{margin-left:22px;margin-top:10px}.s908{min-width:722px;width:722px;min-height:25px}.f265{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps916{margin-left:22px;margin-top:8px}.s909{min-width:722px;width:722px;min-height:25px}.f266{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s910{width:722px;height:12px}.ps917{margin-left:22px;margin-top:10px}.s911{min-width:722px;width:722px;min-height:25px}.f267{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1425{width:max(768px, 100%);margin-top:15px;min-height:1340px}.s912{min-width:768px;width:768px;min-height:1340px}.s913{width:774px;min-height:1340px}.s914{min-width:774px;width:774px;min-height:378px}.s915{min-width:774px;width:774px;min-height:318px}.ps919{margin-left:25px}.s916{min-width:240px;width:240px;min-height:21px}.c1428{height:21px}.s917{min-width:774px;width:774px;min-height:183px}.s918{min-width:768px;width:768px;min-height:58px;height:58px}.ps921{margin-left:8px;margin-top:0}.s919{min-width:704px;width:704px;min-height:57px}.c1431{height:57px}.f268{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f269{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.s920{min-width:768px;width:768px;min-height:60px}.ps923{margin-left:741px;margin-top:-168px}.s921{min-width:23px;width:23px;min-height:152px}.s922{min-width:21px;width:21px;min-height:34px}.c1434{height:34px}.ps924{margin-left:11px;margin-top:-120px}.s923{min-width:715px;width:715px;min-height:58px}.c1435{height:58px}.f270{font-size:12px;font-size:calc(12px * var(--f))}.f271{font-size:12px;font-size:calc(12px * var(--f))}.f272{font-size:12px;font-size:calc(12px * var(--f))}.ps925{margin-top:-6px}.s924{min-width:774px;width:774px;min-height:66px}.s925{min-width:768px;width:768px;min-height:60px;height:60px}.ps926{margin-left:8px;margin-top:0}.s926{min-width:715px;width:715px;min-height:57px}.c1439{height:57px}.ps927{margin-left:741px;margin-top:-50px}.c1440{height:34px}.ps928{margin-top:-1340px}.s927{min-width:768px;width:768px}.s928{min-width:768px;min-height:85px}.ps930{margin-top:14px}.s929{min-width:768px;width:768px;min-height:54px}.ps931{margin-left:10px}.s930{min-width:750px;width:750px;min-height:31px}.c1442{height:31px}.f273{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f274{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps932{margin-left:274px;margin-top:-3px}.s931{min-width:102px;width:102px;min-height:26px}.f275{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s932{width:102px;height:10px}.ps933{margin-left:16px;margin-top:-3px}.f276{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps935{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s933{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps896{margin-top:29px}.s886{min-width:480px;width:480px;min-height:153px}.ps897{margin-left:6px}.s887{min-width:464px;width:464px;min-height:153px}.s888{min-width:120px;width:120px;min-height:96px;height:96px}.i79{width:96px;height:96px}.ps899{margin-left:-25px;margin-top:19px}.s889{min-width:196px;width:196px;min-height:59px;height:59px}.i81{width:196px;height:59px}.ps900{margin-left:33px;margin-top:117px}.s890{min-width:140px;width:140px}.s891{width:140px}.ps901{margin-left:324px;margin-top:-143px}.s892{min-width:71px;width:71px;min-height:62px}.c1411{height:62px}.f258{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s893{height:37px;transform:scale(1.000) translateY(4px)}.ps902{margin-left:377px;margin-top:-150px}.s894{min-width:87px;width:87px;min-height:75px;height:75px}.i82{width:87px;height:32px;top:21px}.ps903{margin-top:-47px}.s895{min-width:480px;min-height:336px}.ps904{margin-top:-66px}.s896{min-width:480px;width:480px;min-height:230px}.ps905{margin-left:33px}.s897{min-width:447px;width:447px;min-height:230px}.ps906{margin-top:66px}.s898{min-width:414px;width:414px;min-height:164px}.c1414{height:164px}.f259{font-size:30px;font-size:calc(30px * var(--f))}.ps907{margin-left:-37px}.s899{min-width:70px;width:70px;min-height:66px}.c1415{height:66px}.f260{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s900{height:33px}.f261{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps908{margin-top:46px}.s901{min-width:480px;width:480px;min-height:861px}.ps909{margin-left:33px}.s902{min-width:414px;width:414px;min-height:354px}.s903{min-width:414px;width:414px;min-height:72px}.f262{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s904{width:414px;height:33px}.ps910{margin-left:0;margin-top:21px}.ps911{margin-left:0;margin-top:24px}.ps912{margin-left:0;margin-top:21px}.ps913{margin-left:14px;margin-top:20px}.s905{min-width:462px;width:462px;min-height:91px}.c1420{height:91px}.f263{font-size:21px;font-size:calc(21px * var(--f))}.ps914{margin-left:15px;margin-top:0}.s906{min-width:452px;width:452px;min-height:83px}.f264{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s907{width:452px;height:26px}.ps915{margin-left:15px;margin-top:24px}.s908{min-width:452px;width:452px;min-height:82px}.f265{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps916{margin-left:15px;margin-top:20px}.s909{min-width:452px;width:452px;min-height:82px}.f266{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-bottom:15px}.s910{width:452px;height:52px}.ps917{margin-left:15px;margin-top:18px}.s911{min-width:452px;width:452px;min-height:81px}.f267{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:27px}.c1425{width:max(480px, 100%);margin-top:21px;min-height:2459px}.s912{min-width:480px;width:480px;min-height:2459px}.s913{width:486px;min-height:2459px}.s914{min-width:486px;width:486px;min-height:669px}.s915{min-width:486px;width:486px;min-height:563px}.ps919{margin-left:12px}.s916{min-width:462px;width:462px;min-height:39px}.c1428{height:39px}.s917{min-width:486px;width:486px;min-height:317px}.s918{min-width:480px;width:480px;min-height:102px;height:102px}.ps921{margin-left:5px;margin-top:5px}.s919{min-width:417px;width:417px;min-height:97px}.c1431{height:97px}.f268{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f269{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s920{min-width:480px;width:480px;min-height:107px}.ps923{margin-left:425px;margin-top:-294px}.s921{min-width:58px;width:58px;min-height:267px}.s922{min-width:58px;width:58px;min-height:63px}.c1434{height:63px}.ps924{margin-left:9px;margin-top:-201px}.s923{min-width:416px;width:416px;min-height:91px}.c1435{height:91px}.f270{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f271{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f272{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps925{margin-top:-6px}.s924{min-width:486px;width:486px;min-height:112px}.s925{min-width:480px;width:480px;min-height:106px;height:106px}.ps926{margin-left:5px;margin-top:4px}.s926{min-width:417px;width:417px;min-height:102px}.c1439{height:102px}.ps927{margin-left:425px;margin-top:-90px}.c1440{height:63px}.ps928{margin-top:-2526px}.s927{min-width:480px;width:480px}.s928{min-width:480px}.ps930{margin-top:8px}.s929{min-width:480px;width:480px;min-height:166px}.ps931{margin-left:17px}.s930{min-width:448px;width:448px;min-height:136px}.c1442{height:136px}.f273{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f274{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps932{margin-left:137px}.s931{min-width:99px;width:99px;min-height:30px}.f275{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s932{width:99px;height:18px}.ps933{margin-left:9px}.f276{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps935{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s933{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps896{margin-top:19px}.s886{min-width:320px;width:320px;min-height:102px}.ps897{margin-left:4px}.s887{min-width:309px;width:309px;min-height:102px}.s888{min-width:80px;width:80px;min-height:64px;height:64px}.i79{left:8px;width:64px;height:64px}.ps899{margin-left:-17px;margin-top:13px}.s889{min-width:131px;width:131px;min-height:39px;height:39px}.i81{width:131px;height:39px}.ps900{margin-left:22px;margin-top:78px}.s890{min-width:93px;width:93px;min-height:24px}.f257{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s891{width:93px;height:16px}.ps901{margin-left:216px;margin-top:-95px}.s892{min-width:47px;width:47px;min-height:41px}.c1411{height:41px}.f258{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s893{height:25px;transform:scale(1.000) translateY(3px)}.ps902{margin-left:251px;margin-top:-100px}.s894{min-width:58px;width:58px;min-height:50px;height:50px}.i82{width:58px;height:21px;top:15px}.ps903{margin-top:-31px}.s895{min-width:320px;min-height:224px}.ps904{margin-top:-44px}.s896{min-width:320px;width:320px;min-height:153px}.ps905{margin-left:22px}.s897{min-width:298px;width:298px;min-height:153px}.ps906{margin-top:44px}.s898{min-width:276px;width:276px;min-height:109px}.c1414{height:109px}.f259{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps907{margin-left:-25px}.s899{min-width:47px;width:47px;min-height:44px}.c1415{height:44px}.f260{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s900{height:22px;transform:scale(1.111) translateY(2px)}.f261{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps908{margin-top:31px}.s901{min-width:320px;width:320px;min-height:576px}.ps909{margin-left:22px}.s902{min-width:276px;width:276px;min-height:236px}.s903{min-width:276px;width:276px;min-height:48px}.f262{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s904{width:276px;height:23px}.ps910{margin-left:0;margin-top:14px}.ps911{margin-left:0;margin-top:16px}.ps912{margin-left:0;margin-top:14px}.ps913{margin-left:9px;margin-top:13px}.s905{min-width:308px;width:308px;min-height:61px}.c1420{height:61px}.f263{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps914{margin-left:10px;margin-top:0}.s906{min-width:301px;width:301px;min-height:55px}.f264{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s907{width:301px;height:17px}.ps915{margin-left:10px;margin-top:16px}.s908{min-width:301px;width:301px;min-height:55px}.f265{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps916{margin-left:10px;margin-top:13px}.s909{min-width:301px;width:301px;min-height:55px}.f266{font-size:14px;font-size:calc(14px * var(--f));padding-top:11px;padding-bottom:10px}.s910{width:301px}.ps917{margin-left:10px;margin-top:12px}.s911{min-width:301px;width:301px;min-height:54px}.f267{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:18px}.c1425{width:max(320px, 100%);margin-top:12px;min-height:1640px}.s912{min-width:320px;width:320px;min-height:1640px}.s913{width:326px;min-height:1640px}.s914{min-width:326px;width:326px;min-height:447px}.s915{min-width:326px;width:326px;min-height:376px}.ps919{margin-left:9px}.s916{min-width:308px;width:308px;min-height:26px}.c1428{height:26px}.s917{min-width:326px;width:326px;min-height:213px}.s918{min-width:320px;width:320px;min-height:68px;height:68px}.ps921{margin-left:3px}.s919{min-width:278px;width:278px;min-height:65px}.c1431{height:65px}.f268{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f269{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s920{min-width:320px;width:320px;min-height:71px}.ps923{margin-left:284px;margin-top:-197px}.s921{min-width:39px;width:39px;min-height:178px}.s922{min-width:39px;width:39px;min-height:42px}.c1434{height:42px}.ps924{margin-left:7px;margin-top:-135px}.s923{min-width:277px;width:277px;min-height:61px}.c1435{height:61px}.f270{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f271{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f272{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps925{margin-top:-6px}.s924{min-width:326px;width:326px;min-height:77px}.s925{min-width:320px;width:320px;min-height:71px;height:71px}.ps926{margin-left:3px;margin-top:3px}.s926{min-width:278px;width:278px;min-height:68px}.c1439{height:68px}.ps927{margin-left:284px;margin-top:-61px}.c1440{height:42px}.ps928{margin-top:-1685px}.s927{min-width:320px;width:320px}.s928{min-width:320px;min-height:132px}.ps930{margin-top:5px}.s929{min-width:320px;width:320px;min-height:111px}.ps931{margin-left:11px}.s930{min-width:299px;width:299px;min-height:91px}.c1442{height:91px}.f273{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f274{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps932{margin-left:91px}.s931{min-width:66px;width:66px;min-height:20px}.f275{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s932{width:66px;height:12px}.ps933{margin-left:6px}.f276{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps935{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s933{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-640-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-640-48.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-118.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-119.php)}}@media (min-width:320px) {.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}.c1413{background-image:url(images/cirp-csi-2022-480-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-480-48.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}.c1413{background-image:url(images/cirp-csi-2022-960-84.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-120.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}.c1413{background-image:url(images/cirp-csi-2022-1440-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1440-21.php)}}@media (min-width:480px) {.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}.c1413{background-image:url(images/cirp-csi-2022-768-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-768-48.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1536-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1536-48.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}.c1413{background-image:url(images/cirp-csi-2022-2304-20.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2304-21.php)}}@media (min-width:768px) {.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}.c1413{background-image:url(images/cirp-csi-2022-960-85.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-960-92.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1920-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1920-48.php)}}@media (min-width:960px) {.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}.c1413{background-image:url(images/cirp-csi-2022-1200-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1200-48.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2400-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2400-48.php)}}@media (min-width:1200px) {.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}.c1413{background-image:url(images/cirp-csi-2022-1415-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-1415-42.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2830-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2830-42.php)}}@media (min-width:1600px) {.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}.c1413{background-image:url(images/cirp-csi-2022-2000-42.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2000-48.php)}}@media (min-width:2000px) {.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}.c1413{background-image:url(images/cirp-csi-2022-2131-36.php)}.webp .c1413{background-image:url(images/cirp-csi-2022-2131-42.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-4.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps896 v63 s886">
<div class="v64 ps897 s887 c1407">
<div class="v64 ps898 s888 c1408">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a15"><picture class="i80"><source srcset="images/transparentks-64-48.php 1x, images/transparentks-128-48.php 2x, images/transparentks-192-69.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-42.php 1x, images/transparentks-128-42.php 2x, images/transparentks-192-68.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-48.php 1x, images/transparentks-192-70.php 2x, images/transparentks-288-21.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-42.php 1x, images/transparentks-192-42.php 2x, images/transparentks-288-20.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-42.php 1x, images/transparentks-110-42.php 2x, images/transparentks-165-21.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-36.php 1x, images/transparentks-110-36.php 2x, images/transparentks-165-20.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-42.php 1x, images/transparentks-138-42.php 2x, images/transparentks-207-21.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-36.php 1x, images/transparentks-138-36.php 2x, images/transparentks-207-20.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-98.php 1x, images/transparentks-178-98.php 2x, images/transparentks-267-41.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-86.php 1x, images/transparentks-178-86.php 2x, images/transparentks-267-40.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-134.php 1x, images/transparentks-284-90.php 2x, images/transparentks-426-41.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-120.php 1x, images/transparentks-284-78.php 2x, images/transparentks-426-40.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-78.php" title="knowledge &amp; skills logo" alt="ks logo" class="un1474 i79"></picture></a>
<?php
    }
?>

</div>
<div class="v64 ps899 s889 c1409">
<picture class="i80">
<source srcset="images/k-stransparent-131-40.php 1x, images/k-stransparent-262-40.php 2x, images/k-stransparent-393-21.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-34.php 1x, images/k-stransparent-262-34.php 2x, images/k-stransparent-393-20.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-40.php 1x, images/k-stransparent-392-40.php 2x, images/k-stransparent-588-21.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-34.php 1x, images/k-stransparent-392-34.php 2x, images/k-stransparent-588-20.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-46.php 1x, images/k-stransparent-340-46.php 2x, images/k-stransparent-510-21.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-40.php 1x, images/k-stransparent-340-40.php 2x, images/k-stransparent-510-20.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-48.php 1x, images/k-stransparent-424-98.php 2x, images/k-stransparent-636-21.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-42.php 1x, images/k-stransparent-424-84.php 2x, images/k-stransparent-636-20.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-48.php 1x, images/k-stransparent-530-48.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-42.php 1x, images/k-stransparent-530-42.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-92.php 1x, images/k-stransparent-848-48.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-85.php 1x, images/k-stransparent-848-42.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-42.php" alt="Knowledge an Skills shared by talented engineers" class="un1475 i81">
</picture>
</div>
<div class="v64 ps900 s890 c1410">
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
<a href="./logout-415c8e.php" class="f257 btn314 v65 s891">Logout</a>
<?php
    }
?>

</div>
<div class="v64 ps901 s892 c1411">
<p class="p36 f258"><a href="cirpcsi2022.php"><x-svg class="s893"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v64 ps902 s894 c1412">
<a href="cirpcsi2022.php" class="a15"><picture class="i80"><source srcset="images/csi-logo-58-40.php 1x, images/csi-logo-116-40.php 2x, images/csi-logo-174-61.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-34.php 1x, images/csi-logo-116-34.php 2x, images/csi-logo-174-60.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-40.php 1x, images/csi-logo-174-62.php 2x, images/csi-logo-261-21.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-34.php 1x, images/csi-logo-174-34.php 2x, images/csi-logo-261-20.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-46.php 1x, images/csi-logo-108-46.php 2x, images/csi-logo-162-21.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-40.php 1x, images/csi-logo-108-40.php 2x, images/csi-logo-162-20.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-46.php 1x, images/csi-logo-136-94.php 2x, images/csi-logo-204-21.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-40.php 1x, images/csi-logo-136-80.php 2x, images/csi-logo-204-20.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-46.php 1x, images/csi-logo-170-46.php 2x, images/csi-logo-255-21.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-40.php 1x, images/csi-logo-170-40.php 2x, images/csi-logo-255-20.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-88.php 1x, images/csi-logo-272-46.php 2x, images/csi-logo-408-21.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-81.php 1x, images/csi-logo-272-40.php 2x, images/csi-logo-408-20.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-40.php" alt="cirp csi 2022" class="un1476 i82"></picture></a>
</div>
</div>
</div>
<div class="v64 ps903 s895 c1413"></div>
<div class="ps904 v63 s896">
<div class="v64 ps905 s897 c1407">
<div class="v64 ps906 s898 c1414">
<p class="p36 f259">6th CIRP Conference on Surface Integrity </p>
<p class="p36 f259">Day 2 presentations replay</p>
</div>
<div class="v64 ps907 s899 c1415">
<p class="p36 f260"><a href="cirpcsi2022.php"><x-svg class="s900"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p36 f261"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps908 v63 s901">
<div class="v64 ps909 s902 c1407">
<div class="v64 ps898 s903 c1416">
<a href="cirpcsi2022session2.php" class="f262 btn315 v65 s904">8:40 - 10:20 CET</a>
</div>
<div class="v64 ps910 s903 c1417">
<a href="cirpcsi2022session2-2.php" class="f262 btn316 v65 s904">10:50 - 12:30 CET</a>
</div>
<div class="v64 ps911 s903 c1418">
<a href="cirpcsi2022session2-3.php" class="f262 btn317 v65 s904">14:45 - 16:45 CET</a>
</div>
<div class="v64 ps912 s903 c1419">
<a href="#" class="f262 btn318 v65 s904">17:15 - 19:15 CET</a>
</div>
</div>
<div class="v64 ps913 s905 c1420">
<p class="p37 f263">Themes scheduled on Day 2 between 17:15 and 19:15 CET</p>
</div>
<div class="v64 ps914 s906 c1421">
<a href="#anchor1" class="f264 btn319 v65 s907">22- Cutting Processes &amp; Residual Stresses</a>
</div>
<div class="v64 ps915 s908 c1422">
<a href="#anchor2" class="f265 btn320 v65 s907">23- Additive Manufacturing</a>
</div>
<div class="v64 ps916 s909 c1423">
<a href="#anchor3" class="f266 btn321 v65 s910">24- Surface mechanical treatments / Abrasive processes</a>
</div>
<div class="v64 ps917 s911 c1424">
<a href="#anchor4" class="f267 btn322 v65 s907">25- Surface Integrity &amp; Functional Properties</a>
</div>
</div>
<div class="c1425">
<div class="ps918 v63 s912">
<div class="s913">
<div class="v64 ps898 s914 c1426">
<div class="v64 ps898 s914 c1407">
<div class="v64 ps898 s914 w13">
<div class="v64 ps898 s915 c1427">
<div class="v64 ps919 s916 c1428">
<p class="p37 f263">22- Cutting Processes &amp; Residual Stresses</p>
</div>
<div class="v64 ps920 s917 c1407">
<div class="v64 ps898 s917 w13">
<div class="v64 ps898 s917 c1429">
<div class="v64 ps898 s918 c1430">
<div class="v64 ps921 s919 c1431">
<p class="p37 f268">Empirical modeling of residual stress profiles in Ti6Al4V after face-milling<br><span class="f269">Ainhoa Robles, Maria Aurrekoetxea, Soraya Plaza, Inigo Llanos and Oier Zelaieta</span></p>
</div>
</div>
<div class="v64 ps922 s920 c1432"></div>
<div class="v5 ps351 s488 c1332"></div>
</div>
<div class="v64 ps923 s921 c1433">
<div class="v64 ps898 s922 c1434">
<p class="p36 f258"><a onclick="pop&&pop.openPopup('popup147');return false" style="cursor:pointer;"><x-svg class="s893"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s397 c775">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
<div class="v5 ps352 s387 c776">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup148');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v64 ps924 s923 c1435">
<p class="p37 f270">Investigation of residual stresses and workpiece distortion during high-feed milling of slender stainless steel components <span class="f271">(not available in replay format)<br></span><span class="f272">Hui Liu, Daniel Schraknepper and Thomas Bergs</span></p>
</div>
<div class="v5 ps866 s856 c1333">
<p class="p18 f164">Influence of the reaming process on hole’s surface integrity and geometry<br><span class="f165">T.Leveille, F.Valiorgue, C.Claudin, J.Rech, A.Van-Robaeys, U.Masciantonio, A.Brosse and T.Dorlin</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s390 c45">
<div class="v5 ps33 s390 w2">
<div class="v5 ps33 s390 c510">
<div class="v5 ps33 s391 c1334"></div>
<div class="v5 ps351 s392 c1335"></div>
</div>
<div class="v5 ps867 s857 c101">
<div class="v5 ps116 s858 c1336">
<p class="p18 f164">Influence of lubrication mode onto residual stress generation in turning<br><span class="f165">E. Chaize, F. Dumont, B. Truffart, M. Girinon, A. Brosse, T. Dorlin, F. Valiorgue  and J. Rech</span></p>
</div>
<div class="v5 ps868 s775 c557">
<p class="p18 f164">Experimental analysis of the impact of a simplified tool wear on the residual stresses induced by 15-5PH steel turning<br><span class="f165">F.Clavier, F.Valiorgue, C.Courbon, J.Rech, H.Pascal, A.Van Robaeys, Y.Chen, J.Kolmacka and H.Karaouni</span></p>
</div>
</div>
<div class="v5 ps869 s396 c106">
<div class="v5 ps33 s387 c508">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup149');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c1198">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup150');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v64 ps925 s924 c1436">
<div class="v64 ps898 s924 c1437">
<div class="v64 ps898 s925 c1438">
<div class="v64 ps926 s926 c1439">
<p class="p37 f268">Experimental investigation on surface integrity in a face milling operation<br><span class="f269">T. Perard, F Valiorgue, C. Mehmet, J. Rech, M. Dumas, F. Lefebvre, J. Kolmacka and T. Dorlin</span></p>
</div>
</div>
</div>
<div class="v64 ps927 s922 c1440">
<p class="p36 f258"><a onclick="pop&&pop.openPopup('popup151');return false" style="cursor:pointer;"><x-svg class="s893"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps760 s859 c380">
<div class="v5 ps359 s399 c1337">
<p class="p18 f116">23- Additive Manufacturing</p>
</div>
<div class="v5 ps360 s484 c45">
<div class="v5 ps33 s484 w2">
<div class="v5 ps33 s484 c366">
<div class="v5 ps33 s485 c45">
<div class="v5 ps33 s485 w2">
<div class="v5 ps33 s402 c1338"></div>
<div class="v5 ps870 s860 c1339">
<p class="p18 f164">Integrated design and dimensional compliance of Bound Powder Extrusion technology: A case study of an aircraft engine bracket<br><span class="f165">J. Kauffmann, M. Chemkhi and J. Gardan</span></p>
</div>
</div>
</div>
<div class="v5 ps460 s404 c1340"></div>
<div class="v5 ps351 s488 c1341"></div>
</div>
<div class="v5 ps447 s405 c532">
<div class="v5 ps33 s397 c881">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup152');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c882">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup153');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c883">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup154');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps871 s861 c1342">
<p class="p18 f164">Criticality of manufacturing defects on the fatigue resistance of Ti-6Al-4V alloy processed by Laser Powder Bed Fusion<br><span class="f165">Florian Steinhilber, Jean-Yves Buffiere, Rémy Dendievel, Guilhem Martin, Joel Lachambre and David Coeurjolly</span></p>
</div>
<div class="v5 ps872 s862 c1343">
<p class="p18"><span class="f164">Support Structure Impact in Laser-Based Powder Bed Fusion of AlSi10Mg<br></span><span class="f165">Marc Schmidt, Sebastian Greco, Daniel M</span><span class="f165">ü</span><span class="f165">ller, Benjamin Kirsca and Jan C. Aurich</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s863 c1344">
<div class="v5 ps873 s864 c45">
<div class="v5 ps33 s865 c1345">
<p class="p18 f164">Innovative Additive Manufacturing Cutting Tool Design Methodology for Automotive Large<br><span class="f165">Quentin Massard, Jordan Munoz, Marc Raffestin, Cyrille Urville and Pierre Faverjon</span></p>
</div>
<div class="v5 ps874 s397 c689">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup155');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps875 s121"></a>
<div class="v5 ps876 s866 c1346">
<div class="v5 ps33 s867 c45">
<div class="v5 ps33 s867 w2">
<div class="v5 ps774 s780 c1347">
<p class="p18 f116">24- Surface mechanical treatments / Abrasive processes</p>
</div>
<div class="v5 ps775 s497 c1348">
<div class="v5 ps33 s414 c1349">
<div class="v5 ps877 s868 c1350">
<p class="p18 f164">Impact of pre-machining on the surface and subsurface characteristics of deep rolled<br><span class="f165">Robert Zmich, Nicole Mensching, Matthias Steinbacher and Daniel Meyer</span></p>
</div>
</div>
<div class="v5 ps351 s796 c1351"></div>
<div class="v5 ps351 s488 c1352"></div>
</div>
<div class="v5 ps362 s405 c251">
<div class="v5 ps33 s387 c1353">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup156');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s397 c1354">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup157');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c1355">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup158');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps878 s869 c1356">
<p class="p18"><span class="f162">Effects of the Manufacturing Chain on the Surface Integrity when Machining Fir Tree Slots with Alternative Manufacturing Processes<br></span><span class="f163">U. K</span><span class="f163">ü</span><span class="f163">pper, T. Seelbach, L. Heidemanns, S. Prinz, T. Herrig and T. Bergs</span></p>
</div>
<div class="v5 ps879 s870 c1357">
<p class="p18 f164">Effect of abrasive grains size on surface integrity during belt finishing of a 27MnCr5 carburized steel<br><span class="f165">O. Cherguy, U. Elicegui, F. Cabanettes, S. Han, M. Cici, H. Pascal and J. Rech</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s390 c45">
<div class="v5 ps33 s390 w2">
<div class="v5 ps33 s390 c1358">
<div class="v5 ps33 s785 c1359"></div>
<div class="v5 ps351 s712 c1360"></div>
</div>
<div class="v5 ps880 s871 c1361">
<div class="v5 ps881 s872 c1362">
<p class="p18 f164">Influence of superimposed low frequency oscillations on single-pass honing of long-chipping steel<br><span class="f165">E. Uhlmann and A. Rozek</span></p>
</div>
<div class="v5 ps882 s873 c1363">
<p class="p18 f164">Magnetic-abrasive machining in manufacturing of medical implants<br><span class="f165">Bernhard Karpuschewski, Yurii Kotsun, Viktor Maiboroda, Dmytro Borysenko, Maria Herbster and Jens Solter</span></p>
</div>
</div>
<div class="v5 ps883 s396 c241">
<div class="v5 ps33 s387 c1364">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup159');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c1365">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup160');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps884 s121"></a>
<div class="v5 ps885 s874 c1147">
<div class="v5 ps33 s875 c45">
<div class="v5 ps33 s875 w2">
<div class="v5 ps774 s793 c1366">
<p class="p18 f116">25- Surface Integrity &amp; Functional Properties</p>
</div>
<div class="v5 ps789 s484 c893">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c1367"></div>
<div class="v5 ps886 s876 c1368">
<p class="p18 f164">Study of machining strategies for CNC milling of cavities on Ultra High Molecular Weight Polyethylene<br><span class="f165">Roosevelt A. Santos, Jorge L. Amaya, Carlos G. Helguero and Fausto A. Maldonado</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c1369"></div>
<div class="v5 ps351 s488 c1370"></div>
</div>
<div class="v5 ps447 s405 c898">
<div class="v5 ps33 s397 c899">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup161');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c900">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup162');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c901">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup163');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps887 s877 c1371">
<p class="p18 f164">Numerical Studies of Smart Structure With Piezoelectric Actuators to Enhance Surface<br><span class="f165">Cedric Zaccardi, Aurelien Mazette and Ludovic Chamoin</span></p>
</div>
<div class="v5 ps888 s878 c1372">
<p class="p18 f164">Influence of the kinematic roughness resulting from facing of AMC specimens on preconditioning of friction surfaces<br><span class="f165">Patrick Eiselt, Sarah J. Hirsch, Andreas Nestler, Thomas Grund, Andreas Schubert and Thomas Lampke</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c351">
<div class="v5 ps33 s623 c1373"></div>
<div class="v5 ps351 s392 c1374"></div>
</div>
<div class="v5 ps889 s879 c906">
<div class="v5 ps33 s880 c1375">
<p class="p18 f164">Interlaminar shear of FML produced with surface treatment by mechanical abrasion<br><span class="f165">Eduardo Pires Bonhin, Edson Cocchieri Botelho and Marcos Valerio Ribeiro</span></p>
</div>
<div class="v5 ps890 s881 c1376">
<p class="p18 f164">Effect of innovative finishing operations on the tribological performance of steel 27MnCr5<br><span class="f165">A. Madariaga, F. Abedrabbo, D. Soriano, R. Fernandez, P.J. Arrazola, O. Cherguy, F. Cabanettes, J.Rech, E. Butano , F. Gili and D. Mangherini</span></p>
</div>
</div>
<div class="v5 ps891 s396 c909">
<div class="v5 ps33 s397 c549">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup164');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c550">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup165');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor4" class="v5 ps884 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v63 ps928 s927"></a>
<div class="btf ps892 v7 s805">
<div class="v5 ps893 s882 c1377">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps894 s49 c1378">
<div class="v5 ps38 s50 c1379">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1624"><source data-srcset="images/transparentks-102-48.php 1x, images/transparentks-204-48.php 2x, images/transparentks-306-69.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-42.php 1x, images/transparentks-204-42.php 2x, images/transparentks-306-68.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-48.php 1x, images/transparentks-306-70.php 2x, images/transparentks-459-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-42.php 1x, images/transparentks-306-42.php 2x, images/transparentks-459-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-52.php 1x, images/transparentks-114-52.php 2x, images/transparentks-171-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-46.php 1x, images/transparentks-114-46.php 2x, images/transparentks-171-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-48.php 1x, images/transparentks-142-142.php 2x, images/transparentks-213-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-42.php 1x, images/transparentks-142-121.php 2x, images/transparentks-213-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-99.php 1x, images/transparentks-178-99.php 2x, images/transparentks-267-43.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-87.php 1x, images/transparentks-178-87.php 2x, images/transparentks-267-42.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-135.php 1x, images/transparentks-284-91.php 2x, images/transparentks-426-43.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-122.php 1x, images/transparentks-284-79.php 2x, images/transparentks-426-42.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-79.php" title="knowledge &amp; skills logo" alt="logo" class="un1477 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1625">
<source data-srcset="images/k-stransparent-110-48.php 1x, images/k-stransparent-220-48.php 2x, images/k-stransparent-330-69.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-42.php 1x, images/k-stransparent-220-42.php 2x, images/k-stransparent-330-68.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-48.php 1x, images/k-stransparent-330-70.php 2x, images/k-stransparent-495-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-42.php 1x, images/k-stransparent-330-42.php 2x, images/k-stransparent-495-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-46.php 1x, images/k-stransparent-340-46.php 2x, images/k-stransparent-510-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-40.php 1x, images/k-stransparent-340-40.php 2x, images/k-stransparent-510-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-48.php 1x, images/k-stransparent-424-98.php 2x, images/k-stransparent-636-21.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-42.php 1x, images/k-stransparent-424-84.php 2x, images/k-stransparent-636-20.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-48.php 1x, images/k-stransparent-530-48.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-42.php 1x, images/k-stransparent-530-42.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-92.php 1x, images/k-stransparent-848-48.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-85.php 1x, images/k-stransparent-848-42.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-42.php" alt="Knowledge an Skills shared by talented engineers" class="un1478 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c1380"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c1381"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c1382"></div>
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
<div class="v5 ps38 s69 c1383">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v66 ps929 s928 c1441">
<div class="ps930 v63 s929">
<div class="v64 ps931 s930 c1442">
<p class="p37 f273">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f274"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v64 ps932 s931 c1443">
<a href="javascript:void(0)" class="denyConsent f275 btn323 v65 s932">Refuse</a>
</div>
<div class="v64 ps933 s931 c1443">
<a href="javascript:void(0)" class="allowConsent f276 btn324 v65 s932">OK</a>
</div>
</div>
</div>
<div id="popup164" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps934">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1444">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c951">
<div class="player un1479 pl152">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S25-587.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1384">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1385">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1386">
<a onclick="pop&&pop.closePopup('popup164');return false" style="cursor:pointer;" class="f67 btn294 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup163" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps936">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1445">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c268">
<div class="player un1480 pl153">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S25-367.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1387">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1388">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c260">
<a onclick="pop&&pop.closePopup('popup163');return false" style="cursor:pointer;" class="f67 btn295 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup162" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps937">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1446">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c274">
<div class="player un1481 pl154">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S25-409.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1389">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1390">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1391">
<a onclick="pop&&pop.closePopup('popup162');return false" style="cursor:pointer;" class="f67 btn296 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup165" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps938">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1447">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c958">
<div class="player un1482 pl155">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S25-512.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1392">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1393">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1394">
<a onclick="pop&&pop.closePopup('popup165');return false" style="cursor:pointer;" class="f67 btn297 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup161" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps939">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1448">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c275">
<div class="player un1483 pl156">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S25-657.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c276">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c277">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c278">
<a onclick="pop&&pop.closePopup('popup161');return false" style="cursor:pointer;" class="f67 btn298 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup160" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps940">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1449">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c963">
<div class="player un1484 pl157">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-569.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1395">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1396">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c284">
<a onclick="pop&&pop.closePopup('popup160');return false" style="cursor:pointer;" class="f67 btn299 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup159" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps941">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1450">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c967">
<div class="player un1485 pl158">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-576.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1397">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1398">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c582">
<a onclick="pop&&pop.closePopup('popup159');return false" style="cursor:pointer;" class="f67 btn300 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup158" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps942">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1451">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c293">
<div class="player un1486 pl159">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-434.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1399">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1400">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c285">
<a onclick="pop&&pop.closePopup('popup158');return false" style="cursor:pointer;" class="f67 btn301 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup157" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps943">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1452">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c299">
<div class="player un1487 pl160">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-668.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1401">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1402">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c586">
<a onclick="pop&&pop.closePopup('popup157');return false" style="cursor:pointer;" class="f67 btn302 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup156" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps944">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1453">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c974">
<div class="player un1488 pl161">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-464.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1403">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1404">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c589">
<a onclick="pop&&pop.closePopup('popup156');return false" style="cursor:pointer;" class="f67 btn303 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup155" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps945">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1454">
<div class="ps38 v7 s883">
<div class="v5 ps179 s884 c45">
<div class="v5 ps180 s885 c300">
<div class="player un1489 pl162">
<video preload="metadata" poster="images/poster-3348.php" class="videoinline vd12" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S23-369.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps895 s236 c301">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c302">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c303">
<a onclick="pop&&pop.closePopup('popup155');return false" style="cursor:pointer;" class="f67 btn304 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup154" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps946">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1455">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c979">
<div class="player un1490 pl163">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S23-390.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1405">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1406">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c309">
<a onclick="pop&&pop.closePopup('popup154');return false" style="cursor:pointer;" class="f67 btn305 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup153" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps947">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1456">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c702">
<div class="player un1491 pl164">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S23-406.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c703">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c704">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c598">
<a onclick="pop&&pop.closePopup('popup153');return false" style="cursor:pointer;" class="f67 btn306 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup152" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps948">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1457">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c318">
<div class="player un1492 pl165">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S23-410.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c705">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c706">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c310">
<a onclick="pop&&pop.closePopup('popup152');return false" style="cursor:pointer;" class="f67 btn307 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup151" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps949">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1458">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c324">
<div class="player un1493 pl166">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-485.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c707">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c708">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c602">
<a onclick="pop&&pop.closePopup('popup151');return false" style="cursor:pointer;" class="f67 btn308 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup150" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps950">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1459">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c709">
<div class="player un1494 pl167">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-483.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c710">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c711">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c605">
<a onclick="pop&&pop.closePopup('popup150');return false" style="cursor:pointer;" class="f67 btn309 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup149" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps951">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1460">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c325">
<div class="player un1495 pl168">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-482.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c326">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c327">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c328">
<a onclick="pop&&pop.closePopup('popup149');return false" style="cursor:pointer;" class="f67 btn310 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup148" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps952">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1461">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c712">
<div class="player un1496 pl169">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-481.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c713">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c714">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c334">
<a onclick="pop&&pop.closePopup('popup148');return false" style="cursor:pointer;" class="f67 btn311 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup166" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps953">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1462">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c715">
<div class="player un1497 pl170">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-473.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c716">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c717">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c578">
<a onclick="pop&&pop.closePopup('popup166');return false" style="cursor:pointer;" class="f67 btn312 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup147" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps954">
<div onclick="event.stopPropagation()" class="popup v67 ps935 s933 c1463">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c343">
<div class="player un1498 pl171">
<video preload="metadata" poster="images/poster-3592-7.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-466.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c718">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c719">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c335">
<a onclick="pop&&pop.closePopup('popup147');return false" style="cursor:pointer;" class="f67 btn313 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session2-4.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>