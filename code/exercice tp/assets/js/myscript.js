function verifierFormulaire() {
  let valider = true;

  // Validation des champs (comme avant, ajustez selon vos besoins)
  let password = document.getElementById('password');
  let pwd = document.getElementById('pwd'); 
  if (password.value.length < 8) {
      password.classList.add('border-danger');
      pwd.classList.remove('invisible');
      valider = false;
  } else {
      password.classList.remove('border-danger');
      pwd.classList.add('invisible');
  }

  let name = document.getElementById('name');
  if (name.value.trim() === "") {
      name.classList.add('border-danger');
      valider = false;
  } else {
      name.classList.remove('border-danger');
  }

  let prénom = document.getElementById('prénom');
  if (prénom.value.trim() === "") {
      prénom.classList.add('border-danger');
      valider = false;
  } else {
      prénom.classList.remove('border-danger');
  }

  let message = document.getElementById('message');
  if (message.value.trim() === "") {
      message.classList.add('border-danger');
      valider = false;
  } else {
      message.classList.remove('border-danger');
  }

  let email = document.getElementById('email');
  if (!email.value.includes('@') || !email.value.includes('.')) {
      email.classList.add('border-danger');
      valider = false;
  } else {
      email.classList.remove('border-danger');
  }

  let cocher = document.getElementById('formCheck-1');
  let age = document.getElementById('label');
  if (!cocher.checked) {
      age.classList.add('text-danger');
      valider = false;
  } else {
      age.classList.remove('text-danger');
  }

  return valider; // Si `true`, le formulaire sera soumis
}
