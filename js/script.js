(function(){
  /*save appointments*/
  // let i = 0;
  let storage = window.localStorage;
  let keyPrefix = "appointment";
  let button = document.querySelector('input[type="submit"]');
  button.onclick = function(){
    // i++;
    let recordName = getNextKey(storage, "appointment");
    let name = document.getElementsByName("name")[0].value;
    let surname = document.getElementsByName("surname")[0].value;
    let mobileNumber = document.getElementsByName("mobile-number")[0].value;
    let problem =  (document.getElementsByName("problem")[0]).value;
    let dateTime = document.querySelector('form [type="date"]').value + ' ' +
    document.querySelector('form [type="time"]').value;
    console.log(name, surname, mobileNumber, problem, dateTime);
    console.log(recordName);
    let storeData = JSON.stringify({ clientName: name,
      surname: surname,
      mobileNumber: mobileNumber,
      problem: problem,
      datetime: dateTime});
    console.log(storeData);
    storage.setItem(recordName, storeData);
    console.log(storage.getItem(recordName));
    saveCompleted(storage, keyPrefix);
    return false;
  }
  // button.preventDefault();
  // if(ele.addEventListener){
  //   ele.addE
})();

function getNextKey(storage, prefix){
  let i = 1;
  while(storage.getItem(prefix + i)){
    i++;
  }
  return prefix + i;
}

function saveCompleted(storage, prefix){
  let  i = 1;
  while(storage.getItem(prefix + i)){
    i++;
  }
  if (storage.getItem(prefix + (i - 1))) {
    alert("record saved. key = " + prefix + i + ", value = " + storage.getItem(prefix + (i - 1)) +
      ". total records " + (i - 1));
  } else {
    alert("we have problems!!!");
  }
}
