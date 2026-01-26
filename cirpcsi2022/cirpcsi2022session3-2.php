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
            $redirect = 'cirpcsi2022session3-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '0B3CECD6-07E5-4911-8B85-D227E7234171';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session3-2.php';
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
<title>Day 3 sessions 10h50 to 12h30</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session3-2.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 3 sessions 10h50 to 12h30">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps1052{position:relative;margin-top:0}.v73{display:block;vertical-align:top}.s1021{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v74{display:inline-block;vertical-align:top}.ps1053{position:relative;margin-left:0;margin-top:0}.s1022{min-width:1920px;width:1920px;min-height:142px}.ps1054{position:relative;margin-left:0;margin-top:0}.s1023{min-width:165px;width:165px;min-height:142px;height:142px}.c1611{z-index:3;pointer-events:auto}.a17{display:block}.i87{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i88{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps1055{position:relative;margin-left:-21px;margin-top:6px}.s1024{min-width:424px;width:424px;min-height:130px;height:130px}.c1612{z-index:1;pointer-events:auto}.i89{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps1056{position:relative;margin-left:1038px;margin-top:54px}.s1025{min-width:84px;width:84px;min-height:36px}.c1613{z-index:22;pointer-events:auto}.f293{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn363{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn363:hover{background-color:#82939e;border-color:#000;color:#000}.btn363:active{background-color:#677a85;border-color:#000;color:#808080}.v75{display:inline-block;overflow:hidden;outline:0}.s1026{width:84px;padding-right:0;height:24px}.ps1057{position:relative;margin-left:10px;margin-top:30px}.s1027{min-width:84px;width:84px;min-height:82px}.c1614{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p40{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f294{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s1028{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps1058{position:relative;margin-left:0;margin-top:21px}.s1029{min-width:136px;width:136px;min-height:100px;height:100px}.c1615{z-index:19;pointer-events:auto}.i90{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps1059{position:relative;margin-top:8px}.s1030{width:100%;min-width:1920px;min-height:744px}.c1616{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-43.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c1616{background-image:url(images/cirp-csi-2022-320-49.php)}.ps1060{position:relative;margin-top:60px}.s1031{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps1061{position:relative;margin-left:240px;margin-top:0}.s1032{min-width:1600px;width:1600px;min-height:160px}.ps1062{position:relative;margin-left:0;margin-top:0}.s1033{min-width:1520px;width:1520px;min-height:160px}.c1617{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f295{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps1063{position:relative;margin-left:-4px;margin-top:0}.s1034{min-width:84px;width:84px;min-height:80px}.c1618{z-index:163;pointer-events:auto;overflow:hidden;height:80px}.f296{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s1035{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f297{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps1064{position:relative;margin-top:92px}.s1036{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:442px}.ps1065{position:relative;margin-left:620px;margin-top:0}.s1037{min-width:680px;width:680px;min-height:70px}.s1038{min-width:320px;width:320px;min-height:70px}.c1619{z-index:18;pointer-events:auto}.f298{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn364{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn364:hover{background-color:#82939e;border-color:#000;color:#000}.btn364:active{background-color:#677a85;border-color:#000;color:#808080}.s1039{width:320px;padding-right:0;height:29px}.ps1066{position:relative;margin-left:40px;margin-top:0}.c1620{z-index:23;pointer-events:auto}.btn365{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn365:hover{background-color:#82939e;border-color:#000;color:#000}.btn365:active{background-color:#677a85;border-color:#000;color:#808080}.ps1067{position:relative;margin-left:55px;margin-top:51px}.s1040{min-width:845px;width:845px;min-height:51px}.c1621{z-index:24;pointer-events:auto;overflow:hidden;height:51px}.p41{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f299{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps1068{position:relative;margin-left:55px;margin-top:34px}.s1041{min-width:1805px;width:1805px;min-height:63px}.c1622{z-index:25;pointer-events:auto}.f300{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn366{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn366:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn366:active{background-color:#677a85;border-color:#000;color:#fff}.s1042{width:1805px;padding-right:0;height:34px}.ps1069{position:relative;margin-left:55px;margin-top:22px}.s1043{min-width:1805px;width:1805px;min-height:63px}.c1623{z-index:26;pointer-events:auto}.f301{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn367{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn367:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn367:active{background-color:#677a85;border-color:#000;color:#fff}.s1044{width:1805px;padding-right:0;height:34px}.ps1070{position:relative;margin-left:55px;margin-top:19px}.s1045{min-width:1805px;width:1805px;min-height:63px}.c1624{z-index:27;pointer-events:auto}.f302{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn368{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn368:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn368:active{background-color:#677a85;border-color:#000;color:#fff}.c1625{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:53px;min-height:2326px}.ps1071{position:relative;margin-top:0}.s1046{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2326px}.s1047{width:1926px;margin-left:-3px;min-height:2326px}.s1048{min-width:1926px;width:1926px;min-height:789px}.c1626{z-index:28}.ps1072{position:relative;margin-left:58px;margin-top:0}.s1049{min-width:1245px;width:1245px;min-height:51px}.c1627{z-index:30;pointer-events:auto;overflow:hidden;height:51px}.ps1073{position:relative;margin-left:0;margin-top:-3px}.s1050{min-width:1926px;width:1926px;min-height:447px}.w15{line-height:0}.c1628{z-index:31}.s1051{min-width:1926px;width:1926px;min-height:153px}.s1052{min-width:1920px;width:1920px;min-height:147px}.c1629{z-index:32;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps1074{position:relative;margin-left:23px;margin-top:-148px}.s1053{min-width:1760px;width:1760px;min-height:136px}.c1630{z-index:34;pointer-events:auto;overflow:hidden;height:136px}.f303{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f304{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps1075{position:relative;margin-left:0;margin-top:-6px}.s1054{min-width:1920px;width:1920px;min-height:147px}.c1631{z-index:33;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps1076{position:relative;margin-left:1843px;margin-top:-413px}.s1055{min-width:54px;width:54px;min-height:380px}.c1632{z-index:36}.s1056{min-width:54px;width:54px;min-height:86px}.c1633{z-index:45;pointer-events:auto;overflow:hidden;height:86px}.ps1077{position:relative;margin-left:0;margin-top:61px}.c1634{z-index:46;pointer-events:auto;overflow:hidden;height:86px}.ps1078{position:relative;margin-left:23px;margin-top:-286px}.s1057{min-width:1760px;width:1760px;min-height:136px}.c1635{z-index:40;pointer-events:auto;overflow:hidden;height:136px}.f305{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f306{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps1079{position:relative;margin-left:0;margin-top:-2326px}.s1058{min-width:1920px;width:1920px;min-height:1px}.v76{display:none;vertical-align:top}.s1059{width:100%;min-width:1920px;min-height:198px}.c1636{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps1081{position:relative;margin-top:34px}.s1060{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps1082{position:relative;margin-left:24px;margin-top:0}.s1061{min-width:1876px;width:1876px;min-height:78px}.c1637{pointer-events:auto;overflow:hidden;height:78px}.f307{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f308{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps1083{position:relative;margin-left:684px;margin-top:0}.s1062{min-width:256px;width:256px;min-height:64px}.c1638{pointer-events:auto}.f309{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn369{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn369:hover{background-color:#82939e;border-color:#000;color:#000}.btn369:active{background-color:#181b28;border-color:#000;color:#808080}.s1063{width:256px;padding-right:0;height:24px}.ps1084{position:relative;margin-left:40px;margin-top:0}.f310{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn370{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn370:hover{background-color:#82939e;border-color:#000;color:#000}.btn370:active{background-color:#181b28;border-color:#000;color:#808080}.ps1085{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435230;pointer-events:none;visibility:hidden;opacity:0}.v77{display:inline-block;vertical-align:top;pointer-events:auto}.ps1086{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s1064{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1639{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1087{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435225;pointer-events:none;visibility:hidden;opacity:0}.c1640{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1088{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435213;pointer-events:none;visibility:hidden;opacity:0}.c1641{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1089{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435208;pointer-events:none;visibility:hidden;opacity:0}.c1642{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1090{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435203;pointer-events:none;visibility:hidden;opacity:0}.c1643{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1091{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435198;pointer-events:none;visibility:hidden;opacity:0}.c1644{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1092{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435193;pointer-events:none;visibility:hidden;opacity:0}.c1645{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1093{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435188;pointer-events:none;visibility:hidden;opacity:0}.c1646{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1094{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435183;pointer-events:none;visibility:hidden;opacity:0}.c1647{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1095{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435178;pointer-events:none;visibility:hidden;opacity:0}.c1648{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1096{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435173;pointer-events:none;visibility:hidden;opacity:0}.c1649{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1097{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435168;pointer-events:none;visibility:hidden;opacity:0}.c1650{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1098{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435163;pointer-events:none;visibility:hidden;opacity:0}.c1651{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1099{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435158;pointer-events:none;visibility:hidden;opacity:0}.c1652{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps1100{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435153;pointer-events:none;visibility:hidden;opacity:0}.c1653{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps1052{margin-top:4px}.s1021{min-width:1200px;width:1200px;min-height:89px}.s1022{min-width:1200px;width:1200px;min-height:89px}.s1023{min-width:115px;width:115px;min-height:89px;height:89px}.i87{left:13px;width:89px;height:89px}.ps1055{margin-left:-16px;margin-top:4px}.s1024{min-width:265px;width:265px;min-height:81px;height:81px}.i89{width:265px;height:81px}.ps1056{margin-left:640px;margin-top:30px}.s1025{min-width:52px;width:52px;min-height:22px}.f293{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s1026{width:52px;height:15px}.ps1057{margin-left:7px;margin-top:15px}.s1027{min-width:52px;width:52px;min-height:51px}.c1614{height:51px}.f294{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s1028{height:30px;transform:scale(1.000) translateY(3px)}.ps1058{margin-top:9px}.s1029{min-width:85px;width:85px;min-height:63px;height:63px}.i90{width:85px;height:31px;top:16px}.ps1059{margin-top:5px}.s1030{min-width:1200px;min-height:494px}.ps1060{margin-top:4px}.s1031{min-width:1200px;width:1200px;min-height:116px}.ps1061{margin-left:150px}.s1032{min-width:999px;width:999px;min-height:116px}.s1033{min-width:950px;width:950px;min-height:116px}.c1617{height:116px}.f295{font-size:30px;font-size:calc(30px * var(--f))}.ps1063{margin-left:-3px}.s1034{min-width:52px;width:52px;min-height:58px}.c1618{height:58px}.f296{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s1035{height:27px;transform:scale(1.111) translateY(2px)}.f297{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps1064{margin-top:44px}.s1036{min-width:1200px;width:1200px;min-height:281px}.ps1065{margin-left:387px}.s1037{min-width:425px;width:425px;min-height:44px}.s1038{min-width:200px;width:200px;min-height:44px}.f298{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s1039{width:200px;height:18px}.ps1066{margin-left:25px}.ps1067{margin-left:34px;margin-top:43px}.s1040{min-width:485px;width:485px;min-height:35px}.c1621{height:35px}.f299{font-size:18px;font-size:calc(18px * var(--f))}.ps1068{margin-left:34px;margin-top:10px}.s1041{min-width:1129px;width:1129px;min-height:39px}.f300{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s1042{width:1129px;height:21px}.ps1069{margin-left:34px;margin-top:13px}.s1043{min-width:1129px;width:1129px;min-height:39px}.f301{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s1044{width:1129px;height:21px}.ps1070{margin-left:34px;margin-top:12px}.s1045{min-width:1129px;width:1129px;min-height:40px}.f302{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.c1625{width:max(1200px, 100%);margin-top:26px;min-height:1472px}.s1046{min-width:1200px;width:1200px;min-height:1472px}.s1047{width:1206px;min-height:1472px}.s1048{min-width:1206px;width:1206px;min-height:495px}.ps1072{margin-left:37px}.s1049{min-width:739px;width:739px;min-height:32px}.c1627{height:32px}.s1050{min-width:1206px;width:1206px;min-height:282px}.s1051{min-width:1206px;width:1206px;min-height:98px}.s1052{min-width:1200px;width:1200px;min-height:92px}.ps1074{margin-left:15px;margin-top:-95px}.s1053{min-width:1120px;width:1120px;min-height:84px}.c1630{height:84px}.f303{font-size:18px;font-size:calc(18px * var(--f));line-height:1.668}.f304{font-size:18px;font-size:calc(18px * var(--f));line-height:1.668}.s1054{min-width:1200px;width:1200px;min-height:92px}.ps1076{margin-left:1149px;margin-top:-259px}.s1055{min-width:33px;width:33px;min-height:237px}.s1056{min-width:33px;width:33px;min-height:53px}.c1633{height:53px}.ps1077{margin-top:39px}.c1634{height:53px}.ps1078{margin-left:15px;margin-top:-178px}.s1057{min-width:1120px;width:1120px;min-height:83px}.c1635{height:83px}.f305{font-size:18px;font-size:calc(18px * var(--f))}.f306{font-size:18px;font-size:calc(18px * var(--f))}.ps1079{margin-top:-1472px}.s1058{min-width:1200px;width:1200px}.s1059{min-width:1200px;min-height:129px}.ps1081{margin-top:21px}.s1060{min-width:1200px;width:1200px;min-height:84px}.ps1082{margin-left:15px}.s1061{min-width:1172px;width:1172px;min-height:49px}.c1637{height:49px}.f307{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f308{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps1083{margin-left:412px;margin-top:-5px}.s1062{min-width:160px;width:160px;min-height:40px}.f309{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s1063{width:160px;height:15px}.ps1084{margin-left:55px;margin-top:-5px}.f310{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps1086{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s1064{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s1021{min-width:960px;width:960px;min-height:71px}.s1022{min-width:960px;width:960px;min-height:71px}.s1023{min-width:69px;width:69px;min-height:71px;height:71px}.i87{left:0;width:69px;height:69px;top:1px}.ps1055{margin-left:1px;margin-top:3px}.s1024{min-width:212px;width:212px;min-height:65px;height:65px}.i89{width:212px;height:65px}.ps1056{margin-left:521px;margin-top:27px}.s1025{min-width:42px;width:42px;min-height:18px}.f293{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s1026{width:42px;height:11px}.ps1057{margin-left:5px;margin-top:15px}.s1027{min-width:42px;width:42px;min-height:41px}.c1614{height:41px}.f294{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s1028{height:24px;transform:scale(1.000) translateY(2px)}.ps1058{margin-top:10px}.s1029{min-width:68px;width:68px;min-height:51px;height:51px}.i90{width:68px;height:25px;top:13px}.ps1059{margin-top:4px}.s1030{min-width:960px;min-height:501px}.ps1060{margin-top:0}.s1031{min-width:960px;width:960px;min-height:92px}.ps1061{margin-left:118px}.s1032{min-width:802px;width:802px;min-height:92px}.s1033{min-width:760px;width:760px;min-height:92px}.c1617{height:92px}.f295{font-size:24px;font-size:calc(24px * var(--f))}.ps1063{margin-left:0}.s1034{min-width:42px;width:42px;min-height:46px}.c1618{height:46px}.f296{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s1035{height:22px;transform:scale(1.111) translateY(2px)}.f297{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps1064{margin-top:7px}.s1036{min-width:960px;width:960px;min-height:225px}.ps1065{margin-left:310px}.s1037{min-width:340px;width:340px;min-height:35px}.s1038{min-width:160px;width:160px;min-height:35px}.f298{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s1039{width:160px;height:15px}.ps1066{margin-left:20px}.ps1067{margin-left:27px;margin-top:35px}.s1040{min-width:368px;width:368px;min-height:26px}.c1621{height:26px}.f299{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps1068{margin-left:27px;margin-top:7px}.s1041{min-width:903px;width:903px;min-height:31px}.f300{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s1042{width:903px;height:16px}.ps1069{margin-left:27px;margin-top:12px}.s1043{min-width:903px;width:903px;min-height:31px}.f301{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s1044{width:903px;height:16px}.ps1070{margin-left:27px;margin-top:10px}.s1045{min-width:903px;width:903px;min-height:32px}.f302{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.c1625{width:max(960px, 100%);margin-top:23px;min-height:1186px}.s1046{min-width:960px;width:960px;min-height:1186px}.s1047{width:966px;min-height:1186px}.s1048{min-width:966px;width:966px;min-height:397px}.ps1072{margin-left:30px}.s1049{min-width:646px;width:646px;min-height:26px}.c1627{height:26px}.s1050{min-width:966px;width:966px;min-height:227px}.s1051{min-width:966px;width:966px;min-height:79px}.s1052{min-width:960px;width:960px;min-height:73px}.ps1074{margin-left:13px;margin-top:-77px}.s1053{min-width:880px;width:880px;min-height:68px}.c1630{height:68px}.f303{font-size:15px;font-size:calc(15px * var(--f))}.f304{font-size:15px;font-size:calc(15px * var(--f))}.s1054{min-width:960px;width:960px;min-height:74px}.ps1076{margin-left:926px;margin-top:-209px}.s1055{min-width:28px;width:28px;min-height:190px}.s1056{min-width:26px;width:26px;min-height:42px}.c1633{height:42px}.ps1077{margin-left:2px;margin-top:29px}.c1634{height:42px}.ps1078{margin-left:13px;margin-top:-146px}.s1057{min-width:882px;width:882px;min-height:69px}.c1635{height:69px}.f305{font-size:15px;font-size:calc(15px * var(--f))}.f306{font-size:15px;font-size:calc(15px * var(--f))}.ps1079{margin-top:-1186px}.s1058{min-width:960px;width:960px}.s1059{min-width:960px;min-height:106px}.ps1081{margin-top:17px}.s1060{min-width:960px;width:960px;min-height:68px}.ps1082{margin-left:12px}.s1061{min-width:938px;width:938px;min-height:39px}.c1637{height:39px}.f307{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f308{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps1083{margin-left:342px;margin-top:-3px}.s1062{min-width:128px;width:128px;min-height:32px}.f309{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s1063{width:128px;height:12px}.ps1084{margin-left:20px;margin-top:-3px}.f310{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps1086{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s1064{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s1021{min-width:768px;width:768px;min-height:57px}.s1022{min-width:768px;width:768px;min-height:57px}.s1023{min-width:55px;width:55px;min-height:57px;height:57px}.i87{left:0;width:55px;height:55px;top:1px}.ps1055{margin-left:1px;margin-top:2px}.s1024{min-width:170px;width:170px;min-height:52px;height:52px}.i89{width:170px;height:52px}.ps1056{margin-left:416px;margin-top:22px}.s1025{min-width:34px;width:34px;min-height:14px}.f293{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s1026{width:34px;height:9px}.ps1057{margin-left:4px;margin-top:12px}.s1027{min-width:34px;width:34px;min-height:33px}.c1614{height:33px}.f294{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s1028{height:19px;transform:scale(1.000) translateY(2px)}.ps1058{margin-top:8px}.s1029{min-width:54px;width:54px;min-height:41px;height:41px}.i90{width:54px;height:20px;top:10px}.ps1059{margin-top:3px}.s1030{min-width:768px;min-height:401px}.ps1060{margin-top:0}.s1031{min-width:768px;width:768px;min-height:73px}.ps1061{margin-left:94px}.s1032{min-width:642px;width:642px;min-height:73px}.s1033{min-width:608px;width:608px;min-height:73px}.c1617{height:73px}.f295{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps1063{margin-left:0}.s1034{min-width:34px;width:34px;min-height:37px}.c1618{height:37px}.f296{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s1035{height:17px;transform:scale(1.111) translateY(2px)}.f297{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps1064{margin-top:6px}.s1036{min-width:768px;width:768px;min-height:181px}.ps1065{margin-left:248px}.s1037{min-width:272px;width:272px;min-height:28px}.s1038{min-width:128px;width:128px;min-height:28px}.f298{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s1039{width:128px;height:11px}.ps1066{margin-left:16px}.ps1067{margin-left:22px;margin-top:28px}.s1040{min-width:294px;width:294px;min-height:21px}.c1621{height:21px}.f299{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps1068{margin-left:22px;margin-top:5px}.s1041{min-width:722px;width:722px;min-height:25px}.f300{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s1042{width:722px;height:12px}.ps1069{margin-left:22px;margin-top:10px}.s1043{min-width:722px;width:722px;min-height:25px}.f301{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s1044{width:722px;height:12px}.ps1070{margin-left:22px;margin-top:8px}.s1045{min-width:722px;width:722px;min-height:25px}.f302{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1625{width:max(768px, 100%);margin-top:17px;min-height:950px}.s1046{min-width:768px;width:768px;min-height:950px}.s1047{width:774px;min-height:950px}.s1048{min-width:774px;width:774px;min-height:319px}.ps1072{margin-left:25px}.s1049{min-width:516px;width:516px;min-height:21px}.c1627{height:21px}.s1050{min-width:774px;width:774px;min-height:183px}.s1051{min-width:774px;width:774px;min-height:65px}.s1052{min-width:768px;width:768px;min-height:59px}.ps1074{margin-left:11px;margin-top:-63px}.s1053{min-width:704px;width:704px;min-height:55px}.c1630{height:55px}.f303{font-size:12px;font-size:calc(12px * var(--f))}.f304{font-size:12px;font-size:calc(12px * var(--f))}.s1054{min-width:768px;width:768px;min-height:59px}.ps1076{margin-left:741px;margin-top:-168px}.s1055{min-width:23px;width:23px;min-height:152px}.s1056{min-width:21px;width:21px;min-height:34px}.c1633{height:34px}.ps1077{margin-left:2px;margin-top:23px}.c1634{height:34px}.ps1078{margin-left:11px;margin-top:-117px}.s1057{min-width:706px;width:706px;min-height:55px}.c1635{height:55px}.f305{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f306{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.ps1079{margin-top:-950px}.s1058{min-width:768px;width:768px}.s1059{min-width:768px;min-height:85px}.ps1081{margin-top:14px}.s1060{min-width:768px;width:768px;min-height:54px}.ps1082{margin-left:10px}.s1061{min-width:750px;width:750px;min-height:31px}.c1637{height:31px}.f307{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f308{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps1083{margin-left:274px;margin-top:-3px}.s1062{min-width:102px;width:102px;min-height:26px}.f309{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s1063{width:102px;height:10px}.ps1084{margin-left:16px;margin-top:-3px}.f310{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps1086{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s1064{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps1052{margin-top:29px}.s1021{min-width:480px;width:480px;min-height:153px}.ps1053{margin-left:6px}.s1022{min-width:464px;width:464px;min-height:153px}.s1023{min-width:120px;width:120px;min-height:96px;height:96px}.i87{width:96px;height:96px}.ps1055{margin-left:-25px;margin-top:19px}.s1024{min-width:196px;width:196px;min-height:59px;height:59px}.i89{width:196px;height:59px}.ps1056{margin-left:33px;margin-top:117px}.s1025{min-width:140px;width:140px}.s1026{width:140px}.ps1057{margin-left:324px;margin-top:-143px}.s1027{min-width:71px;width:71px;min-height:62px}.c1614{height:62px}.f294{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s1028{height:37px;transform:scale(1.000) translateY(4px)}.ps1058{margin-left:377px;margin-top:-150px}.s1029{min-width:87px;width:87px;min-height:75px;height:75px}.i90{width:87px;height:32px;top:21px}.ps1059{margin-top:-47px}.s1030{min-width:480px;min-height:336px}.ps1060{margin-top:-66px}.s1031{min-width:480px;width:480px;min-height:230px}.ps1061{margin-left:33px}.s1032{min-width:447px;width:447px;min-height:230px}.ps1062{margin-top:66px}.s1033{min-width:414px;width:414px;min-height:164px}.c1617{height:164px}.f295{font-size:30px;font-size:calc(30px * var(--f))}.ps1063{margin-left:-37px}.s1034{min-width:70px;width:70px;min-height:66px}.c1618{height:66px}.f296{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s1035{height:33px}.f297{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps1064{margin-top:46px}.s1036{min-width:480px;width:480px;min-height:612px}.ps1065{margin-left:33px}.s1037{min-width:414px;width:414px;min-height:201px}.s1038{min-width:414px;width:414px;min-height:72px}.f298{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s1039{width:414px;height:33px}.ps1066{margin-left:0;margin-top:57px}.ps1067{margin-left:14px;margin-top:23px}.s1040{min-width:462px;width:462px;min-height:91px}.c1621{height:91px}.f299{font-size:21px;font-size:calc(21px * var(--f))}.ps1068{margin-left:15px;margin-top:0}.s1041{min-width:452px;width:452px;min-height:83px}.f300{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:16px;padding-bottom:15px}.s1042{width:452px;height:52px}.ps1069{margin-left:15px;margin-top:24px}.s1043{min-width:452px;width:452px;min-height:82px}.f301{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.s1044{width:452px;height:26px}.ps1070{margin-left:15px;margin-top:20px}.s1045{min-width:452px;width:452px;min-height:82px}.f302{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.c1625{width:max(480px, 100%);margin-top:38px;min-height:1704px}.s1046{min-width:480px;width:480px;min-height:1704px}.s1047{width:486px;min-height:1704px}.s1048{min-width:486px;width:486px;min-height:592px}.ps1072{margin-left:12px}.s1049{min-width:462px;width:462px;min-height:69px}.c1627{height:69px}.s1050{min-width:486px;width:486px;min-height:316px}.s1051{min-width:486px;width:486px;min-height:108px}.s1052{min-width:480px;width:480px;min-height:102px}.ps1074{margin-left:8px;margin-top:-102px}.s1053{min-width:417px;width:417px;min-height:99px}.c1630{height:99px}.f303{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f304{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s1054{min-width:480px;width:480px;min-height:106px}.ps1076{margin-left:425px;margin-top:-294px}.s1055{min-width:58px;width:58px;min-height:267px}.s1056{min-width:58px;width:58px;min-height:63px}.c1633{height:63px}.ps1077{margin-top:39px}.c1634{height:63px}.ps1078{margin-left:8px;margin-top:-208px}.s1057{min-width:417px;width:417px;min-height:102px}.c1635{height:102px}.f305{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f306{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps1079{margin-top:-1767px}.s1058{min-width:480px;width:480px}.s1059{min-width:480px}.ps1081{margin-top:8px}.s1060{min-width:480px;width:480px;min-height:166px}.ps1082{margin-left:17px}.s1061{min-width:448px;width:448px;min-height:136px}.c1637{height:136px}.f307{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f308{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps1083{margin-left:137px}.s1062{min-width:99px;width:99px;min-height:30px}.f309{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s1063{width:99px;height:18px}.ps1084{margin-left:9px}.f310{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps1086{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s1064{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps1052{margin-top:19px}.s1021{min-width:320px;width:320px;min-height:102px}.ps1053{margin-left:4px}.s1022{min-width:309px;width:309px;min-height:102px}.s1023{min-width:80px;width:80px;min-height:64px;height:64px}.i87{left:8px;width:64px;height:64px}.ps1055{margin-left:-17px;margin-top:13px}.s1024{min-width:131px;width:131px;min-height:39px;height:39px}.i89{width:131px;height:39px}.ps1056{margin-left:22px;margin-top:78px}.s1025{min-width:93px;width:93px;min-height:24px}.f293{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s1026{width:93px;height:16px}.ps1057{margin-left:216px;margin-top:-95px}.s1027{min-width:47px;width:47px;min-height:41px}.c1614{height:41px}.f294{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s1028{height:25px;transform:scale(1.000) translateY(3px)}.ps1058{margin-left:251px;margin-top:-100px}.s1029{min-width:58px;width:58px;min-height:50px;height:50px}.i90{width:58px;height:21px;top:15px}.ps1059{margin-top:-31px}.s1030{min-width:320px;min-height:224px}.ps1060{margin-top:-44px}.s1031{min-width:320px;width:320px;min-height:153px}.ps1061{margin-left:22px}.s1032{min-width:298px;width:298px;min-height:153px}.ps1062{margin-top:44px}.s1033{min-width:276px;width:276px;min-height:109px}.c1617{height:109px}.f295{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps1063{margin-left:-25px}.s1034{min-width:47px;width:47px;min-height:44px}.c1618{height:44px}.f296{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s1035{height:22px;transform:scale(1.111) translateY(2px)}.f297{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps1064{margin-top:31px}.s1036{min-width:320px;width:320px;min-height:410px}.ps1065{margin-left:22px}.s1037{min-width:276px;width:276px;min-height:134px}.s1038{min-width:276px;width:276px;min-height:48px}.f298{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s1039{width:276px;height:23px}.ps1066{margin-left:0;margin-top:38px}.ps1067{margin-left:9px;margin-top:15px}.s1040{min-width:308px;width:308px;min-height:61px}.c1621{height:61px}.f299{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps1068{margin-left:10px;margin-top:0}.s1041{min-width:301px;width:301px;min-height:55px}.f300{font-size:14px;font-size:calc(14px * var(--f));padding-top:11px;padding-bottom:10px}.s1042{width:301px}.ps1069{margin-left:10px;margin-top:16px}.s1043{min-width:301px;width:301px;min-height:55px}.f301{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s1044{width:301px;height:17px}.ps1070{margin-left:10px;margin-top:13px}.s1045{min-width:301px;width:301px;min-height:55px}.f302{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.c1625{width:max(320px, 100%);margin-top:23px;min-height:1137px}.s1046{min-width:320px;width:320px;min-height:1137px}.s1047{width:326px;min-height:1137px}.s1048{min-width:326px;width:326px;min-height:396px}.ps1072{margin-left:9px}.s1049{min-width:308px;width:308px;min-height:46px}.c1627{height:46px}.s1050{min-width:326px;width:326px;min-height:213px}.s1051{min-width:326px;width:326px;min-height:74px}.s1052{min-width:320px;width:320px;min-height:68px}.ps1074{margin-left:6px;margin-top:-69px}.s1053{min-width:278px;width:278px;min-height:66px}.c1630{height:66px}.f303{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f304{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s1054{min-width:320px;width:320px;min-height:71px}.ps1076{margin-left:284px;margin-top:-197px}.s1055{min-width:39px;width:39px;min-height:178px}.s1056{min-width:39px;width:39px;min-height:42px}.c1633{height:42px}.ps1077{margin-top:26px}.c1634{height:42px}.ps1078{margin-left:6px;margin-top:-140px}.s1057{min-width:278px;width:278px;min-height:68px}.c1635{height:68px}.f305{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f306{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps1079{margin-top:-1179px}.s1058{min-width:320px;width:320px}.s1059{min-width:320px;min-height:132px}.ps1081{margin-top:5px}.s1060{min-width:320px;width:320px;min-height:111px}.ps1082{margin-left:11px}.s1061{min-width:299px;width:299px;min-height:91px}.c1637{height:91px}.f307{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f308{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps1083{margin-left:91px}.s1062{min-width:66px;width:66px;min-height:20px}.f309{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s1063{width:66px;height:12px}.ps1084{margin-left:6px}.f310{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps1086{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s1064{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-640-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-640-49.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-123.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-124.php)}}@media (min-width:320px) {.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}.c1616{background-image:url(images/cirp-csi-2022-480-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-480-49.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}.c1616{background-image:url(images/cirp-csi-2022-960-86.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-125.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}.c1616{background-image:url(images/cirp-csi-2022-1440-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1440-25.php)}}@media (min-width:480px) {.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}.c1616{background-image:url(images/cirp-csi-2022-768-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-768-49.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1536-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1536-49.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}.c1616{background-image:url(images/cirp-csi-2022-2304-24.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2304-25.php)}}@media (min-width:768px) {.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}.c1616{background-image:url(images/cirp-csi-2022-960-87.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-960-93.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1920-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1920-49.php)}}@media (min-width:960px) {.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}.c1616{background-image:url(images/cirp-csi-2022-1200-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1200-49.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2400-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2400-49.php)}}@media (min-width:1200px) {.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}.c1616{background-image:url(images/cirp-csi-2022-1415-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-1415-43.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2830-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2830-43.php)}}@media (min-width:1600px) {.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}.c1616{background-image:url(images/cirp-csi-2022-2000-43.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2000-49.php)}}@media (min-width:2000px) {.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}.c1616{background-image:url(images/cirp-csi-2022-2131-37.php)}.webp .c1616{background-image:url(images/cirp-csi-2022-2131-43.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session3-2.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps1052 v73 s1021">
<div class="v74 ps1053 s1022 c1610">
<div class="v74 ps1054 s1023 c1611">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a17"><picture class="i88"><source srcset="images/transparentks-64-49.php 1x, images/transparentks-128-49.php 2x, images/transparentks-192-74.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-43.php 1x, images/transparentks-128-43.php 2x, images/transparentks-192-73.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-49.php 1x, images/transparentks-192-75.php 2x, images/transparentks-288-25.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-43.php 1x, images/transparentks-192-43.php 2x, images/transparentks-288-24.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-43.php 1x, images/transparentks-110-43.php 2x, images/transparentks-165-25.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-37.php 1x, images/transparentks-110-37.php 2x, images/transparentks-165-24.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-43.php 1x, images/transparentks-138-43.php 2x, images/transparentks-207-25.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-37.php 1x, images/transparentks-138-37.php 2x, images/transparentks-207-24.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-100.php 1x, images/transparentks-178-100.php 2x, images/transparentks-267-49.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-88.php 1x, images/transparentks-178-88.php 2x, images/transparentks-267-48.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-136.php 1x, images/transparentks-284-92.php 2x, images/transparentks-426-49.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-123.php 1x, images/transparentks-284-80.php 2x, images/transparentks-426-48.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-80.php" title="knowledge &amp; skills logo" alt="ks logo" class="un1748 i87"></picture></a>
<?php
    }
?>

</div>
<div class="v74 ps1055 s1024 c1612">
<picture class="i88">
<source srcset="images/k-stransparent-131-41.php 1x, images/k-stransparent-262-41.php 2x, images/k-stransparent-393-25.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-35.php 1x, images/k-stransparent-262-35.php 2x, images/k-stransparent-393-24.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-41.php 1x, images/k-stransparent-392-41.php 2x, images/k-stransparent-588-25.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-35.php 1x, images/k-stransparent-392-35.php 2x, images/k-stransparent-588-24.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-47.php 1x, images/k-stransparent-340-47.php 2x, images/k-stransparent-510-25.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-41.php 1x, images/k-stransparent-340-41.php 2x, images/k-stransparent-510-24.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-49.php 1x, images/k-stransparent-424-99.php 2x, images/k-stransparent-636-25.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-43.php 1x, images/k-stransparent-424-86.php 2x, images/k-stransparent-636-24.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-49.php 1x, images/k-stransparent-530-49.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-43.php 1x, images/k-stransparent-530-43.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-93.php 1x, images/k-stransparent-848-49.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-87.php 1x, images/k-stransparent-848-43.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-43.php" alt="Knowledge an Skills shared by talented engineers" class="un1749 i89">
</picture>
</div>
<div class="v74 ps1056 s1025 c1613">
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
<a href="./logout-415c8e.php" class="f293 btn363 v75 s1026">Logout</a>
<?php
    }
?>

</div>
<div class="v74 ps1057 s1027 c1614">
<p class="p40 f294"><a href="cirpcsi2022.php"><x-svg class="s1028"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v74 ps1058 s1029 c1615">
<a href="cirpcsi2022.php" class="a17"><picture class="i88"><source srcset="images/csi-logo-58-41.php 1x, images/csi-logo-116-41.php 2x, images/csi-logo-174-66.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-35.php 1x, images/csi-logo-116-35.php 2x, images/csi-logo-174-65.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-41.php 1x, images/csi-logo-174-67.php 2x, images/csi-logo-261-25.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-35.php 1x, images/csi-logo-174-35.php 2x, images/csi-logo-261-24.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-47.php 1x, images/csi-logo-108-47.php 2x, images/csi-logo-162-25.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-41.php 1x, images/csi-logo-108-41.php 2x, images/csi-logo-162-24.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-47.php 1x, images/csi-logo-136-95.php 2x, images/csi-logo-204-25.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-41.php 1x, images/csi-logo-136-82.php 2x, images/csi-logo-204-24.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-47.php 1x, images/csi-logo-170-47.php 2x, images/csi-logo-255-25.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-41.php 1x, images/csi-logo-170-41.php 2x, images/csi-logo-255-24.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-89.php 1x, images/csi-logo-272-47.php 2x, images/csi-logo-408-25.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-83.php 1x, images/csi-logo-272-41.php 2x, images/csi-logo-408-24.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-41.php" alt="cirp csi 2022" class="un1750 i90"></picture></a>
</div>
</div>
</div>
<div class="v74 ps1059 s1030 c1616"></div>
<div class="ps1060 v73 s1031">
<div class="v74 ps1061 s1032 c1610">
<div class="v74 ps1062 s1033 c1617">
<p class="p40 f295">6th CIRP Conference on Surface Integrity </p>
<p class="p40 f295">Day 3 presentations replay</p>
</div>
<div class="v74 ps1063 s1034 c1618">
<p class="p40 f296"><a href="cirpcsi2022.php"><x-svg class="s1035"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p40 f297"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps1064 v73 s1036">
<div class="v74 ps1065 s1037 c1610">
<div class="v74 ps1054 s1038 c1619">
<a href="cirpcsi2022session3.php" class="f298 btn364 v75 s1039">8:40 - 10:20 CET</a>
</div>
<div class="v74 ps1066 s1038 c1620">
<a href="#" class="f298 btn365 v75 s1039">10:50 - 12:30 CET</a>
</div>
</div>
<div class="v74 ps1067 s1040 c1621">
<p class="p41 f299">Themes scheduled on Day 3 between 10:50 and 12:30 CET</p>
</div>
<div class="v74 ps1068 s1041 c1622">
<a href="#anchor1" class="f300 btn366 v75 s1042">29- Cutting Processes &amp; Residual Stresses / Cutting Processes &amp; Surface Topography</a>
</div>
<div class="v74 ps1069 s1043 c1623">
<a href="#anchor2" class="f301 btn367 v75 s1044">30- Surface Integrity &amp; Functional Properties</a>
</div>
<div class="v74 ps1070 s1045 c1624">
<a href="#anchor3" class="f302 btn368 v75 s1044">31- Abrasive Processes</a>
</div>
</div>
<div class="c1625">
<div class="ps1071 v73 s1046">
<div class="s1047">
<div class="v74 ps1054 s1048 c1626">
<div class="v74 ps1072 s1049 c1627">
<p class="p41 f299">29- Cutting Processes &amp; Residual Stresses / Cutting Processes &amp; Surface Topography</p>
</div>
<div class="v74 ps1073 s1050 c1610">
<div class="v74 ps1054 s1050 w15">
<div class="v74 ps1054 s1050 c1628">
<div class="v74 ps1054 s1051 c1610">
<div class="v74 ps1054 s1051 w15">
<div class="v74 ps1054 s1052 c1629"></div>
<div class="v74 ps1074 s1053 c1630">
<p class="p41 f303">Ultrasonic assisted milling of a CoCrFeNi medium entropy alloy<br><span class="f304">Tim Richter, Diego Delgado Arroyo, Andreas Boerner, Dirk Schroepfer, Michael Rhode, Thomas Lindner, Martin Loebel, Bianca Preu and Thomas Lampke</span></p>
</div>
</div>
</div>
<div class="v74 ps1075 s1054 c1631"></div>
<div class="v5 ps351 s488 c1563"></div>
</div>
<div class="v74 ps1076 s1055 c1632">
<div class="v74 ps1054 s1056 c1633">
<p class="p40 f294"><a onclick="pop&&pop.openPopup('popup182');return false" style="cursor:pointer;"><x-svg class="s1028"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v74 ps1077 s1056 c1634">
<p class="p40 f294"><a onclick="pop&&pop.openPopup('popup183');return false" style="cursor:pointer;"><x-svg class="s1028"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c1465">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup184');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v74 ps1078 s1057 c1635">
<p class="p41 f305">Investigation of the surface integrity when cryogenic milling of Ti-6Al-4V using a sub-zero metalworking fluid<br><span class="f306">Kevin Gutzeit, Georgis Bulun, Gerhard Stelzer, Benjamin Kirsch, Jorg Seewig and Jan C. Aurich</span></p>
</div>
<div class="v5 ps1028 s1001 c1564">
<p class="p18 f164">Surface integrity in ultrasonic-assisted turning of Ti6Al4V using sustainable cutting fluid<br><span class="f165">Jay Airao, Chandrakant K. Nirala, Jose Outeiro and Navneet Khanna</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c1467">
<div class="v5 ps33 s785 c1565"></div>
<div class="v5 ps351 s1002 c1566"></div>
</div>
<div class="v5 ps1029 s1003 c1470">
<div class="v5 ps33 s1004 c1567">
<p class="p18 f190">Marker-free identification of milled surfaces by analyzing stochastic and kinematic surface features by means of wavelet transformation<br><span class="f191">Berend Denkena, Bernd Breidenstein, Marcel Wichmann, Henke Nordmeyer, Leon Reuter and Hendrik Voelker</span></p>
</div>
<div class="v5 ps1030 s1005 c1568">
<p class="p18 f164">Roughness values obtained in tests with ceramic tools<br><span class="f165">Nilson Rodrigues da Silva, Marcelo Antunes de Paula, Jose Vitor Candido de Souza, Manoel Cléber de Sampaio Alves and Marcos Valerio Ribeiro</span></p>
</div>
</div>
<div class="v5 ps1031 s396 c665">
<div class="v5 ps33 s387 c1191">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup185');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c775">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup186');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps1032 s859 c1473">
<div class="v5 ps33 s1006 c45">
<div class="v5 ps33 s1006 w2">
<div class="v5 ps359 s941 c1474">
<p class="p18 f116">30- Surface Integrity &amp; Functional Properties</p>
</div>
<div class="v5 ps789 s497 c516">
<div class="v5 ps33 s942 c45">
<div class="v5 ps33 s942 w2">
<div class="v5 ps33 s499 c1569"></div>
<div class="v5 ps1033 s1007 c1570">
<p class="p18 f164">Surface interactions of SiO2-nanofluids with 100Cr6-steel during machining<br><span class="f165">Christian Kohn, Robar Arafat, Annelise Jean-Fulcrand, Tim Abraham, Christoph Herrmann and Georg Garnweitner</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s487 c1571"></div>
<div class="v5 ps351 s488 c1572"></div>
</div>
<div class="v5 ps362 s405 c521">
<div class="v5 ps33 s387 c1573">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup187');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c1574">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup188');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c1575">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup189');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps1034 s1008 c1576">
<p class="p18 f164">Characterization of friction for the simulation of multi-pass orthogonal micro-cutting of 316L stainless steel<br><span class="f165">N. Fezai, L. Chaabani, N.F. Niang, M.H. Bin Haamsir, M. Fontaine, A. Gilbin and P. Picart</span></p>
</div>
<div class="v5 ps1035 s1009 c1577">
<p class="p18 f164">Open hole surface integrity and its impact on fatigue performance of Al 2024-T3/Ti-6Al-4V stacks<br><span class="f165">Jia Ge, Toby Feist, Alexander Elmore, Rincy Reji, Brian McLaughlin and Yan Jin</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s1010 c1578">
<div class="v5 ps1036 s1011 c45">
<div class="v5 ps33 s1012 c1579">
<p class="p18 f164">The Effects of Substrate Material on Chitosan Coating Performance for Biomedical Application<br><span class="f165">Michela Sanguedolce, Maria Rosaria Saffioti, Giovanna Rotella, Federica Curcio, Roberta Cassano, Domenico Umbrello and Luigino Filice</span></p>
</div>
<div class="v5 ps1037 s387 c1580">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup190');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps1038 s121"></a>
<div class="v5 ps1039 s1006 c873">
<div class="v5 ps359 s399 c1581">
<p class="p18 f116">31- Abrasive Processes</p>
</div>
<div class="v5 ps360 s497 c45">
<div class="v5 ps33 s497 w2">
<div class="v5 ps33 s497 c535">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c1582"></div>
<div class="v5 ps1040 s1013 c1583">
<p class="p18"><span class="f193">Investigations of grinding burns on a nitrided steel<br></span><span class="f165">B. Lavisse, L. Weiss, N. Kokanyan, A. Lefebvre, E. Henrion, O. Sinot and A. Tidu</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s796 c1584"></div>
<div class="v5 ps351 s488 c1585"></div>
</div>
<div class="v5 ps362 s405 c358">
<div class="v5 ps33 s387 c693">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup191');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s397 c1172">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup192');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c1173">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup193');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps1041 s1014 c1586">
<p class="p18 f164">Hybrid approach to evaluate surface integrity based on grinding power and Barkhausen noise<br><span class="f165">Jonas Heinzel, Rahel Jedamski, Maximilian Rossler, Bernhard Karpuschewski, Jeremy Epp and Martin Dix</span></p>
</div>
<div class="v5 ps1042 s1015 c1587">
<p class="p18 f162">Influence of the hybridization of machining processes  on surface integrity. A comprehensive approach to improving technological quality<br><span class="f163">W. Grzesik</span></p>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps1043 s121"></a>
<div class="v5 ps1044 s1016 c45">
<div class="v5 ps33 s1016 w2">
<div class="v5 ps33 s803 c1588"></div>
<div class="v5 ps1045 s1017 c1589">
<p class="p18 f164">Hardness Penetration Depth Prediction in the Grind-Hardening Process through a Combined FEM model<br><span class="f165">Flavia Lerra, Alessandro Ascari and Alessandro Fortunato</span></p>
</div>
<div class="v5 ps1046 s1018 c1403">
<div class="v5 ps33 s387 c1590">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup194');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c1591">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup195');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps1047 s1019 c1592">
<div class="v5 ps1048 s1020 c1593">
<p class="p18"><span class="f164">A study on abrasive waterjet multi-stage machining of ceramics<br></span><span class="f165">M. Sch</span><span class="f165">ü</span><span class="f165">ler, T. Herrig and T. Bergs</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<a name="anchor1" class="v73 ps1079 s1058"></a>
<div class="btf ps1049 v7 s419">
<div class="v5 ps1050 s568 c1594">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps1051 s49 c1595">
<div class="v5 ps38 s50 c1596">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1868"><source data-srcset="images/transparentks-102-49.php 1x, images/transparentks-204-49.php 2x, images/transparentks-306-74.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-43.php 1x, images/transparentks-204-43.php 2x, images/transparentks-306-73.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-49.php 1x, images/transparentks-306-75.php 2x, images/transparentks-459-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-43.php 1x, images/transparentks-306-43.php 2x, images/transparentks-459-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-53.php 1x, images/transparentks-114-53.php 2x, images/transparentks-171-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-47.php 1x, images/transparentks-114-47.php 2x, images/transparentks-171-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-49.php 1x, images/transparentks-142-143.php 2x, images/transparentks-213-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-43.php 1x, images/transparentks-142-124.php 2x, images/transparentks-213-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-101.php 1x, images/transparentks-178-101.php 2x, images/transparentks-267-51.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-89.php 1x, images/transparentks-178-89.php 2x, images/transparentks-267-50.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-137.php 1x, images/transparentks-284-93.php 2x, images/transparentks-426-51.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-125.php 1x, images/transparentks-284-81.php 2x, images/transparentks-426-50.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-81.php" title="knowledge &amp; skills logo" alt="logo" class="un1751 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1869">
<source data-srcset="images/k-stransparent-110-49.php 1x, images/k-stransparent-220-49.php 2x, images/k-stransparent-330-74.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-43.php 1x, images/k-stransparent-220-43.php 2x, images/k-stransparent-330-73.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-49.php 1x, images/k-stransparent-330-75.php 2x, images/k-stransparent-495-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-43.php 1x, images/k-stransparent-330-43.php 2x, images/k-stransparent-495-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-47.php 1x, images/k-stransparent-340-47.php 2x, images/k-stransparent-510-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-41.php 1x, images/k-stransparent-340-41.php 2x, images/k-stransparent-510-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-49.php 1x, images/k-stransparent-424-99.php 2x, images/k-stransparent-636-25.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-43.php 1x, images/k-stransparent-424-86.php 2x, images/k-stransparent-636-24.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-49.php 1x, images/k-stransparent-530-49.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-43.php 1x, images/k-stransparent-530-43.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-93.php 1x, images/k-stransparent-848-49.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-87.php 1x, images/k-stransparent-848-43.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-43.php" alt="Knowledge an Skills shared by talented engineers" class="un1752 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c1597"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c1598"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c1599"></div>
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
<div class="v5 ps38 s69 c1600">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v76 ps1080 s1059 c1636">
<div class="ps1081 v73 s1060">
<div class="v74 ps1082 s1061 c1637">
<p class="p41 f307">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f308"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v74 ps1083 s1062 c1638">
<a href="javascript:void(0)" class="denyConsent f309 btn369 v75 s1063">Refuse</a>
</div>
<div class="v74 ps1084 s1062 c1638">
<a href="javascript:void(0)" class="allowConsent f310 btn370 v75 s1063">OK</a>
</div>
</div>
</div>
<div id="popup195" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1085">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1639">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1268">
<div class="player un1753 pl187">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-653.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1601">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1602">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c964">
<a onclick="pop&&pop.closePopup('popup195');return false" style="cursor:pointer;" class="f67 btn348 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup194" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1087">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1640">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c298">
<div class="player un1754 pl188">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-421.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1603">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1604">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c290">
<a onclick="pop&&pop.closePopup('popup194');return false" style="cursor:pointer;" class="f67 btn349 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup193" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1088">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1641">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c308">
<div class="player un1755 pl189">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-858.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c975">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c976">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c300">
<a onclick="pop&&pop.closePopup('popup193');return false" style="cursor:pointer;" class="f67 btn350 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup192" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1089">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1642">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c314">
<div class="player un1756 pl190">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-486.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c977">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c978">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c979">
<a onclick="pop&&pop.closePopup('popup192');return false" style="cursor:pointer;" class="f67 btn351 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup191" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1090">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1643">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c980">
<div class="player un1757 pl191">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-578.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c981">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c982">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c702">
<a onclick="pop&&pop.closePopup('popup191');return false" style="cursor:pointer;" class="f67 btn352 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup189" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1091">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1644">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c315">
<div class="player un1758 pl192">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-432.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c316">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c317">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c318">
<a onclick="pop&&pop.closePopup('popup189');return false" style="cursor:pointer;" class="f67 btn353 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup188" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1092">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1645">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c983">
<div class="player un1759 pl193">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-645.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c984">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c985">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c324">
<a onclick="pop&&pop.closePopup('popup188');return false" style="cursor:pointer;" class="f67 btn354 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup187" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1093">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1646">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1510">
<div class="player un1760 pl194">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-368.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1511">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1512">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c709">
<a onclick="pop&&pop.closePopup('popup187');return false" style="cursor:pointer;" class="f67 btn355 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup190" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1094">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1647">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c333">
<div class="player un1761 pl195">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-794.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1513">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1514">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c325">
<a onclick="pop&&pop.closePopup('popup190');return false" style="cursor:pointer;" class="f67 btn356 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup196" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1095">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1648">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c339">
<div class="player un1762 pl196">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-2000.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c922">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1515">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c712">
<a onclick="pop&&pop.closePopup('popup196');return false" style="cursor:pointer;" class="f67 btn357 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup186" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1096">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1649">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1516">
<div class="player un1763 pl197">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-564.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1517">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1518">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c715">
<a onclick="pop&&pop.closePopup('popup186');return false" style="cursor:pointer;" class="f67 btn358 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup185" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1097">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1650">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c340">
<div class="player un1764 pl198">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-436.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c341">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c342">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c343">
<a onclick="pop&&pop.closePopup('popup185');return false" style="cursor:pointer;" class="f67 btn359 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup184" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1098">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1651">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1605">
<div class="player un1765 pl199">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-388.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c807">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1606">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c349">
<a onclick="pop&&pop.closePopup('popup184');return false" style="cursor:pointer;" class="f67 btn360 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup183" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1099">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1652">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1607">
<div class="player un1766 pl200">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-370.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c906">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1608">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c723">
<a onclick="pop&&pop.closePopup('popup183');return false" style="cursor:pointer;" class="f67 btn361 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup182" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps1100">
<div onclick="event.stopPropagation()" class="popup v77 ps1086 s1064 c1653">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c357">
<div class="player un1767 pl201">
<video preload="metadata" poster="images/poster-3592-9.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-1267.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c898">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1609">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c350">
<a onclick="pop&&pop.closePopup('popup182');return false" style="cursor:pointer;" class="f67 btn362 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session3-2.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>