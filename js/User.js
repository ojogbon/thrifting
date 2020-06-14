class User {
    constructor(url) {
        this.url = url;
    }

    /***
     * this method gets form and returns all content,
     * it first of all get the form, check if empty then all,
     * after all it returns every aside button (submit)
     * @param  none
     * **/
    getFormData () {
        // getting form ready
        const formElements = document.querySelector(".make-new-input").elements;

        // checking for emptiness
        if (formElements == null){
            alert("Form Not Available Please set form name!");
        }else {
            const  fort = new FormData();
            for (var i = 0; i < formElements.length; i++) {
                if (formElements[i].type != "submit" ) {

                    if (formElements[i].type == "file"){
                        for (const  file of formElements[i].files){
                            fort.append("myFiles[]",file);
                        }
                    }else {
                        fort.append(formElements[i].name, formElements[i].value);
                    }

                }
            }

            // return array.join('&');
            return fort;
        }
    }

    /***
     * * this method is for sending data into controller
     *   this gets form content firstly then it send
     *   via ajax to the controller for proccess
     *   this method uses the URL path that comes from the class constructor at initiation point
     *   @param null
     * ***/
    SendToController () {
        // send to controller via ajax, return message as response
        const forms = document.querySelector('.make-new-input');
        const xhr = new XMLHttpRequest();
        xhr.open("post",this.url,true);
        xhr.onreadystatechange = function () {

            if (xhr.readyState == 4 && xhr.status  == 200) {
                if (xhr.responseText != "Fields can't be empty") {

                    for(var s = 0 ; s < forms.length; s ++){

                        if (forms[s].type != "submit"){
                            forms[s].value = "";
                        }
                        console.log("b")
                    }
                    alert('Done!');
                }else {
                              alert(xhr.responseText);
                }
            }
        }
        xhr.send(this.getFormData());
    }

    fetchSchool () {
        const username = document.querySelector('.login-for-form').elements[0].value;
        const password = document.querySelector('.login-for-form').elements[1].value;
        const url = `../includes/User.php?key=1234567opiuyt&method=selectall&password=${password}&username=${username}`;
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {

                let dbContent = xhr.responseText;
                console.log(dbContent+"  ggggggggggggo")
                if(dbContent == 1){
                    window.location.replace("../Me");
                }else {
                  alert(" Email or password not valid");
                }
            }
        }
        xhr.send();
    }

    doClick (){

        const reg = document.querySelector(".registerCover");
        const logIN = document.querySelector(".logIn");
        const agreeded = document.querySelector(".agreeded");

        document.querySelector(".add-to-btn").addEventListener('click',eve => {
            eve.preventDefault();
          if(agreeded.checked){
            this.SendToController ();
          }else {
            alert("We need you to accept Terms and Condition in order to continue ")
          }
        });


        document.querySelector(".login-dope-card").addEventListener('click',eve => {
            eve.preventDefault();
            console.log("Hello!");
            this.fetchSchool();

        });
        document.querySelector(".alreadyAmember").addEventListener('click',eve =>{
            eve.preventDefault();
            console.log("Sage!");
            logIN.style.display = "flex";
            reg.style.display = "none";
        });

        document.querySelector(".notYetAMember").addEventListener('click',eve =>{
            eve.preventDefault();
            console.log("Sage!");
            reg.style.display = "flex";
            logIN.style.display = "none";

        });

    }


}

const user = new User("../includes/User.php?key=1234567opiuyt&method=insert");
user.doClick();
