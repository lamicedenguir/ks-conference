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
            $redirect = 'cirpcsi2022session1-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '9EDCC975-A833-4296-80F5-2337B855710F';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-3.php';
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
<title>Day 1 sessions 16h35 to 18h15</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1-3.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 1 sessions 16h35 to 18h15">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps535{position:relative;margin-top:0}.v43{display:block;vertical-align:top}.s569{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v44{display:inline-block;vertical-align:top}.ps536{position:relative;margin-left:0;margin-top:0}.s570{min-width:1920px;width:1920px;min-height:142px}.ps537{position:relative;margin-left:0;margin-top:0}.s571{min-width:165px;width:165px;min-height:142px;height:142px}.c823{z-index:3;pointer-events:auto}.a11{display:block}.i63{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i64{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps538{position:relative;margin-left:-21px;margin-top:6px}.s572{min-width:424px;width:424px;min-height:130px;height:130px}.c824{z-index:1;pointer-events:auto}.i65{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps539{position:relative;margin-left:1038px;margin-top:54px}.s573{min-width:84px;width:84px;min-height:36px}.c825{z-index:22;pointer-events:auto}.f171{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn188{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn188:hover{background-color:#82939e;border-color:#000;color:#000}.btn188:active{background-color:#677a85;border-color:#000;color:#808080}.v45{display:inline-block;overflow:hidden;outline:0}.s574{width:84px;padding-right:0;height:24px}.ps540{position:relative;margin-left:10px;margin-top:30px}.s575{min-width:84px;width:84px;min-height:82px}.c826{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p28{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f172{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s576{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps541{position:relative;margin-left:0;margin-top:21px}.s577{min-width:136px;width:136px;min-height:100px;height:100px}.c827{z-index:19;pointer-events:auto}.i66{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps542{position:relative;margin-top:8px}.s578{width:100%;min-width:1920px;min-height:744px}.c828{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-39.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c828{background-image:url(images/cirp-csi-2022-320-45.php)}.ps543{position:relative;margin-top:60px}.s579{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps544{position:relative;margin-left:240px;margin-top:0}.s580{min-width:1600px;width:1600px;min-height:160px}.ps545{position:relative;margin-left:0;margin-top:0}.s581{min-width:1520px;width:1520px;min-height:160px}.c829{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f173{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps546{position:relative;margin-left:-4px;margin-top:0}.s582{min-width:84px;width:84px;min-height:80px}.c830{z-index:172;pointer-events:auto;overflow:hidden;height:80px}.f174{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s583{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f175{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps547{position:relative;margin-top:104px}.s584{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:444px}.ps548{position:relative;margin-left:500px;margin-top:0}.s585{min-width:1040px;width:1040px;min-height:70px}.s586{min-width:320px;width:320px;min-height:70px}.c831{z-index:18;pointer-events:auto}.f176{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn189{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn189:hover{background-color:#82939e;border-color:#000;color:#000}.btn189:active{background-color:#677a85;border-color:#000;color:#808080}.s587{width:320px;padding-right:0;height:29px}.ps549{position:relative;margin-left:40px;margin-top:0}.c832{z-index:23;pointer-events:auto}.btn190{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn190:hover{background-color:#82939e;border-color:#000;color:#000}.btn190:active{background-color:#677a85;border-color:#000;color:#808080}.ps550{position:relative;margin-left:40px;margin-top:0}.c833{z-index:24;pointer-events:auto}.btn191{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn191:hover{background-color:#82939e;border-color:#000;color:#000}.btn191:active{background-color:#677a85;border-color:#000;color:#808080}.ps551{position:relative;margin-left:55px;margin-top:63px}.s588{min-width:845px;width:845px;min-height:51px}.c834{z-index:25;pointer-events:auto;overflow:hidden;height:51px}.p29{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f177{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps552{position:relative;margin-left:55px;margin-top:22px}.s589{min-width:1805px;width:1805px;min-height:63px}.c835{z-index:26;pointer-events:auto}.f178{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn192{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn192:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn192:active{background-color:#677a85;border-color:#000;color:#fff}.s590{width:1805px;padding-right:0;height:34px}.ps553{position:relative;margin-left:55px;margin-top:19px}.s591{min-width:1805px;width:1805px;min-height:63px}.c836{z-index:27;pointer-events:auto}.f179{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn193{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn193:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn193:active{background-color:#677a85;border-color:#000;color:#fff}.s592{width:1805px;padding-right:0;height:34px}.ps554{position:relative;margin-left:55px;margin-top:24px}.s593{min-width:1805px;width:1805px;min-height:63px}.c837{z-index:28;pointer-events:auto}.f180{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn194{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn194:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn194:active{background-color:#677a85;border-color:#000;color:#fff}.c838{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:9px;min-height:2473px}.ps555{position:relative;margin-top:0}.s594{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:2473px}.s595{width:1926px;margin-left:-3px;min-height:2473px}.s596{min-width:1926px;width:1926px;min-height:789px}.c839{z-index:29}.ps556{position:relative;margin-left:58px;margin-top:0}.s597{min-width:1125px;width:1125px;min-height:51px}.c840{z-index:31;pointer-events:auto;overflow:hidden;height:51px}.f181{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps557{position:relative;margin-left:0;margin-top:-3px}.s598{min-width:1926px;width:1926px;min-height:741px}.w9{line-height:0}.s599{min-width:1926px;width:1926px;min-height:447px}.c841{z-index:32}.s600{min-width:1920px;width:1920px;min-height:147px;height:147px}.c842{z-index:34;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps558{position:relative;margin-left:20px;margin-top:3px}.s601{min-width:1764px;width:1764px;min-height:142px}.c843{z-index:35;pointer-events:auto;overflow:hidden;height:142px}.f182{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f183{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps559{position:relative;margin-left:0;margin-top:-6px}.s602{min-width:1920px;width:1920px;min-height:147px}.c844{z-index:33;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps560{position:relative;margin-left:1843px;margin-top:-413px}.s603{min-width:54px;width:54px;min-height:380px}.c845{z-index:42}.s604{min-width:54px;width:54px;min-height:86px}.c846{z-index:46;pointer-events:auto;overflow:hidden;height:86px}.ps561{position:relative;margin-left:0;margin-top:61px}.c847{z-index:47;pointer-events:auto;overflow:hidden;height:86px}.ps562{position:relative;margin-left:23px;margin-top:-299px}.s605{min-width:1764px;width:1764px;min-height:142px}.c848{z-index:37;pointer-events:auto;overflow:hidden;height:142px}.s606{min-width:1926px;width:1926px;min-height:300px}.c849{z-index:40}.s607{min-width:1920px;width:1920px;min-height:147px}.c850{z-index:38;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.s608{min-width:1920px;width:1920px;min-height:147px}.c851{z-index:39;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps563{position:relative;margin-left:0;margin-top:-2473px}.s609{min-width:1920px;width:1920px;min-height:1px}.v46{display:none;vertical-align:top}.s610{width:100%;min-width:1920px;min-height:198px}.c852{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps565{position:relative;margin-top:34px}.s611{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps566{position:relative;margin-left:24px;margin-top:0}.s612{min-width:1876px;width:1876px;min-height:78px}.c853{pointer-events:auto;overflow:hidden;height:78px}.f184{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f185{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps567{position:relative;margin-left:684px;margin-top:0}.s613{min-width:256px;width:256px;min-height:64px}.c854{pointer-events:auto}.f186{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn195{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn195:hover{background-color:#82939e;border-color:#000;color:#000}.btn195:active{background-color:#181b28;border-color:#000;color:#808080}.s614{width:256px;padding-right:0;height:24px}.ps568{position:relative;margin-left:40px;margin-top:0}.f187{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn196{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn196:hover{background-color:#82939e;border-color:#000;color:#000}.btn196:active{background-color:#181b28;border-color:#000;color:#808080}.ps569{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435239;pointer-events:none;visibility:hidden;opacity:0}.v47{display:inline-block;vertical-align:top;pointer-events:auto}.ps570{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s615{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c855{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps571{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435234;pointer-events:none;visibility:hidden;opacity:0}.c856{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps572{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435229;pointer-events:none;visibility:hidden;opacity:0}.c857{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps573{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435224;pointer-events:none;visibility:hidden;opacity:0}.c858{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps574{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435219;pointer-events:none;visibility:hidden;opacity:0}.c859{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps575{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435214;pointer-events:none;visibility:hidden;opacity:0}.c860{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps576{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435209;pointer-events:none;visibility:hidden;opacity:0}.c861{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps577{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435204;pointer-events:none;visibility:hidden;opacity:0}.c862{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps578{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435199;pointer-events:none;visibility:hidden;opacity:0}.c863{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps579{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435194;pointer-events:none;visibility:hidden;opacity:0}.c864{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps580{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435189;pointer-events:none;visibility:hidden;opacity:0}.c865{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps581{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435184;pointer-events:none;visibility:hidden;opacity:0}.c866{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps582{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435179;pointer-events:none;visibility:hidden;opacity:0}.c867{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps583{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435174;pointer-events:none;visibility:hidden;opacity:0}.c868{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps584{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435169;pointer-events:none;visibility:hidden;opacity:0}.c869{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps535{margin-top:4px}.s569{min-width:1200px;width:1200px;min-height:89px}.s570{min-width:1200px;width:1200px;min-height:89px}.s571{min-width:115px;width:115px;min-height:89px;height:89px}.i63{left:13px;width:89px;height:89px}.ps538{margin-left:-16px;margin-top:4px}.s572{min-width:265px;width:265px;min-height:81px;height:81px}.i65{width:265px;height:81px}.ps539{margin-left:640px;margin-top:30px}.s573{min-width:52px;width:52px;min-height:22px}.f171{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s574{width:52px;height:15px}.ps540{margin-left:7px;margin-top:15px}.s575{min-width:52px;width:52px;min-height:51px}.c826{height:51px}.f172{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s576{height:30px;transform:scale(1.000) translateY(3px)}.ps541{margin-top:9px}.s577{min-width:85px;width:85px;min-height:63px;height:63px}.i66{width:85px;height:31px;top:16px}.ps542{margin-top:5px}.s578{min-width:1200px;min-height:494px}.ps543{margin-top:4px}.s579{min-width:1200px;width:1200px;min-height:116px}.ps544{margin-left:150px}.s580{min-width:999px;width:999px;min-height:116px}.s581{min-width:950px;width:950px;min-height:116px}.c829{height:116px}.f173{font-size:30px;font-size:calc(30px * var(--f))}.ps546{margin-left:-3px}.s582{min-width:52px;width:52px;min-height:58px}.c830{height:58px}.f174{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s583{height:27px;transform:scale(1.111) translateY(2px)}.f175{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps547{margin-top:49px}.s584{min-width:1200px;width:1200px;min-height:280px}.ps548{margin-left:275px}.s585{min-width:650px;width:650px;min-height:44px}.s586{min-width:200px;width:200px;min-height:44px}.f176{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s587{width:200px;height:18px}.ps549{margin-left:25px}.ps550{margin-left:25px}.ps551{margin-left:34px;margin-top:40px}.s588{min-width:485px;width:485px;min-height:35px}.c834{height:35px}.f177{font-size:18px;font-size:calc(18px * var(--f))}.ps552{margin-left:34px;margin-top:10px}.s589{min-width:1129px;width:1129px;min-height:39px}.f178{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s590{width:1129px;height:21px}.ps553{margin-left:34px;margin-top:12px}.s591{min-width:1129px;width:1129px;min-height:40px}.f179{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.s592{width:1129px;height:21px}.ps554{margin-left:34px;margin-top:15px}.s593{min-width:1129px;width:1129px;min-height:39px}.f180{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c838{width:max(1200px, 100%);margin-top:14px;min-height:1554px}.s594{min-width:1200px;width:1200px;min-height:1554px}.s595{width:1206px;min-height:1554px}.s596{min-width:1206px;width:1206px;min-height:495px}.ps556{margin-left:37px}.s597{min-width:721px;width:721px;min-height:32px}.c840{height:32px}.f181{font-size:18px;font-size:calc(18px * var(--f))}.s598{min-width:1206px;width:1206px;min-height:466px}.s599{min-width:1206px;width:1206px;min-height:282px}.s600{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps558{margin-left:12px;margin-top:2px}.s601{min-width:1095px;width:1095px;min-height:89px}.c843{height:89px}.f182{font-size:18px;font-size:calc(18px * var(--f))}.f183{font-size:18px;font-size:calc(18px * var(--f))}.s602{min-width:1200px;width:1200px;min-height:92px}.ps560{margin-left:1149px;margin-top:-259px}.s603{min-width:33px;width:33px;min-height:237px}.s604{min-width:33px;width:33px;min-height:53px}.c846{height:53px}.ps561{margin-top:39px}.c847{height:53px}.ps562{margin-left:15px;margin-top:-188px}.s605{min-width:1095px;width:1095px;min-height:89px}.c848{height:89px}.s606{min-width:1206px;width:1206px;min-height:190px}.s607{min-width:1200px;width:1200px;min-height:92px}.s608{min-width:1200px;width:1200px;min-height:92px}.ps563{margin-top:-1554px}.s609{min-width:1200px;width:1200px}.s610{min-width:1200px;min-height:129px}.ps565{margin-top:21px}.s611{min-width:1200px;width:1200px;min-height:84px}.ps566{margin-left:15px}.s612{min-width:1172px;width:1172px;min-height:49px}.c853{height:49px}.f184{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f185{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps567{margin-left:412px;margin-top:-5px}.s613{min-width:160px;width:160px;min-height:40px}.f186{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s614{width:160px;height:15px}.ps568{margin-left:55px;margin-top:-5px}.f187{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps570{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s615{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s569{min-width:960px;width:960px;min-height:71px}.s570{min-width:960px;width:960px;min-height:71px}.s571{min-width:69px;width:69px;min-height:71px;height:71px}.i63{left:0;width:69px;height:69px;top:1px}.ps538{margin-left:1px;margin-top:3px}.s572{min-width:212px;width:212px;min-height:65px;height:65px}.i65{width:212px;height:65px}.ps539{margin-left:521px;margin-top:27px}.s573{min-width:42px;width:42px;min-height:18px}.f171{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s574{width:42px;height:11px}.ps540{margin-left:5px;margin-top:15px}.s575{min-width:42px;width:42px;min-height:41px}.c826{height:41px}.f172{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s576{height:24px;transform:scale(1.000) translateY(2px)}.ps541{margin-top:10px}.s577{min-width:68px;width:68px;min-height:51px;height:51px}.i66{width:68px;height:25px;top:13px}.ps542{margin-top:4px}.s578{min-width:960px;min-height:501px}.ps543{margin-top:0}.s579{min-width:960px;width:960px;min-height:92px}.ps544{margin-left:118px}.s580{min-width:802px;width:802px;min-height:92px}.s581{min-width:760px;width:760px;min-height:92px}.c829{height:92px}.f173{font-size:24px;font-size:calc(24px * var(--f))}.ps546{margin-left:0}.s582{min-width:42px;width:42px;min-height:46px}.c830{height:46px}.f174{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s583{height:22px;transform:scale(1.111) translateY(2px)}.f175{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps547{margin-top:8px}.s584{min-width:960px;width:960px;min-height:220px}.ps548{margin-left:220px}.s585{min-width:520px;width:520px;min-height:35px}.s586{min-width:160px;width:160px;min-height:35px}.f176{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s587{width:160px;height:15px}.ps549{margin-left:20px}.ps550{margin-left:20px}.ps551{margin-left:27px;margin-top:24px}.s588{min-width:368px;width:368px;min-height:26px}.c834{height:26px}.f177{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps552{margin-left:27px;margin-top:13px}.s589{min-width:903px;width:903px;min-height:31px}.f178{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s590{width:903px;height:16px}.ps553{margin-left:27px;margin-top:10px}.s591{min-width:903px;width:903px;min-height:32px}.f179{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.s592{width:903px;height:16px}.ps554{margin-left:27px;margin-top:12px}.s593{min-width:903px;width:903px;min-height:31px}.f180{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c838{width:max(960px, 100%);margin-top:14px;min-height:1247px}.s594{min-width:960px;width:960px;min-height:1247px}.s595{width:966px;min-height:1247px}.s596{min-width:966px;width:966px;min-height:399px}.ps556{margin-left:30px}.s597{min-width:533px;width:533px;min-height:26px}.c840{height:26px}.f181{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.s598{min-width:966px;width:966px;min-height:376px}.s599{min-width:966px;width:966px;min-height:227px}.s600{min-width:960px;width:960px;min-height:73px;height:73px}.ps558{margin-left:10px;margin-top:0}.s601{min-width:894px;width:894px;min-height:71px}.c843{height:71px}.f182{font-size:15px;font-size:calc(15px * var(--f))}.f183{font-size:15px;font-size:calc(15px * var(--f))}.s602{min-width:960px;width:960px;min-height:74px}.ps560{margin-left:926px;margin-top:-209px}.s603{min-width:28px;width:28px;min-height:190px}.s604{min-width:26px;width:26px;min-height:42px}.c846{height:42px}.ps561{margin-left:2px;margin-top:29px}.c847{height:42px}.ps562{margin-left:15px;margin-top:-148px}.s605{min-width:894px;width:894px;min-height:71px}.c848{height:71px}.s606{min-width:966px;width:966px;min-height:153px}.s607{min-width:960px;width:960px;min-height:73px}.s608{min-width:960px;width:960px;min-height:74px}.ps563{margin-top:-1247px}.s609{min-width:960px;width:960px}.s610{min-width:960px;min-height:106px}.ps565{margin-top:17px}.s611{min-width:960px;width:960px;min-height:68px}.ps566{margin-left:12px}.s612{min-width:938px;width:938px;min-height:39px}.c853{height:39px}.f184{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f185{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps567{margin-left:342px;margin-top:-3px}.s613{min-width:128px;width:128px;min-height:32px}.f186{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s614{width:128px;height:12px}.ps568{margin-left:20px;margin-top:-3px}.f187{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps570{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s615{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s569{min-width:768px;width:768px;min-height:57px}.s570{min-width:768px;width:768px;min-height:57px}.s571{min-width:55px;width:55px;min-height:57px;height:57px}.i63{left:0;width:55px;height:55px;top:1px}.ps538{margin-left:1px;margin-top:2px}.s572{min-width:170px;width:170px;min-height:52px;height:52px}.i65{width:170px;height:52px}.ps539{margin-left:416px;margin-top:22px}.s573{min-width:34px;width:34px;min-height:14px}.f171{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s574{width:34px;height:9px}.ps540{margin-left:4px;margin-top:12px}.s575{min-width:34px;width:34px;min-height:33px}.c826{height:33px}.f172{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s576{height:19px;transform:scale(1.000) translateY(2px)}.ps541{margin-top:8px}.s577{min-width:54px;width:54px;min-height:41px;height:41px}.i66{width:54px;height:20px;top:10px}.ps542{margin-top:3px}.s578{min-width:768px;min-height:401px}.ps543{margin-top:0}.s579{min-width:768px;width:768px;min-height:73px}.ps544{margin-left:94px}.s580{min-width:642px;width:642px;min-height:73px}.s581{min-width:608px;width:608px;min-height:73px}.c829{height:73px}.f173{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps546{margin-left:0}.s582{min-width:34px;width:34px;min-height:37px}.c830{height:37px}.f174{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s583{height:17px;transform:scale(1.111) translateY(2px)}.f175{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps547{margin-top:7px}.s584{min-width:768px;width:768px;min-height:177px}.ps548{margin-left:176px}.s585{min-width:416px;width:416px;min-height:28px}.s586{min-width:128px;width:128px;min-height:28px}.f176{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s587{width:128px;height:11px}.ps549{margin-left:16px}.ps550{margin-left:16px}.ps551{margin-left:22px;margin-top:19px}.s588{min-width:294px;width:294px;min-height:21px}.c834{height:21px}.f177{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps552{margin-left:22px;margin-top:10px}.s589{min-width:722px;width:722px;min-height:25px}.f178{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s590{width:722px;height:12px}.ps553{margin-left:22px;margin-top:8px}.s591{min-width:722px;width:722px;min-height:26px}.f179{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:7px}.s592{width:722px;height:12px}.ps554{margin-left:22px;margin-top:9px}.s593{min-width:722px;width:722px;min-height:25px}.f180{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c838{width:max(768px, 100%);margin-top:10px;min-height:998px}.s594{min-width:768px;width:768px;min-height:998px}.s595{width:774px;min-height:998px}.s596{min-width:774px;width:774px;min-height:319px}.ps556{margin-left:25px}.s597{min-width:426px;width:426px;min-height:21px}.c840{height:21px}.f181{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.s598{min-width:774px;width:774px;min-height:301px}.s599{min-width:774px;width:774px;min-height:183px}.s600{min-width:768px;width:768px;min-height:58px;height:58px}.ps558{margin-left:8px;margin-top:0}.s601{min-width:715px;width:715px;min-height:57px}.c843{height:57px}.f182{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f183{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.s602{min-width:768px;width:768px;min-height:59px}.ps560{margin-left:741px;margin-top:-168px}.s603{min-width:23px;width:23px;min-height:152px}.s604{min-width:21px;width:21px;min-height:33px}.c846{height:33px}.ps561{margin-left:2px;margin-top:24px}.c847{height:33px}.ps562{margin-left:13px;margin-top:-119px}.s605{min-width:715px;width:715px;min-height:56px}.c848{height:56px}.s606{min-width:774px;width:774px;min-height:123px}.s607{min-width:768px;width:768px;min-height:58px}.s608{min-width:768px;width:768px;min-height:59px}.ps563{margin-top:-998px}.s609{min-width:768px;width:768px}.s610{min-width:768px;min-height:85px}.ps565{margin-top:14px}.s611{min-width:768px;width:768px;min-height:54px}.ps566{margin-left:10px}.s612{min-width:750px;width:750px;min-height:31px}.c853{height:31px}.f184{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f185{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps567{margin-left:274px;margin-top:-3px}.s613{min-width:102px;width:102px;min-height:26px}.f186{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s614{width:102px;height:10px}.ps568{margin-left:16px;margin-top:-3px}.f187{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps570{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s615{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps535{margin-top:29px}.s569{min-width:480px;width:480px;min-height:153px}.ps536{margin-left:6px}.s570{min-width:464px;width:464px;min-height:153px}.s571{min-width:120px;width:120px;min-height:96px;height:96px}.i63{width:96px;height:96px}.ps538{margin-left:-25px;margin-top:19px}.s572{min-width:196px;width:196px;min-height:59px;height:59px}.i65{width:196px;height:59px}.ps539{margin-left:33px;margin-top:117px}.s573{min-width:140px;width:140px}.s574{width:140px}.ps540{margin-left:324px;margin-top:-143px}.s575{min-width:71px;width:71px;min-height:62px}.c826{height:62px}.f172{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s576{height:37px;transform:scale(1.000) translateY(4px)}.ps541{margin-left:377px;margin-top:-150px}.s577{min-width:87px;width:87px;min-height:75px;height:75px}.i66{width:87px;height:32px;top:21px}.ps542{margin-top:-47px}.s578{min-width:480px;min-height:336px}.ps543{margin-top:-66px}.s579{min-width:480px;width:480px;min-height:230px}.ps544{margin-left:33px}.s580{min-width:447px;width:447px;min-height:230px}.ps545{margin-top:66px}.s581{min-width:414px;width:414px;min-height:164px}.c829{height:164px}.f173{font-size:30px;font-size:calc(30px * var(--f))}.ps546{margin-left:-37px}.s582{min-width:70px;width:70px;min-height:66px}.c830{height:66px}.f174{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s583{height:33px}.f175{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps547{margin-top:46px}.s584{min-width:480px;width:480px;min-height:746px}.ps548{margin-left:33px}.s585{min-width:414px;width:414px;min-height:333px}.s586{min-width:414px;width:414px;min-height:72px}.f176{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s587{width:414px;height:33px}.ps549{margin-left:0;margin-top:57px}.ps550{margin-left:0;margin-top:60px}.ps551{margin-left:9px;margin-top:32px}.s588{min-width:462px;width:462px;min-height:91px}.c834{height:91px}.f177{font-size:21px;font-size:calc(21px * var(--f))}.ps552{margin-left:15px;margin-top:0}.s589{min-width:452px;width:452px;min-height:83px}.f178{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:16px;padding-bottom:15px}.s590{width:452px;height:52px}.ps553{margin-left:15px}.s591{min-width:452px;width:452px;min-height:83px}.f179{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s592{width:452px;height:26px}.ps554{margin-left:15px;margin-top:18px}.s593{min-width:452px;width:452px;min-height:81px}.f180{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:27px}.c838{width:max(480px, 100%);margin-top:6px;min-height:1785px}.s594{min-width:480px;width:480px;min-height:1785px}.s595{width:486px;min-height:1785px}.s596{min-width:486px;width:486px;min-height:582px}.ps556{margin-left:12px}.s597{min-width:462px;width:462px;min-height:58px}.c840{height:58px}.f181{font-size:21px;font-size:calc(21px * var(--f));line-height:1.191}.s598{min-width:486px;width:486px;min-height:527px}.s599{min-width:486px;width:486px;min-height:317px}.s600{min-width:480px;width:480px;min-height:102px;height:102px}.ps558{margin-left:5px;margin-top:5px}.s601{min-width:411px;width:411px;min-height:93px}.c843{height:93px}.f182{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f183{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s602{min-width:480px;width:480px;min-height:107px}.ps560{margin-left:425px;margin-top:-294px}.s603{min-width:58px;width:58px;min-height:267px}.s604{min-width:58px;width:58px;min-height:63px}.c846{height:63px}.ps561{margin-top:39px}.c847{height:63px}.ps562{margin-left:8px;margin-top:-204px}.s605{min-width:411px;width:411px;min-height:91px}.c848{height:91px}.s606{min-width:486px;width:486px;min-height:216px}.s607{min-width:480px;width:480px;min-height:106px}.s608{min-width:480px;width:480px;min-height:104px}.ps563{margin-top:-1829px}.s609{min-width:480px;width:480px}.s610{min-width:480px}.ps565{margin-top:8px}.s611{min-width:480px;width:480px;min-height:166px}.ps566{margin-left:17px}.s612{min-width:448px;width:448px;min-height:136px}.c853{height:136px}.f184{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f185{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps567{margin-left:137px}.s613{min-width:99px;width:99px;min-height:30px}.f186{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s614{width:99px;height:18px}.ps568{margin-left:9px}.f187{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps570{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s615{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps535{margin-top:19px}.s569{min-width:320px;width:320px;min-height:102px}.ps536{margin-left:4px}.s570{min-width:309px;width:309px;min-height:102px}.s571{min-width:80px;width:80px;min-height:64px;height:64px}.i63{left:8px;width:64px;height:64px}.ps538{margin-left:-17px;margin-top:13px}.s572{min-width:131px;width:131px;min-height:39px;height:39px}.i65{width:131px;height:39px}.ps539{margin-left:22px;margin-top:78px}.s573{min-width:93px;width:93px;min-height:24px}.f171{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s574{width:93px;height:16px}.ps540{margin-left:216px;margin-top:-95px}.s575{min-width:47px;width:47px;min-height:41px}.c826{height:41px}.f172{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s576{height:25px;transform:scale(1.000) translateY(3px)}.ps541{margin-left:251px;margin-top:-100px}.s577{min-width:58px;width:58px;min-height:50px;height:50px}.i66{width:58px;height:21px;top:15px}.ps542{margin-top:-31px}.s578{min-width:320px;min-height:224px}.ps543{margin-top:-44px}.s579{min-width:320px;width:320px;min-height:153px}.ps544{margin-left:22px}.s580{min-width:298px;width:298px;min-height:153px}.ps545{margin-top:44px}.s581{min-width:276px;width:276px;min-height:109px}.c829{height:109px}.f173{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps546{margin-left:-25px}.s582{min-width:47px;width:47px;min-height:44px}.c830{height:44px}.f174{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s583{height:22px;transform:scale(1.111) translateY(2px)}.f175{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps547{margin-top:31px}.s584{min-width:320px;width:320px;min-height:499px}.ps548{margin-left:22px}.s585{min-width:276px;width:276px;min-height:222px}.s586{min-width:276px;width:276px;min-height:48px}.f176{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s587{width:276px;height:23px}.ps549{margin-left:0;margin-top:38px}.ps550{margin-left:0;margin-top:40px}.ps551{margin-left:6px;margin-top:21px}.s588{min-width:308px;width:308px;min-height:61px}.c834{height:61px}.f177{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps552{margin-left:10px;margin-top:0}.s589{min-width:301px;width:301px;min-height:55px}.f178{font-size:14px;font-size:calc(14px * var(--f));padding-top:11px;padding-bottom:10px}.s590{width:301px}.ps553{margin-left:10px;margin-top:13px}.s591{min-width:301px;width:301px;min-height:55px}.f179{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s592{width:301px;height:17px}.ps554{margin-left:10px;margin-top:12px}.s593{min-width:301px;width:301px;min-height:54px}.f180{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:18px}.c838{width:max(320px, 100%);margin-top:2px;min-height:1191px}.s594{min-width:320px;width:320px;min-height:1191px}.s595{width:326px;min-height:1191px}.s596{min-width:326px;width:326px;min-height:389px}.ps556{margin-left:9px}.s597{min-width:308px;width:308px;min-height:39px}.c840{height:39px}.f181{font-size:14px;font-size:calc(14px * var(--f));line-height:1.215}.s598{min-width:326px;width:326px;min-height:353px}.s599{min-width:326px;width:326px;min-height:213px}.s600{min-width:320px;width:320px;min-height:68px;height:68px}.ps558{margin-left:3px}.s601{min-width:274px;width:274px;min-height:62px}.c843{height:62px}.f182{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f183{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s602{min-width:320px;width:320px;min-height:71px}.ps560{margin-left:284px;margin-top:-197px}.s603{min-width:39px;width:39px;min-height:178px}.s604{min-width:39px;width:39px;min-height:42px}.c846{height:42px}.ps561{margin-top:26px}.c847{height:42px}.ps562{margin-left:6px;margin-top:-137px}.s605{min-width:274px;width:274px;min-height:61px}.c848{height:61px}.s606{min-width:326px;width:326px;min-height:146px}.s607{min-width:320px;width:320px;min-height:71px}.s608{min-width:320px;width:320px;min-height:69px}.ps563{margin-top:-1220px}.s609{min-width:320px;width:320px}.s610{min-width:320px;min-height:132px}.ps565{margin-top:5px}.s611{min-width:320px;width:320px;min-height:111px}.ps566{margin-left:11px}.s612{min-width:299px;width:299px;min-height:91px}.c853{height:91px}.f184{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f185{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps567{margin-left:91px}.s613{min-width:66px;width:66px;min-height:20px}.f186{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s614{width:66px;height:12px}.ps568{margin-left:6px}.f187{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps570{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s615{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-640-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-640-45.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-960-107.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-108.php)}}@media (min-width:320px) {.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}.c828{background-image:url(images/cirp-csi-2022-480-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-480-45.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}.c828{background-image:url(images/cirp-csi-2022-960-78.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-109.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}.c828{background-image:url(images/cirp-csi-2022-1440-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1440-13.php)}}@media (min-width:480px) {.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}.c828{background-image:url(images/cirp-csi-2022-768-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-768-45.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}.c828{background-image:url(images/cirp-csi-2022-1536-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1536-45.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}.c828{background-image:url(images/cirp-csi-2022-2304-12.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2304-13.php)}}@media (min-width:768px) {.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}.c828{background-image:url(images/cirp-csi-2022-960-79.php)}.webp .c828{background-image:url(images/cirp-csi-2022-960-89.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}.c828{background-image:url(images/cirp-csi-2022-1920-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1920-45.php)}}@media (min-width:960px) {.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}.c828{background-image:url(images/cirp-csi-2022-1200-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1200-45.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}.c828{background-image:url(images/cirp-csi-2022-2400-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2400-45.php)}}@media (min-width:1200px) {.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}.c828{background-image:url(images/cirp-csi-2022-1415-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-1415-39.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}.c828{background-image:url(images/cirp-csi-2022-2830-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2830-39.php)}}@media (min-width:1600px) {.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}.c828{background-image:url(images/cirp-csi-2022-2000-39.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2000-45.php)}}@media (min-width:2000px) {.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}.c828{background-image:url(images/cirp-csi-2022-2131-33.php)}.webp .c828{background-image:url(images/cirp-csi-2022-2131-39.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session1-3.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps535 v43 s569">
<div class="v44 ps536 s570 c822">
<div class="v44 ps537 s571 c823">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a11"><picture class="i64"><source srcset="images/transparentks-64-45.php 1x, images/transparentks-128-45.php 2x, images/transparentks-192-58.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-39.php 1x, images/transparentks-128-39.php 2x, images/transparentks-192-57.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-45.php 1x, images/transparentks-192-59.php 2x, images/transparentks-288-13.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-39.php 1x, images/transparentks-192-39.php 2x, images/transparentks-288-12.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-39.php 1x, images/transparentks-110-39.php 2x, images/transparentks-165-13.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-33.php 1x, images/transparentks-110-33.php 2x, images/transparentks-165-12.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-39.php 1x, images/transparentks-138-39.php 2x, images/transparentks-207-13.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-33.php 1x, images/transparentks-138-33.php 2x, images/transparentks-207-12.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-92.php 1x, images/transparentks-178-92.php 2x, images/transparentks-267-25.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-80.php 1x, images/transparentks-178-80.php 2x, images/transparentks-267-24.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-128.php 1x, images/transparentks-284-84.php 2x, images/transparentks-426-25.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-111.php 1x, images/transparentks-284-72.php 2x, images/transparentks-426-24.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-72.php" title="knowledge &amp; skills logo" alt="ks logo" class="un872 i63"></picture></a>
<?php
    }
?>

</div>
<div class="v44 ps538 s572 c824">
<picture class="i64">
<source srcset="images/k-stransparent-131-37.php 1x, images/k-stransparent-262-37.php 2x, images/k-stransparent-393-13.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-31.php 1x, images/k-stransparent-262-31.php 2x, images/k-stransparent-393-12.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-37.php 1x, images/k-stransparent-392-37.php 2x, images/k-stransparent-588-13.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-31.php 1x, images/k-stransparent-392-31.php 2x, images/k-stransparent-588-12.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-43.php 1x, images/k-stransparent-340-43.php 2x, images/k-stransparent-510-13.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-37.php 1x, images/k-stransparent-340-37.php 2x, images/k-stransparent-510-12.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-45.php 1x, images/k-stransparent-424-95.php 2x, images/k-stransparent-636-13.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-39.php 1x, images/k-stransparent-424-78.php 2x, images/k-stransparent-636-12.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-45.php 1x, images/k-stransparent-530-45.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-39.php 1x, images/k-stransparent-530-39.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-89.php 1x, images/k-stransparent-848-45.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-79.php 1x, images/k-stransparent-848-39.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-39.php" alt="Knowledge an Skills shared by talented engineers" class="un873 i65">
</picture>
</div>
<div class="v44 ps539 s573 c825">
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
<a href="./logout-415c8e.php" class="f171 btn188 v45 s574">Logout</a>
<?php
    }
?>

</div>
<div class="v44 ps540 s575 c826">
<p class="p28 f172"><a href="cirpcsi2022.php"><x-svg class="s576"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v44 ps541 s577 c827">
<a href="cirpcsi2022.php" class="a11"><picture class="i64"><source srcset="images/csi-logo-58-37.php 1x, images/csi-logo-116-37.php 2x, images/csi-logo-174-50.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-31.php 1x, images/csi-logo-116-31.php 2x, images/csi-logo-174-49.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-37.php 1x, images/csi-logo-174-51.php 2x, images/csi-logo-261-13.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-31.php 1x, images/csi-logo-174-31.php 2x, images/csi-logo-261-12.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-43.php 1x, images/csi-logo-108-43.php 2x, images/csi-logo-162-13.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-37.php 1x, images/csi-logo-108-37.php 2x, images/csi-logo-162-12.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-43.php 1x, images/csi-logo-136-91.php 2x, images/csi-logo-204-13.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-37.php 1x, images/csi-logo-136-74.php 2x, images/csi-logo-204-12.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-43.php 1x, images/csi-logo-170-43.php 2x, images/csi-logo-255-13.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-37.php 1x, images/csi-logo-170-37.php 2x, images/csi-logo-255-12.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-85.php 1x, images/csi-logo-272-43.php 2x, images/csi-logo-408-13.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-75.php 1x, images/csi-logo-272-37.php 2x, images/csi-logo-408-12.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-37.php" alt="cirp csi 2022" class="un874 i66"></picture></a>
</div>
</div>
</div>
<div class="v44 ps542 s578 c828"></div>
<div class="ps543 v43 s579">
<div class="v44 ps544 s580 c822">
<div class="v44 ps545 s581 c829">
<p class="p28 f173">6th CIRP Conference on Surface Integrity </p>
<p class="p28 f173">Day 1 presentations replay</p>
</div>
<div class="v44 ps546 s582 c830">
<p class="p28 f174"><a href="cirpcsi2022.php"><x-svg class="s583"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p28 f175"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps547 v43 s584">
<div class="v44 ps548 s585 c822">
<div class="v44 ps537 s586 c831">
<a href="cirpcsi2022session1.php" class="f176 btn189 v45 s587">10:50 - 12:30 CET</a>
</div>
<div class="v44 ps549 s586 c832">
<a href="cirpcsi2022session1-2.php" class="f176 btn190 v45 s587">14:45 - 16:05 CET</a>
</div>
<div class="v44 ps550 s586 c833">
<a href="#" class="f176 btn191 v45 s587">16:35 - 18:15 CET</a>
</div>
</div>
<div class="v44 ps551 s588 c834">
<p class="p29 f177">Themes scheduled on Day 1 between 16:35 and 18:15 CET</p>
</div>
<div class="v44 ps552 s589 c835">
<a href="#anchor1" class="f178 btn192 v45 s590">7- Numerical modelling of Surface Integrity / SI &amp; functional properties</a>
</div>
<div class="v44 ps553 s591 c836">
<a href="#anchor2" class="f179 btn193 v45 s592">8- Post-processing of AM Parts</a>
</div>
<div class="v44 ps554 s593 c837">
<a href="#anchor3" class="f180 btn194 v45 s592">9- Non-Conventional Processes</a>
</div>
</div>
<div class="c838">
<div class="ps555 v43 s594">
<div class="s595">
<div class="v44 ps537 s596 c839">
<div class="v44 ps556 s597 c840">
<p class="p29 f181">7- Numerical modeling of Surface Integrity / SI &amp; functional properties</p>
</div>
<div class="v44 ps557 s598 c822">
<div class="v44 ps537 s598 w9">
<div class="v44 ps537 s599 c841">
<div class="v44 ps537 s600 c842">
<div class="v44 ps558 s601 c843">
<p class="p29 f182">Influence of local material loads on surface topography while machining steel 42CrMo4 and Inconel 718<br><span class="f183">Tjarden Zielinski, Andrey Vovk, Oltmann Riemer and Bernhard Karpuschewski</span></p>
</div>
</div>
<div class="v44 ps559 s602 c844"></div>
<div class="v5 ps351 s386 c770"></div>
</div>
<div class="v44 ps560 s603 c845">
<div class="v44 ps537 s604 c846">
<p class="p28 f172"><a onclick="pop&&pop.openPopup('popup68');return false" style="cursor:pointer;"><x-svg class="s576"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v44 ps561 s604 c847">
<p class="p28 f172"><a onclick="pop&&pop.openPopup('popup69');return false" style="cursor:pointer;"><x-svg class="s576"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c771">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup70');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v44 ps562 s605 c848">
<p class="p29 f182">3D Numerical modelling of turning-induced residual stresses in 316L stainless steel<br><span class="f183">Abderrahmen Aridhi, Thomas Perard, Bertrand Truffart, Mathieu Girinoc, Alexandre Brosse, Habib Karaouni, Frederic Valiorgue and Joel Rech</span></p>
</div>
<div class="v5 ps514 s550 c772">
<p class="p18 f162">Investigation performance of holders with shape memory dampers against chatter vibration<br><span class="f163">Joao Henrique Schiavon Mota, Edson Bruno Lara Rosa, Joao Vitor Carvalho Fontes, Sidney Bruce Shiki, Piter Gargarella, Carlos Eiji Hirata Ventura and Armando Italo Sette Antonialli</span></p>
</div>
<div class="v44 ps559 s606 c849">
<div class="v44 ps537 s607 c850"></div>
<div class="v44 ps559 s608 c851"></div>
</div>
<div class="v5 ps515 s551 c101">
<div class="v5 ps33 s552 c773">
<p class="p18 f164">Free surface energy evaluation in the laser texturing of a carbon steel s275<br><span class="f165">Fermin Banon, Ruben Montano, Juan Manuel Vazquez-Martinez and Jorge Salguero</span></p>
</div>
<div class="v5 ps516 s553 c774">
<p class="p18 f164">Experimental investigation on friction under machining conditions with cutting fluid supply<br><span class="f165">Nicklas Gerhard, Tim Gottlich, Daniel Schraknepper and Thomas Bergs</span></p>
</div>
</div>
<div class="v5 ps517 s396 c104">
<div class="v5 ps33 s397 c775">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup71');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c776">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup72');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps518 s554 c663">
<div class="v5 ps359 s399 c777">
<p class="p18 f116">8- Post-processing of AM Parts</p>
</div>
<div class="v5 ps360 s496 c45">
<div class="v5 ps33 s496 w2">
<div class="v5 ps33 s400 c516">
<div class="v5 ps33 s555 c45">
<div class="v5 ps33 s555 w2">
<div class="v5 ps33 s402 c778"></div>
<div class="v5 ps519 s556 c779">
<p class="p18 f164">Post-Process for ALM parts in aerospace industry <span class="f166">(not available in replay format)<br></span><span class="f165">Alexandre Poloni, Marie Dessoude and Dominique Ohier</span></p>
</div>
</div>
</div>
<div class="v5 ps520 s404 c780"></div>
<div class="v5 ps351 s386 c781"></div>
</div>
<div class="v5 ps362 s405 c526">
<div class="v5 ps33 s397 c782">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
<div class="v5 ps363 s397 c783">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup73');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c784">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup74');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps521 s557 c785">
<p class="p18 f164">Areal surface texture and tool wear analysis from machining during powder bed fusion<br><span class="f165">Kossi Loic M. Avegnona, David C. Schmitter, Sandra Meisman, Haitham Hadidi, Benoit Vieille and Michael P. Sealy</span></p>
</div>
<div class="v5 ps522 s558 c786">
<p class="p18 f164">Enhancing Surface Integrity of Additively Manufactured Inconel 718 by Roller Burnishing Process<br><span class="f165">Nihal Yamana, Nedim Sunay, Mert Kaya and Yusuf Kaynak</span></p>
</div>
</div>
</div>
<div class="v5 ps451 s559 c45">
<div class="v5 ps33 s559 w2">
<div class="v5 ps33 s390 c366">
<div class="v5 ps33 s560 c787"></div>
<div class="v5 ps351 s561 c788"></div>
</div>
<div class="v5 ps523 s562 c532">
<div class="v5 ps33 s563 c789">
<p class="p18 f167">Numerical modelling of the drag finishing process at a macroscopic scale to optimize surface roughness improvement on additively manufactured (SLM) Inconel 718 parts</p>
<p class="p18 f168">Irati Malkorra, Hanene Souli, Ferdinando Salvatore, Pedro Arrazola, Aude Mathis and Jason Rolet</p>
</div>
<div class="v5 ps524 s564 c790">
<p class="p18 f167">Influence of dry ice blasting process properties on surface roughness and residual stresses of machined and additive manufactured workpieces<br><span class="f168">Sven Amona, Andreas Jobst, Marion Merklein and Nico Hanenkamp</span></p>
</div>
</div>
<div class="v5 ps525 s396 c791">
<div class="v5 ps33 s397 c792">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup75');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c687">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup76');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps526 s121"></a>
<div class="v5 ps527 s413 c106">
<div class="v5 ps359 s399 c793">
<p class="p18 f116">9- Non-Conventional Processes</p>
</div>
<div class="v5 ps360 s496 c45">
<div class="v5 ps33 s496 w2">
<div class="v5 ps33 s400 c538">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c794"></div>
<div class="v5 ps528 s558 c795">
<p class="p18"><span class="f169">Comparison of temperature and displacement measurements with load simulations for the determination of Process Signatures<br></span><span class="f170">F.A.Frerichs, A.B.Tausendfreund and T.L</span><span class="f170">ü</span><span class="f170">bben</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c796"></div>
<div class="v5 ps351 s386 c797"></div>
</div>
<div class="v5 ps362 s405 c543">
<div class="v5 ps33 s397 c798">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup77');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps363 s397 c799">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup78');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c800">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup79');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps529 s558 c801">
<p class="p18 f164">Surface Integrity of Wire Electrochemical Machined Inconel 718<br><span class="f165">T.Herriga, L.Heidemannsa, L.Ehle, T.E.Weirich and T.Bergs</span></p>
</div>
<div class="v5 ps522 s565 c802">
<p class="p18"><span class="f164">Discharge energy based optimisation of sinking EDM of cemented carbides<br></span><span class="f165">T.Petersen, U.K</span><span class="f165">ü</span><span class="f165">pper, A.Klink, T.Herrig and T.Bergs</span></p>
</div>
</div>
</div>
<div class="v5 ps451 s390 c45">
<div class="v5 ps33 s390 w2">
<div class="v5 ps33 s390 c803">
<div class="v5 ps33 s391 c804"></div>
<div class="v5 ps351 s392 c805"></div>
</div>
<div class="v5 ps515 s566 c351">
<div class="v5 ps33 s567 c806">
<p class="p18 f164">The influence of surface finishing on laser heat treatments of a tool steel<br><span class="f165">J N Lagarinhosa, S Santos, G Miranda, D Afonso, R Torcato, C Santos and J M Oliveira</span></p>
</div>
<div class="v5 ps530 s558 c557">
<p class="p18 f164">Surface defect detection and prediction in carbide cutting tools treated by lasers<br><span class="f165">Kafayat Eniola Hazzan and Manuela Pacella</span></p>
</div>
</div>
<div class="v5 ps525 s396 c807">
<div class="v5 ps33 s397 c808">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup80');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c809">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup81');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps531 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v43 ps563 s609"></a>
<div class="btf ps532 v7 s419">
<div class="v5 ps533 s568 c810">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps534 s49 c811">
<div class="v5 ps38 s50 c812">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un992"><source data-srcset="images/transparentks-102-45.php 1x, images/transparentks-204-45.php 2x, images/transparentks-306-58.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-39.php 1x, images/transparentks-204-39.php 2x, images/transparentks-306-57.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-45.php 1x, images/transparentks-306-59.php 2x, images/transparentks-459-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-39.php 1x, images/transparentks-306-39.php 2x, images/transparentks-459-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-49.php 1x, images/transparentks-114-49.php 2x, images/transparentks-171-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-43.php 1x, images/transparentks-114-43.php 2x, images/transparentks-171-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-45.php 1x, images/transparentks-142-139.php 2x, images/transparentks-213-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-39.php 1x, images/transparentks-142-112.php 2x, images/transparentks-213-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-93.php 1x, images/transparentks-178-93.php 2x, images/transparentks-267-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-81.php 1x, images/transparentks-178-81.php 2x, images/transparentks-267-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-129.php 1x, images/transparentks-284-85.php 2x, images/transparentks-426-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-113.php 1x, images/transparentks-284-73.php 2x, images/transparentks-426-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-73.php" title="knowledge &amp; skills logo" alt="logo" class="un875 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un993">
<source data-srcset="images/k-stransparent-110-45.php 1x, images/k-stransparent-220-45.php 2x, images/k-stransparent-330-58.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-39.php 1x, images/k-stransparent-220-39.php 2x, images/k-stransparent-330-57.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-45.php 1x, images/k-stransparent-330-59.php 2x, images/k-stransparent-495-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-39.php 1x, images/k-stransparent-330-39.php 2x, images/k-stransparent-495-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-43.php 1x, images/k-stransparent-340-43.php 2x, images/k-stransparent-510-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-37.php 1x, images/k-stransparent-340-37.php 2x, images/k-stransparent-510-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-45.php 1x, images/k-stransparent-424-95.php 2x, images/k-stransparent-636-13.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-39.php 1x, images/k-stransparent-424-78.php 2x, images/k-stransparent-636-12.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-45.php 1x, images/k-stransparent-530-45.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-39.php 1x, images/k-stransparent-530-39.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-89.php 1x, images/k-stransparent-848-45.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-79.php 1x, images/k-stransparent-848-39.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-39.php" alt="Knowledge an Skills shared by talented engineers" class="un876 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c813"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c814"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c815"></div>
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
<div class="v5 ps38 s69 c816">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v46 ps564 s610 c852">
<div class="ps565 v43 s611">
<div class="v44 ps566 s612 c853">
<p class="p29 f184">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f185"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v44 ps567 s613 c854">
<a href="javascript:void(0)" class="denyConsent f186 btn195 v45 s614">Refuse</a>
</div>
<div class="v44 ps568 s613 c854">
<a href="javascript:void(0)" class="allowConsent f187 btn196 v45 s614">OK</a>
</div>
</div>
</div>
<div id="popup81" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps569">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c855">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c582">
<div class="player un877 pl73">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-387.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c583">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c584">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c585">
<a onclick="pop&&pop.closePopup('popup81');return false" style="cursor:pointer;" class="f67 btn173 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup80" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps571">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c856">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c285">
<div class="player un878 pl74">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-860.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c286">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c287">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c288">
<a onclick="pop&&pop.closePopup('popup80');return false" style="cursor:pointer;" class="f67 btn174 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup79" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps572">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c857">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c586">
<div class="player un879 pl75">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-671.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c587">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c588">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c294">
<a onclick="pop&&pop.closePopup('popup79');return false" style="cursor:pointer;" class="f67 btn175 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup78" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps573">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c858">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c589">
<div class="player un880 pl76">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-408.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c590">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c591">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c592">
<a onclick="pop&&pop.closePopup('popup78');return false" style="cursor:pointer;" class="f67 btn176 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup77" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps574">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c859">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c303">
<div class="player un881 pl77">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-435.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c593">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c594">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c295">
<a onclick="pop&&pop.closePopup('popup77');return false" style="cursor:pointer;" class="f67 btn177 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup76" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps575">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c860">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c309">
<div class="player un882 pl78">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-574.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c595">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c596">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c597">
<a onclick="pop&&pop.closePopup('popup76');return false" style="cursor:pointer;" class="f67 btn178 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup75" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps576">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c861">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c598">
<div class="player un883 pl79">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-594.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c599">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c600">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c601">
<a onclick="pop&&pop.closePopup('popup75');return false" style="cursor:pointer;" class="f67 btn179 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup74" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps577">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c862">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c310">
<div class="player un884 pl80">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-631.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c311">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c312">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c313">
<a onclick="pop&&pop.closePopup('popup74');return false" style="cursor:pointer;" class="f67 btn180 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup73" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps578">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c863">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c602">
<div class="player un885 pl81">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-674.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c603">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c604">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c319">
<a onclick="pop&&pop.closePopup('popup73');return false" style="cursor:pointer;" class="f67 btn181 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup82" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps579">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c864">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c605">
<div class="player un886 pl82">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-378.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c606">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c607">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c608">
<a onclick="pop&&pop.closePopup('popup82');return false" style="cursor:pointer;" class="f67 btn182 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup72" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps580">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c865">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c328">
<div class="player un887 pl83">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S7-474.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c573">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c817">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c320">
<a onclick="pop&&pop.closePopup('popup72');return false" style="cursor:pointer;" class="f67 btn183 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup71" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps581">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c866">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c334">
<div class="player un888 pl84">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S7-383.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c575">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c818">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c577">
<a onclick="pop&&pop.closePopup('popup71');return false" style="cursor:pointer;" class="f67 btn184 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup70" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps582">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c867">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c578">
<div class="player un889 pl85">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S7-592.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c579">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c819">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c581">
<a onclick="pop&&pop.closePopup('popup70');return false" style="cursor:pointer;" class="f67 btn185 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup69" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps583">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c868">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c335">
<div class="player un890 pl86">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S7-558.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c336">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c337">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c338">
<a onclick="pop&&pop.closePopup('popup69');return false" style="cursor:pointer;" class="f67 btn186 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup68" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps584">
<div onclick="event.stopPropagation()" class="popup v47 ps570 s615 c869">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c722">
<div class="player un891 pl87">
<video preload="metadata" poster="images/poster-3592-3.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S7-459.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c820">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c821">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c344">
<a onclick="pop&&pop.closePopup('popup68');return false" style="cursor:pointer;" class="f67 btn187 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session1-3.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>