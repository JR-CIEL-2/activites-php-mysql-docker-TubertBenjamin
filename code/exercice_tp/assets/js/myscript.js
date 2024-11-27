function verifierFormulaire() {
  let isValid = true; // Drapeau pour suivre la validité

  // Champ "name"
  const name = document.getElementById('name');
  if (name.value.trim() === "") {
      name.classList.add('border-danger');
      name.classList.remove('border-valide');
      isValid = false;
  } else {
      name.classList.remove('border-danger');
      name.classList.add('border-valide');
  }

  // Champ "prénom"
  const prénom = document.getElementById('prénom');
  if (prénom.value.trim() === "") {
      prénom.classList.add('border-danger');
      prénom.classList.remove('border-valide');
      isValid = false;
  } else {
      prénom.classList.remove('border-danger');
      prénom.classList.add('border-valide');
  }

  // Champ "email"
  const email = document.getElementById('email');
  if (!email.value.includes('@') || !email.value.includes('.')) {
      email.classList.add('border-danger');
      email.classList.remove('border-valide');
      isValid = false;
  } else {
      email.classList.remove('border-danger');
      email.classList.add('border-valide');
  }

  // Champ "password"
  const password = document.getElementById('password');
  const pwdWarning = document.getElementById('pwd');
  if (password.value.length < 8) {
      password.classList.add('border-danger');
      pwdWarning.classList.remove('invisible');
      password.classList.remove('border-valide');
      isValid = false;
  } else {
      password.classList.remove('border-danger');
      pwdWarning.classList.add('invisible');
      password.classList.add('border-valide');
  }

  // Champ "message"
  const message = document.getElementById('message');
  if (message.value.trim() === "") {
      message.classList.add('border-danger');
      message.classList.remove('border-valide');
      isValid = false;
  } else {
      message.classList.remove('border-danger');
      message.classList.add('border-valide');
  }

  // Vérification de la case à cocher
  const checkbox = document.getElementById('formCheck-1');
  const ageLabel = document.getElementById('label');
  if (!checkbox.checked) {
      ageLabel.classList.add('text-danger');
      ageLabel.classList.remove('text-valide');
      isValid = false;
  } else {
      ageLabel.classList.remove('text-danger');
      ageLabel.classList.add('text-valide');
  }
  if (isValid == true) {
    document.querySelector('form').submit();
  }
  return isValid;
}
