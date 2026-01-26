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
            $redirect = 'votes.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = 'CF5714A3-7FC2-449D-B5F4-5F06269959B0';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'votes.php';
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
<title>vote for your BP and BYS</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/votes.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="vote for your BP and BYS">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<link rel="preload" href="css/Lato-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps194{position:relative;margin-top:0}.v20{display:block;vertical-align:top}.s251{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v21{display:inline-block;vertical-align:top}.ps195{position:relative;margin-left:0;margin-top:0}.s252{min-width:1920px;width:1920px;min-height:142px}.ps196{position:relative;margin-left:0;margin-top:0}.s253{min-width:165px;width:165px;min-height:142px;height:142px}.c388{z-index:18;pointer-events:auto}.a6{display:block}.i42{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i43{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps197{position:relative;margin-left:-21px;margin-top:6px}.s254{min-width:424px;width:424px;min-height:130px;height:130px}.c389{z-index:1;pointer-events:auto}.i44{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps198{position:relative;margin-left:1038px;margin-top:54px}.s255{min-width:84px;width:84px;min-height:36px}.c390{z-index:22;pointer-events:auto}.f69{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn118{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn118:hover{background-color:#82939e;border-color:#000;color:#000}.btn118:active{background-color:#677a85;border-color:#000;color:#808080}.v22{display:inline-block;overflow:hidden;outline:0}.s256{width:84px;padding-right:0;height:24px}.ps199{position:relative;margin-left:10px;margin-top:30px}.s257{min-width:84px;width:84px;min-height:82px}.c391{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p14{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f70{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s258{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps200{position:relative;margin-left:0;margin-top:21px}.s259{min-width:136px;width:136px;min-height:100px;height:100px}.c392{z-index:19;pointer-events:auto}.i45{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps201{position:relative;margin-top:8px}.s260{width:100%;min-width:1920px;min-height:744px}.c393{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-50.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c393{background-image:url(images/cirp-csi-2022-320-51.php)}.ps202{position:relative;margin-top:60px}.s261{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:256px}.ps203{position:relative;margin-left:159px;margin-top:0}.s262{min-width:1681px;width:1681px;min-height:256px}.ps204{position:relative;margin-left:0;margin-top:0}.s263{min-width:1601px;width:1601px;min-height:256px}.c394{z-index:2;pointer-events:auto;overflow:hidden;height:256px}.f71{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps205{position:relative;margin-left:-4px;margin-top:0}.s264{min-width:84px;width:84px;min-height:80px}.c395{z-index:252;pointer-events:auto;overflow:hidden;height:80px}.f72{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s265{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f73{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps206{position:relative;margin-top:47px}.s266{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3183px}.ps207{position:relative;margin-left:699px;margin-top:0}.s267{min-width:516px;width:516px;min-height:107px}.c396{z-index:253;pointer-events:auto}.f74{font-family:"Helvetica Neue", sans-serif;font-size:32px;font-size:calc(32px * var(--f));line-height:1.220;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:34px;padding-bottom:34px;margin-top:0;margin-bottom:0}.btn119{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#c32f2d;background-clip:padding-box;color:#fff}.btn119:hover{background-color:#82939e;border-color:#000;color:#000}.btn119:active{background-color:#677a85;border-color:#000;color:#808080}.s268{width:516px;padding-right:0;height:39px}.ps208{position:relative;margin-left:80px;margin-top:35px}.s269{min-width:1753px;width:1753px;min-height:2924px}.c397{z-index:23;pointer-events:auto;overflow:hidden;height:2924px}.f75{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:15px;font-size:calc(15px * var(--f));line-height:1.401;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f76{font-family:Lato;font-size:36px;font-size:calc(36px * var(--f));line-height:1.695;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f77{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:26px;font-size:calc(26px * var(--f));line-height:1.386;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.p15{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f78{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.p16{text-indent:0;padding-bottom:10px;padding-right:0;text-align:left}.f79{font-family:Lato;font-size:32px;font-size:calc(32px * var(--f));line-height:1.688;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#181b28;background-color:initial;text-shadow:none}.p17{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f80{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f81{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.v23{display:none;vertical-align:top}.s270{width:100%;min-width:1920px;min-height:198px}.c398{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps210{position:relative;margin-top:34px}.s271{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps211{position:relative;margin-left:24px;margin-top:0}.s272{min-width:1876px;width:1876px;min-height:78px}.c399{pointer-events:auto;overflow:hidden;height:78px}.f82{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f83{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps212{position:relative;margin-left:684px;margin-top:0}.s273{min-width:256px;width:256px;min-height:64px}.c400{pointer-events:auto}.f84{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn120{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn120:hover{background-color:#82939e;border-color:#000;color:#000}.btn120:active{background-color:#181b28;border-color:#000;color:#808080}.s274{width:256px;padding-right:0;height:24px}.ps213{position:relative;margin-left:40px;margin-top:0}.f85{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn121{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn121:hover{background-color:#82939e;border-color:#000;color:#000}.btn121:active{background-color:#181b28;border-color:#000;color:#808080}.ps214{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435318;pointer-events:none;visibility:hidden;opacity:0}.v24{display:inline-block;vertical-align:top;pointer-events:auto}.ps215{position:relative;margin-top:calc(50vh - 650px);margin-top:calc(var(--vh, 1vh) * 50 - 650px);-webkit-transform:translate3d(0,0,0)}.s275{width:100%;min-width:1920px;min-height:1300px;height:1300px}.c401{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps216{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435312;pointer-events:none;visibility:hidden;opacity:0}.ps217{position:relative;margin-top:calc(50vh - 652px);margin-top:calc(var(--vh, 1vh) * 50 - 652px);-webkit-transform:translate3d(0,0,0)}.s276{width:100%;min-width:1920px;min-height:1305px;height:1305px}.c402{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps218{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435306;pointer-events:none;visibility:hidden;opacity:0}.ps219{position:relative;margin-top:calc(50vh - 650px);margin-top:calc(var(--vh, 1vh) * 50 - 650px);-webkit-transform:translate3d(0,0,0)}.s277{width:100%;min-width:1920px;min-height:1301px;height:1301px}.c403{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps220{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435300;pointer-events:none;visibility:hidden;opacity:0}.ps221{position:relative;margin-top:calc(50vh - 651px);margin-top:calc(var(--vh, 1vh) * 50 - 651px);-webkit-transform:translate3d(0,0,0)}.s278{width:100%;min-width:1920px;min-height:1302px;height:1302px}.c404{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps222{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435294;pointer-events:none;visibility:hidden;opacity:0}.ps223{position:relative;margin-top:calc(50vh - 649px);margin-top:calc(var(--vh, 1vh) * 50 - 649px);-webkit-transform:translate3d(0,0,0)}.s279{width:100%;min-width:1920px;min-height:1298px;height:1298px}.c405{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps224{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435288;pointer-events:none;visibility:hidden;opacity:0}.ps225{position:relative;margin-top:calc(50vh - 646px);margin-top:calc(var(--vh, 1vh) * 50 - 646px);-webkit-transform:translate3d(0,0,0)}.s280{width:100%;min-width:1920px;min-height:1292px;height:1292px}.c406{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps226{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435282;pointer-events:none;visibility:hidden;opacity:0}.ps227{position:relative;margin-top:calc(50vh - 646px);margin-top:calc(var(--vh, 1vh) * 50 - 646px);-webkit-transform:translate3d(0,0,0)}.s281{width:100%;min-width:1920px;min-height:1292px;height:1292px}.c407{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps228{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435276;pointer-events:none;visibility:hidden;opacity:0}.ps229{position:relative;margin-top:calc(50vh - 653px);margin-top:calc(var(--vh, 1vh) * 50 - 653px);-webkit-transform:translate3d(0,0,0)}.s282{width:100%;min-width:1920px;min-height:1306px;height:1306px}.c408{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps230{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435270;pointer-events:none;visibility:hidden;opacity:0}.ps231{position:relative;margin-top:calc(50vh - 647px);margin-top:calc(var(--vh, 1vh) * 50 - 647px);-webkit-transform:translate3d(0,0,0)}.s283{width:100%;min-width:1920px;min-height:1295px;height:1295px}.c409{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps232{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435264;pointer-events:none;visibility:hidden;opacity:0}.ps233{position:relative;margin-top:calc(50vh - 653px);margin-top:calc(var(--vh, 1vh) * 50 - 653px);-webkit-transform:translate3d(0,0,0)}.s284{width:100%;min-width:1920px;min-height:1306px;height:1306px}.c410{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps234{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435258;pointer-events:none;visibility:hidden;opacity:0}.ps235{position:relative;margin-top:calc(50vh - 645px);margin-top:calc(var(--vh, 1vh) * 50 - 645px);-webkit-transform:translate3d(0,0,0)}.s285{width:100%;min-width:1920px;min-height:1290px;height:1290px}.c411{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps236{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435252;pointer-events:none;visibility:hidden;opacity:0}.ps237{position:relative;margin-top:calc(50vh - 649px);margin-top:calc(var(--vh, 1vh) * 50 - 649px);-webkit-transform:translate3d(0,0,0)}.s286{width:100%;min-width:1920px;min-height:1298px;height:1298px}.c412{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps238{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435246;pointer-events:none;visibility:hidden;opacity:0}.ps239{position:relative;margin-top:calc(50vh - 648px);margin-top:calc(var(--vh, 1vh) * 50 - 648px);-webkit-transform:translate3d(0,0,0)}.s287{width:100%;min-width:1920px;min-height:1297px;height:1297px}.c413{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps240{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435240;pointer-events:none;visibility:hidden;opacity:0}.ps241{position:relative;margin-top:calc(50vh - 649px);margin-top:calc(var(--vh, 1vh) * 50 - 649px);-webkit-transform:translate3d(0,0,0)}.s288{width:100%;min-width:1920px;min-height:1298px;height:1298px}.c414{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps242{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435234;pointer-events:none;visibility:hidden;opacity:0}.ps243{position:relative;margin-top:calc(50vh - 646px);margin-top:calc(var(--vh, 1vh) * 50 - 646px);-webkit-transform:translate3d(0,0,0)}.s289{width:100%;min-width:1920px;min-height:1292px;height:1292px}.c415{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps244{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435228;pointer-events:none;visibility:hidden;opacity:0}.ps245{position:relative;margin-top:calc(50vh - 644px);margin-top:calc(var(--vh, 1vh) * 50 - 644px);-webkit-transform:translate3d(0,0,0)}.s290{width:100%;min-width:1920px;min-height:1288px;height:1288px}.c416{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps246{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435222;pointer-events:none;visibility:hidden;opacity:0}.ps247{position:relative;margin-top:calc(50vh - 648px);margin-top:calc(var(--vh, 1vh) * 50 - 648px);-webkit-transform:translate3d(0,0,0)}.s291{width:100%;min-width:1920px;min-height:1297px;height:1297px}.c417{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps248{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435216;pointer-events:none;visibility:hidden;opacity:0}.ps249{position:relative;margin-top:calc(50vh - 653px);margin-top:calc(var(--vh, 1vh) * 50 - 653px);-webkit-transform:translate3d(0,0,0)}.s292{width:100%;min-width:1920px;min-height:1306px;height:1306px}.c418{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps250{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435210;pointer-events:none;visibility:hidden;opacity:0}.ps251{position:relative;margin-top:calc(50vh - 650px);margin-top:calc(var(--vh, 1vh) * 50 - 650px);-webkit-transform:translate3d(0,0,0)}.s293{width:100%;min-width:1920px;min-height:1301px;height:1301px}.c419{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps252{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435204;pointer-events:none;visibility:hidden;opacity:0}.c420{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps253{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435198;pointer-events:none;visibility:hidden;opacity:0}.ps254{position:relative;margin-top:calc(50vh - 646px);margin-top:calc(var(--vh, 1vh) * 50 - 646px);-webkit-transform:translate3d(0,0,0)}.s294{width:100%;min-width:1920px;min-height:1292px;height:1292px}.c421{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps255{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435192;pointer-events:none;visibility:hidden;opacity:0}.ps256{position:relative;margin-top:calc(50vh - 645px);margin-top:calc(var(--vh, 1vh) * 50 - 645px);-webkit-transform:translate3d(0,0,0)}.s295{width:100%;min-width:1920px;min-height:1290px;height:1290px}.c422{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps257{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435186;pointer-events:none;visibility:hidden;opacity:0}.ps258{position:relative;margin-top:calc(50vh - 646px);margin-top:calc(var(--vh, 1vh) * 50 - 646px);-webkit-transform:translate3d(0,0,0)}.s296{width:100%;min-width:1920px;min-height:1293px;height:1293px}.c423{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps259{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435180;pointer-events:none;visibility:hidden;opacity:0}.c424{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps260{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435174;pointer-events:none;visibility:hidden;opacity:0}.ps261{position:relative;margin-top:calc(50vh - 649px);margin-top:calc(var(--vh, 1vh) * 50 - 649px);-webkit-transform:translate3d(0,0,0)}.s297{width:100%;min-width:1920px;min-height:1298px;height:1298px}.c425{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps262{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435168;pointer-events:none;visibility:hidden;opacity:0}.s298{width:100%;min-width:1920px;min-height:1302px;height:1302px}.c426{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps263{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435162;pointer-events:none;visibility:hidden;opacity:0}.s299{width:100%;min-width:1920px;min-height:1297px;height:1297px}.c427{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps264{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435156;pointer-events:none;visibility:hidden;opacity:0}.c428{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps265{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435150;pointer-events:none;visibility:hidden;opacity:0}.ps266{position:relative;margin-top:calc(50vh - 649px);margin-top:calc(var(--vh, 1vh) * 50 - 649px);-webkit-transform:translate3d(0,0,0)}.s300{width:100%;min-width:1920px;min-height:1299px;height:1299px}.c429{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps267{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435144;pointer-events:none;visibility:hidden;opacity:0}.ps268{position:relative;margin-top:calc(50vh - 721px);margin-top:calc(var(--vh, 1vh) * 50 - 721px);-webkit-transform:translate3d(0,0,0)}.s301{width:100%;min-width:1920px;min-height:1442px;height:1442px}.c430{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps269{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435138;pointer-events:none;visibility:hidden;opacity:0}.ps270{position:relative;margin-top:calc(50vh - 645px);margin-top:calc(var(--vh, 1vh) * 50 - 645px);-webkit-transform:translate3d(0,0,0)}.s302{width:100%;min-width:1920px;min-height:1291px;height:1291px}.c431{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps271{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435132;pointer-events:none;visibility:hidden;opacity:0}.ps272{position:relative;margin-top:calc(50vh - 644px);margin-top:calc(var(--vh, 1vh) * 50 - 644px);-webkit-transform:translate3d(0,0,0)}.s303{width:100%;min-width:1920px;min-height:1288px;height:1288px}.c432{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps273{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435126;pointer-events:none;visibility:hidden;opacity:0}.ps274{position:relative;margin-top:calc(50vh - 647px);margin-top:calc(var(--vh, 1vh) * 50 - 647px);-webkit-transform:translate3d(0,0,0)}.s304{width:100%;min-width:1920px;min-height:1294px;height:1294px}.c433{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps275{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435120;pointer-events:none;visibility:hidden;opacity:0}.ps276{position:relative;margin-top:calc(50vh - 644px);margin-top:calc(var(--vh, 1vh) * 50 - 644px);-webkit-transform:translate3d(0,0,0)}.s305{width:100%;min-width:1920px;min-height:1289px;height:1289px}.c434{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps277{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435114;pointer-events:none;visibility:hidden;opacity:0}.ps278{position:relative;margin-top:calc(50vh - 642px);margin-top:calc(var(--vh, 1vh) * 50 - 642px);-webkit-transform:translate3d(0,0,0)}.s306{width:100%;min-width:1920px;min-height:1284px;height:1284px}.c435{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps279{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435108;pointer-events:none;visibility:hidden;opacity:0}.s307{width:100%;min-width:1920px;min-height:1291px;height:1291px}.c436{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps280{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435102;pointer-events:none;visibility:hidden;opacity:0}.s308{width:100%;min-width:1920px;min-height:1295px;height:1295px}.c437{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps281{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435096;pointer-events:none;visibility:hidden;opacity:0}.ps282{position:relative;margin-top:calc(50vh - 648px);margin-top:calc(var(--vh, 1vh) * 50 - 648px);-webkit-transform:translate3d(0,0,0)}.s309{width:100%;min-width:1920px;min-height:1297px;height:1297px}.c438{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps194{margin-top:4px}.s251{min-width:1200px;width:1200px;min-height:89px}.s252{min-width:1200px;width:1200px;min-height:89px}.s253{min-width:115px;width:115px;min-height:89px;height:89px}.i42{left:13px;width:89px;height:89px}.ps197{margin-left:-16px;margin-top:4px}.s254{min-width:265px;width:265px;min-height:81px;height:81px}.i44{width:265px;height:81px}.ps198{margin-left:640px;margin-top:30px}.s255{min-width:52px;width:52px;min-height:22px}.f69{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s256{width:52px;height:15px}.ps199{margin-left:7px;margin-top:15px}.s257{min-width:52px;width:52px;min-height:51px}.c391{height:51px}.f70{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s258{height:30px;transform:scale(1.000) translateY(3px)}.ps200{margin-top:9px}.s259{min-width:85px;width:85px;min-height:63px;height:63px}.i45{width:85px;height:31px;top:16px}.ps201{margin-top:5px}.s260{min-width:1200px;min-height:494px}.ps202{margin-top:4px}.s261{min-width:1200px;width:1200px;min-height:182px}.ps203{margin-left:92px}.s262{min-width:1057px;width:1057px;min-height:182px}.s263{min-width:1008px;width:1008px;min-height:182px}.c394{height:182px}.f71{font-size:30px;font-size:calc(30px * var(--f))}.ps205{margin-left:-3px}.s264{min-width:52px;width:52px;min-height:58px}.c395{height:58px}.f72{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s265{height:27px;transform:scale(1.111) translateY(2px)}.f73{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps206{margin-top:0}.s266{min-width:1200px;width:1200px;min-height:2206px}.ps207{margin-left:439px}.s267{min-width:322px;width:322px;min-height:67px}.f74{font-size:20px;font-size:calc(20px * var(--f));line-height:1.251;padding-top:21px;padding-bottom:21px}.s268{width:322px;height:25px}.ps208{margin-left:67px;margin-top:20px}.s269{min-width:1065px;width:1065px;min-height:2034px}.c397{height:2034px}.f75{font-size:9px;font-size:calc(9px * var(--f));line-height:1.445}.f76{font-size:24px;font-size:calc(24px * var(--f));line-height:1.668}.f77{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f78{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f79{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.f80{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f81{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.s270{min-width:1200px;min-height:129px}.ps210{margin-top:21px}.s271{min-width:1200px;width:1200px;min-height:84px}.ps211{margin-left:15px}.s272{min-width:1172px;width:1172px;min-height:49px}.c399{height:49px}.f82{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f83{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps212{margin-left:412px;margin-top:-5px}.s273{min-width:160px;width:160px;min-height:40px}.f84{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s274{width:160px;height:15px}.ps213{margin-left:55px;margin-top:-5px}.f85{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps215{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s275{min-width:1200px;min-height:793px;height:793px}.ps217{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s276{min-width:1200px;min-height:793px;height:793px}.ps219{margin-top:calc(50vh - 399px);margin-top:calc(var(--vh, 1vh) * 50 - 399px)}.s277{min-width:1200px;min-height:799px;height:799px}.ps221{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s278{min-width:1200px;min-height:792px;height:792px}.ps223{margin-top:calc(50vh - 394px);margin-top:calc(var(--vh, 1vh) * 50 - 394px)}.s279{min-width:1200px;min-height:789px;height:789px}.ps225{margin-top:calc(50vh - 394px);margin-top:calc(var(--vh, 1vh) * 50 - 394px)}.s280{min-width:1200px;min-height:789px;height:789px}.ps227{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s281{min-width:1200px;min-height:793px;height:793px}.ps229{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s282{min-width:1200px;min-height:795px;height:795px}.ps231{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s283{min-width:1200px;min-height:794px;height:794px}.ps233{margin-top:calc(50vh - 394px);margin-top:calc(var(--vh, 1vh) * 50 - 394px)}.s284{min-width:1200px;min-height:789px;height:789px}.ps235{margin-top:calc(50vh - 399px);margin-top:calc(var(--vh, 1vh) * 50 - 399px)}.s285{min-width:1200px;min-height:798px;height:798px}.ps237{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s286{min-width:1200px;min-height:794px;height:794px}.ps239{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s287{min-width:1200px;min-height:795px;height:795px}.ps241{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s288{min-width:1200px;min-height:796px;height:796px}.ps243{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s289{min-width:1200px;min-height:796px;height:796px}.ps245{margin-top:calc(50vh - 399px);margin-top:calc(var(--vh, 1vh) * 50 - 399px)}.s290{min-width:1200px;min-height:798px;height:798px}.ps247{margin-top:calc(50vh - 395px);margin-top:calc(var(--vh, 1vh) * 50 - 395px)}.s291{min-width:1200px;min-height:791px;height:791px}.ps249{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s292{min-width:1200px;min-height:797px;height:797px}.ps251{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s293{min-width:1200px;min-height:795px;height:795px}.ps254{margin-top:calc(50vh - 397px);margin-top:calc(var(--vh, 1vh) * 50 - 397px)}.s294{min-width:1200px;min-height:795px;height:795px}.ps256{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s295{min-width:1200px;min-height:792px;height:792px}.ps258{margin-top:calc(50vh - 395px);margin-top:calc(var(--vh, 1vh) * 50 - 395px)}.s296{min-width:1200px;min-height:791px;height:791px}.ps261{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s297{min-width:1200px;min-height:792px;height:792px}.s298{min-width:1200px;min-height:793px;height:793px}.s299{min-width:1200px;min-height:794px;height:794px}.ps266{margin-top:calc(50vh - 400px);margin-top:calc(var(--vh, 1vh) * 50 - 400px)}.s300{min-width:1200px;min-height:801px;height:801px}.ps268{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s301{min-width:1200px;min-height:793px;height:793px}.ps270{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s302{min-width:1200px;min-height:796px;height:796px}.ps272{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s303{min-width:1200px;min-height:797px;height:797px}.ps274{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s304{min-width:1200px;min-height:796px;height:796px}.ps276{margin-top:calc(50vh - 396px);margin-top:calc(var(--vh, 1vh) * 50 - 396px)}.s305{min-width:1200px;min-height:793px;height:793px}.ps278{margin-top:calc(50vh - 398px);margin-top:calc(var(--vh, 1vh) * 50 - 398px)}.s306{min-width:1200px;min-height:796px;height:796px}.s307{min-width:1200px;min-height:797px;height:797px}.s308{min-width:1200px;min-height:796px;height:796px}.ps282{margin-top:calc(50vh - 389px);margin-top:calc(var(--vh, 1vh) * 50 - 389px)}.s309{min-width:1200px;min-height:779px;height:779px}}@media (min-width:960px) and (max-width:1199px) {.s251{min-width:960px;width:960px;min-height:71px}.s252{min-width:960px;width:960px;min-height:71px}.s253{min-width:69px;width:69px;min-height:71px;height:71px}.i42{left:0;width:69px;height:69px;top:1px}.ps197{margin-left:1px;margin-top:3px}.s254{min-width:212px;width:212px;min-height:65px;height:65px}.i44{width:212px;height:65px}.ps198{margin-left:521px;margin-top:27px}.s255{min-width:42px;width:42px;min-height:18px}.f69{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s256{width:42px;height:11px}.ps199{margin-left:5px;margin-top:15px}.s257{min-width:42px;width:42px;min-height:41px}.c391{height:41px}.f70{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s258{height:24px;transform:scale(1.000) translateY(2px)}.ps200{margin-top:10px}.s259{min-width:68px;width:68px;min-height:51px;height:51px}.i45{width:68px;height:25px;top:13px}.ps201{margin-top:4px}.s260{min-width:960px;min-height:501px}.ps202{margin-top:0}.s261{min-width:960px;width:960px;min-height:129px}.ps203{margin-left:80px}.s262{min-width:840px;width:840px;min-height:129px}.s263{min-width:798px;width:798px;min-height:129px}.c394{height:129px}.f71{font-size:24px;font-size:calc(24px * var(--f))}.ps205{margin-left:0}.s264{min-width:42px;width:42px;min-height:46px}.c395{height:46px}.f72{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s265{height:22px;transform:scale(1.111) translateY(2px)}.f73{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps206{margin-top:32px}.s266{min-width:960px;width:960px;min-height:1878px}.ps207{margin-left:351px}.s267{min-width:258px;width:258px;min-height:53px}.f74{font-size:16px;font-size:calc(16px * var(--f));line-height:1.188;padding-top:17px;padding-bottom:17px}.s268{width:258px;height:19px}.ps208{margin-left:71px;margin-top:29px}.s269{min-width:818px;width:818px;min-height:1720px}.c397{height:1720px}.f75{font-size:7px;font-size:calc(7px * var(--f));line-height:1.430}.f76{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.f77{font-size:14px;font-size:calc(14px * var(--f));line-height:1.430}.f78{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f79{font-size:16px;font-size:calc(16px * var(--f))}.f80{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f81{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.s270{min-width:960px;min-height:106px}.ps210{margin-top:17px}.s271{min-width:960px;width:960px;min-height:68px}.ps211{margin-left:12px}.s272{min-width:938px;width:938px;min-height:39px}.c399{height:39px}.f82{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f83{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps212{margin-left:342px;margin-top:-3px}.s273{min-width:128px;width:128px;min-height:32px}.f84{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s274{width:128px;height:12px}.ps213{margin-left:20px;margin-top:-3px}.f85{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps215{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s275{min-width:960px;min-height:666px;height:666px}.ps217{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s276{min-width:960px;min-height:666px;height:666px}.ps219{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s277{min-width:960px;min-height:666px;height:666px}.ps221{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s278{min-width:960px;min-height:666px;height:666px}.ps223{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s279{min-width:960px;min-height:666px;height:666px}.ps225{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s280{min-width:960px;min-height:666px;height:666px}.ps227{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s281{min-width:960px;min-height:666px;height:666px}.ps229{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s282{min-width:960px;min-height:666px;height:666px}.ps231{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s283{min-width:960px;min-height:666px;height:666px}.ps233{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s284{min-width:960px;min-height:666px;height:666px}.ps235{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s285{min-width:960px;min-height:666px;height:666px}.ps237{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s286{min-width:960px;min-height:666px;height:666px}.ps239{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s287{min-width:960px;min-height:666px;height:666px}.ps241{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s288{min-width:960px;min-height:666px;height:666px}.ps243{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s289{min-width:960px;min-height:666px;height:666px}.ps245{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s290{min-width:960px;min-height:666px;height:666px}.ps247{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s291{min-width:960px;min-height:666px;height:666px}.ps249{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s292{min-width:960px;min-height:666px;height:666px}.ps251{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s293{min-width:960px;min-height:666px;height:666px}.ps254{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s294{min-width:960px;min-height:666px;height:666px}.ps256{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s295{min-width:960px;min-height:666px;height:666px}.ps258{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s296{min-width:960px;min-height:666px;height:666px}.ps261{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s297{min-width:960px;min-height:666px;height:666px}.s298{min-width:960px;min-height:666px;height:666px}.s299{min-width:960px;min-height:666px;height:666px}.ps266{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s300{min-width:960px;min-height:666px;height:666px}.ps268{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s301{min-width:960px;min-height:666px;height:666px}.ps270{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s302{min-width:960px;min-height:666px;height:666px}.ps272{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s303{min-width:960px;min-height:666px;height:666px}.ps274{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s304{min-width:960px;min-height:666px;height:666px}.ps276{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s305{min-width:960px;min-height:666px;height:666px}.ps278{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s306{min-width:960px;min-height:666px;height:666px}.s307{min-width:960px;min-height:666px;height:666px}.s308{min-width:960px;min-height:666px;height:666px}.ps282{margin-top:calc(50vh - 333px);margin-top:calc(var(--vh, 1vh) * 50 - 333px)}.s309{min-width:960px;min-height:666px;height:666px}}@media (min-width:768px) and (max-width:959px) {.s251{min-width:768px;width:768px;min-height:57px}.s252{min-width:768px;width:768px;min-height:57px}.s253{min-width:55px;width:55px;min-height:57px;height:57px}.i42{left:0;width:55px;height:55px;top:1px}.ps197{margin-left:1px;margin-top:2px}.s254{min-width:170px;width:170px;min-height:52px;height:52px}.i44{width:170px;height:52px}.ps198{margin-left:416px;margin-top:22px}.s255{min-width:34px;width:34px;min-height:14px}.f69{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s256{width:34px;height:9px}.ps199{margin-left:4px;margin-top:12px}.s257{min-width:34px;width:34px;min-height:33px}.c391{height:33px}.f70{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s258{height:19px;transform:scale(1.000) translateY(2px)}.ps200{margin-top:8px}.s259{min-width:54px;width:54px;min-height:41px;height:41px}.i45{width:54px;height:20px;top:10px}.ps201{margin-top:3px}.s260{min-width:768px;min-height:401px}.ps202{margin-top:0}.s261{min-width:768px;width:768px;min-height:103px}.ps203{margin-left:64px}.s262{min-width:672px;width:672px;min-height:103px}.s263{min-width:638px;width:638px;min-height:103px}.c394{height:103px}.f71{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps205{margin-left:0}.s264{min-width:34px;width:34px;min-height:37px}.c395{height:37px}.f72{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s265{height:17px;transform:scale(1.111) translateY(2px)}.f73{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps206{margin-top:26px}.s266{min-width:768px;width:768px;min-height:1502px}.ps207{margin-left:281px}.s267{min-width:206px;width:206px;min-height:42px}.f74{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:14px;padding-bottom:13px}.s268{width:206px;height:15px}.ps208{margin-left:57px;margin-top:23px}.s269{min-width:654px;width:654px;min-height:1376px}.c397{height:1376px}.f75{font-size:5px;font-size:calc(5px * var(--f))}.f76{font-size:16px;font-size:calc(16px * var(--f));line-height:1.688}.f77{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f78{font-size:9px;font-size:calc(9px * var(--f));line-height:1.445}.p16{padding-bottom:8px}.f79{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f80{font-size:9px;font-size:calc(9px * var(--f));line-height:1.445}.f81{font-size:9px;font-size:calc(9px * var(--f));line-height:1.445}.s270{min-width:768px;min-height:85px}.ps210{margin-top:14px}.s271{min-width:768px;width:768px;min-height:54px}.ps211{margin-left:10px}.s272{min-width:750px;width:750px;min-height:31px}.c399{height:31px}.f82{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f83{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps212{margin-left:274px;margin-top:-3px}.s273{min-width:102px;width:102px;min-height:26px}.f84{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s274{width:102px;height:10px}.ps213{margin-left:16px;margin-top:-3px}.f85{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps215{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s275{min-width:768px;min-height:532px;height:532px}.ps217{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s276{min-width:768px;min-height:532px;height:532px}.ps219{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s277{min-width:768px;min-height:532px;height:532px}.ps221{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s278{min-width:768px;min-height:532px;height:532px}.ps223{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s279{min-width:768px;min-height:532px;height:532px}.ps225{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s280{min-width:768px;min-height:532px;height:532px}.ps227{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s281{min-width:768px;min-height:532px;height:532px}.ps229{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s282{min-width:768px;min-height:532px;height:532px}.ps231{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s283{min-width:768px;min-height:532px;height:532px}.ps233{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s284{min-width:768px;min-height:532px;height:532px}.ps235{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s285{min-width:768px;min-height:532px;height:532px}.ps237{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s286{min-width:768px;min-height:532px;height:532px}.ps239{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s287{min-width:768px;min-height:532px;height:532px}.ps241{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s288{min-width:768px;min-height:532px;height:532px}.ps243{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s289{min-width:768px;min-height:532px;height:532px}.ps245{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s290{min-width:768px;min-height:532px;height:532px}.ps247{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s291{min-width:768px;min-height:532px;height:532px}.ps249{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s292{min-width:768px;min-height:532px;height:532px}.ps251{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s293{min-width:768px;min-height:532px;height:532px}.ps254{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s294{min-width:768px;min-height:532px;height:532px}.ps256{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s295{min-width:768px;min-height:532px;height:532px}.ps258{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s296{min-width:768px;min-height:532px;height:532px}.ps261{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s297{min-width:768px;min-height:532px;height:532px}.s298{min-width:768px;min-height:532px;height:532px}.s299{min-width:768px;min-height:532px;height:532px}.ps266{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s300{min-width:768px;min-height:532px;height:532px}.ps268{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s301{min-width:768px;min-height:532px;height:532px}.ps270{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s302{min-width:768px;min-height:532px;height:532px}.ps272{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s303{min-width:768px;min-height:532px;height:532px}.ps274{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s304{min-width:768px;min-height:532px;height:532px}.ps276{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s305{min-width:768px;min-height:532px;height:532px}.ps278{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s306{min-width:768px;min-height:532px;height:532px}.s307{min-width:768px;min-height:532px;height:532px}.s308{min-width:768px;min-height:532px;height:532px}.ps282{margin-top:calc(50vh - 266px);margin-top:calc(var(--vh, 1vh) * 50 - 266px)}.s309{min-width:768px;min-height:532px;height:532px}}@media (min-width:480px) and (max-width:767px) {.ps194{margin-top:29px}.s251{min-width:480px;width:480px;min-height:153px}.ps195{margin-left:6px}.s252{min-width:464px;width:464px;min-height:153px}.s253{min-width:120px;width:120px;min-height:96px;height:96px}.i42{width:96px;height:96px}.ps197{margin-left:-25px;margin-top:19px}.s254{min-width:196px;width:196px;min-height:59px;height:59px}.i44{width:196px;height:59px}.ps198{margin-left:33px;margin-top:117px}.s255{min-width:140px;width:140px}.s256{width:140px}.ps199{margin-left:324px;margin-top:-143px}.s257{min-width:71px;width:71px;min-height:62px}.c391{height:62px}.f70{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s258{height:37px;transform:scale(1.000) translateY(4px)}.ps200{margin-left:377px;margin-top:-150px}.s259{min-width:87px;width:87px;min-height:75px;height:75px}.i45{width:87px;height:32px;top:21px}.ps201{margin-top:-47px}.s260{min-width:480px;min-height:336px}.ps202{margin-top:-51px}.s261{min-width:480px;width:480px;min-height:282px}.ps203{margin-left:33px}.s262{min-width:447px;width:447px;min-height:282px}.ps204{margin-top:51px}.s263{min-width:414px;width:414px;min-height:231px}.c394{height:231px}.f71{font-size:30px;font-size:calc(30px * var(--f))}.ps205{margin-left:-37px}.s264{min-width:70px;width:70px;min-height:66px}.c395{height:66px}.f72{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s265{height:33px}.f73{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps206{margin-top:17px}.s266{min-width:480px;width:480px;min-height:6259px}.ps207{margin-left:35px}.s267{min-width:402px;width:402px;min-height:87px}.f74{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:31px;padding-bottom:30px}.s268{width:402px;height:26px}.ps208{margin-left:35px;margin-top:15px}.s269{min-width:408px;width:408px;min-height:6040px}.c397{height:6040px}.f75{font-size:21px;font-size:calc(21px * var(--f));line-height:1.430}.f76{font-size:24px;font-size:calc(24px * var(--f));line-height:1.668}.f77{font-size:21px;font-size:calc(21px * var(--f));line-height:1.430}.p15{padding-bottom:15px}.f78{font-size:25px;font-size:calc(25px * var(--f));line-height:1.401}.p16{padding-bottom:15px}.f79{font-size:25px;font-size:calc(25px * var(--f));line-height:1.681}.f80{font-size:21px;font-size:calc(21px * var(--f));line-height:1.430}.f81{font-size:21px;font-size:calc(21px * var(--f));line-height:1.430}.s270{min-width:480px}.ps210{margin-top:8px}.s271{min-width:480px;width:480px;min-height:166px}.ps211{margin-left:17px}.s272{min-width:448px;width:448px;min-height:136px}.c399{height:136px}.f82{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f83{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps212{margin-left:137px}.s273{min-width:99px;width:99px;min-height:30px}.f84{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s274{width:99px;height:18px}.ps213{margin-left:9px}.f85{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps215{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s275{min-width:480px;min-height:433px;height:433px}.ps217{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s276{min-width:480px;min-height:433px;height:433px}.ps219{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s277{min-width:480px;min-height:433px;height:433px}.ps221{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s278{min-width:480px;min-height:433px;height:433px}.ps223{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s279{min-width:480px;min-height:433px;height:433px}.ps225{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s280{min-width:480px;min-height:433px;height:433px}.ps227{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s281{min-width:480px;min-height:433px;height:433px}.ps229{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s282{min-width:480px;min-height:433px;height:433px}.ps231{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s283{min-width:480px;min-height:433px;height:433px}.ps233{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s284{min-width:480px;min-height:433px;height:433px}.ps235{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s285{min-width:480px;min-height:433px;height:433px}.ps237{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s286{min-width:480px;min-height:433px;height:433px}.ps239{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s287{min-width:480px;min-height:433px;height:433px}.ps241{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s288{min-width:480px;min-height:433px;height:433px}.ps243{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s289{min-width:480px;min-height:433px;height:433px}.ps245{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s290{min-width:480px;min-height:433px;height:433px}.ps247{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s291{min-width:480px;min-height:433px;height:433px}.ps249{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s292{min-width:480px;min-height:433px;height:433px}.ps251{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s293{min-width:480px;min-height:433px;height:433px}.ps254{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s294{min-width:480px;min-height:433px;height:433px}.ps256{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s295{min-width:480px;min-height:433px;height:433px}.ps258{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s296{min-width:480px;min-height:433px;height:433px}.ps261{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s297{min-width:480px;min-height:433px;height:433px}.s298{min-width:480px;min-height:433px;height:433px}.s299{min-width:480px;min-height:433px;height:433px}.ps266{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s300{min-width:480px;min-height:433px;height:433px}.ps268{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s301{min-width:480px;min-height:433px;height:433px}.ps270{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s302{min-width:480px;min-height:433px;height:433px}.ps272{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s303{min-width:480px;min-height:433px;height:433px}.ps274{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s304{min-width:480px;min-height:433px;height:433px}.ps276{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s305{min-width:480px;min-height:433px;height:433px}.ps278{margin-top:calc(50vh - 216px);margin-top:calc(var(--vh, 1vh) * 50 - 216px)}.s306{min-width:480px;min-height:433px;height:433px}.s307{min-width:480px;min-height:433px;height:433px}.s308{min-width:480px;min-height:433px;height:433px}.ps282{margin-top:calc(50vh - 201px);margin-top:calc(var(--vh, 1vh) * 50 - 201px)}.s309{min-width:480px;min-height:402px;height:402px}}@media (max-width:479px) {.ps194{margin-top:19px}.s251{min-width:320px;width:320px;min-height:102px}.ps195{margin-left:4px}.s252{min-width:309px;width:309px;min-height:102px}.s253{min-width:80px;width:80px;min-height:64px;height:64px}.i42{left:8px;width:64px;height:64px}.ps197{margin-left:-17px;margin-top:13px}.s254{min-width:131px;width:131px;min-height:39px;height:39px}.i44{width:131px;height:39px}.ps198{margin-left:22px;margin-top:78px}.s255{min-width:93px;width:93px;min-height:24px}.f69{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s256{width:93px;height:16px}.ps199{margin-left:216px;margin-top:-95px}.s257{min-width:47px;width:47px;min-height:41px}.c391{height:41px}.f70{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s258{height:25px;transform:scale(1.000) translateY(3px)}.ps200{margin-left:251px;margin-top:-100px}.s259{min-width:58px;width:58px;min-height:50px;height:50px}.i45{width:58px;height:21px;top:15px}.ps201{margin-top:-31px}.s260{min-width:320px;min-height:224px}.ps202{margin-top:-34px}.s261{min-width:320px;width:320px;min-height:188px}.ps203{margin-left:22px}.s262{min-width:298px;width:298px;min-height:188px}.ps204{margin-top:34px}.s263{min-width:276px;width:276px;min-height:154px}.c394{height:154px}.f71{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps205{margin-left:-25px}.s264{min-width:47px;width:47px;min-height:44px}.c395{height:44px}.f72{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s265{height:22px;transform:scale(1.111) translateY(2px)}.f73{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps206{margin-top:11px}.s266{min-width:320px;width:320px;min-height:4173px}.ps207{margin-left:23px}.s267{min-width:268px;width:268px;min-height:58px}.f74{font-size:14px;font-size:calc(14px * var(--f));line-height:1.215;padding-top:21px;padding-bottom:20px}.s268{width:268px;height:17px}.ps208{margin-left:23px;margin-top:10px}.s269{min-width:272px;width:272px;min-height:4027px}.c397{height:4027px}.f75{font-size:14px;font-size:calc(14px * var(--f));line-height:1.430}.f76{font-size:16px;font-size:calc(16px * var(--f));line-height:1.688}.f77{font-size:14px;font-size:calc(14px * var(--f));line-height:1.430}.p15{padding-bottom:10px}.f78{font-size:17px;font-size:calc(17px * var(--f));line-height:1.354}.f79{font-size:17px;font-size:calc(17px * var(--f));line-height:1.648}.f80{font-size:14px;font-size:calc(14px * var(--f));line-height:1.430}.f81{font-size:14px;font-size:calc(14px * var(--f));line-height:1.430}.s270{min-width:320px;min-height:132px}.ps210{margin-top:5px}.s271{min-width:320px;width:320px;min-height:111px}.ps211{margin-left:11px}.s272{min-width:299px;width:299px;min-height:91px}.c399{height:91px}.f82{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f83{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps212{margin-left:91px}.s273{min-width:66px;width:66px;min-height:20px}.f84{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s274{width:66px;height:12px}.ps213{margin-left:6px}.f85{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps215{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s275{min-width:320px;min-height:289px;height:289px}.ps217{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s276{min-width:320px;min-height:289px;height:289px}.ps219{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s277{min-width:320px;min-height:289px;height:289px}.ps221{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s278{min-width:320px;min-height:289px;height:289px}.ps223{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s279{min-width:320px;min-height:289px;height:289px}.ps225{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s280{min-width:320px;min-height:289px;height:289px}.ps227{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s281{min-width:320px;min-height:289px;height:289px}.ps229{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s282{min-width:320px;min-height:289px;height:289px}.ps231{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s283{min-width:320px;min-height:289px;height:289px}.ps233{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s284{min-width:320px;min-height:289px;height:289px}.ps235{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s285{min-width:320px;min-height:289px;height:289px}.ps237{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s286{min-width:320px;min-height:289px;height:289px}.ps239{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s287{min-width:320px;min-height:289px;height:289px}.ps241{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s288{min-width:320px;min-height:289px;height:289px}.ps243{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s289{min-width:320px;min-height:289px;height:289px}.ps245{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s290{min-width:320px;min-height:289px;height:289px}.ps247{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s291{min-width:320px;min-height:289px;height:289px}.ps249{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s292{min-width:320px;min-height:289px;height:289px}.ps251{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s293{min-width:320px;min-height:289px;height:289px}.ps254{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s294{min-width:320px;min-height:289px;height:289px}.ps256{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s295{min-width:320px;min-height:289px;height:289px}.ps258{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s296{min-width:320px;min-height:289px;height:289px}.ps261{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s297{min-width:320px;min-height:289px;height:289px}.s298{min-width:320px;min-height:289px;height:289px}.s299{min-width:320px;min-height:289px;height:289px}.ps266{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s300{min-width:320px;min-height:289px;height:289px}.ps268{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s301{min-width:320px;min-height:289px;height:289px}.ps270{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s302{min-width:320px;min-height:289px;height:289px}.ps272{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s303{min-width:320px;min-height:289px;height:289px}.ps274{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s304{min-width:320px;min-height:289px;height:289px}.ps276{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s305{min-width:320px;min-height:289px;height:289px}.ps278{margin-top:calc(50vh - 144px);margin-top:calc(var(--vh, 1vh) * 50 - 144px)}.s306{min-width:320px;min-height:289px;height:289px}.s307{min-width:320px;min-height:289px;height:289px}.s308{min-width:320px;min-height:289px;height:289px}.ps282{margin-top:calc(50vh - 134px);margin-top:calc(var(--vh, 1vh) * 50 - 134px)}.s309{min-width:320px;min-height:268px;height:268px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-640-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-640-51.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-960-126.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-127.php)}}@media (min-width:320px) {.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}.c393{background-image:url(images/cirp-csi-2022-480-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-480-51.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}.c393{background-image:url(images/cirp-csi-2022-960-128.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-129.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}.c393{background-image:url(images/cirp-csi-2022-1440-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1440-27.php)}}@media (min-width:480px) {.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}.c393{background-image:url(images/cirp-csi-2022-768-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-768-51.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}.c393{background-image:url(images/cirp-csi-2022-1536-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1536-51.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}.c393{background-image:url(images/cirp-csi-2022-2304-26.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2304-27.php)}}@media (min-width:768px) {.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}.c393{background-image:url(images/cirp-csi-2022-960-130.php)}.webp .c393{background-image:url(images/cirp-csi-2022-960-131.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}.c393{background-image:url(images/cirp-csi-2022-1920-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1920-51.php)}}@media (min-width:960px) {.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}.c393{background-image:url(images/cirp-csi-2022-1200-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1200-51.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}.c393{background-image:url(images/cirp-csi-2022-2400-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2400-51.php)}}@media (min-width:1200px) {.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}.c393{background-image:url(images/cirp-csi-2022-1415-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-1415-45.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}.c393{background-image:url(images/cirp-csi-2022-2830-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2830-45.php)}}@media (min-width:1600px) {.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}.c393{background-image:url(images/cirp-csi-2022-2000-50.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2000-51.php)}}@media (min-width:2000px) {.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}.c393{background-image:url(images/cirp-csi-2022-2131-44.php)}.webp .c393{background-image:url(images/cirp-csi-2022-2131-45.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/votes.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps194 v20 s251">
<div class="v21 ps195 s252 c387">
<div class="v21 ps196 s253 c388">
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a6"><picture class="i43"><source srcset="images/transparentks-64-51.php 1x, images/transparentks-128-51.php 2x, images/transparentks-192-77.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-50.php 1x, images/transparentks-128-50.php 2x, images/transparentks-192-76.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-51.php 1x, images/transparentks-192-79.php 2x, images/transparentks-288-27.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-50.php 1x, images/transparentks-192-78.php 2x, images/transparentks-288-26.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-45.php 1x, images/transparentks-110-45.php 2x, images/transparentks-165-27.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-44.php 1x, images/transparentks-110-44.php 2x, images/transparentks-165-26.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-45.php 1x, images/transparentks-138-45.php 2x, images/transparentks-207-27.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-44.php 1x, images/transparentks-138-44.php 2x, images/transparentks-207-26.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-103.php 1x, images/transparentks-178-103.php 2x, images/transparentks-267-53.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-102.php 1x, images/transparentks-178-102.php 2x, images/transparentks-267-52.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-145.php 1x, images/transparentks-284-95.php 2x, images/transparentks-426-53.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-144.php 1x, images/transparentks-284-94.php 2x, images/transparentks-426-52.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-94.php" title="knowledge &amp; skills logo" alt="ks logo" class="un292 i42"></picture></a>
</div>
<div class="v21 ps197 s254 c389">
<picture class="i43">
<source srcset="images/k-stransparent-131-43.php 1x, images/k-stransparent-262-43.php 2x, images/k-stransparent-393-27.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-42.php 1x, images/k-stransparent-262-42.php 2x, images/k-stransparent-393-26.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-43.php 1x, images/k-stransparent-392-43.php 2x, images/k-stransparent-588-27.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-42.php 1x, images/k-stransparent-392-42.php 2x, images/k-stransparent-588-26.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-49.php 1x, images/k-stransparent-340-49.php 2x, images/k-stransparent-510-27.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-48.php 1x, images/k-stransparent-340-48.php 2x, images/k-stransparent-510-26.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-51.php 1x, images/k-stransparent-424-101.php 2x, images/k-stransparent-636-27.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-50.php 1x, images/k-stransparent-424-100.php 2x, images/k-stransparent-636-26.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-51.php 1x, images/k-stransparent-530-51.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-50.php 1x, images/k-stransparent-530-50.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-103.php 1x, images/k-stransparent-848-51.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-102.php 1x, images/k-stransparent-848-50.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-50.php" alt="Knowledge an Skills shared by talented engineers" class="un293 i44">
</picture>
</div>
<div class="v21 ps198 s255 c390">
<a href="./logout-415c8e.php" class="f69 btn118 v22 s256">Logout</a>
</div>
<div class="v21 ps199 s257 c391">
<p class="p14 f70"><a href="cirpcsi2022.php"><x-svg class="s258"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v21 ps200 s259 c392">
<a href="cirpcsi2022.php" class="a6"><picture class="i43"><source srcset="images/csi-logo-58-43.php 1x, images/csi-logo-116-43.php 2x, images/csi-logo-174-69.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-42.php 1x, images/csi-logo-116-42.php 2x, images/csi-logo-174-68.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-43.php 1x, images/csi-logo-174-71.php 2x, images/csi-logo-261-27.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-42.php 1x, images/csi-logo-174-70.php 2x, images/csi-logo-261-26.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-49.php 1x, images/csi-logo-108-49.php 2x, images/csi-logo-162-27.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-48.php 1x, images/csi-logo-108-48.php 2x, images/csi-logo-162-26.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-49.php 1x, images/csi-logo-136-97.php 2x, images/csi-logo-204-27.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-48.php 1x, images/csi-logo-136-96.php 2x, images/csi-logo-204-26.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-49.php 1x, images/csi-logo-170-49.php 2x, images/csi-logo-255-27.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-48.php 1x, images/csi-logo-170-48.php 2x, images/csi-logo-255-26.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-99.php 1x, images/csi-logo-272-49.php 2x, images/csi-logo-408-27.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-98.php 1x, images/csi-logo-272-48.php 2x, images/csi-logo-408-26.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-48.php" alt="cirp csi 2022" class="un294 i45"></picture></a>
</div>
</div>
</div>
<div class="v21 ps201 s260 c393"></div>
<div class="ps202 v20 s261">
<div class="v21 ps203 s262 c387">
<div class="v21 ps204 s263 c394">
<p class="p14 f71">6th CIRP Conference on Surface Integrity </p>
<p class="p14 f71">Best Paper Award</p>
<p class="p14 f71">Best Young Scientist Award</p>
</div>
<div class="v21 ps205 s264 c395">
<p class="p14 f72"><a href="cirpcsi2022.php"><x-svg class="s265"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p14 f73"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps206 v20 s266">
<div class="v21 ps207 s267 c396">
<a href="myvote.php" class="f74 btn119 v22 s268">Proceed to vote</a>
</div>
<div class="v21 ps208 s269 c397">
<p class="p14 f75"><br></p>
<p class="p14 f76">List of the candidates</p>
<p class="p14 f77">(Click on the title to view the video and the paper)</p>
<p class="p15 f78"><br></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup3');return false" style="cursor:pointer;">01-Surface interactions of SiO2-nanofluids with 100Cr6-steel during machining</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup4');return false" style="cursor:pointer;">02-Investigation of the surface integrity when cryogenic milling of Ti-6Al-4V using a sub-zero metalworking fluid</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup5');return false" style="cursor:pointer;">03-Numerical Investigation of the EDM Induced Temperature Field in a Composite Ceramic</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup6');return false" style="cursor:pointer;">04-Influence of Surface Integrity and Coating on the High Cycle Fatigue Properties of 300M Steel from Self-Heating Tests under Cyclic Loads</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup7');return false" style="cursor:pointer;">05-A modified Johnson-Cook constitutive model for improved thermal softening prediction of machining simulations in C45 steel</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup8');return false" style="cursor:pointer;">06-Characterization of deformation-induced martensite by cryogenic cutting using eddy current testing</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup9');return false" style="cursor:pointer;">07-Evaluation of the influence of different milling parameters and tool wear on the rim zone of a 5-axis milled large gear</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup10');return false" style="cursor:pointer;">08-Surface defect detection and prediction in carbide cutting tools treated by lasers</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup11');return false" style="cursor:pointer;">09-Machinability of heat-treated maraging steel multilayered claddings in micromilling operations</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup12');return false" style="cursor:pointer;">10-Support Structure Impact in Laser-Based Powder Bed Fusion of AlSi10Mg</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup13');return false" style="cursor:pointer;">11-Effects of residual stresses on part distortion in machining of 7075-T6 aluminum alloy</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup14');return false" style="cursor:pointer;">12-Ultrasonic Vibration and Cryogenic assisted drilling of Aluminum-CFRP Laminates – An innovative approach</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup15');return false" style="cursor:pointer;">13-Effects of asymmetric passivation of cutting edge on microstructure evolution when cutting Inconel 718 alloy</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup16');return false" style="cursor:pointer;">14-Surface Integrity of Wire Electrochemical Machined Inconel 718</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup17');return false" style="cursor:pointer;">15-Main time-parallel mechanical surface treatment and surface texturing during machining</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup18');return false" style="cursor:pointer;">16-Effect of abrasive grains size on surface integrity during belt finishing of a 27MnCr5 carburized steel</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup19');return false" style="cursor:pointer;">17-Comparison of temperature and displacement measurements with load simulations for the determination of Process Signatures</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup20');return false" style="cursor:pointer;">18-Experimental validation of workpiece deformation simulations by means of rigorous boundary condition analysis</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup21');return false" style="cursor:pointer;">19-Influence of the cutting edge on the surface integrity in BTA deep hole drilling – part 1: Design of experiments, roughness and forces</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup22');return false" style="cursor:pointer;">20-Influence of the cutting edge on the surface integrity in BTA deep hole drilling – part 2: Residual stress, microstructure and microhardness</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup23');return false" style="cursor:pointer;">21-Advanced experimental setup for in-process measurement of thermo-mechanical load and tool wear when drive shaft turning</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup24');return false" style="cursor:pointer;">22-Residual Stress Maps Determination with global Digital Image Correlation</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup25');return false" style="cursor:pointer;">23-Influence of the reaming process on hole’s surface integrity and geometry</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup26');return false" style="cursor:pointer;">24-Experimental investigation on surface integrity in a face milling operation</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup27');return false" style="cursor:pointer;">25-Hybrid approach to evaluate surface integrity based on grinding power and Barkhausen noise</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup28');return false" style="cursor:pointer;">26-Force-controlled burnishing process for high surface integrity on additive manufactured parts</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup29');return false" style="cursor:pointer;">27-Numerical prediction of machining induced residual stresses when hard cutting AISI 4140</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup30');return false" style="cursor:pointer;">28-Quantification and surface analysis on blasting of additively manufactured components</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup31');return false" style="cursor:pointer;">29-Machine Learning based Approach for the Prediction Surface Integrity in Machining</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup32');return false" style="cursor:pointer;">30-Surface Integrity of Diamond Turned (100)Ge</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup33');return false" style="cursor:pointer;">31-Surface integrity quantification in machining of aluminum honeycomb structure</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup34');return false" style="cursor:pointer;">32-Microstructure, texture and mechanical properties with raw surface states of Ti-6Al-4V parts built by L-PBF</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup35');return false" style="cursor:pointer;">33-Effects of the Manufacturing Chain on the Surface Integrity when Machining Fir Tree Slots with Alternative Manufacturing Processes</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup36');return false" style="cursor:pointer;">34-Discharge energy based optimisation of sinking EDM of cemented carbides</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup37');return false" style="cursor:pointer;">35-Areal surface texture and tool wear analysis from machining during powder bed fusion</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup38');return false" style="cursor:pointer;">36-Effect of additive manufacturing process parameters on the titanium alloy microstructure, properties and surface integrity</a></p>
<p class="p16 f79"><a onclick="pop&&pop.openPopup('popup39');return false" style="cursor:pointer;">37-Ultrasonic assisted milling of a CoCrFeNi medium entropy alloy</a></p>
<p class="p17 f78"><br></p>
<p class="p14 f80"><br></p>
<p class="p17 f81"><br></p>
</div>
<div class="v5 ps177 s231 c201">
<a href="myvote.php" class="f65 btn41 v6 s232">Proceed to vote</a>
</div>
</div>
<div class="btf v5 ps178 s49 c202">
<div class="v5 ps38 s50 c203">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c204">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c31">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un550"><source data-srcset="images/transparentks-102-51.php 1x, images/transparentks-204-51.php 2x, images/transparentks-306-77.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-50.php 1x, images/transparentks-204-50.php 2x, images/transparentks-306-76.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-51.php 1x, images/transparentks-306-79.php 2x, images/transparentks-459-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-50.php 1x, images/transparentks-306-78.php 2x, images/transparentks-459-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-55.php 1x, images/transparentks-114-55.php 2x, images/transparentks-171-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-54.php 1x, images/transparentks-114-54.php 2x, images/transparentks-171-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-51.php 1x, images/transparentks-142-147.php 2x, images/transparentks-213-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-50.php 1x, images/transparentks-142-146.php 2x, images/transparentks-213-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-105.php 1x, images/transparentks-178-105.php 2x, images/transparentks-267-55.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-104.php 1x, images/transparentks-178-104.php 2x, images/transparentks-267-54.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-149.php 1x, images/transparentks-284-97.php 2x, images/transparentks-426-55.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-148.php 1x, images/transparentks-284-96.php 2x, images/transparentks-426-54.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-96.php" title="knowledge &amp; skills logo" alt="logo" class="un295 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c205">
<picture class="i8 un551">
<source data-srcset="images/k-stransparent-110-51.php 1x, images/k-stransparent-220-51.php 2x, images/k-stransparent-330-77.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-50.php 1x, images/k-stransparent-220-50.php 2x, images/k-stransparent-330-76.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-51.php 1x, images/k-stransparent-330-79.php 2x, images/k-stransparent-495-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-50.php 1x, images/k-stransparent-330-78.php 2x, images/k-stransparent-495-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-49.php 1x, images/k-stransparent-340-49.php 2x, images/k-stransparent-510-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-48.php 1x, images/k-stransparent-340-48.php 2x, images/k-stransparent-510-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-51.php 1x, images/k-stransparent-424-101.php 2x, images/k-stransparent-636-27.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-50.php 1x, images/k-stransparent-424-100.php 2x, images/k-stransparent-636-26.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-51.php 1x, images/k-stransparent-530-51.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-50.php 1x, images/k-stransparent-530-50.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-103.php 1x, images/k-stransparent-848-51.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-102.php 1x, images/k-stransparent-848-50.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-50.php" alt="Knowledge an Skills shared by talented engineers" class="un296 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c206">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c207"></div>
<div class="v5 ps44 s60 c208">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c209"></div>
<div class="v5 ps46 s64 c210">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c211"></div>
<div class="v5 ps48 s67 c132">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z'/></svg></x-svg></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps49 s68 c212">
<p class="p3 f13">Follow us on social media and join our community on <span class="f14"><a href="https://www.linkedin.com/company/knowledge-and-skills-sas/" target="_blank" rel="noopener">LinkedIn</a></span>, <span class="f14"><a href="https://www.facebook.com/knowledgeandskillseu" target="_blank" rel="noopener">Facebook</a></span> and <span class="f14"><a href="https://twitter.com/knowledgeandsk">Twitter</a></span></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps38 s69 c213">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c214">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v23 ps209 s270 c398">
<div class="ps210 v20 s271">
<div class="v21 ps211 s272 c399">
<p class="p17 f82">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f83"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v21 ps212 s273 c400">
<a href="javascript:void(0)" class="denyConsent f84 btn120 v22 s274">Refuse</a>
</div>
<div class="v21 ps213 s273 c400">
<a href="javascript:void(0)" class="allowConsent f85 btn121 v22 s274">OK</a>
</div>
</div>
</div>
<div id="popup39" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps214">
<div onclick="event.stopPropagation()" class="popup v24 ps215 s275 c401">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c215">
<div class="player un297 pl3">
<video preload="metadata" poster="images/poster-3592-10.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-1267.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c216">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c217">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c218">
<a onclick="pop&&pop.closePopup('popup39');return false" style="cursor:pointer;" class="f67 btn42 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c219">
<a onclick="pop.openClosePopup('popup39')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006412/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGEaCXVzLWVhc3QtMSJIMEYCIQDiQ0qsplc6aoElhPpkDL2%2FtZ1YxMl%2BsmE4chr06zC1%2BwIhAJL1v3WKeo9zliNbOmeLfCMkPcp%2BYi2eQbBeKZXSv4xKKtIECFkQBBoMMDU5MDAzNTQ2ODY1IgxnnKbXycAYycA6YzAqrwSrBiFwPVgayt%2BF9HFBwwWQ%2BwgPPhrIoWTQ0pEwECNFMiwFPiA49CCYYVkTbAXlfSeCMkZ983W3vFF%2FLYe4tJVn7hktbkj5HKoLIluC2P4NaSclDd1LoFUgaklcpZxzAtV%2B811iag8LLhrwi33dpAc4zyo8%2BrCjUiRfW%2BynM%2FbivDPj5WkZiJ9%2BZ8e6H0pgQnMN9Ztx9QSzBEfUEUaUesN7KFg5WvFqOagTHM6ZxIaIDeWjxvkusdC%2B%2B4LfYVa7EpiPGS%2BfmyPz%2FPOa8NZtA5qbxFJYHYkcuZO7plhp1aDKj3VvBK2%2BcgfusDzQ2Ztc8FzBwwGYkmp8I6fDAeIHD%2BOtRLUmJZaYzgTUpQDwvksXcbDmZHkZ0FsPG0TP%2FrMkMGAt8Pm3tkrLessTfGB96pc7aKVj6w%2BHyaUH%2FudCm0vpvxEOxE5PZNp%2Bc5lGbesMPoGIO1b3PVcs%2BPImZCEZ2sQsxZpGyKqSxJIdVrQSw1%2FoDei3mR%2BOqyvReiIxibHgPI0DSgInzs7VmJzqrS2BLYS4l0RfsoW2LkC2%2FZ4miGKL6j%2BTUzIdiPbI9Lqa1RGhlLwRmXmtv6pTLkXhiTqinR31ulZNI9WGju03GZ1MxV%2B3LLJHMTpF0HX44l56Ne30wTL3S1zdr%2F2e9ZXtBXVesECKEqPszEVvArETGme30R3KEIg%2FkIzU2c59lGJLIYeDvxF0mXQ1YDKhmZpKHrhZimrskTVrKppWQW%2F2Rk4HRIZsMKji4ZQGOqgBrgwNE70gwIbU6VeJKi0mwBbnHfawBmTdZ%2Fe3JkKhOO%2BQIH0qRqFQiCk5i3btuanuVKhmnnI7GSAbQvJKrOlfC%2FpKR%2BcSrc%2B%2FTgQ51GogA5%2BOSD8UU4wCnUMhwfS4QiyiFu8pma6Zwj%2F8355Km0gp3gNEu0TdNL%2F3TKzM92QDRtgFAy4oQuHhClRw3b2BihWMvarPF65e71aK%2FkVGbBxwoZ%2BK52YjiIIb&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082940Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYTGPP74GE%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=4400e38a31c4648fa9cc555163b7f7a9e616db507a09c6fe0b8c956173f2ee8d&hash=febcf4a2a85a169d6570aa19dc4dbbe6253185d9ec744864f4ac9b31a249047c&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006412&tid=spdf-bf15e86f-1d40-4e4b-aec1-90bd50a60a33&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0100515f560600&rr=714ed295ecd2998c" target="_blank" rel="noopener" class="f68 btn43 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup38" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps216">
<div onclick="event.stopPropagation()" class="popup v24 ps217 s276 c402">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c220">
<div class="player un298 pl4">
<video preload="metadata" poster="images/poster-3592-11.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-676.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c221">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c222">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c223">
<a onclick="pop&&pop.closePopup('popup38');return false" style="cursor:pointer;" class="f67 btn44 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c224">
<a onclick="pop.openClosePopup('popup38')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006229/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGEaCXVzLWVhc3QtMSJIMEYCIQDiQ0qsplc6aoElhPpkDL2%2FtZ1YxMl%2BsmE4chr06zC1%2BwIhAJL1v3WKeo9zliNbOmeLfCMkPcp%2BYi2eQbBeKZXSv4xKKtIECFkQBBoMMDU5MDAzNTQ2ODY1IgxnnKbXycAYycA6YzAqrwSrBiFwPVgayt%2BF9HFBwwWQ%2BwgPPhrIoWTQ0pEwECNFMiwFPiA49CCYYVkTbAXlfSeCMkZ983W3vFF%2FLYe4tJVn7hktbkj5HKoLIluC2P4NaSclDd1LoFUgaklcpZxzAtV%2B811iag8LLhrwi33dpAc4zyo8%2BrCjUiRfW%2BynM%2FbivDPj5WkZiJ9%2BZ8e6H0pgQnMN9Ztx9QSzBEfUEUaUesN7KFg5WvFqOagTHM6ZxIaIDeWjxvkusdC%2B%2B4LfYVa7EpiPGS%2BfmyPz%2FPOa8NZtA5qbxFJYHYkcuZO7plhp1aDKj3VvBK2%2BcgfusDzQ2Ztc8FzBwwGYkmp8I6fDAeIHD%2BOtRLUmJZaYzgTUpQDwvksXcbDmZHkZ0FsPG0TP%2FrMkMGAt8Pm3tkrLessTfGB96pc7aKVj6w%2BHyaUH%2FudCm0vpvxEOxE5PZNp%2Bc5lGbesMPoGIO1b3PVcs%2BPImZCEZ2sQsxZpGyKqSxJIdVrQSw1%2FoDei3mR%2BOqyvReiIxibHgPI0DSgInzs7VmJzqrS2BLYS4l0RfsoW2LkC2%2FZ4miGKL6j%2BTUzIdiPbI9Lqa1RGhlLwRmXmtv6pTLkXhiTqinR31ulZNI9WGju03GZ1MxV%2B3LLJHMTpF0HX44l56Ne30wTL3S1zdr%2F2e9ZXtBXVesECKEqPszEVvArETGme30R3KEIg%2FkIzU2c59lGJLIYeDvxF0mXQ1YDKhmZpKHrhZimrskTVrKppWQW%2F2Rk4HRIZsMKji4ZQGOqgBrgwNE70gwIbU6VeJKi0mwBbnHfawBmTdZ%2Fe3JkKhOO%2BQIH0qRqFQiCk5i3btuanuVKhmnnI7GSAbQvJKrOlfC%2FpKR%2BcSrc%2B%2FTgQ51GogA5%2BOSD8UU4wCnUMhwfS4QiyiFu8pma6Zwj%2F8355Km0gp3gNEu0TdNL%2F3TKzM92QDRtgFAy4oQuHhClRw3b2BihWMvarPF65e71aK%2FkVGbBxwoZ%2BK52YjiIIb&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082848Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYTGPP74GE%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=e0fc649e39c0c87168106f48289a5166f04edb298773e5283c50d0b0c7d1550e&hash=b1d21b5df89f6f75d4d3a752c8559d4cf6ab3eab5cf70858c2b88c0e00d682f4&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006229&tid=spdf-b5e14e95-5f3f-4e72-9f5d-0ff222b3d35c&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01005253535201&rr=714ed1501bb6998c" target="_blank" rel="noopener" class="f68 btn45 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup37" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps218">
<div onclick="event.stopPropagation()" class="popup v24 ps219 s277 c403">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c225">
<div class="player un299 pl5">
<video preload="metadata" poster="images/poster-3592-12.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S8-674.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c226">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c227">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c228">
<a onclick="pop&&pop.closePopup('popup37');return false" style="cursor:pointer;" class="f67 btn46 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c229">
<a onclick="pop.openClosePopup('popup37')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006217/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082741Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=5032a9edee4b5c025c42be21b9ba8f2c0cf0191fcbbd01742285ba5223279526&hash=2769bac393f96e05b7156292eb93ed6fd5a6cf5cf4070184ce994346958c322b&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006217&tid=spdf-b72277d6-b55e-457c-8e01-e3cdbd2c875a&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070507070505&rr=714ecfadff7f998c" target="_blank" rel="noopener" class="f68 btn47 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup36" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps220">
<div onclick="event.stopPropagation()" class="popup v24 ps221 s278 c404">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c230">
<div class="player un300 pl6">
<video preload="metadata" poster="images/poster-3592-13.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-671.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c231">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c232">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c233">
<a onclick="pop&&pop.closePopup('popup36');return false" style="cursor:pointer;" class="f67 btn48 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c234">
<a onclick="pop.openClosePopup('popup36')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006187/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIQCvxx8rfT9UeGmaPaXmyOKm2gxzAUtENhe8q7Lr%2Bgrh5QIgK7DjTDpI2YadbbscZkPWdTmGYWZB27CSDIh4MkYYC0Eq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDHvC6rd6HVSQH1rgWSqvBKN0KD6ZBzi4rXAHLMWV1qVQxvYPIFQrWpZkdij2Sk7%2FxmejXJDuFyonmQ9NutNZK4IPxI%2F0JLMEAspFbAilXBuwuHqRCjztq%2Bkrf53PM5H0YfRBbJqJePGvqN8ZHnB1cgS5CqBeTBjW%2FPH6fnLs4Ktzakk3Jc9DfzkqJtv4dLxXwmu7tx34JDy%2FDpPZj3oqWYAyTFqBQQmdnV5bJKxYTuD37l%2Ba4k%2BbLXxN6Yuly%2FhX8HOrEH%2BF8In7pSYpxH4ggQPRr6uPnnO83Rm80bFOvUAYvs1%2BO8yevU%2B%2BvoPrCzBytlplKAFY%2BF9bKjwl%2BhFcjHPzlmjHgFiy6AT8LWLp8MxcuuKZGBN92985KqXPz4NtsvMO1g%2B%2FNJm31FpjDA8l08fBeI5y5KYLKd2ZM9O0M%2BcUT71DTXabwZEb190iDDPukAvueCblOHKOMLwy0CoP%2FSLrFSLJM9RH2%2B0rLIUvCy6kTZga%2FCXVOZmAwv6VWpX3muK1vqUzN5467%2Be1JezslB8gywgW1frxW42JOAHd35mEOJxLwco3y1MW8FUBrkMIT5pRfB8aeBzD7R8URKUg3A0HswgHYUQaOO6c1qUaXVmfTqnRDMT%2BojyWRhJbSwNfO25o%2FMRZdIqLXjen7GJZLCEq%2Bv21FNeqPsS6LgUYdXgD93uoiPdLjyX6RZtyW%2F6XEe2%2FVP0JRMFKrW5F5Zn5aK6UsHiq5d6nWUj5yQXYX0sdwUPFRWPW8KwMQcSB8YIw%2FNPhlAY6qQFhqbkn6veZdqooeZdSaWu3Rye%2Fu0JhpKTP3fx6w5uP%2F71XOSsBlbgfJFcala7IPhXmnMrUA9aZs5w2vIRdx1JoGvaHztv1LAlcmY9qfmZCHw5tAs86MO2D%2FIV3iCWH7X3HbyCTzyKXLJxwGt6n9%2BZBx2hjV4uaRY0cdu4%2FPTeLCium6uyGDhHCLhmvp3J92vIauWHUXfTzlrJa1jhwXIenOSROC2g%2FMIjb&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082715Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYUY2NQSUN%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=d2481a5646b2da43208852d25d19c2f8619ef4335abff3f6a512c47fbd6070c1&hash=4c83b1f8925a1c49c09e5405cd7dc11dec59732f63b6c770cd6abf2c1221b01f&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006187&tid=spdf-cd33d631-6830-4d0d-b9dd-6d5fdb6205dc&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070556070705&rr=714ecf0ddf9f998c" target="_blank" rel="noopener" class="f68 btn49 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup35" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps222">
<div onclick="event.stopPropagation()" class="popup v24 ps223 s279 c405">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c235">
<div class="player un301 pl7">
<video preload="metadata" poster="images/poster-3592-14.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-668.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c236">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c237">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c238">
<a onclick="pop&&pop.closePopup('popup35');return false" style="cursor:pointer;" class="f67 btn50 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c239">
<a onclick="pop.openClosePopup('popup35')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006175/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082643Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=0f3c928f6ecb346fd1ca705aa392f81c7dd8d9630ebe51eecbbb17e9e5c4fed4&hash=0932dc04b767aa85ccde726a9bb8bd3431d8cdc7201a00a6fe7ec4366f5f00b6&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006175&tid=spdf-5f22ead5-f1bc-4f19-90de-9aefb32b6942&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070652500707&rr=714ece43dd6f998c" target="_blank" rel="noopener" class="f68 btn51 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup34" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps224">
<div onclick="event.stopPropagation()" class="popup v24 ps225 s280 c406">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c240">
<div class="player un302 pl8">
<video preload="metadata" poster="images/poster-3592-15.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S15-636.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c241">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c242">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c243">
<a onclick="pop&&pop.closePopup('popup34');return false" style="cursor:pointer;" class="f67 btn52 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c244">
<a onclick="pop.openClosePopup('popup34')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006059/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082610Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=04b26640cc8e362ec698d1e2e78026ad52a7c06ee6146a407cb79a599b368eab&hash=d2e953f9ad1af30cb426402e3d5f204993469ed341f7c4682f8f70d2eb2115bd&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006059&tid=spdf-fd741bb3-d1c8-44b6-8ac5-acaefb1d5a43&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070751565506&rr=714ecd756edc998c" target="_blank" rel="noopener" class="f68 btn53 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup33" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps226">
<div onclick="event.stopPropagation()" class="popup v24 ps227 s281 c407">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c245">
<div class="player un303 pl9">
<video preload="metadata" poster class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S16-635.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c246">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c247">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c248">
<a onclick="pop&&pop.closePopup('popup33');return false" style="cursor:pointer;" class="f67 btn54 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c249">
<a onclick="pop.openClosePopup('popup33')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006047/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGEaCXVzLWVhc3QtMSJIMEYCIQDiQ0qsplc6aoElhPpkDL2%2FtZ1YxMl%2BsmE4chr06zC1%2BwIhAJL1v3WKeo9zliNbOmeLfCMkPcp%2BYi2eQbBeKZXSv4xKKtIECFkQBBoMMDU5MDAzNTQ2ODY1IgxnnKbXycAYycA6YzAqrwSrBiFwPVgayt%2BF9HFBwwWQ%2BwgPPhrIoWTQ0pEwECNFMiwFPiA49CCYYVkTbAXlfSeCMkZ983W3vFF%2FLYe4tJVn7hktbkj5HKoLIluC2P4NaSclDd1LoFUgaklcpZxzAtV%2B811iag8LLhrwi33dpAc4zyo8%2BrCjUiRfW%2BynM%2FbivDPj5WkZiJ9%2BZ8e6H0pgQnMN9Ztx9QSzBEfUEUaUesN7KFg5WvFqOagTHM6ZxIaIDeWjxvkusdC%2B%2B4LfYVa7EpiPGS%2BfmyPz%2FPOa8NZtA5qbxFJYHYkcuZO7plhp1aDKj3VvBK2%2BcgfusDzQ2Ztc8FzBwwGYkmp8I6fDAeIHD%2BOtRLUmJZaYzgTUpQDwvksXcbDmZHkZ0FsPG0TP%2FrMkMGAt8Pm3tkrLessTfGB96pc7aKVj6w%2BHyaUH%2FudCm0vpvxEOxE5PZNp%2Bc5lGbesMPoGIO1b3PVcs%2BPImZCEZ2sQsxZpGyKqSxJIdVrQSw1%2FoDei3mR%2BOqyvReiIxibHgPI0DSgInzs7VmJzqrS2BLYS4l0RfsoW2LkC2%2FZ4miGKL6j%2BTUzIdiPbI9Lqa1RGhlLwRmXmtv6pTLkXhiTqinR31ulZNI9WGju03GZ1MxV%2B3LLJHMTpF0HX44l56Ne30wTL3S1zdr%2F2e9ZXtBXVesECKEqPszEVvArETGme30R3KEIg%2FkIzU2c59lGJLIYeDvxF0mXQ1YDKhmZpKHrhZimrskTVrKppWQW%2F2Rk4HRIZsMKji4ZQGOqgBrgwNE70gwIbU6VeJKi0mwBbnHfawBmTdZ%2Fe3JkKhOO%2BQIH0qRqFQiCk5i3btuanuVKhmnnI7GSAbQvJKrOlfC%2FpKR%2BcSrc%2B%2FTgQ51GogA5%2BOSD8UU4wCnUMhwfS4QiyiFu8pma6Zwj%2F8355Km0gp3gNEu0TdNL%2F3TKzM92QDRtgFAy4oQuHhClRw3b2BihWMvarPF65e71aK%2FkVGbBxwoZ%2BK52YjiIIb&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082537Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYTGPP74GE%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=58eb0c327ed7f801599c664ec8600ef16df97de32c0b90b073f21f5c407a66af&hash=7aeb644786872f0e560b1395612d6c94d8c8210cbdd8b42f92074b6c6f685eb3&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006047&tid=spdf-da43f84c-533f-47e6-ba58-5c01289be416&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070007025100&rr=714eccaa2c75998c" target="_blank" rel="noopener" class="f68 btn55 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup32" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps228">
<div onclick="event.stopPropagation()" class="popup v24 ps229 s282 c408">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c250">
<div class="player un304 pl10">
<video preload="metadata" poster="images/poster-3592-16.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-588.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c251">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c252">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c253">
<a onclick="pop&&pop.closePopup('popup32');return false" style="cursor:pointer;" class="f67 btn56 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c254">
<a onclick="pop.openClosePopup('popup32')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005935/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082452Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=8e1dc65b0b4466858151ce57974246f342d4fc881f22b29e33ec48012aeec278&hash=41555e4a6aa763ebb1d3f7d12acfb9c3a73e68d64d45c9f6861552530499df27&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005935&tid=spdf-f48f427e-c7d0-417e-877a-108ff1e87c8b&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0107015f535605&rr=714ecb905fc8998c" target="_blank" rel="noopener" class="f68 btn57 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup31" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps230">
<div onclick="event.stopPropagation()" class="popup v24 ps231 s283 c409">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c255">
<div class="player un305 pl11">
<video preload="metadata" poster="images/poster-3592-17.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S26-583.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c256">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c257">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c258">
<a onclick="pop&&pop.closePopup('popup31');return false" style="cursor:pointer;" class="f67 btn58 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c259">
<a onclick="pop.openClosePopup('popup31')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005881/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082426Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=c97d6292aeeb35c52b465fe0c67a5fb78ebd0dbd20b531e233f5dc75a37b1a69&hash=9c6d8a49a552cbdc31547b5f5d38d9de4cb5258df7ef1708a2afb2158c0bf116&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005881&tid=spdf-1cdfdbca-357b-4cf0-8579-01e484dabc5d&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01070203015302&rr=714ecaeb0aad998c" target="_blank" rel="noopener" class="f68 btn59 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup30" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps232">
<div onclick="event.stopPropagation()" class="popup v24 ps233 s284 c410">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c260">
<div class="player un306 pl12">
<video preload="metadata" poster class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-572.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c261">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c262">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c263">
<a onclick="pop&&pop.closePopup('popup30');return false" style="cursor:pointer;" class="f67 btn60 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c264">
<a onclick="pop.openClosePopup('popup30')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005819/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082258Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=beeed3acf21fbcd2d3a5e314e5400d5b067914c4faf4dd3008de52f8c80c39bc&hash=723c0071b8016a5dc4cacbba0fdd66697d0544e1feae8c9fc983f780a2100b99&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005819&tid=spdf-668eb55f-fb7f-44bc-b981-a29960589c72&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075b05545402&rr=714ec8c77a1b998c" target="_blank" rel="noopener" class="f68 btn61 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup29" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps234">
<div onclick="event.stopPropagation()" class="popup v24 ps235 s285 c411">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c265">
<div class="player un307 pl13">
<video preload="metadata" poster="images/poster-3592-18.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S1-570.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c266">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c267">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c268">
<a onclick="pop&&pop.closePopup('popup29');return false" style="cursor:pointer;" class="f67 btn62 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c269">
<a onclick="pop.openClosePopup('popup29')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005807/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEtr1jpgEcBtWxvXN%2Fc9mFnhQNHhexavypX50zeYSmD%2BAiBos8GTmhe27hvS5OIJChVpqDkbG9n8twaF7noaZOJO3irSBAhYEAQaDDA1OTAwMzU0Njg2NSIMVINKfqwnKtxrSWzhKq8Ec%2F73Ngyaiz78jAL7X8GuqBM2i7%2FuYpDhqBvCBK%2BjkIdjETfGzwQxp3CXn4tLJziof980IumTTPP%2FvBKbXMhB0w1yDz%2BcbN4A9JqXTt7%2FlCkNNg7WZsitpDArwRFqIgVQaHL4WcmK3B9l1rqPJs5U8O4pjuLiLQ2rLIF0SrxF87AX6RKQps9LHQajWUdjuMlsP6GNqvjDglKXxRG3wiUHoHvuFAyrOuJbLq3QDX%2Ba2JKXBqKkJ5DHo3vaKTARTK8mfe3zmC5njcb68IqjNgwkUHyP%2Fg6j3SFQWR%2FCmBWpwUSLYOXWMvQ1mcKtYLUjpv6LcbfjxXAfSruGbrwqfiS74bvDtUKnp%2BfgGsT078rmUOKaGsj0VgZpBIqGbu1j3MT%2BNMmLQpri%2BeKm56f%2FIR0bks%2F34B6kt8OIXs07Ok6JJ5xQyQcwFxEZIuKBiyI93cTRdd9uU4gbqnEmAYk%2B%2FnA8z8RWQDh%2FgVsjSFZ8DUv2hff4CsP5YXXQ2GLaLeGAAUKYo5d5eE5V8GeMf3%2F0IZhi1OJSc10bGd2fyUym3H7pO%2B9PSHxQOgr8JHjGD%2BEtrhp2Gh968VNU2ZNfi%2Fb8RWqpoA3WqYv4Kr6mxRu2uZNH41FBgABfN6%2BuE3KKmHM8zT6BbyhmL%2FmxzihJGhXhoPAidSSpi3Rwx7zwNSkDPiRHrloSaCilvcSUoJX9DadJQt9igml%2FQBCa%2BdYGfcxinQrqO5sPXqB%2Bb46jiQI9BIrMOzDZueGUBjqqAbk72R%2BO7ZI2Kh5OiXbFUbdLTHWIjVzIjqVCL0PTwL0i0WTs9R%2F2sskYuI5nxXhuB%2FLSVPj2Uz2pXRk%2B%2BrX5MKqf%2FNezzBI3uHnafMrHaOf3TP6Fo0%2Fu%2FBlthejD%2FS4ucBGVYeab5c%2BFCzIBqgRmitz5CNw%2By8%2BJ%2BzA4PP3ITETNzBnEmHictp01x7hWW4jDJKJyrZvIaZJ4Xp%2BOv2Y4P7bk%2FQhpB%2FH9efgi&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082208Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYQKNJJHEI%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=638c4d34d5cd4bc499e69e256c0f3e3e9f8fdbe3c8d5b2e256e23cc37b9690c0&hash=0c43738b2c1e0ff9eab36779d4cd84234cedddd1450e7427a00d3be9b769d8b2&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005807&tid=spdf-9017b5b0-93d3-492c-8025-e1b7d1854948&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0107545e07535b&rr=714ec78d0817998c" target="_blank" rel="noopener" class="f68 btn63 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup28" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps236">
<div onclick="event.stopPropagation()" class="popup v24 ps237 s286 c412">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c270">
<div class="player un308 pl14">
<video preload="metadata" poster class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-559.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c271">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c272">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c273">
<a onclick="pop&&pop.closePopup('popup28');return false" style="cursor:pointer;" class="f67 btn64 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c274">
<a onclick="pop.openClosePopup('popup28')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005728/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJIMEYCIQCC%2BzR8Ml9%2BPABuyeb25zKaA8MGA7pwDvnpJ%2BmRzDdA6QIhAPKoDO4E8I6T6sC4n9LWVp8XYDHgOA%2FtqpxVcXzkP9YWKtIECFgQBBoMMDU5MDAzNTQ2ODY1IgykY94GtPNnLRv04sAqrwTgSxysD6QlGkhUzQdOJYB76jSIKg8Ijxi5M1XgvHtFpeIgDencJfxLIt0KEkQ%2FAlYstNHEfchSauYLGKt6A%2FjoFzCaryrgto5kbi62DUb0KWItE26BNmB8nu4DYMS%2B5it0QVWQO%2FUZMVS40a2ZBDTtxUWG%2F%2BHakxUdNI5zOhB06dPYvHCFwqyjDL57%2FoToRT2%2BsgK91InM6r3SO0hqRK9cgxjnO%2BjoMxNPcoCRT3nEAHJfh7rx30laNVyRI02rXFrFYxahz1fO6HqlqYRL0pjyCYxInp3JHf%2FiIU2iW4IyTaItmcHd8eOWGSQ6ieSe5DRfsrgxk6zihbvd04tgN1ZWXh7NsrHWfIZH6K%2Fbj35sF0GpWJpXpdadtpyFxX1cM8GDHXgklIZozqxrAd92R2jfu0j%2F9Jeo7T%2BNRUFbMW9qy8E40acu%2FdqOZUUa3DYtgcA0R%2Fgf%2BeTAY0aY3DLmsvx58%2BVsOo%2BW0xZRTNyh%2FZbsggT2qDdqtxNRrGwC%2Fvqya7AHJvrAvJVWXR%2F5BDJF0Pl1eR%2BY8iIkVZgSltDcIkr2oJqQQFaTA3IgGYhszofZBmwzvQI5n3Qtl9u%2B%2FlXLOU3YH0KGTYoVRlAR%2BOozknisBvzo9bS4%2BWUAH53%2FE09OsPmKZsVAbEkuJQwmgJywzy8BEhINQcwmRQaI8XPjNiZVxxZikcMZB9Zr5ccbh7LzbWCQXLoxgYqbyGgQIbBn8uN1Y0szkqD96T07C1eU4hofMJbG4ZQGOqgBS2hQ7fSvEdDcprt3hlZWmhlm58bScYG5%2F6WY%2BjrnVbacOKUoy5fM8usq5sdBWh2Frl0RFTcZ%2B4%2B9Kw7zzVzQU9t8OwQX3%2FivI19ZH%2BceFPdXK0%2Bl1qtMUmdUrzeKsRqP3Rv2CPBrwh0kot%2B0BJnOCtEYe3eJfzXgxWUx%2BX4obWtSOgHgFqFUx5e4N3q6O747wxChmgIhOV3rXudbkMPY2Tow2pxBjQrn&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082116Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYUEGQB4MJ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=bc6631f599ec623ee559e984ad728f64bf08fc4201bdec089da07931a7a935b5&hash=bbe0bf9076878809e3a1c3c0d036268fb5a3bd1dbbd272f43514dfd5e6d40d3a&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005728&tid=spdf-569c554a-adf2-4466-8134-fe98ce540017&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075552540505&rr=714ec647ff10998c" target="_blank" rel="noopener" class="f68 btn65 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup27" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps238">
<div onclick="event.stopPropagation()" class="popup v24 ps239 s287 c413">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c275">
<div class="player un309 pl15">
<video preload="metadata" poster="images/poster-3592-19.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S31-486.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c276">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c277">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c278">
<a onclick="pop&&pop.closePopup('popup27');return false" style="cursor:pointer;" class="f67 btn66 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c279">
<a onclick="pop.openClosePopup('popup27')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005649/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T082023Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=86732207a98b536aea63263e5b3c3c8ee4041df1ebcbb95a584d889f7b253c10&hash=67f9fcc48a032cf23136af771a32aa45c0e07a6ff89386f5e66f1d78ccb081c6&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005649&tid=spdf-0534cde0-4fb7-4c1f-8895-17703ba1fb7a&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075700075406&rr=714ec4fd7e6a998c" target="_blank" rel="noopener" class="f68 btn67 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup26" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps240">
<div onclick="event.stopPropagation()" class="popup v24 ps241 s288 c414">
<div class="ps38 v7 s233">
<div class="v5 ps179 s242 c45">
<div class="v5 ps180 s243 c280">
<div class="player un310 pl16">
<video preload="metadata" poster="images/poster-3592-37.php" class="videoinline vd4" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-485.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c281">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c282">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c283">
<a onclick="pop&&pop.closePopup('popup26');return false" style="cursor:pointer;" class="f67 btn68 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps184 s240 c284">
<a onclick="pop.openClosePopup('popup26')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005637/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081952Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=cd2497f5cd7940d0321aa4f4e1a4804a207b00afb2a01fae4e8492d99428eb59&hash=06c81e06e2be4f1a96e179e4c4b76ef031ed024da7d7966a305433fd569620d2&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005637&tid=spdf-41bb7c70-a743-4da4-a95f-79065af3700e&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0107575506525a&rr=714ec43e19e4998c" target="_blank" rel="noopener" class="f68 btn69 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup25" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps242">
<div onclick="event.stopPropagation()" class="popup v24 ps243 s289 c415">
<div class="ps38 v7 s233">
<div class="v5 ps179 s242 c45">
<div class="v5 ps180 s243 c285">
<div class="player un311 pl17">
<video preload="metadata" poster="images/poster-3592-20.php" class="videoinline vd4" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S22-481.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c286">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c287">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c288">
<a onclick="pop&&pop.closePopup('popup25');return false" style="cursor:pointer;" class="f67 btn70 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps184 s240 c289">
<a onclick="pop.openClosePopup('popup25')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005595/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081901Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=751c6c002c8e6b45830ea0caf05aa52688eebd745f352b1f63cd0a419ac9eaf3&hash=a06623e86b3fd8f7b8643e7fd47ae65d101091aea5f12ad813ef5cb1500040e0&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005595&tid=spdf-f22993f8-01a1-4d11-be5b-2110c58ef29e&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075100060500&rr=714ec2fefcbc998c" target="_blank" rel="noopener" class="f68 btn71 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup40" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps244">
<div onclick="event.stopPropagation()" class="popup v24 ps245 s290 c416">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c290">
<div class="player un312 pl18">
<video preload="metadata" poster="images/poster-3592-38.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S4-476.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c291">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c292">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c293">
<a onclick="pop&&pop.closePopup('popup40');return false" style="cursor:pointer;" class="f67 btn72 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c294">
<a onclick="pop.openClosePopup('popup40')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005583/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081827Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=309711446eb82bd9dbfb36c244ec611666bba47eca93fccadc2cf777691ebc99&hash=87885ad0703c7d7e022f3807402d1a0d9a0f836199f0c561a94a174906d2f242&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005583&tid=spdf-f8d5c9fd-2796-4761-98ad-3b246f3560d8&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075154550202&rr=714ec226aaec998c" target="_blank" rel="noopener" class="f68 btn73 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup24" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps246">
<div onclick="event.stopPropagation()" class="popup v24 ps247 s291 c417">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c295">
<div class="player un313 pl19">
<video preload="metadata" poster="images/poster-3592-43.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-463.mov" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c296">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c297">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c298">
<a onclick="pop&&pop.closePopup('popup24');return false" style="cursor:pointer;" class="f67 btn74 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c299">
<a onclick="pop.openClosePopup('popup24')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005480/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081746Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=467409a12f1d210cda28d56aa602925a4d89d0ef3d2840f15dd307edbd6ed15d&hash=8f6482be919ba4158bb8238582b0b3c028855f1b6317d5920eec023103e4cf8e&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005480&tid=spdf-142c2fce-2bf7-47f9-8c6a-6f842915ab6a&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01075254555707&rr=714ec1264dc3998c" target="_blank" rel="noopener" class="f68 btn75 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup23" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps248">
<div onclick="event.stopPropagation()" class="popup v24 ps249 s292 c418">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c300">
<div class="player un314 pl20">
<video preload="metadata" poster="images/poster-3592-22.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-452.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c301">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c302">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c303">
<a onclick="pop&&pop.closePopup('popup23');return false" style="cursor:pointer;" class="f67 btn76 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c304">
<a onclick="pop.openClosePopup('popup23')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005418/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081643Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=469cea2ef66aafbbdaf92ecbcae11d09210fbd8a5a6a9c5ae7385b72c6cd2286&hash=25e1b89673116c793ab003c63565e0b548190479b7b9899a6d20ec5dcb907e5c&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005418&tid=spdf-88c8a91c-81bc-4052-ab5d-bce15788a6cb&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106055f010100&rr=714ebf9bbc25998c" target="_blank" rel="noopener" class="f68 btn77 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup22" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps250">
<div onclick="event.stopPropagation()" class="popup v24 ps251 s293 c419">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c305">
<div class="player un315 pl21">
<video preload="metadata" poster="images/poster-3592-23.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-445.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c306">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c307">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c308">
<a onclick="pop&&pop.closePopup('popup22');return false" style="cursor:pointer;" class="f67 btn78 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c309">
<a onclick="pop.openClosePopup('popup22')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005364/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJIMEYCIQCC%2BzR8Ml9%2BPABuyeb25zKaA8MGA7pwDvnpJ%2BmRzDdA6QIhAPKoDO4E8I6T6sC4n9LWVp8XYDHgOA%2FtqpxVcXzkP9YWKtIECFgQBBoMMDU5MDAzNTQ2ODY1IgykY94GtPNnLRv04sAqrwTgSxysD6QlGkhUzQdOJYB76jSIKg8Ijxi5M1XgvHtFpeIgDencJfxLIt0KEkQ%2FAlYstNHEfchSauYLGKt6A%2FjoFzCaryrgto5kbi62DUb0KWItE26BNmB8nu4DYMS%2B5it0QVWQO%2FUZMVS40a2ZBDTtxUWG%2F%2BHakxUdNI5zOhB06dPYvHCFwqyjDL57%2FoToRT2%2BsgK91InM6r3SO0hqRK9cgxjnO%2BjoMxNPcoCRT3nEAHJfh7rx30laNVyRI02rXFrFYxahz1fO6HqlqYRL0pjyCYxInp3JHf%2FiIU2iW4IyTaItmcHd8eOWGSQ6ieSe5DRfsrgxk6zihbvd04tgN1ZWXh7NsrHWfIZH6K%2Fbj35sF0GpWJpXpdadtpyFxX1cM8GDHXgklIZozqxrAd92R2jfu0j%2F9Jeo7T%2BNRUFbMW9qy8E40acu%2FdqOZUUa3DYtgcA0R%2Fgf%2BeTAY0aY3DLmsvx58%2BVsOo%2BW0xZRTNyh%2FZbsggT2qDdqtxNRrGwC%2Fvqya7AHJvrAvJVWXR%2F5BDJF0Pl1eR%2BY8iIkVZgSltDcIkr2oJqQQFaTA3IgGYhszofZBmwzvQI5n3Qtl9u%2B%2FlXLOU3YH0KGTYoVRlAR%2BOozknisBvzo9bS4%2BWUAH53%2FE09OsPmKZsVAbEkuJQwmgJywzy8BEhINQcwmRQaI8XPjNiZVxxZikcMZB9Zr5ccbh7LzbWCQXLoxgYqbyGgQIbBn8uN1Y0szkqD96T07C1eU4hofMJbG4ZQGOqgBS2hQ7fSvEdDcprt3hlZWmhlm58bScYG5%2F6WY%2BjrnVbacOKUoy5fM8usq5sdBWh2Frl0RFTcZ%2B4%2B9Kw7zzVzQU9t8OwQX3%2FivI19ZH%2BceFPdXK0%2Bl1qtMUmdUrzeKsRqP3Rv2CPBrwh0kot%2B0BJnOCtEYe3eJfzXgxWUx%2BX4obWtSOgHgFqFUx5e4N3q6O747wxChmgIhOV3rXudbkMPY2Tow2pxBjQrn&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081606Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYUEGQB4MJ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=1a7d87569928c2195a6c903d3271f08f1a8793c774fd1af648d77c12632acb59&hash=bc853f47dfb7430c4b6aafef89641b33ece5a0a89e2c3e28853910902da228e7&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005364&tid=spdf-f54e4c04-6085-49f8-94b0-d70f3e60a625&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106060454015b&rr=714ebeb7b864998c" target="_blank" rel="noopener" class="f68 btn79 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup21" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps252">
<div onclick="event.stopPropagation()" class="popup v24 ps231 s283 c420">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c310">
<div class="player un316 pl22">
<video preload="metadata" poster="images/poster-3592-24.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-444.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c311">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c312">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c313">
<a onclick="pop&&pop.closePopup('popup21');return false" style="cursor:pointer;" class="f67 btn80 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c314">
<a onclick="pop.openClosePopup('popup21')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005352/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081513Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=ee1fc5f3485a644aacca823a140e4d391e59fa55d133138fa32723e5e076f9a4&hash=a48ae16d0c8f99ba99d988a3c1b3039d70f83893ae56c40e6c5a7c259d53d301&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005352&tid=spdf-306140d3-0603-4a95-80ba-1fd84be2c446&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01060750010100&rr=714ebd6bbc17998c" target="_blank" rel="noopener" class="f68 btn81 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup20" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps253">
<div onclick="event.stopPropagation()" class="popup v24 ps254 s294 c421">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c315">
<div class="player un317 pl23">
<video preload="metadata" poster="images/poster-3592-25.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S6-439.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c316">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c317">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c318">
<a onclick="pop&&pop.closePopup('popup20');return false" style="cursor:pointer;" class="f67 btn82 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c319">
<a onclick="pop.openClosePopup('popup20')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005303/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEtr1jpgEcBtWxvXN%2Fc9mFnhQNHhexavypX50zeYSmD%2BAiBos8GTmhe27hvS5OIJChVpqDkbG9n8twaF7noaZOJO3irSBAhYEAQaDDA1OTAwMzU0Njg2NSIMVINKfqwnKtxrSWzhKq8Ec%2F73Ngyaiz78jAL7X8GuqBM2i7%2FuYpDhqBvCBK%2BjkIdjETfGzwQxp3CXn4tLJziof980IumTTPP%2FvBKbXMhB0w1yDz%2BcbN4A9JqXTt7%2FlCkNNg7WZsitpDArwRFqIgVQaHL4WcmK3B9l1rqPJs5U8O4pjuLiLQ2rLIF0SrxF87AX6RKQps9LHQajWUdjuMlsP6GNqvjDglKXxRG3wiUHoHvuFAyrOuJbLq3QDX%2Ba2JKXBqKkJ5DHo3vaKTARTK8mfe3zmC5njcb68IqjNgwkUHyP%2Fg6j3SFQWR%2FCmBWpwUSLYOXWMvQ1mcKtYLUjpv6LcbfjxXAfSruGbrwqfiS74bvDtUKnp%2BfgGsT078rmUOKaGsj0VgZpBIqGbu1j3MT%2BNMmLQpri%2BeKm56f%2FIR0bks%2F34B6kt8OIXs07Ok6JJ5xQyQcwFxEZIuKBiyI93cTRdd9uU4gbqnEmAYk%2B%2FnA8z8RWQDh%2FgVsjSFZ8DUv2hff4CsP5YXXQ2GLaLeGAAUKYo5d5eE5V8GeMf3%2F0IZhi1OJSc10bGd2fyUym3H7pO%2B9PSHxQOgr8JHjGD%2BEtrhp2Gh968VNU2ZNfi%2Fb8RWqpoA3WqYv4Kr6mxRu2uZNH41FBgABfN6%2BuE3KKmHM8zT6BbyhmL%2FmxzihJGhXhoPAidSSpi3Rwx7zwNSkDPiRHrloSaCilvcSUoJX9DadJQt9igml%2FQBCa%2BdYGfcxinQrqO5sPXqB%2Bb46jiQI9BIrMOzDZueGUBjqqAbk72R%2BO7ZI2Kh5OiXbFUbdLTHWIjVzIjqVCL0PTwL0i0WTs9R%2F2sskYuI5nxXhuB%2FLSVPj2Uz2pXRk%2B%2BrX5MKqf%2FNezzBI3uHnafMrHaOf3TP6Fo0%2Fu%2FBlthejD%2FS4ucBGVYeab5c%2BFCzIBqgRmitz5CNw%2By8%2BJ%2BzA4PP3ITETNzBnEmHictp01x7hWW4jDJKJyrZvIaZJ4Xp%2BOv2Y4P7bk%2FQhpB%2FH9efgi&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081440Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYQKNJJHEI%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=00608bb9a8ed0aa3ff0b896c76fd2cb8795a2d3bcacb2a754ce39dd009230519&hash=365a29c7dc1b7b84d8b8735ad325a0f1ab7eff1231f48a327db4d7b3f3530cf7&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005303&tid=spdf-2de6f7fe-891e-4320-8c52-d2d97c3f2311&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106005f065206&rr=714ebc9e1e86998c" target="_blank" rel="noopener" class="f68 btn83 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup19" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps255">
<div onclick="event.stopPropagation()" class="popup v24 ps256 s295 c422">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c320">
<div class="player un318 pl24">
<video preload="metadata" poster="images/poster-3592-26.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-435.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c321">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c322">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c323">
<a onclick="pop&&pop.closePopup('popup19');return false" style="cursor:pointer;" class="f67 btn84 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c324">
<a onclick="pop.openClosePopup('popup19')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005285/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEtr1jpgEcBtWxvXN%2Fc9mFnhQNHhexavypX50zeYSmD%2BAiBos8GTmhe27hvS5OIJChVpqDkbG9n8twaF7noaZOJO3irSBAhYEAQaDDA1OTAwMzU0Njg2NSIMVINKfqwnKtxrSWzhKq8Ec%2F73Ngyaiz78jAL7X8GuqBM2i7%2FuYpDhqBvCBK%2BjkIdjETfGzwQxp3CXn4tLJziof980IumTTPP%2FvBKbXMhB0w1yDz%2BcbN4A9JqXTt7%2FlCkNNg7WZsitpDArwRFqIgVQaHL4WcmK3B9l1rqPJs5U8O4pjuLiLQ2rLIF0SrxF87AX6RKQps9LHQajWUdjuMlsP6GNqvjDglKXxRG3wiUHoHvuFAyrOuJbLq3QDX%2Ba2JKXBqKkJ5DHo3vaKTARTK8mfe3zmC5njcb68IqjNgwkUHyP%2Fg6j3SFQWR%2FCmBWpwUSLYOXWMvQ1mcKtYLUjpv6LcbfjxXAfSruGbrwqfiS74bvDtUKnp%2BfgGsT078rmUOKaGsj0VgZpBIqGbu1j3MT%2BNMmLQpri%2BeKm56f%2FIR0bks%2F34B6kt8OIXs07Ok6JJ5xQyQcwFxEZIuKBiyI93cTRdd9uU4gbqnEmAYk%2B%2FnA8z8RWQDh%2FgVsjSFZ8DUv2hff4CsP5YXXQ2GLaLeGAAUKYo5d5eE5V8GeMf3%2F0IZhi1OJSc10bGd2fyUym3H7pO%2B9PSHxQOgr8JHjGD%2BEtrhp2Gh968VNU2ZNfi%2Fb8RWqpoA3WqYv4Kr6mxRu2uZNH41FBgABfN6%2BuE3KKmHM8zT6BbyhmL%2FmxzihJGhXhoPAidSSpi3Rwx7zwNSkDPiRHrloSaCilvcSUoJX9DadJQt9igml%2FQBCa%2BdYGfcxinQrqO5sPXqB%2Bb46jiQI9BIrMOzDZueGUBjqqAbk72R%2BO7ZI2Kh5OiXbFUbdLTHWIjVzIjqVCL0PTwL0i0WTs9R%2F2sskYuI5nxXhuB%2FLSVPj2Uz2pXRk%2B%2BrX5MKqf%2FNezzBI3uHnafMrHaOf3TP6Fo0%2Fu%2FBlthejD%2FS4ucBGVYeab5c%2BFCzIBqgRmitz5CNw%2By8%2BJ%2BzA4PP3ITETNzBnEmHictp01x7hWW4jDJKJyrZvIaZJ4Xp%2BOv2Y4P7bk%2FQhpB%2FH9efgi&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081358Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYQKNJJHEI%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=48474c574f606ea406d9a4ed8133e9e422dffc9b3fbf644356eaf24713407460&hash=54397548f98c5f7d67bfc64363d50d1798337659bfdb80f5c0b6636d41ee50aa&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005285&tid=spdf-0a163f42-a22a-48b0-9d48-d3ce98d09f3d&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106015f025a5a&rr=714ebb9a99ce998c" target="_blank" rel="noopener" class="f68 btn85 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup18" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps257">
<div onclick="event.stopPropagation()" class="popup v24 ps258 s296 c423">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c325">
<div class="player un319 pl25">
<video preload="metadata" poster="images/poster-3592-27.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S24-434.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c326">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c327">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c328">
<a onclick="pop&&pop.closePopup('popup18');return false" style="cursor:pointer;" class="f67 btn86 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c329">
<a onclick="pop.openClosePopup('popup18')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005273/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081321Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=ed5e33f39db2cd43482237aa0aea1098998988fa015beba966139d1ae2c8e42e&hash=1cfe27db78d77ee75248f8ad735d52a1889ade0286a7747e7c1823bf5872f412&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005273&tid=spdf-fc2c69dc-3ca2-41f5-962a-b9d86595c74f&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01060207060507&rr=714ebaaefd47998c" target="_blank" rel="noopener" class="f68 btn87 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup17" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps259">
<div onclick="event.stopPropagation()" class="popup v24 ps256 s295 c424">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c330">
<div class="player un320 pl26">
<video preload="metadata" poster="images/poster-3592-28.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-429.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c331">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c332">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c333">
<a onclick="pop&&pop.closePopup('popup17');return false" style="cursor:pointer;" class="f67 btn88 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c334">
<a onclick="pop.openClosePopup('popup17')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005224/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081247Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=614e45f8d317f34bfb733bf51929a9c996a29342779bb839e778b0c4644d0caf&hash=44db7d7c7f61a38b88aaa75348f03de8aa07efd8ce25a1c3b0fac3f2254c4678&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005224&tid=spdf-5954bd4e-7fcc-46cf-b13a-cde8607a544f&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01065a0206545a&rr=714eb9de7966998c" target="_blank" rel="noopener" class="f68 btn89 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup16" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps260">
<div onclick="event.stopPropagation()" class="popup v24 ps261 s297 c425">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c335">
<div class="player un321 pl27">
<video preload="metadata" poster="images/poster-3592-39.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-408.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c336">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c337">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c338">
<a onclick="pop&&pop.closePopup('popup16');return false" style="cursor:pointer;" class="f67 btn90 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c339">
<a onclick="pop.openClosePopup('popup16')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005078/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081205Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=b9249c104317be36afcd0c79fd5cd940696cb652c31b4913f47b367cdda69e36&hash=6d52da98ef03abbf988a7ade74b43100c32283d2f2f908f3122d3249f4134891&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005078&tid=spdf-a1a75044-09f8-48c8-a4a4-80ba9b64a281&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01065b0255525b&rr=714eb8d61898998c" target="_blank" rel="noopener" class="f68 btn91 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup15" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps262">
<div onclick="event.stopPropagation()" class="popup v24 ps221 s298 c426">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c340">
<div class="player un322 pl28">
<video preload="metadata" poster="images/poster-3592-29.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-404.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c341">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c342">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c343">
<a onclick="pop&&pop.closePopup('popup15');return false" style="cursor:pointer;" class="f67 btn92 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c344">
<a onclick="pop.openClosePopup('popup15')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122005042/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJIMEYCIQCC%2BzR8Ml9%2BPABuyeb25zKaA8MGA7pwDvnpJ%2BmRzDdA6QIhAPKoDO4E8I6T6sC4n9LWVp8XYDHgOA%2FtqpxVcXzkP9YWKtIECFgQBBoMMDU5MDAzNTQ2ODY1IgykY94GtPNnLRv04sAqrwTgSxysD6QlGkhUzQdOJYB76jSIKg8Ijxi5M1XgvHtFpeIgDencJfxLIt0KEkQ%2FAlYstNHEfchSauYLGKt6A%2FjoFzCaryrgto5kbi62DUb0KWItE26BNmB8nu4DYMS%2B5it0QVWQO%2FUZMVS40a2ZBDTtxUWG%2F%2BHakxUdNI5zOhB06dPYvHCFwqyjDL57%2FoToRT2%2BsgK91InM6r3SO0hqRK9cgxjnO%2BjoMxNPcoCRT3nEAHJfh7rx30laNVyRI02rXFrFYxahz1fO6HqlqYRL0pjyCYxInp3JHf%2FiIU2iW4IyTaItmcHd8eOWGSQ6ieSe5DRfsrgxk6zihbvd04tgN1ZWXh7NsrHWfIZH6K%2Fbj35sF0GpWJpXpdadtpyFxX1cM8GDHXgklIZozqxrAd92R2jfu0j%2F9Jeo7T%2BNRUFbMW9qy8E40acu%2FdqOZUUa3DYtgcA0R%2Fgf%2BeTAY0aY3DLmsvx58%2BVsOo%2BW0xZRTNyh%2FZbsggT2qDdqtxNRrGwC%2Fvqya7AHJvrAvJVWXR%2F5BDJF0Pl1eR%2BY8iIkVZgSltDcIkr2oJqQQFaTA3IgGYhszofZBmwzvQI5n3Qtl9u%2B%2FlXLOU3YH0KGTYoVRlAR%2BOozknisBvzo9bS4%2BWUAH53%2FE09OsPmKZsVAbEkuJQwmgJywzy8BEhINQcwmRQaI8XPjNiZVxxZikcMZB9Zr5ccbh7LzbWCQXLoxgYqbyGgQIbBn8uN1Y0szkqD96T07C1eU4hofMJbG4ZQGOqgBS2hQ7fSvEdDcprt3hlZWmhlm58bScYG5%2F6WY%2BjrnVbacOKUoy5fM8usq5sdBWh2Frl0RFTcZ%2B4%2B9Kw7zzVzQU9t8OwQX3%2FivI19ZH%2BceFPdXK0%2Bl1qtMUmdUrzeKsRqP3Rv2CPBrwh0kot%2B0BJnOCtEYe3eJfzXgxWUx%2BX4obWtSOgHgFqFUx5e4N3q6O747wxChmgIhOV3rXudbkMPY2Tow2pxBjQrn&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T081124Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYUEGQB4MJ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=8baf6d6d3e992a44e799ab9076a78c604440bb86bb09ac04d341f5080d613ddd&hash=6d29b9b93102ad091d6c9551e675bdbb6a038a86eadcb542584e23fe37d1262a&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122005042&tid=spdf-98476569-9204-4971-a3d7-3515736a1c80&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01065402510102&rr=714eb7d2babc998c" target="_blank" rel="noopener" class="f68 btn93 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup14" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps263">
<div onclick="event.stopPropagation()" class="popup v24 ps239 s299 c427">
<div class="ps38 v7 s233">
<div class="v5 ps185 s244 c45">
<div class="v5 ps186 s245 c345">
<div class="player un323 pl29">
<video preload="metadata" poster="images/poster-3142.php" class="videoinline vd5" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-392.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps187 s236 c346">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c347">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c348">
<a onclick="pop&&pop.closePopup('popup14');return false" style="cursor:pointer;" class="f67 btn94 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps188 s240 c349">
<a onclick="pop.openClosePopup('popup14')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004966/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080949Z&X-Amz-SignedHeaders=host&X-Amz-Expires=299&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=236f1e0539b99f0512fb5a80bc71dacf3d37788f8af67308c2d98b1a946ab97d&hash=70db37937c7c8799455c4c1f6c0d4077811e754ec63731d359dbcf778dc53d22&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004966&tid=spdf-e3931d3d-af0d-4645-bec9-b44679f4fcd4&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106565e505706&rr=714eb5834ee7998c" target="_blank" rel="noopener" class="f68 btn95 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup13" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps264">
<div onclick="event.stopPropagation()" class="popup v24 ps243 s289 c428">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c350">
<div class="player un324 pl30">
<video preload="metadata" poster="images/poster-3592-30.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S14-391.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c351">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c352">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c353">
<a onclick="pop&&pop.closePopup('popup13');return false" style="cursor:pointer;" class="f67 btn96 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c354">
<a onclick="pop.openClosePopup('popup13')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004942/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080906Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=e6e86ed8a07b311a490b23d34ba48fa5bf551283c82e8b25ac18198e27c54b66&hash=62de66f0e7cdeb5f2f0bf23c5f673e07158610d74c6b1f4256e4e91eb4758f35&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004942&tid=spdf-b51a29f8-288d-4ef3-ba58-86e9fc0c8491&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106575155565b&rr=714eb4765891998c" target="_blank" rel="noopener" class="f68 btn97 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup12" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps265">
<div onclick="event.stopPropagation()" class="popup v24 ps266 s300 c429">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c355">
<div class="player un325 pl31">
<video preload="metadata" poster="images/poster-3592-31.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S23-390.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c75">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c356">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c357">
<a onclick="pop&&pop.closePopup('popup12');return false" style="cursor:pointer;" class="f67 btn98 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c78">
<a onclick="pop.openClosePopup('popup12')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004930/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080819Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=cf34e16cb151f84ca441581e9e2d78e1d8c1795182520ffd5bd61029d5f3964d&hash=6904d4c24ac66ffd8e14931a73067819398ff8f99623a9afd61872250cba1846&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004930&tid=spdf-22af71b7-3c7a-4fe8-b521-d1d27c2e3aee&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0106505205545a&rr=714eb34f7996998c" target="_blank" rel="noopener" class="f68 btn99 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup11" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps267">
<div onclick="event.stopPropagation()" class="popup v24 ps268 s301 c430">
<div class="ps38 v7 s246">
<div class="v5 ps179 s247 c45">
<div class="v5 ps180 s248 c125">
<div class="player un326 pl32">
<video preload="metadata" poster="images/poster-3592-40.php" class="videoinline vd6" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-389.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c358">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c359">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c360">
<a onclick="pop&&pop.closePopup('popup11');return false" style="cursor:pointer;" class="f67 btn100 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps189 s240 c361">
<a onclick="pop.openClosePopup('popup11')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004929/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080739Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=bb72193b153b78b09a6f71e3357a772b26555f520f2fbd8211b61fbc6d0434d7&hash=635427f80dcd2fcdaa761985786988b1246b76cde30b6adc58f758adf96fc6a9&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004929&tid=spdf-41e3f5ce-29b0-42f2-9f34-02a4d4fdf1d2&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01065153540101&rr=714eb257bb2f998c" target="_blank" rel="noopener" class="f68 btn101 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup10" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps269">
<div onclick="event.stopPropagation()" class="popup v24 ps270 s302 c431">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c122">
<div class="player un327 pl33">
<video preload="metadata" poster="images/poster-3592-32.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S9-387.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c362">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c363">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c364">
<a onclick="pop&&pop.closePopup('popup10');return false" style="cursor:pointer;" class="f67 btn102 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c365">
<a onclick="pop.openClosePopup('popup10')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122006369/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080455Z&X-Amz-SignedHeaders=host&X-Amz-Expires=299&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=f6dc8b4a1753ecc77db067a5cb43fbc3d99371a3388359b20a31c5260d8ec1d5&hash=009fb2afbe7a92331ccfdc9f4eda6bd1235182fbd8f0b1c9ce62b9bb32637332&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122006369&tid=spdf-4568a590-8903-426a-b06d-71d27674abd5&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0105065351055a&rr=714eae52f93b3a17" target="_blank" rel="noopener" class="f68 btn103 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup9" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps271">
<div onclick="event.stopPropagation()" class="popup v24 ps272 s303 c432">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c114">
<div class="player un328 pl34">
<video preload="metadata" poster="images/poster-3592-41.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-386.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c366">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c367">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c113">
<a onclick="pop&&pop.closePopup('popup9');return false" style="cursor:pointer;" class="f67 btn104 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c115">
<a onclick="pop.openClosePopup('popup9')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004905/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080413Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=7883e35387671eb71fa479fdaa72980ba28a58cc6c7c8d102c640279f78602ca&hash=8ac46540fb1b7e10787fd76dece99c4a19ddd45337f2405612ce428074739efc&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004905&tid=spdf-49152254-b261-46c3-9d85-130c98f58c9f&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01050753530207&rr=714ead50ad603a17" target="_blank" rel="noopener" class="f68 btn105 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup8" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps273">
<div onclick="event.stopPropagation()" class="popup v24 ps274 s304 c433">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c109">
<div class="player un329 pl35">
<video preload="metadata" poster="images/poster-3592-33.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-382.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c368">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c369">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c117">
<a onclick="pop&&pop.closePopup('popup8');return false" style="cursor:pointer;" class="f67 btn106 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c111">
<a onclick="pop.openClosePopup('popup8')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004875/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080323Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=4ac645d8bea5b7ff424ba56333cca8d05c5cc406e2cb83211b41bd421da5ef56&hash=eae34dbcbc6b043e534c598d4903c4954e2428b88723e68531328e73bb85d19b&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004875&tid=spdf-54e5e764-c8d3-4414-81c7-4a4868d64dff&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a010500575b5606&rr=714eac185e803a17" target="_blank" rel="noopener" class="f68 btn107 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup7" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps275">
<div onclick="event.stopPropagation()" class="popup v24 ps276 s305 c434">
<div class="ps38 v7 s233">
<div class="v5 ps190 s249 c45">
<div class="v5 ps191 s250 c370">
<div class="player un330 pl36">
<video preload="metadata" poster="images/poster-2792.php" class="videoinline vd7" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-379.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps192 s236 c371">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c372">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c373">
<a onclick="pop&&pop.closePopup('popup7');return false" style="cursor:pointer;" class="f67 btn108 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps193 s240 c107">
<a onclick="pop.openClosePopup('popup7')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S221282712200498X/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080241Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=86205073642553af882cb7a4aba80c83540c986b0bfd2bbbe816a48f21d59af6&hash=d001b0e1e07fee49cfe1fad166e086261ed20fe2dfb2f8c7f082eb1fb4e35e0d&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S221282712200498X&tid=spdf-96ae71c7-7b9c-49a2-a2ce-bdc03a81be0e&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01050157515001&rr=714eab123b4f3a17" target="_blank" rel="noopener" class="f68 btn109 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup6" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps277">
<div onclick="event.stopPropagation()" class="popup v24 ps278 s306 c435">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c100">
<div class="player un331 pl37">
<video preload="metadata" poster="images/poster-3592-34.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S3-377.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c374">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c375">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c376">
<a onclick="pop&&pop.closePopup('popup6');return false" style="cursor:pointer;" class="f67 btn110 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c377">
<a onclick="pop.openClosePopup('popup6')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004863/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJGMEQCIEQRjpSm3lb8zn68TCfowou4f3gBYdzkhp8UeHIC3eaoAiBjRaQcJNimx5l4it%2Fhhpb89cdV4xzTlpM83s4Jwd8uOyrSBAhYEAQaDDA1OTAwMzU0Njg2NSIMOhfFTPNmTMC7Wv1fKq8EUcYaV43Jc4qBoAWM2jePAaYXgVPa4OIMH%2FIFvk5OcooQT2gAof9DjUM0xNcysDCFeFdHrtkOaZcy7YWQfu5Ot38fjXbPUwPlsJa2Q%2BiCteBAeeZ%2BxhKRZrht%2F4ipYOw9VxJAY3gEGHAsnylzCyNSBbNscqtl1bOnv8yLtxp3HBYLk2lDXhRj0xPrsvyA6L188tqK1rswz%2B%2BLF40gHReZNUcO9qJsEixvU%2BvlIYJFjijJnKggDy9wi%2Fvm9%2F2znljtisQMYfOXflIS5YiVLIqn2R968A4FV7gON3adBCNI8dX1tx9P0TmOtH%2FrR%2BBAR%2BbgfyjlEdzqXienWd1gpHq%2BNCN46cS4NLLtuhhdywjEDIn04SHJe%2BdvSv%2Bq4lyzDVTNZXA1upB9MXXurcO2s35cfklEWc9SVxYHzvSPAY%2BZPJenpuusfmcdWoM6WP7q%2BoB96i8oHqU5W0UuGdY3ZMLSuaWMTrDAUwsG8vwoSCt85i0X60HtHAQMMaHg5fNuxROkwIY8BFjdJFTpSXf88XNJO4bReqHp%2BGmnxBtk7VYt5u5Bsao6zI1pjyP4O2toEG1y92U8QugJWad%2B1UgxWK7C6hru0lw2ovz0Yn5SIsZVJq2jWNyCubN9MPtEg2%2BFo%2Bme63P7HTL2ldoBpsljokgdpcBAvBPJb4uuZkcXQCAWNdZVS%2Be0uJkGk8bRRgBaQaWdDHPaRKL64i0tofWHy05vN%2FerKOFbVqiwE0%2FC6n69zDCnweGUBjqqAWf7TUch%2B34ud%2FaPUoL2e5dNhXj3tpA%2F5G%2FHRXIJ%2Fexahk9KChztQpxLM%2B0Ha6J4aZ%2BvIeYE%2BqxpWkfq4fDf%2ByPvXFjV5Mm6Mky8anKbUTG9cVAT1dYwHejDkWZLWggqQd%2BacWYUDgvWqzdV8a44OUdnJee1MyHeyMo%2FFLPeMpL0t%2F8UXYzYC1qu8pE%2FwZvJRoZYpJvscJwEJuq7biRWGgpA5j9qflBupXI2&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080158Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4OUKGZHT%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=eb96b0546200be11bf4062b66ea37a6cbd2091d49b9f4fdb834df93b851bb95d&hash=a693781b0a22ed0d211bd3e10dc322520e6dea8149aaf66ad06c678cb985aeec&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004863&tid=spdf-0e89f8bd-696e-4c3c-be23-42cbafbc9214&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01050256555201&rr=714eaa061bb33a17" target="_blank" rel="noopener" class="f68 btn111 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup5" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps279">
<div onclick="event.stopPropagation()" class="popup v24 ps270 s307 c436">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c378">
<div class="player un332 pl38">
<video preload="metadata" poster="images/poster-3592-42.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-372.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c95">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c379">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c97">
<a onclick="pop&&pop.closePopup('popup5');return false" style="cursor:pointer;" class="f67 btn112 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c98">
<a onclick="pop.openClosePopup('popup5')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004851/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEGAaCXVzLWVhc3QtMSJHMEUCIF1KXgZALNpHXAEY4C5ECtjan54mjyCVc%2FdTYnfvS4evAiEAjzPdASyS8xf67784ebQJrY4DMRWa%2FEOXxgJ%2B0%2B1Eo5Iq0gQIWRAEGgwwNTkwMDM1NDY4NjUiDCb7OqoyQXyFObcTySqvBAggAOUfiaWXarDheB%2FBpIrbom0DlRUbTMGFFOMxWRXOlkcpF42pSISu6m5kUQITNp4%2FyMwqforJD%2Bt7agKTqLCNOkCF4eiPyKzEpamBUHNNLsVNn1ODf1bPjRYuzhUzlvTgqruz8yLQAItA%2FsWHrCsoQ7wBNJeiiNmjDDAqh2wuO6rw%2FwKvmnJaft5jOo4rk%2BckuYeGZ9uxXo87zZLygg%2FXyyuru6sybkzi4LqP6Y0X5BCeznnPsyJp%2B50aWlqWHG9MWJRGyi7vR4Dvof6vI0SHo2%2F1PRemf6eUY5ZRa56Dv7zQ6Wb9H5BQ95aJEEFnSqi3%2Bq%2FeK0CgeODXMRUbrVcV373mGQtj%2FDwnVgYOwfI5qa63BDnv7TP5UnU7SWuoBxOzOXvw7jyxbBnG2SGbnLoEn8wwdJ432L7JnRM2T10OeSnmgMqfS39OdH1bkDJ0Ec%2BAmhzEbvPQf41YFWVVFmj4FemO17bnp2NYbGsL%2BXZHbZLHYmvD%2BRneiRL2p73B3O29NZ%2FC7SMbfikLDNE5UOLwBfd0OLZ3C4k3ZLG3cxiyHI%2BRSIhtn7NIagSAO5Mr5diEOq0tTIKHBAnNVIUgVkeLWugWArIe4Gp3mpFGhW8L4Ckjwqc6pgFrUMjW6rlE%2BlYzDBoYm9Inz6JtLEJxwO%2F4UtnYuCoVcZYFNnMk2%2FmWuL8Zwi7GhEwcxFsFoU0Xg9WoXpquHTKqPsXcNdSIrIxeEYPocpzBAwqS2Qs8y%2BMwvdThlAY6qQH2tMrqFG2Wzgpp5ECcjR6bzgJeB1xNmUA7iP6GrZOTZm2bICnW%2BU7zeY8j1Dgt7il4s4AQyvJ%2FEjC1Fz1jvImSiz30RCu4Y208i9t%2BT1JLjpybZOmwq05RgTZjc6Tt4a9Edlj3aDatMZzb6SFyIaKCMO5HdOMBYS7lUFbKcHJMP%2B%2BpgC9F7m2GRXZZJnv2tPzuyppd8A%2BEA3BaDyQuwxYhkuo4Khxb%2F3XD&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T080054Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY4AASSLES%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=e726a33f151ad2113482109b9d489259c6e6e9b3f812afabd3f00852ca10e1a4&hash=d08a71c896b0710fb4bfe5f0d52e0a8825bc4f970bd5931619faa9d6a518dcda&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004851&tid=spdf-7c95ed98-4b49-4119-ace2-db0007a85765&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a01055b5150555a&rr=714ea87369503a17" target="_blank" rel="noopener" class="f68 btn113 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup4" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps280">
<div onclick="event.stopPropagation()" class="popup v24 ps274 s308 c437">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c86">
<div class="player un333 pl39">
<video preload="metadata" poster="images/poster-3592-35.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S29-370.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c380">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c381">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c382">
<a onclick="pop&&pop.closePopup('popup4');return false" style="cursor:pointer;" class="f67 btn114 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c383">
<a onclick="pop.openClosePopup('popup4')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S221282712200484X/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIEqreX2nXF8qzam5FjoNTZJP0ZzolDGT4UKZSAbgyDlEAiEA0Bmko%2BItuyKS4ck%2BPGHl8iwdhqgDL4wwzim7Rv%2FRYOkq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDPcb%2F1Jih4qWU1o9XyqvBLJkVNk%2FzGbkoMZKAvyUZ8sPeqYuJB2%2FfTP1aVWIOx04vTd70q6AJd%2FuncHOJnQXOZQUZavNrlpzPz2nA0b33RzrA0jZn0kcU52b6ZmEybxOp2r8MXJ5lrMgtlWCrNIWT%2FdAfGUsjuedWYlXBv1mpitYZKLKqjlDBoIC1OHnRkzRv9lZ0ZIFwE%2Bbrj6YIQqw%2BaaZQhKoGCPEcR1JfWGihETnUkJLemcZxNMNsx0RKWCGcLexG9UBYCKc%2FlZJiGgBplntasndDyTacuA%2B0KsPObGatiRzefEBjlH%2BTe0%2FpJmHxLF3UZ4uzbJmIGk6hDg5qBb2XZkkaohujiahNPK93p6SW73al%2FaBmhmTvL2wAxHYcsviIPpcu8QpcafNGwO2Xo3qJl0J3rIEZ2HBGwbIbTk%2B5Ri4Zn1J5qz2mdjxrTFRHYQ%2BaDtA%2BEw1QeMVifk2zWJJRwv20Zo5U1zx3td%2BcOP8SAzQb8NottguOinQqH7f7RLoZgafTgP72tP5ovsGwPP8b8OgXNjRxw04Nn65t8%2BYOAyQ7CrriOeR0u%2FouausaWrAqkalb11H5ZQwgZXtwa3NlpG0PWJxe7e5RzSYl%2FG0cCXHaTS6tQNm6S5V8z9w4tCU4x2%2FIuH8InKgWSoSnY6SNXBLfEk8BExZpvdHHKVs4BdfQsXa5Bz0frZy3UhEXsES37zfobGQQvULmCqa4ifym%2Fk%2BSqzc9oTE0F5cYff94Rh3CndN5133qCeEtPEwpL3hlAY6qQFVdv8B7LBfnK9bL1%2FiJuhDeA%2F%2FmebRHvosdsieceP96n2UeZmPgTu1VpB1ijr1AKbS6HshFH6BtIb%2B2KkLHm0XA%2B1afQmgKJMO8JLW4GiFnkWnCBe0fT2cueSSiHPycg3hwo4QwzX%2B%2Fv6WjVyoQ7SpGGTvj%2Bj1UZaeN15jcPUtwjZjvGkWemEzpSPZBSQ%2F2%2FClSCitMnKQkLwOa2YuVmPX3Pgh9R2QMIfa&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T075938Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTYX4YF2LGR%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=ce600f27eb24df08ad009402bf5dd0c29aa0d47d1c836371b6236500a042ba94&hash=305d84790ee3feec990546725b835a3fa01c9aecc24db048db5602d5e2689296&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S221282712200484X&tid=spdf-906c1df1-2911-49f3-a67b-a254828d252e&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a0105555f550201&rr=714ea696ab983a17" target="_blank" rel="noopener" class="f68 btn115 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div id="popup3" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps281">
<div onclick="event.stopPropagation()" class="popup v24 ps282 s309 c438">
<div class="ps38 v7 s233">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c384">
<div class="player un334 pl40">
<video preload="metadata" poster="images/poster-3592-36.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S30-368.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c46">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c385">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c386">
<a onclick="pop&&pop.closePopup('popup3');return false" style="cursor:pointer;" class="f67 btn116 v6 s239"> </a>
</div>
</div>
</div>
</div>
<div class="v5 ps183 s240 c48">
<a onclick="pop.openClosePopup('popup3')" style="cursor:pointer;" href="https://pdf.sciencedirectassets.com/282173/1-s2.0-S2212827122X0005X/1-s2.0-S2212827122004826/main.pdf?X-Amz-Security-Token=IQoJb3JpZ2luX2VjEF8aCXVzLWVhc3QtMSJHMEUCIFsvm8sYD8wuC%2BkaPlqZl8PJVwPvTtaIhOHsrN13fzZpAiEAhLAPKD7R8%2FA9%2BpoVQy7jfv29Hwktf%2FFNlh3gCrp%2BJ1Aq0gQIWBAEGgwwNTkwMDM1NDY4NjUiDJ7DOh1dDjx6CIyoSiqvBEzeAU3BCUphOlneZ1%2BHYYLKnEaB45D9H1aG7IATHn0ygzrbZxf%2B44w7MqKLUO7txg294LSoT337rRBSjXb4uiGPCZxWtl1vOWd6wfn7D%2FSJhqv9du6J9MZPZL%2FCcuGK29zMz%2FZLjQ4BakasK3KDDfTnxV2gK%2BYJAIkxJ2xIRJLL5AQvie3km7%2BsCQ4pXtnYlVSsL0pywHOe1pZOW6gizso5XpQ3%2FvIUgHh%2BcaP8p5JLN77TbVgG3wuYtcoAjHQ2qG5sZBl5jGcjCrnMegg%2FNygw8qHkkMMUrNIpUly3OibvthIePuZUaAjMi0HValpmlnAL9FJ7YyA5a0C1eJWTHF%2Bh94abFnrtFXuFhvvxS6yhYaz84APB3G6xxJkwXN5wGjqQU4ld%2BjwAmD2ZYTRZSJuX5xjRMIqjHjlFi4FemYcq23lIJZHVrXp0dMMwoOVKDX3XvXbJtC9WglSBCvrTSvBFPfbWm%2BokOuW%2BBFOLNIFOvDcTSkX9TQJRI2N1Mq6xVtXebfTDILIxHbGKKkISjP9pvSPtGWhqSwi%2Br6Nj0kf%2BGpGEuQNDxMNDW2mi1pcxzdqRXIv%2FC43hBzIY90No4Pz4NfYOQJVJqyXgGZ5MtzBA2BKD7smhZlOia19oj%2FaxX3MCc%2BOUAEKn1N4XZeqNOPAQJeqm%2F3%2F1Mw%2BWYtryeDSee5VWZziphejKR6mjW6oikDOS6c4%2FP2AP1D4HNh39lUnv1fPluT6pCdxk4W%2FquPgw4LjhlAY6qQGyCNKgpZyDN774sXu9WgvbXysmql%2FDkWUj460GZAe8wQe7MxyxsVTiM2pW1OCIcFVOi7dm0nT8nMP9a6cQXb2CVaA%2Fp49KM5mU1FHhn7zN2%2Fx0RF9yRdFLlCywSOi0THMMZIQqR2fySZT3iumNZ4QS5Ce8SitoXLVq1WPURrbLJAJAK52S5Wkq2aEpweOQBJU3g8ixzcQiwmv8zGdrAV0QYwwML%2Fgzi11F&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220602T073902Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAQ3PHCVTY2GYL4JDQ%2F20220602%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=307ca69da9876db2ceea4875c5069949274a0601f5b5c4dd71b84494b2561443&hash=4d00d78664db72f8940eaa556c6ca0fc65843be474fd1a1e1f2068654cff2aab&host=68042c943591013ac2b2430a89b270f6af2c76d8dfd086a07176afe7c76c2c61&pii=S2212827122004826&tid=spdf-6c3004bb-2a54-4140-b5a3-769f35bd4c9a&sid=60a670c18659784b3449d3e64dffed2febfegxrqb&type=client&ua=52565a015c5b505b5402&rr=714e88687a9399f1" target="_blank" rel="noopener" class="f68 btn117 v6 s241">View paper in Procedia CIRP</a>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=parseInt(1e7/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size"))+.5)/1e5,n=document.body;r!=n.style.getPropertyValue("--f")&&n.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/votes.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>