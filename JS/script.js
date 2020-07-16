$( document ).ready(function() {
    new WOW().init();
  });
  function validEmail(){
    let outputs = [ 'email'];
    outputs[0] = document.forms['form']['user_email'].value;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if (!outputs[0].match(mail)){
      document.getElementsByTagName('small')[0].style.display = 'block';
      return false;
    }
   
  }