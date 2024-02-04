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


function DetectAndServeCOD(){
    let os = getMobileOperatingSystem();
    if (os == "Android") {
        window.location.href = "https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter"; 
    } else if (os == "iOS") {
        window.location.href = "https://apps.apple.com/ca/app/call-of-duty-mobile/id1287282214";
    /*
    } else if (os == "Windows Phone") {
        window.location.href = "https://desktop.telegram.org";
    */
    } else {
        window.location.href = "https://www.callofduty.com/ca/en/";
    }
}

document.getElementsByClassName("Tdownload").innerHTML = telegramdownload();
