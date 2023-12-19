function limit() {
  if (this.value.length > this.maxLength)
    this.value = this.value.slice(0, this.maxLength);
}

function formatar(campo) {
  var cpf = campo.value.replace(/\D/g, "");
  cpf = cpf.replace(/(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
  campo.value = cpf;
}
