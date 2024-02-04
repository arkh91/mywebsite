/*

function detectOS(){
   if (navigator.userAgent.indexOf("Win")!=-1) return "Windows";
   if (navigator.userAgent.indexOf("Mac")!=-1) return "MacOS";
   if (navigator.userAgent.indexOf("Linux")!=-1) return "Linux";
   if (navigator.userAgent.indexOf("OpenBSD")!=-1) return "OpenBSD";
   if (navigator.userAgent.indexOf("FreeBSD")!=-1) return "FreeBSD";
   if (navigator.userAgent.indexOf("NetBSD")!=-1) return "NetBSD";
   return undefined;
}
*/
//https://stackoverflow.com/questions/35430336/redirect-users-to-itunes-app-store-or-google-play-store
function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

      // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
        return "Windows Phone";
    }

    if (/android/i.test(userAgent)) {
        return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }

    return "unknown";
}


function DetectAndServe(){
    let os = getMobileOperatingSystem();
    if (os == "Android") {
        window.location.href = "https://play.google.com/store/apps/details?id=org.telegram.messenger"; 
    } else if (os == "iOS") {
        window.location.href = "https://apps.apple.com/us/app/telegram-messenger/id686449807";
    } else if (os == "Windows Phone") {
        window.location.href = "https://desktop.telegram.org";
    } else {
        window.location.href = "https://desktop.telegram.org";
    }
}

document.getElementsByClassName("Tdownload").innerHTML = telegramdownload();

/*
function myFunction(a, b) {
  return a * b;
}
document.getElementById("demo").innerHTML = myFunction(10, 2); 
alert (myFunction (10, 3));
*/
