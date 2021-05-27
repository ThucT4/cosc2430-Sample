// this function returns false to prevent submission
function checkSubmit() {
  // get the select element
  select_ele = document.querySelector("#duration");
  // get its value
  v = select_ele.value;
  // remember, I assigned '' to the value attribute of the "Select one" option
  if (v == '') {
    alert('You must select a value');
    return false;
  }
  return true;
}

// this function display my ID in the location of full name
// the easiest way is just assign an "id" to full name heading
function showID() {
  id = "s123456";
  ele = document.querySelector("#full_name");
  ele.innerHTML = id;
  // call setInterval() to execute a function after a period
  setInterval(restoreName, 3000);
}

// this function displays my full name in the same location again
function restoreName() {
  myname = "Dang Tran Tri";
  ele = document.querySelector("#full_name");
  ele.innerHTML = myname;
}