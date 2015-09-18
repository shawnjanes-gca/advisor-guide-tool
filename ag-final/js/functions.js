function getTopic(str) {
    if (str == "") {
        document.getElementById("txtType").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtType").innerHTML = xmlhttp.responseText;
						document.getElementById("txtCategory").innerHTML = "<b>Discipline sub-categories will be listed here.</b>";
						document.getElementById("txtTitle").innerHTML = "<b>Guide titles will be listed here.</b>";
						document.getElementById("txtGuide").innerHTML = "<b>Complete Advisor Guide will display here.</b>";
						//document.getElementById("cssfile").href = str + ".css";
						document.getElementById("cssfile").href = "css/education_advisor_guide.css";
        }
    }
    xmlhttp.open("GET", "getTopic.php?discipline=" + str, true);
    xmlhttp.send();
}

function getCategory(str) {
    if (str == "") {
        document.getElementById("txtCategory").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtCategory").innerHTML = xmlhttp.responseText;
						document.getElementById("txtTitle").innerHTML = "<b>Guide titles will be listed here.</b>";
						document.getElementById("txtGuide").innerHTML = "<b>Complete Advisor Guide will display here.</b>";
						//document.getElementById("cssfile").href = str + ".css";
						document.getElementById("cssfile").href = "css/education_advisor_guide.css";
        }
    }
    xmlhttp.open("GET", "getCategory.php?guidetype=" + str, true);
    xmlhttp.send();
}

function getTitle(str) {
    if (str == "") {
        document.getElementById("txtTitle").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtTitle").innerHTML = xmlhttp.responseText;
						document.getElementById("txtGuide").innerHTML = "<b>Complete Advisor Guide will display here.</b>";
        }
    }
    xmlhttp.open("GET", "getTitle.php?subcategory=" + str, true);
    xmlhttp.send();
}

function getGuide(str) {
    if (str == "") {
        document.getElementById("txtGuide").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtGuide").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "getGuide.php?title=" + str, true);
    xmlhttp.send();
}