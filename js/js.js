// function checksiginup(){
//     var ok=false;
//     event.preventDefault();
//    //document.write( document.forms["form"]["firstName"].value);
//
//     if( document.forms["form"]["firstName"].value=="" ){
//
//
//         var ok=false;
//
//         document.forms["form"]["firstName"].style.borderColor="#ff0000";
//
//
//     }else {
//         document.forms["form"]["firstName"].style.borderColor="#ACACAC";
//         var ok=true;
//
//     }
//     if( document.forms["form"]["secondName"].value== ""){
//         document.forms["form"]["secondName"].style.borderColor="#ff0000";
//
//         var ok=false;
//     }else {var ok=true;document.forms["form"]["secondName"].style.borderColor="#ACACAC";}
//     if (document.forms["form"]["Email"].value==""){
//         document.forms["form"]["Email"].style.borderColor="#ff0000";
//
//         var ok=false;
//     }else {var ok=true;document.forms["form"]["Email"].style.borderColor="#ACACAC";}
//     if (document.forms["form"]["password"].value==""){
//         document.forms["form"]["password"].style.borderColor="#ff0000";
//
//         var ok=false;
//     }else {var ok=true;document.forms["form"]["password"].style.borderColor="#ACACAC";}
//  if (ok){
//     // document.write("kkk")
//     // document.getElementById("insert").innerHTML='<?php include_once ("insertuser.php")?>';
//
//      createCookie("omar","true","10");
//      //return true
//   }
// }
// function createCookie(name, value, days) {
//     var expires;
//
//     if (days) {
//         var date = new Date();
//         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//         expires = "; expires=" + date.toGMTString();
//     }
//     else {
//         expires = "";
//     }
//
//     document.cookie = escape(name) + "=" +
//         escape(value) + expires + "; path=/";
// }



function check_v_pass(field, output) {
    pass_buf_value = document.getElementById(field).value;
    pass_level = 0;
    if (pass_buf_value.match(/[a-z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[A-Z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[0-9]/g)) {
        pass_level++;
    }

    if (pass_buf_value.length < 5) {

       return false;

    } else if (pass_buf_value.length >= 20) {

        pass_level++;

    }
      output_val = '';
        switch (pass_level) {

        case 1: output_val='Weak'; break;

        case 2: output_val='Normal'; break;

        case 3: output_val='Strong'; break;

        case 4: output_val='Very strong'; break;

        default: output_val='Very weak'; break;

    }
    document.getElementById(output).innerHTML = output_val;
if (pass_level<=1){
    document.getElementById(field).style.borderColor="#ff0000";
    return false;
}else {
    document.getElementById(field).style.borderColor = "#ced4da";



    return true;
}
}
function check_v_mail(field) {
    fld_value = document.getElementById(field).value;

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(fld_value.match(re)) {
      document.getElementById(field).style.borderColor = "#ced4da";
        return true;

    }else {
        document.getElementById(field).style.borderColor  = "#ff0000";
        return false;
    }

}

function valid_text(field) {
    length_df = document.getElementById(field).value;

   // var letters = /^[A-Za-z]+$/;
    if(length_df !="") {
        document.getElementById(field).style.borderColor = "#ced4da";
        return true;
    } else {
       document.getElementById(field).style.borderColor = "#ff0000";

        return false ;
    }
}
function validate_all() {

    t1 = valid_text('firstName');
    t2 = valid_text('secondName');
    t3 = check_v_mail('Email');
    t4 = check_v_pass('password', 'outbutpass');
    //errorlist = '';
    error=true;
           if (! t1) {
        error=false;
    }
    if (! t2) {
        error=false;
    }

    if (! t3) {
        error=false;
    }
    if (! t4) {
        error=false;
    }


    if (! error) {
        return false;
    }

    return true;
    }
function check_input() {


    if (! valid_text('title')){
        return false;
    }

   if (! valid_text('details')){
       return false;
   }


   return true

}
function checksignin() {

    if(! check_v_mail('Email')){
        return false;
    }
    if (!valid_text('password')){
        return false;
    }


    return true;
}