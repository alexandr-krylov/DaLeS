(function(){
  /*save appointments*/
  let i = 0;
  let button = document.querySelector('input[type="submit"]');
  button.onclick = function(){
    i++;
    let name = document.getElementsByName("name")[0].value;
    let surname = document.getElementsByName("surname")[0].value;
    let mobileNumber = document.getElementsByName("mobile-number")[0].value;
    console.log(name, surname, mobileNumber);
    // localStorage.setItem("appointment" + i, {})
    alert("pressed " + i);
    return false;
  }
  console.log(button);
  // button.preventDefault();
  // if(ele.addEventListener){
  //   ele.addEventListener("submit", callback, false);  //Modern browsers
  // }else if(ele.attachEvent){
  //   ele.attachEvent('onsubmit', callback);            //Old IE
  // }
})();
