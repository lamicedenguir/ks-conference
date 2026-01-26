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
            $redirect = 'cirpcsi2022session2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = 'C2F10598-BE8C-4EA7-8CF8-E110759F3266';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2.php';
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
<title>Day 2 sessions 8h40 to 10h20</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 2 sessions 8h40 to 10h20">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps613{position:relative;margin-top:0}.v48{display:block;vertical-align:top}.s644{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v49{display:inline-block;vertical-align:top}.ps614{position:relative;margin-left:0;margin-top:0}.s645{min-width:1920px;width:1920px;min-height:142px}.ps615{position:relative;margin-left:0;margin-top:0}.s646{min-width:165px;width:165px;min-height:142px;height:142px}.c987{z-index:3;pointer-events:auto}.a12{display:block}.i67{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i68{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps616{position:relative;margin-left:-21px;margin-top:6px}.s647{min-width:424px;width:424px;min-height:130px;height:130px}.c988{z-index:1;pointer-events:auto}.i69{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps617{position:relative;margin-left:1038px;margin-top:54px}.s648{min-width:84px;width:84px;min-height:36px}.c989{z-index:22;pointer-events:auto}.f196{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn217{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn217:hover{background-color:#82939e;border-color:#000;color:#000}.btn217:active{background-color:#677a85;border-color:#000;color:#808080}.v50{display:inline-block;overflow:hidden;outline:0}.s649{width:84px;padding-right:0;height:24px}.ps618{position:relative;margin-left:10px;margin-top:30px}.s650{min-width:84px;width:84px;min-height:82px}.c990{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p30{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f197{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s651{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps619{position:relative;margin-left:0;margin-top:21px}.s652{min-width:136px;width:136px;min-height:100px;height:100px}.c991{z-index:18;pointer-events:auto}.i70{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps620{position:relative;margin-top:8px}.s653{width:100%;min-width:1920px;min-height:744px}.c992{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-34.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c992{background-image:url(images/cirp-csi-2022-320-35.php)}.ps621{position:relative;margin-top:60px}.s654{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps622{position:relative;margin-left:240px;margin-top:0}.s655{min-width:1600px;width:1600px;min-height:160px}.ps623{position:relative;margin-left:0;margin-top:0}.s656{min-width:1520px;width:1520px;min-height:160px}.c993{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f198{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps624{position:relative;margin-left:-4px;margin-top:0}.s657{min-width:84px;width:84px;min-height:80px}.c994{z-index:221;pointer-events:auto;overflow:hidden;height:80px}.f199{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s658{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f200{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps625{position:relative;margin-top:108px}.s659{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:543px}.ps626{position:relative;margin-left:260px;margin-top:0}.s660{min-width:1400px;width:1400px;min-height:70px}.s661{min-width:320px;width:320px;min-height:70px}.c995{z-index:19;pointer-events:auto}.f201{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn218{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn218:hover{background-color:#82939e;border-color:#000;color:#000}.btn218:active{background-color:#677a85;border-color:#000;color:#808080}.s662{width:320px;padding-right:0;height:29px}.ps627{position:relative;margin-left:40px;margin-top:0}.c996{z-index:24;pointer-events:auto}.btn219{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn219:hover{background-color:#82939e;border-color:#000;color:#000}.btn219:active{background-color:#677a85;border-color:#000;color:#808080}.ps628{position:relative;margin-left:40px;margin-top:0}.c997{z-index:23;pointer-events:auto}.btn220{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn220:hover{background-color:#82939e;border-color:#000;color:#000}.btn220:active{background-color:#677a85;border-color:#000;color:#808080}.ps629{position:relative;margin-left:40px;margin-top:0}.c998{z-index:25;pointer-events:auto}.btn221{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn221:hover{background-color:#82939e;border-color:#000;color:#000}.btn221:active{background-color:#677a85;border-color:#000;color:#808080}.ps630{position:relative;margin-left:55px;margin-top:65px}.s663{min-width:845px;width:845px;min-height:51px}.c999{z-index:26;pointer-events:auto;overflow:hidden;height:51px}.p31{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f202{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps631{position:relative;margin-left:55px;margin-top:34px}.s664{min-width:1805px;width:1805px;min-height:63px}.c1000{z-index:27;pointer-events:auto}.f203{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn222{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn222:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn222:active{background-color:#677a85;border-color:#000;color:#fff}.s665{width:1805px;padding-right:0;height:34px}.ps632{position:relative;margin-left:55px;margin-top:22px}.s666{min-width:1805px;width:1805px;min-height:63px}.c1001{z-index:28;pointer-events:auto}.f204{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn223{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn223:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn223:active{background-color:#677a85;border-color:#000;color:#fff}.ps633{position:relative;margin-left:55px;margin-top:19px}.s667{min-width:1805px;width:1805px;min-height:63px}.c1002{z-index:29;pointer-events:auto}.f205{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn224{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn224:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn224:active{background-color:#677a85;border-color:#000;color:#fff}.ps634{position:relative;margin-left:55px;margin-top:24px}.s668{min-width:1805px;width:1805px;min-height:63px}.c1003{z-index:30;pointer-events:auto}.f206{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn225{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn225:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn225:active{background-color:#677a85;border-color:#000;color:#fff}.c1004{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:34px;min-height:3314px}.ps635{position:relative;margin-top:0}.s669{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3314px}.s670{width:1926px;margin-left:-3px;min-height:3314px}.s671{min-width:1926px;width:1926px;min-height:789px}.c1005{z-index:31}.ps636{position:relative;margin-left:58px;margin-top:0}.s672{min-width:600px;width:600px;min-height:51px}.c1006{z-index:33;pointer-events:auto;overflow:hidden;height:51px}.ps637{position:relative;margin-left:0;margin-top:-3px}.s673{min-width:1926px;width:1926px;min-height:741px}.w10{line-height:0}.s674{min-width:1926px;width:1926px;min-height:447px}.c1007{z-index:34}.s675{min-width:1920px;width:1920px;min-height:147px;height:147px}.c1008{z-index:36;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps638{position:relative;margin-left:20px;margin-top:3px}.s676{min-width:1760px;width:1760px;min-height:142px}.c1009{z-index:37;pointer-events:auto;overflow:hidden;height:142px}.f207{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f208{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps639{position:relative;margin-left:0;margin-top:-6px}.s677{min-width:1920px;width:1920px;min-height:147px}.c1010{z-index:35;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps640{position:relative;margin-left:1843px;margin-top:-413px}.s678{min-width:54px;width:54px;min-height:380px}.c1011{z-index:44}.s679{min-width:54px;width:54px;min-height:86px}.c1012{z-index:48;pointer-events:auto;overflow:hidden;height:86px}.ps641{position:relative;margin-left:0;margin-top:61px}.s680{min-width:54px;width:54px;min-height:86px}.c1013{z-index:49;pointer-events:auto;overflow:hidden;height:86px}.ps642{position:relative;margin-left:23px;margin-top:-295px}.s681{min-width:1760px;width:1760px;min-height:150px}.c1014{z-index:39;pointer-events:auto;overflow:hidden;height:150px}.f209{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f210{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.334;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps643{position:relative;margin-left:23px;margin-top:-150px}.s682{min-width:1764px;width:1764px;min-height:150px}.c1015{z-index:43;pointer-events:auto;overflow:hidden;height:150px}.s683{min-width:1926px;width:1926px;min-height:300px}.c1016{z-index:42}.s684{min-width:1920px;width:1920px;min-height:147px}.c1017{z-index:40;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.s685{min-width:1920px;width:1920px;min-height:147px}.c1018{z-index:41;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps644{position:relative;margin-left:0;margin-top:-3314px}.s686{min-width:1920px;width:1920px;min-height:1px}.v51{display:none;vertical-align:top}.s687{width:100%;min-width:1920px;min-height:198px}.c1019{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps646{position:relative;margin-top:34px}.s688{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps647{position:relative;margin-left:24px;margin-top:0}.s689{min-width:1876px;width:1876px;min-height:78px}.c1020{pointer-events:auto;overflow:hidden;height:78px}.f211{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f212{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps648{position:relative;margin-left:684px;margin-top:0}.s690{min-width:256px;width:256px;min-height:64px}.c1021{pointer-events:auto}.f213{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn226{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn226:hover{background-color:#82939e;border-color:#000;color:#000}.btn226:active{background-color:#181b28;border-color:#000;color:#808080}.s691{width:256px;padding-right:0;height:24px}.ps649{position:relative;margin-left:40px;margin-top:0}.f214{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn227{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn227:hover{background-color:#82939e;border-color:#000;color:#000}.btn227:active{background-color:#181b28;border-color:#000;color:#808080}.ps650{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435288;pointer-events:none;visibility:hidden;opacity:0}.v52{display:inline-block;vertical-align:top;pointer-events:auto}.ps651{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s692{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1022{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps652{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435283;pointer-events:none;visibility:hidden;opacity:0}.c1023{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps653{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435278;pointer-events:none;visibility:hidden;opacity:0}.c1024{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps654{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435273;pointer-events:none;visibility:hidden;opacity:0}.c1025{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps655{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435268;pointer-events:none;visibility:hidden;opacity:0}.c1026{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps656{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435263;pointer-events:none;visibility:hidden;opacity:0}.c1027{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps657{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435258;pointer-events:none;visibility:hidden;opacity:0}.c1028{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps658{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435253;pointer-events:none;visibility:hidden;opacity:0}.c1029{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps659{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435248;pointer-events:none;visibility:hidden;opacity:0}.c1030{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps660{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435243;pointer-events:none;visibility:hidden;opacity:0}.c1031{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps661{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435238;pointer-events:none;visibility:hidden;opacity:0}.c1032{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps662{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435233;pointer-events:none;visibility:hidden;opacity:0}.c1033{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps663{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435228;pointer-events:none;visibility:hidden;opacity:0}.c1034{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps664{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435223;pointer-events:none;visibility:hidden;opacity:0}.c1035{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps665{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435218;pointer-events:none;visibility:hidden;opacity:0}.c1036{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps666{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435213;pointer-events:none;visibility:hidden;opacity:0}.c1037{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps667{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435208;pointer-events:none;visibility:hidden;opacity:0}.c1038{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps668{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435203;pointer-events:none;visibility:hidden;opacity:0}.c1039{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps669{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435198;pointer-events:none;visibility:hidden;opacity:0}.c1040{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps670{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435193;pointer-events:none;visibility:hidden;opacity:0}.c1041{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps613{margin-top:4px}.s644{min-width:1200px;width:1200px;min-height:89px}.s645{min-width:1200px;width:1200px;min-height:89px}.s646{min-width:115px;width:115px;min-height:89px;height:89px}.i67{left:13px;width:89px;height:89px}.ps616{margin-left:-16px;margin-top:4px}.s647{min-width:265px;width:265px;min-height:81px;height:81px}.i69{width:265px;height:81px}.ps617{margin-left:640px;margin-top:30px}.s648{min-width:52px;width:52px;min-height:22px}.f196{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s649{width:52px;height:15px}.ps618{margin-left:7px;margin-top:15px}.s650{min-width:52px;width:52px;min-height:51px}.c990{height:51px}.f197{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s651{height:30px;transform:scale(1.000) translateY(3px)}.ps619{margin-top:9px}.s652{min-width:85px;width:85px;min-height:63px;height:63px}.i70{width:85px;height:31px;top:16px}.ps620{margin-top:5px}.s653{min-width:1200px;min-height:494px}.ps621{margin-top:4px}.s654{min-width:1200px;width:1200px;min-height:116px}.ps622{margin-left:150px}.s655{min-width:999px;width:999px;min-height:116px}.s656{min-width:950px;width:950px;min-height:116px}.c993{height:116px}.f198{font-size:30px;font-size:calc(30px * var(--f))}.ps624{margin-left:-3px}.s657{min-width:52px;width:52px;min-height:58px}.c994{height:58px}.f199{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s658{height:27px;transform:scale(1.111) translateY(2px)}.f200{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps625{margin-top:49px}.s659{min-width:1200px;width:1200px;min-height:345px}.ps626{margin-left:164px}.s660{min-width:872px;width:872px;min-height:44px}.s661{min-width:200px;width:200px;min-height:44px}.f201{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s662{width:200px;height:18px}.ps627{margin-left:25px}.ps628{margin-left:25px}.ps629{margin-left:22px}.ps630{margin-left:34px;margin-top:53px}.s663{min-width:485px;width:485px;min-height:35px}.c999{height:35px}.f202{font-size:18px;font-size:calc(18px * var(--f))}.ps631{margin-left:34px;margin-top:10px}.s664{min-width:1129px;width:1129px;min-height:39px}.f203{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s665{width:1129px;height:21px}.ps632{margin-left:34px;margin-top:13px}.s666{min-width:1129px;width:1129px;min-height:39px}.f204{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.ps633{margin-left:34px;margin-top:12px}.s667{min-width:1129px;width:1129px;min-height:40px}.f205{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.ps634{margin-left:34px;margin-top:15px}.s668{min-width:1129px;width:1129px;min-height:39px}.f206{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c1004{width:max(1200px, 100%);margin-top:27px;min-height:2080px}.s669{min-width:1200px;width:1200px;min-height:2080px}.s670{width:1206px;min-height:2080px}.s671{min-width:1206px;width:1206px;min-height:495px}.ps636{margin-left:37px}.s672{min-width:375px;width:375px;min-height:32px}.c1006{height:32px}.s673{min-width:1206px;width:1206px;min-height:466px}.s674{min-width:1206px;width:1206px;min-height:282px}.s675{min-width:1200px;width:1200px;min-height:92px;height:92px}.ps638{margin-left:12px;margin-top:2px}.s676{min-width:1095px;width:1095px;min-height:89px}.c1009{height:89px}.f207{font-size:18px;font-size:calc(18px * var(--f))}.f208{font-size:18px;font-size:calc(18px * var(--f))}.s677{min-width:1200px;width:1200px;min-height:92px}.ps640{margin-left:1149px;margin-top:-259px}.s678{min-width:33px;width:33px;min-height:237px}.s679{min-width:33px;width:33px;min-height:53px}.c1012{height:53px}.ps641{margin-top:39px}.s680{min-width:33px;width:33px;min-height:53px}.c1013{height:53px}.ps642{margin-left:15px;margin-top:-187px}.s681{min-width:1095px;width:1095px;min-height:92px}.c1014{height:92px}.f209{font-size:18px;font-size:calc(18px * var(--f));line-height:1.668}.f210{font-size:18px;font-size:calc(18px * var(--f));line-height:1.668}.ps643{margin-left:15px;margin-top:-95px}.s682{min-width:1095px;width:1095px;min-height:92px}.c1015{height:92px}.s683{min-width:1206px;width:1206px;min-height:190px}.s684{min-width:1200px;width:1200px;min-height:92px}.s685{min-width:1200px;width:1200px;min-height:92px}.ps644{margin-top:-2080px}.s686{min-width:1200px;width:1200px}.s687{min-width:1200px;min-height:129px}.ps646{margin-top:21px}.s688{min-width:1200px;width:1200px;min-height:84px}.ps647{margin-left:15px}.s689{min-width:1172px;width:1172px;min-height:49px}.c1020{height:49px}.f211{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f212{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps648{margin-left:412px;margin-top:-5px}.s690{min-width:160px;width:160px;min-height:40px}.f213{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s691{width:160px;height:15px}.ps649{margin-left:55px;margin-top:-5px}.f214{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps651{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s692{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s644{min-width:960px;width:960px;min-height:71px}.s645{min-width:960px;width:960px;min-height:71px}.s646{min-width:69px;width:69px;min-height:71px;height:71px}.i67{left:0;width:69px;height:69px;top:1px}.ps616{margin-left:1px;margin-top:3px}.s647{min-width:212px;width:212px;min-height:65px;height:65px}.i69{width:212px;height:65px}.ps617{margin-left:521px;margin-top:27px}.s648{min-width:42px;width:42px;min-height:18px}.f196{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s649{width:42px;height:11px}.ps618{margin-left:5px;margin-top:15px}.s650{min-width:42px;width:42px;min-height:41px}.c990{height:41px}.f197{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s651{height:24px;transform:scale(1.000) translateY(2px)}.ps619{margin-top:10px}.s652{min-width:68px;width:68px;min-height:51px;height:51px}.i70{width:68px;height:25px;top:13px}.ps620{margin-top:4px}.s653{min-width:960px;min-height:501px}.ps621{margin-top:0}.s654{min-width:960px;width:960px;min-height:92px}.ps622{margin-left:118px}.s655{min-width:802px;width:802px;min-height:92px}.s656{min-width:760px;width:760px;min-height:92px}.c993{height:92px}.f198{font-size:24px;font-size:calc(24px * var(--f))}.ps624{margin-left:0}.s657{min-width:42px;width:42px;min-height:46px}.c994{height:46px}.f199{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s658{height:22px;transform:scale(1.111) translateY(2px)}.f200{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps625{margin-top:6px}.s659{min-width:960px;width:960px;min-height:269px}.ps626{margin-left:130px}.s660{min-width:697px;width:697px;min-height:35px}.s661{min-width:160px;width:160px;min-height:35px}.f201{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s662{width:160px;height:15px}.ps627{margin-left:20px}.ps628{margin-left:20px}.ps629{margin-left:17px}.ps630{margin-left:27px;margin-top:36px}.s663{min-width:368px;width:368px;min-height:26px}.c999{height:26px}.f202{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps631{margin-left:27px;margin-top:7px}.s664{min-width:903px;width:903px;min-height:31px}.f203{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s665{width:903px;height:16px}.ps632{margin-left:27px;margin-top:12px}.s666{min-width:903px;width:903px;min-height:31px}.f204{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.ps633{margin-left:27px;margin-top:10px}.s667{min-width:903px;width:903px;min-height:32px}.f205{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.ps634{margin-left:27px;margin-top:12px}.s668{min-width:903px;width:903px;min-height:31px}.f206{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c1004{width:max(960px, 100%);margin-top:18px;min-height:1672px}.s669{min-width:960px;width:960px;min-height:1672px}.s670{width:966px;min-height:1672px}.s671{min-width:966px;width:966px;min-height:397px}.ps636{margin-left:30px}.s672{min-width:300px;width:300px;min-height:26px}.c1006{height:26px}.s673{min-width:966px;width:966px;min-height:374px}.s674{min-width:966px;width:966px;min-height:227px}.s675{min-width:960px;width:960px;min-height:73px;height:73px}.ps638{margin-left:10px;margin-top:0}.s676{min-width:882px;width:882px;min-height:71px}.c1009{height:71px}.f207{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.f208{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.s677{min-width:960px;width:960px;min-height:74px}.ps640{margin-left:926px;margin-top:-209px}.s678{min-width:28px;width:28px;min-height:190px}.s679{min-width:26px;width:26px;min-height:42px}.c1012{height:42px}.ps641{margin-left:2px;margin-top:29px}.s680{min-width:26px;width:26px;min-height:42px}.c1013{height:42px}.ps642{margin-left:13px;margin-top:-149px}.s681{min-width:880px;width:880px;min-height:74px}.c1014{height:74px}.f209{font-size:15px;font-size:calc(15px * var(--f))}.f210{font-size:15px;font-size:calc(15px * var(--f))}.ps643{margin-left:13px;margin-top:-77px}.s682{min-width:880px;width:880px;min-height:71px}.c1015{height:71px}.s683{min-width:966px;width:966px;min-height:153px}.s684{min-width:960px;width:960px;min-height:73px}.s685{min-width:960px;width:960px;min-height:74px}.ps644{margin-top:-1672px}.s686{min-width:960px;width:960px}.s687{min-width:960px;min-height:106px}.ps646{margin-top:17px}.s688{min-width:960px;width:960px;min-height:68px}.ps647{margin-left:12px}.s689{min-width:938px;width:938px;min-height:39px}.c1020{height:39px}.f211{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f212{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps648{margin-left:342px;margin-top:-3px}.s690{min-width:128px;width:128px;min-height:32px}.f213{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s691{width:128px;height:12px}.ps649{margin-left:20px;margin-top:-3px}.f214{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps651{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s692{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s644{min-width:768px;width:768px;min-height:57px}.s645{min-width:768px;width:768px;min-height:57px}.s646{min-width:55px;width:55px;min-height:57px;height:57px}.i67{left:0;width:55px;height:55px;top:1px}.ps616{margin-left:1px;margin-top:2px}.s647{min-width:170px;width:170px;min-height:52px;height:52px}.i69{width:170px;height:52px}.ps617{margin-left:416px;margin-top:22px}.s648{min-width:34px;width:34px;min-height:14px}.f196{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s649{width:34px;height:9px}.ps618{margin-left:4px;margin-top:12px}.s650{min-width:34px;width:34px;min-height:33px}.c990{height:33px}.f197{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s651{height:19px;transform:scale(1.000) translateY(2px)}.ps619{margin-top:8px}.s652{min-width:54px;width:54px;min-height:41px;height:41px}.i70{width:54px;height:20px;top:10px}.ps620{margin-top:3px}.s653{min-width:768px;min-height:401px}.ps621{margin-top:0}.s654{min-width:768px;width:768px;min-height:73px}.ps622{margin-left:94px}.s655{min-width:642px;width:642px;min-height:73px}.s656{min-width:608px;width:608px;min-height:73px}.c993{height:73px}.f198{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps624{margin-left:0}.s657{min-width:34px;width:34px;min-height:37px}.c994{height:37px}.f199{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s658{height:17px;transform:scale(1.111) translateY(2px)}.f200{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps625{margin-top:5px}.s659{min-width:768px;width:768px;min-height:217px}.ps626{margin-left:104px}.s660{min-width:558px;width:558px;min-height:28px}.s661{min-width:128px;width:128px;min-height:28px}.f201{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s662{width:128px;height:11px}.ps627{margin-left:16px}.ps628{margin-left:16px}.ps629{margin-left:14px}.ps630{margin-left:22px;margin-top:29px}.s663{min-width:294px;width:294px;min-height:21px}.c999{height:21px}.f202{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps631{margin-left:22px;margin-top:5px}.s664{min-width:722px;width:722px;min-height:25px}.f203{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s665{width:722px;height:12px}.ps632{margin-left:22px;margin-top:10px}.s666{min-width:722px;width:722px;min-height:25px}.f204{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps633{margin-left:22px;margin-top:8px}.s667{min-width:722px;width:722px;min-height:25px}.f205{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps634{margin-left:22px;margin-top:10px}.s668{min-width:722px;width:722px;min-height:25px}.f206{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1004{width:max(768px, 100%);margin-top:13px;min-height:1338px}.s669{min-width:768px;width:768px;min-height:1338px}.s670{width:774px;min-height:1338px}.s671{min-width:774px;width:774px;min-height:318px}.ps636{margin-left:25px}.s672{min-width:240px;width:240px;min-height:21px}.c1006{height:21px}.s673{min-width:774px;width:774px;min-height:300px}.s674{min-width:774px;width:774px;min-height:182px}.s675{min-width:768px;width:768px;min-height:58px;height:58px}.ps638{margin-left:8px;margin-top:0}.s676{min-width:706px;width:706px;min-height:56px}.c1009{height:56px}.f207{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.f208{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.s677{min-width:768px;width:768px;min-height:59px}.ps640{margin-left:741px;margin-top:-167px}.s678{min-width:23px;width:23px;min-height:152px}.s679{min-width:21px;width:21px;min-height:33px}.c1012{height:33px}.ps641{margin-left:2px;margin-top:23px}.s680{min-width:21px;width:21px;min-height:34px}.c1013{height:34px}.ps642{margin-left:11px;margin-top:-119px}.s681{min-width:704px;width:704px;min-height:59px}.c1014{height:59px}.f209{font-size:12px;font-size:calc(12px * var(--f))}.f210{font-size:12px;font-size:calc(12px * var(--f))}.ps643{margin-left:11px;margin-top:-62px}.s682{min-width:704px;width:704px;min-height:57px}.c1015{height:57px}.s683{min-width:774px;width:774px;min-height:124px}.s684{min-width:768px;width:768px;min-height:59px}.s685{min-width:768px;width:768px;min-height:59px}.ps644{margin-top:-1338px}.s686{min-width:768px;width:768px}.s687{min-width:768px;min-height:85px}.ps646{margin-top:14px}.s688{min-width:768px;width:768px;min-height:54px}.ps647{margin-left:10px}.s689{min-width:750px;width:750px;min-height:31px}.c1020{height:31px}.f211{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f212{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps648{margin-left:274px;margin-top:-3px}.s690{min-width:102px;width:102px;min-height:26px}.f213{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s691{width:102px;height:10px}.ps649{margin-left:16px;margin-top:-3px}.f214{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps651{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s692{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps613{margin-top:29px}.s644{min-width:480px;width:480px;min-height:153px}.ps614{margin-left:6px}.s645{min-width:464px;width:464px;min-height:153px}.s646{min-width:120px;width:120px;min-height:96px;height:96px}.i67{width:96px;height:96px}.ps616{margin-left:-25px;margin-top:19px}.s647{min-width:196px;width:196px;min-height:59px;height:59px}.i69{width:196px;height:59px}.ps617{margin-left:33px;margin-top:117px}.s648{min-width:140px;width:140px}.s649{width:140px}.ps618{margin-left:324px;margin-top:-143px}.s650{min-width:71px;width:71px;min-height:62px}.c990{height:62px}.f197{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s651{height:37px;transform:scale(1.000) translateY(4px)}.ps619{margin-left:377px;margin-top:-150px}.s652{min-width:87px;width:87px;min-height:75px;height:75px}.i70{width:87px;height:32px;top:21px}.ps620{margin-top:-47px}.s653{min-width:480px;min-height:336px}.ps621{margin-top:-66px}.s654{min-width:480px;width:480px;min-height:230px}.ps622{margin-left:33px}.s655{min-width:447px;width:447px;min-height:230px}.ps623{margin-top:66px}.s656{min-width:414px;width:414px;min-height:164px}.c993{height:164px}.f198{font-size:30px;font-size:calc(30px * var(--f))}.ps624{margin-left:-37px}.s657{min-width:70px;width:70px;min-height:66px}.c994{height:66px}.f199{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s658{height:33px}.f200{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps625{margin-top:46px}.s659{min-width:480px;width:480px;min-height:861px}.ps626{margin-left:33px}.s660{min-width:414px;width:414px;min-height:354px}.s661{min-width:414px;width:414px;min-height:72px}.f201{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s662{width:414px;height:33px}.ps627{margin-left:0;margin-top:21px}.ps628{margin-left:0;margin-top:24px}.ps629{margin-left:0;margin-top:21px}.ps630{margin-left:14px;margin-top:20px}.s663{min-width:462px;width:462px;min-height:91px}.c999{height:91px}.f202{font-size:21px;font-size:calc(21px * var(--f))}.ps631{margin-left:15px;margin-top:0}.s664{min-width:452px;width:452px;min-height:83px}.f203{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s665{width:452px;height:26px}.ps632{margin-left:15px;margin-top:24px}.s666{min-width:452px;width:452px;min-height:82px}.f204{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps633{margin-left:15px;margin-top:20px}.s667{min-width:452px;width:452px;min-height:82px}.f205{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps634{margin-left:15px;margin-top:18px}.s668{min-width:452px;width:452px;min-height:81px}.f206{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:27px}.c1004{width:max(480px, 100%);margin-top:21px;min-height:2375px}.s669{min-width:480px;width:480px;min-height:2375px}.s670{width:486px;min-height:2375px}.s671{min-width:486px;width:486px;min-height:563px}.ps636{margin-left:12px}.s672{min-width:462px;width:462px;min-height:39px}.c1006{height:39px}.s673{min-width:486px;width:486px;min-height:527px}.s674{min-width:486px;width:486px;min-height:317px}.s675{min-width:480px;width:480px;min-height:102px;height:102px}.ps638{margin-left:6px;margin-top:5px}.s676{min-width:413px;width:413px;min-height:82px}.c1009{height:82px}.f207{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f208{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.s677{min-width:480px;width:480px;min-height:107px}.ps640{margin-left:425px;margin-top:-294px}.s678{min-width:58px;width:58px;min-height:267px}.s679{min-width:58px;width:58px;min-height:63px}.c1012{height:63px}.ps641{margin-top:39px}.s680{min-width:58px;width:58px;min-height:63px}.c1013{height:63px}.ps642{margin-left:9px;margin-top:-206px}.s681{min-width:426px;width:426px;min-height:107px}.c1014{height:107px}.f209{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f210{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps643{margin-left:9px;margin-top:-105px}.s682{min-width:413px;width:413px;min-height:102px}.c1015{height:102px}.s683{min-width:486px;width:486px;min-height:216px}.s684{min-width:480px;width:480px;min-height:106px}.s685{min-width:480px;width:480px;min-height:104px}.ps644{margin-top:-2456px}.s686{min-width:480px;width:480px}.s687{min-width:480px}.ps646{margin-top:8px}.s688{min-width:480px;width:480px;min-height:166px}.ps647{margin-left:17px}.s689{min-width:448px;width:448px;min-height:136px}.c1020{height:136px}.f211{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f212{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps648{margin-left:137px}.s690{min-width:99px;width:99px;min-height:30px}.f213{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s691{width:99px;height:18px}.ps649{margin-left:9px}.f214{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps651{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s692{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps613{margin-top:19px}.s644{min-width:320px;width:320px;min-height:102px}.ps614{margin-left:4px}.s645{min-width:309px;width:309px;min-height:102px}.s646{min-width:80px;width:80px;min-height:64px;height:64px}.i67{left:8px;width:64px;height:64px}.ps616{margin-left:-17px;margin-top:13px}.s647{min-width:131px;width:131px;min-height:39px;height:39px}.i69{width:131px;height:39px}.ps617{margin-left:22px;margin-top:78px}.s648{min-width:93px;width:93px;min-height:24px}.f196{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s649{width:93px;height:16px}.ps618{margin-left:216px;margin-top:-95px}.s650{min-width:47px;width:47px;min-height:41px}.c990{height:41px}.f197{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s651{height:25px;transform:scale(1.000) translateY(3px)}.ps619{margin-left:251px;margin-top:-100px}.s652{min-width:58px;width:58px;min-height:50px;height:50px}.i70{width:58px;height:21px;top:15px}.ps620{margin-top:-31px}.s653{min-width:320px;min-height:224px}.ps621{margin-top:-44px}.s654{min-width:320px;width:320px;min-height:153px}.ps622{margin-left:22px}.s655{min-width:298px;width:298px;min-height:153px}.ps623{margin-top:44px}.s656{min-width:276px;width:276px;min-height:109px}.c993{height:109px}.f198{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps624{margin-left:-25px}.s657{min-width:47px;width:47px;min-height:44px}.c994{height:44px}.f199{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s658{height:22px;transform:scale(1.111) translateY(2px)}.f200{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps625{margin-top:31px}.s659{min-width:320px;width:320px;min-height:576px}.ps626{margin-left:22px}.s660{min-width:276px;width:276px;min-height:236px}.s661{min-width:276px;width:276px;min-height:48px}.f201{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s662{width:276px;height:23px}.ps627{margin-left:0;margin-top:14px}.ps628{margin-left:0;margin-top:16px}.ps629{margin-left:0;margin-top:14px}.ps630{margin-left:9px;margin-top:13px}.s663{min-width:308px;width:308px;min-height:61px}.c999{height:61px}.f202{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps631{margin-left:10px;margin-top:0}.s664{min-width:301px;width:301px;min-height:55px}.f203{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s665{width:301px;height:17px}.ps632{margin-left:10px;margin-top:16px}.s666{min-width:301px;width:301px;min-height:55px}.f204{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps633{margin-left:10px;margin-top:13px}.s667{min-width:301px;width:301px;min-height:55px}.f205{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps634{margin-left:10px;margin-top:12px}.s668{min-width:301px;width:301px;min-height:54px}.f206{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:18px}.c1004{width:max(320px, 100%);margin-top:12px;min-height:1584px}.s669{min-width:320px;width:320px;min-height:1584px}.s670{width:326px;min-height:1584px}.s671{min-width:326px;width:326px;min-height:376px}.ps636{margin-left:9px}.s672{min-width:308px;width:308px;min-height:26px}.c1006{height:26px}.s673{min-width:326px;width:326px;min-height:353px}.s674{min-width:326px;width:326px;min-height:213px}.s675{min-width:320px;width:320px;min-height:68px;height:68px}.ps638{margin-left:4px}.s676{min-width:275px;width:275px;min-height:55px}.c1009{height:55px}.f207{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f208{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.s677{min-width:320px;width:320px;min-height:71px}.ps640{margin-left:284px;margin-top:-197px}.s678{min-width:39px;width:39px;min-height:178px}.s679{min-width:39px;width:39px;min-height:42px}.c1012{height:42px}.ps641{margin-top:26px}.s680{min-width:39px;width:39px;min-height:42px}.c1013{height:42px}.ps642{margin-left:7px;margin-top:-138px}.s681{min-width:284px;width:284px;min-height:71px}.c1014{height:71px}.f209{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f210{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps643{margin-left:7px;margin-top:-71px}.s682{min-width:275px;width:275px;min-height:68px}.c1015{height:68px}.s683{min-width:326px;width:326px;min-height:146px}.s684{min-width:320px;width:320px;min-height:71px}.s685{min-width:320px;width:320px;min-height:69px}.ps644{margin-top:-1638px}.s686{min-width:320px;width:320px}.s687{min-width:320px;min-height:132px}.ps646{margin-top:5px}.s688{min-width:320px;width:320px;min-height:111px}.ps647{margin-left:11px}.s689{min-width:299px;width:299px;min-height:91px}.c1020{height:91px}.f211{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f212{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps648{margin-left:91px}.s690{min-width:66px;width:66px;min-height:20px}.f213{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s691{width:66px;height:12px}.ps649{margin-left:6px}.f214{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps651{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s692{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-640-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-640-35.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-960-110.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-111.php)}}@media (min-width:320px) {.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}.c992{background-image:url(images/cirp-csi-2022-480-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-480-35.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}.c992{background-image:url(images/cirp-csi-2022-960-68.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-69.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}.c992{background-image:url(images/cirp-csi-2022-1440-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1440-15.php)}}@media (min-width:480px) {.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}.c992{background-image:url(images/cirp-csi-2022-768-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-768-35.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}.c992{background-image:url(images/cirp-csi-2022-1536-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1536-35.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}.c992{background-image:url(images/cirp-csi-2022-2304-14.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2304-15.php)}}@media (min-width:768px) {.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}.c992{background-image:url(images/cirp-csi-2022-960-70.php)}.webp .c992{background-image:url(images/cirp-csi-2022-960-71.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}.c992{background-image:url(images/cirp-csi-2022-1920-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1920-35.php)}}@media (min-width:960px) {.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}.c992{background-image:url(images/cirp-csi-2022-1200-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1200-35.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}.c992{background-image:url(images/cirp-csi-2022-2400-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2400-35.php)}}@media (min-width:1200px) {.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}.c992{background-image:url(images/cirp-csi-2022-1415-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-1415-29.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}.c992{background-image:url(images/cirp-csi-2022-2830-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2830-29.php)}}@media (min-width:1600px) {.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}.c992{background-image:url(images/cirp-csi-2022-2000-34.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2000-35.php)}}@media (min-width:2000px) {.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}.c992{background-image:url(images/cirp-csi-2022-2131-28.php)}.webp .c992{background-image:url(images/cirp-csi-2022-2131-29.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps613 v48 s644">
<div class="v49 ps614 s645 c986">
<div class="v49 ps615 s646 c987">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a12"><picture class="i68"><source srcset="images/transparentks-64-35.php 1x, images/transparentks-128-35.php 2x, images/transparentks-192-61.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-34.php 1x, images/transparentks-128-34.php 2x, images/transparentks-192-60.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-35.php 1x, images/transparentks-192-35.php 2x, images/transparentks-288-15.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-34.php 1x, images/transparentks-192-34.php 2x, images/transparentks-288-14.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-29.php 1x, images/transparentks-110-29.php 2x, images/transparentks-165-15.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-28.php 1x, images/transparentks-110-28.php 2x, images/transparentks-165-14.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-29.php 1x, images/transparentks-138-29.php 2x, images/transparentks-207-15.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-28.php 1x, images/transparentks-138-28.php 2x, images/transparentks-207-14.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-71.php 1x, images/transparentks-178-71.php 2x, images/transparentks-267-29.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-70.php 1x, images/transparentks-178-70.php 2x, images/transparentks-267-28.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-97.php 1x, images/transparentks-284-63.php 2x, images/transparentks-426-29.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-96.php 1x, images/transparentks-284-62.php 2x, images/transparentks-426-28.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-62.php" title="knowledge &amp; skills logo" alt="ks logo" class="un994 i67"></picture></a>
<?php
    }
?>

</div>
<div class="v49 ps616 s647 c988">
<picture class="i68">
<source srcset="images/k-stransparent-131-27.php 1x, images/k-stransparent-262-27.php 2x, images/k-stransparent-393-15.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-26.php 1x, images/k-stransparent-262-26.php 2x, images/k-stransparent-393-14.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-27.php 1x, images/k-stransparent-392-27.php 2x, images/k-stransparent-588-15.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-26.php 1x, images/k-stransparent-392-26.php 2x, images/k-stransparent-588-14.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-33.php 1x, images/k-stransparent-340-33.php 2x, images/k-stransparent-510-15.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-32.php 1x, images/k-stransparent-340-32.php 2x, images/k-stransparent-510-14.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-35.php 1x, images/k-stransparent-424-69.php 2x, images/k-stransparent-636-15.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-34.php 1x, images/k-stransparent-424-68.php 2x, images/k-stransparent-636-14.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-35.php 1x, images/k-stransparent-530-35.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-34.php 1x, images/k-stransparent-530-34.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-71.php 1x, images/k-stransparent-848-35.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-70.php 1x, images/k-stransparent-848-34.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-34.php" alt="Knowledge an Skills shared by talented engineers" class="un995 i69">
</picture>
</div>
<div class="v49 ps617 s648 c989">
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
<a href="./logout-415c8e.php" class="f196 btn217 v50 s649">Logout</a>
<?php
    }
?>

</div>
<div class="v49 ps618 s650 c990">
<p class="p30 f197"><a href="cirpcsi2022.php"><x-svg class="s651"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v49 ps619 s652 c991">
<a href="cirpcsi2022.php" class="a12"><picture class="i68"><source srcset="images/csi-logo-58-27.php 1x, images/csi-logo-116-27.php 2x, images/csi-logo-174-53.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-26.php 1x, images/csi-logo-116-26.php 2x, images/csi-logo-174-52.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-27.php 1x, images/csi-logo-174-27.php 2x, images/csi-logo-261-15.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-26.php 1x, images/csi-logo-174-26.php 2x, images/csi-logo-261-14.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-33.php 1x, images/csi-logo-108-33.php 2x, images/csi-logo-162-15.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-32.php 1x, images/csi-logo-108-32.php 2x, images/csi-logo-162-14.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-33.php 1x, images/csi-logo-136-65.php 2x, images/csi-logo-204-15.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-32.php 1x, images/csi-logo-136-64.php 2x, images/csi-logo-204-14.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-33.php 1x, images/csi-logo-170-33.php 2x, images/csi-logo-255-15.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-32.php 1x, images/csi-logo-170-32.php 2x, images/csi-logo-255-14.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-67.php 1x, images/csi-logo-272-33.php 2x, images/csi-logo-408-15.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-66.php 1x, images/csi-logo-272-32.php 2x, images/csi-logo-408-14.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-32.php" alt="cirp csi 2022" class="un996 i70"></picture></a>
</div>
</div>
</div>
<div class="v49 ps620 s653 c992"></div>
<div class="ps621 v48 s654">
<div class="v49 ps622 s655 c986">
<div class="v49 ps623 s656 c993">
<p class="p30 f198">6th CIRP Conference on Surface Integrity </p>
<p class="p30 f198">Day 2 presentations replay</p>
</div>
<div class="v49 ps624 s657 c994">
<p class="p30 f199"><a href="cirpcsi2022.php"><x-svg class="s658"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p30 f200"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps625 v48 s659">
<div class="v49 ps626 s660 c986">
<div class="v49 ps615 s661 c995">
<a href="#" class="f201 btn218 v50 s662">8:40 - 10:20 CET</a>
</div>
<div class="v49 ps627 s661 c996">
<a href="cirpcsi2022session2-2.php" class="f201 btn219 v50 s662">10:50 - 12:30 CET</a>
</div>
<div class="v49 ps628 s661 c997">
<a href="cirpcsi2022session2-3.php" class="f201 btn220 v50 s662">14:45 - 16:45 CET</a>
</div>
<div class="v49 ps629 s661 c998">
<a href="cirpcsi2022session2-4.php" class="f201 btn221 v50 s662">17:15 - 19:15 CET</a>
</div>
</div>
<div class="v49 ps630 s663 c999">
<p class="p31 f202">Themes scheduled on Day 2 between 8:40 and 10:20 CET</p>
</div>
<div class="v49 ps631 s664 c1000">
<a href="#anchor1" class="f203 btn222 v50 s665">10- Numerical modelling of Surface Integrity</a>
</div>
<div class="v49 ps632 s666 c1001">
<a href="#anchor2" class="f204 btn223 v50 s665">11- Post-processing of AM Parts</a>
</div>
<div class="v49 ps633 s667 c1002">
<a href="#anchor3" class="f205 btn224 v50 s665">12- Non-Conventional Processes</a>
</div>
<div class="v49 ps634 s668 c1003">
<a href="#anchor4" class="f206 btn225 v50 s665">13- Cutting Processes &amp; Microstructure</a>
</div>
</div>
<div class="c1004">
<div class="ps635 v48 s669">
<div class="s670">
<div class="v49 ps615 s671 c1005">
<div class="v49 ps636 s672 c1006">
<p class="p31 f202">10- Numerical modeling of Surface Integrity</p>
</div>
<div class="v49 ps637 s673 c986">
<div class="v49 ps615 s673 w10">
<div class="v49 ps615 s674 c1007">
<div class="v49 ps615 s675 c1008">
<div class="v49 ps638 s676 c1009">
<p class="p31 f207">Effect of cutting edge radius on cutting force and surface roughness in machining of Ti-6Al-4V<br><span class="f208">Kejia Zhuang, Jinqiang Gao, Tao Ye and Xing Dai</span></p>
</div>
</div>
<div class="v49 ps639 s677 c1010"></div>
<div class="v5 ps351 s488 c870"></div>
</div>
<div class="v49 ps640 s678 c1011">
<div class="v49 ps615 s679 c1012">
<p class="p30 f197"><a onclick="pop&&pop.openPopup('popup83');return false" style="cursor:pointer;"><x-svg class="s651"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v49 ps641 s680 c1013">
<p class="p30 f197"><a onclick="pop&&pop.openPopup('popup84');return false" style="cursor:pointer;"><x-svg class="s651"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c871">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup85');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v49 ps642 s681 c1014">
<p class="p31 f209">Correlation between subsurface properties, the thermo-mechanical process conditions and machining parameters using the CEL simulation method<br><span class="f210">Vinzenz Guski, Robert Wegert, Siegfried Schmauder and Hans-Christian Mohring</span></p>
</div>
<div class="v49 ps643 s682 c1015">
<p class="p31 f207">A modified Johnson-Cook constitutive model for improved thermal softening prediction of machining simulations in C45 steel<br><span class="f208">Joshua Priest, Hassan Ghadbeigi, Sabino Ayvar-Soberanis, Anders Liljerehn and Matthew Way</span></p>
</div>
<div class="v49 ps639 s683 c1016">
<div class="v49 ps615 s684 c1017"></div>
<div class="v49 ps639 s685 c1018"></div>
</div>
<div class="v5 ps585 s616 c513">
<div class="v5 ps33 s617 c557">
<p class="p18"><span class="f188">Numerical analysis of process-tool-interactions in micro milling<br></span><span class="f189">Andreas Lange, Daniel M</span><span class="f189">ü</span><span class="f189">ller, Benjamin Kirsch and Jan C. Aurich</span></p>
</div>
<div class="v5 ps586 s618 c872">
<p class="p18 f188">Effects of asymmetric passivation of tool cutting edge on microstructure evolution when cutting Inconel 718 alloy<br><span class="f189">Cheng Hu, Jue Wang, Liangliang Lin, Fengtian Lin, Changni Fu, Jose Outeiro, Kejia Zhuang</span></p>
</div>
</div>
<div class="v5 ps587 s396 c873">
<div class="v5 ps33 s397 c874">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup86');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c508">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup87');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps358 s413 c380">
<div class="v5 ps359 s399 c875">
<p class="p18 f116">11- Post-processing of AM Parts</p>
</div>
<div class="v5 ps360 s484 c45">
<div class="v5 ps33 s484 w2">
<div class="v5 ps33 s484 c368">
<div class="v5 ps33 s485 c45">
<div class="v5 ps33 s485 w2">
<div class="v5 ps33 s402 c876"></div>
<div class="v5 ps588 s619 c877">
<p class="p18 f188">Quantification and Surface Analysis on Blasting of PBF-LB Additively Manufactured Components<br><span class="f189">Clemens Maucher, Pascal Cera and Hans-Christian Mohring</span></p>
</div>
</div>
</div>
<div class="v5 ps460 s404 c878"></div>
<div class="v5 ps351 s488 c879"></div>
</div>
<div class="v5 ps447 s405 c880">
<div class="v5 ps33 s397 c881">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup88');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c882">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup89');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c883">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup90');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps589 s620 c884">
<p class="p18 f188">Force-controlled burnishing process for high surface integrity on additive manufactured parts<br><span class="f189">Martin Dix and Marco Posdzich</span></p>
</div>
<div class="v5 ps590 s621 c885">
<p class="p18 f188">Effect of Process Parameters on Surface Integrity of LPBF Ti6Al4V<br><span class="f189">D. Simson and S. Kanmani Subbu</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c526">
<div class="v5 ps33 s623 c886"></div>
<div class="v5 ps351 s392 c887"></div>
</div>
<div class="v5 ps591 s624 c888">
<div class="v5 ps33 s625 c889">
<p class="p18 f190">Effect of mechanical finishing on residual stresses and application behavior of wire arc additive manufactured aluminum components<br><span class="f191">Berend Denkena, Marcel Wichmann and Philipp Pillkahn</span></p>
</div>
<div class="v5 ps592 s626 c890">
<p class="p18 f190">Machinability of maraging steel multilayered claddings obtained via laser direct energy deposition in micromilling operations<br><span class="f191">Lucia Lizzul, Marco Sorgato, Rachele Bertolini, Andrea Ghiotti and Stefania Bruschi</span></p>
</div>
</div>
<div class="v5 ps593 s396 c891">
<div class="v5 ps33 s397 c528">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup91');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c529">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup92');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps594 s121"></a>
<div class="v5 ps595 s413 c516">
<div class="v5 ps359 s399 c892">
<p class="p18 f116">12- Non-Conventional Processes</p>
</div>
<div class="v5 ps360 s484 c45">
<div class="v5 ps33 s484 w2">
<div class="v5 ps33 s484 c893">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c894"></div>
<div class="v5 ps596 s627 c895">
<p class="p18 f188"><a>Research on surface integrity optimization of TC-4 alloy surface structureprocessed by picosecond laser <br></a><span class="f189">Guijian Xiao, Ouchuan Lin, Shayu Song and Zhongcai Deng</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s404 c896"></div>
<div class="v5 ps351 s488 c897"></div>
</div>
<div class="v5 ps447 s405 c898">
<div class="v5 ps33 s397 c899">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup93');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c900">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup94');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c901">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup95');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps597 s628 c902">
<p class="p18 f190">Application of RISA grinding method to multiple optical glasses<br><span class="f191">Hinata Takamaru, Tappei Kawasato, Kentaro Watanabe, Masahiko Fukuta, Katsutoshi Tanaka, Yusuke Chibc, Hidebumi Kato, Mikinori Naganc and Yasuhiro Kakinuma</span></p>
</div>
<div class="v5 ps598 s629 c903">
<p class="p18 f188">Electric Discharge Assisted Surface Texturing of Stainless Steel 304<br><span class="f189">Rushikesh Khandizod, Vinay Varghese and Soham Mujumdar</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s622 c45">
<div class="v5 ps33 s622 w2">
<div class="v5 ps33 s622 c351">
<div class="v5 ps33 s623 c904"></div>
<div class="v5 ps351 s392 c905"></div>
</div>
<div class="v5 ps599 s630 c906">
<div class="v5 ps33 s631 c907">
<p class="p18 f162">Comparisons on localized surface modifications of stainless steels induced by laser shock peening and robotic hammer peening <span class="f192">(not available in replay format)<br></span><span class="f163">Hongfei Liua, Tzee Luai Meng, Jing Cao, et al.</span></p>
</div>
<div class="v5 ps600 s620 c908">
<p class="p18 f188">Numerical Investigation of the EDM Induced Temperature Field in a Composite Ceramic<br><span class="f189">R. Hess, M. Olivier, S. Schneider, L. Heidemanns, A. Klink, T. Herrig and T. Bergs</span></p>
</div>
</div>
<div class="v5 ps601 s396 c909">
<div class="v5 ps33 s397 c549">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
<div class="v5 ps357 s387 c550">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup96');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps531 s121"></a>
<div class="v5 ps602 s632 c538">
<div class="v5 ps359 s399 c910">
<p class="p18 f116">13- Cutting Processes &amp; Microstructure</p>
</div>
<div class="v5 ps360 s633 c45">
<div class="v5 ps33 s633 w2">
<div class="v5 ps33 s633 c911">
<div class="v5 ps33 s401 c45">
<div class="v5 ps33 s401 w2">
<div class="v5 ps33 s402 c912"></div>
<div class="v5 ps603 s634 c913">
<p class="p18"><span class="f193"><a>Surface integrity in high-feed roughing of Inconel 718 with SiAlON end mills<br></a></span><span class="f165">Richard Zimmermann, Niklas Michel-Angeli, David Welling, Philipp Ganser, Thomas Bergs</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s487 c914"></div>
<div class="v5 ps351 s488 c915"></div>
</div>
<div class="v5 ps447 s405 c916">
<div class="v5 ps33 s397 c917">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup97');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c918">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup98');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c919">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup99');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps604 s635 c920">
<p class="p18 f164">Machining-induced Surface Integrity in Brass Alloys<br><span class="f165">Emre Tascioglu, Nima Zoghipour, Safian Sharif and Yusuf Kaynak</span></p>
</div>
<div class="v5 ps605 s636 c921">
<p class="p18 f164">Effect of microstructure on the surface integrity of aluminium alloy during orthogonal turning with edge radiused tool<br><span class="f165">Suresh Ellappan, Afzaal Ahmed and M.Azizur Rahman</span></p>
</div>
</div>
</div>
<div class="v5 ps351 s637 c45">
<div class="v5 ps33 s637 w2">
<div class="v5 ps33 s637 c922">
<div class="v5 ps33 s638 c923"></div>
<div class="v5 ps351 s639 c924"></div>
</div>
<div class="v5 ps606 s640 c331">
<div class="v5 ps33 s619 c557">
<p class="p18 f194">Surface Integrity of Diamond Turned (100)Ge<br><span class="f195">M. Tunesi, D.A. Lucca, M.A. Davies, A. Zare, M.C. Gordon, N.E. Sizemore and Y.Q. Wang</span></p>
</div>
<div class="v5 ps607 s641 c925">
<p class="p18 f164">Modeling of surface hardening and roughness induced by turning AISI 4140 QT under different machining conditions<br><span class="f165">Benedict Stampfer, Jeanine Bachmann, Daniel Gauder, David Bottger, Michael Gerstenmeyer, Gisela Lanza, Bernd Wolter and  Volker Schulze</span></p>
</div>
</div>
<div class="v5 ps608 s396 c926">
<div class="v5 ps33 s397 c927">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup100');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c928">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup101');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor4" class="v5 ps609 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v48 ps644 s686"></a>
<div class="btf ps610 v7 s642">
<div class="v5 ps611 s643 c929">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps612 s49 c930">
<div class="v5 ps38 s50 c931">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1144"><source data-srcset="images/transparentks-102-35.php 1x, images/transparentks-204-35.php 2x, images/transparentks-306-61.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-34.php 1x, images/transparentks-204-34.php 2x, images/transparentks-306-60.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-35.php 1x, images/transparentks-306-35.php 2x, images/transparentks-459-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-34.php 1x, images/transparentks-306-34.php 2x, images/transparentks-459-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-39.php 1x, images/transparentks-114-39.php 2x, images/transparentks-171-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-38.php 1x, images/transparentks-114-38.php 2x, images/transparentks-171-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-35.php 1x, images/transparentks-142-99.php 2x, images/transparentks-213-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-34.php 1x, images/transparentks-142-98.php 2x, images/transparentks-213-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-73.php 1x, images/transparentks-178-73.php 2x, images/transparentks-267-31.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-72.php 1x, images/transparentks-178-72.php 2x, images/transparentks-267-30.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-101.php 1x, images/transparentks-284-65.php 2x, images/transparentks-426-31.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-100.php 1x, images/transparentks-284-64.php 2x, images/transparentks-426-30.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-64.php" title="knowledge &amp; skills logo" alt="logo" class="un997 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1145">
<source data-srcset="images/k-stransparent-110-35.php 1x, images/k-stransparent-220-35.php 2x, images/k-stransparent-330-61.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-34.php 1x, images/k-stransparent-220-34.php 2x, images/k-stransparent-330-60.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-35.php 1x, images/k-stransparent-330-35.php 2x, images/k-stransparent-495-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-34.php 1x, images/k-stransparent-330-34.php 2x, images/k-stransparent-495-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-33.php 1x, images/k-stransparent-340-33.php 2x, images/k-stransparent-510-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-32.php 1x, images/k-stransparent-340-32.php 2x, images/k-stransparent-510-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-35.php 1x, images/k-stransparent-424-69.php 2x, images/k-stransparent-636-15.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-34.php 1x, images/k-stransparent-424-68.php 2x, images/k-stransparent-636-14.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-35.php 1x, images/k-stransparent-530-35.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-34.php 1x, images/k-stransparent-530-34.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-71.php 1x, images/k-stransparent-848-35.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-70.php 1x, images/k-stransparent-848-34.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-34.php" alt="Knowledge an Skills shared by talented engineers" class="un998 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c932"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c933"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c934"></div>
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
<div class="v5 ps38 s69 c935">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v51 ps645 s687 c1019">
<div class="ps646 v48 s688">
<div class="v49 ps647 s689 c1020">
<p class="p31 f211">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f212"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v49 ps648 s690 c1021">
<a href="javascript:void(0)" class="denyConsent f213 btn226 v50 s691">Refuse</a>
</div>
<div class="v49 ps649 s690 c1021">
<a href="javascript:void(0)" class="allowConsent f214 btn227 v50 s691">OK</a>
</div>
</div>
</div>
<div id="popup101" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps650">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1022">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c240">
<div class="player un999 pl88">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-440.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c241">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c242">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c243">
<a onclick="pop&&pop.closePopup('popup101');return false" style="cursor:pointer;" class="f67 btn197 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup100" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps652">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1023">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c936">
<div class="player un1000 pl89">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-588.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c937">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c938">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c249">
<a onclick="pop&&pop.closePopup('popup100');return false" style="cursor:pointer;" class="f67 btn198 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup99" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps653">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1024">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c939">
<div class="player un1001 pl90">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-573.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c940">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c941">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c942">
<a onclick="pop&&pop.closePopup('popup99');return false" style="cursor:pointer;" class="f67 btn199 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup98" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps654">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1025">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c258">
<div class="player un1002 pl91">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-633.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c943">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c944">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c250">
<a onclick="pop&&pop.closePopup('popup98');return false" style="cursor:pointer;" class="f67 btn200 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup97" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps655">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1026">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c264">
<div class="player un1003 pl92">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S13-462.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c945">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c946">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c947">
<a onclick="pop&&pop.closePopup('popup97');return false" style="cursor:pointer;" class="f67 btn201 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup96" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps656">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1027">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c948">
<div class="player un1004 pl93">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-372.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c949">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c950">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c951">
<a onclick="pop&&pop.closePopup('popup96');return false" style="cursor:pointer;" class="f67 btn202 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup102" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps657">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1028">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c265">
<div class="player un1005 pl94">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-400.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c266">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c267">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c268">
<a onclick="pop&&pop.closePopup('popup102');return false" style="cursor:pointer;" class="f67 btn203 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup95" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps658">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1029">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c952">
<div class="player un1006 pl95">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-651.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c953">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c954">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c274">
<a onclick="pop&&pop.closePopup('popup95');return false" style="cursor:pointer;" class="f67 btn204 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup94" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps659">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1030">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c955">
<div class="player un1007 pl96">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-472.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c956">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c957">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c958">
<a onclick="pop&&pop.closePopup('popup94');return false" style="cursor:pointer;" class="f67 btn205 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup93" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps660">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1031">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c283">
<div class="player un1008 pl97">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S12-599.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c959">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c960">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c275">
<a onclick="pop&&pop.closePopup('popup93');return false" style="cursor:pointer;" class="f67 btn206 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup92" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps661">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1032">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c289">
<div class="player un1009 pl98">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-389.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c961">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c962">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c963">
<a onclick="pop&&pop.closePopup('popup92');return false" style="cursor:pointer;" class="f67 btn207 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup91" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps662">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1033">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c964">
<div class="player un1010 pl99">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-403.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c965">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c966">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c967">
<a onclick="pop&&pop.closePopup('popup91');return false" style="cursor:pointer;" class="f67 btn208 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup90" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps663">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1034">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c290">
<div class="player un1011 pl100">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-655.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c291">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c292">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c293">
<a onclick="pop&&pop.closePopup('popup90');return false" style="cursor:pointer;" class="f67 btn209 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup89" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps664">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1035">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c968">
<div class="player un1012 pl101">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-559.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c969">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c970">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c299">
<a onclick="pop&&pop.closePopup('popup89');return false" style="cursor:pointer;" class="f67 btn210 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup88" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps665">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1036">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c971">
<div class="player un1013 pl102">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S11-572.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c972">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c973">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c974">
<a onclick="pop&&pop.closePopup('popup88');return false" style="cursor:pointer;" class="f67 btn211 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup87" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps666">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1037">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c308">
<div class="player un1014 pl103">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-404.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c975">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c976">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c300">
<a onclick="pop&&pop.closePopup('popup87');return false" style="cursor:pointer;" class="f67 btn212 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup86" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps667">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1038">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c314">
<div class="player un1015 pl104">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-442.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c977">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c978">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c979">
<a onclick="pop&&pop.closePopup('popup86');return false" style="cursor:pointer;" class="f67 btn213 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup85" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps668">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1039">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c980">
<div class="player un1016 pl105">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-379.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c981">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c982">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c702">
<a onclick="pop&&pop.closePopup('popup85');return false" style="cursor:pointer;" class="f67 btn214 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup84" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps669">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1040">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c315">
<div class="player un1017 pl106">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-396.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c316">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c317">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c318">
<a onclick="pop&&pop.closePopup('popup84');return false" style="cursor:pointer;" class="f67 btn215 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup83" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps670">
<div onclick="event.stopPropagation()" class="popup v52 ps651 s692 c1041">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c983">
<div class="player un1018 pl107">
<video preload="metadata" poster="images/poster-3592-4.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S10-582.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c984">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c985">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c324">
<a onclick="pop&&pop.closePopup('popup83');return false" style="cursor:pointer;" class="f67 btn216 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session2.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>