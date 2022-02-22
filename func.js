//changing the activation
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("iuHzlU");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("ACTIVE");
        current[0].className = current[0].className.replace(" ACTIVE", "");
        this.className += " ACTIVE";
    });
}

//check login or logout
function loginorout() {
    if (document.getElementById('in'))
        document.getElementById('login-form').style.display = 'block';
    if (document.getElementById('out'))
        location.href = "php/logout.php"
}

//pop out form register
function register() {
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');

    x.style.left = '-400px';
    y.style.left = '50px';
    z.style.left = '100px';
}

//checking register format
document.querySelector('.rbutton').onclick = function () {
    var password = document.querySelector('.password').value,
        confirmPassword = document.querySelector('.confirmPassword').value,
        checkbox = document.querySelector('.checkbox:checked') == null;
    if (password != confirmPassword)
        alert("輸入的密碼不匹配");
    else if (checkbox)
        alert("請同意服務協議");
}

//pop out form login
function login() {
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');
    x.style.left = '50px';
    y.style.left = '450px';
    z.style.left = '0px';
}

var cbutton;
//pop out change currency
function change_currency(a) {
    document.getElementById('currency').style.display = 'block';
    cbutton = a;
}

//for leaving the pop out form
var body2 = document.getElementById('login-form');
var except2 = document.getElementById("form-box");
body2.addEventListener("click", function () {
    body2.style = "disable: none;";
}, false);
except2.addEventListener("click", function (ev) {
    ev.stopPropagation();
}, false);

var body = document.getElementById('currency');
var except = document.getElementById("form-box2");
body.addEventListener("click", function () {
    body.style = "disable: none;";
}, false);
except.addEventListener("click", function (ev) {
    ev.stopPropagation();
}, false);

//input value and only number
function setInputFilter(textbox, inputFilter, tmp) {
    ["input", "keydown", "keyup"].forEach(function (event) {
        textbox.addEventListener(event, function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
            if (tmp) {
                var x = document.getElementById("sinput").value;
                document.getElementById("sinput").setAttribute('value', x);
                var x = document.getElementById("winput").value;
                document.getElementById("winput").setAttribute('value', x);
            } else {
                var x = document.getElementById("minput").value;
                document.getElementById("minput").setAttribute('value', x);
                var x = document.getElementById("dinput").value;
                document.getElementById("dinput").setAttribute('value', x);
                var x = document.getElementById("tinput").value;
                document.getElementById("tinput").setAttribute('value', x);
            }
        });
    });
}

setInputFilter(document.getElementById("minput"), function (value) {
    return /^[0-9]*[.,]?[0-9]*$/.test(value);
}, 0);

setInputFilter(document.getElementById("sinput"), function (value) {
    return /^[0-9]*[.,]?[0-9]*$/.test(value);
}, 1);

setInputFilter(document.getElementById("dinput"), function (value) {
    return /^[0-9]*[.,]?[0-9]*$/.test(value);
}, 0);

setInputFilter(document.getElementById("winput"), function (value) {
    return /^[0-9]*[.,]?[0-9]*$/.test(value);
}, 1);

setInputFilter(document.getElementById("tinput"), function (value) {
    return /^[0-9]*[.,]?[0-9]*$/.test(value);
}, 1);

//main btn sub btn switch
function ms_switch() {
    m = document.getElementById("mbtn").src;
    s = document.getElementById("sbtn").src;
    document.getElementById("mbtn").src = s;
    document.getElementById("sbtn").src = m;
    m = document.getElementById("mname").textContent;
    s = document.getElementById("sname").textContent;
    document.getElementById("mname").textContent = s;
    document.getElementById("sname").textContent = m;
    m = document.getElementById('mb').textContent;
    s = document.getElementById("sb").textContent;
    document.getElementById("mb").textContent = s;
    document.getElementById("sb").textContent = m;
    m = document.getElementById('minput').value;
    s = document.getElementById("sinput").value;
    document.getElementById("minput").value = s;
    document.getElementById("sinput").value = m;
}

function select(a) {
    if (cbutton == 'main') {
        document.getElementById("mbtn").src = "./graph/" + a.toLowerCase() + ".png";
        document.getElementById("mname").textContent = a;
        document.getElementById('currency').style = "disable: none";
        document.getElementById("Dbtn").src = "./graph/" + a.toLowerCase() + ".png";
        document.getElementById("dname").textContent = a;
        document.getElementById('currency').style = "disable: none";
        document.getElementById("tbtn").src = "./graph/" + a.toLowerCase() + ".png";
        document.getElementById("tname").textContent = a;
        document.getElementById('currency').style = "disable: none";
    }
    else {
        document.getElementById("sbtn").src = "./graph/" + a.toLowerCase() + ".png";
        document.getElementById("sname").textContent = a;
        document.getElementById('currency').style = "disable: none";
        document.getElementById("wbtn").src = "./graph/" + a.toLowerCase() + ".png";
        document.getElementById("wname").textContent = a;
        document.getElementById('currency').style = "disable: none";
    }
}

var cbtn = document.getElementById('cbtn');
var dbtn = document.getElementById('dbtn');
var wdbtn = document.getElementById('wdbtn');
var tbtn = document.getElementById('Tbtn');
var intervalID = setInterval(function () {
    if (document.getElementById('out')) {
        if (!document.getElementById("minput").value) {
            cbtn.textContent = "輸入數額";
            cbtn.setAttribute('disabled', true);
            if (!cbtn.classList.contains('heSbaf'))
                cbtn.className += " heSbaf";
        } else if (document.getElementById('sbtn').src == "http://127.0.0.1/demo/graph/null.png") {
            cbtn.textContent = "選擇貨幣";
            cbtn.setAttribute('disabled', true);
        }
        else if (parseFloat(document.getElementById("minput").value) > parseFloat(document.getElementById("mb").textContent)) {
            cbtn.textContent = "餘額不足";
            cbtn.setAttribute('disabled', true);
        }
        else if (document.getElementById("sinput").value == '0.00000' || document.getElementById("sinput").value == 'Infinity') {
            cbtn.textContent = "暫無報價";
            cbtn.setAttribute('disabled', true);
        }
        else {
            cbtn.textContent = "兌換";
            cbtn.removeAttribute('disabled');
            if (!cbtn.classList.contains('heSbaf'))
                cbtn.className += " heSbaf";
        }
        if (!document.getElementById("tinput").value) {
            tbtn.textContent = "輸入數額";
            tbtn.setAttribute('disabled', true);
            if (!tbtn.classList.contains('heSbaf'))
                tbtn.className += " heSbaf";
        }
        else if (parseFloat(document.getElementById("tinput").value) > parseFloat(document.getElementById("tb").textContent)) {
            tbtn.textContent = "餘額不足";
            tbtn.setAttribute('disabled', true);
        }
        else if (!document.getElementById("Einput").value) {
            tbtn.textContent = "輸入E-mail";
            tbtn.setAttribute('disabled', true);
        }
        else {
            tbtn.textContent = "轉帳";
            tbtn.removeAttribute('disabled');
        }
        if (!document.getElementById("dinput").value) {
            dbtn.setAttribute('disabled', true);
        }
        else
            dbtn.removeAttribute('disabled');
        if (!document.getElementById("winput").value) {
            wdbtn.setAttribute('disabled', true);
        }
        else if (parseFloat(document.getElementById("winput").value) > parseFloat(document.getElementById("wb").textContent)) {
            wdbtn.setAttribute('disabled', true);
        }
        else
            wdbtn.removeAttribute('disabled');

    }
}, 10);