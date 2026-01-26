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
            $redirect = 'cirpcsi2022session2-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: participant.html');
            exit;
        }
    }
    $pageID = '0B0D709B-FE71-4D06-AB4F-7E4B29B81FD6';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-3.php';
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
<title>Day 2 sessions 14h45 to 16h45</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-3.php">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Day 2 sessions 14h45 to 16h45">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Lato-Black.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@media (min-width:360px) and (max-width:374px) {body{zoom:1.1250}}@media (min-width:375px) and (max-width:410px) {body{zoom:1.1719}}@media (min-width:411px) and (max-width:427px) {body{zoom:1.2938}}@media (min-width:428px) and (max-width:479px) {body{zoom:1.3374}}@media (min-width:600px) and (max-width:767px) {body{zoom:1.2500}}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Black.woff2') format('woff2'),url('css/Lato-Black.woff') format('woff');font-weight:900}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Regular.woff2') format('woff2'),url('css/Lato-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Lato";src:url('css/Lato-Italic.woff2') format('woff2'),url('css/Lato-Italic.woff') format('woff');font-weight:400;font-style:italic}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.btf{display:none}#consentBanner{position:fixed;bottom:0;z-index:9999}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}body{overflow-y:scroll}#b{background-color:transparent}.ps803{position:relative;margin-top:0}.v58{display:block;vertical-align:top}.s807{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.v59{display:inline-block;vertical-align:top}.ps804{position:relative;margin-left:0;margin-top:0}.s808{min-width:1920px;width:1920px;min-height:142px}.ps805{position:relative;margin-left:0;margin-top:0}.s809{min-width:165px;width:165px;min-height:142px;height:142px}.c1272{z-index:3;pointer-events:auto}.a14{display:block}.i75{position:absolute;left:12px;width:142px;height:142px;top:0;border:0}.i76{width:100%;height:100%;display:inline-block;-webkit-transform:translate3d(0,0,0)}.ps806{position:relative;margin-left:-21px;margin-top:6px}.s810{min-width:424px;width:424px;min-height:130px;height:130px}.c1273{z-index:1;pointer-events:auto}.i77{position:absolute;left:0;width:424px;height:130px;top:0;border:0}.ps807{position:relative;margin-left:1038px;margin-top:54px}.s811{min-width:84px;width:84px;min-height:36px}.c1274{z-index:22;pointer-events:auto}.f238{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.264;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:6px;padding-bottom:6px;margin-top:0;margin-bottom:0}.btn283{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn283:hover{background-color:#82939e;border-color:#000;color:#000}.btn283:active{background-color:#677a85;border-color:#000;color:#808080}.v60{display:inline-block;overflow:hidden;outline:0}.s812{width:84px;padding-right:0;height:24px}.ps808{position:relative;margin-left:10px;margin-top:30px}.s813{min-width:84px;width:84px;min-height:82px}.c1275{z-index:20;pointer-events:auto;overflow:hidden;height:82px}.p34{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f239{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.605;letter-spacing:2.00px;color:#181b28;background-color:initial}.s814{display:inline-block;height:48px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.000) translateY(5px)}.ps809{position:relative;margin-left:0;margin-top:21px}.s815{min-width:136px;width:136px;min-height:100px;height:100px}.c1276{z-index:18;pointer-events:auto}.i78{position:absolute;left:0;width:136px;height:50px;top:25px;border:0}.ps810{position:relative;margin-top:8px}.s816{width:100%;min-width:1920px;min-height:744px}.c1277{z-index:21;pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-image:url(images/cirp-csi-2022-320-41.php);background-color:transparent;background-repeat:no-repeat;background-position:50% 0;background-size:contain;background-clip:padding-box}.webp .c1277{background-image:url(images/cirp-csi-2022-320-47.php)}.ps811{position:relative;margin-top:60px}.s817{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:160px}.ps812{position:relative;margin-left:240px;margin-top:0}.s818{min-width:1600px;width:1600px;min-height:160px}.ps813{position:relative;margin-left:0;margin-top:0}.s819{min-width:1520px;width:1520px;min-height:160px}.c1278{z-index:2;pointer-events:auto;overflow:hidden;height:160px}.f240{font-family:Lato;font-size:48px;font-size:calc(48px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps814{position:relative;margin-left:-4px;margin-top:0}.s820{min-width:84px;width:84px;min-height:80px}.c1279{z-index:265;pointer-events:auto;overflow:hidden;height:80px}.f241{font-family:Arial, Helvetica, sans-serif;font-size:48px;font-size:calc(48px * var(--f));line-height:1.022;letter-spacing:2.00px;color:#80391d;background-color:initial}.s821{display:inline-block;height:43px;padding-right:2px;vertical-align:top;transform-origin:50% 100%;transform:scale(1.111) translateY(3px)}.f242{font-family:Lato;font-size:19px;font-size:calc(19px * var(--f));line-height:1.106;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:2.00px;color:#80391d;background-color:initial;text-shadow:none}.ps815{position:relative;margin-top:108px}.s822{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:521px}.ps816{position:relative;margin-left:260px;margin-top:0}.s823{min-width:1400px;width:1400px;min-height:70px}.s824{min-width:320px;width:320px;min-height:70px}.c1280{z-index:23;pointer-events:auto}.f243{font-family:"Helvetica Neue", sans-serif;font-size:24px;font-size:calc(24px * var(--f));line-height:1.209;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:21px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn284{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn284:hover{background-color:#82939e;border-color:#000;color:#000}.btn284:active{background-color:#677a85;border-color:#000;color:#808080}.s825{width:320px;padding-right:0;height:29px}.ps817{position:relative;margin-left:40px;margin-top:0}.c1281{z-index:24;pointer-events:auto}.btn285{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn285:hover{background-color:#82939e;border-color:#000;color:#000}.btn285:active{background-color:#677a85;border-color:#000;color:#808080}.ps818{position:relative;margin-left:40px;margin-top:0}.c1282{z-index:25;pointer-events:auto}.btn286{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn286:hover{background-color:#82939e;border-color:#000;color:#000}.btn286:active{background-color:#677a85;border-color:#000;color:#808080}.ps819{position:relative;margin-left:40px;margin-top:0}.c1283{z-index:26;pointer-events:auto}.btn287{border:0;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:#987b3b;background-clip:padding-box;color:#fff}.btn287:hover{background-color:#82939e;border-color:#000;color:#000}.btn287:active{background-color:#677a85;border-color:#000;color:#808080}.ps820{position:relative;margin-left:55px;margin-top:43px}.s826{min-width:845px;width:845px;min-height:51px}.c1284{z-index:27;pointer-events:auto;overflow:hidden;height:51px}.p35{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f244{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#987b3b;background-color:initial;text-shadow:none}.ps821{position:relative;margin-left:55px;margin-top:34px}.s827{min-width:1805px;width:1805px;min-height:63px}.c1285{z-index:28;pointer-events:auto}.f245{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn288{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn288:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn288:active{background-color:#677a85;border-color:#000;color:#fff}.s828{width:1805px;padding-right:0;height:34px}.ps822{position:relative;margin-left:55px;margin-top:22px}.s829{min-width:1805px;width:1805px;min-height:63px}.c1286{z-index:29;pointer-events:auto}.f246{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn289{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn289:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn289:active{background-color:#677a85;border-color:#000;color:#fff}.ps823{position:relative;margin-left:55px;margin-top:19px}.s830{min-width:1805px;width:1805px;min-height:63px}.c1287{z-index:30;pointer-events:auto}.f247{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn290{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn290:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn290:active{background-color:#677a85;border-color:#000;color:#fff}.s831{width:1805px;padding-right:0;height:34px}.ps824{position:relative;margin-left:55px;margin-top:24px}.s832{min-width:1805px;width:1805px;min-height:63px}.c1288{z-index:31;pointer-events:auto}.f248{font-family:"Helvetica Neue", sans-serif;font-size:28px;font-size:calc(28px * var(--f));line-height:1.215;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:left;padding-top:15px;padding-bottom:14px;margin-top:0;margin-bottom:0}.btn291{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000}.btn291:hover{background-color:#987b3b;border-color:#000;color:#fff}.btn291:active{background-color:#677a85;border-color:#000;color:#fff}.c1289{display:block;position:relative;width:max(1920px, 100%);overflow:hidden;margin-top:34px;min-height:3903px}.ps825{position:relative;margin-top:0}.s833{pointer-events:none;min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:3903px}.s834{width:1926px;margin-left:-3px;min-height:3903px}.s835{min-width:1926px;width:1926px;min-height:935px}.c1290{z-index:32}.w12{line-height:0}.s836{min-width:1926px;width:1926px;min-height:792px}.c1291{z-index:89}.ps826{position:relative;margin-left:58px;margin-top:0}.s837{min-width:600px;width:600px;min-height:51px}.c1292{z-index:90;pointer-events:auto;overflow:hidden;height:51px}.ps827{position:relative;margin-left:0;margin-top:-3px}.s838{min-width:1926px;width:1926px;min-height:447px}.s839{min-width:1926px;width:1926px;min-height:447px}.c1293{z-index:91}.s840{min-width:1926px;width:1926px;min-height:153px}.s841{min-width:1920px;width:1920px;min-height:147px}.c1294{z-index:93;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#f7fcff;background-clip:padding-box}.ps828{position:relative;margin-left:23px;margin-top:-139px}.s842{min-width:1764px;width:1764px;min-height:134px}.c1295{z-index:94;pointer-events:auto;overflow:hidden;height:134px}.f249{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f250{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps829{position:relative;margin-left:0;margin-top:-6px}.s843{min-width:1920px;width:1920px;min-height:147px}.c1296{z-index:92;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps830{position:relative;margin-left:1843px;margin-top:-413px}.s844{min-width:54px;width:54px;min-height:380px}.c1297{z-index:96}.s845{min-width:54px;width:54px;min-height:86px}.c1298{z-index:105;pointer-events:auto;overflow:hidden;height:86px}.ps831{position:relative;margin-left:23px;margin-top:-283px}.s846{min-width:1764px;width:1764px;min-height:133px}.c1299{z-index:100;pointer-events:auto;overflow:hidden;height:133px}.f251{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.f252{font-family:Lato;font-size:30px;font-size:calc(30px * var(--f));line-height:1.668;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;letter-spacing:normal;color:#53646f;background-color:initial;text-shadow:none}.ps832{position:relative;margin-left:0;margin-top:-10px}.s847{min-width:1926px;width:1926px;min-height:153px}.c1300{z-index:111}.c1301{z-index:112}.c1302{z-index:113;border:3px solid #987b3b;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#fff;background-clip:padding-box}.ps833{position:relative;margin-left:23px;margin-top:-135px}.s848{min-width:1760px;width:1760px;min-height:132px}.c1303{z-index:114;pointer-events:auto;overflow:hidden;height:132px}.ps834{position:relative;margin-left:1843px;margin-top:-122px}.c1304{z-index:115;pointer-events:auto;overflow:hidden;height:86px}.ps835{position:relative;margin-left:0;margin-top:-3903px}.s849{min-width:1920px;width:1920px;min-height:1px}.v61{display:none;vertical-align:top}.s850{width:100%;min-width:1920px;min-height:198px}.c1305{pointer-events:none;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#808080;background-clip:padding-box}.ps837{position:relative;margin-top:34px}.s851{min-width:1920px;width:1920px;margin-left:auto;margin-right:auto;min-height:142px}.ps838{position:relative;margin-left:24px;margin-top:0}.s852{min-width:1876px;width:1876px;min-height:78px}.c1306{pointer-events:auto;overflow:hidden;height:78px}.f253{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f254{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:18px;font-size:calc(18px * var(--f));line-height:1.390;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#e0b95b;background-color:initial;text-shadow:none}.ps839{position:relative;margin-left:684px;margin-top:0}.s853{min-width:256px;width:256px;min-height:64px}.c1307{pointer-events:auto}.f255{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn292{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#677a85;background-clip:padding-box;color:#fff}.btn292:hover{background-color:#82939e;border-color:#000;color:#000}.btn292:active{background-color:#181b28;border-color:#000;color:#808080}.s854{width:256px;padding-right:0;height:24px}.ps840{position:relative;margin-left:40px;margin-top:0}.f256{font-family:Lato;font-size:20px;font-size:calc(20px * var(--f));line-height:1.201;font-weight:900;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;padding-top:20px;padding-bottom:20px;margin-top:0;margin-bottom:0}.btn293{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;background-clip:padding-box;color:#fff}.btn293:hover{background-color:#82939e;border-color:#000;color:#000}.btn293:active{background-color:#181b28;border-color:#000;color:#808080}.ps841{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435332;pointer-events:none;visibility:hidden;opacity:0}.v62{display:inline-block;vertical-align:top;pointer-events:auto}.ps842{position:relative;margin-top:calc(50vh - 543px);margin-top:calc(var(--vh, 1vh) * 50 - 543px);-webkit-transform:translate3d(0,0,0)}.s855{width:100%;min-width:1920px;min-height:1087px;height:1087px}.c1308{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps843{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435327;pointer-events:none;visibility:hidden;opacity:0}.c1309{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps844{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435322;pointer-events:none;visibility:hidden;opacity:0}.c1310{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps845{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435317;pointer-events:none;visibility:hidden;opacity:0}.c1311{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps846{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435312;pointer-events:none;visibility:hidden;opacity:0}.c1312{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps847{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435307;pointer-events:none;visibility:hidden;opacity:0}.c1313{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps848{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435302;pointer-events:none;visibility:hidden;opacity:0}.c1314{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps849{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435297;pointer-events:none;visibility:hidden;opacity:0}.c1315{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps850{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435292;pointer-events:none;visibility:hidden;opacity:0}.c1316{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps851{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435287;pointer-events:none;visibility:hidden;opacity:0}.c1317{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps852{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435282;pointer-events:none;visibility:hidden;opacity:0}.c1318{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps853{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435277;pointer-events:none;visibility:hidden;opacity:0}.c1319{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps854{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435272;pointer-events:none;visibility:hidden;opacity:0}.c1320{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps855{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435267;pointer-events:none;visibility:hidden;opacity:0}.c1321{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps856{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435262;pointer-events:none;visibility:hidden;opacity:0}.c1322{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps857{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435257;pointer-events:none;visibility:hidden;opacity:0}.c1323{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps858{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435252;pointer-events:none;visibility:hidden;opacity:0}.c1324{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps859{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435247;pointer-events:none;visibility:hidden;opacity:0}.c1325{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps860{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435242;pointer-events:none;visibility:hidden;opacity:0}.c1326{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps861{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435237;pointer-events:none;visibility:hidden;opacity:0}.c1327{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps862{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435232;pointer-events:none;visibility:hidden;opacity:0}.c1328{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps863{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435227;pointer-events:none;visibility:hidden;opacity:0}.c1329{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps864{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435222;pointer-events:none;visibility:hidden;opacity:0}.c1330{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}.ps865{display:block;position:fixed;left:0;top:0;width:100%;height:calc(100vh + env(safe-area-inset-bottom));overflow-x:hidden;z-index:2146435217;pointer-events:none;visibility:hidden;opacity:0}.c1331{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#181b28;background-clip:padding-box}@media (min-width:1200px) and (max-width:1919px) {.ps803{margin-top:4px}.s807{min-width:1200px;width:1200px;min-height:89px}.s808{min-width:1200px;width:1200px;min-height:89px}.s809{min-width:115px;width:115px;min-height:89px;height:89px}.i75{left:13px;width:89px;height:89px}.ps806{margin-left:-16px;margin-top:4px}.s810{min-width:265px;width:265px;min-height:81px;height:81px}.i77{width:265px;height:81px}.ps807{margin-left:640px;margin-top:30px}.s811{min-width:52px;width:52px;min-height:22px}.f238{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:4px;padding-bottom:3px}.s812{width:52px;height:15px}.ps808{margin-left:7px;margin-top:15px}.s813{min-width:52px;width:52px;min-height:51px}.c1275{height:51px}.f239{font-size:30px;font-size:calc(30px * var(--f));line-height:1.601}.s814{height:30px;transform:scale(1.000) translateY(3px)}.ps809{margin-top:9px}.s815{min-width:85px;width:85px;min-height:63px;height:63px}.i78{width:85px;height:31px;top:16px}.ps810{margin-top:5px}.s816{min-width:1200px;min-height:494px}.ps811{margin-top:4px}.s817{min-width:1200px;width:1200px;min-height:116px}.ps812{margin-left:150px}.s818{min-width:999px;width:999px;min-height:116px}.s819{min-width:950px;width:950px;min-height:116px}.c1278{height:116px}.f240{font-size:30px;font-size:calc(30px * var(--f))}.ps814{margin-left:-3px}.s820{min-width:52px;width:52px;min-height:58px}.c1279{height:58px}.f241{font-size:30px;font-size:calc(30px * var(--f));line-height:1.034}.s821{height:27px;transform:scale(1.111) translateY(2px)}.f242{font-size:14px;font-size:calc(14px * var(--f));line-height:1.072}.ps815{margin-top:49px}.s822{min-width:1200px;width:1200px;min-height:345px}.ps816{margin-left:164px}.s823{min-width:872px;width:872px;min-height:44px}.s824{min-width:200px;width:200px;min-height:44px}.f243{font-size:15px;font-size:calc(15px * var(--f));line-height:1.201;padding-top:13px;padding-bottom:13px}.s825{width:200px;height:18px}.ps817{margin-left:25px}.ps818{margin-left:25px}.ps819{margin-left:22px}.ps820{margin-left:34px;margin-top:53px}.s826{min-width:485px;width:485px;min-height:35px}.c1284{height:35px}.f244{font-size:18px;font-size:calc(18px * var(--f))}.ps821{margin-left:34px;margin-top:10px}.s827{min-width:1129px;width:1129px;min-height:39px}.f245{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.s828{width:1129px;height:21px}.ps822{margin-left:34px;margin-top:13px}.s829{min-width:1129px;width:1129px;min-height:39px}.f246{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.ps823{margin-left:34px;margin-top:12px}.s830{min-width:1129px;width:1129px;min-height:40px}.f247{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:10px;padding-bottom:9px}.s831{width:1129px;height:21px}.ps824{margin-left:34px;margin-top:15px}.s832{min-width:1129px;width:1129px;min-height:39px}.f248{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:9px;padding-bottom:9px}.c1289{width:max(1200px, 100%);margin-top:31px;min-height:2454px}.s833{min-width:1200px;width:1200px;min-height:2454px}.s834{width:1206px;min-height:2454px}.s835{min-width:1206px;width:1206px;min-height:589px}.s836{min-width:1206px;width:1206px;min-height:500px}.ps826{margin-left:37px}.s837{min-width:375px;width:375px;min-height:32px}.c1292{height:32px}.ps827{margin-top:-4px}.s838{min-width:1206px;width:1206px;min-height:286px}.s839{min-width:1206px;width:1206px;min-height:283px}.s840{min-width:1206px;width:1206px;min-height:98px}.s841{min-width:1200px;width:1200px;min-height:92px}.ps828{margin-left:15px;margin-top:-88px}.s842{min-width:1095px;width:1095px;min-height:85px}.c1295{height:85px}.f249{font-size:18px;font-size:calc(18px * var(--f))}.f250{font-size:18px;font-size:calc(18px * var(--f))}.ps829{margin-top:-5px}.s843{min-width:1200px;width:1200px;min-height:92px}.ps830{margin-left:1149px;margin-top:-259px}.s844{min-width:33px;width:33px;min-height:237px}.s845{min-width:33px;width:33px;min-height:53px}.c1298{height:53px}.ps831{margin-left:15px;margin-top:-178px}.s846{min-width:1095px;width:1095px;min-height:83px}.c1299{height:83px}.f251{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.f252{font-size:18px;font-size:calc(18px * var(--f));line-height:1.445}.ps832{margin-top:-9px}.s847{min-width:1206px;width:1206px;min-height:98px}.ps833{margin-left:15px;margin-top:-86px}.s848{min-width:1095px;width:1095px;min-height:83px}.c1303{height:83px}.ps834{margin-left:1149px;margin-top:-77px}.c1304{height:53px}.ps835{margin-top:-2454px}.s849{min-width:1200px;width:1200px}.s850{min-width:1200px;min-height:129px}.ps837{margin-top:21px}.s851{min-width:1200px;width:1200px;min-height:84px}.ps838{margin-left:15px}.s852{min-width:1172px;width:1172px;min-height:49px}.c1306{height:49px}.f253{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.f254{font-size:12px;font-size:calc(12px * var(--f));line-height:1.418}.ps839{margin-left:412px;margin-top:-5px}.s853{min-width:160px;width:160px;min-height:40px}.f255{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.s854{width:160px;height:15px}.ps840{margin-left:55px;margin-top:-5px}.f256{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:13px;padding-bottom:12px}.ps842{margin-top:calc(50vh - 339px);margin-top:calc(var(--vh, 1vh) * 50 - 339px)}.s855{min-width:1200px;min-height:679px;height:679px}}@media (min-width:960px) and (max-width:1199px) {.s807{min-width:960px;width:960px;min-height:71px}.s808{min-width:960px;width:960px;min-height:71px}.s809{min-width:69px;width:69px;min-height:71px;height:71px}.i75{left:0;width:69px;height:69px;top:1px}.ps806{margin-left:1px;margin-top:3px}.s810{min-width:212px;width:212px;min-height:65px;height:65px}.i77{width:212px;height:65px}.ps807{margin-left:521px;margin-top:27px}.s811{min-width:42px;width:42px;min-height:18px}.f238{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:4px;padding-bottom:3px}.s812{width:42px;height:11px}.ps808{margin-left:5px;margin-top:15px}.s813{min-width:42px;width:42px;min-height:41px}.c1275{height:41px}.f239{font-size:24px;font-size:calc(24px * var(--f));line-height:1.584}.s814{height:24px;transform:scale(1.000) translateY(2px)}.ps809{margin-top:10px}.s815{min-width:68px;width:68px;min-height:51px;height:51px}.i78{width:68px;height:25px;top:13px}.ps810{margin-top:4px}.s816{min-width:960px;min-height:501px}.ps811{margin-top:0}.s817{min-width:960px;width:960px;min-height:92px}.ps812{margin-left:118px}.s818{min-width:802px;width:802px;min-height:92px}.s819{min-width:760px;width:760px;min-height:92px}.c1278{height:92px}.f240{font-size:24px;font-size:calc(24px * var(--f))}.ps814{margin-left:0}.s820{min-width:42px;width:42px;min-height:46px}.c1279{height:46px}.f241{font-size:24px;font-size:calc(24px * var(--f));line-height:1.084}.s821{height:22px;transform:scale(1.111) translateY(2px)}.f242{font-size:12px;font-size:calc(12px * var(--f));line-height:1.084}.ps815{margin-top:6px}.s822{min-width:960px;width:960px;min-height:269px}.ps816{margin-left:130px}.s823{min-width:697px;width:697px;min-height:35px}.s824{min-width:160px;width:160px;min-height:35px}.f243{font-size:12px;font-size:calc(12px * var(--f));line-height:1.251;padding-top:10px;padding-bottom:10px}.s825{width:160px;height:15px}.ps817{margin-left:20px}.ps818{margin-left:20px}.ps819{margin-left:17px}.ps820{margin-left:27px;margin-top:36px}.s826{min-width:368px;width:368px;min-height:26px}.c1284{height:26px}.f244{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps821{margin-left:27px;margin-top:7px}.s827{min-width:903px;width:903px;min-height:31px}.f245{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.s828{width:903px;height:16px}.ps822{margin-left:27px;margin-top:12px}.s829{min-width:903px;width:903px;min-height:31px}.f246{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.ps823{margin-left:27px;margin-top:10px}.s830{min-width:903px;width:903px;min-height:32px}.f247{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:8px}.s831{width:903px;height:16px}.ps824{margin-left:27px;margin-top:12px}.s832{min-width:903px;width:903px;min-height:31px}.f248{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:8px;padding-bottom:7px}.c1289{width:max(960px, 100%);margin-top:21px;min-height:1961px}.s833{min-width:960px;width:960px;min-height:1961px}.s834{width:966px;min-height:1961px}.s835{min-width:966px;width:966px;min-height:471px}.s836{min-width:966px;width:966px;min-height:399px}.ps826{margin-left:30px}.s837{min-width:300px;width:300px;min-height:26px}.c1292{height:26px}.s838{min-width:966px;width:966px;min-height:227px}.s839{min-width:966px;width:966px;min-height:227px}.s840{min-width:966px;width:966px;min-height:79px}.s841{min-width:960px;width:960px;min-height:73px}.ps828{margin-left:13px;margin-top:-70px}.s842{min-width:882px;width:882px;min-height:66px}.c1295{height:66px}.f249{font-size:15px;font-size:calc(15px * var(--f))}.f250{font-size:15px;font-size:calc(15px * var(--f))}.s843{min-width:960px;width:960px;min-height:74px}.ps830{margin-left:926px;margin-top:-209px}.s844{min-width:28px;width:28px;min-height:190px}.s845{min-width:26px;width:26px;min-height:42px}.c1298{height:42px}.ps831{margin-left:14px;margin-top:-144px}.s846{min-width:880px;width:880px;min-height:67px}.c1299{height:67px}.f251{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.f252{font-size:15px;font-size:calc(15px * var(--f));line-height:1.334}.ps832{margin-top:-8px}.s847{min-width:966px;width:966px;min-height:80px}.ps833{margin-left:13px;margin-top:-72px}.s848{min-width:880px;width:880px;min-height:71px}.c1303{height:71px}.ps834{margin-left:926px;margin-top:-61px}.c1304{height:42px}.ps835{margin-top:-1961px}.s849{min-width:960px;width:960px}.s850{min-width:960px;min-height:106px}.ps837{margin-top:17px}.s851{min-width:960px;width:960px;min-height:68px}.ps838{margin-left:12px}.s852{min-width:938px;width:938px;min-height:39px}.c1306{height:39px}.f253{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.f254{font-size:10px;font-size:calc(10px * var(--f));line-height:1.401}.ps839{margin-left:342px;margin-top:-3px}.s853{min-width:128px;width:128px;min-height:32px}.f255{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.s854{width:128px;height:12px}.ps840{margin-left:20px;margin-top:-3px}.f256{font-size:10px;font-size:calc(10px * var(--f));padding-top:10px;padding-bottom:10px}.ps842{margin-top:calc(50vh - 272px);margin-top:calc(var(--vh, 1vh) * 50 - 272px)}.s855{min-width:960px;min-height:544px;height:544px}}@media (min-width:768px) and (max-width:959px) {.s807{min-width:768px;width:768px;min-height:57px}.s808{min-width:768px;width:768px;min-height:57px}.s809{min-width:55px;width:55px;min-height:57px;height:57px}.i75{left:0;width:55px;height:55px;top:1px}.ps806{margin-left:1px;margin-top:2px}.s810{min-width:170px;width:170px;min-height:52px;height:52px}.i77{width:170px;height:52px}.ps807{margin-left:416px;margin-top:22px}.s811{min-width:34px;width:34px;min-height:14px}.f238{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:3px;padding-bottom:2px}.s812{width:34px;height:9px}.ps808{margin-left:4px;margin-top:12px}.s813{min-width:34px;width:34px;min-height:33px}.c1275{height:33px}.f239{font-size:19px;font-size:calc(19px * var(--f));line-height:1.633}.s814{height:19px;transform:scale(1.000) translateY(2px)}.ps809{margin-top:8px}.s815{min-width:54px;width:54px;min-height:41px;height:41px}.i78{width:54px;height:20px;top:10px}.ps810{margin-top:3px}.s816{min-width:768px;min-height:401px}.ps811{margin-top:0}.s817{min-width:768px;width:768px;min-height:73px}.ps812{margin-left:94px}.s818{min-width:642px;width:642px;min-height:73px}.s819{min-width:608px;width:608px;min-height:73px}.c1278{height:73px}.f240{font-size:19px;font-size:calc(19px * var(--f));line-height:1.685}.ps814{margin-left:0}.s820{min-width:34px;width:34px;min-height:37px}.c1279{height:37px}.f241{font-size:19px;font-size:calc(19px * var(--f));line-height:1.054}.s821{height:17px;transform:scale(1.111) translateY(2px)}.f242{font-size:9px;font-size:calc(9px * var(--f));line-height:1.112}.ps815{margin-top:5px}.s822{min-width:768px;width:768px;min-height:217px}.ps816{margin-left:104px}.s823{min-width:558px;width:558px;min-height:28px}.s824{min-width:128px;width:128px;min-height:28px}.f243{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:9px;padding-bottom:8px}.s825{width:128px;height:11px}.ps817{margin-left:16px}.ps818{margin-left:16px}.ps819{margin-left:14px}.ps820{margin-left:22px;margin-top:29px}.s826{min-width:294px;width:294px;min-height:21px}.c1284{height:21px}.f244{font-size:11px;font-size:calc(11px * var(--f));line-height:1.637}.ps821{margin-left:22px;margin-top:5px}.s827{min-width:722px;width:722px;min-height:25px}.f245{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s828{width:722px;height:12px}.ps822{margin-left:22px;margin-top:10px}.s829{min-width:722px;width:722px;min-height:25px}.f246{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.ps823{margin-left:22px;margin-top:8px}.s830{min-width:722px;width:722px;min-height:25px}.f247{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.s831{width:722px;height:12px}.ps824{margin-left:22px;margin-top:10px}.s832{min-width:722px;width:722px;min-height:25px}.f248{font-size:10px;font-size:calc(10px * var(--f));line-height:1.201;padding-top:7px;padding-bottom:6px}.c1289{width:max(768px, 100%);margin-top:15px;min-height:1570px}.s833{min-width:768px;width:768px;min-height:1570px}.s834{width:774px;min-height:1570px}.s835{min-width:774px;width:774px;min-height:378px}.s836{min-width:774px;width:774px;min-height:319px}.ps826{margin-left:25px}.s837{min-width:240px;width:240px;min-height:21px}.c1292{height:21px}.s838{min-width:774px;width:774px;min-height:183px}.s839{min-width:774px;width:774px;min-height:183px}.s840{min-width:774px;width:774px;min-height:64px}.s841{min-width:768px;width:768px;min-height:58px}.ps828{margin-left:11px;margin-top:-56px}.s842{min-width:706px;width:706px;min-height:53px}.c1295{height:53px}.f249{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f250{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.s843{min-width:768px;width:768px;min-height:60px}.ps830{margin-left:741px;margin-top:-168px}.s844{min-width:23px;width:23px;min-height:152px}.s845{min-width:21px;width:21px;min-height:34px}.c1298{height:34px}.ps831{margin-left:12px;margin-top:-116px}.s846{min-width:704px;width:704px;min-height:54px}.c1299{height:54px}.f251{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.f252{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.ps832{margin-top:-7px}.s847{min-width:774px;width:774px;min-height:66px}.ps833{margin-left:11px;margin-top:-59px}.s848{min-width:704px;width:704px;min-height:57px}.c1303{height:57px}.ps834{margin-left:741px;margin-top:-50px}.c1304{height:34px}.ps835{margin-top:-1570px}.s849{min-width:768px;width:768px}.s850{min-width:768px;min-height:85px}.ps837{margin-top:14px}.s851{min-width:768px;width:768px;min-height:54px}.ps838{margin-left:10px}.s852{min-width:750px;width:750px;min-height:31px}.c1306{height:31px}.f253{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.f254{font-size:8px;font-size:calc(8px * var(--f));line-height:1.501}.ps839{margin-left:274px;margin-top:-3px}.s853{min-width:102px;width:102px;min-height:26px}.f255{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.s854{width:102px;height:10px}.ps840{margin-left:16px;margin-top:-3px}.f256{font-size:8px;font-size:calc(8px * var(--f));line-height:1.251;padding-top:8px;padding-bottom:8px}.ps842{margin-top:calc(50vh - 217px);margin-top:calc(var(--vh, 1vh) * 50 - 217px)}.s855{min-width:768px;min-height:435px;height:435px}}@media (min-width:480px) and (max-width:767px) {.ps803{margin-top:29px}.s807{min-width:480px;width:480px;min-height:153px}.ps804{margin-left:6px}.s808{min-width:464px;width:464px;min-height:153px}.s809{min-width:120px;width:120px;min-height:96px;height:96px}.i75{width:96px;height:96px}.ps806{margin-left:-25px;margin-top:19px}.s810{min-width:196px;width:196px;min-height:59px;height:59px}.i77{width:196px;height:59px}.ps807{margin-left:33px;margin-top:117px}.s811{min-width:140px;width:140px}.s812{width:140px}.ps808{margin-left:324px;margin-top:-143px}.s813{min-width:71px;width:71px;min-height:62px}.c1275{height:62px}.f239{font-size:37px;font-size:calc(37px * var(--f));line-height:1.623}.s814{height:37px;transform:scale(1.000) translateY(4px)}.ps809{margin-left:377px;margin-top:-150px}.s815{min-width:87px;width:87px;min-height:75px;height:75px}.i78{width:87px;height:32px;top:21px}.ps810{margin-top:-47px}.s816{min-width:480px;min-height:336px}.ps811{margin-top:-66px}.s817{min-width:480px;width:480px;min-height:230px}.ps812{margin-left:33px}.s818{min-width:447px;width:447px;min-height:230px}.ps813{margin-top:66px}.s819{min-width:414px;width:414px;min-height:164px}.c1278{height:164px}.f240{font-size:30px;font-size:calc(30px * var(--f))}.ps814{margin-left:-37px}.s820{min-width:70px;width:70px;min-height:66px}.c1279{height:66px}.f241{font-size:37px;font-size:calc(37px * var(--f));line-height:1.028}.s821{height:33px}.f242{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps815{margin-top:46px}.s822{min-width:480px;width:480px;min-height:861px}.ps816{margin-left:33px}.s823{min-width:414px;width:414px;min-height:354px}.s824{min-width:414px;width:414px;min-height:72px}.f243{font-size:27px;font-size:calc(27px * var(--f));line-height:1.223;padding-top:20px;padding-bottom:19px}.s825{width:414px;height:33px}.ps817{margin-left:0;margin-top:21px}.ps818{margin-left:0;margin-top:24px}.ps819{margin-left:0;margin-top:21px}.ps820{margin-left:14px;margin-top:20px}.s826{min-width:462px;width:462px;min-height:91px}.c1284{height:91px}.f244{font-size:21px;font-size:calc(21px * var(--f))}.ps821{margin-left:15px;margin-top:0}.s827{min-width:452px;width:452px;min-height:83px}.f245{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:29px;padding-bottom:28px}.s828{width:452px;height:26px}.ps822{margin-left:15px;margin-top:24px}.s829{min-width:452px;width:452px;min-height:82px}.f246{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-top:28px;padding-bottom:28px}.ps823{margin-left:15px;margin-top:20px}.s830{min-width:452px;width:452px;min-height:82px}.f247{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239;padding-bottom:15px}.s831{width:452px;height:52px}.ps824{margin-left:15px;margin-top:18px}.s832{min-width:452px;width:452px;min-height:81px}.f248{font-size:21px;font-size:calc(21px * var(--f));line-height:1.239}.c1289{width:max(480px, 100%);margin-top:21px;min-height:2870px}.s833{min-width:480px;width:480px;min-height:2870px}.s834{width:486px;min-height:2870px}.s835{min-width:486px;width:486px;min-height:669px}.s836{min-width:486px;width:486px;min-height:563px}.ps826{margin-left:12px}.s837{min-width:462px;width:462px;min-height:39px}.c1292{height:39px}.s838{min-width:486px;width:486px;min-height:317px}.s839{min-width:486px;width:486px;min-height:317px}.s840{min-width:486px;width:486px;min-height:125px}.s841{min-width:480px;width:480px;min-height:110px}.ps828{margin-left:8px;margin-top:-113px}.s842{min-width:417px;width:417px;min-height:122px}.c1295{height:122px}.f249{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f250{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps829{margin-top:-15px}.s843{min-width:480px;width:480px;min-height:106px}.ps830{margin-left:425px;margin-top:-294px}.s844{min-width:58px;width:58px;min-height:267px}.s845{min-width:58px;width:58px;min-height:63px}.c1298{height:63px}.ps831{margin-left:8px;margin-top:-201px}.s846{min-width:417px;width:417px;min-height:102px}.c1299{height:102px}.f251{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.f252{font-size:16px;font-size:calc(16px * var(--f));line-height:1.063}.ps832{margin-top:-6px}.s847{min-width:486px;width:486px;min-height:112px}.ps833{margin-left:8px;margin-top:-103px}.s848{min-width:417px;width:417px;min-height:102px}.c1303{height:102px}.ps834{margin-left:425px;margin-top:-90px}.c1304{height:63px}.ps835{margin-top:-2922px}.s849{min-width:480px;width:480px}.s850{min-width:480px}.ps837{margin-top:8px}.s851{min-width:480px;width:480px;min-height:166px}.ps838{margin-left:17px}.s852{min-width:448px;width:448px;min-height:136px}.c1306{height:136px}.f253{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.f254{font-size:16px;font-size:calc(16px * var(--f));line-height:1.376}.ps839{margin-left:137px}.s853{min-width:99px;width:99px;min-height:30px}.f255{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.s854{width:99px;height:18px}.ps840{margin-left:9px}.f256{font-size:15px;font-size:calc(15px * var(--f));padding-top:6px;padding-bottom:6px}.ps842{margin-top:calc(50vh - 136px);margin-top:calc(var(--vh, 1vh) * 50 - 136px)}.s855{min-width:480px;min-height:273px;height:273px}}@media (max-width:479px) {.ps803{margin-top:19px}.s807{min-width:320px;width:320px;min-height:102px}.ps804{margin-left:4px}.s808{min-width:309px;width:309px;min-height:102px}.s809{min-width:80px;width:80px;min-height:64px;height:64px}.i75{left:8px;width:64px;height:64px}.ps806{margin-left:-17px;margin-top:13px}.s810{min-width:131px;width:131px;min-height:39px;height:39px}.i77{width:131px;height:39px}.ps807{margin-left:22px;margin-top:78px}.s811{min-width:93px;width:93px;min-height:24px}.f238{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232;padding-top:4px;padding-bottom:4px}.s812{width:93px;height:16px}.ps808{margin-left:216px;margin-top:-95px}.s813{min-width:47px;width:47px;min-height:41px}.c1275{height:41px}.f239{font-size:25px;font-size:calc(25px * var(--f));line-height:1.601}.s814{height:25px;transform:scale(1.000) translateY(3px)}.ps809{margin-left:251px;margin-top:-100px}.s815{min-width:58px;width:58px;min-height:50px;height:50px}.i78{width:58px;height:21px;top:15px}.ps810{margin-top:-31px}.s816{min-width:320px;min-height:224px}.ps811{margin-top:-44px}.s817{min-width:320px;width:320px;min-height:153px}.ps812{margin-left:22px}.s818{min-width:298px;width:298px;min-height:153px}.ps813{margin-top:44px}.s819{min-width:276px;width:276px;min-height:109px}.c1278{height:109px}.f240{font-size:20px;font-size:calc(20px * var(--f));line-height:1.701}.ps814{margin-left:-25px}.s820{min-width:47px;width:47px;min-height:44px}.c1279{height:44px}.f241{font-size:25px;font-size:calc(25px * var(--f));line-height:1.041}.s821{height:22px;transform:scale(1.111) translateY(2px)}.f242{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps815{margin-top:31px}.s822{min-width:320px;width:320px;min-height:576px}.ps816{margin-left:22px}.s823{min-width:276px;width:276px;min-height:236px}.s824{min-width:276px;width:276px;min-height:48px}.f243{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:13px;padding-bottom:12px}.s825{width:276px;height:23px}.ps817{margin-left:0;margin-top:14px}.ps818{margin-left:0;margin-top:16px}.ps819{margin-left:0;margin-top:14px}.ps820{margin-left:9px;margin-top:13px}.s826{min-width:308px;width:308px;min-height:61px}.c1284{height:61px}.f244{font-size:14px;font-size:calc(14px * var(--f));line-height:1.644}.ps821{margin-left:10px;margin-top:0}.s827{min-width:301px;width:301px;min-height:55px}.f245{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.s828{width:301px;height:17px}.ps822{margin-left:10px;margin-top:16px}.s829{min-width:301px;width:301px;min-height:55px}.f246{font-size:14px;font-size:calc(14px * var(--f));padding-top:19px;padding-bottom:19px}.ps823{margin-left:10px;margin-top:13px}.s830{min-width:301px;width:301px;min-height:55px}.f247{font-size:14px;font-size:calc(14px * var(--f));padding-top:11px;padding-bottom:10px}.s831{width:301px}.ps824{margin-left:10px;margin-top:12px}.s832{min-width:301px;width:301px;min-height:54px}.f248{font-size:14px;font-size:calc(14px * var(--f));padding-top:10px;padding-bottom:10px}.c1289{width:max(320px, 100%);margin-top:12px;min-height:1914px}.s833{min-width:320px;width:320px;min-height:1914px}.s834{width:326px;min-height:1914px}.s835{min-width:326px;width:326px;min-height:447px}.s836{min-width:326px;width:326px;min-height:376px}.ps826{margin-left:9px}.s837{min-width:308px;width:308px;min-height:26px}.c1292{height:26px}.s838{min-width:326px;width:326px;min-height:213px}.s839{min-width:326px;width:326px;min-height:213px}.s840{min-width:326px;width:326px;min-height:84px}.s841{min-width:320px;width:320px;min-height:73px}.ps828{margin-left:6px;margin-top:-76px}.s842{min-width:278px;width:278px;min-height:81px}.c1295{height:81px}.f249{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f250{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps829{margin-top:-11px}.s843{min-width:320px;width:320px;min-height:71px}.ps830{margin-left:284px;margin-top:-197px}.s844{min-width:39px;width:39px;min-height:178px}.s845{min-width:39px;width:39px;min-height:42px}.c1298{height:42px}.ps831{margin-left:6px;margin-top:-135px}.s846{min-width:278px;width:278px;min-height:68px}.c1299{height:68px}.f251{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.f252{font-size:11px;font-size:calc(11px * var(--f));line-height:1.092}.ps832{margin-top:-6px}.s847{min-width:326px;width:326px;min-height:77px}.ps833{margin-left:6px;margin-top:-70px}.s848{min-width:278px;width:278px;min-height:68px}.c1303{height:68px}.ps834{margin-left:284px;margin-top:-61px}.c1304{height:42px}.ps835{margin-top:-1949px}.s849{min-width:320px;width:320px}.s850{min-width:320px;min-height:132px}.ps837{margin-top:5px}.s851{min-width:320px;width:320px;min-height:111px}.ps838{margin-left:11px}.s852{min-width:299px;width:299px;min-height:91px}.c1306{height:91px}.f253{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.f254{font-size:11px;font-size:calc(11px * var(--f));line-height:1.456}.ps839{margin-left:91px}.s853{min-width:66px;width:66px;min-height:20px}.f255{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.s854{width:66px;height:12px}.ps840{margin-left:6px}.f256{font-size:10px;font-size:calc(10px * var(--f));padding-top:4px;padding-bottom:4px}.ps842{margin-top:calc(50vh - 91px);margin-top:calc(var(--vh, 1vh) * 50 - 91px)}.s855{min-width:320px;min-height:182px;height:182px}}@media (-webkit-min-device-pixel-ratio:2), (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (-webkit-min-device-pixel-ratio:3), (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:2), (min-width:1200px) and (max-width:1919px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (min-width:1200px) and (max-width:1919px) and (-webkit-min-device-pixel-ratio:3), (min-width:1200px) and (max-width:1919px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:2), (min-width:960px) and (max-width:1199px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (min-width:960px) and (max-width:1199px) and (-webkit-min-device-pixel-ratio:3), (min-width:960px) and (max-width:1199px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:2), (min-width:768px) and (max-width:959px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (min-width:768px) and (max-width:959px) and (-webkit-min-device-pixel-ratio:3), (min-width:768px) and (max-width:959px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:2), (min-width:480px) and (max-width:767px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (min-width:480px) and (max-width:767px) and (-webkit-min-device-pixel-ratio:3), (min-width:480px) and (max-width:767px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:2), (max-width:479px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-640-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-640-47.php)}}@media (max-width:479px) and (-webkit-min-device-pixel-ratio:3), (max-width:479px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-115.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-116.php)}}@media (min-width:320px) {.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}.c1277{background-image:url(images/cirp-csi-2022-480-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-480-47.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:2),(min-width:320px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}.c1277{background-image:url(images/cirp-csi-2022-960-82.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-117.php)}}@media (min-width:320px) and (-webkit-min-device-pixel-ratio:3),(min-width:320px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}.c1277{background-image:url(images/cirp-csi-2022-1440-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1440-19.php)}}@media (min-width:480px) {.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}.c1277{background-image:url(images/cirp-csi-2022-768-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-768-47.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:2),(min-width:480px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1536-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1536-47.php)}}@media (min-width:480px) and (-webkit-min-device-pixel-ratio:3),(min-width:480px) and (min-resolution:288dpi) {.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}.c1277{background-image:url(images/cirp-csi-2022-2304-18.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2304-19.php)}}@media (min-width:768px) {.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}.c1277{background-image:url(images/cirp-csi-2022-960-83.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-960-91.php)}}@media (min-width:768px) and (-webkit-min-device-pixel-ratio:2),(min-width:768px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1920-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1920-47.php)}}@media (min-width:960px) {.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}.c1277{background-image:url(images/cirp-csi-2022-1200-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1200-47.php)}}@media (min-width:960px) and (-webkit-min-device-pixel-ratio:2),(min-width:960px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2400-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2400-47.php)}}@media (min-width:1200px) {.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}.c1277{background-image:url(images/cirp-csi-2022-1415-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-1415-41.php)}}@media (min-width:1200px) and (-webkit-min-device-pixel-ratio:2),(min-width:1200px) and (min-resolution:192dpi) {.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2830-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2830-41.php)}}@media (min-width:1600px) {.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}.c1277{background-image:url(images/cirp-csi-2022-2000-41.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2000-47.php)}}@media (min-width:2000px) {.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}.c1277{background-image:url(images/cirp-csi-2022-2131-35.php)}.webp .c1277{background-image:url(images/cirp-csi-2022-2131-41.php)}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-cdc635.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-ca1d40.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link rel="alternate" hreflang="en" href="https://www.ks-conference.net/cirpcsi2022/cirpcsi2022session2-3.php">
<script>!function(){var A=new Image;A.onload=A.onerror=function(){1!=A.height&&document.body.classList.remove("webp")},A.src="data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAD8D+JaQAA3AA/ua1AAA"}();
</script>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/thankyou.2839b9.php" media="print">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/plyr3.773f77.css" media="print">
</head>
<body class="webp" id="b">
<div class="ps803 v58 s807">
<div class="v59 ps804 s808 c1271">
<div class="v59 ps805 s809 c1272">
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
<a href="https://www.ks-conference.net" target="_blank" rel="noopener" class="a14"><picture class="i76"><source srcset="images/transparentks-64-47.php 1x, images/transparentks-128-47.php 2x, images/transparentks-192-66.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/transparentks-64-41.php 1x, images/transparentks-128-41.php 2x, images/transparentks-192-65.php 3x" media="(max-width:479px)"><source srcset="images/transparentks-96-47.php 1x, images/transparentks-192-67.php 2x, images/transparentks-288-19.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/transparentks-96-41.php 1x, images/transparentks-192-41.php 2x, images/transparentks-288-18.php 3x" media="(max-width:767px)"><source srcset="images/transparentks-55-41.php 1x, images/transparentks-110-41.php 2x, images/transparentks-165-19.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/transparentks-55-35.php 1x, images/transparentks-110-35.php 2x, images/transparentks-165-18.php 3x" media="(max-width:959px)"><source srcset="images/transparentks-69-41.php 1x, images/transparentks-138-41.php 2x, images/transparentks-207-19.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/transparentks-69-35.php 1x, images/transparentks-138-35.php 2x, images/transparentks-207-18.php 3x" media="(max-width:1199px)"><source srcset="images/transparentks-89-96.php 1x, images/transparentks-178-96.php 2x, images/transparentks-267-37.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/transparentks-89-84.php 1x, images/transparentks-178-84.php 2x, images/transparentks-267-36.php 3x" media="(max-width:1919px)"><source srcset="images/transparentks-142-132.php 1x, images/transparentks-284-88.php 2x, images/transparentks-426-37.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/transparentks-142-117.php 1x, images/transparentks-284-76.php 2x, images/transparentks-426-36.php 3x" media="(min-width:1920px)"><img src="images/transparentks-284-76.php" title="knowledge &amp; skills logo" alt="ks logo" class="un1298 i75"></picture></a>
<?php
    }
?>

</div>
<div class="v59 ps806 s810 c1273">
<picture class="i76">
<source srcset="images/k-stransparent-131-39.php 1x, images/k-stransparent-262-39.php 2x, images/k-stransparent-393-19.php 3x" type="image/webp" media="(max-width:479px)">
<source srcset="images/k-stransparent-131-33.php 1x, images/k-stransparent-262-33.php 2x, images/k-stransparent-393-18.php 3x" media="(max-width:479px)">
<source srcset="images/k-stransparent-196-39.php 1x, images/k-stransparent-392-39.php 2x, images/k-stransparent-588-19.php 3x" type="image/webp" media="(max-width:767px)">
<source srcset="images/k-stransparent-196-33.php 1x, images/k-stransparent-392-33.php 2x, images/k-stransparent-588-18.php 3x" media="(max-width:767px)">
<source srcset="images/k-stransparent-170-45.php 1x, images/k-stransparent-340-45.php 2x, images/k-stransparent-510-19.php 3x" type="image/webp" media="(max-width:959px)">
<source srcset="images/k-stransparent-170-39.php 1x, images/k-stransparent-340-39.php 2x, images/k-stransparent-510-18.php 3x" media="(max-width:959px)">
<source srcset="images/k-stransparent-212-47.php 1x, images/k-stransparent-424-97.php 2x, images/k-stransparent-636-19.php 3x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/k-stransparent-212-41.php 1x, images/k-stransparent-424-82.php 2x, images/k-stransparent-636-18.php 3x" media="(max-width:1199px)">
<source srcset="images/k-stransparent-265-47.php 1x, images/k-stransparent-530-47.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/k-stransparent-265-41.php 1x, images/k-stransparent-530-41.php 2x" media="(max-width:1919px)">
<source srcset="images/k-stransparent-424-91.php 1x, images/k-stransparent-848-47.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/k-stransparent-424-83.php 1x, images/k-stransparent-848-41.php 2x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-41.php" alt="Knowledge an Skills shared by talented engineers" class="un1299 i77">
</picture>
</div>
<div class="v59 ps807 s811 c1274">
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
<a href="./logout-415c8e.php" class="f238 btn283 v60 s812">Logout</a>
<?php
    }
?>

</div>
<div class="v59 ps808 s813 c1275">
<p class="p34 f239"><a href="cirpcsi2022.php"><x-svg class="s814"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
<div class="v59 ps809 s815 c1276">
<a href="cirpcsi2022.php" class="a14"><picture class="i76"><source srcset="images/csi-logo-58-39.php 1x, images/csi-logo-116-39.php 2x, images/csi-logo-174-58.php 3x" type="image/webp" media="(max-width:479px)"><source srcset="images/csi-logo-58-33.php 1x, images/csi-logo-116-33.php 2x, images/csi-logo-174-57.php 3x" media="(max-width:479px)"><source srcset="images/csi-logo-87-39.php 1x, images/csi-logo-174-59.php 2x, images/csi-logo-261-19.php 3x" type="image/webp" media="(max-width:767px)"><source srcset="images/csi-logo-87-33.php 1x, images/csi-logo-174-33.php 2x, images/csi-logo-261-18.php 3x" media="(max-width:767px)"><source srcset="images/csi-logo-54-45.php 1x, images/csi-logo-108-45.php 2x, images/csi-logo-162-19.php 3x" type="image/webp" media="(max-width:959px)"><source srcset="images/csi-logo-54-39.php 1x, images/csi-logo-108-39.php 2x, images/csi-logo-162-18.php 3x" media="(max-width:959px)"><source srcset="images/csi-logo-68-45.php 1x, images/csi-logo-136-93.php 2x, images/csi-logo-204-19.php 3x" type="image/webp" media="(max-width:1199px)"><source srcset="images/csi-logo-68-39.php 1x, images/csi-logo-136-78.php 2x, images/csi-logo-204-18.php 3x" media="(max-width:1199px)"><source srcset="images/csi-logo-85-45.php 1x, images/csi-logo-170-45.php 2x, images/csi-logo-255-19.php 3x" type="image/webp" media="(max-width:1919px)"><source srcset="images/csi-logo-85-39.php 1x, images/csi-logo-170-39.php 2x, images/csi-logo-255-18.php 3x" media="(max-width:1919px)"><source srcset="images/csi-logo-136-87.php 1x, images/csi-logo-272-45.php 2x, images/csi-logo-408-19.php 3x" type="image/webp" media="(min-width:1920px)"><source srcset="images/csi-logo-136-79.php 1x, images/csi-logo-272-39.php 2x, images/csi-logo-408-18.php 3x" media="(min-width:1920px)"><img src="images/csi-logo-272-39.php" alt="cirp csi 2022" class="un1300 i78"></picture></a>
</div>
</div>
</div>
<div class="v59 ps810 s816 c1277"></div>
<div class="ps811 v58 s817">
<div class="v59 ps812 s818 c1271">
<div class="v59 ps813 s819 c1278">
<p class="p34 f240">6th CIRP Conference on Surface Integrity </p>
<p class="p34 f240">Day 2 presentations replay</p>
</div>
<div class="v59 ps814 s820 c1279">
<p class="p34 f241"><a href="cirpcsi2022.php"><x-svg class="s821"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
<p class="p34 f242"><a href="cirpcsi2022.php">Home</a></p>
</div>
</div>
</div>
<div class="ps815 v58 s822">
<div class="v59 ps816 s823 c1271">
<div class="v59 ps805 s824 c1280">
<a href="cirpcsi2022session2.php" class="f243 btn284 v60 s825">8:40 - 10:20 CET</a>
</div>
<div class="v59 ps817 s824 c1281">
<a href="cirpcsi2022session2-2.php" class="f243 btn285 v60 s825">10:50 - 12:30 CET</a>
</div>
<div class="v59 ps818 s824 c1282">
<a href="#" class="f243 btn286 v60 s825">14:45 - 16:45 CET</a>
</div>
<div class="v59 ps819 s824 c1283">
<a href="cirpcsi2022session2-4.php" class="f243 btn287 v60 s825">17:15 - 19:15 CET</a>
</div>
</div>
<div class="v59 ps820 s826 c1284">
<p class="p35 f244">Themes scheduled on Day 2 between 14:45 and 16:45 CET</p>
</div>
<div class="v59 ps821 s827 c1285">
<a href="#anchor1" class="f245 btn288 v60 s828">18- Cutting Processes &amp; Residual Stresses</a>
</div>
<div class="v59 ps822 s829 c1286">
<a href="#anchor2" class="f246 btn289 v60 s828">19- Additive Manufacturing</a>
</div>
<div class="v59 ps823 s830 c1287">
<a href="#anchor3" class="f247 btn290 v60 s831">20- Composite structures / Surface mechanical treatments</a>
</div>
<div class="v59 ps824 s832 c1288">
<a href="#anchor4" class="f248 btn291 v60 s831">21- Cutting Processes &amp; Microstructure / Cutting processes &amp; surface topography</a>
</div>
</div>
<div class="c1289">
<div class="ps825 v58 s833">
<div class="s834">
<div class="v59 ps805 s835 c1290">
<div class="v59 ps805 s835 c1271">
<div class="v59 ps805 s835 w12">
<div class="v59 ps805 s836 c1291">
<div class="v59 ps826 s837 c1292">
<p class="p35 f244">18- Cutting Processes &amp; Residual Stresses</p>
</div>
<div class="v59 ps827 s838 c1271">
<div class="v59 ps805 s838 w12">
<div class="v59 ps805 s839 c1293">
<div class="v59 ps805 s840 c1271">
<div class="v59 ps805 s840 w12">
<div class="v59 ps805 s841 c1294"></div>
<div class="v59 ps828 s842 c1295">
<p class="p35 f249">Predictive modelling of cryogenic hard turning of AISI 52100 based on response surface methodology for the use in soft sensors<br><span class="f250">Felix Grossmann, Stephan Basten, Benjamin Kirsch, Werner Ankener, Marek Smaga, Tilmann Beck, Julian Uebel, Jorg Seewig and Jan C. Aurich</span></p>
</div>
</div>
</div>
<div class="v59 ps829 s843 c1296"></div>
<div class="v5 ps753 s488 c1137"></div>
</div>
<div class="v59 ps830 s844 c1297">
<div class="v59 ps805 s845 c1298">
<p class="p34 f239"><a onclick="pop&&pop.openPopup('popup123');return false" style="cursor:pointer;"><x-svg class="s814"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s397 c1138">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup124');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c1139">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup125');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v59 ps831 s846 c1299">
<p class="p35 f251">Evaluation of the influence of different milling parameters and tool wear on the rim zone of a 5-axis milled large gear<br><span class="f252">Christoph Zachert, Ren Greschert, Daniel Schraknepper, Jens Brimmers and Thomas Bergs</span></p>
</div>
<div class="v5 ps754 s761 c1140">
<p class="p18 f164">Residual stress profiles induced by machining of two types of 27MnCr5 hardened steels<br><span class="f165">Sangil Han, Oussama Cherguy, Frederic Cabanettes, Herve Pascal, Mehmet Cici and Joel Rech</span></p>
</div>
</div>
</div>
<div class="v5 ps755 s762 c45">
<div class="v5 ps33 s762 w2">
<div class="v5 ps33 s390 c820">
<div class="v5 ps33 s391 c1141"></div>
<div class="v5 ps351 s392 c1142"></div>
</div>
<div class="v5 ps756 s763 c718">
<div class="v5 ps757 s764 c1143">
<p class="p18 f164">Advanced experimental setup for in-process measurement of thermo-mechanical load and tool wear when drive shaft turning<br><span class="f165">Mustapha Abouridouane, Thorsten Augspurger, Niklas Reinisch, Ali Rajaei, Mauricio Fernandez, Tarik Viehmann, Thomas Bergs</span></p>
</div>
<div class="v5 ps758 s765 c1144">
<p class="p18 f164">Effect on surface integrity of high-productivity finishing on Ti-6Al-4V with wiper edge length tool<br><span class="f165">A. Dangremont Di Crescenzo, M. Mousseigne and W. Rubio</span></p>
</div>
</div>
<div class="v5 ps759 s396 c922">
<div class="v5 ps33 s387 c1145">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup126');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c1146">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup127');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v59 ps832 s847 c1300">
<div class="v59 ps805 s847 c1301">
<div class="v59 ps805 s843 c1302"></div>
<div class="v59 ps833 s848 c1303">
<p class="p35 f249">Residual Stress Maps Determination with global Digital Image Correlation<br><span class="f250">Theo Jovani, Helene Chanal, Benoıt Blaysat and Michel Grediac</span></p>
</div>
</div>
<div class="v59 ps834 s845 c1304">
<p class="p34 f239"><a onclick="pop&&pop.openPopup('popup128');return false" style="cursor:pointer;"><x-svg class="s814"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps760 s766 c1147">
<div class="v5 ps33 s766 c45">
<div class="v5 ps33 s766 w2">
<div class="v5 ps33 s767 c926">
<div class="v5 ps359 s399 c1148">
<p class="p18 f116">19- Additive Manufacturing</p>
</div>
<div class="v5 ps360 s483 c45">
<div class="v5 ps33 s483 w2">
<div class="v5 ps33 s484 c573">
<div class="v5 ps33 s768 c45">
<div class="v5 ps33 s768 w2">
<div class="v5 ps33 s402 c1149"></div>
<div class="v5 ps761 s769 c1150">
<p class="p18 f164">Machining-induced characteristics of microstructure-supported LPBFIN718 curved thin walls<br><span class="f165">Sarvesh Kumar Mishr, Gaizka Gomez-Escudero, Haizea Gonzalez-Barrio, Amaia Calleja-Ochoa, Silvia Martinez and Luis Norberto Lopez de Lacalle</span></p>
</div>
<div class="v5 ps762 s404 c1151"></div>
</div>
</div>
<div class="v5 ps351 s488 c1152"></div>
</div>
<div class="v5 ps447 s405 c606">
<div class="v5 ps33 s397 c1153">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup129');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s387 c1154">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup130');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c1155">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup131');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps763 s770 c1156">
<p class="p18 f164">Assessment of Additive Manufacturing Surfaces Using X-ray Computed Tomography<br><span class="f165">Cagdas Sen, Gokhan Dursun, Akin Orhangul and Guray Akbulut</span></p>
</div>
<div class="v5 ps764 s771 c1157">
<p class="p18 f164">Revisiting the influence of the scanning speed on surface topography and microstructure of IN718 thin walls in directed energy<br><span class="f165">Michele Brehier, Daniel Weisz-Patrault and Christophe Tournier</span></p>
</div>
</div>
</div>
<div class="v5 ps451 s772 c45">
<div class="v5 ps33 s772 w2">
<div class="v5 ps33 s622 c1158">
<div class="v5 ps33 s623 c1159"></div>
<div class="v5 ps351 s392 c1160"></div>
</div>
<div class="v5 ps765 s773 c603">
<div class="v5 ps33 s774 c557">
<p class="p18 f164">Build orientation effect on Ti6Al4V thin-wall topography by electron beam powder bed fusion<br><span class="f165">Giacomo Maculotti, Gabriele Piscopo, Giovanni Marchiandi, Eleonora Atzeni, Alessandro Salmi and Luca Iuliano</span></p>
</div>
<div class="v5 ps766 s775 c557">
<p class="p18 f164">Evolution of Residual Stresses induced by different L-PBF build orientations along a post-processing chain of 20MnCr5 steel<br><span class="f165">Lucas Robatto, Ronnie Rega, Jose Mascheroni, Arthur Kretzer, Izabel Criscuolo and Anderson Borille</span></p>
</div>
</div>
<div class="v5 ps767 s396 c703">
<div class="v5 ps33 s397 c1161">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup132');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c1162">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup133');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps768 s776 c599">
<div class="v5 ps33 s776 c306">
<div class="v5 ps769 s777 c1163">
<p class="p18"><span class="f162">The effect of pre- and post-heat treatment on hardness and residual stress by laser metal deposition process of tungsten carbide</span><span class="f162"> </span><span class="f192">(not available in replay format)<br></span><span class="f163">Mohammad Rabiey, Philipp W</span><span class="f237">ü</span><span class="f163">rsten, Lukas Senne and Luca Urban</span></p>
</div>
<div class="v5 ps770 s404 c1164"></div>
</div>
<div class="v5 ps771 s387 c1165">
<p class="p3 f143"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor2" class="v5 ps772 s121"></a>
<div class="v5 ps773 s778 c326">
<div class="v5 ps33 s778 c45">
<div class="v5 ps33 s778 w2">
<div class="v5 ps33 s779 c880">
<div class="v5 ps33 s779 c45">
<div class="v5 ps33 s779 w2">
<div class="v5 ps774 s780 c1166">
<p class="p18 f116">20- Composite structures / Surface mechanical treatments</p>
</div>
<div class="v5 ps775 s497 c1167">
<div class="v5 ps33 s781 c45">
<div class="v5 ps33 s781 w2">
<div class="v5 ps33 s402 c1168"></div>
<div class="v5 ps776 s782 c1169">
<p class="p18 f164">Ultrasonic Vibration and Cryogenic assisted drilling of Aluminum-CFRP Composite Stack – An innovative approach</p>
<p class="p18 f165">R. Bertolini, N.Tamil Alagan, A. Gustafsson, E. Savio, A. Ghiotti and S. Bruschi</p>
</div>
</div>
</div>
<div class="v5 ps451 s487 c1170"></div>
<div class="v5 ps351 s386 c1171"></div>
</div>
<div class="v5 ps362 s405 c362">
<div class="v5 ps33 s397 c539">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup134');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps363 s397 c1172">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup135');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c1173">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup136');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps777 s783 c1174">
<p class="p18 f164">Monitoring the Surface Quality for Various Deep Rolling Processes – Limits and Experimental Results<br><span class="f165">Oliver Mai, Karsten Rottger</span></p>
</div>
<div class="v5 ps778 s784 c1175">
<p class="p18 f164">Microstructural influence of consecutive deep rolling of AISI 4140<br><span class="f165">Matthias Hettig and Daniel Meyer</span></p>
</div>
<div class="v5 ps779 s390 c791">
<div class="v5 ps33 s785 c1176"></div>
<div class="v5 ps351 s712 c1177"></div>
</div>
<div class="v5 ps780 s786 c891">
<div class="v5 ps781 s787 c1178">
<p class="p18 f164">Main time-parallel mechanical surface treatment and surface texturing during machining<br><span class="f165">Jannik Schwalm, Felix Mann, Michael Gerstenmeyer, Frederik Zanger and Volker Schulze</span></p>
</div>
<div class="v5 ps782 s788 c557">
<p class="p18 f164">Enhancing surface integrity of A7050-T7451 aluminum alloy by pneumatic machine hammer peening<br><span class="f165">A. Madariaga, M. Cuesta, E. Dominguez, A. Garay,, G. Ortiz-de-Zarate and P.J. Arrazola</span></p>
</div>
</div>
<div class="v5 ps783 s396 c75">
<div class="v5 ps33 s397 c1179">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup137');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s387 c1180">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup138');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps784 s776 c898">
<div class="v5 ps33 s776 c803">
<div class="v5 ps33 s789 c1181">
<div class="v5 ps785 s790 c1182">
<p class="p18 f164">Numerical and experimental investigation on the residual stresses generated by scanning induction hardening<br><span class="f165">Maialen Areitioaurtena, Unai Segurajauregi, Martin Fisk, Mario J. Cabello and Eneko Ukar</span></p>
</div>
</div>
</div>
<div class="v5 ps786 s387 c1183">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup139');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor3" class="v5 ps787 s121"></a>
<div class="v5 ps788 s791 c906">
<div class="v5 ps33 s791 c45">
<div class="v5 ps33 s791 w2">
<div class="v5 ps33 s792 c1184">
<div class="v5 ps33 s792 c45">
<div class="v5 ps33 s792 w2">
<div class="v5 ps774 s793 c1185">
<p class="p18 f116">21- Cutting Processes &amp; Microstructure / Cutting processes &amp; Surface topography</p>
</div>
<div class="v5 ps789 s497 c1186">
<div class="v5 ps33 s794 c45">
<div class="v5 ps33 s794 w2">
<div class="v5 ps33 s402 c1187"></div>
<div class="v5 ps790 s795 c1188">
<p class="p18"><span class="f164">Characterization of deformation-induced martensite by cryogenic turning using eddy current testing<br></span><span class="f165">Lara Vivian Fricke, Hai Nam Nguyen, Jakob Appel, Bernd Breidenstein, Hans J</span><span class="f165">ü</span><span class="f165">rgen Maier, David Zaremba and Sebastian Barton</span></p>
</div>
<div class="v5 ps791 s796 c1189"></div>
</div>
</div>
<div class="v5 ps351 s488 c1190"></div>
</div>
<div class="v5 ps362 s405 c101">
<div class="v5 ps33 s387 c1191">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup140');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps448 s397 c775">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup141');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps352 s387 c776">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup142');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
<div class="v5 ps792 s797 c1192">
<p class="p18 f169">Influence of the cutting edge on the surface integrity in BTA deep hole drilling – part 1: Design of experiments, roughness and forces<br><span class="f170">Robert Schmidt, Simon Strodick, Frank Walther, Dirk Biermann and Andreas Zabel</span></p>
</div>
<div class="v5 ps793 s798 c1193">
<p class="p18 f162">Influence of the cutting edge on the surface integrity in BTA deep hole drilling – part 2: Residual stress, microstructure and microhardness</p>
<p class="p18 f163">Simon Strodick, Robert Schmidt, Dirk Biermann, Andreas Zabel and Frank Walther</p>
</div>
<div class="v5 ps794 s390 c510">
<div class="v5 ps33 s785 c1194"></div>
<div class="v5 ps351 s712 c1195"></div>
</div>
<div class="v5 ps795 s799 c665">
<div class="v5 ps33 s800 c1196">
<p class="p18 f169">An experimental study on surface quality of Al6061-T6 in ultrasonic vibration-assisted milling with minimum quantity lubrication<br><span class="f170">Ramazan Hakkı Namlu, Okan Deniz Yılmaz, Bahram Lotfisadigh and S. Engin Kılıc</span></p>
</div>
<div class="v5 ps796 s801 c1197">
<p class="p18 f162">Application of RISA grinding method to multiple optical glasses<br><span class="f163">Hinata Takamaru, Tappei Kawasato, Kentaro Watanabe, Masahiko Fukuta, Katsutoshi Tanaka, Yusuke Chibc, Hidebumi Kato, Mikinori Naganc and Yasuhiro Kakinuma</span></p>
</div>
</div>
<div class="v5 ps797 s396 c106">
<div class="v5 ps33 s387 c508">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup143');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
<div class="v5 ps357 s397 c1198">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup144');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<div class="v5 ps794 s802 c1199">
<div class="v5 ps33 s802 c368">
<div class="v5 ps33 s803 c1200"></div>
<div class="v5 ps798 s804 c1201">
<p class="p18 f164">Machine learning models for surface roughness monitoring in machining operations<br><span class="f165">Mariane Prado Motta, Cyril Pelaingre, Arnaud Delameziere, Lanouar Ben Ayed and Claude Barlier</span></p>
</div>
</div>
<div class="v5 ps799 s387 c1202">
<p class="p3 f113"><a onclick="pop&&pop.openPopup('popup145');return false" style="cursor:pointer;"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M9 7v8l7-4zm12-4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z'/></svg></x-svg></a></p>
</div>
</div>
</div>
</div>
</div>
<a name="anchor4" class="v5 ps800 s121"></a>
</div>
</div>
</div>
<a name="anchor1" class="v58 ps835 s849"></a>
<div class="btf ps801 v7 s805">
<div class="v5 ps379 s806 c1203">
<p class="p3 f113"><a href="cirpcsi2022.php"><x-svg class="s388"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z'/></svg></x-svg></a></p>
</div>
</div>
<div class="btf v5 ps802 s49 c440">
<div class="v5 ps38 s50 c1204">
<div class="ps39 v7 s51">
<div class="v5 ps40 s52 c45">
<div class="v5 ps33 s52 w2">
<div class="v5 ps41 s53 c563">
<div class="v5 ps33 s54 c45">
<div class="v5 ps33 s55 c32">
<a href="https://www.knowledgeandskills.eu" target="_blank" rel="noopener" class="a2"><picture class="i8 un1472"><source data-srcset="images/transparentks-102-47.php 1x, images/transparentks-204-47.php 2x, images/transparentks-306-66.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)"><source data-srcset="images/transparentks-102-41.php 1x, images/transparentks-204-41.php 2x, images/transparentks-306-65.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)"><source data-srcset="images/transparentks-153-47.php 1x, images/transparentks-306-67.php 2x, images/transparentks-459-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)"><source data-srcset="images/transparentks-153-41.php 1x, images/transparentks-306-41.php 2x, images/transparentks-459-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)"><source data-srcset="images/transparentks-57-51.php 1x, images/transparentks-114-51.php 2x, images/transparentks-171-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)"><source data-srcset="images/transparentks-57-45.php 1x, images/transparentks-114-45.php 2x, images/transparentks-171-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)"><source data-srcset="images/transparentks-71-47.php 1x, images/transparentks-142-141.php 2x, images/transparentks-213-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)"><source data-srcset="images/transparentks-71-41.php 1x, images/transparentks-142-118.php 2x, images/transparentks-213-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)"><source data-srcset="images/transparentks-89-97.php 1x, images/transparentks-178-97.php 2x, images/transparentks-267-39.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)"><source data-srcset="images/transparentks-89-85.php 1x, images/transparentks-178-85.php 2x, images/transparentks-267-38.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)"><source data-srcset="images/transparentks-142-133.php 1x, images/transparentks-284-89.php 2x, images/transparentks-426-39.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)"><source data-srcset="images/transparentks-142-119.php 1x, images/transparentks-284-77.php 2x, images/transparentks-426-38.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)"><img src="images/transparentks-284-77.php" title="knowledge &amp; skills logo" alt="logo" class="un1301 i7"></picture></a>
</div>
<div class="v5 ps42 s56 c31">
<picture class="i8 un1473">
<source data-srcset="images/k-stransparent-110-47.php 1x, images/k-stransparent-220-47.php 2x, images/k-stransparent-330-66.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-110-41.php 1x, images/k-stransparent-220-41.php 2x, images/k-stransparent-330-65.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:479px)">
<source data-srcset="images/k-stransparent-165-47.php 1x, images/k-stransparent-330-67.php 2x, images/k-stransparent-495-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-165-41.php 1x, images/k-stransparent-330-41.php 2x, images/k-stransparent-495-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:767px)">
<source data-srcset="images/k-stransparent-170-45.php 1x, images/k-stransparent-340-45.php 2x, images/k-stransparent-510-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-170-39.php 1x, images/k-stransparent-340-39.php 2x, images/k-stransparent-510-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:959px)">
<source data-srcset="images/k-stransparent-212-47.php 1x, images/k-stransparent-424-97.php 2x, images/k-stransparent-636-19.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-212-41.php 1x, images/k-stransparent-424-82.php 2x, images/k-stransparent-636-18.php 3x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1199px)">
<source data-srcset="images/k-stransparent-265-47.php 1x, images/k-stransparent-530-47.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-265-41.php 1x, images/k-stransparent-530-41.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(max-width:1919px)">
<source data-srcset="images/k-stransparent-424-91.php 1x, images/k-stransparent-848-47.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" type="image/webp" media="(min-width:1920px)">
<source data-srcset="images/k-stransparent-424-83.php 1x, images/k-stransparent-848-41.php 2x" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1x" media="(min-width:1920px)">
<img src="images/k-stransparent-848-41.php" alt="Knowledge an Skills shared by talented engineers" class="un1302 i9">
</picture>
</div>
</div>
<div class="v5 ps43 s57 c564">
<div class="v5 ps33 s57 c45">
<div class="v5 ps33 s58 w2">
<div class="v5 ps33 s59 c1205"></div>
<div class="v5 ps44 s60 c566">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps45 s62 w2">
<div class="v5 ps33 s63 c1206"></div>
<div class="v5 ps46 s64 c568">
<p class="p3 f12"><x-svg class="s61"><svg style='fill:currentColor' height='100%' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><path d='M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z'/></svg></x-svg></p>
</div>
</div>
<div class="v5 ps47 s65 w2">
<div class="v5 ps33 s66 c1207"></div>
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
<div class="v5 ps38 s69 c1208">
<div class="ps38 v7 s70">
<div class="v5 ps50 s71 c572">
<p class="p3 f14"><a href="https://ks-portal.net/">© Knowledge and Skill</a><span class="f14">s Corp. </span><span class="f14">2022. All Rights Reserved</span></p>
</div>
</div>
</div>
</div>
<div id="consentBanner" class="v61 ps836 s850 c1305">
<div class="ps837 v58 s851">
<div class="v59 ps838 s852 c1306">
<p class="p35 f253">Knowledge and Skills uses minimum necessary cookies to optimize the website’s performance. Refusing them may disturb or block your access to some of our services. For further details about this website cookies policy and how to manage them, please see &quot;<span class="f254"><a href="https://ks-conference.net/cookiespolicy.html">Cookies Policy</a></span>&quot; page.</p>
</div>
<div class="v59 ps839 s853 c1307">
<a href="javascript:void(0)" class="denyConsent f255 btn292 v60 s854">Refuse</a>
</div>
<div class="v59 ps840 s853 c1307">
<a href="javascript:void(0)" class="allowConsent f256 btn293 v60 s854">OK</a>
</div>
</div>
</div>
<div id="popup145" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps841">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1308">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1209">
<div class="player un1303 pl128">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-1266.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1210">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1211">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1212">
<a onclick="pop&&pop.closePopup('popup145');return false" style="cursor:pointer;" class="f67 btn259 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup144" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps843">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1309">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1213">
<div class="player un1304 pl129">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-472.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1214">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1215">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1216">
<a onclick="pop&&pop.closePopup('popup144');return false" style="cursor:pointer;" class="f67 btn260 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup143" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps844">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1310">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c219">
<div class="player un1305 pl130">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-448.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1217">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1218">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c201">
<a onclick="pop&&pop.closePopup('popup143');return false" style="cursor:pointer;" class="f67 btn261 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup142" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps845">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1311">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1219">
<div class="player un1306 pl131">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-445.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1220">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1221">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1222">
<a onclick="pop&&pop.closePopup('popup142');return false" style="cursor:pointer;" class="f67 btn262 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup141" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps846">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1312">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c220">
<div class="player un1307 pl132">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-444.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c221">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c222">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c223">
<a onclick="pop&&pop.closePopup('popup141');return false" style="cursor:pointer;" class="f67 btn263 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup140" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps847">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1313">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1223">
<div class="player un1308 pl133">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S21-382.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1224">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1225">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c229">
<a onclick="pop&&pop.closePopup('popup140');return false" style="cursor:pointer;" class="f67 btn264 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup139" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps848">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1314">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1226">
<div class="player un1309 pl134">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-672.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1227">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1228">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1229">
<a onclick="pop&&pop.closePopup('popup139');return false" style="cursor:pointer;" class="f67 btn265 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup138" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps849">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1315">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c238">
<div class="player un1310 pl135">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-450.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1230">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1231">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c230">
<a onclick="pop&&pop.closePopup('popup138');return false" style="cursor:pointer;" class="f67 btn266 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup137" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps850">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1316">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c244">
<div class="player un1311 pl136">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-429.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1232">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1233">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1234">
<a onclick="pop&&pop.closePopup('popup137');return false" style="cursor:pointer;" class="f67 btn267 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup136" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps851">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1317">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1235">
<div class="player un1312 pl137">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-407.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1236">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1237">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1238">
<a onclick="pop&&pop.closePopup('popup136');return false" style="cursor:pointer;" class="f67 btn268 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup135" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps852">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1318">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c245">
<div class="player un1313 pl138">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-402.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c246">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c247">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c248">
<a onclick="pop&&pop.closePopup('popup135');return false" style="cursor:pointer;" class="f67 btn269 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup134" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps853">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1319">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1239">
<div class="player un1314 pl139">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S20-392.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1240">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1241">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c254">
<a onclick="pop&&pop.closePopup('popup134');return false" style="cursor:pointer;" class="f67 btn270 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup146" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps854">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1320">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1242">
<div class="player un1315 pl140">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-420.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1243">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1244">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1245">
<a onclick="pop&&pop.closePopup('popup146');return false" style="cursor:pointer;" class="f67 btn271 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup133" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps855">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1321">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c263">
<div class="player un1316 pl141">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-627.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1246">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1247">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c255">
<a onclick="pop&&pop.closePopup('popup133');return false" style="cursor:pointer;" class="f67 btn272 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup132" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps856">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1322">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c269">
<div class="player un1317 pl142">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-426.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1248">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1249">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1250">
<a onclick="pop&&pop.closePopup('popup132');return false" style="cursor:pointer;" class="f67 btn273 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup131" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps857">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1323">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1251">
<div class="player un1318 pl143">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-509.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1252">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1253">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1254">
<a onclick="pop&&pop.closePopup('popup131');return false" style="cursor:pointer;" class="f67 btn274 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup130" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps858">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1324">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c270">
<div class="player un1319 pl144">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-586.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c271">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c272">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c273">
<a onclick="pop&&pop.closePopup('popup130');return false" style="cursor:pointer;" class="f67 btn275 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup129" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps859">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1325">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c1255">
<div class="player un1320 pl145">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S19-412.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1256">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1257">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c279">
<a onclick="pop&&pop.closePopup('popup129');return false" style="cursor:pointer;" class="f67 btn276 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup128" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps860">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1326">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c585">
<div class="player un1321 pl146">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-463.mov" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1258">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1259">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1260">
<a onclick="pop&&pop.closePopup('popup128');return false" style="cursor:pointer;" class="f67 btn277 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup127" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps861">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1327">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c288">
<div class="player un1322 pl147">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-461.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1261">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1262">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c280">
<a onclick="pop&&pop.closePopup('popup127');return false" style="cursor:pointer;" class="f67 btn278 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup126" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps862">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1328">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c294">
<div class="player un1323 pl148">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-452.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1263">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1264">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1265">
<a onclick="pop&&pop.closePopup('popup126');return false" style="cursor:pointer;" class="f67 btn279 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup125" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps863">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1329">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c592">
<div class="player un1324 pl149">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-446.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1266">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1267">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c1268">
<a onclick="pop&&pop.closePopup('popup125');return false" style="cursor:pointer;" class="f67 btn280 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup124" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps864">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1330">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c295">
<div class="player un1325 pl150">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-386.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c296">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c297">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c298">
<a onclick="pop&&pop.closePopup('popup124');return false" style="cursor:pointer;" class="f67 btn281 v6 s239"> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="popup123" style="transform:translate3d(-999999px,0,0)" data-popup-type="2" data-popup-group="0" class="ps865">
<div onclick="event.stopPropagation()" class="popup v62 ps842 s855 c1331">
<div class="ps38 v7 s421">
<div class="v5 ps179 s234 c45">
<div class="v5 ps180 s235 c597">
<div class="player un1326 pl151">
<video preload="metadata" poster="images/poster-3592-6.php" class="videoinline vd3" crossorigin>
<source src="https://d3jlfcc24xgq63.cloudfront.net/S18-441.mp4" type="video/mp4">
</video>
</div>
</div>
<div class="v5 ps181 s236 c1269">
<div class="v5 ps33 s236 c45">
<div class="v5 ps33 s237 c1270">
<p class="p13 f66"><a>Close</a></p>
</div>
<div class="v5 ps182 s238 c304">
<a onclick="pop&&pop.closePopup('popup123');return false" style="cursor:pointer;" class="f67 btn282 v6 s239"> </a>
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

<script>dpth="/";!function(){for(var e=["js/popup.773f77.js","js/plyr3.773f77.js","js/consent.773f77.js","js/jquery.773f77.js","js/cirpcsi2022session2-3.2839b9.js"],n={},s=-1,t=function(t){var o=new XMLHttpRequest;o.open("GET",e[t],!0),o.onload=function(){for(n[t]=o.responseText;s<5&&void 0!==n[s+1];){s++;var e=document.createElement("script");e.textContent=n[s],document.body.appendChild(e)}},o.send()},o=0;o<5;o++)t(o)}();
</script>
</body>
</html>