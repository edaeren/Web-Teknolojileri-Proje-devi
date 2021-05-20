/*const form=document.getElementById('form');
const ad=document.getElementById('ad');
const soyad=document.getElementById('soyad');
const mail=document.getElementById('email');
const telNo=document.getElementById('telNo');
//var elem=document.querySelector('small');



form.addEventListener('submit', function(e){
  e.preventDefault();

  checkInputs();
});

const checkInputs=()=>{

  const adValue=ad.value.trim();
  const soyadValue=soyad.value.trim();
  const mailValue=mail.value.trim();
  const telNoValue=telNo.value.trim();

    if(adValue=== ''){
      setErrorFor(ad, 'ad')
    }


  
}


const setErrorFor=(input,message)=>{
  const formControl=input.parrentElement;  /*parentElement= inputu kapsayan kısım
  const small= document.querySelector('small' ) formControl.querySelector('small');
  formControl.className='form-control error'; /*hatada gerçekleşecek
  small.innerText= message;
}

function setSuccessFor(input){
  const formControl=input.parrentElement;
  formControl.className='form-control success';  /*success classını ekle
}
*/


















/*const form = document.querySelector("form[name='contact-form']");
const nameInput = document.querySelector("input[name='name']");
const SoyadInput = document.querySelector("input[name='soyad']");
const emailInput = document.querySelector("input[name='email']");
const phoneInput = document.querySelector("input[name='phone']");
const messageInput = document.querySelector("textarea[name='message']");

nameInput.isValid = () => !!nameInput.value;
soyadInput.isValid = () => !!soyad.value;
emailInput.isValid = () => isValidEmail(emailInput.value);
phoneInput.isValid = () => isValidPhone(phoneInput.value);
messageInput.isValid = () => !!messageInput.value;

const inputFields = [nameInput,soyadInput, emailInput, phoneInput, messageInput];

const isValidEmail = (email) => {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const isValidPhone = (phone) => {
  const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
  return re.test(String(phone).toLowerCase());
};

let shouldValidate = false;
let isFormValid = false;

const validateInputs = () => {
  console.log("we are here");
  if (!shouldValidate) return;

  isFormValid = true;
  inputFields.forEach((input) => {
    input.classList.remove("invalid");
    input.nextElementSibling.classList.add("hide");

    if (!input.isValid()) {
      input.classList.add("invalid");
      isFormValid = false;
      input.nextElementSibling.classList.remove("hide");
    }
  });
};

form.addEventListener("submit", (e) => {
  e.preventDefault();
  shouldValidate = true;
  validateInputs();
  if (isFormValid) {
    // TODO: DO AJAX REQUEST
  }
});

inputFields.forEach((input) => input.addEventListener("input", validateInputs));
*/