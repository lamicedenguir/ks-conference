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
            $redirect = 'cirpcsi2022session1-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '778B88A4-F538-45F1-ACEC-5507EB242323';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-2.php';
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
<title>Day 1 sessions 14h45 to 16h05</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1-2.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 1 sessions 14h45 to 16h05">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps467{position:relative;margin-top:0}.v38{display:block;vertical-align:top}.s506{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v39{display:inline-block;vertical-align:top}.ps468{position:relative;margin-left:0;margin-top:0}.s507{min-width:1920px;width:1920px;min-height:142px}.ps469{position:relative;margin-left:0;margin-top:0}.s508{min-width:165px;width:165px;min-height:142px;height:142px}.c729{z-index:3;pointer-events:auto}.a10{display:block}.i59{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i60{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps470{position:relative;margin-left:-21px;margin-top:6px}.s509{min-width:424px;width:424px;min-height:130px;height:130px}.c730{z-index:1;pointer-events:auto}.i61{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps471{position:relative;margin-left:1038px;margin-top:54px}.s510{min-width:84px;width:84px;min-height:36px}.c731{z-index:22;pointer-events:auto}.f146{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn164{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn164:hover{background-color:#82939e;border-color:#000;color:#000}.btn164:active{background-color:#677a85;border-color:#000;color:#808080}.v40{display:inline-block;overflow:hidden;outline:0}.s511{width:84px;padding-right:0;height:24px}.ps472{position:relative;margin-left:10px;margin-top:30px}.s512{min-width:84px;width:84px;min-height:82px}.c732{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p26{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f147{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s513{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps473{position:relative;margin-left:0;margin-top:21px}.s514{min-width:136px;width:136px;min-height:100px;height:100px}.c733{z-index:19;pointer-events:auto}.i62{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps474{position:relative;margin-top:8px}.s515{width:100%;min-width:1920px;min-height:744px}.c734{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-38.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c734{background-image:url(images/cirp-csi-2022-320-44.php)}.ps475{position:relative;margin-top:60px}.s516{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps476{position:relative;margin-left:240px;margin-top:0}.s517{min-width:1600px;width:1600px;min-height:160px}.ps477{position:relative;margin-left:0;margin-top:0}.s518{min-width:1520px;width:1520px;min-height:160px}.c735{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f148{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps478{position:relative;margin-left:-4px;margin-top:0}.s519{min-width:84px;width:84px;min-height:80px}.c736{z-index:139;pointer-events:auto;overflow:hidden;height:80px}.f149{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s520{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f150{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps479{position:relative;margin-top:104px}.s521{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:427px}.ps480{position:relative;margin-left:500px;margin-top:0}.s522{min-width:1040px;width:1040px;min-height:70px}.s523{min-width:320px;width:320px;min-height:70px}.c737{z-index:18;pointer-events:auto}.f151{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn165{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn165:hover{background-color:#82939e;border-color:#000;color:#000}.btn165:active{background-color:#677a85;border-color:#000;color:#808080}.s524{width:320px;padding-right:0;height:29px}.ps481{position:relative;margin-left:40px;margin-top:0}.c738{z-index:23;pointer-events:auto}.btn166{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn166:hover{background-color:#82939e;border-color:#000;color:#000}.btn166:active{background-color:#677a85;border-color:#000;color:#808080}.ps482{position:relative;margin-left:40px;margin-top:0}.c739{z-index:24;pointer-events:auto}.btn167{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn167:hover{background-color:#82939e;border-color:#000;color:#000}.btn167:active{background-color:#677a85;border-color:#000;color:#808080}.ps483{position:relative;margin-left:55px;margin-top:46px}.s525{min-width:845px;width:845px;min-height:51px}.c740{z-index:25;pointer-events:auto;overflow:hidden;height:51px}.p27{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f152{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps484{position:relative;margin-left:55px;margin-top:22px}.s526{min-width:1805px;width:1805px;min-height:63px}.c741{z-index:26;pointer-events:auto}.f153{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn168{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn168:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn168:active{background-color:#677a85;border-color:#000;color:#fff}.s527{width:1805px;padding-right:0;height:34px}.ps485{position:relative;margin-left:55px;margin-top:19px}.s528{min-width:1805px;width:1805px;min-height:63px}.c742{z-index:27;pointer-events:auto}.f154{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn169{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn169:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn169:active{background-color:#677a85;border-color:#000;color:#fff}.ps486{position:relative;margin-left:55px;margin-top:24px}.s529{min-width:1805px;width:1805px;min-height:63px}.c743{z-index:28;pointer-events:auto}.f155{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn170{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn170:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn170:active{background-color:#677a85;border-color:#000;color:#fff}.s530{width:1805px;padding-right:0;height:34px}.c744{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:26px;min-height:2031px}.ps487{position:relative;margin-top:0}.s531{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2031px}.s532{width:1926px;margin-left:-3px;min-height:2031px}.s533{min-width:1926px;width:1926px;min-height:642px}.c745{z-index:29}.ps488{position:relative;margin-left:58px;margin-top:0}.s534{min-width:600px;width:600px;min-height:51px}.c746{z-index:31;pointer-events:auto;overflow:hidden;height:51px}.ps489{position:relative;margin-left:0;margin-top:-3px}.s535{min-width:1926px;width:1926px;min-height:447px}.w8{line-height:0}.c747{z-index:32}.s536{min-width:1926px;width:1926px;min-height:153px}.s537{min-width:1920px;width:1920px;min-height:147px}.c748{z-index:34;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps490{position:relative;margin-left:23px;margin-top:-145px}.s538{min-width:1764px;width:1764px;min-height:142px}.c749{z-index:35;pointer-events:auto;overflow:hidden;height:142px}.f156{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.468;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f157{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.468;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps491{position:relative;margin-left:0;margin-top:-6px}.s539{min-width:1920px;width:1920px;min-height:147px}.c750{z-index:33;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps492{position:relative;margin-left:1843px;margin-top:-413px}.s540{min-width:54px;width:54px;min-height:380px}.c751{z-index:37}.s541{min-width:54px;width:54px;min-height:86px}.c752{z-index:40;pointer-events:auto;overflow:hidden;height:86px}.ps493{position:relative;margin-left:0;margin-top:61px}.c753{z-index:41;pointer-events:auto;overflow:hidden;height:86px}.ps494{position:relative;margin-left:23px;margin-top:-294px}.s542{min-width:1764px;width:1764px;min-height:142px}.c754{z-index:39;pointer-events:auto;overflow:hidden;height:142px}.ps495{position:relative;margin-left:0;margin-top:-2031px}.s543{min-width:1920px;width:1920px;min-height:1px}.v41{display:none;vertical-align:top}.s544{width:100%;min-width:1920px;min-height:198px}.c755{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps497{position:relative;margin-top:34px}.s545{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps498{position:relative;margin-left:24px;margin-top:0}.s546{min-width:1876px;width:1876px;min-height:78px}.c756{pointer-events:auto;overflow:hidden;height:78px}.f158{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f159{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps499{position:relative;margin-left:684px;margin-top:0}.s547{min-width:256px;width:256px;min-height:64px}.c757{pointer-events:auto}.f160{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn171{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn171:hover{background-color:#82939e;border-color:#000;color:#000}.btn171:active{background-color:#181b28;border-color:#000;color:#808080}.s548{width:256px;padding-right:0;height:24px}.ps500{position:relative;margin-left:40px;margin-top:0}.f161{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn172{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn172:hover{background-color:#82939e;border-color:#000;color:#000}.btn172:active{background-color:#181b28;border-color:#000;color:#808080}.ps501{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435206;pointer-events:none;visibility:hidden;opacity:0}.v42{display:inline-block;vertical-align:top;pointer-events:auto}.ps502{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s549{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c758{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps503{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435201;pointer-events:none;visibility:hidden;opacity:0}.c759{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps504{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435196;pointer-events:none;visibility:hidden;opacity:0}.c760{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps505{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435191;pointer-events:none;visibility:hidden;opacity:0}.c761{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps506{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435186;pointer-events:none;visibility:hidden;opacity:0}.c762{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps507{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435181;pointer-events:none;visibility:hidden;opacity:0}.c763{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps508{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435176;pointer-events:none;visibility:hidden;opacity:0}.c764{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps509{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435171;pointer-events:none;visibility:hidden;opacity:0}.c765{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps510{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435166;pointer-events:none;visibility:hidden;opacity:0}.c766{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps511{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435161;pointer-events:none;visibility:hidden;opacity:0}.c767{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps512{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435156;pointer-events:none;visibility:hidden;opacity:0}.c768{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps513{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435151;pointer-events:none;visibility:hidden;opacity:0}.c769{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps467{margin-top:4px}.s506{min-width:1200px;width:1200px;min-height:89px}.s507{min-width:1200px;width:1200px;min-height:89px}.s508{min-width:115px;width:115px;min-height:89px;height:89px}.i59{left:13px;width:89px;height:89px}.ps470{margin-left:-16px;margin-top:4px}.s509{min-width:265px;width:265px;min-height:81px;height:81px}.i61{width:265px;height:81px}.ps471{margin-left:640px;margin-top:30px}.s510{min-width:52px;width:52px;min-height:22px}.f146{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s511{width:52px;height:15px}.ps472{margin-left:7px;margin-top:15px}.s512{min-width:52px;width:52px;min-height:51px}.c732{height:51px}.f147{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s513{height:30px;transform:scale(1.000) translateY(3px)}.ps473{margin-top:9px}.s514{min-width:85px;width:85px;min-height:63px;height:63px}.i62{width:85px;height:31px;top:16px}.ps474{margin-top:5px}.s515{min-width:1200px;min-height:494px}.ps475{margin-top:4px}.s516{min-width:1200px;width:1200px;min-height:116px}.ps476{margin-left:150px}.s517{min-width:999px;width:999px;min-height:116px}.s518{min-width:950px;width:950px;min-height:116px}.c735{height:116px}.f148{font-size:30px;font-size:calc(30px * var(--f))}.ps478{margin-left:-3px}.s519{min-width:52px;width:52px;min-height:58px}.c736{height:58px}.f149{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s520{height:27px;transform:scale(1.111) translateY(2px)}.f150{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps479{margin-top:49px}.s521{min-width:1200px;width:1200px;min-height:280px}.ps480{margin-left:275px}.s522{min-width:650px;width:650px;min-height:44px}.s523{min-width:200px;width:200px;min-height:44px}.f151{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s524{width:200px;height:18px}.ps481{margin-left:25px}.ps482{margin-left:25px}.ps483{margin-left:34px;margin-top:40px}.s525{min-width:485px;width:485px;min-height:35px}.c740{height:35px}.f152{font-size:18px;font-size:calc(18px * var(--f))}.ps484{margin-left:34px;margin-top:10px}.s526{min-width:1129px;width:1129px;min-height:39px}.f153{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s527{width:1129px;height:21px}.ps485{margin-left:34px;margin-top:12px}.s528{min-width:1129px;width:1129px;min-height:40px}.f154{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.ps486{margin-left:34px;margin-top:15px}.s529{min-width:1129px;width:1129px;min-height:39px}.f155{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s530{width:1129px;height:21px}.c744{width:max(1200px, 100%);margin-top:14px;min-height:1276px}.s531{min-width:1200px;width:1200px;min-height:1276px}.s532{width:1206px;min-height:1276px}.s533{min-width:1206px;width:1206px;min-height:403px}.ps488{margin-left:37px}.s534{min-width:375px;width:375px;min-height:32px}.c746{height:32px}.s535{min-width:1206px;width:1206px;min-height:282px}.s536{min-width:1206px;width:1206px;min-height:98px}.s537{min-width:1200px;width:1200px;min-height:92px}.ps490{margin-left:9px;margin-top:-92px}.s538{min-width:1107px;width:1107px;min-height:89px}.c749{height:89px}.f156{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.f157{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.s539{min-width:1200px;width:1200px;min-height:92px}.ps492{margin-left:1149px;margin-top:-259px}.s540{min-width:33px;width:33px;min-height:237px}.s541{min-width:33px;width:33px;min-height:53px}.c752{height:53px}.ps493{margin-top:39px}.c753{height:53px}.ps494{margin-left:9px;margin-top:-185px}.s542{min-width:1107px;width:1107px;min-height:89px}.c754{height:89px}.ps495{margin-top:-1276px}.s543{min-width:1200px;width:1200px}.s544{min-width:1200px;min-height:129px}.ps497{margin-top:21px}.s545{min-width:1200px;width:1200px;min-height:84px}.ps498{margin-left:15px}.s546{min-width:1172px;width:1172px;min-height:49px}.c756{height:49px}.f158{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f159{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps499{margin-left:412px;margin-top:-5px}.s547{min-width:160px;width:160px;min-height:40px}.f160{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s548{width:160px;height:15px}.ps500{margin-left:55px;margin-top:-5px}.f161{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps502{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s549{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s506{min-width:960px;width:960px;min-height:71px}.s507{min-width:960px;width:960px;min-height:71px}.s508{min-width:69px;width:69px;min-height:71px;height:71px}.i59{left:0;width:69px;height:69px;top:1px}.ps470{margin-left:1px;margin-top:3px}.s509{min-width:212px;width:212px;min-height:65px;height:65px}.i61{width:212px;height:65px}.ps471{margin-left:521px;margin-top:27px}.s510{min-width:42px;width:42px;min-height:18px}.f146{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s511{width:42px;height:11px}.ps472{margin-left:5px;margin-top:15px}.s512{min-width:42px;width:42px;min-height:41px}.c732{height:41px}.f147{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s513{height:24px;transform:scale(1.000) translateY(2px)}.ps473{margin-top:10px}.s514{min-width:68px;width:68px;min-height:51px;height:51px}.i62{width:68px;height:25px;top:13px}.ps474{margin-top:4px}.s515{min-width:960px;min-height:501px}.ps475{margin-top:0}.s516{min-width:960px;width:960px;min-height:92px}.ps476{margin-left:118px}.s517{min-width:802px;width:802px;min-height:92px}.s518{min-width:760px;width:760px;min-height:92px}.c735{height:92px}.f148{font-size:24px;font-size:calc(24px * var(--f))}.ps478{margin-left:0}.s519{min-width:42px;width:42px;min-height:46px}.c736{height:46px}.f149{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s520{height:22px;transform:scale(1.111) translateY(2px)}.f150{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps479{margin-top:8px}.s521{min-width:960px;width:960px;min-height:215px}.ps480{margin-left:220px}.s522{min-width:520px;width:520px;min-height:35px}.s523{min-width:160px;width:160px;min-height:35px}.f151{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s524{width:160px;height:15px}.ps481{margin-left:20px}.ps482{margin-left:20px}.ps483{margin-left:27px;margin-top:19px}.s525{min-width:368px;width:368px;min-height:26px}.c740{height:26px}.f152{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps484{margin-left:27px;margin-top:13px}.s526{min-width:903px;width:903px;min-height:31px}.f153{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s527{width:903px;height:16px}.ps485{margin-left:27px;margin-top:10px}.s528{min-width:903px;width:903px;min-height:32px}.f154{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.ps486{margin-left:27px;margin-top:12px}.s529{min-width:903px;width:903px;min-height:31px}.f155{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s530{width:903px;height:16px}.c744{width:max(960px, 100%);margin-top:14px;min-height:1025px}.s531{min-width:960px;width:960px;min-height:1025px}.s532{width:966px;min-height:1025px}.s533{min-width:966px;width:966px;min-height:323px}.ps488{margin-left:30px}.s534{min-width:300px;width:300px;min-height:26px}.c746{height:26px}.s535{min-width:966px;width:966px;min-height:227px}.s536{min-width:966px;width:966px;min-height:79px}.s537{min-width:960px;width:960px;min-height:73px}.ps490{margin-left:7px;margin-top:-74px}.s538{min-width:892px;width:892px;min-height:71px}.c749{height:71px}.f156{font-size:15px;font-size:calc(15px * var(--f))}.f157{font-size:15px;font-size:calc(15px * var(--f))}.s539{min-width:960px;width:960px;min-height:74px}.ps492{margin-left:926px;margin-top:-209px}.s540{min-width:28px;width:28px;min-height:190px}.s541{min-width:26px;width:26px;min-height:42px}.c752{height:42px}.ps493{margin-left:2px;margin-top:29px}.c753{height:42px}.ps494{margin-left:7px;margin-top:-148px}.s542{min-width:890px;width:890px;min-height:71px}.c754{height:71px}.ps495{margin-top:-1025px}.s543{min-width:960px;width:960px}.s544{min-width:960px;min-height:106px}.ps497{margin-top:17px}.s545{min-width:960px;width:960px;min-height:68px}.ps498{margin-left:12px}.s546{min-width:938px;width:938px;min-height:39px}.c756{height:39px}.f158{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f159{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps499{margin-left:342px;margin-top:-3px}.s547{min-width:128px;width:128px;min-height:32px}.f160{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s548{width:128px;height:12px}.ps500{margin-left:20px;margin-top:-3px}.f161{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps502{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s549{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s506{min-width:768px;width:768px;min-height:57px}.s507{min-width:768px;width:768px;min-height:57px}.s508{min-width:55px;width:55px;min-height:57px;height:57px}.i59{left:0;width:55px;height:55px;top:1px}.ps470{margin-left:1px;margin-top:2px}.s509{min-width:170px;width:170px;min-height:52px;height:52px}.i61{width:170px;height:52px}.ps471{margin-left:416px;margin-top:22px}.s510{min-width:34px;width:34px;min-height:14px}.f146{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s511{width:34px;height:9px}.ps472{margin-left:4px;margin-top:12px}.s512{min-width:34px;width:34px;min-height:33px}.c732{height:33px}.f147{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s513{height:19px;transform:scale(1.000) translateY(2px)}.ps473{margin-top:8px}.s514{min-width:54px;width:54px;min-height:41px;height:41px}.i62{width:54px;height:20px;top:10px}.ps474{margin-top:3px}.s515{min-width:768px;min-height:401px}.ps475{margin-top:0}.s516{min-width:768px;width:768px;min-height:73px}.ps476{margin-left:94px}.s517{min-width:642px;width:642px;min-height:73px}.s518{min-width:608px;width:608px;min-height:73px}.c735{height:73px}.f148{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps478{margin-left:0}.s519{min-width:34px;width:34px;min-height:37px}.c736{height:37px}.f149{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s520{height:17px;transform:scale(1.111) translateY(2px)}.f150{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps479{margin-top:7px}.s521{min-width:768px;width:768px;min-height:173px}.ps480{margin-left:176px}.s522{min-width:416px;width:416px;min-height:28px}.s523{min-width:128px;width:128px;min-height:28px}.f151{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s524{width:128px;height:11px}.ps481{margin-left:16px}.ps482{margin-left:16px}.ps483{margin-left:22px;margin-top:15px}.s525{min-width:294px;width:294px;min-height:21px}.c740{height:21px}.f152{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps484{margin-left:22px;margin-top:10px}.s526{min-width:722px;width:722px;min-height:25px}.f153{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s527{width:722px;height:12px}.ps485{margin-left:22px;margin-top:8px}.s528{min-width:722px;width:722px;min-height:26px}.f154{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:7px}.ps486{margin-left:22px;margin-top:9px}.s529{min-width:722px;width:722px;min-height:25px}.f155{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s530{width:722px;height:12px}.c744{width:max(768px, 100%);margin-top:10px;min-height:821px}.s531{min-width:768px;width:768px;min-height:821px}.s532{width:774px;min-height:821px}.s533{min-width:774px;width:774px;min-height:259px}.ps488{margin-left:25px}.s534{min-width:240px;width:240px;min-height:21px}.c746{height:21px}.s535{min-width:774px;width:774px;min-height:183px}.s536{min-width:774px;width:774px;min-height:64px}.s537{min-width:768px;width:768px;min-height:58px}.ps490{margin-left:6px;margin-top:-60px}.s538{min-width:714px;width:714px;min-height:57px}.c749{height:57px}.f156{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f157{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.s539{min-width:768px;width:768px;min-height:59px}.ps492{margin-left:741px;margin-top:-168px}.s540{min-width:23px;width:23px;min-height:152px}.s541{min-width:21px;width:21px;min-height:33px}.c752{height:33px}.ps493{margin-left:2px;margin-top:24px}.c753{height:33px}.ps494{margin-left:6px;margin-top:-119px}.s542{min-width:712px;width:712px;min-height:56px}.c754{height:56px}.ps495{margin-top:-821px}.s543{min-width:768px;width:768px}.s544{min-width:768px;min-height:85px}.ps497{margin-top:14px}.s545{min-width:768px;width:768px;min-height:54px}.ps498{margin-left:10px}.s546{min-width:750px;width:750px;min-height:31px}.c756{height:31px}.f158{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f159{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps499{margin-left:274px;margin-top:-3px}.s547{min-width:102px;width:102px;min-height:26px}.f160{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s548{width:102px;height:10px}.ps500{margin-left:16px;margin-top:-3px}.f161{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps502{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s549{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps467{margin-top:29px}.s506{min-width:480px;width:480px;min-height:153px}.ps468{margin-left:6px}.s507{min-width:464px;width:464px;min-height:153px}.s508{min-width:120px;width:120px;min-height:96px;height:96px}.i59{width:96px;height:96px}.ps470{margin-left:-25px;margin-top:19px}.s509{min-width:196px;width:196px;min-height:59px;height:59px}.i61{width:196px;height:59px}.ps471{margin-left:33px;margin-top:117px}.s510{min-width:140px;width:140px}.s511{width:140px}.ps472{margin-left:324px;margin-top:-143px}.s512{min-width:71px;width:71px;min-height:62px}.c732{height:62px}.f147{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s513{height:37px;transform:scale(1.000) translateY(4px)}.ps473{margin-left:377px;margin-top:-150px}.s514{min-width:87px;width:87px;min-height:75px;height:75px}.i62{width:87px;height:32px;top:21px}.ps474{margin-top:-47px}.s515{min-width:480px;min-height:336px}.ps475{margin-top:-66px}.s516{min-width:480px;width:480px;min-height:230px}.ps476{margin-left:33px}.s517{min-width:447px;width:447px;min-height:230px}.ps477{margin-top:66px}.s518{min-width:414px;width:414px;min-height:164px}.c735{height:164px}.f148{font-size:30px;font-size:calc(30px * var(--f))}.ps478{margin-left:-37px}.s519{min-width:70px;width:70px;min-height:66px}.c736{height:66px}.f149{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s520{height:33px}.f150{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps479{margin-top:46px}.s521{min-width:480px;width:480px;min-height:746px}.ps480{margin-left:33px}.s522{min-width:414px;width:414px;min-height:333px}.s523{min-width:414px;width:414px;min-height:72px}.f151{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s524{width:414px;height:33px}.ps481{margin-left:0;margin-top:57px}.ps482{margin-left:0;margin-top:60px}.ps483{margin-left:9px;margin-top:32px}.s525{min-width:462px;width:462px;min-height:91px}.c740{height:91px}.f152{font-size:21px;font-size:calc(21px * var(--f))}.ps484{margin-left:15px;margin-top:0}.s526{min-width:452px;width:452px;min-height:83px}.f153{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s527{width:452px;height:26px}.ps485{margin-left:15px}.s528{min-width:452px;width:452px;min-height:83px}.f154{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.ps486{margin-left:15px;margin-top:18px}.s529{min-width:452px;width:452px;min-height:81px}.f155{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239}.s530{width:452px;height:52px}.c744{width:max(480px, 100%);margin-top:25px;min-height:1490px}.s531{min-width:480px;width:480px;min-height:1490px}.s532{width:486px;min-height:1490px}.s533{min-width:486px;width:486px;min-height:459px}.ps488{margin-left:12px}.s534{min-width:462px;width:462px;min-height:39px}.c746{height:39px}.s535{min-width:486px;width:486px;min-height:317px}.s536{min-width:486px;width:486px;min-height:108px}.s537{min-width:480px;width:480px;min-height:102px}.ps490{margin-left:8px;margin-top:-102px}.s538{min-width:411px;width:411px;min-height:102px}.c749{height:102px}.f156{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f157{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s539{min-width:480px;width:480px;min-height:107px}.ps492{margin-left:425px;margin-top:-294px}.s540{min-width:58px;width:58px;min-height:267px}.s541{min-width:58px;width:58px;min-height:63px}.c752{height:63px}.ps493{margin-top:39px}.c753{height:63px}.ps494{margin-left:8px;margin-top:-203px}.s542{min-width:411px;width:411px;min-height:93px}.c754{height:93px}.ps495{margin-top:-1539px}.s543{min-width:480px;width:480px}.s544{min-width:480px}.ps497{margin-top:8px}.s545{min-width:480px;width:480px;min-height:166px}.ps498{margin-left:17px}.s546{min-width:448px;width:448px;min-height:136px}.c756{height:136px}.f158{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f159{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps499{margin-left:137px}.s547{min-width:99px;width:99px;min-height:30px}.f160{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s548{width:99px;height:18px}.ps500{margin-left:9px}.f161{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps502{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s549{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps467{margin-top:19px}.s506{min-width:320px;width:320px;min-height:102px}.ps468{margin-left:4px}.s507{min-width:309px;width:309px;min-height:102px}.s508{min-width:80px;width:80px;min-height:64px;height:64px}.i59{left:8px;width:64px;height:64px}.ps470{margin-left:-17px;margin-top:13px}.s509{min-width:131px;width:131px;min-height:39px;height:39px}.i61{width:131px;height:39px}.ps471{margin-left:22px;margin-top:78px}.s510{min-width:93px;width:93px;min-height:24px}.f146{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s511{width:93px;height:16px}.ps472{margin-left:216px;margin-top:-95px}.s512{min-width:47px;width:47px;min-height:41px}.c732{height:41px}.f147{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s513{height:25px;transform:scale(1.000) translateY(3px)}.ps473{margin-left:251px;margin-top:-100px}.s514{min-width:58px;width:58px;min-height:50px;height:50px}.i62{width:58px;height:21px;top:15px}.ps474{margin-top:-31px}.s515{min-width:320px;min-height:224px}.ps475{margin-top:-44px}.s516{min-width:320px;width:320px;min-height:153px}.ps476{margin-left:22px}.s517{min-width:298px;width:298px;min-height:153px}.ps477{margin-top:44px}.s518{min-width:276px;width:276px;min-height:109px}.c735{height:109px}.f148{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps478{margin-left:-25px}.s519{min-width:47px;width:47px;min-height:44px}.c736{height:44px}.f149{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s520{height:22px;transform:scale(1.111) translateY(2px)}.f150{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps479{margin-top:31px}.s521{min-width:320px;width:320px;min-height:499px}.ps480{margin-left:22px}.s522{min-width:276px;width:276px;min-height:222px}.s523{min-width:276px;width:276px;min-height:48px}.f151{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s524{width:276px;height:23px}.ps481{margin-left:0;margin-top:38px}.ps482{margin-left:0;margin-top:40px}.ps483{margin-left:6px;margin-top:21px}.s525{min-width:308px;width:308px;min-height:61px}.c740{height:61px}.f152{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps484{margin-left:10px;margin-top:0}.s526{min-width:301px;width:301px;min-height:55px}.f153{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s527{width:301px;height:17px}.ps485{margin-left:10px;margin-top:13px}.s528{min-width:301px;width:301px;min-height:55px}.f154{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps486{margin-left:10px;margin-top:12px}.s529{min-width:301px;width:301px;min-height:54px}.f155{font-size:14px;font-size:calc(14px * var(--f));padding-top:10px;padding-bottom:10px}.s530{width:301px}.c744{width:max(320px, 100%);margin-top:15px;min-height:994px}.s531{min-width:320px;width:320px;min-height:994px}.s532{width:326px;min-height:994px}.s533{min-width:326px;width:326px;min-height:307px}.ps488{margin-left:9px}.s534{min-width:308px;width:308px;min-height:26px}.c746{height:26px}.s535{min-width:326px;width:326px;min-height:213px}.s536{min-width:326px;width:326px;min-height:74px}.s537{min-width:320px;width:320px;min-height:68px}.ps490{margin-left:6px;margin-top:-69px}.s538{min-width:274px;width:274px;min-height:68px}.c749{height:68px}.f156{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f157{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s539{min-width:320px;width:320px;min-height:71px}.ps492{margin-left:284px;margin-top:-197px}.s540{min-width:39px;width:39px;min-height:178px}.s541{min-width:39px;width:39px;min-height:42px}.c752{height:42px}.ps493{margin-top:26px}.c753{height:42px}.ps494{margin-left:6px;margin-top:-136px}.s542{min-width:274px;width:274px;min-height:62px}.c754{height:62px}.ps495{margin-top:-1027px}.s543{min-width:320px;width:320px}.s544{min-width:320px;min-height:132px}.ps497{margin-top:5px}.s545{min-width:320px;width:320px;min-height:111px}.ps498{margin-left:11px}.s546{min-width:299px;width:299px;min-height:91px}.c756{height:91px}.f158{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f159{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps499{margin-left:91px}.s547{min-width:66px;width:66px;min-height:20px}.f160{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s548{width:66px;height:12px}.ps500{margin-left:6px}.f161{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps502{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s549{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-640-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-640-44.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-960-104.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-105.php)}}@media (min-width:320px) {.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}.c734{background-image:url(images/cirp-csi-2022-480-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-480-44.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}.c734{background-image:url(images/cirp-csi-2022-960-76.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-106.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}.c734{background-image:url(images/cirp-csi-2022-1440-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1440-11.php)}}@media (min-width:480px) {.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}.c734{background-image:url(images/cirp-csi-2022-768-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-768-44.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}.c734{background-image:url(images/cirp-csi-2022-1536-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1536-44.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}.c734{background-image:url(images/cirp-csi-2022-2304-10.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2304-11.php)}}@media (min-width:768px) {.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}.c734{background-image:url(images/cirp-csi-2022-960-77.php)}.webp .c734{background-image:url(images/cirp-csi-2022-960-88.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}.c734{background-image:url(images/cirp-csi-2022-1920-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1920-44.php)}}@media (min-width:960px) {.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}.c734{background-image:url(images/cirp-csi-2022-1200-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1200-44.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}.c734{background-image:url(images/cirp-csi-2022-2400-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2400-44.php)}}@media (min-width:1200px) {.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}.c734{background-image:url(images/cirp-csi-2022-1415-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-1415-38.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}.c734{background-image:url(images/cirp-csi-2022-2830-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2830-38.php)}}@media (min-width:1600px) {.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}.c734{background-image:url(images/cirp-csi-2022-2000-38.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2000-44.php)}}@media (min-width:2000px) {.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}.c734{background-image:url(images/cirp-csi-2022-2131-32.php)}.webp .c734{background-image:url(images/cirp-csi-2022-2131-38.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1-2.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps467 v38 s506">
<div class="v39 ps468 s507 c728">
<div class="v39 ps469 s508 c729">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a10"><picture class="i60"><source srcset="images/transparentks-64-44.php 1x, images/transparentks-128-44.php 2x, images/transparentks-192-55.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-38.php 1x, images/transparentks-128-38.php 2x, images/transparentks-192-54.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-44.php 1x, images/transparentks-192-56.php 2x, images/transparentks-288-11.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-38.php 1x, images/transparentks-192-38.php 2x, images/transparentks-288-10.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-38.php 1x, images/transparentks-110-38.php 2x, images/transparentks-165-11.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-32.php 1x, images/transparentks-110-32.php 2x, images/transparentks-165-10.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-38.php 1x, images/transparentks-138-38.php 2x, images/transparentks-207-11.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-32.php 1x, images/transparentks-138-32.php 2x, images/transparentks-207-10.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-90.php 1x, images/transparentks-178-90.php 2x, images/transparentks-267-21.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-78.php 1x, images/transparentks-178-78.php 2x, images/transparentks-267-20.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-126.php 1x, images/transparentks-284-82.php 2x, images/transparentks-426-21.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-108.php 1x, images/transparentks-284-70.php 2x, images/transparentks-426-20.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-70.php" title="knowledge &amp; skills logo" alt="ks logo" class="un768 i59"></picture></a>
<?php
    }
?>

</div>
<div class="v39 ps470 s509 c730">
<picture class="i60">
<source srcset="images/k-stransparent-131-36.php 1x, images/k-stransparent-262-36.php 2x, images/k-stransparent-393-11.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-30.php 1x, images/k-stransparent-262-30.php 2x, images/k-stransparent-393-10.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-36.php 1x, images/k-stransparent-392-36.php 2x, images/k-stransparent-588-11.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-30.php 1x, images/k-stransparent-392-30.php 2x, images/k-stransparent-588-10.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-42.php 1x, images/k-stransparent-340-42.php 2x, images/k-stransparent-510-11.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-36.php 1x, images/k-stransparent-340-36.php 2x, images/k-stransparent-510-10.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-44.php 1x, images/k-stransparent-424-94.php 2x, images/k-stransparent-636-11.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-38.php 1x, images/k-stransparent-424-76.php 2x, images/k-stransparent-636-10.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-44.php 1x, images/k-stransparent-530-44.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-38.php 1x, images/k-stransparent-530-38.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-88.php 1x, images/k-stransparent-848-44.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-77.php 1x, images/k-stransparent-848-38.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-38.php" alt="Knowledge an Skills shared by talented engineers" class="un769 i61">
</picture>
</div>
<div class="v39 ps471 s510 c731">
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
<a href="./logout-415c8e.php" class="f146 btn164 v40 s511">Logout</a>
<?php
    }
?>

</div>
<div class="v39 ps472 s512 c732">
<p class="p26 f147"><a href="cirpcsi2022.php"><x-svg class="s513"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v39 ps473 s514 c733">
<a href="cirpcsi2022.php" class="a10"><picture class="i60"><source srcset="images/csi-logo-58-36.php 1x, images/csi-logo-116-36.php 2x, images/csi-logo-174-47.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-30.php 1x, images/csi-logo-116-30.php 2x, images/csi-logo-174-46.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-36.php 1x, images/csi-logo-174-48.php 2x, images/csi-logo-261-11.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-30.php 1x, images/csi-logo-174-30.php 2x, images/csi-logo-261-10.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-42.php 1x, images/csi-logo-108-42.php 2x, images/csi-logo-162-11.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-36.php 1x, images/csi-logo-108-36.php 2x, images/csi-logo-162-10.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-42.php 1x, images/csi-logo-136-90.php 2x, images/csi-logo-204-11.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-36.php 1x, images/csi-logo-136-72.php 2x, images/csi-logo-204-10.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-42.php 1x, images/csi-logo-170-42.php 2x, images/csi-logo-255-11.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-36.php 1x, images/csi-logo-170-36.php 2x, images/csi-logo-255-10.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-84.php 1x, images/csi-logo-272-42.php 2x, images/csi-logo-408-11.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-73.php 1x, images/csi-logo-272-36.php 2x, images/csi-logo-408-10.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-36.php" alt="cirp csi 2022" class="un770 i62"></picture></a>
</div>
</div>
</div>
<div class="v39 ps474 s515 c734"></div>
<div class="ps475 v38 s516">
<div class="v39 ps476 s517 c728">
<div class="v39 ps477 s518 c735">
<p class="p26 f148">6th CIRP Conference on Surface Integrity </p>
<p class="p26 f148">Day 1 presentations replay</p>
</div>
<div class="v39 ps478 s519 c736">
<p class="p26 f149"><a href="cirpcsi2022.php"><x-svg class="s520"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p26 f150"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps479 v38 s521">
<div class="v39 ps480 s522 c728">
<div class="v39 ps469 s523 c737">
<a href="cirpcsi2022session1.php" class="f151 btn165 v40 s524">10:50 - 12:30 CET</a>
</div>
<div class="v39 ps481 s523 c738">
<a href="#" class="f151 btn166 v40 s524">14:45 - 16:05 CET</a>
</div>
<div class="v39 ps482 s523 c739">
<a href="cirpcsi2022session1-3.php" class="f151 btn167 v40 s524">16:35 - 18:15 CET</a>
</div>
</div>
<div class="v39 ps483 s525 c740">
<p class="p27 f152">Themes scheduled on Day 1 between 14:45 and 16:05 CET</p>
</div>
<div class="v39 ps484 s526 c741">
<a href="#anchor1" class="f153 btn168 v40 s527">4- Numerical modelling of Surface Integrity</a>
</div>
<div class="v39 ps485 s528 c742">
<a href="#anchor2" class="f154 btn169 v40 s527">5- Post-processing of AM Parts</a>
</div>
<div class="v39 ps486 s529 c743">
<a href="#anchor3" class="f155 btn170 v40 s530">6- Advanced Materials &amp; Coatings / Non-Conventional Processes</a>
</div>
</div>
<div class="c744">
<div class="ps487 v38 s531">
<div class="s532">
<div class="v39 ps469 s533 c745">
<div class="v39 ps488 s534 c746">
<p class="p27 f152">4- Numerical modeling of Surface Integrity</p>
</div>
<div class="v39 ps489 s535 c728">
<div class="v39 ps469 s535 w8">
<div class="v39 ps469 s535 c747">
<div class="v39 ps469 s536 c728">
<div class="v39 ps469 s536 w8">
<div class="v39 ps469 s537 c748"></div>
<div class="v39 ps490 s538 c749">
<p class="p27 f156">Micro-texture dependent temperature distribution of CVD diamond thick film cutting tools during turning of Ti-6Al-4V<br><span class="f157">E. Uhlmann, D. Schroter and E. Gartner</span></p>
</div>
</div>
</div>
<div class="v39 ps491 s539 c750"></div>
<div class="v5 ps351 s386 c657"></div>
</div>
<div class="v39 ps492 s540 c751">
<div class="v39 ps469 s541 c752">
<p class="p26 f147"><a onclick="pop&&pop.openPopup('popup56');return false" style="cursor:pointer;"><x-svg class="s513"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v39 ps493 s541 c753">
<p class="p26 f147"><a onclick="pop&&pop.openPopup('popup57');return false" style="cursor:pointer;"><x-svg class="s513"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c658">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup58');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v39 ps494 s542 c754">
<p class="p27 f156">Effect of Chip Segmentation on Machining-Induced Residual Stresses during Turning of Ti6Al4V<br><span class="f157">Bin Shi, Elias Abboud, M. Helmi Attia and Vince Thomson</span></p>
</div>
<div class="v5 ps440 s478 c659">
<p class="p18 f114">Simulation of internal material loads caused by simultaneous contacts in grinding with predominantly mechanical impact<br><span class="f115">Marco Eich, Abdullah Karahan, Besar Ljatifi, Lars Langenhorst, Daniel Meyer and Carsten Heinzel</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s479 c660">
<div class="v5 ps441 s480 c45">
<div class="v5 ps33 s481 c661">
<p class="p18"><span class="f117">Effect of thermomechanical loads and nanocrystalline layer formation on induced surface hardening during orthogonal cutting of AISI 4140<br></span><span class="f118">German Gonzalez, Florian Sauer, Marcel Plogmeyer, Michael Gerstenmeyer, G</span><span class="f118">ü</span><span class="f118">nter Brauer, Volker Schulze</span></p>
</div>
<div class="v5 ps442 s397 c662">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup59');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
<div class="v5 ps443 s482 c663">
<div class="v5 ps359 s399 c664">
<p class="p18 f116">5- Post-processing of AM Parts</p>
</div>
<div class="v5 ps360 s483 c45">
<div class="v5 ps33 s483 w2">
<div class="v5 ps33 s484 c665">
<div class="v5 ps33 s485 c45">
<div class="v5 ps33 s485 w2">
<div class="v5 ps33 s402 c666"></div>
<div class="v5 ps444 s486 c667">
<p class="p18 f114">A comparison of post-processing techniques for Additive Manufacturing components <span class="f142">(not available in replay format)<br></span><span class="f115">Matthieu Rauch and Jean-Yves Hascoet</span></p>
</div>
</div>
</div>
<div class="v5 ps445 s487 c668"></div>
<div class="v5 ps446 s488 c669"></div>
</div>
<div class="v5 ps447 s405 c670">
<div class="v5 ps33 s397 c671">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
<div class="v5 ps448 s387 c672">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup60');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c673">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup61');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps449 s489 c674">
<p class="p18 f117">Superhydrophobic surface processing for selective laser melting of metal parts<br><span class="f118">Wuji Huang, Benjamin Nelson, Ryan Mullennex, Dariush Kokabi, Haiyang Hu, Chukwudum Eluchie, Hui Hc, Avik Samanta, Eric Faierson and Hongtao Ding</span></p>
</div>
<div class="v5 ps450 s490 c675">
<p class="p18 f144">Surface finishing of EBM parts by (electro-)chemical etching<br><span class="f145">Laurent Spitaels, Edouard Riviere-Lorphevre, Macarena Cantero Diaz, Jonathan Duquesnoy, Francois Ducobu</span></p>
</div>
</div>
</div>
<div class="v5 ps451 s491 c676">
<div class="v5 ps452 s492 c45">
<div class="v5 ps33 s493 c677">
<p class="p18 f117">The effect of femto-second laser shock peening on the microstructures and surface roughness of AlSi10Mg samples produced with selective laser melting (SLM)<br><span class="f118">Erica Liverani, Yuxin Li, Alessandro Ascari, Xin Zhao and Alessandro Fortunato</span></p>
</div>
<div class="v5 ps453 s397 c678">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup62');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps454 s121"></a>
<div class="v5 ps455 s494 c679">
<div class="v5 ps359 s495 c680">
<p class="p18 f116">6- Advanced Materials &amp; Coatings / Non-Conventional Processes</p>
</div>
<div class="v5 ps456 s496 c45">
<div class="v5 ps33 s496 w2">
<div class="v5 ps33 s497 c681">
<div class="v5 ps33 s498 c45">
<div class="v5 ps33 s498 w2">
<div class="v5 ps33 s499 c682"></div>
<div class="v5 ps457 s486 c683">
<p class="p18 f114">Cr/CrN multilayer coating effect on the surface integrity of Ti-6Al-4V alloy under fatigue loadings<br><span class="f115">Martin Ferreira Fernandes, Veronica Mara de Oliveira Velloso and Herman Jacobus Cornelis Voorwalda</span></p>
</div>
</div>
</div>
<div class="v5 ps451 s487 c684"></div>
<div class="v5 ps351 s488 c685"></div>
</div>
<div class="v5 ps362 s405 c686">
<div class="v5 ps33 s387 c687">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup63');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c688">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup64');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s397 c689">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps458 s489 c690">
<p class="p18 f114">Residual stress assessment during cutting tool lifetime of CVD-diamond coated indexable inserts<br><span class="f115">E. Uhlmann and D. Hinzmann</span></p>
</div>
<div class="v5 ps459 s500 c691">
<p class="p18 f114">Effects of cutting power, speed and assist gas pressure parameters on the surface integrity cut by laser <span class="f142">(not available in replay format)<br></span><span class="f115">R. P. Zeilmann and R. D. Conrado</span></p>
</div>
</div>
</div>
<div class="v5 ps460 s501 c45">
<div class="v5 ps33 s501 w2">
<div class="v5 ps33 s502 c692">
<div class="v5 ps461 s387 c693">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup65');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps462 s503 c694">
<p class="p18 f114">Experimental validation of workpiece deformation simulations by means of rigorous boundary condition analysis<br><span class="f115">Andreas Tausendfreund, Friedhelm Frerichs, Dirk Stobener and Andreas Fischer</span></p>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps463 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v38 ps495 s543"></a>
<div class="btf ps464 v7 s504">
<div class="v5 ps465 s505 c695">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps466 s49 c696">
<div class="v5 ps38 s50 c697">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un870"><source data-srcset="images/transparentks-102-44.php 1x, images/transparentks-204-44.php 2x, images/transparentks-306-55.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-38.php 1x, images/transparentks-204-38.php 2x, images/transparentks-306-54.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-44.php 1x, images/transparentks-306-56.php 2x, images/transparentks-459-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-38.php 1x, images/transparentks-306-38.php 2x, images/transparentks-459-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-48.php 1x, images/transparentks-114-48.php 2x, images/transparentks-171-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-42.php 1x, images/transparentks-114-42.php 2x, images/transparentks-171-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-44.php 1x, images/transparentks-142-138.php 2x, images/transparentks-213-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-38.php 1x, images/transparentks-142-109.php 2x, images/transparentks-213-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-91.php 1x, images/transparentks-178-91.php 2x, images/transparentks-267-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-79.php 1x, images/transparentks-178-79.php 2x, images/transparentks-267-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-127.php 1x, images/transparentks-284-83.php 2x, images/transparentks-426-23.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-110.php 1x, images/transparentks-284-71.php 2x, images/transparentks-426-22.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-71.php" title="knowledge &amp; skills logo" alt="logo" class="un771 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un871">
<source data-srcset="images/k-stransparent-110-44.php 1x, images/k-stransparent-220-44.php 2x, images/k-stransparent-330-55.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-38.php 1x, images/k-stransparent-220-38.php 2x, images/k-stransparent-330-54.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-44.php 1x, images/k-stransparent-330-56.php 2x, images/k-stransparent-495-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-38.php 1x, images/k-stransparent-330-38.php 2x, images/k-stransparent-495-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-42.php 1x, images/k-stransparent-340-42.php 2x, images/k-stransparent-510-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-36.php 1x, images/k-stransparent-340-36.php 2x, images/k-stransparent-510-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-44.php 1x, images/k-stransparent-424-94.php 2x, images/k-stransparent-636-11.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-38.php 1x, images/k-stransparent-424-76.php 2x, images/k-stransparent-636-10.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-44.php 1x, images/k-stransparent-530-44.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-38.php 1x, images/k-stransparent-530-38.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-88.php 1x, images/k-stransparent-848-44.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-77.php 1x, images/k-stransparent-848-38.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-38.php" alt="Knowledge an Skills shared by talented engineers" class="un772 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c698"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c699"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c700"></div>
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
<div class="v5 ps38 s69 c701">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v41 ps496 s544 c755">
<div class="ps497 v38 s545">
<div class="v39 ps498 s546 c756">
<p class="p27 f158">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f159"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v39 ps499 s547 c757">
<a href="javascript:void(0)" class="denyConsent f160 btn171 v40 s548">Refuse</a>
</div>
<div class="v39 ps500 s547 c757">
<a href="javascript:void(0)" class="allowConsent f161 btn172 v40 s548">OK</a>
</div>
</div>
</div>
<div id="popup65" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps501">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c758">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c702">
<div class="player un773 pl61">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S6-439.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c703">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c704">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c598">
<a onclick="pop&&pop.closePopup('popup65');return false" style="cursor:pointer;" class="f67 btn152 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup66" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps503">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c759">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c318">
<div class="player un774 pl62">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S6-468.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c705">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c706">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c310">
<a onclick="pop&&pop.closePopup('popup66');return false" style="cursor:pointer;" class="f67 btn153 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup64" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps504">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c760">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c324">
<div class="player un775 pl63">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S6-662.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c707">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c708">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c602">
<a onclick="pop&&pop.closePopup('popup64');return false" style="cursor:pointer;" class="f67 btn154 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup63" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps505">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c761">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c709">
<div class="player un776 pl64">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S6-593.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c710">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c711">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c605">
<a onclick="pop&&pop.closePopup('popup63');return false" style="cursor:pointer;" class="f67 btn155 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup62" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps506">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c762">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c325">
<div class="player un777 pl65">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S5-384.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c326">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c327">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c328">
<a onclick="pop&&pop.closePopup('popup62');return false" style="cursor:pointer;" class="f67 btn156 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup61" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps507">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c763">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c712">
<div class="player un778 pl66">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S5-397.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c713">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c714">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c334">
<a onclick="pop&&pop.closePopup('popup61');return false" style="cursor:pointer;" class="f67 btn157 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup60" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps508">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c764">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c715">
<div class="player un779 pl67">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S5-508.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c716">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c717">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c578">
<a onclick="pop&&pop.closePopup('popup60');return false" style="cursor:pointer;" class="f67 btn158 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup58" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps509">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c765">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c343">
<div class="player un780 pl68">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S4-443.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c718">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c719">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c335">
<a onclick="pop&&pop.closePopup('popup58');return false" style="cursor:pointer;" class="f67 btn159 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup57" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps510">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c766">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c349">
<div class="player un781 pl69">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S4-476.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c720">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c721">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c722">
<a onclick="pop&&pop.closePopup('popup57');return false" style="cursor:pointer;" class="f67 btn160 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup56" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps511">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c767">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c723">
<div class="player un782 pl70">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S4-557.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c556">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c724">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c725">
<a onclick="pop&&pop.closePopup('popup56');return false" style="cursor:pointer;" class="f67 btn161 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup67" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps512">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c768">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c350">
<div class="player un783 pl71">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S5-470.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c351">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c352">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c353">
<a onclick="pop&&pop.closePopup('popup67');return false" style="cursor:pointer;" class="f67 btn162 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup59" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps513">
<div onclick="event.stopPropagation()" class="popup v42 ps502 s549 c769">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c726">
<div class="player un784 pl72">
<video preload="metadata" poster="images/poster-3592-2.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S4-431.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c543">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c727">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c78">
<a onclick="pop&&pop.closePopup('popup59');return false" style="cursor:pointer;" class="f67 btn163 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session1-2.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>